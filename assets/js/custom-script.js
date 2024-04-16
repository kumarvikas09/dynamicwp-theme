// make menu toggled
var html = document.querySelector("html");
var body = document.querySelector("body");
var navToggle = document.querySelector("#nav-toggle");

navToggle.addEventListener("click", function () {
    html.classList.toggle("overflow-hidden");
    body.classList.toggle("menuOpen");
    this.classList.toggle("open");
});


// menu hover slide effect for submenus
function myFunction(x) {
    if (x.matches) { // If media query matches
        // for mobile tablet Navigation
        jQuery(".subMenuAngle").each(function () {
            jQuery(this).click(function () {
                jQuery(this).parent().next().slideToggle();
                jQuery(this).parent().parent().toggleClass("open");
                jQuery(this).children().toggleClass("fa-chevron-up");
                jQuery(this).children().toggleClass("fa-chevron-down");
            });
        });
    } else {
    }
}
var x = window.matchMedia("(max-width: 992px)")
myFunction(x) // Call listener function at run time
x.addListener(myFunction) // Attach listener function on state changes

