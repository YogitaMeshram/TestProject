<!DOCTYPE html>
<html>
<head>
    <title>Login</title>

<style type="text/css">
    form {
  border: 3px solid #f1f1f1;
}

/* Full-width inputs */
input[type=text], input[type=password] {
 
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

input[type=text], input[type=email] {
 
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}
/* Set a style for all buttons */
button {
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;

}

/* Add a hover effect for buttons */
button:hover {
  opacity: 0.8;
}

/* Extra style for the cancel button (red) */
.cancelbtn {
  width: auto;
  padding: 10px 18px;

}

/* Center the avatar image inside this container */
.imgcontainer {

  margin: 24px 0 12px 15px;
}

/* Avatar image */
img.avatar {
  width: 40%;
  border-radius: 50%;
}

/* Add padding to containers */
.container {
  padding: 16px;
}

/* The "Forgot password" text */

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
  span.psw {
    display: block;
    float: none;
  }
  .cancelbtn {
    width: 100%;
  }
  .cancelbtn {
  width: auto;
  padding: 10px 18px;

}
}
</style>


</head>
<body>

    
    
 <!--    <form method="POST" action="login">
        
        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" class="form-control" id="email" name="email">
        </div>
 
        <div class="form-group">
            <label for="password">Password:</label>
            <input type="password" class="form-control" id="password" name="password">
        </div>
 
        <div class="form-group">
            <button style="cursor:pointer" type="submit" class="btn btn-primary">Login</button>
        </div>
        
    </form> -->

     <form method="POST" action="login">
        {{ csrf_field() }}
  <div class="imgcontainer">
    <h2>Log In</h2>
  </div>

  <div class="container">
    <label for="uname"><b>Email</b></label>
    <input type="email" class="form-control" id="email" name="email" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" class="form-control" id="password" name="password" required>

    <button style="cursor:pointer" type="submit" class="btn btn-primary">Login</button>
    <!-- <label>
      <input type="checkbox" checked="checked" name="remember"> Remember me
    </label> -->
  </div>

  <div class="container" style="background-color:#f1f1f1">
    
    <span class="cancelbtn">new user click here <a href="{{ url('/register') }}"> Register</a></span>
    <span class="psw">Forgot <a href="#">password?</a></span>
  </div>
</form>



</body>
</html>

