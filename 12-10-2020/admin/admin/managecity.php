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
                            Manage All City
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
                                        <th>CityName</th>
                                        <th data-breakpoints="xs">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($city as $city1) { ?>

                                        <tr data-expanded="true">
                                            <td><?php echo $city1["ctid"]; ?></td>
                                            <td><?php echo $city1["ctname"]; ?></td>
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