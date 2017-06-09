<?php
include'config.php';
?>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">

<link rel="stylesheet" href="http://font-awesome-4.4.0/css/font-awesome.min.css">

<link rel="canonical" href="http://bot.kunkey.net"/>

        <link rel="apple-touch-icon" href="http://m.bbit.vn/touch.png">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" type="text/css" media="all" />	




 <script language="javascript">

function load_ajax()
{
$("#submit").html("<b><i class='fa fa-spinner fa-spin'></i> Loading...</b>");
    // URL có kèm tham số number
    var url = "xuly.php?cookie="+$('#cookie').val()+"&idfb="+$('#idfb').val();
 
    // Data lúc này cho bằng rỗng
    var data = {};
 
    // Success Function
    var success = function (result){
        $('#result').html(result);
        $('#submit').html('Cài Đặt');
    };
 
    // Result Type
    var dataType = 'text';
 
    // Send Ajax
    $.get(url, data, success, dataType);
}
</script>


  <div class="container">
    <div class="row text-centered">
      <div class="col-md-12 text-center">
<div class="panel panel-primary">
<div class="panel-heading">
<h3 class="panel-title"><i class="fa fa-bug"></i> Cài Đặt Curl Like</h3>
</div>
<div class="panel-body">
<div class="form-group">
<label for="text">* Nhập Cookie Đã Cài Htc App :</label>
			<input type="text" id="cookie" class="form-control" placeholder=" Nhập Cookie Đã Cài Htc App">
</div>


<div class="form-group">
<label for="text">* Nhập ID Status :</label>
			<input type="text" id="idfb" class="form-control" placeholder=" Nhập ID Status">
</div>
<p id="result"></p>
<div class="form-group text-center">
<button id="submit" onclick="load_ajax()" class="btn btn-sm btn-primary"> Cài Đặt</button>
		</div>
</div>
</div>




<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<script src="./incfiles/app.js"></script>