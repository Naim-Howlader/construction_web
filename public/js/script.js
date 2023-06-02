jQuery(document).ready(function ($) {
    $(".counter").counterUp({
        delay: 10,
        time: 1000,
        offset: 70,
        beginAt: 100,
        formatter: function (n) {
            return n.replace(/,/g, ".");
        },
    });

    // init Isotope
    var $grid = $("#item").isotope({
        // options
    });
    // filter items on button click
    $(".filter-button-group").on("click", "li", function () {
        var filterValue = $(this).attr("data-filter");
        $grid.isotope({ filter: filterValue });
    });
    $(".show-image").magnificPopup({
        type: "image",
        preloader: true,
        removalDelay: 300,
        mainClass: "mfp-fade",
        image: {
            markup:
                '<div class="mfp-figure">' +
                '<div class="mfp-close"></div>' +
                '<div class="mfp-img"></div>' +
                '<div class="mfp-bottom-bar">' +
                '<div class="mfp-title">Something</div>' +
                '<div class="mfp-counter"></div>' +
                "</div>" +
                "</div>",

            cursor: "mfp-zoom-out-cur",

            titleSrc: "Something",

            verticalFit: true,

            tError: '<a href="%url%">The image</a> could not be loaded.', // Error message
        },
        gallery: {
            enabled: true,
        },
    });
});
