

var check = function() {

  var pass1 = document.getElementById('password');
  var pass2 = document.getElementById('confirm_password');
  var message = document.getElementById('message');
  var button = document.getElementById("createAccount");

  if (pass1.value ==
    pass2.value) {
    message.style.color = 'green';
    message.innerHTML = '<div class="alert alert-success role="alert">Las contraseñas coinciden.</div>';

    button.disabled = false;
  } else {
    message.style.color = 'red';
    message.innerHTML = '<div class="alert alert-danger" role="alert">Las contraseñas no coinciden.</div>';
    button.disabled = true;
  }
}
