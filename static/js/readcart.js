var subtotal = 0;
var shipping = 0;
var total = subtotal + shipping;

if (localStorage.getItem("cart_content") != undefined) {
    const cart = JSON.parse(localStorage.getItem("cart_content"));
    document.getElementById("product-amount").innerHTML = JSON.parse(localStorage.getItem("cart_content")).length + " products";

    for (let i = 0; i != JSON.parse(localStorage.getItem("cart_content")).length;i++) {
        let current_content = JSON.parse(cart[i]);
        let element = document.getElementById("shopping-cart-item-template");
        let newelement = element.cloneNode(true);
        let price = current_content[1].replace(",-","");
        subtotal += parseFloat(price);
        element.querySelector("h2").innerHTML = current_content[0];
        element.querySelector("h3").innerHTML = current_content[1];
        element.querySelector("img").src = current_content[2];
        element.querySelector("a").setAttribute("href","item?item_id=" + current_content[3]);
        element.querySelector("p").innerHTML = 1;

        itemid = current_content[3];
        let newid = "itemnr-"+itemid;

        if (document.getElementById(newid) == undefined) {
            element.setAttribute('id',newid);

            newbuttonid = "remove-item-button-"+i;
            element.querySelector("button").setAttribute("id",newbuttonid);

            document.getElementById(newbuttonid).onclick = function() {
                console.log("remove "+i);
                cart.splice(i,1);
                localStorage.setItem("cart_content",JSON.stringify(cart));
                window.location.reload();
            }

        element.after(newelement);
        }
        else{
            element = document.getElementById(newid);
            element.querySelector("p").innerHTML = parseInt(element.querySelector("p").innerHTML) + 1;
        }
        
        
    }
    if (JSON.parse(localStorage.getItem("cart_content")).length > 0) {
        let element = document.getElementById("shopping-cart-item-template");
        element.remove();
        console.log("removed");
    }
    total = subtotal + shipping;
    subtotal = subtotal.toFixed(2);
    total = total.toFixed(2);
    document.getElementById("subtotal").innerHTML = subtotal+",-";
    document.getElementById("total").innerHTML = total+",-";
    if (shipping == 0) {
        document.getElementById("shippingcost").innerHTML = "Free";
    }
    else{
        document.getElementById("shippingcost").innerHTML = shipping+",-";
    }
}

if (document.getElementById("shopping-cart-item-template") != undefined){
    document.getElementById("shopping-cart-item-template").querySelector("h2").innerHTML = "Sorry! It seems you don't have anything in your shopping cart yet. :(";
    document.getElementById("shopping-cart-item-template").querySelector("h3").remove();
    document.getElementById("shopping-cart-item-template").querySelector("img").remove();
    document.getElementById("shopping-cart-item-template").querySelector("p").remove();
    document.getElementById("shopping-cart-item-template").querySelector("button").remove();
}
