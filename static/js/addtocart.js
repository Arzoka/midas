if (localStorage.getItem("cart_content") != undefined) {
    document.getElementById("cart-content-display").innerHTML = JSON.parse(localStorage.getItem("cart_content")).length;
}

document.getElementById("addtocart-button").onclick = function() {
    
    //variables
    item_name = document.getElementById("item-name").innerHTML;
    item_price = document.getElementById("item-price").innerHTML;
    item_img = document.getElementById("item-img").getAttribute("src");
    item_id = document.getElementById("item-id").value;

    //creating array
    var newarr = [item_name, item_price,item_img,item_id];
    var newarrstring = JSON.stringify(newarr);

    dofunkyanimation();

    if (localStorage.getItem("cart_content") == undefined) {
        cart = new Array();
        cart.push(newarrstring);
        localStorage.setItem("cart_content",JSON.stringify(cart));
    }
    else{
        //already a cart

        cart = JSON.parse((localStorage.getItem("cart_content")));
        
        if (cart.includes(newarrstring)) {
            console.log("cart already includes");

        }
        cart.push(newarrstring);
        localStorage.setItem("cart_content",JSON.stringify(cart));
    }
}

function dofunkyanimation() {
    setTimeout(() => {
        document.getElementById("cart-content-display").classList.add("wiggleclass");

        setTimeout(() => {
            document.getElementById("cart-content-display").innerHTML = JSON.parse(localStorage.getItem("cart_content")).length;
            setTimeout(() => {
                document.getElementById("cart-content-display").classList.remove("wiggleclass");
            }, 200);
        }, 100);
    }, 500);
    
}