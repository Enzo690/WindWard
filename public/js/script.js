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

$(".checkbox-toggle").click( (e) => {
        if ($("input[type='checkbox']:checked").length == $('input[type=\'checkbox\']').length) {
            $("input[type='checkbox']").prop("checked", false)
        }else{
            $("input[type='checkbox']").prop("checked", true)

        }
})

$('.fa-sync-alt').click(() =>{
    location.reload();
});

//Images non sélectionnables
$("img").attr("draggable", false);


//Burger
var menu = document.querySelector(".navbar-menu")
var ham = document.querySelector(".navbar-burger")
var xIcon = document.querySelector(".navbar-close")
var menuIcon = document.querySelector(".navbar-icon")

ham.addEventListener("click", toggleMenu)

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

$(".custom-select").each(function() {
    var classes = $(this).attr("class");
    var template = '<div class="' + classes + '">';
    template += '<span class="custom-select-trigger">' + $(this).attr("placeholder") + '</span>';
    template += '<div class="custom-options">';
    $(this).find("option").each(function() {
        template += '<span class="custom-option ' + $(this).attr("class") + '" data-value="' + $(this).attr("value") + '">' + $(this).html() + '</span>';
    });
    template += '</div></div>';

    $(this).wrap('<div class="custom-select-wrapper"></div>');
    $(this).hide();
    $(this).after(template);
});
$(".custom-option:first-of-type").hover(function() {
    $(this).parents(".custom-options").addClass("option-hover");
}, function() {
    $(this).parents(".custom-options").removeClass("option-hover");
});
$(".custom-select-trigger").on("click", function() {
    $('html').one('click', function() {
        $(".custom-select").removeClass("opened");
    });
    $(this).parents(".custom-select").toggleClass("opened");
    event.stopPropagation();
});
$(".custom-option").on("click", function() {
    $(this).parents(".custom-select-wrapper").find("select").val($(this).data("value"));
    $(this).parents(".custom-options").find(".custom-option").removeClass("selection");
    $(this).addClass("selection");
    $(this).parents(".custom-select").removeClass("opened");
    $(this).parents(".custom-select").find(".custom-select-trigger").text($(this).text());
});

$('#subSearch').click((e) => {
    $('#searchForm').submit();
})
