<style type="text/css">
	

/* Header/Blog Title */
.header {
  padding: 30px;
  font-size: 40px;
  text-align: center;
  background: white;
}

/* Create two unequal columns that floats next to each other */
/* Left column */
.leftcolumn {
  float: left;
  width: 97%;
}

/* Right column */
.rightcolumn {
  float: left;
  width: 25%;
  padding-left: 20px;
}

/* Fake image */
.fakeimg {
  background-color: #aaa;
  width: 100%;
  padding: 20px;
}

/* Add a card effect for articles */
.card {
  background-color: white;
  padding: 20px;
  margin-top: 20px;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Footer */
.footer {
  padding: 20px;
  text-align: center;
  background: #ddd;
  margin-top: 20px;
}

/* Responsive layout - when the screen is less than 800px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 800px) {
  .leftcolumn, .rightcolumn {
    width: 100%;
    padding: 0;
  }
}
.column {
  float: left;
  width: 33.33%;
}

</style>
@include('home')

<div class="row">
  <div class="leftcolumn">
        @foreach($blogs as $blog)
          <div class="column">
          <div class="card">
            <h2>{{$blog->title}}</h2>
            <h5> Date : {{ date('d-m-Y', strtotime($blog->created_at) )}}</h5>
            <div class="fakeimg" style="height:200px;">{{$blog->image}}</div>
            <p>{{$blog->description}}</p>
          </div>
          </div>
        @endforeach
  	<!-- 
    <div class="column">
    <div class="card">
      <h2>TITLE HEADING</h2>
      <h5>Sep 2, 2017</h5>
      <div class="fakeimg" style="height:200px;">Image</div>
      <p>Some text..</p>
    </div>
</div>
    <div class="column">
    	<div class="card">
      <h2>TITLE HEADING</h2>
      <h5>Dec 7, 2017</h5>
      <div class="fakeimg" style="height:200px;">Image</div>
      <p>Some text..</p>
    </div>
    </div> -->
  </div>

</div>
