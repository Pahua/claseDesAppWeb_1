//username validation
var introUsername;

$(document).ready(function() {
    $('#contactForm').bootstrapValidator({
        container: '#messages',
        feedbackIcons: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },
        fields: {
            username: {
                validators: {
                    notEmpty: {
                        message: 'Please enter a name to start the fun'
                    }
                }
            }
        }

    });

});

//YES READY button
$('#swapArchived').on('click', function(e) {
    var btn = $(this),
    icon = btn.find('.glyphicon'),
    text = btn.find('.text'),
    toggleClass = 'showArchived';

    if (btn.hasClass(toggleClass)) {
        btn.removeClass('btn btn-primary btn-success showArchived').addClass('btn btn-primary btn-danger');
        icon.removeClass('glyphicon-check').addClass('glyphicon-remove');
        text.text('No! Not yet');
    }
    btn.toggleClass(toggleClass);
});


/*
function readText(texto){
    introUsername = texto; 
    document.getElementById("introUsername").innerText = introUsername; 
    alert("no");
    }
    */

//introUsername=document.getElementById("username").value;
/*
$("#btn btn-success btn-block").click(function() {
    // whenever the START button is clicked, read the username
    introUsername=document.getElementById("username").value;
    alert("DUH");
}); 


//print username in Jumbotron
document.getElementById("introUsername").innerText = introUsername; 
*/


$(document).ready(function() {});
$(function () {
  $('[data-toggle="tooltip"]').tooltip()
});

$(function () {
  $('[data-toggle="popover"]').popover()
})


