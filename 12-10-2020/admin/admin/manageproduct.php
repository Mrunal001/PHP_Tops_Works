<!DOCTYPE html>

<head>
    <title>Visitors an Admin Panel Category Bootstrap Responsive Website Template | Responsive_table :: w3layouts</title>
</head>

<body>
    <section id="container">
        <!--header start-->
        <!--sidebar end-->
        <!--main content start-->
        <section id="main-content">
            <section class="wrapper">
                <div class="table-agile-info">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Manage All Product
                        </div>
                        <div>
                            <table class="table" ui-jq="footable" ui-options='{
        "paging": {
          "enabled": true
        },
        "filtering": {
          "enabled": true
        },
        "sorting": {
          "enabled": true
        }}'>
                                <thead>
                                    <tr>
                                        <th data-breakpoints="xs">ID</th>
                                        <th>Product Name</th>
                                        <th>Price</th>
                                        <th>OfferPrice</th>
                                        <th>Quentity</th>
                                        <th>Added Date</th>
                                        <th data-breakpoints="xs">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($product as $product1) { ?>

                                        <tr data-expanded="true">
                                            <td><?php echo $product1["pid"]; ?></td>
                                            <td><?php echo $product1["pname"]; ?></td>
                                            <td><?php echo $product1["price"]; ?></td>
                                            <td><?php echo $product1["offerprice"]; ?></td>
                                            <td><?php echo $product1["qty"]; ?></td>
                                            <td><?php echo $product1["added_date"]; ?></td>

                                            <td><button type="button" class="btn btn-sm btn-info"><span class="fa fa-edit"></span> Edit</button> | <button type="button" class="btn btn-sm btn-danger"><span class="fa fa-trash"></span> Delete</button></td>
                                        <?php } ?>

                                        </tr>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </section>
            <!-- footer -->

            <!-- / footer -->
        </section>

        <!--main content end-->
    </section>