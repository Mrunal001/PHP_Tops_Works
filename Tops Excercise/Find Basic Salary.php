<center>

    <h3>Check Basic Salary</h3>

    <form method="POST">

        Enter Basic Salary: <input type="text" name="salary" placeholder="Enter Basic Salary" required><br><br> Enter DA: <input type="text" name="da" placeholder="Enter DA" required><br><br> Enter HRA: <input type="text" name="hra" placeholder="Enter HRA"
            required><br><br> Enter PF: <input type="text" name="pf" placeholder="Enter PF" required><br><br> <input type="submit" name="submit" value="Submit"><br><br>

    </form>

</center>

<?php

if(isset($_POST["submit"]))
{
    $bs=$_POST["salary"];
    $da=$_POST["da"];
    $hra=$_POST["hra"];
    $pf=$_POST["pf"];

    $gs=$bs+$da+$hra-$pf;

    echo "<h3 align='center' style='color=red'>Your Salary Is: $gs</h3>";
}
?>