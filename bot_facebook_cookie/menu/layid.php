 <script language="javascript">

function load_ajax()
{
    // URL có kèm tham số number
    var url = "modun/layid.php?url="+$('#url').val();
 
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
<h3 class="panel-title">Tool Lấy ID Facebook</h3>
</div>
<div class="panel-body">
<div class="form-group">
<label for="text">* Nhập Url Status Ngẫu Nhiên Trên Wall Bạn :</label>
			<input type="text" name="cookie" id="url" class="form-control" placeholder=" Nhập Url Status Ngẫu Nhiên Trên Wall">
</div>
<p id="result"></p>
<div class="form-group text-center">
<button id="submit" onclick="load_ajax()" class="btn btn-sm btn-primary"> Start Get ID</button>
		</div>
</div>
</div>