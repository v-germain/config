class Score {
    constructor() {
        this.thing=document.getElementById("lol");
    }

    review() {
        const ajax = new Ajax();
        ajax.ajaxGet("https://jsonplaceholder.typicode.com/todos/1", response => {
            const reviewier = JSON.parse(reponse);
            console.log(reviewers);
        });
    }
}