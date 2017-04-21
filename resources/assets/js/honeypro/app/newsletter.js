$('#subscribe').click(function () {
  let error = false;
  const emailCompare = /^([a-z0-9_.-]+)@([0-9a-z.-]+).([a-z.]{2,6})$/; // Syntax to compare against input
  let email = $('#nlmail').val().toLowerCase(); // get the value of the input field
  if (email == "" || email == " " || !emailCompare.test(email)) {
    $('#err-subscribe').show(500);
    $('#err-subscribe').delay(4000);
    $('#err-subscribe').animate({
      height: 'toggle'
    }, 500, function () {
      // Animation complete.
    });
    error = true; // change the error state to true
  }

  if (error === false) {
    $.ajax({
      type: 'POST',
      url: '/newsletter',
      data: {
        email: $('#nlmail').val()
      },
      error: function (request, error) {
        alert("An error occurred");
      },
      success: function (response) {
        if (response == 'OK') {
          $('#success-subscribe').show();
          $('#nlmail').val('')
        } else if (response == 'STRING EXISTS') {
          $('#already-subscribe').show();
        } else {
          $('#err-server').show(500);
          $('#err-server').delay(4000);
          $('#err-server').animate({
              height: 'toggle'
          }, 500, function () {
              // Animation complete.
          });
        }
      }
    });
  }
  return false;
});
