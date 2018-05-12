<?php
    function getLnt($zip){
    $url = "http://maps.googleapis.com/maps/api/geocode/json?address=".urlencode($zip)."&sensor=false";
    $result_string = file_get_contents($url);
    $result = json_decode($result_string, true);
    return $result['results'][0]['geometry']['location'];
    }

    getLnt("750341");
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title></title>
    </head>
    <body>
        <?php
         $val = getLnt('90001');
         echo "Latitude: ".$val['lat']."<br>";
         echo "Longitude: ".$val['lng']."<br>";
        ?>
    </body>
</html>
