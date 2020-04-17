<!DOCTYPE html>
<html>
<head>
    <title>AXAT Test</title>

    <style type="text/css">

* {box-sizing: border-box}

/* Full-width input fields */
  input[type=text], input[type=password] {
  
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}
  input[type=text], input[type=email] {
  
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}

/* Set a style for all buttons */
button {
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  /*width: 100%;*/
  opacity: 0.9;
}

button:hover {
  opacity:1;
}

/* Extra styles for the cancel button */
.cancelbtn {
  padding: 14px 20px;
  background-color: #f44336;
}

/* Float cancel and signup buttons and add an equal width */
.cancelbtn, .signupbtn {
  float: left;
  width: 10%;
}

/* Add padding to container elements */
.container {
  padding: 16px;
}

/* Clear floats */
.clearfix::after {
  content: "";
  clear: both;
  display: table;
}

/* Change styles for cancel button and signup button on extra small screens */
@media screen and (max-width: 300px) {
  .cancelbtn, .signupbtn {
    width: 10%;
  }
}
    </style>
</head>
<body>
<!-- 
     <h2>Register</h2>
    <form method="POST" action="register">
        {{ csrf_field() }}
        <div class="form-group" style="margin-bottom: 30px">
            <label for="name">Name:</label>
            <input type="text" class="form-control" id="name" name="name">
        </div>
 
        <div class="form-group" style="margin-bottom: 30px">
            <label for="email">Email:</label>
            <input type="email" class="form-control" id="email" name="email">
        </div>
 
        <div class="form-group" style="margin-bottom: 30px">
            <label for="password">Password:</label>
            <input type="password" class="form-control" id="password" name="password">
        </div>
 
        <div class="form-group">
            <button style="cursor:pointer" type="submit" class="btn btn-primary">Submit</button>
        </div>
        
    </form> -->




    <form method="POST" action="register" style="border:1px solid #ccc">
        {{ csrf_field() }}
  <div class="container">
    <h1>Sign Up</h1>
    <p>Please fill in this form to create an account.</p>
    <hr>
    <label for="psw-repeat"><b>Name</b></label>
    <input type="text" class="form-control" id="name" name="name" required>

    <label for="email"><b>Email</b></label>
    <input type="email" class="form-control" id="email" name="email" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" class="form-control" id="password" name="password" required>

    

  

    <div class="clearfix">
     
      <button style="cursor:pointer" type="submit"  class="btn btn-primary">Sign Up</button>
      <span>Already register user click on login</span>
      <button style="cursor:pointer " type="submit"  class="btn btn-primary"><a style="color: white" href="{{ url('/login') }}"> Login </a></button>
    </div>
  </div>
</form>


</body>
</html>
