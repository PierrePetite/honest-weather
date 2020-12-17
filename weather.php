<?php

//MIT GET DIE STADT AUS URL HOLEN
$city = $_GET['city'];
$city = strtoupper($city);

$url = "http://api.openweathermap.org/data/2.5/weather?q=$city&appid=56ff5b81f1428fff3622b867370f9b5f&units=metric&lang=de"; 
    
    // JSON FILE
    $data = file_get_contents($url); // WIRFT ES  IN EINE VARIABLE
    $weather = json_decode($data, true); // decoding vom JSON


//Array zu Variable
$temp = $weather['main']['temp'];
$type = $weather['weather'][0]['main'];
$icon = $weather['weather'][0]['icon'];
$name = $weather['name'];
$id = $weather['weather'][0]['id'];


if($id == "800") 
   {
   $text1 = "Holy!";
    $text2 = "You have";
    $text3 = "freaking";
    $text4 = "clear sky!";
    $iconurl = "clear sky!";
   }

if($id == "801") 
   {
   $text1 = "Whoop!";
    $text2 = "Almost no";
    $text3 = "fucking";
    $text4 = "clouds out there.";
   }

if($id == "802") 
   {
   $text1 = "Nice.";
    $text2 = "Only some";
    $text3 = "lovely";
    $text4 = "clouds.";
   }

if($id == "803") 
   {
   $text1 = "You like gray?";
    $text2 = "'cause it's";
    $text3 = "fucking";
    $text4 = "cloudy.";
   }

if($id == "804") 
   {
   $text1 = "Shit.";
    $text2 = "It's";
    $text3 = "fucking";
    $text4 = "cloudy.";
   }







    ?>




<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Honest Weather</title>

    <link href="./main.css" rel="stylesheet" />
  </head>
  <body>
    <main>
      <img src="./assets/<?php echo $icon; ?>.svg" />
      <div class="text">
        <p class="title">
          <br><br><?php echo $text1; ?><br />
          <?php echo $text2; ?><br />
          <span class="highlighted"><?php echo $text3; ?></span>
          <br />
          <?php echo $text4; ?>
        </p>
            <br><br>
        
        <p class="sub">Ah. And it's <?php echo $temp; ?>°. But nevermind.</p>

       
      </div>
    </main>
      
      
    <main>
      <img src="./assets/<?php echo $icon; ?>.svg" />
      <div class="text">
        <p class="title">
          <br><br><?php echo $text1; ?><br />
          <?php echo $text2; ?><br />
          <span class="highlighted"><?php echo $text3; ?></span>
          <br />
          <?php echo $text4; ?>
        </p>
            <br><br>
        
        <p class="sub">Ah. And it's <?php echo $temp; ?>°. But nevermind.</p>

       
      </div>
    </main>  
  </body>
</html>
