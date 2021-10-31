<html>

<head>

    <style>
        h1{
            background-color: blue;
            color: red;
            
        }
        form {
            background-color: blue;
            color:cyan;
            font-size: 18px;
            font-family:Arial, Helvetica, sans-serif;
            padding: 10px;
            margin-top: 180px;
            margin-left: 400px;
            margin-right: 400px;
            padding-bottom: 50px;
        }
        
        input
         {

            height: 30px;
            font-size:20px;
            font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
            margin-left: 20px;
            color: black;
            
            
        }
    </style>
</head>

<body bgcolor="lightblue">
    
    
    <form method="POST">
        <h1 align="center">Enter Your Login Details</h1>
        User Name: <input type="text"  name="uname"  required><br><br>
        Password: <input type="password" name="pass"  required><br><br>

        <input type="submit" name="sub" value="Submit">
        <input type="reset" name="res" value="Reset">

    </form>
</body>