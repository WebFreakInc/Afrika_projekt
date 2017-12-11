// Basic setup :)))))
var Shuffle = window.Shuffle;
var element = document.querySelector('.my-shuffle-container');
var sizer = element.querySelector('.my-sizer-element');

var shuffleInstance = new Shuffle(element, {
    itemSelector: '.picture-item',
    sizer: sizer // could also be a selector: '.my-sizer-element'
});

$('.btn-shuffle').click(function() {
   var filter = $(this).data('filter');
    shuffleInstance.filter(filter);
});

console.log('hej med dig :)');