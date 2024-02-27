//Register
var newTab;

function registerForm() {
  var name = document.getElementById("name2").value;
  var familyname = document.getElementById("familyname2").value;
  var username = document.getElementById("username2").value;
  var email = document.getElementById("email2").value;
  var password = document.getElementById("password2").value;

  // Open a new tab if it doesn't exist or is closed
  if (!newTab || newTab.closed) {
    newTab = window.open('', '_blank');
    newTab.document.write('<html><head><title>Registration Information</title></head><body>');

    // Create a table in the new tab
    newTab.document.write('<table border="1">');
    newTab.document.write('<tr><th>Name</th><th>Family Name</th><th>Username</th><th>Email</th><th>Password</th></tr>');
  }

  // Append the entered information to the table in the new tab
  newTab.document.write('<tr><td>' + name + '</td><td>' + familyname + '</td><td>' + username + '</td><td>' + email + '</td><td>' + password + '</td></tr>');

  // Clear the input fields on the main page
  document.getElementById("name2").value = "";
  document.getElementById("familyname2").value = "";
  document.getElementById("username2").value = "";
  document.getElementById("email2").value = "";
  document.getElementById("password2").value = "";

  document.getElementById("name2").focus();
}