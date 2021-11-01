
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
            <th>Main Category</th>
            <th>Date</th>
            <th data-breakpoints="xs">Action</th>
           
            <!-- <th data-breakpoints="xs sm md" data-title="DOB">Date of Birth</th> -->
          </tr>
        </thead>
        <tbody>
        <?php foreach ($mcatnm as $mcatnm1) {?>


          <tr data-expanded="true">
         

            <td> <?php echo $mcatnm1["mcatid"];?></td>
            <td><?php echo $mcatnm1["mcatname"];?></td>
            <td><?php echo $mcatnm1["rdate"];?></td>
            <td>
            
            <a href="EditMainCategory?edmcategory=<?php echo $mcatnm1["mcatid"];?>"><button type="button" class="btn btn-sm btn-info"><span class="fa fa-edit"></span> Edit</button></a> | <a href="ManageMainCategory?delmcategory=<?php echo $mcatnm1["mcatid"];?>"> <button type="button" class="btn btn-sm btn-danger"><span class="fa fa-trash"></span> Delete</button></a>
            
            
            </td>
        
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


