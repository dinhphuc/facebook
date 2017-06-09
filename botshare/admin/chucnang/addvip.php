<div class="input-group">
      <input type="text" id="id" class="form-control" placeholder="Nhập ID User Vip">
   
    </div>
      <span class="input-group-btn">
<center>
        <button class="btn btn-danger" id="addvip" onclick="addvip()" title="Add User"> Add User Vip</button>
      </span>





<!-- ÂDD VIP-->


 <script language="javascript">
function addvip() {
if(!$('#id').val()) {
alert("Đcm Troll Nhau À Bạn?");
}else {
addvipxuly();
}
}

function addvipxuly()
{
      $('#addvip').html('<i class="fa fa-spinner fa-spin"></i> Đang Xử Lý');
    var url = "postvip.php?id="+$('#id').val();
    var data = {};
    // Success Function
    var success = function (result){
        $('#addvip').html(result);
    };
 
    // Result Type
    var dataType = 'text';
 
    // Send Ajax
    $.get(url, data, success, dataType);
}

</script>
