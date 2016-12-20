<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="author" content="ilmu-detil.blogspot.com">
	<title>Tutorial Autocomplete</title>
	<link rel="stylesheet" href="assets/css/bootstrap.css">
	<link rel="stylesheet" href="assets/css/ilmudetil.css">
	<script src="assets/js/bootstrap.min.js"></script>
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-maxlength/1.7.0/bootstrap-maxlength.min.js"></script>
</head>
<body>
<div class="navbar navbar-default navbar-fixed-top">
	<div class="container">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
				<span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="index.html">
			Pusat Ilmu Secara Detil</a>
		</div>
		<div class="navbar-collapse collapse">
			<ul class="nav navbar-nav navbar-left">
				<li class="clr1 active"><a href="index.html">Home</a></li>
				<li class="clr2"><a href="">Programming</a></li>
				<li class="clr3"><a href="">English</a></li>
			</ul>
		</div>
	</div>
</div>
</br></br></br></br>

<div class="container">
	<div class="row">
		<div class="col-md-5"
			<form>
				<div class="form-group">
					<label>Nama:</label>
					<input type="text" name="name" class="form-control" >
				</div>
				<div class="form-group">
					<label>Deskripsi diri:</label>
					<textarea class="form-control" maxlength="150" style="height:125px"></textarea>
				</div>
				<div class="form-group">
					<button class="btn btn-success">Submit</button>
				</div>
			</form>
		</div>
	</div>
</div>
	<script type="text/javascript">
		$('textarea').maxlength({
              alwaysShow: true,
	          threshold: 10,
	          warningClass: "label label-success",
	          limitReachedClass: "label label-danger",
	          separator: ' out of ',
	          preText: 'You write ',
	          postText: ' chars.',
	          validate: true
        });
	</script>
</body>
</html>
