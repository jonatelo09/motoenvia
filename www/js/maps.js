let origin, destination, map;

let origin_lat_lng;

let dest_lat_lng;

let directionsDisplay, directionsService, DistanceMatrixService, geocoder

let from_places, to_places;

function initialize() {

    let myLatLng = {
        lat: 21.1580167,
        lng: -86.8570172
    };

    let myStyles = [
        {
            "featureType": "poi",
            "stylers": [
                {
                    "visibility": "off"
                }
            ]
        }
    ];

    map = new google.maps.Map(document.getElementById('map'), {
        zoom: 14,
        center: myLatLng,
        disableDefaultUI: true,
        mapTypeId: google.maps.MapTypeId.ROADMAP,
        //styles: myStyles
    });

    directionsDisplay = new google.maps.DirectionsRenderer({'draggable': false});

    directionsService = new google.maps.DirectionsService();

    DistanceMatrixService = new google.maps.DistanceMatrixService();

    geocoder = new google.maps.Geocoder();

    let options = {
        //types: ['geocode'],
        componentRestrictions: {
            country: "MX",
            //administrativeArea: "Quintana Roo" // NOT WORKING...
        }
    };

    from_places = new google.maps.places.Autocomplete(document.getElementById('origin_input'), options);
    to_places = new google.maps.places.Autocomplete(document.getElementById('destination_input'), options);

    google.maps.event.addListener(from_places, 'place_changed', function () {
        $('#cost').val('');
        let from_place = from_places.getPlace();
        let from_address = from_place.formatted_address;
        origin_lat_lng = {lat: from_places.getPlace().geometry.location.lat(), lng: from_places.getPlace().geometry.location.lng()}
        $('#origin').val(from_address);
        if (from_address) {
            setRoute()
        }
    });

    google.maps.event.addListener(to_places, 'place_changed', function () {
        $('#cost').val('');
        let to_place = to_places.getPlace();
        let to_address = to_place.formatted_address;
        dest_lat_lng = {lat: to_places.getPlace().geometry.location.lat(), lng: to_places.getPlace().geometry.location.lng()}
        $('#destination').val(to_address);
        if (to_address) {
            setRoute()
        }
    });
}

function setRoute() {
    let origin = $('#origin').val();
    let destination = $('#destination').val();
    if (origin && destination) {
        let travel_mode = 'DRIVING';
        displayRoute(travel_mode, origin_lat_lng, dest_lat_lng, directionsService, directionsDisplay);
        calculateDistance(travel_mode, origin_lat_lng, dest_lat_lng);
    }
}

function displayRoute(travel_mode, origin, destination, directionsService, directionsDisplay) {
    directionsService.route({
        origin: origin,
        destination: destination,
        travelMode: travel_mode,
        avoidTolls: true
    }, function (response, status) {
        if (status === 'OK') {
            directionsDisplay.setMap(map);
            directionsDisplay.setDirections(response);
        } else {
            directionsDisplay.setMap(null);
            directionsDisplay.setDirections(null);
            alert('Could not display directions due to: ' + status);
        }
    });
}

// calculate distance , after finish send result to callback function
function calculateDistance(travel_mode, origin, destination) {

    DistanceMatrixService.getDistanceMatrix(
        {
            origins: [origin],
            destinations: [destination],
            travelMode: google.maps.TravelMode[travel_mode],
            unitSystem: google.maps.UnitSystem.IMPERIAL, // miles and feet.
            //unitSystem: google.maps.UnitSystem.metric, // kilometers and meters.
            avoidHighways: false,
            avoidTolls: false
        }, save_results);
}

function save_results(response, status) {
    if (status != google.maps.DistanceMatrixStatus.OK) {
        $('#result').html(err);
    } else {
        let origin = response.originAddresses[0];
        let destination = response.destinationAddresses[0];
        if (response.rows[0].elements[0].status === "ZERO_RESULTS") {
            $('#result').html("Sorry , not available to use this travel mode between " + origin + " and " + destination);
        } else {
            let distance = response.rows[0].elements[0].distance;
            let duration = response.rows[0].elements[0].duration;
            let distance_in_kilo = distance.value / 1000; // the kilo meter
            let distance_in_mile = distance.value / 1609.34; // the mile
            let duration_text = duration.text;
            appendResults(distance_in_kilo, distance_in_mile, duration_text);
            //sendAjaxRequest(origin, destination, distance_in_kilo, distance_in_mile, duration_text);
        }
    }
}

// append html results
function appendResults(distance_in_kilo, distance_in_mile, duration_text) {
    $('#distance').val(Math.round((distance_in_kilo + Number.EPSILON) * 100) / 100)
    setPrice()
}


// get current Position
function getCurrentPosition() {
    if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(setCurrentPosition);
    } else {
        alert("Geolocation is not supported by this browser.")
    }
}

// get formatted address based on current position and set it to input
function setCurrentPosition(pos) {

    var latlng = {lat: parseFloat(pos.coords.latitude), lng: parseFloat(pos.coords.longitude)};
    geocoder.geocode({ 'location' :latlng  }, function (responses) {
        if (responses && responses.length > 0) {
            $("#origin").val(responses[1].formatted_address);
            $("#from_places").val(responses[1].formatted_address);
        } else {
            alert("Cannot determine address at this location.")
        }
    });
}


