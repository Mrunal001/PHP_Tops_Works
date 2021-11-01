

<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Page Title</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>
    <style>
        body
        {
            background-image: url('images/man5.jpg');
            background-repeat: no-repeat;
            background-size: cover;
        }
        table
        {
            width: 60%;
            /*background-color: rgba(0,0,255,0.2);*/
            background-image: url('images/man6.jpg');
            background-size: cover;
            border:none;
            opacity: 0.5;    
        }
        table:hover{
            opacity: 1;
            filter: grayscale(100%);
        }
        input,textarea
        {
            width: 200px;
            height: 40px;
        }
        
        #btn
        {
            width: 250px;

            height: 45px;
            background-color: red;
            color:white;
            font-size: 20px;
            border:none;
        }
        h1
        {
            color:red;
            text-shadow:1px 2px black;
        }
    </style>
</head>
<body bgcolor="lightblue">
    <center>
        <h1>Address Print</h1>
        <hr style="border:solid 2px red">
        <form method="POST" action="logic_constructor_address.php">
            <table align="center" border="0" cellpadding="5" cellspacing="5">
              <thead>
                  <tr>
                  <th>Enter Firstname :</th>
                <td><input type="text" name="fname" placeholder="Enter Name *" required></td>  
                </tr>
                  <tr>
                  <th>Enter Lastname :</th>
                  <td><input type="text" name="lname" placeholder="Enter Lastname *" required></td> 
                 </tr>
                 <tr>
                  <th>Enter Mobile :</th>
                  <td><input type="text" name="mob" placeholder="Enter Mobile *" required></td> 
                  </tr>
                  <tr>
                  <th>Enter Email :</th>
                  <td><input type="text" name="em" placeholder="Enter Email *" required></td> 
                  </tr>
                  <tr>
                  <th>Enter Address :</th>
                  <td><textarea name="add" placeholder="Enter Address *" required></textarea></td> 
             </tr>

               <tr>
                   <td align="center" colspan="2"><input type="submit" name="sub" value="Submit" id="btn"></td>
               </tr>
                </thead>

             

            </table>
        </form>
    </center>
    
</body>
</html>