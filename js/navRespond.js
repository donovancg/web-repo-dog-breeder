function navRespond() {
    var nav = document.getElementById('js--nav');
    if(nav.className === "nav") {
        nav.className += " responsive";
    } else {
        nav.className = "nav";
    }
}

document.getElementById("js--nav-icon").addEventListener('click', function() {
    navRespond();
});