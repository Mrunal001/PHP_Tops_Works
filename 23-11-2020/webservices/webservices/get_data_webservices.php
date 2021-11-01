<!DOCTYPE html>
<html>

<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Page Title</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>
</head>

<body>

    <center>
        <h3>Get data of Json in web formate using webservices</h3>

        select country :<select name="country">
        <option value="">-select country-</option>
          <?php
          $url="list_country.json";
          $file=file_get_contents($url, true);
          $cn=json_decode($file);

          foreach($cn as $cn1)
          {


          ?>

        <option value="<?php echo $cn1;?>"><?php echo $cn1;?></option>
         <?php
         
          }

          ?>
    
    </select><br><br> select state :<select name="state">
            <option value="">-select state-</option>
           
          <?php
          $url="list_state.json";
          $file=file_get_contents($url, true);
          $st=json_decode($file);

          foreach($st as $st1)
          {


          ?>

        <option value="<?php echo $st1;?>"><?php echo $st1;?></option>
         <?php
         
          }

          ?>
            </select><br><br> select city :<select name="country">
            <option value="">-select city-</option>
           
          <?php
          $url="list_city.json";
          $file=file_get_contents($url, true);
          $ct=json_decode($file);

          foreach($ct as $ct1)
          {


          ?>

        <option value="<?php echo $ct1;?>"><?php echo $ct1;?></option>
         <?php
         
          }

          ?>
            </select><br><br>
    </center>

</body>

</html>