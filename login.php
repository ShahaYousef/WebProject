<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0"> <!--to make the website responsive-->
  <mata http-equiv="X-UA-Compatible" content="ie=edge">
  <!--Connect CSS Style-->
  <link rel="stylesheet" href="style.css">
</head>
<body>

<style type="text/css">

      body{
   margin: 0;
   padding: 0;
   background: url(https://i.pinimg.com/originals/f1/6a/36/f16a365a52f9b1cdcd19a529db533e1c.jpg);
   background-size: cover;
   background-position: center;
   font-family: 'Lora', serif;
  }
  .login-box{
   width: 350px;
   height: 550px;
   background: rgba(0, 0, 0, 0.5);
   color: #ebeaeb;
   top: 50%;
   left: 50%;
   position: absolute;
   transform: translate(-50%,-50%);
   box-sizing: border-box;
   padding: 70px 30px;
  }
  .avatar{
   width: 100px;
   height: 100px;
   border-radius: 50%;
   position: absolute;
   top: -50px;
   left: calc(50% - 50px);
  }
  h1{
   margin: 0;
   padding: 0 0 20px;
   text-align: center;
   font-size: 22px;
  }
  .login-box label{
      margin: 0;
   padding: 0;
   font-weight: bold;
  }
  .login-box input{
   width: 100%;
   margin-bottom: 20px;
  }
  .login-box input[type="email"], input[type="uremail"]
  {
   border:none;
   border-bottom:1px solid #fff;
   background:transparent;
   outline:none;
   height:40px;
   color:#4c9c34;
   font-size: 16px;
  }
  .login-box input[type="text"], input[type="password"]
  {
   border:none;
   border-bottom:1px solid #fff;
   background:transparent;
   outline:none;
   height:40px;
   color:#4c9c34;
   font-size: 16px;
  }
  .login-box input[type="submit"]
  {
   border: none;
   outline: none;
   height: 40px;
   background: #ebae04;
   color: #fff;
   font-size: 18px;
 border-radius: 20px;
  }
  .login-box input[type="submit"]:hover
    {
   cursor: pointer;
   background: #39dc79;
   color: #000;
  }
  /*
    The Name of channel HTML WEBSITES and the link is
    https://youtu.be/-RbkNcDwKbc
   */
    </style>
  <div class="login-box">
<img src="https://5zznly.com/d/4F3Eb_ab.jpeg" class="avatar">
   <h1>Login</h1>

  <form method = "POST" action = "connectDB.php" ><br>
   <label>Username : </label>  <input type="text" name="urnamr" placeholder="Enter Username" required><br>
 <label>password :</label>
<input type="password" name="password" placeholder="Enter password" required><br>


   <input type="submit"  name = "Login" value=" Login " ><br>
   <p>
     Not have account ? <a href="register.html"> Sing Up Now </a>
   </p>

  </div>
  </form>

</body>
</html>
