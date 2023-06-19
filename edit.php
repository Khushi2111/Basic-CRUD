<?php 
include("result.php");
error_reporting(0);

// echo $_GET['id'];
$id = $_GET['id'];

$query = "select * from infraveo where id='$id'";
$data = mysqli_query($conn,$query) ;
// $total = mysqli_num_rows($data);
$infraveo=mysqli_fetch_assoc($data);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FORM</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
</head>
<body>
    <section class="h-100 h-custom" style="background-color: #8fc4b7;">
        <div class="container py-5 h-100">
          <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-lg-8 col-xl-6">
              <div class="card rounded-3">
                <img src="1.webp" class="w-100" style="border-top-left-radius: .3rem; border-top-right-radius: .3rem;"
                  alt="Sample photo">
                <!-- <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-registration/img3.webp"
                  class="w-100" style="border-top-left-radius: .3rem; border-top-right-radius: .3rem;"
                  alt="Sample photo"> -->
                <div class="card-body p-4 p-md-5">
                  <h3 class="mb-4 pb-2 pb-md-0 mb-md-5 px-md-2">Table</h3>
      
                  <form class="px-md-2" method="post" action="update.php">
                  <input type="hidden" name="id" value="<?php echo $infraveo['id'];?>"/>
                    <div class="form-outline mb-4">
                    <!-- <label class="form-label" for="form3Example1q">Name</label> -->
                    <input type="text" name="username" value="<?php echo $infraveo['username'];?>" id="form3Example1q" class="form-control" placeholder="Enter Your Username" required/>
                    </div>

                    <div class="row mb-4 pb-2 pb-md-0 mb-md-5">
                      <div class="col-md-12">

                        <div class="form-outline mb-4">
                            <!-- <label class="form-label" for="form3Example1q">Physics Marks</label> -->
                            <input type="number" name="age" value="<?php echo $infraveo['age'];?>" id="form3Example1q" class="form-control" placeholder="Age" required/>
                            </div>

                      </div>
                    </div>
                    <!-- <div class="text-center">
                        <div class="mt-2 pt-2">
                          <input class="btn btn-primary btn-lg" type="submit" value="Check Result" />
                        </div>
                      </div> -->
      
                    <button type="submit" name="submit" value="Update Details" class="btn btn-success btn-lg mb-1">Update Details</button>
      
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      
</body>
</html>

