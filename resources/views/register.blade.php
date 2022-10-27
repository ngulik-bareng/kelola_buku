<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register | Book_Rent</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<style>

body{
    background-color: #F4F6F9;
 }

 .main{
    height:100vh;
    box-sizing: border-box;
 }
 .login-box{
    width:500px;
    background-color: #ffff;
    /* border: solid 1px; */

 }
</style>

<body>
    
    <div class="main d-flex flex-column justify-content-center align-items-center">
      @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
      @endif
      
      @if(session('status'))
        <div class="alert alert-success">
            {{ session('message') }}
        </div>
      @endif

        <div class="login-box p-5 shadow">
            <form action="" method="POST">
                @csrf
                <div class="">
                     <div class="mb-2">
                        <label for="username" class="form-label">Username</label>
                        <input type="text" class="form-control" name="username" id="username" placeholder="Username" required>
                      </div>
                      <div class="mb-2">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control" name="password" id="password" placeholder="password" required>
                      </div>
                      <div class="mb-2">
                        <label for="phone" class="form-label">Phone</label>
                        <input type="phone" class="form-control" name="phone" id="phone" placeholder="phone">
                      </div>
                      <div class="mb-2">
                        <label for="addres" class="form-label">Address</label>
                        <textarea class="form-control" name="addres" id="addres" cols="30" rows="5"  required></textarea>
                      </div>
                      <div class="mb-2">
                        <button type="submit" name="register" class="btn btn-primary form-control">Register</button>
                      </div>
                      <div  class="text-center">
                          have an account? <a href="login">login</a>
                      </div>
                </div>
            </form>
        </div>
    </div>
 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>