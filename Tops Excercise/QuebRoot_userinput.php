<form method="POST">
    Input Number to Find Queb: <input type="text" name="qno" required><br><br>

    <input type="submit" name="submit" value="submit">
</form>

<?php

if(isset($_POST["submit"]))
{
    $qno=$_POST["qno"];

    $no=$qno*3;

    echo "Queb Root is: $no";
}

?>