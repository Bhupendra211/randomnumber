<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>

<div class="container">
    <h1 class="text-center">welcome to Number Generator</h1>

    <form action="index.php" method="POST">

  <div class="my-3">
    <label for="exampleInputEmail1" class="form-label">Enter The Number of Dices: </label>
    <input type="text" name= "dice" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>

  <div class="my-3">
    <label for="exampleInputEmail1" class="form-label">Enter The Number of Sides in dice: </label>
    <input type="text" name='side' class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>


  <button type="submit" class="btn btn-primary">Submit</button>
</form>


<?php

if(isset($_POST['dice'])){


    $noDice=$_POST['dice'];
$side= $_POST['side'];

for($x=0;$x<$noDice;$x++){
   $number= rand(0,$side);
    echo '<div class="alert alert-primary" role="alert">
    Randomly Generated '.($x+1).' number is : '.$number.'
  </div>';
}

}
?>


</div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>