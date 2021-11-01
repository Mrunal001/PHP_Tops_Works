
<!DOCTYPE html>
<head>
<title>Visitors an Admin Panel Category Bootstrap Responsive Website Template | Responsive_table :: w3layouts</title>


    <script src="<?php echo $baseurl;?>js/jquery.js"></script>

    <script src="<?php echo $baseurl;?>js/datatables.js"></script>
    
 


  
    <script type="text/javascript">
        $(document).ready(function() {
            $('#shwmpagination').DataTable();
        });
    </script>
</head>
<body>
<section id="container">
<!--header start-->
<!--sidebar end-->
<!--main content start-->
<section id="main-content">
	<section class="wrapper">
	<div class="table-agile-info" style="width:100%;">
 <div class="panel panel-default" style="width:100%;padding:25px !important">
    <div class="panel-heading">
     Manage Main Category
    </div>
    <div>
      <table class="table" id="shwmpagination">
        <thead>
          <tr>
            <th data-breakpoints="xs">ID</th>
            <th>Main Category Name</th>
            <th>Category Name</th>
            <th>Date</th>
            <th data-breakpoints="xs">Action</th>
           
            <!-- <th data-breakpoints="xs sm md" data-title="DOB">Date of Birth</th> -->
          </tr>
        </thead>
        <tbody>



        <?php foreach ($category_name as $category_name1) {?>
                  
                  <tr data-expanded="true">
                 
                  <td><?php echo $category_name1["catid"];?></td>
                  <td><?php echo $category_name1["mcatid"];?></td>  
                    <td><?php echo $category_name1["categoryname"];?></td>
                    <td><?php echo $category_name1["rdate"];?></td>
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