// validating if password is long enough,has uppercase and number characters
//
//

function validation() {
  var password = document.getElementById("password").value;
  var username = document.getElementById("username").value;

  if (password.length < 4) {
    alert("Your password needs a minimum of four characters");
    event.preventDefault();
  } else if (password.search(/[a-z]/) < 0) {
    alert("Your password needs a lower case letter");
    event.preventDefault();
  } else if (password.search(/[A-Z]/) < 0) {
    alert("Your password needs an upper case letter");
    event.preventDefault();
  } else if (password.search(/[0-9]/) < 0) {
    alert("Your password needs a number");
    event.preventDefault();
  }else if (username == "admin") {
    alert("Choose another username");
    event.preventDefault();
  }else {
    return true;
  }
}
