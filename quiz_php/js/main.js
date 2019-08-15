$(document).ready(function(){

  // jQuery methods go here...
// The box's status has changed.
$(document).on('change', '.remember-me', function () {
    var label = $(this).parent();
    if ($(this).prop('checked')) {
        label.css('color', 'red');
    } else {
        label.css('color', 'black');
    }

});
});













// quiz stuff start here


// change selected checkbox to green shadow


// update progress bar when click next

// change progress bar from green to red... change bg colour from bg-success to bg-danger
