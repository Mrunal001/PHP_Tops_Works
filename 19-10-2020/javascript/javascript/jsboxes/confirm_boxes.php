<!DOCTYPE html>
<html>

<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>alert </title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>
</head>

<body>

    <script type="text/javascript">
        function test() {

 
             if(confirm('Are You sure to logout User ?'))

              {

                alert('You are Logout Succefully')
                window.location='https://www.google.com/';

              }
              else
              {
                
                window.location='confirm_boxes.php';


              }
        }


        function test1() {

 
if(confirm('Are You sure to delete User ?'))

 {

   alert('You are Deleted Succefully')
   window.location='https://www.google.com/';

 }
 else
 {
   
   window.location='confirm_boxes.php';


 }
}
    </script>

    <button type="button" onclick="test()">Logout here</button>
<br>

<a href="#" onclick=test1()>Delete Me</a>

</body>

</html>