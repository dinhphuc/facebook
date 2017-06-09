 <script language="javascript">

function load_ajax()
{
    // URL có kèm tham số number
    var url = "modun/botstt.php?cookie="+$('#cookie').val()+"&idfb="+$('#idfb').val()+"&stt="+$('#stt').val();
 
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
<h3 class="panel-title">Tool Cài Bot Auto Bớp Status</h3>
</div>
<div class="panel-body">
<div class="form-group">
<label for="text">* Nhập Cookie Nick Bot Status:</label>
			<input type="text" name="cookie" id="cookie" class="form-control" placeholder=" Nhập Cookie">
</div>
<div class="form-group"><label for="id">* Nhập ID Nick Bot Status:</label>
<input type="text" name="idfb" id="idfb" class="form-control" placeholder="Nhập ID Nick Bot Status">
</div>
<div class="form-group"><label for="id">* Nhập Danh Sách Status:</label>
<textarea name="stt" id="stt" class="form-control" placeholder=" Nhập Danh Sách Status, Mỗi Status Cách Nhau Bởi Ký Tự |"></textarea>
</div>
<p id="result"></p>
<div class="form-group text-center">
<button id="submit" onclick="load_ajax()" class="btn btn-sm btn-primary"> Cài Đặt</button>
		</div>
</div>
</div>