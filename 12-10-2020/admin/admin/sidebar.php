<aside>
    <div id="sidebar" class="nav-collapse">
        <!-- sidebar menu start-->
        <div class="leftside-navigation">
            <ul class="sidebar-menu" id="nav-accordion">
                <li>
                    <a class="active" href="<?php echo $mainurl;?>Dashboard">
                        <i class="fa fa-dashboard"></i>
                        <span>Dashboard</span>
                    </a>
                </li>
                
                <li class="sub-menu">
                    <a href="javascript:;">
                        <i class="fa fa-users"></i>
                        <span>Manage Customer</span>
                    </a>
                    <ul class="sub">
						<li><a href="<?php echo $mainurl;?>ManageCustomer">Manage All Customer</a></li>
				    </ul>
                </li>

                                
                <li class="sub-menu">
                    <a href="javascript:;">
                        <i class="fa fa-shopping-cart"></i>
                        <span>Add MainCategory</span>
                    </a>
                    
                    <ul class="sub">
                        
                        <li><a href="<?php echo $mainurl;?>AddMainCategory">Add Product MainCategory</a></li>
                        
						<li><a href="<?php echo $mainurl;?>ManageMainCategory">Manage All MainCategory</a></li>
				    </ul>
                </li>


                        
                <li class="sub-menu">
                    <a href="javascript:;">
                        <i class="fa fa-shopping-cart"></i>
                        <span>Add Category</span>
                    </a>
                    
                    <ul class="sub">
                        
                        <li><a href="<?php echo $mainurl;?>AddCategory">Add Product Category</a></li>
                        
						<li><a href="<?php echo $mainurl;?>ManageCategory">Manage All Category</a></li>
				    </ul>
                </li>


                        
                <li class="sub-menu">
                    <a href="javascript:;">
                        <i class="fa fa-shopping-cart"></i>
                        <span>Add SubCategory</span>
                    </a>
                    
                    <ul class="sub">
                        
                        <li><a href="<?php echo $mainurl; ?>SubCategory">Add Product SubCategory</a></li>
                        
						<li><a href="<?php echo $mainurl;?>ManageSubcategory">Manage All SubCategory</a></li>
				    </ul>
                </li>
                

                        
                <li class="sub-menu">
                    <a href="javascript:;">
                        <i class="fa fa-shopping-cart"></i>
                        <span>Add Products</span>
                    </a>
                    
                    <ul class="sub">
                        
                        <li><a href="<?php echo $mainurl;?>AddProduct">Add Products</a></li>
                        
						<li><a href="<?php echo $mainurl;?>ManageProduct">Manage All Products</a></li>
				    </ul>
                </li>



                        
                <li class="sub-menu">
                    <a href="javascript:;">
                        <i class="fa fa-map-marker"></i>
                        <span>Add City</span>
                    </a>
                    
                    <ul class="sub">
                        
                        <li><a href="<?php echo $mainurl;?>AddCity">Add City</a></li>
                        
						<li><a href="<?php echo $mainurl;?>ManageCity">Manage All City</a></li>
				    </ul>
                </li>
                <li>
                    <a href="fontawesome.html">
                        <i class="fa fa-truck"> </i>
                        <span>Manage Orders <span class="badge badge-lg" style="background-color: red; color:white">0</span> </span>
                    </a>
                </li>
             
                
                <li>
                    <a href="fontawesome.html">
                        <i class="fa fa-comment-o"></i>
                        <span>Manage Contact </span>
                    </a>
                </li>
             
             
                <li>
                    <a href="fontawesome.html">
                        <i class="fa fa-comment-o"></i>
                        <span>Manage Feedback </span>
                    </a>
                </li>
             
                     <li>
                    <a href="<?php echo $mainurl;?>?Adminlogout" onclick="return confirm('Are You sure to Logout as Admin ?')">
                        <i class="fa fa-power-off"></i>
                        <span>Logout Admin</span>
                    </a>
                </li>
            </ul>            </div>
        <!-- sidebar menu end-->
    </div>
</aside>