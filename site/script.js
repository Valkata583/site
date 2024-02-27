let login=document.getElementsByClassName("login-photo")[0];
let register=document.getElementsByClassName("register-photo")[0];

function loginpop(){
  if(login.style.display === "none" ){
    login.style.display= "flex";
    login.style.flexDirection="column";
    register.style.display="none";
  }else{
    login.style.display="none";
  }
}

function regpop(){

  if(register.style.display === "none"){
    register.style.display= "flex";
    register.style.flexDirection="row";
    register.style.justifyContent="space-between";
    login.style.display="none";
  }else{
    register.style.display="none";
  }
}

// Contackt form
var newTab; 

function ContactForm() {
  // Open a new tab if it doesn't exist or is closed
  if (!newTab || newTab.closed) {
    contactTab = window.open('', '_blank');
    contactTab.document.write('<html><head><title>Contact Information</title></head><body>');

    // Create a table in the new tab
    contactTab.document.write('<table border="1">');
    contactTab.document.write('<tr><th>Name</th><th>Family Name</th><th>Email</th><th>Note</th></tr>');
  }

  var name = document.getElementById("name").value;
  var familyname = document.getElementById("familyname").value;
  var email = document.getElementById("email").value;
  var note = document.getElementById("note").value;

  // Append the entered information to the table in the contact tab
  contactTab.document.write('<tr><td>' + name + '</td><td>' + familyname + '</td><td>' + email + '</td><td>' + note + '</td></tr>');

  // Clear the input fields on the contact form
  document.getElementById("name").value = "";
  document.getElementById("familyname").value = "";
  document.getElementById("email").value = "";
  document.getElementById("note").value = "";

  document.getElementById("name").focus();
}

//Colapse
var photo1 = document.getElementById('collapseTrigger1');
var photo2 = document.getElementById('collapseTrigger2');
var photo3 = document.getElementById('collapseTrigger3');
var photo4 = document.getElementById('collapseTrigger4');
var photo5 = document.getElementById('collapseTrigger5');
var photo6 = document.getElementById('collapseTrigger6');

photo1.addEventListener('click', function() {
  var targetCollapse = new bootstrap.Collapse(document.getElementById('collapseOne'));
  targetCollapse.toggle();
});

photo2.addEventListener('click', function() {
  var targetCollapse = new bootstrap.Collapse(document.getElementById('collapseTwo'));
  targetCollapse.toggle();
});

photo3.addEventListener('click', function() {
  var targetCollapse = new bootstrap.Collapse(document.getElementById('collapseThree'));
  targetCollapse.toggle();
});

photo4.addEventListener('click', function() {
  var targetCollapse = new bootstrap.Collapse(document.getElementById('collapseFour'));
  targetCollapse.toggle();
});

photo5.addEventListener('click', function() {
  var targetCollapse = new bootstrap.Collapse(document.getElementById('collapseFive'));
  targetCollapse.toggle();
});

photo6.addEventListener('click', function() {
  var targetCollapse = new bootstrap.Collapse(document.getElementById('collapseSix'));
  targetCollapse.toggle();
});

//Hamburger menu
document.getElementById('menu-icon').addEventListener('click', function () {
  var mobileMenu = document.getElementById('mobile-menu');
  mobileMenu.style.display = (mobileMenu.style.display === 'flex') ? 'none' : 'flex';
});

// Close the mobile menu when a menu item is clicked
var mobileMenuItems = document.querySelectorAll('#mobile-menu li a');
mobileMenuItems.forEach(function (item) {
  item.addEventListener('click', function () {
    document.getElementById('mobile-menu').style.display = 'none';
  });
});












