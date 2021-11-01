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
          $url="http://country.io/names.json";
          $file=file_get_contents($url);
          $cn=json_decode($file, true);

          asort($cn);     
        
        // arsort($cn);         
          
          foreach($cn as $cn1)
          {
            
        ?>

       <option value="<?php echo $cn1;?>"><?php echo $cn1;?></option>

<?php

          }

?>

        
        </select>
        
    </center>

</body>

</html>