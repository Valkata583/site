//Login
var newTab;

function loginForm() {
  var email = document.getElementById("email1").value;
  var password = document.getElementById("password1").value;

  // Open a new tab if it doesn't exist or is closed
  if (!newTab || newTab.closed) {
    newTab = window.open('', '_blank');
    newTab.document.write('<html><head><title>Login Information</title></head><body>');

    // Create a table in the new tab
    newTab.document.write('<table border="1">');
    newTab.document.write('<tr><th>Email</th><th>Password</th></tr>');
  }

  // Append the entered email and password to the table in the new tab
  newTab.document.write('<tr><td>' + email + '</td><td>' + password + '</td></tr>');

  // Clear the input fields on the main page
  document.getElementById("email1").value = "";
  document.getElementById("password1").value = "";

  document.getElementById("email1").focus();
}