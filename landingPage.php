<?php include("header.php")?>
    <div class="container">
    <div class="col-l">
        <img src="https://image.freepik.com/free-vector/cheerful-college-students-with-books-backpacks_179970-391.jpg"style="width:80%" alt="">
       </div>
       <div class="col-sm">
        <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
            <li class="nav-item">
                <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#create" role="tab" aria-controls="pills-home" aria-selected="true">Create New User</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="pills-profile-tab"  href="update.php"  >Update Info</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#delete" role="tab" aria-controls="pills-contact" aria-selected="false">Delete User</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#display" role="tab" aria-controls="pills-profile" aria-selected="false">Display  User Info</a>
            </li>
        </ul>
    <hr  border: 5px solid blue> </hr>
        <div class="tab-content" id="pills-tabContent">
            <div class="tab-pane fade show active" id="create" role="tabpanel" aria-labelledby="pills-home-tab">
               
            <form method='get'  style="border-radius:10px;"class="col-sm-4 border border-primary"action='create_save.php'>
                <div class="form-group">
                    <label for="exampleInputEmail1">Student Name</label>
                    <input class="form-control" type='text' name='thisUser'>
                
               </div>  
  
               <div class="form-group">
                  <label for="exampleInputEmail1">Password</label>
                  <input class="form-control"  type='password' name='thisPass'>
               </div> 
                    <input class="btn btn-primary"type='submit' value='register'>
               <br>
               <br>
                </form>

            </div>


           
           
            <div class="tab-pane fade" id="delete" role="tabpanel" aria-labelledby="pills-contact-tab">
            <form method='delete' style=""class="col-sm-4" action='delete.php'>
             <div class="form-group">  
                 <label for="exampleInputEmail1"> Student Name</label>  
                    <input class="form-control"type='text' name='thisUser'>
                    <br> 
                    <input class="btn btn-danger"  type='submit' value='delete'>
                 </div>
         
            </form>
         </div>
            <div class="tab-pane fade" id="display" role="tabpanel" aria-labelledby="pills-profile-tab">
                <form method='get' action='display.php'>
                    <input class="btn btn-success" type='submit' value='display'>
                </form>
            </div>
           
    </div>
    </div>
   <?php include("footer.php")?>