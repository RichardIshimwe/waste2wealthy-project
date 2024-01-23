@extends('layouts.app')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log in form</title>
   <style>
    body{
    background-color:black;  
}
.container{
    display:flex;   
       border-radius:5px;
}
.welcome{
    background-color:white;
    color:black;
    padding:80px;
    margin-bottom:20px;
     margin-top:30px;
     margin-left:200px;
}
  
     h2{
       color:#0C2231; 
     }
.forms{
   
    background-color:#0C2231;
    color:white;
    padding:80px;
    margin-top:30px;
    margin-right:250px;

    font-size:20px;
    margin-bottom:20px;
}
.inputs{
    padding:8px 50px;
    margin-top:8px;
}
label{
margin-top:8px;
}
button{
    padding:8px 60px;
    color:white;
    background-color:black;
    margin-top:15px;
    border:1px solid black;
    font-size:20px;
    margin-left:30px;
}
.btn1{
     padding:4px 20px;
}
    </style>
</head>
<body>
    <div class="container">
        <div class="welcome">
            <h2>WELCOME!</h2>
            <hr/>
            <a href="signup.html"><button class="btn1">Sign up</button></a>
</div>
    <div class="forms">
        <form>
        <h1>LOG IN</h1>
        <label>Email</label><br/>
        <input type="email" class="inputs" placeholder="enter your email" required/><br/>
        <label>Password</label><br/>
        <input type="password" class="inputs" placeholder="enter your password" required/><br/>
        <button>Log in</button>
</form>
        </div>
  </div>
</body>
</html>
@endsection