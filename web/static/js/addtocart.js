document.getElementById("addtocart-button").onclick = function() {
    
    //variables
    item_name = document.getElementById("item-name").innerHTML;
    item_price = document.getElementById("item-price").innerHTML;
    item_img = document.getElementById("item-img").getAttribute("src");
    item_id = document.getElementById("item_id").value;

    //creating array
    var newarr = [item_name, item_price,item_img];
    var newarrstring = JSON.stringify(newarr);


    if (localStorage.getItem("cart_content") == undefined) {
        cart = new Array();
        cart.push(newarrstring);
        localStorage.setItem("cart_content",JSON.stringify(cart));
    }
    else{
        //already a cart
        cart = JSON.parse((localStorage.getItem("cart_content")));
        cart.push(newarrstring);
        localStorage.setItem("cart_content",JSON.stringify(cart));
    }
}