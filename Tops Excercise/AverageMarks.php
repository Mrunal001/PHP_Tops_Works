<form method="POST">

Enter Marks of English: <input type="text" name="emark" required><br><br>
Enter Marks of Maths: <input type="text" name="mmark" required><br><br>
Enter Marks of Science: <input type="text" name="smark" required><br><br>

<input type="submit" name="submit" value="submit">

</form>

<?php

if(isset($_POST["submit"]))
{
    $em=$_POST["emark"];
    $mm=$_POST["mmark"];
    $sm=$_POST["smark"];

    $am=$em+$mm+$sm/3;

    echo "<h3 align='center' style='color=red'>Your Average Marks Is: $am</h3>";
}

?>
