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
$name = $weather['name'];
$id = $weather['weather'][0]['id'];




if($id == "800") 
   {
   $text = "<h1>Yeah! <h2>Lovely</h2><h1> clear sky.</h1>";
   }

if($id == "801") 
   {
   $text = "<h1>There only some <h2>lovely</h2><h1> clouds. Don't cry.</h1>";
   }

if($id == "802") 
   {
   $text = "<h1>Is's full with <h2>fucking</h2><h1> scattered clouds.</h1>";
   }

if($id == "803") 
   {
   $text = "<h1>Is's full with <h2>shitty</h2><h1> broken clouds.</h1>";
   }

if($id == "804") 
   {
   $text = "<h1>Ok. Thats bad. <h2>Gray</h2><h1> all over the sky.</h1>";
   }





    ?>



<!DOCTYPE html>
<html lang="de">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Honest Weather</title>
      <link href="style.css" rel="stylesheet" type="text/css">
      <link href='http://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>
  </head>
  <body>
       <?php echo $text; ?>.
<br><br>

      
<p>Ah. And it's <?php echo $temp; ?>°. But nevermind.</p>
      

  </body>
</html>

