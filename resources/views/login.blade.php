<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login | Book_Rent</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<style>

 body{
    background-color: #dadfe7;
 }

 .row {
    height:100vh;
 }
 .main{
   
    box-sizing: border-box;
 }
 .login-box{
    width:400px;
    background-color: #fff;
    border: 1px solid rgb(182, 182, 182);
    /* border: solid 1px; */

 }
</style>

<body>

    <div class="container">
        <div class="container-fluid">
            <div class="row d-flex justtify-content-center align-content-center align-items-center">
                <div class="col-md-6">
                    <div class="judul-apk">
                        <h1><b>Login</b></h1>
                        <h2>Aplikasi Rental Buku</h2>
                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Odit aliquam, natus vel facilis eum numquam quis nemo, consequatur molestiae iusto velit obcaecati praesentium recusandae sit, assumenda ducimus deserunt optio molestias.</p>
                        <a class="btn  btn-primary hover-top btn-glow" href="/">Home </a>
                      </div>
                </div>

              
                <div class="col-md-6">
                    
                    <div class="main d-flex flex-column justify-content-center align-items-center">
                
                        @if(session('status'))
                            <div class="alert alert-danger">
                                {{ session('message') }}
                            </div>
                        @endif
                
                
                        <div class="login-box p-4">
                            <form action="/login" method="post">
                                @csrf
                                <div class="">
                                     <div class="mb-3">
                                        <label for="username" class="form-label">Username</label>
                                        <input type="text" class="form-control" id="username" name="username" placeholder="Username" required>
                                      </div>
                                      <div class="mb-3">
                                        <label for="password" class="form-label">Password</label>
                                        <input type="password" class="form-control" id="password" name="password" placeholder="password" required>
                                      </div>
                                      <div class="mb-3">
                                        <button type="submit" name="login" class="btn btn-primary form-control">Login</button>
                                      </div>
                                      <div  class="text-center">
                                          don't have account? <a href="register">Sign Up</a>
                                      </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
             
            </div>
        </div>
    </div>
    
 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>