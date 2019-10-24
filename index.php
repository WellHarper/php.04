<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>LOGIN</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>
<style>

    .submito {
        
        margin-left: 10px;
        
    }
    
</style>
<body>
   <H1 style="text-align:center;">ÁREA RESTRITA</H1>
   
   <form action="verificarlogin.php" method="post">
  <div class="form-group">
    <label  style="margin-left: 10px;" for="exampleInputEmail1">Login</label>
    <input style="width: 500px; margin-left: 10px;" name="login" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
  </div>
  <div class="form-group">
    <label style="margin-left: 10px;" for="exampleInputPassword1">Senha</label>
    <input style="width: 500px; margin-left: 10px;" name="senha" type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
  </div>
  <button type="submit" class=" submito btn btn-primary">Submit</button>
</form>
    
</body>
</html>