document.addEventListener('DOMContentLoaded', function () {

    Array.prototype.slice.call(document.querySelectorAll('.js_ease')).forEach(function (element, index) {

        if (element.classList.contains('slider_article')||element.classList.contains('main-tovar-new')) {
            lory(element, {
                infinite: 1,
                slidesToScroll: 1,
                slideSpeed: 1000,
                element: 'cubic-bezier(0.455, 0.03, 0.515, 0.955)'
             });
        };        
    });


});