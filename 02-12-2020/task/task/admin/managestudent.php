<!-- manage all employee -->
<html>

<head>
    <meta property="og:title" content="https://shop.adidas.co.in/title">
    <meta property="og:description" content="https://shop.adidas.co.in/description">
    <meta property="og:url" content="https://shop.adidas.co.in/">
    <meta property="og:image" content="https://content.adidas.co.in/static/header/original.png">
</head>

<div class="col-md-9 col-xs-12" id="content-panel">
    <h2 align="center">Manage All Student</h2>
    <hr style="width:50%; border:solid 1px red">
    <table width="100%" class="table-hover table-bordered" align="center" style="padding:10px !important">

        <tr>
            <th>#Stdid</th>
            <th>Photo</th>
            <th>FirstName</th>
            <th>LastName</th>

            <th>Email</th>
            <th>Address</th>
            <th>Mobile</th>
            <th>Country</th>
            <th>State</th>
            <th>city</th>

            <th style="width:150%">
                <center>Action</center>
            </th>

        </tr>

        <?php
foreach($shwstd as $shwstd1)
{

?>


            <tr>
                <td>
                    <?php echo $shwstd1["emplid"];?>
                </td>
                <td><img src="../<?php echo $shwstd1["photo"];?>" style="width:65px; height:45px"></td>
                <td>
                    <?php echo $shwstd1["firstname"];?>
                </td>
                <td>
                    <?php echo $shwstd1["lastname"];?>
                </td>
                <td>
                    <?php echo $shwstd1["email"];?>
                </td>
                <td>
                    <?php echo $shwstd1["address"];?>
                </td>
                <td>
                    <?php echo $shwstd1["mobile"];?>
                </td>
                <td>
                    <?php echo $shwstd1["cid"];?>
                </td>
                <td>
                    <?php echo $shwstd1["sid"];?>
                </td>
                <td>
                    <?php echo $shwstd1["ctid"];?>
                </td>

                <td colspan="2">
                    <a href="https://api.whatsapp.com/send?phone=+91<?php echo $shwstd1["mobile"];?>"><button type="button" class="btn btn-sm btn-success">SendWhatsap <span class="fa fa-whatsapp"></span></button></a> |

                    <a href="<?php echo $mainurl;?>ManageStudent?delstd=<?php echo $shwstd1[" emplid "];?>" onclick="return confirm('Are You sure to Delete Data ?')"><button type="button" class="btn btn-sm btn-danger" >Delete <span class="fa fa-trash"></span></button></a>

                </td>

            </tr>


            <?php
}
?>
    </table>


</div>

</div>
</div>