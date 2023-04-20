<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="App.css">
    </head>

    <body>
        <div class="top">
           <h1><u>NEW ORLEANS PHOTOS!!!<u></h1>
        </div>
        <div class="mid">
        <div class="photos">   
        <?php
//387c3b0150279586f2a565af7c70ef76

//Secret:
//b3312a681a6feff2
        $tag = 'new+orleans';
        $url = 'https://www.flickr.com/services/rest/?method=flickr.photos.search&api_key=5a0145fbd7cfbdf72ed1ce14e7bbbfbe&tags=New+Orleans&per_page=15&format=json&nojsoncallback=1';

        $data = json_decode(file_get_contents($url));

        $photos = $data->photos->photo;
        foreach ($photos as $photo) {
          $url = 'http://farm'.$photo->farm.'.staticflickr.com/'.$photo->server.'/'.$photo->id.'_'.$photo->secret.'.jpg';
          echo '<img src="'.$url.'">';

        }
        ?>
        </div>
        </div>

    <body>
</html>
