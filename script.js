$(document).ready(function() {
    $('#myList a').click(function(e) {
        e.preventDefault();
        $(this).toggleClass('active');
    });
});