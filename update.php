<?php include("header.php")?>
<div class="container">
<div class="jumbotron">
  <h1 class="display-4">UPDATE STUDENT INFO</h1>
  <p class="lead">You can update specific Student Information by its id then set new Name, Password and Status.</p>
  <hr class="my-4">
  <div class="row">
    <div class="col-m-12">
         <form method='get' style="border-radius:10px;"class="col-sm-12 border border-primary" style=""class="col-sm-4" id="updates" action='update_save.php'>
                 
                    <div class="form-group">  
                    <label  for="exampleInputEmail1">Student ID</label>
                     <input class="form-control" type='number' name='thisId'>
                    </div> 
             
                    <div class="form-group">  
                    <label  for="exampleInputEmail1">New student Name</label>
                    <input class="form-control"type='text' name='thisUser'>
                    </div> 
                
                    <div class="form-group">  
                    <label  for="exampleInputEmail1">New password</label>
                    <input class="form-control"type='password' name='thisPass'>
                    </div> 
               
                    <div class="form-group">  
                    <label  for="exampleInputEmail1">New Status </label>
                       <input class="form-control" type='text' name='thisStatus'>
                       </div> 
                
                    <input class="btn btn-primary" type='submit' value='update'>
                    <br>
                    <br>
        </form>
        </div>
        <div class="col-sm-8">
        <?php include("display.php")?>
        </div>
        </div>
</div>
 
        <?php include("footer.php")?>