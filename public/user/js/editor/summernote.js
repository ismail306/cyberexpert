"use strict";
// Class definition

var KTSummernoteDemo = function () {
    // Private functions
    var demos = function () {
        $('.summernote').summernote({
            height: 400,
            tabsize: 2
        });
    }

    return {
        // public functions
        init: function() {
            demos();
        }
    };
}();



// Initialization
jQuery(document).ready(function() {
    KTSummernoteDemo.init();
});




$(document).ready(function() {
    $('#summernote').summernote({
        lang: 'en-US',
        imageTitle: {
          specificAltField: true,
        },
        popover: {
            image: [
                ['image', ['resizeFull', 'resizeHalf', 'resizeQuarter', 'resizeNone']],
                ['float', ['floatLeft', 'floatRight', 'floatNone']],
                ['remove', ['removeMedia']],
                ['custom', ['imageTitle']],
            ],
        },
    });
});


