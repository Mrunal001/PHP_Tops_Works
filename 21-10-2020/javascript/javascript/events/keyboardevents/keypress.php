<!DOCTYPE html>
<html>

<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Page Title</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>
    <script type="text/javascript">
        function test()

        {

            document.getElementById("imgg").src = "images/i.cms";

        }

        function test1()

        {

            document.getElementById("imgg").src = "images/i1.jpg";

        }
    </script>
</head>

<body>

    <img src="images/i1.jpg" style="width: 350px; height: 300px;" id="imgg" onmouseover="test1()" onmouseout="test()">

</body>

</html>