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

    //

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

    // Code Stock Management

    $(function () {
        $("#enable_qty").click(function (event) {
            var x = $(this).is(":checked");
            if (x == true) {
                $("#stock_low_qty").show();
            } else {
                $("#stock_low_qty").hide();
            }
        });
    });

    // Is shipping Required Code

    $(function () {
        $("#enable_shipping").click(function (event) {
            var x = $(this).is(":checked");
            if (x == true) {
                $("#shipping_control").show();
            } else {
                $("#shipping_control").hide();
            }
        });
    });

    // For Variable Products

    $(function () {
        $("#color_size").click(function (event) {
            var x = $(this).is(":checked");
            if (x == true) {
                $(".color_vs_size").show();
            } else {
                $(".color_vs_size").hide();
            }
        });
    });

    // For Attritute code

    $(function () {
        $("#enable_variation").click(function (event) {
            var x = $(this).is(":checked");
            if (x == true) {
                $("#for_size_color").show();
            } else {
                $("#for_size_color").hide();
            }
        });
    });
});
