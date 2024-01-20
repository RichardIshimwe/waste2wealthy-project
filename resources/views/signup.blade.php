<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles2.css">
    <title>REGISTER</title>
    <style>
        body{
    background-color: black;
}
.container{
    display:flex;   
}
.welcome{
    background-color:white;
    color:black;
    padding:80px;
    margin-bottom:40px;
     margin-top:30px;
     margin-left:200px;
    
}
h2{
    color:yellowgreen;
}
.forms{
    background-color:yellowgreen;
    color:BLACK;
    padding:40px;
    margin-top:30px;
    margin-right:300px;
    font-size:20px;
    margin-bottom:40px;
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
            <a href="log.html"><button class="btn1">log in</button></a>
</div>
    <div class="forms">
    <form>
        <h3>REGISTER TO BECOME A MEMBER</h3>
        <label>Full names</label><br/>
        <input type="text" class="inputs" placeholder="enter your names" required/><br/>
        <label>Email</label><br/>
        <input type="email" class="inputs" placeholder="enter your email" required/><br/>
        <label>Password</label><br/>
        <input type="password" class="inputs" placeholder="enter your password" required/><br/>
        <label>Confirm Password</label><br/>
        <input type="password" class="inputs" placeholder="confirm entered password" required/><br/>
        <button>SIGN UP</button>
        </div>
        </div>
    </form>
</body>
</html>