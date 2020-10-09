/****************************************************
 * HANDLE JAVASCRIPT
 ****************************************************/

function scrollToTop() {
    $(".page_top").click(function() {
        console.log(scrollToTop);
        $("html, body").animate({
                scrollTop: 0,
            },
            500
        );
    });
}
// scroll to top
scrollToTop();

// Handle scroll for header when resize window 
var $window = $(window);
var $body = $("body");
var $html = $("html");
var $bodyHtml = $("body,html");
var winwidth = window.innerWidth;

window.addEventListener("scroll", _handleScrollHeader, false);
function _handleScrollHeader() {
    $("#header").css({
    left: -window.scrollX + "px",
    });
}

// Handle click arrow icon back to top
// $(".page_top").click(function() {
//     $("html, body").animate({ scrollTop: 0 }, 600);
//     return false;
// });

// Handle toggle menu
function toggleMenu() {
    $("#header .header_toggle").on("click", function () {
        console.log("Handle on click toggle")

        $(".gNav").toggleClass("open");
        $(this).toggleClass("change");
    });
}

// Remove Menu when Resize to Desktop
function removeMemuOnSp() {
    var windowSize = window.innerWidth;
    if ($(".gNav.open").length > 0 && windowSize > 768) {
        $(".gNav").removeClass("open");
        $(".header_toggle").removeClass("change");
    }
}


$(window).resize(function () {
    // calculateTopPagePostion();
    removeMemuOnSp();
});

function validateContactForm() {
    $("#contact_form").validate({
        rules: {
            name: "required",
            mail: {
                required: true,
                email: true,
            },
            contents: "required",
        },
        messages: {
            name: "This field is required.",
            mail: {
                required: 'This field is required.',
                email: 'Please enter mail correctly!',
            },
            mail_contents: "This field is required."
        }
    });
}

toggleMenu();
validateContactForm();
