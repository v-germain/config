class Score {
    constructor() {
        this.tab = ["Super site pour fan de config!", "Ce site est vraiment top!!!", "Toujours à la pointe du hardware!"];
        this.imgTab = [""]
    }

    review() {
        const ajax = new Ajax();
        ajax.ajaxGet("https://jsonplaceholder.typicode.com/users", reponse => {
            const users = JSON.parse(reponse);
            console.log(users);
            for(let i = 0; i < 3; i++) { 
                        const name = document.getElementById("name"+(i+1));
                        const phrase = document.getElementById("catch"+(i+1));
                        const web = document.getElementById("web"+(i+1));
                        name.textContent=users[i].username;
                        phrase.textContent=this.tab[i];
                        web.textContent=users[i].website;
            };
        });       
    }
}