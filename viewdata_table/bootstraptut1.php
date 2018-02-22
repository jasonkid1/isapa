<!DOCTYPE html>
<html lang="en">
<head>
	<title>Study Bootstrap</title>
	<meta charset="utf-8">
	<meta name="viewport"  content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!-- <link rel="stylesheet" type="text/css" href="css/style.css"> -->
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<script src ="js/jquery-3.2.1.min.js"></script>
	<script src = "js/bootstrap.min.js"></script>
</head>
<body>

<div class="container-fluid">
	<h2>Hello World</h2>
	<p>jhfksjdf fsdjfskd skjdfkjsdf </p>
	
  <div class="row">
		<div class="col-md-4" style="color: red; background-color: blue; height: 40px;" >This is the left side</div>
		<div class="col-md-6" style="color: blue; background-color: yellow; height: 40px;">This is the center</div>
		<div class="col-md-2" style="color: yellow; background-color: red; height: 40px;">This is the right side</div>
	</div>
</div>

        <div class="container">

          <div class="row align-items-start">
            <div class="col-md-4" style="color: red; background-color: blue; height: 40px;">
              One of three columns
            </div>
            <div class="col-md-4" style="color: red; background-color: yellow; height: 40px;">
              One of three columns
            </div>
            <div class="col-md-4" style="color: red; background-color: green; height: 40px;">
              One of three columns
            </div>
          </div>
          
          <div class="row align-items-center">
            <div class="col-md-4" style="color: red; background-color: yellow;  height: 40px;">
              One of three columns
            </div>
            <div class="col-md-4" style="color: red; background-color: green; height: 450px;">
              One of three columns
            </div>
            <div class="col-md-4" style="color: red; background-color: blue; height: 240px;">
              One of three columns
            </div>
          </div>
          
          <div class="row align-items-end">
            <div class="col">
              One of three columns
            </div>
            <div class="col">
              One of three columns
            </div>
            <div class="col">
              One of three columns
            </div>
          </div>

            <form>
                      <div class="form-group">
                        <label for="exampleInputEmail1">Email address</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputPassword1">Password</label>
                        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputFile">File input</label>
                        <input type="file" id="exampleInputFile">
                        <p class="help-block">Example block-level help text here.</p>
                      </div>
                      <div class="checkbox">
                        <label>
                          <input type="checkbox"> Check me out
                        </label>
                      </div>
                      <button type="submit" class="btn btn-default">Submit</button>
           </form>

<br><br><br><br>
           <form class="form-inline">
                        <div class="form-group">
                          <label for="exampleInputName2">Name</label>
                          <input type="text" class="form-control" id="exampleInputName2" placeholder="Jane Doe">
                        </div>
                        <div class="form-group">
                          <label for="exampleInputEmail2">Email</label>
                          <input type="email" class="form-control" id="exampleInputEmail2" placeholder="jane.doe@example.com">
                        </div>
                        <button type="submit" class="btn btn-default">Send invitation</button>
          </form>
<br><br><br><br>

         <div class="modal fade" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Modal title</h4>
      </div>
      <div class="modal-body">
        <p>One fine body&hellip;</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

  </div>

<br><br><br><br>
        <div class="row">
            <div class="col-9">.col-9</div>
            <div class="col-4">.col-4<br>Since 9 + 4 = 13 &gt; 12, this 4-column-wide div gets wrapped onto a new line as one contiguous unit.</div>
            <div class="col-6">.col-6<br>Subsequent columns continue along the new line.</div>
        </div>

        <samp>This text is meant to be treated as sample output from a computer program.</samp>



</body>
</html>