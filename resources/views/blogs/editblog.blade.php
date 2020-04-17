@include('home')
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



/* Add padding to container elements */
.container {
  padding: 16px;
}

</style>

<div class="container" >

<form method="POST" action="editblog" style="border:1px solid #ccc">
        {{ csrf_field() }}
  <div class="container">
    <h1>Edit Blogs</h1>
    <div>
      <label for="psw-repeat"><b>Title</b></label>
      <input type="hidden" class="form-control" id="blog_id" name="blog_id" value="{{$blogs->blog_id}}" >
    <input type="text" class="form-control" id="title" name="title" value="{{$blogs->title}}" >
    </div>  
    <div style="margin-bottom: 20px">
      <label for="email"><b>Image</b></label>
    <input type="file" class="form-control" id="image" name="image" value="{{$blogs->image}}" >
    </div>
    <div>
    <label for="psw"><b>Content</b></label>
    <textarea class="form-control" name="description" style="width: 30%;height: 50%"  >{{$blogs->description}}</textarea>
    </div>
    
    <div class="clearfix">
     
     <button style="cursor:pointer" type="submit"  class="btn btn-primary">Save</button>
     <button style="cursor:pointer; background-color: blue" type="submit"  class="btn btn-primary"><a href="{{ url('/showblog') }}" style="color: white">Back</a></button>
    </div>
  </div>
</form>
</div>

