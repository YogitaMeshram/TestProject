<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                margin: 0;
            }

          

      /* Add a black background color to the top navigation */
.topnav {
  background-color: #333;
  overflow: hidden;
}

/* Style the links inside the navigation bar */
.topnav a {
  float: right;
  color: #f2f2f2;
  
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
 
}

/* Change the color of links on hover */
.topnav a:hover {
  background-color: #ddd;
  color: black;
}

/* The dropdown container */
.dropdown {
  float: left;
  overflow: hidden;
  margin-left: 995px;
}

/* Dropdown button */
.dropdown .dropbtn {
  font-size: 16px;
  border: none;
  outline: none;
  color: white;
 
  background-color: inherit;
  font-family: inherit; /* Important for vertical align on mobile phones */
  margin: 0; /* Important for vertical align on mobile phones */
}

/* Add a red background color to navbar links on hover */
/*.navbar a:hover, .dropdown:hover .dropbtn {
  background-color: red;
}*/

/* Dropdown content (hidden by default) */
.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
  float: right;
}

/* Links inside the dropdown */
.dropdown-content a {
  float: none;
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  
}

/* Add a grey background color to dropdown links on hover */
/*.dropdown-content a:hover {
  background-color: #ddd;
}*/

/* Show the dropdown menu on hover */
.dropdown:hover .dropdown-content {
  display: block;
}


        </style>
    </head>
    <body>
        
<div class="topnav">
    @if( auth()->check() )
        <a class="nav-link" href="{{ url('/logout') }}">Logout</a>
        <a href="{{ url('/home') }}">Home</a>
        

          <div class="dropdown">
            <button class="dropbtn">
              <a href="#">Blogs</a>
            </button>
            <div class="dropdown-content">
              <a href="{{ url('/blog') }}">Blog</a>
              <a href="{{ url('/addblog') }}">Add Blogs</a>
              <a href="{{ url('/showblog') }}">Blog Listing</a>
            </div>
          </div>
        <a class="nav-link font-weight-bold" href="#">Hi {{ auth()->user()->name }}</a>
              
    @else
        <a class="nav-link" href="/login">Log In</a>
        <a class="nav-link" href="/register">Register</a>
        <a href="{{ url('/home') }}">Home</a>
    @endif
    
</div>
<!-- <div class="content">
  <h1 style="text-align: center;">Welcome</h1>
</div> -->
        
    </body>
</html>
