<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shirnk-to-fit=no">
<!--Link API JavaScript -->
    <script type="text/javascript" src="mapAPI.js"></script><!--google map API -->
    <script type="text/javascript" src="https://unpkg.com/@googlemaps/js-api-loader@1.0.0/dist/index.min.js"></script>
    <script type="text/javascript" async src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB41DRUbKWJHPxaFjMAwdrzWzbVKartNGg&callback=initLiverpoolMap" defer></script> <!-- Liverpool map API key-->
    <script type="text/javascript" async src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB4uF3Bgz3JJHFoLAxnv9g8TPrDCam1dCg&callback=initNOMap" defer></script> <!-- New Orleans map API key-->
<!--Link CSS Style Sheet-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous"> <!-- Bootstrap  CSS framework -->
    <link rel="stylesheet" href="stylesheet.css">


    <title>Twin Cities</title>
</head>
<!--This function runs the two map API's -->
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
        <div class="row">
            <div class="col-sm">
                <h3 class="text-center">Liverpool</h3>
                <div id="LiverpoolMap"></div>   <!-- Liverpool Map API-->
            </div>
            <div class="col-sm">
                <h3 class="text-center">New Orleans</h3>
                <div class="float-right"><div id="NOMap"></div></div>   <!-- New Orleans Map API -->
            </div>
        </div>
    </div>


<!-- Weather APIs --------------------------------------------------------->
    <br>
    <?php
        $Liv = simplexml_load_file('https://api.openweathermap.org/data/2.5/weather?lat=53.4106&lon=-2.9779&appid=cdb2d04f08a577bf15c2dfc030f9c845&units=metric&mode=xml') or die("Can't load file");
        $NewO = simplexml_load_file('https://api.openweathermap.org/data/2.5/weather?lat=29.951065&lon=-90.071533&appid=cdb2d04f08a577bf15c2dfc030f9c845&units=metric&mode=xml') or die("Can't load file");
    ?>

<div class="row">
    <div class="col" style="align-items: center;">
    <button class="button Liverpool" onclick="location.href='test_img.php'">Liverpool Flicker</button>
    </div>
    <div class="col">
        <button class="button newOrleans" onclick="location.href='new_o.php'">New Orleans Flicker</button>
    </div>
</div>

    <div class="container-fluid" id="weatherAPIs">
        <div class="row">
            <div class="col">
                    <div id="hiddenTitles">
                        <h4 style="text-align: center;">Liverpool</h4>
                    </div>
                <table class="table table-striped-columns" id="liverpoolWeather"> <!-- Liverpool Weather API --> 
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
                <div  id="hiddenTitles" >
                    <h4 style="text-align: center;">New Orleans</h4>
                </div>
                <table class="table table-striped-columns" id="newOrleansWeather"> <!-- New Orleans Weather API -->
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

    
    <div class="row">
        <div class="col"> <!--Liverpool RSS feed -->
            <div id="hiddenTitles">
                <h4 style="text-align: center;">Liverpool</h4>
            </div>
            <?php include "LiverpoolRSS.php"?>
        </div>
        <div class="col"> <!--New Orleans RSS feed -->
            <div  id="hiddenTitles" >
                <h4 style="text-align: center;">New Orleans</h4>
            </div>
            <?php include "NewOrleansRSS.php" ?>
        </div>
    </div>


    <!-- Bottom of page wave styling -->
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
    <path fill="#FFFFFF" fill-opacity="0.4" d="M0,128L12,106.7C24,85,48,43,72,74.7C96,107,120,213,144,261.3C168,309,192,299,216,266.7C240,235,264,181,288,133.3C312,85,336,43,360,37.3C384,32,408,64,432,117.3C456,171,480,245,504,261.3C528,277,552,235,576,234.7C600,235,624,277,648,277.3C672,277,696,235,720,224C744,213,768,235,792,218.7C816,203,840,149,864,144C888,139,912,181,936,218.7C960,256,984,288,1008,261.3C1032,235,1056,149,1080,117.3C1104,85,1128,107,1152,144C1176,181,1200,235,1224,245.3C1248,256,1272,224,1296,197.3C1320,171,1344,149,1368,149.3C1392,149,1416,171,1428,181.3L1440,192L1440,320L1428,320C1416,320,1392,320,1368,320C1344,320,1320,320,1296,320C1272,320,1248,320,1224,320C1200,320,1176,320,1152,320C1128,320,1104,320,1080,320C1056,320,1032,320,1008,320C984,320,960,320,936,320C912,320,888,320,864,320C840,320,816,320,792,320C768,320,744,320,720,320C696,320,672,320,648,320C624,320,600,320,576,320C552,320,528,320,504,320C480,320,456,320,432,320C408,320,384,320,360,320C336,320,312,320,288,320C264,320,240,320,216,320C192,320,168,320,144,320C120,320,96,320,72,320C48,320,24,320,12,320L0,320Z"></path>
    </svg>

    <!-- BootStrap JS Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
</body>
</html>
