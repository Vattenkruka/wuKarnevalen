
function showCountdown(){

const second = 1000,
minute = second * 60,
hour = minute * 60,
day = hour * 24;

let countDown = new Date('May 16, 2022 00:00:00').getTime(),
x = setInterval(function() {

  let now = new Date().getTime(),
  distance = countDown - now;

  document.getElementById('days').innerText = Math.floor(distance / (day)),
  document.getElementById('hours').innerText = Math.floor((distance % (day)) / (hour)),
  document.getElementById('minutes').innerText = Math.floor((distance % (hour)) / (minute)),
  document.getElementById('seconds').innerText = Math.floor((distance % (minute)) / second);

}, second)

}
//  Slide-functions

var slideIndex = 0;
showSlides();

function showSlides() {
  var i;
  var slides = document.getElementsByClassName("mySlides1");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}
    slides[slideIndex-1].style.display = "block";
  setTimeout(showSlides, 2000); // Change image every 2 seconds
}

var slideIndex2= 0;
showSlides2();

function showSlides2() {
  var i;
  var slides = document.getElementsByClassName("mySlides2");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  slideIndex2++;
  if (slideIndex2 > slides.length) {slideIndex2 = 1}
    slides[slideIndex2-1].style.display = "block";
  setTimeout(showSlides2, 2000); // Change image every 2 seconds
}

//Comment Section On FAQ-Page


function commentSubmit(){
	document.getElementById("commentForm").submit();
}

function reservationSubmit(){
  document.getElementById("ticketForm").submit();
}

function applicationSubmit(){
  document.getElementById("applicationForm").submit();
}
function deleteAdminSubmit(){
  document.getElementsById("adminForm").submit();
}
function searchAdminSubmit(){
  document.getElementsById("searchForm").submit();
}

function initMap() {
  var map = new google.maps.Map(document.getElementById('map'), {
    zoom:13,
    center:{
      lat: 55.7055283,
      lng:13.1925465
    
    }
    });
  

  var flightPlanCoordinates = [{
          lat: 55.703609,
          lng: 13.194185
        },
        {
          lat: 55.703639,
          lng: 13.195355
        },
        {
          lat: 55.703029,
          lng: 13.196524
        },
        {
          lat: 55.702025,
          lng: 13.196857
        },
        {
          lat: 55.701983,
          lng: 13.195119
        },
        {
          lat: 55.702333,
          lng: 13.192812
        },
        {
          lat: 55.703851,
          lng: 13.192640
        },
        {
          lat: 55.704214,
          lng: 13.187823
        },
        {
          lat: 55.706807,
          lng: 13.187587
        },
        {
          lat: 55.706799,
          lng: 13.188423
        },
        {
          lat: 55.706190,
          lng: 13.192569
        },
        {
          lat: 55.709179,
          lng: 13.192825
        },
        {
          lat: 55.709022,
          lng: 13.193770
        },
        {
          lat: 55.707910,
          lng: 13.196409
        },
        {
          lat: 55.707614,
          lng: 13.196387
        },
        {
          lat: 55.707426,
          lng: 13.196570
        },
        {
          lat: 55.704894,
          lng: 13.194853
        },
        {
          lat: 55.703630,
          lng: 13.194252
        },
      ];

      var parade = new google.maps.Polyline({
        path: flightPlanCoordinates,
        geodesic: true,
        strokeColor: '#FBBCCC',
        strokeOpacity: 1,
        strokeWeight: 6
      });

      
      var triangleCoords = [{
          lat: 55.707400,
          lng: 13.195879
        },
        {
          lat: 55.707327,
          lng: 13.196351
        },
        {
          lat: 55.706117,
          lng: 13.195643
        },
        {
          lat: 55.706086,
          lng: 13.195753
        },
        {
          lat: 55.705754,
          lng: 13.195539
        },
        {
          lat: 55.705612,
          lng: 13.196193
        },
        {
          lat: 55.704885,
          lng: 13.195903
        },
        {
          lat: 55.704365,
          lng: 13.195480
        },
        {
          lat: 55.704305,
          lng: 13.195343
        },
        {
          lat: 55.703647,
          lng: 13.194924
        },
        {
          lat: 55.703623,
          lng: 13.194122
        },
        {
          lat: 55.703818,
          lng: 13.192894
        },
        {
          lat: 55.704004,
          lng: 13.192985
        },
        {
          lat: 55.703797,
          lng: 13.194045
        },
        {
          lat: 55.703943,
          lng: 13.194388
        },
        {
          lat: 55.704203,
          lng: 13.194246
        },
        {
          lat: 55.704502,
          lng: 13.192713
        },
        {
          lat: 55.705987,
          lng: 13.192663
        },
        {
          lat: 55.706096,
          lng: 13.193028
        },
        {
          lat: 55.706111,
          lng: 13.193840
        },
        {
          lat: 55.706794,
          lng: 13.193931
        },
        {
          lat: 55.706767,
          lng: 13.194328
        },
        {
          lat: 55.706571,
          lng: 13.195266
        },
      ];

      var area = new google.maps.Polygon({
        paths: triangleCoords,
        strokeColor: '#8A4797',
        strokeOpacity: 0.6,
        strokeWeight: 1,
        fillColor: '#8A4797',
        fillOpacity: 0.35
      });

      area.setMap(map);

      parade.setMap(map);
}

