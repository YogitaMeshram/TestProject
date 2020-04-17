@include('home')
<style type="text/css">
	.btn-primary {
    color: #fff;
    background-color: #428bca;
    border-color: #357ebd;
}
.btn {
    display: inline-block;
    padding: 6px 12px;
    margin-bottom: 0;
    font-size: 14px;
    font-weight: 400;
    line-height: 1.42857143;
    text-align: center;
    white-space: nowrap;
    vertical-align: middle;
    -ms-touch-action: manipulation;
    touch-action: manipulation;
    cursor: pointer;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
    background-image: none;
    border: 1px solid transparent;
    border-radius: 4px;
}
</style>

<!DOCTYPE html>
<html>
<title>W3.CSS</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<body>

<div class="w3-container">
  <h2>Show Blog Listing</h2>
  <table class="w3-table w3-striped w3-border">
    <tr>
      <th>Title</th>
      <th>Image</th>
      <th>Content</th>
      <th>Created Date</th>
      <th>Action</th>
    </tr>
    @foreach($blogs as $blog)
    <tr>
      <td>{{$blog->title}}</td>
      <td>{{$blog->image}}</td>
      <td>{{$blog->description}}</td>
      <td>{{ date('d-m-Y',strtotime($blog->created_at))}}</td>
      <td>
      	<a href="{{ url('/editblog/'.$blog->blog_id) }}" class="btn btn-primary a-btn-slide-text">
        <span class="glyphicon glyphicon-edit" aria-hidden="true"></span>
        <span><strong>Edit</strong></span>            
    	</a>
    	<a href="{{url('deleteblog', $blog->blog_id)}}" onclick="return confirm('Are you sure?')" class="btn btn-primary a-btn-slide-text" style="background-color: red">
        <span class="glyphicon glyphicon-edit" aria-hidden="true"></span>
        <span><strong>Delete</strong></span>            
    	</a>
      </td>
    </tr>
    @endforeach
  </table>
</div>

</body>
</html>
