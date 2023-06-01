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
    var $grid = $('#item').isotope({
        // options

    });
    // filter items on button click
    $('.filter-button-group').on('click', 'li', function () {
        var filterValue = $(this).attr('data-filter');
        $grid.isotope({ filter: filterValue });
    });
    $('.btn').magnificPopup({
        items: [
            {
                src: 'image/project1.jpg'
            },
            {
                src: 'image/project2.jpg',

            },
            {
                src: 'image/project3.jpg', // Dynamically created element

            },
            {
                src: 'image/project4.jpg',

            },
            {
                src: 'image/project5.jpg',

            },
            {
                src: 'image/project6.jpg',

            },

        ],
        gallery: {
            enabled: true
        },
        type: 'image' // this is default type
    });

});


