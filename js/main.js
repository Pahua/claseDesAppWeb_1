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





    $('#exampleModal').on('show.bs.modal', function (event) {
    var button = $(event.relatedTarget) // Button that triggered the modal
    var recipient = button.data('whatever') // Extract info from data-* attributes
    // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
    // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
    var modal = $(this)
    modal.find('.modal-title').text('New message to ' +recipient)
    modal.find('.modal-body input').val(recipient)
    })


    $(document).ready(function() {});
        $(function () {
          $('[data-toggle="tooltip"]').tooltip()
        });

        $(function () {
          $('[data-toggle="popover"]').popover()
        })


