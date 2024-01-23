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
            <h2>FILL IN THE FORM TO BUY ELECTRICITY</h2>
</div>
    <div class="forms">
        <h1>Payment form</h1>
        <form>
        <label>Telephone</label><br/>
        <input type="password" class="inputs" placeholder="enter your phone number" required/><br/>
    <label>Amount</label><br/>
        <input type="number" class="inputs" placeholder="enter amount to pay" required/><br/>
    
        <button>Submit</button>

        </div>
    </div>
        </body>
    </form>
</body>
</html>