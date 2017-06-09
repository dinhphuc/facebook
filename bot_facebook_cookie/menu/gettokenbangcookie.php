 <script language="javascript">

function load_ajax()
{
    // URL có kèm tham số number
    var url = "modun/gettokenbangcookie.php?cookie="+$('#cookie').val()+"&app="+$('#app').val();
 
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
<h3 class="panel-title">Tool Lấy Token Bằng Cookie</h3>
</div>
<div class="panel-body">
<div class="form-group">
<label for="text">* Nhập Cookie Facebook :</label>
			<input type="text" name="cookie" id="cookie" class="form-control" placeholder="Your Cookie Facebook">
<div class="form-group"><label for="app">* Chọn Ứng Dụng :</label>
<select name="app" id="app" class="form-control">
<option value="htc">HTC Sense</option>
<option value="nokia">Nokia Account</option>
<option value="insta">Instagram</option>
<option value="android">Android</option>
<option value="ios">IOS</option>
</select>
</div>
<p id="result"></p>
<div class="form-group text-center">
<button id="submit" onclick="load_ajax()" class="btn btn-sm btn-primary">Start Get Token</button>
		</div>
</div>
</div>