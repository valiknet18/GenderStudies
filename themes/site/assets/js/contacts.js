wow = new WOW(
    {
        boxClass:     'wow',      // default
        animateClass: 'animated', // default
        offset:       0          // default
    }
);
wow.init();

$(document).ready(function() {
        //Set the carousel options
        $('#quote-carousel').carousel({
                pause: true,
                interval: 4000,
            }
        );
    }
);


//google map
function initialize() {
    var myLatlng = new google.maps.LatLng(49.4533105,32.045947);
    var mapOptions = {
        zoom: 16,
        center: myLatlng,
        mapTypeId: google.maps.MapTypeId.ROADMAP
    }
    var map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);
    var marker = new google.maps.Marker({
            position: myLatlng,
            map: map,
            title: 'Contact'
        }
    );
}
google.maps.event.addDomListener(window, 'load', initialize);
