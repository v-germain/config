class Score {
    constructor() {
        this.div=document.getElementById("displayStaff");
        this.tab = ["super site!", "ce site est vraiment top!!!", "Quel design osé!"];
    }

    review() {
        const ajax = new Ajax();
        ajax.ajaxGet("https://jsonplaceholder.typicode.com/users", reponse => {
            const users = JSON.parse(reponse);
            console.log(users);
            for(let i = 0; i < 3; i++) { 
                        const userName = document.getElementById("userName"+(i+1));
                        const name = document.getElementById("name"+(i+1));
                        const phrase = document.getElementById("catch"+(i+1));
                        userName.textContent=users[i].name;
                        name.textContent=users[i].username;
                        phrase.textContent=this.tab[i];
            };
        });       
    }
}