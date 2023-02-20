
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
<style>
    body{
        background-color:rgb(240, 17, 158); 
    }
    .conta{
        width:400px;
        height:330px;
        margin:25vh 0 0 37vw;
        border-radius:5px;
        background-color:rgb(255, 125, 205);
        color:white; 
        border:1px solid black;
    }
    .form-control{
        width:370px;
    }
    .btn{
        background-color:rgb(240, 17, 158); 
        color:white;
        width:8vw;
        /* margin-left:12px; */
        border:1px solid black;
    }
</style>
</head>
<body>
<div class='conta col-lg-5 shadow-lg p-3'>
    <form action="logcheck.php" method="post">
                <h2 class="text-center">User Login</h2>
            
                <div class="mb-1">
                    <label for="email" class="col-sm-2 col-form-label">Email:</label>
                    <div class="col-sm-10">
                        <input type="text"  class="form-control" id="email" name="email" value="">
                    </div>
                </div>
                <div class="mb-3">
                    <label for="password" class="col-sm-2 col-form-label">Password:</label>
                    <div class="col-sm-10">
                        <input type="password" class="form-control" name="password" id="myInput">
                        <input type="checkbox"  onclick="myFunction()">Show Password
                    </div>
                </div>
            
            <div class="d-flex flex-sm-row "style="margin-left:58px;">
            <input type="submit" name="submit" value="Login" class="btn me-2">
            <input type="submit" name="reg" value="New Register" class="btn ">
            </div>
       
    </form>  
</div>
<script>
function myFunction() {
  var x = document.getElementById("myInput");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}
</script>
</body>
</html>

