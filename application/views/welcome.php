<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Welcome to OpenApi</title>
	<base href="<?php echo base_url(); ?>" />
	<link href="public/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<style type="text/css">
	.container{border:1px red solid;}
	</style>
</head>
<body>

<div class="container">
<form action="verify/test">
<label>用户名：</label><input type="text" class="form-control" name="name">
<input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
<input type="submit" value="提交" class="btn btn-primary">
</form>
    
</div>
	<p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds</p>

</body>
</html>