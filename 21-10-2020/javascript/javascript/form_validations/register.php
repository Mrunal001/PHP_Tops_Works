<!DOCTYPE html>
<html>

<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Page Title</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='js/valid.js'></script>
    <style>
        #left-sidebar {
            width: 40%;
            height: auto;
            float: left;
        }
        
        #left-sidebar img {
            width: 20%;
            height: 80px;
            margin-top: 7%;
            margin-left: 19%;
            position: absolute;
        }
        
        #left-sidebar ul {
            margin-top: 11%;
            font-size: 22px;
            margin-left: 19%;
            position: absolute;
            padding: 8px 60px;
            text-decoration: none;
            list-style-type: none;
        }
        
        #left-sidebar a {}
        
        #right-sidebar {
            width: 60%;
            height: auto;
            float: right;
            margin-right: 5%;
        }
        
        form {
            background-color: white;
            width: 70%;
            padding: 20px;
            box-shadow: 2px 8px 2px gray;
        }
        
        .error {
            color: red;
        }
    </style>
</head>

<body bgcolor="lightblue">

    <div id="left-sidebar">
        <img src="images/login-removebg-preview.png">
        <br>
        <ul>
            <li>Why Join with us</li>
            <li>24x7 support</li>
            <li>Big Sale</li>
            <li>Easy Return Policy</li>
        </ul>

    </div>


    <div id="right-sidebar">
        <center>
            <h1 align="center">Register form</h1>
            <hr style="border:solid 2px red; width:30%">


            <form method="POST" name="frm" action="welcome.php" onsubmit="return validation(this.value)">
                <label>Upload Photo * &nbsp;&nbsp;&nbsp;&nbsp;</label>
                <input type="file" name="img" placeholder="PHOTO *" multiple>
                <br>
                <span class="error" id="imgg"></span>
                <br><br>
                <label>FirstName* &nbsp;&nbsp;&nbsp;&nbsp;</label>
                <input type="text" name="fnm" placeholder="Firstname *">
                <br><br>
                <label>MiddleName* &nbsp;&nbsp;&nbsp;&nbsp;</label>
                <input type="text" name="mnm" placeholder="Middlename *">
                <br><br>
                <label>LastName* &nbsp;&nbsp;&nbsp;&nbsp;</label>
                <input type="text" name="lnm" placeholder="Lastname *">
                <br><br>

                <label>Email * &nbsp;&nbsp;&nbsp;&nbsp;</label>
                <input type="email" name="em" placeholder="Email *">
                <br><br>


                <label>Password *</label>
                <input type="password" name="pass" placeholder="Password *" id="pwd">
                <br><br>


                <label>Confirm-Password *</label>
                <input type="password" name="cpass" placeholder="Password *" id="cpwd">
                <br><br>


                <label>Gender *</label> Male <input type="radio" name="gender" value="male"> Female <input type="radio" name="gender" value="female">
                <br><br>


                <label>Hobbies *</label> Reading <input type="checkbox" name="hobb" value="reading"> Writing <input type="checkbox" name="hobb" value="writing">
                <br><br>


                <label>Address * &nbsp;&nbsp;&nbsp;&nbsp;</label>
                <textarea name="add" placeholder="Address *"></textarea>
                <br><br>



                <label>Select Country * &nbsp;&nbsp;&nbsp;&nbsp;</label>
                <select name="add" placeholder="Country *">
                 <option value="">--Select Country--</option>
                 <option value="1">India</option>
                 <option value="2">Usa</option>
                 <option value="3">China</option>
                 <option value="4">Srilanka</option>
                 <option value="5">Australia</option>
                    
                </select>
                <br><br>




                <label>Select Country * &nbsp;&nbsp;&nbsp;&nbsp;</label>
                <select name="add" placeholder="Country *" multiple max="3">
                 <option value="">--Select Country--</option>
                 <option value="1">India</option>
                 <option value="2">Usa</option>
                 <option value="3">China</option>
                 <option value="4">Srilanka</option>
                 <option value="5">Australia</option>
                    
                </select>
                <br><br>



                <label>DOB * &nbsp;&nbsp;&nbsp;&nbsp;</label>
                <input type="date" placeholder="DOB *"></textarea>
                <br><br>




                <label>Mobile * &nbsp;&nbsp;&nbsp;&nbsp;</label>
                <input type="text" name="mob" placeholder="Mobile *"></textarea>
                <br><br>


                <input type="submit" name="sub" value="Register">
                <input type="reset" name="res" value="Clear">
                <!-- <button type="submit" name="sub">Login</button> -->


                <br>
                <br>

                <b>Have an Account ? <a href="form.html" style="color:red"> Login Here</a></b>

            </form>


        </center>

</body>

</html>