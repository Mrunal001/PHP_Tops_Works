<?php
$con=mysqli_connect("localhost","root","","task");

?>
    <!DOCTYPE html>
    <html>

    <head>
        <meta charset='utf-8'>
        <meta http-equiv='X-UA-Compatible' content='IE=edge'>
        <title>Page Title</title>
        <meta name='viewport' content='width=device-width, initial-scale=1'>


        <!-- using ajax to load data from server using ajax with jquery-->
        <script src="js/jquery.js"></script>
        <script type="text/javascript">
            function str(val) {
                $.ajax({
                    type: "POST",
                    url: "getdata.php",
                    data: "cn=" + val,

                    success: function(data) {

                        $("#st").html(data);
                    }
                });
            }

            function str1(val) {
                $.ajax({
                    type: "POST",
                    url: "getdata.php",
                    data: "st=" + val,

                    success: function(data) {

                        $("#ct").html(data);
                    }
                });
            }
        </script>

    </head>

    <body>

        <center>
            <h2 align="center">
                Ajax Load country, state and City

            </h2>

            <hr>


            <form method="post">

                Select country :<select name="country" id="cn" onchange="return str(this.value)">
            <option value="">-Select country-</option>
             <?php
              $sel="select * from tbl_country";
              $query=mysqli_query($con,$sel);
              while($result=mysqli_fetch_array($query))
              {

             ?>
            <option value="<?php echo $result["cid"];?>"><?php echo $result["cname"];?></option>

             <?php

              }
              ?>


        </select>
                <br><br> Select state :<select name="state" id="st" onchange="return str1(this.value)">
            <option value="">-Select state-</option>
       
        </select><br><br> Select city :<select name="city" id="ct">
            <option value="">-Select city-</option>
       
        </select>
            </form>
        </center>
    </body>

    </html>