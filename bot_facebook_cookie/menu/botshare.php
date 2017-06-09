 <script language="javascript">

function load_ajax()
{
    // URL có kèm tham số number
    var url = "modun/botshare.php?token="+$('#token').val()+"&idfb="+$('#idfb').val();
 
    // Data lúc này cho bằng rỗng
    var data = {};
 
    // Success Function
    var success = function (result){
        $('#result').html(result);
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
<h3 class="panel-title">Tool Tăng Share Status</h3>
</div>
<div class="panel-body">
<div class="form-group">
<label for="text">* Nhập Token HTC Có Fanpage :</label>
			<input type="text" id="token" class="form-control" placeholder=" Nhập Token HTC Có Fanpage">
</div>
<div class="form-group"><label for="id">* Nhập ID Nick Muốn Tăng Share :</label>
<input type="text" name="idfb" id="idfb" class="form-control" placeholder="Nhập ID Nick Muốn Tăng Share">
</div>
<p id="result"></p>
<div class="form-group text-center">
<button id="submit" onclick="load_ajax()" class="btn btn-sm btn-primary"> Start Share</button>
		</div>
</div>
</div>