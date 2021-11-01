<div class="content">
 <div class="container-fluid">
     <div class="row">
     <div class="col-md-12 col-xs-12">


     <div class="col-md-4 col-xs-12">
             <div class="jumbotron">
<h2 align="center">Cruid MVC</h2>

<hr>
                
             <p align="justify">
             <h2>MVC in PHP</h2>
PHP MVC is an application design pattern that separates the application data and business logic (model) from the presentation (view). MVC stands for Model, View & Controller. The controller mediates between the models and views. Think of the MVC
</p>
             </div>
         </div>
         


         


     <div class="col-md-8 col-xs-12">
             <div class="jumbotron">

             <form method="post">
             <div class="form-group">
                 <input type="text" name="em" placeholder="Email *" required class="form-control">
             </div>

             <div class="form-group">
                 <input type="text" name="uname" placeholder="Username *" required class="form-control">
             </div>
             
             <div class="form-group">
                 <input type="password" name="pass" placeholder="Password *" required class="form-control">
             </div>

             
             <div class="form-group">
                 <input type="password" name="cpass" placeholder="Confirm Password *" required class="form-control">
             </div>
             
             <div class="form-group">
                 <input type="file" name="img" placeholder="Image *" required class="form-control">
             </div>


             
             <div class="form-group">
                 <span class="fa fa-male"></span> Male <input type="radio" name="gender"  value="male">
                 <span class="fa fa-female"></span> Female <input type="radio" name="gender"  value="female">
             </div>


             
             <div class="form-group">
                
             <span class="fa fa-book"></span> Reading <input type="checkbox" name="chk[]"  value="reading">
                 
             <span class="fa fa-play"></span> Playing <input type="checkbox" name="chk[]"  value="playing">
                 

             <span class="fa fa-music"></span> Singing <input type="checkbox" name="chk[]"  value="singing">
             
                
            </div>



            <div class="form-group">
                 <input type="date" name="dob" placeholder="DOB *" required class="form-control">
             </div>


             <div class="form-group">
                 <select  name="city" placeholder="City *" required class="form-control">

                 <option value="">--Select City--</option>
                 <option value="">

                 </option>
                 </select>
             </div>

            


             
             <div class="form-group">
                 <input type="submit" name="reg" value="Register"  class="btn btn-lg btn-info">
                 
             </div>


             
             <div class="form-group">
              <h4>Have an Account <a href="<?php echo $mainurl;?>">Login Here</a></h4>   

             </div>
             
         
         </div>
     </div>


         </div>
     </div>

     </div>
 </div>    
