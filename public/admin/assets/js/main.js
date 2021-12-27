$.noConflict();

jQuery(document).ready(function ($) {
    "use strict";

    [].slice
        .call(document.querySelectorAll("select.cs-select"))
        .forEach(function (el) {
            new SelectFx(el);
        });

    jQuery(".selectpicker").selectpicker;

    $("#menuToggle").on("click", function (event) {
        $("body").toggleClass("open");
    });

    $(".search-trigger").on("click", function (event) {
        event.preventDefault();
        event.stopPropagation();
        $(".search-trigger").parent(".header-left").addClass("open");
    });

    $(".search-close").on("click", function (event) {
        event.preventDefault();
        event.stopPropagation();
        $(".search-trigger").parent(".header-left").removeClass("open");
    });

    // $('.user-area> a').on('click', function(event) {
    // 	event.preventDefault();
    // 	event.stopPropagation();
    // 	$('.user-menu').parent().removeClass('open');
    // 	$('.user-menu').parent().toggleClass('open');
    // });

    // Add Product Jquery Function start

    $("#toggletime").click(function () {
        if ($("#time-sec").css("display") == "none") {
            $("#time-sec").fadeIn();
        } else $("#time-sec").fadeOut();
    });

    // Floating add product Button

    $(function () {
        $("#Product_type").change(function () {
            $(".colors").hide();
            $("#" + $(this).val()).show();
        });
    });

    //  For Category and Sub Category

    $("#sub_cat").children("option:gt(0)").hide();
    $("#cat_parent").change(function () {
        $("#sub_cat").children("option").hide();
        $("#sub_cat")
            .children("option[value^=" + $(this).val() + "]")
            .show();
    });
});
