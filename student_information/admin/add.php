<?php
include 'header.php';
?>
<div id="main-content">
    <h2>Student-Add</h2>
    <div class="container-fluid px-4">
    <div class="row mt-4">
    	<div class="col-md-12">
        <div class="card">
    		  <div class="card-header"><h4> 
              </h4></div>
    		  <div class="card-body">


              <form action="code.php" method="POST">
              <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="">Student-ID</label>
                            <input type="text" name="sid" required class="form-control">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="">Student Name</label>
                            <input type="text" name="sname" required class="form-control">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="">Father Name</label>
                            <input type="text" name="sfather" required class="form-control">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="">Mother Name</label>
                            <input type="text" name="smother" required class="form-control">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="">Mobile Number</label>
                            <input type="text" name="smobile" required class="form-control">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="">Addresss</label>
                            <input type="text" name="saddress" required class="form-control">
                        </div>
                         <!-- <div class="form-check"> 
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                        <label class="form-check-label" for="flexCheckDefault"name="sgender">
                            Male
                        </label>
                        </div>
                        <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
                        <label class="form-check-label" for="flexCheckChecked" name="sgender">
                            female
                        </label>
                        </div>  -->
                        <div class="col-md-12 mb-3">
                            <button type="submit" name="student_add" class="btn btn-primary">ADD-STUDENT</button>
                         </div>
                    </div>



              </form>
                   

              </div>
            </div>
        </div>        
    </div>
</div>

    
</div>
</div>
</body>
</html>