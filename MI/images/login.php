<!DOCTYPE html>
<html>
    <head>
        <title>login</title>
        <style>
            *{
    margin: 0%;
    padding: 0%;
    font-family: sans-serif;
    box-sizing: border-box;
    outline: none;
    color: #fff;
}
section{
    position: absolute;
    height: 100%;
    width: 100%;
    background: url(IMG/img5.jpg) no-repeat;
    background-size: cover;
    background-position: center;
    filter: blur(2px) brightness(40%);
}
body{
    display: flex;
    min-height: 100vh;
    align-items: center;
    justify-content: center;
}
.container{
    width: 360px;
    background: #000;
    box-shadow: 0 0 8px rgba(250,250,250,0.6);
    opacity: 0.6;
}
.container form{
    width: 100%;
    text-align: center;
    padding: 25px 20px;
}
form h1{
    padding: 10px 0;

}
form .id{
    position: relative;

}
form input{
    width: 100%;
    height: 50px;
    margin: 4px 0;
    border: 1px solid #5c5c5c;
    border-radius: 3px;
    background: #181717;
    padding: 0 15px;
    font-size: 20px;
}
form textarea{
    padding: 5px 15px;
    border: 1px solid #5c5c5c;
    border-radius: 3px;
    background: #181717;
    font-size: 20px;
    width: 100%;
    margin: 4px 0;
}
form button{
    margin-top: 5px;
    border: none;
    background: #00fff0;
    color: #222;
    padding: 10px 0;
    width: 100%;
    font-size: 20px;
    font-weight: 800;
    cursor: pointer;
    border-radius: 3px;
}
form input:focus{
    border: 1px solid #00fff0;
    color: #00fff0;
    transition: all 0.3s ease;
}
form input:focus::placeholder{
    padding-left: 4px;
 
    color: #00fff0;
    transition: all 0.3s ease;
}
a img{
    position: absolute;
    height: 60px;
    width: 60px;
    top: 1%;
    left: 1%;
    border-radius: 75px;
}

}
        </style>
    </head>
    <body>
        <section>
            
        </section>
        <div class="container">
            <form action="mailto:hemanthhonnadevi26285@gmail.com" method="POST" enctype="text/plain">
            <form>
            <h1>Login</h1>
            <div class="id">
                <input  type="text" name="username" placeholder="User Name">
                </div>
                <div class="id">
                    <input type="password" name="Password" placeholder="Password">
                    </div>
        <a href="index.html"><button>Login</button></a>
        <a href="login1.html">Newuser Click here</a>
        </form>
    </div>
    <a href="index.html"><img src="IMG/back1.jpg"></a>
    </body>

</html>