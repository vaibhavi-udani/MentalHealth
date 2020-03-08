<head>
<link href="https://fonts.googleapis.com/css?family=Abel" rel="stylesheet">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="logins.css">



</head>



<p class="title">mHealth</p>
<form id="loginForm" class="container" action="signup.php" method="POST" >
  <div id = "su-name">
    <label for="name" ><b>Name</b></label>
    <input type="text" name="name" placeholder="Enter Full Name" id="name">
  </div>

  <label for="username" ><b>Username</b></label>
    <input type="text" name = "username" placeholder="Enter Username" id="username">
  
  <label for="password" ><b>Password</b></label>
    <input type="password" name = "password" placeholder="Enter Password" id="password">
  
  <div class="row">
    <button type="submit" id ="login-bt" class="col" name="submit_li" onclick="return login()">Login</button>
    <button type="submit" name = "submit_su" id="signUp-bt" onclick="return signUp()" class="col">Sign Up</button>
  </div>
  </form>

<script src="logins.js"></script>