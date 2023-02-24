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
    <div class="container-fluid">
        <br>
        <a style="text-decoration: none; color: black;" id="headerTitle" href="index.php"><h2 class="text-center">Twin Cities</h2></a>
        <hr>
        <br>    
    </div>

    <!-- Table for Maps ---------------------------------------------------->
    <div class="container-fluid">
        <div class="row ">
            <div class="col"><h3 class="text-center">Liverpool</h3></div>
            <div class="col"><h3 class="text-center">New Orleans</h3></div>
        </div>
        <div class="row">
            <div class="col">
                <div id="LiverpoolMap"></div><!-- Liverpool Map API-->
            </div>
            <div class="col">
                <div class="float-right"><div id="NOMap"></div></div><!-- New Orleans Map API -->
            </div>
        </div>
    </div>


<!-- Weather APIs --------------------------------------------------------->
    <br>
    <?php
        $Liv = simplexml_load_file('https://api.openweathermap.org/data/2.5/weather?lat=53.4106&lon=-2.9779&appid=cdb2d04f08a577bf15c2dfc030f9c845&units=metric&mode=xml') or die("Can't load file");
        $NewO = simplexml_load_file('https://api.openweathermap.org/data/2.5/weather?lat=29.951065&lon=-90.071533&appid=cdb2d04f08a577bf15c2dfc030f9c845&units=metric&mode=xml') or die("Can't load file");
    ?>

    <div class="container-fluid" id="weatherAPIs">
        <div class="row">
            <div class="col">
                <table class="table table-striped-columns" id="liverpoolWeather">
                        <tr>
                            <td>Condition:</td>
                            <td><?php echo $Liv->weather['value'] ?></td>
                        </tr>
                        <tr>
                            <td>Temprature:</td>
                            <td><?php echo $Liv->temperature['value']. " °C"; ?></td>
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
            </div>
            <div class="col">
                <table class="table table-striped-columns" id="newOrleansWeather">
                        <tr>
                            <td>Condition:</td>
                            <td><?php echo $NewO->weather['value'] ?></td>
                        </tr>
                        <tr>
                            <td>Temprature:</td>
                            <td><?php echo $NewO->temperature['value'] . " °C"; ?></td>
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
            </div>
        </div>
    </div>
    <br>


<!-- BootStrap JS Scripts -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
</body>
</html>