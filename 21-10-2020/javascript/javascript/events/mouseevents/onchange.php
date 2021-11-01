<!DOCTYPE html>
<html>

<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Page Title</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='css/bootstrap.css'>
    <script src='js/bootstrap.min.js'></script>


    <script>
        function subtotal() {

            var p = document.getElementById("price").value;
            var q = document.getElementById("qty").value;
            var tt = p * q;
            document.getElementById("tot").innerHTML = +tt;

        }
    </script>
</head>

<body>

    <div class="container-fluid">
        <Mdiv class="row">
            <div class="col-md-12 col-xs-12">
                <h1 align="center">ViewCart <span class="badge badeg-lg badge-danger">1</span></h1>

                <table align="center" class="table table-bordered table-striped table-hover  table-condensed">

                    <tr>
                        <th>Id</th>
                        <th>Pimages</th>
                        <th>Pname</th>
                        <th>Price</th>
                        <th>Select Qty</th>
                        <!-- <th style="color:green; font-size:25px">Subtotal</th> -->
                    </tr>

                    <tr>
                        <td>1</td>


                        <td>1.jpg</td>

                        <td>samsung</td>

                        <td><input type="text" name="price" id="price" value="4500" style="border:none" readonly></td>

                        <td><input type="number" name="qty" value="1" id="qty" min="1" max="10" class="form-control" onchange="return subtotal(this.value)"></td>

                        <!-- <td>Rs.<label id="tot">4500</label></td> -->

                    </tr>

                    <tr>
                        <td align="right" colspan="6" style="background-color:red; padding:10px; font-size:28px; color:white; width:30%">Subtotal is : Rs.<label id="tot">4500</label></td>

                    </tr>
                </table>

            </div>
        </Mdiv>
    </div>

</body>

</html>