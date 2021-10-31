

<!-- content start here -->
<div class="content" style="height: auto">
    <!-- <div class="container-fluid"> -->
    <div class="row">
<!-- content panel start here -->
<div class="col-md-12 col-xs-12" id="content-panel" style="height: auto;">

<?php
if(!isset($_SESSION["stdid"]))
{
?>

<div class="col-md-10 col-xs-12 col-md-offset-1">

<div class="card" style="box-shadow: 2px 2px 2px 2px gray;">
<div class="card-body">
<h3 style="padding:15px;">My Cart <span class="badge badge-lg badge-danger" style="background-color: red; color:white">0</span></h3>
<center>
<img src="<?php echo $baseurl;?>images/empty.png" style="padding:20px; width: 40%; height: 250px;">
<h4>Missing Cart items?</h4>
<h6>Login to see the items you added previously</h6>
<a href="<?php echo $mainurl;?>Login"><button type="button" class="btn btn-lg btn-danger" style="width: 20%;">Login</button></a>
</center>
<br><br>

</div>
</div>
</div>

<?php
}
else
{
?>

<div class="col-md-10 col-xs-12 col-md-offset-1">
<div class="card" style="box-shadow: 2px 2px 2px 2px gray;">
<div class="card-body">
<h3 style="padding:15px;">My Cart <span class="badge badge-lg badge-danger" style="background-color: red; color:white"><?php echo $crttot[0]["total"]; ?></span></h3>

<table class="table table-responsive">
    <thead>
        <tr>
            <th>Id</th>
            <th>image</th>
            <th>StudenName</th>
            <th>CourseName</th>
            <th>qty</th>
            <th>price</th>
            <th>Subtotal</th>
            <th>Action</th>
            
        </tr>
    </thead>
    <tbody>
        <?php
         foreach($crt as $crt1)
         {
        ?>
        <tr>

        
            <td><?php echo $crt1["cartid"];?></td>
            <td><img src="admin/<?php echo $crt1["photo"];?>" style="width: 50px; height: 50px;"></td>
            <td><?php echo $crt1["firstname"];?></td>
            <td><?php echo $crt1["coursename"];?></td>
            <td><?php echo $crt1["qty"];?></td>
            <td><?php echo $crt1["price"];?></td>
            <td><?php echo $crt1["subtotal"];?></td>
            
            <td><a href="<?php echo $mainurl;?>ViewCart?delcrt=<?php echo $crt1["cartid"];?>" class="btn btn-sm btn-danger" onclick="return confirm('Are You sure To Delete Items from Cart')"><span class="fa fa-trash"> Delete</span></td>
        </tr>
        <?php
        }
        ?>

        <tr>
        <td align="center" colspan="8">
            <div class="jumbotron" style="padding:10px; background-color: lightskyblue; height: 100px;">

            <h4 align="right" style="color:red">Subtotal of Products :Rs.<?php echo $sumcrt[0]["total"];?>
            </h4>
<a href="<?php echo $mainurl;?>Checkout"><button type="button" class="btn btn-lg btn-danger pull-right">Checkout Here!</button></a>
        
        
            </div>
        </td>
        </tr>
    </tbody>
</table>
</div>
</div>
</div>

<?php
}
?>

<div class="clearfix"></div>

            </div>
        </div>
    </div>