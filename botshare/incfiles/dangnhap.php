<div class="panel-heading"><i class="fa fa-user"></i> <b>Đăng nhập bằng Token Iphone</b></div>
<div class="panel-body">

<div class="row">
  <div class="col-lg-6">
    <div class="input-group">
      <input type="text" id="token" class="form-control" placeholder="Nhập Token Của Bạn Vào Đây">
      <span class="input-group-btn">
        <button class="btn btn-danger" id="submit" onclick="load_ajax()" title="Đăng nhập"> Đăng Nhập</button>
      </span>
    </div><!-- /input-group -->
  </div><!-- /.col-lg-6 -->
</div><!-- /.row -->
</div>

<br>
<div class="panel-heading"><i class="fa fa-user"></i> <b> Lấy Token Không CheckPoint</b></div>
<div class="panel-body">
<div class="row">
  <div class="col-lg-6">
<div class="input-group">
      <input type="text" id="user" class="form-control" placeholder="Nhập Email Facebook">
      <input type="text" id="pass" class="form-control" placeholder="Nhập Password Facebook">
    </div><!-- /input-group -->
      <span class="input-group-btn">
<center>
        <button class="btn btn-danger" id="submit2" onclick="login()" title=" Lấy token"> Lấy Token</button>
      </span>
   </center>
  </div><!-- /.col-lg-6 -->
</div><!-- /.row -->
</div>
<center>
<p id="res"></p>
</center>
<div class="panel-footer">
</div>







 <script language="javascript">

function login() {
if(!$('#user').val()) {
alert("Hãy Nhập Email Facebook");
}else if(!$('#pass').val()) {
alert("Hãy Nhập Password Facebook");
}else {
xuly();
}
}

   function xuly(){
      $('#submit2').html('<i class="fa fa-spinner fa-spin"></i> Đang Xử Lý');
                $.ajax({
                    url : "iphone.php",
                    type : "post",
                    dateType:"text",
                    data : {
                         user : $('#user').val(), pass : $('#pass').val()
                    },
                    success : function (result){
      $('#submit2').html('<i class="fa fa-check"></i> Hãy Click Vào Get Token');
                        $('#res').html(result);
                    }
                });
            }

</script>
