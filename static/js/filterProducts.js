if (localStorage.getItem("search")) {
    deletecardsfilter_search(localStorage.getItem("search"));
    document.getElementById("search-bar").value = localStorage.getItem("search");
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

var deletecards = [];

if (localStorage.getItem("min_price") == undefined) {
    localStorage.setItem("min_price",0);
    localStorage.setItem("max_price",99999);
    document.getElementById("min-price").value = localStorage.getItem("min_price");
    document.getElementById("max-price").value = localStorage.getItem("max_price");
}
else{
    document.getElementById("min-price").value = localStorage.getItem("min_price");
    document.getElementById("max-price").value = localStorage.getItem("max_price");
}

deletecardsfilter(localStorage.getItem("min_price"),localStorage.getItem("max_price"));

function deletecardsfilter(min_price, max_price) {
    const cards = document.getElementsByClassName("item-card-wrap");
    for (let i = 0; i < cards.length; i++) {
        let card = cards[i];
        item_price = Math.floor(card.getAttribute("data-item-price")) + 1;
        if (item_price > max_price) {
            deletecards.push(card);
        }
        else if (item_price < min_price) {
            deletecards.push(card);
        }
    }

    for (let i = 0; i < deletecards.length; i++) {
        deletecards[i].remove();
    }
}

function deletecardsfilter_search(search) {
    const cards = document.getElementsByClassName("item-card-wrap");
    deletecards = [];
    search = search.toLowerCase();
    for (let i = 0; i < cards.length; i++) {
        let card = cards[i];
        let newcardname = card.getAttribute("data-item-name").toLowerCase();
        if (newcardname.includes(search)) {
            console.log("yuh");
        }
        else {
            console.log(card.getAttribute("data-item-name") + search);
            deletecards.push(card);
        }
    }

    for (let i = 0; i < deletecards.length; i++) {
        deletecards[i].remove();
    }
    
}



document.addEventListener("keydown", function(event) {
    if (event.code === "Enter") {
        if (document.getElementById("search-bar") == document.activeElement) {
            localStorage.setItem("search",document.getElementById("search-bar").value);
            window.location.reload();
        }
        else if (document.getElementById("max-price") == document.activeElement || document.getElementById("min-price") == document.activeElement) {
            localStorage.setItem("min_price",document.getElementById("min-price").value);
            localStorage.setItem("max_price",document.getElementById("max-price").value);
            location.reload();
        }
    }
});