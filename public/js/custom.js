
// Custom Select
$(".cus-select").each(function () {
    var classes = $(this).attr("class"),
        id = $(this).attr("id"),
        name = $(this).attr("name");
    var template = '<div class="' + classes + '">';
    template += '<span class="cus-select-trigger">' + $(this).attr("placeholder") + "</span>";
    template += '<div class="custom-options">';
    $(this)
        .find("option")
        .each(function () {
            template += '<span class="custom-option ' + $(this).attr("class") + '" data-value="' + $(this).attr("value") + '">' + $(this).html() + "</span>";
        });
    template += "</div></div>";

    $(this).wrap('<div class="cus-select-wrapper"></div>');
    $(this).hide();
    $(this).after(template);
});

// Custom Option Hover
$(".custom-option:first-of-type").hover(
    function () {
        $(this).parents(".custom-options").addClass("option-hover");
    },
    function () {
        $(this).parents(".custom-options").removeClass("option-hover");
    }
);

// Custom Select Trigger
$(".cus-select-trigger").on("click", function () {
    $("html").one("click", function () {
        $(".cus-select").removeClass("opened");
    });
    $(this).parents(".cus-select").toggleClass("opened");
    event.stopPropagation();
});

// Custom Option
$(".custom-option").on("click", function () {
    $(this).parents(".cus-select-wrapper").find("select").val($(this).data("value"));
    $(this).parents(".custom-options").find(".custom-option").removeClass("selection");
    $(this).addClass("selection");
    $(this).parents(".cus-select").removeClass("opened");
    $(this).parents(".cus-select").find(".cus-select-trigger").text($(this).text());
});

window.addEventListener('scroll', this.handleScroll, true);