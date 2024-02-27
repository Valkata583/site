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

//Change content

//Chart
 // const ctx = document.getElementById("chart").getContext('2d');
 //  const myChart = new Chart(ctx, {
 //    type: 'bar',
 //    data: {
 //      labels: ["January", "February", "March", "April",
 //      "May", "June", "July", "August", "September", "October", "November", "December"],
 //      datasets: [{
 //        label: 'Searches per mounth',
 //        backgroundColor: 'rgba(161, 198, 247, 1)',
 //        borderColor: 'rgb(47, 128, 237)',
 //        data: [300, 400, 200, 500, 800, 900, 200, 500, 550, 300, 200, 100],
 //      }]
 //    },
 //    options: {
 //      scales: {
 //        yAxes: [{
 //          ticks: {
 //            beginAtZero: true,
 //          }
 //        }]
 //      }
 //    },
 //  });