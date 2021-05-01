<?php
if(!empty($_GET['location'])){
    $maps_url = 'https://maps.googleapis.com/maps/geocode/json?address='.$_GET['location'];
    //cos os spaces between location to avoid % on urls do url encode i.e .urlencode($_GET['location']); 

}
$maps_resp = file_get_contents($maps_url);
//convert json response into array and store into maps array
// we need the key value pairs of thr latitude and longitude
$maps_array = json_decode($maps_resp, true);
$lat =$maps_array['results'][0]['geometry']['location']['lat'];
$lng = $maps_array['results'][0]['geometry']['location']['lng'];

//things needed from instagram endpoint are the url and parameters lat, lng and client_id
//generate your client_id from instagram developer dashboard

$instagram_url = 'https://api.instagram.com/v1/media/search?lat=' . $lat . '&lng=' .$lng .

'&client_id=59cd273f121d4139b97a8a027a993ddf';
?>