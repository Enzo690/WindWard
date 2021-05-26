//Images non sélectionnables
$("img").attr("draggable", false);


//Burger
var menu = document.querySelector(".navbar-menu")
var ham = document.querySelector(".navbar-burger")
var xIcon = document.querySelector(".navbar-close")
var menuIcon = document.querySelector(".navbar-icon")

//ham.addEventListener("click", toggleMenu)

function toggleMenu() {
    if (menu.classList.contains("navbar-show")) {
        menu.classList.remove("navbar-show");
        xIcon.style.display = "none";
        menuIcon.style.display = "block";
        $("body").css("overflow-y", "visible");
    } else {
        menu.classList.add("navbar-show");
        xIcon.style.display = "block";
        menuIcon.style.display = "none";
        $("body").css("overflow", "hidden");
    }
}

var menuLinks = document.querySelectorAll(".navbar-menu a")

menuLinks.forEach(
    function(menuLink) {
        menuLink.addEventListener("click", toggleMenu)
    }
)

$("#article-image").click(function() {
    $("input[id='my_file']").click();
});

