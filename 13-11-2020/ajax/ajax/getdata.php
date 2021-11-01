<?php
$con=mysqli_connect("localhost","root","","task");
//load state while select country

if(isset($_POST["cn"]))
{
    $cn=$_POST["cn"];
    $sel="select * from tbl_state where cid='$cn'";
    $query=mysqli_query($con,$sel);
    while($result=mysqli_fetch_array($query))

    {

        ?>

<option value="<?php echo $result["sid"];?>"><?php echo $result["sname"];?></option>

        <?php
    }
}


//load city while select state using ajax


if(isset($_POST["st"]))
{
    $st=$_POST["st"];
    $sel="select * from tbl_city where sid='$st'";
    $query=mysqli_query($con,$sel);
    while($result=mysqli_fetch_array($query))

    {

        ?>

<option value="<?php echo $result["ctid"];?>"><?php echo $result["ctname"];?></option>

        <?php
    }
}

?>