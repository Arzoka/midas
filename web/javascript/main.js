if ( window.history.replaceState ) {
    window.history.replaceState( null, null, window.location.href );
}

document.getElementById("opensortalgo").onclick = () => {
    var myhidden = document.getElementById("hidden");
    if (document.getElementById("post-form").style.opacity == 0) {
        myhidden.value = "true";
        document.getElementById("itemtopbar").style.height = "30vh";
        document.getElementById("post-form").style.opacity = 1;
        document.getElementById("opensortalgo-arrow").style.rotate = "-90deg";
        document.getElementById("buttonsortwrap").style.marginTop = "0vh";
    }
    else{
        myhidden.value = "false";
        document.getElementById("itemtopbar").style.height = "5vh";
        document.getElementById("post-form").style.opacity = 0;
        document.getElementById("opensortalgo-arrow").style.rotate = "90deg";
        document.getElementById("buttonsortwrap").style.marginTop = "3vh";
    }
}