<?php

require('controller/frontend.php');
require('controller/backend.php');

try {
    if (isset($_GET['action'])) {
        if ($_GET['action'] == 'listConfig') {
            listConfig();
        } elseif ($_GET['action'] == 'processeur') {
            listCPU();
        } elseif ($_GET['action'] == 'alimentation') {
            listPSU();
        } elseif ($_GET['action'] == 'boitier') {
            listCase();
        } elseif ($_GET['action'] == 'carte graphique') {
            listGraph();
        } elseif ($_GET['action'] == 'carte mère') {
            listMB();
        } elseif ($_GET['action'] == 'disque dur') {
            listHD();
        } elseif ($_GET['action'] == 'mémoire') {
            listMemory();
        }
        // inscription start
        elseif ($_GET['action'] == 'displayInscription') {
            require('view/frontend/inscriptionView.php');
        } elseif ($_GET['action'] == 'inscription') {
            if (isset($_POST['formInscription'])) {
                $pseudo = htmlspecialchars($_POST['pseudo']);
                $mail = htmlspecialchars($_POST['mail']);
                $mail2 = htmlspecialchars($_POST['mail2']);
                //$password = sha1($_POST['password']);
                //$password2 = sha1($_POST['password2']);
                $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
                if (!empty($_POST['pseudo']) and !empty($_POST['mail']) and !empty($_POST['mail2']) and !empty($_POST['password']) and !empty($_POST['password2'])) {
                    $pseudoLength = strlen($pseudo);
                    if ($pseudoLength <= 20) {
                            if ($mail == $mail2) {
                                if (filter_var($mail, FILTER_VALIDATE_EMAIL)) {
                                    $mailExist = mailExist($mail);
                                    if ($mailExist == 0) {
                                            inscription($pseudo, $mail, $password);
                                    } else {
                                        throw new Exception('Adresse mail déjà utilisée.');
                                    }
                                } else {
                                    throw new Exception('L\'adresse mail renseignée n\'est pas valide.');
                                }
                            } else {
                                throw new Exception('Les adresses mail ne correspondent pas.');
                            }                  
                    } else {
                        throw new Exception('Votre pseudo ne peut dépasser 20 caractères');
                    }
                } else {
                    throw new Exception('Tous les champs doivent être complétés');
                }
            }
        }
        // inscription end
        // connexion start
        elseif ($_GET['action'] == 'displayConnexion') {
            require('view/frontend/connexionView.php');
        }
        elseif ($_GET['action'] == 'connexion') {
            if(isset($_POST['formConnexion'])) {
                if(!empty($_POST['mailCo']) AND !empty($_POST['passwordCo'])) {
                    $mailCo = htmlspecialchars($_POST['mailCo']);
                    if (mailExist($mailCo) == 1) {                       
                        $passExist = passExist($mailCo);                        
                        $passwordCo = password_verify($_POST['passwordCo'], $passExist['password']);
                        if ($passwordCo == true) {
                            session_start();
                            $userInfo = getUser($mailCo);
                            $_SESSION['id'] = $userInfo['id'];
                            $_SESSION['pseudo'] = $userInfo['pseudo'];
                            $_SESSION['mail'] = $userInfo['mail'];
                            header('Location: index.php');
                        } else {
                            throw new Exception('Mot de passe incorrect');
                        }
                    } else {
                        throw new Exception('Adresse mail invalide.');
                    }
                } else {
                    throw new Exception('Tous les champs doivent être complétés.');
                }
            }
        }
        elseif ($_GET['action'] == 'displayPass') {
            require('view/frontend/editPassView.php');
        }
        elseif ($_GET['action'] == 'editPass') {
            session_start();
            $passExist = passExist($_SESSION['mail']);
            $passwordCo = password_verify($_POST['oldPass'], $passExist['password']);
            if ($passwordCo == true) {
                $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
                editPass($_SESSION['mail'], $password);
                header('location: index.php');
            }
            else {
                throw new Exception('ERROR');
            }
        }
        // connexion end
        elseif ($_GET['action'] == 'profil') { 
            if(isset($_GET['id']) && $_GET['id'] > 0) { 
                $id = $_GET['id'];                       
                getProfil($id);
            } else {
                throw new Exception('La page que vous avez sélectionné n\'existe pas');
                } 
        }
        elseif ($_GET['action'] == 'deconnexion') {
            session_start();
            session_destroy();
            header('Location: index.php');
        }
        elseif ($_GET['action'] == 'editPseudo') {
            if(isset($_POST['formEditPseudo'])) {
                $newPseudo = htmlspecialchars($_POST['newPseudo']);
                $id = $_GET['id'];
                if (isset($_POST['newPseudo']) and !empty($_POST['newPseudo']) and pseudoExist($_POST['newPseudo']) == 0) {
                    editPseudo($id, $newPseudo);
                    getProfil($id);
                    echo('Votre pseudo a bien été modifié! Vos informations seront définitivement mises à jour lors de votre prochaine connexion.');
                } else {
                    throw new Exception('Impossible de changer le pseudo.');
                }
            }
        }
        elseif ($_GET['action'] == 'editMail') {
            if(isset($_POST['formEditMail'])) {
                $newMail = htmlspecialchars($_POST['newMail']);
                $id = $_GET['id'];
                if(isset($_POST['newMail']) and !empty($_POST['newMail']) and mailExist($_POST['newMail']) == 0) {
                    editMail($id, $newMail);
                    getProfil($id);
                    echo('Votre adresse mail a bien été modifiée!');
                } else {
                    throw new Exception('Impossible de changer le mail.');
                }
            }
        }
        // TO DO
        elseif ($_GET['action'] == 'admin') {
            listUsers($pseudo, $mail);
        }
    } else {
        listConfig();
    }
} catch (Exception $e) {
    echo 'Erreur : ' . $e->getMessage();
}

/*class Router {
    
    private $routes;

    function add_route($route, callable $closure) {
        $this->routes[$route] = $closure;
    }

    function execute() {
        $path = $_SERVER['PATH_INFO'];
        if(array_key_exists($path, $this->routes)) {
            $this->routes[$path]();
        } else {
            $this->routes['/']();
        }
    }
}

$router = new Router();

$router->add_route('/', function() {
    listConfig();
});

$router->add_route('/processeur' , function() {
    listCPU();
});

$router->execute();*/
