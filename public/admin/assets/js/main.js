// const { Alert } = require("bootstrap");

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

    $("#toggletime").on("click", function () {
        if ($("#time-sec").css("display") == "none") {
            $("#time-sec").fadeIn();
            $(".change-text").text("Cancelled");
        } else {
            $("#time-sec").fadeOut();
            $(".change-text").text("Schedule Time");
        }
    });

    //

    // $(function () {
    //     $("#Product_type").change(function () {
    //         $(".colors").hide();
    //         $("#" + $(this).val()).show();
    //     });
    // });

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

    // No Shipping When Virtual is clicked

    $(function () {
        $("#no-shipping").click(function (event) {
            var x = $(this).is(":checked");
            if (x == true) {
                $("#hide_shipping").hide();
            } else {
                $("#hide_shipping").show();
            }
        });
    });

    // For Downloadable Product onclick
    $(function () {
        $("#downloadable").on("click", function (event) {
            var x = $(this).is(":checked");
            if (x == true) {
                $("#download-file").show();
            } else {
                $("#download-file").hide();
            }
        });
    });

    // For Variable Products

    $(function () {
        $("#color_var").on("click", function (event) {
            var x = $(this).is(":checked");
            if (x == true) {
                $("#color_select").show();
            } else {
                $("#color_select").hide();
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

    // For Attribute Color and Size Addition

    $(".attr-type").on("change", function () {
        var option = $(".attr-type").val();
        $(".attr-hidden").hide();
        $("." + option).show();
    });

    //  JS CODE ADD AND REMOVE EXTRA DOWNLOAD FILE

    $("#add-field").on("click", function () {
        $("#append-section .append-move")
            .clone()
            .find("input")
            .val("")
            .end()
            .appendTo("#append-section-to");
    });

    $("#remove-field").on("click", function () {
        $("#append-section-to .append-move").last().remove();
    });

    // BOOTSTRAP SELECT JS CODE CONFIQURATION

    $(".my-select").selectpicker();

    // FOR ATTRIBUTE SELECT OPTION JQUERY CODE START

    //SELECT CODE
    var count = 1;
    $("#attribute_select").on(
        "changed.bs.select",
        function (e, clickedIndex, isSelected, previousValue) {
            var selectedD = $(this).find("option").eq(clickedIndex).text();

            if (isSelected) {
                var el = $("#attribute_show").clone();
                var newAttr = "#attribute_show" + count;
                var html = $(el).appendTo("#attribute_append");
                $(html).removeAttr("id").attr("id", newAttr); // give the cloned div a new ID
                $(html).find(".change-me").text(selectedD);
                count++;
                $(html).find("select.my-select1").selectpicker(); //I have give a new class to
                //the second selectpicker so that it will not initialize for the first time. It will be initialized after it is cloned.
            } else {
                var selectedItems = $(this).val(); //array of selected items from selectpicker

                //check if each cloned item exist in the selectedItems array, if not exist, remove the div
                $("#attribute_append")
                    .find("span.change-me")
                    .each(function (i, e) {
                        //var item = $.trim($(e).text().toLowerCase());
                        var item = $(e).text().toLowerCase().trim();
                        if (jQuery.inArray(item, selectedItems) == -1) {
                            $(e).parent().parent().parent().parent().remove();
                        }
                    });
            }
        }
    );

    // PRODUCT TYPE SELECT OPTIONS

    $("#Product_type").change(function () {
        // $("#Product_type").val()
        alert("Am Clicked");
    });
});

// Add product Tag code section

const tagContainer = document.querySelector(".tag-container");
const input = document.querySelector(".tag-container input");

let tags = [];

function createTag(label) {
    const div = document.createElement("div");
    div.setAttribute("class", "tag");
    const span = document.createElement("span");
    span.innerHTML = label;
    const closeIcon = document.createElement("i");
    closeIcon.innerHTML = "close";
    closeIcon.setAttribute("class", "material-icons");
    closeIcon.setAttribute("data-item", label);
    div.appendChild(span);
    div.appendChild(closeIcon);
    return div;
}

function clearTags() {
    document.querySelectorAll(".tag").forEach((tag) => {
        tag.parentElement.removeChild(tag);
    });
}

function addTags() {
    clearTags();
    tags.slice()
        .reverse()
        .forEach((tag) => {
            tagContainer.prepend(createTag(tag));
        });
}

input.addEventListener("keyup", (e) => {
    if (e.key === ",") {
        e.target.value.split(",").forEach((tag) => {
            tags.push(tag);
        });

        addTags();
        input.value = "";
    }
});
document.addEventListener("click", (e) => {
    console.log(e.target.tagName);
    if (e.target.tagName === "I") {
        const tagLabel = e.target.getAttribute("data-item");
        const index = tags.indexOf(tagLabel);
        tags = [...tags.slice(0, index), ...tags.slice(index + 1)];
        addTags();
    }
});

// CKEDITOR 5 JAVASCRIPT INTEGRETION

ClassicEditor.create(document.querySelector("#editor"), {});
ClassicEditor.create(document.querySelector("#myeditor"), {})
    .then((editor) => {
        window.editor = editor;
    })
    .catch((err) => {
        console.error(err.stack);
    });

// ADD GALLERY IMAGES

let galleryImage = document.getElementById("gallery-image");
let imageDisplay = document.getElementById("all-imgs");
let noOfFiles = document.getElementById("no-of-files");

function preview() {
    imageDisplay.innerHTML = "";
    noOfFiles.textContent = `${galleryImage.files.length} Files Selected`;

    for (i of galleryImage.files) {
        let reader = new FileReader();
        let fiqure = document.createElement("figure");
        let fiqCap = document.createElement("figcaption");
        let removeImg = document.createElement("span");

        fiqCap.innerText = i.name;
        fiqure.appendChild(fiqCap);
        reader.onload = () => {
            let img = document.createElement("img");
            img.setAttribute("src", reader.result);
            fiqure.insertBefore(img, fiqCap);
        };

        imageDisplay.appendChild(fiqure);
        reader.readAsDataURL(i);
    }
}
