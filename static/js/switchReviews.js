document.getElementById("review-button-left").onclick = function() {
    if (document.getElementById("review-wrap").getAttribute("data-number-review") == "1") {
        document.getElementById("review-wrap").setAttribute("data-number-review","3");
        setreview(3);
    }
    else if (document.getElementById("review-wrap").getAttribute("data-number-review") == "2") {
        document.getElementById("review-wrap").setAttribute("data-number-review","1");
        setreview(1);
    }
    else if (document.getElementById("review-wrap").getAttribute("data-number-review") == "3") {
        document.getElementById("review-wrap").setAttribute("data-number-review","2");
        setreview(2);
    }
}

document.getElementById("review-button-right").onclick = function() {
    if (document.getElementById("review-wrap").getAttribute("data-number-review") == "1") {
        document.getElementById("review-wrap").setAttribute("data-number-review","2");
        setreview(2);
    }
    else if (document.getElementById("review-wrap").getAttribute("data-number-review") == "2") {
        document.getElementById("review-wrap").setAttribute("data-number-review","3");
        setreview(3);
    }
    else if (document.getElementById("review-wrap").getAttribute("data-number-review") == "3") {
        document.getElementById("review-wrap").setAttribute("data-number-review","1");
        setreview(1);
    }
}

function setreview(review_number) {
    opacityswitch();
    setTimeout(() => {
        if (review_number == 1) {
            document.getElementById("review-user-img").src = "static/img/dwayne.webp";
            document.getElementById("review-username").innerHTML = 'Dwayne "The Rock" Johnson';
            document.getElementById("review-desc").innerHTML = '"This site overall has a really nice aesthetic and I would definitely get my collectibles here again someday."';
        }
    
        else if (review_number == 2)  {
            document.getElementById("review-user-img").src = "static/img/diya.webp";
            document.getElementById("review-username").innerHTML = 'Diya Jawalapersad';
            document.getElementById("review-desc").innerHTML = '"Deez nuts"';
        }
    
        else if (review_number == 3) {
            document.getElementById("review-user-img").src = "static/img/obama.webp";
            document.getElementById("review-username").innerHTML = "Barack Obama";
            document.getElementById("review-desc").innerHTML = '"My fellow Americans, this site is absolutely bussin bussin."';
        }
    }, 410);
}

function opacityswitch() {
    document.getElementById("review-wrap").style.opacity = 0;
    setTimeout(() => {
        document.getElementById("review-wrap").style.opacity = 1;
    }, 500);
}