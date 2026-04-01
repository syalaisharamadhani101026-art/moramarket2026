<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Login MoraMarket</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<style>

*{
    margin:0;
    padding:0;
    box-sizing:border-box;
    font-family: 'Segoe UI', sans-serif;
}

body{
    height:100vh;
    display:flex;
    justify-content:center;
    align-items:center;
    background: linear-gradient(135deg,#5f2c82,#49a09d);
}

.login-box{
    background:white;
    padding:40px;
    width:350px;
    border-radius:15px;
    box-shadow:0 15px 40px rgba(0,0,0,0.2);
}

.login-box h2{
    text-align:center;
    margin-bottom:25px;
}

.input-group{
    margin-bottom:15px;
}

.input-group input{
    width:100%;
    padding:12px;
    border-radius:8px;
    border:1px solid #ddd;
    outline:none;
    transition:0.3s;
}

.input-group input:focus{
    border-color:#5f2c82;
}

button{
    width:100%;
    padding:12px;
    border:none;
    border-radius:8px;
    background:#5f2c82;
    color:white;
    font-size:16px;
    cursor:pointer;
    transition:0.3s;
}

button:hover{
    background:#4a2267;
}

.brand{
    text-align:center;
    font-size:20px;
    font-weight:bold;
    margin-bottom:10px;
    color:#5f2c82;
}

</style>
</head>

<body>

<div class="login-box">

<div class="brand">MoraMarket</div>
<h2>Login</h2>

<form method="POST" action="/login">
    @csrf

    <div class="input-group">
        <input type="email" name="email" placeholder="Email" required>
    </div>

    <div class="input-group">
        <input type="password" name="password" placeholder="Password" required>
    </div>

    <button type="submit">Login</button>

</form>

</div>

</body>
</html>