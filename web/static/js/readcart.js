if (localStorage.getItem("cart_content") != undefined) {
    const cart = JSON.parse(localStorage.getItem("cart_content"));

    for (let i = 0; i != JSON.parse(localStorage.getItem("cart_content")).length;i++) {
        let current_content = JSON.parse(cart[i]);
        
        let element = document.getElementById("shopping-cart-item-template");
        let newelement = element.cloneNode(true);
        let newid = "itemnr-"+i;

        element.setAttribute('id',newid);
        element.querySelector("h2").innerHTML = current_content[0];
        element.querySelector("h3").innerHTML = current_content[1];
        element.querySelector("img").src = current_content[2];

        newbuttonid = "remove-item-button-"+i;
        element.querySelector("button").setAttribute("id",newbuttonid);

        document.getElementById(newbuttonid).onclick = function() {
            console.log("remove "+i);
            element.remove();
            cart.splice(i,1);
            localStorage.setItem("cart_content",JSON.stringify(cart));
            window.location.reload();
        }

        element.after(newelement);
        
    }
    if (JSON.parse(localStorage.getItem("cart_content")).length > 0) {
        let element = document.getElementById("shopping-cart-item-template");
        element.remove();
        console.log("removed");
    }
}

if (document.getElementById("shopping-cart-item-template") != undefined){
    document.getElementById("shopping-cart-item-template").querySelector("h2").innerHTML = "Sorry! It seems you don't have anything in your shopping cart yet. :(";
    document.getElementById("shopping-cart-item-template").querySelector("h3").remove();
    document.getElementById("shopping-cart-item-template").querySelector("img").remove();
    document.getElementById("shopping-cart-item-template").querySelector("input").remove();
}
