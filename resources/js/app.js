import.meta.glob([ '../images/**', ]);

let home_link = document.getElementById("home-link");

let vote_link = document.getElementById("vote-link");

let create_vote_link = document.getElementById("create-vote-link");

let links = [home_link, vote_link, create_vote_link]

for(let i = 0; i < links.length; i++) {
    if(window.location.pathname == links[i].attributes.href.value) {

        links[i].onmouseenter = function() {
            links[i].style.cursor = "pointer";
        }

        links[i].removeAttribute("href");

        links[i].style.color = "blue";

        links[i].style.fontWeight = "bold";
    }
}
