<!doctype html>
<html lang="en">
  <head>
  
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

 
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>PHP OOP CRUD </title>
  </head>
  <body>
    <div class="container">
      <div class="row">
        <div class="col-md-12 mt-5">
          <h1 class="text-center">PHP OOP CRUD  </h1>
          <hr style="height: 1px;color: black;background-color: black;">
        </div>
      </div>
      <div class="row">
        <div class="col-md-5 mx-auto">
          <?php

              include 'model.php';
              $model = new Model();
              $insert = $model->insert();

          ?>
          <form action="" method="post">
            <div class="form-group">
              <label for="">Name</label>
              <input type="text" name="name" class="form-control">
            </div>
            <div class="form-group">
              <label for="">Email</label>
              <input type="email" name="email" class="form-control">
            </div>
            <div class="form-group">
              <label for="">Mobile No.</label>
              <input type="text" name="mobile" class="form-control">
            </div>
            <div class="form-group">
              <label for="">Address</label>
              <textarea name="address" id="" cols="" rows="3" class="form-control"></textarea>
            </div>
            <div class="form-group">
              <button type="submit" name="submit" class="btn btn-primary">Submit</button>
            </div>
          </form>
        </div>
      </div>
    </div>

   
  </body>
</html>