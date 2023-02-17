<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Twin Cities</title>
    <link rel="stylesheet" href="stylesheet.css">
    <script type="text/javascript" src="mapAPI.js"></script>
    <script type="text/javascript" src="https://unpkg.com/@googlemaps/js-api-loader@1.0.0/dist/index.min.js"></script>
    <script type="text/javascript" async src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB41DRUbKWJHPxaFjMAwdrzWzbVKartNGg&callback=initLiverpoolMap" defer></script> <!-- Liverpool map API key-->
    <script type="text/javascript" async src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB4uF3Bgz3JJHFoLAxnv9g8TPrDCam1dCg&callback=initNOMap" defer></script> <!-- New Orleans map API key-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">


</head>
<body onload="initialize()">
    <!-- Header -->
    <br>
    <h2>Twin Cities</h2>
    <hr>
    <br>    

    <!-- Table for Maps ---------------------------------------------------->
    <table class="maps">
            <tr>
                <th><h3>Liverpool</h3></th>
                <th><h3>New Orleans</h3></th>
            </tr>

            <tr>
            <td>
        <!-- Liverpool Map API-->
        <div id="LiverpoolMap"></div>
            </td> 

            <td>
        <!-- </td> New Orleans Map API -->
        <div id="NOMap"></div>
        
            </td>
            </tr>
    </table>




<!-- Weather API --------------------------------------------------------->
    <?php
        $Liv = simplexml_load_file('https://api.openweathermap.org/data/2.5/weather?lat=53.4106&lon=-2.9779&appid=cdb2d04f08a577bf15c2dfc030f9c845&units=metric&mode=xml') or die("Can't load file");
        $NewO = simplexml_load_file('https://api.openweathermap.org/data/2.5/weather?lat=29.951065&lon=-90.071533&appid=cdb2d04f08a577bf15c2dfc030f9c845&units=metric&mode=xml') or die("Can't load file");
    ?>

    <table class="table" id="weatherAPIs">
        <tr>
            <th>Liverpool</th>
            <th>New Orleans</th>
        </tr>
        <tr>
            <td>
                <table class="table table-striped-columns" id="liverpoolWeather">
                        <tr>
                            <td>Condition:</td>
                            <td><?php echo $Liv->weather['value'] ?></td>
                        </tr>
                        <tr>
                            <td>Temprature:</td>
                            <td><?php echo $Liv->temperature['value']; ?></td>
                        </tr>
                        <tr>
                            <td>Wind:</td>
                            <td><?php echo $Liv->wind->speed['value'] . $Liv->wind->speed['unit'] . " (" . $Liv->wind->direction['name'] . ") From a " . $Liv->wind->direction['name'] . " direction." ?> </td>
                        </tr>
                        <tr>
                            <td>Humidity:</td>
                            <td><?php echo $Liv->humidity['value'] . $Liv->humidity['unit'] ?></td>
                        </tr>
                        <tr>
                            <td>Pressure:</td>
                            <td><?php echo $Liv->pressure['value'] . $Liv->pressure['unit'] ?></td>

                        </tr>
                        <tr>
                            <td>Sunrise:</td>
                            <td><?php echo $Liv->city->sun['rise'];   ?> </td>
                        </tr>
                        <tr>
                            <td>Sunset:</td>
                            <td><?php echo $Liv->city->sun['set'];   ?> </td>
                        </tr>
                </table>
            </td>
            <td>
                <table class="table table-striped-columns" id="newOrleansWeather">
                    <tr>
                            <td>Condition:</td>
                            <td><?php echo $NewO->weather['value'] ?></td>
                        </tr>
                        <tr>
                            <td>Temprature:</td>
                            <td><?php echo $NewO->temperature['value']; ?></td>
                        </tr>
                        <tr>
                            <td>Wind:</td>
                            <td><?php echo $NewO->wind->speed['value'] . $NewO->wind->speed['unit'] . " (" . $NewO->wind->direction['name'] . ") From a " . $NewO->wind->direction['name'] . " direction." ?> </td>
                        </tr>
                        <tr>
                            <td>Humidity:</td>
                            <td><?php echo $NewO->humidity['value'] . $NewO->humidity['unit'] ?></td>
                        </tr>
                        <tr>
                            <td>Pressure:</td>
                            <td><?php echo $NewO->pressure['value'] . $NewO->pressure['unit'] ?></td>

                        </tr>
                        <tr>
                            <td>Sunrise:</td>
                            <td><?php echo $NewO->city->sun['rise'];   ?> </td>
                        </tr>
                        <tr>
                            <td>Sunset:</td>
                            <td><?php echo $NewO->city->sun['set'];   ?> </td>
                        </tr>
                </table>
            </td>
        </tr>
    </table>

</body>
</html>