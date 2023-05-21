$(document).ready(function() {
    $('form').submit(function(event) {
      var uname = $('input[name="uname"]').val();
      var surname = $('input[name="surname"]').val();
      var email = $('input[name="email"]').val();
      var feedback = $('textarea[name="feedback"]').val();
  
      if (uname !== '' && surname !== '' && email !== '' && feedback !== '') {
        alert('Feedback submitted successfully!');
      }
    });
  });