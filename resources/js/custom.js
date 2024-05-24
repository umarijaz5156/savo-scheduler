
AOS.init({
  once: true,
});
  document.addEventListener('alpine:init', ()=> {
    Alpine.data('dropdown' , ()=> ({
        open : false,
        toggle(){
          this.open = !this.open;
        }
    }));

    Alpine.data('sidebar' , ()=> ({
      move : '-375px',
      toggle(){
        this.open = !this.open;
      }
    }));
  })
 // Navbar
//  const Navbar = document.querySelector(".nav-bg")
//  window.addEventListener("scroll",()=>{
//      if(window.scrollY > 0){
//          Navbar.style.backgroundColor = "white"
//          Navbar.style.transition = "all ease 0.5s"
//      }else{
//          Navbar.style.backgroundColor = "transparent"
//      }
//  })


 // Map
 function initAutocomplete() {
     var map = new google.maps.Map(document.getElementById('map'), {
       center: {lat: 27.3753, lng:67},
       zoom: 13,
       mapTypeId: 'roadmap'
     });

     // Create the search box and link it to the UI element.
     var input = document.getElementById('pac-input');
     var searchBox = new google.maps.places.SearchBox(input);
     map.controls[google.maps.ControlPosition.TOP_LEFT].push(input);

     // Bias the SearchBox results towards current map's viewport.
     map.addListener('bounds_changed', function() {
       searchBox.setBounds(map.getBounds());
     });

     var markers = [];
     // Listen for the event fired when the user selects a prediction and retrieve
     // more details for that place.
     searchBox.addListener('places_changed', function() {
       var places = searchBox.getPlaces();

       if (places.length == 0) {
         return;
       }

       // Clear out the old markers.
       markers.forEach(function(marker) {
         marker.setMap(null);
       });
       markers = [];

       // For each place, get the icon, name and location.
       var bounds = new google.maps.LatLngBounds();
       places.forEach(function(place) {
         if (!place.geometry) {
           console.log("Returned place contains no geometry");
           return;
         }
         var icon = {
           url: place.icon,
           size: new google.maps.Size(71, 71),
           origin: new google.maps.Point(0, 0),
           anchor: new google.maps.Point(17, 34),
           scaledSize: new google.maps.Size(25, 25)
         };

         // Create a marker for each place.
         markers.push(new google.maps.Marker({
           map: map,
           icon: icon,
           title: place.name,
           position: place.geometry.location
         }));

         if (place.geometry.viewport) {
           // Only geocodes have viewport.
           bounds.union(place.geometry.viewport);
         } else {
           bounds.extend(place.geometry.location);
         }
       });
       map.fitBounds(bounds);
     });
   }


  const swiperSeller = new Swiper(".seller-testimonial-swiper", {
    // Optional parameters
    direction: "horizontal",
    loop: true,
    autoHeight: true,
    spaceBetween: 31,
    centeredSlides: true,
    slidesPerView: 1,
    // Navigation arrows
    pagination: {
      el: ".swiper-pagination-seller",
    },
    navigation: {
      prevEl: '.slidePrev-btn1',
      nextEl: '.slideNext-btn1'
    },
    breakpoints :{
      768:{
        slidesPerView: 2,
      },
      1024:{
        slidesPerView: 3,
      },
      1280:{
        slidesPerView: 4,
      }
    }
  });
