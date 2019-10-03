<?php
require('controller/frontend.php');
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
            require('view/inscriptionView.php');
        } elseif ($_GET['action'] == 'inscription') {
            if (isset($_POST['formInscription'])) {
                $pseudo = htmlspecialchars($_POST['pseudo']);
                $mail = htmlspecialchars($_POST['mail']);
                $mail2 = htmlspecialchars($_POST['mail2']);
                $password = sha1($_POST['password']);
                $password2 = sha1($_POST['password2']);
                if (!empty($_POST['pseudo']) and !empty($_POST['mail']) and !empty($_POST['mail2']) and !empty($_POST['password']) and !empty($_POST['password2'])) {
                    $pseudoLength = strlen($pseudo);
                    if ($pseudoLength <= 20) {
                        //TO DO : créer classe correspondante dans MemberManager.php puis instancier dans controler
                        $db = new PDO('mysql:host=localhost;dbname=project5;charset=utf8', 'v-germain', '');
                        $reqPseudo = $db->prepare('SELECT * FROM members WHERE pseudo = ?');
                        $reqPseudo->execute(array($pseudo));
                        $pseudoExist = $reqPseudo->rowCount();
                        //TO DO
                        //$pseudoExist = pseudoExist($pseudo);
                        if ($pseudoExist == 0) {
                            if ($mail == $mail2) {
                                if (filter_var($mail, FILTER_VALIDATE_EMAIL)) {
                                    $mailExist = mailExist($mail);
                                    if ($mailExist == 0) {
                                        if ($password == $password2) {
                                            inscription($pseudo, $mail, $password);
                                        } else {
                                            throw new Exception('Les deux mots de passe ne correspondent pas.');
                                        }
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
                            throw new Exception('Ce pseudo est déjà utilisé.');
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
            require('view/connexionView.php');
        }
        elseif ($_GET['action'] == 'connexion') {
            if(isset($_POST['formConnexion'])) {
                $pseudoCo = htmlspecialchars($_POST['pseudoCo']);
                $passwordCo = sha1($_POST['passwordCo']);
                if(!empty($pseudoCo) AND !empty($passwordCo)) {
                    //TO DO : créer classe correspondante dans MemberManager.php puis instancier dans controler
                    $db = new PDO('mysql:host=localhost;dbname=project5;charset=utf8', 'v-germain', '');
                    $reqUser = $db->prepare('SELECT * FROM members WHERE pseudo = ? AND password = ?');
                    $reqUser->execute(array($pseudoCo, $passwordCo));
                    $userExist = $reqUser->rowCount();
                    //TO DO
                    // $userExist = userExist($pseudoCo, $passwordCo);
                    if($userExist == 1) {
                        $userInfo = $reqUser->fetch();
                        $_SESSION['id'] = $userInfo['id'];
                        $_SESSION['pseudo'] = $userInfo['pseudo'];
                        $_SESSION['mail'] = $userInfo['mail'];
                        require('Location: index.php?action=profil&id='.$_SESSION['id']);                    
                    } else {
                        throw new Exception('Verifiez les informations saisies.');
                    }
                } else {
                    throw new Exception('Tous les champs doivent être complétés.');
                }
            }
        }
        // connexion end
        elseif ($_GET['action'] == 'profil') {
            if(isset($_GET['id']) && $_GET['id'] > 0) {
                require(__DIR__ . '/view/profilView.php');
            } else {
                throw new Exception('La page que vous avez séléctionné n\'existe pas');
            }
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
