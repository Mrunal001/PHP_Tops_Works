<!DOCTYPE html>
<html>

<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Page Title</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>

    <script>
        function add() {

            var a = parseInt(prompt('Enter N1 Number Here '));
            var b = parseInt(prompt('Enter N2 Number Here '));
            var c = a + b;
            alert('Additions of Two numbers is :' + c)

        }


        function subs() {

            var a = parseInt(prompt('Enter N1 Number Here '));
            var b = parseInt(prompt('Enter N2 Number Here '));
            var c = a - b;
            alert('Substractions of Two numbers is :' + c)

        }


        function mult() {

            var a = parseInt(prompt('Enter N1 Number Here '));
            var b = parseInt(prompt('Enter N2 Number Here '));
            var c = a * b;
            alert('Multip-lications of Two numbers is :' + c)

        }
    </script>


</head>

<body>

    <center>
        <button type="button" id="btnn" onclick="add()">Additions</button><br>
        <button type="button" id="btnn1" onclick="subs()">Substract</button><br>
        <button type="button" id="btnn2" onclick="mult()">Multiplications</button><br>



    </center>

</body>

</html>