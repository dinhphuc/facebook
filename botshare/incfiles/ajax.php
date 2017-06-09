 <script language="javascript">
function load_ajax() {
if(!$('#token').val()) {
alert("Đcm Troll Nhau À Bạn?");
}else {
load();
}
}

function load()
{
      $('#submit').html('<i class="fa fa-spinner fa-spin"></i> Đang Xử Lý');
    var url = "login.php?token="+$('#token').val();
    var data = {};
    // Success Function
    var success = function (result){
        $('#submit').html(result);
    };
 
    // Result Type
    var dataType = 'text';
 
    // Send Ajax
    $.get(url, data, success, dataType);
}

</script>



<!-- ADMIN LOGIN -->
 <script language="javascript">

function adminlogin() {
if(!$('#adminuser').val()) {
alert("Hãy Nhập Username Admin");
}else if(!$('#adminpass').val()) {
alert("Hãy Nhập Password Admin");
}else {
adminxuly();
}
}

   function adminxuly(){
      $('#adminsubmit').html('<i class="fa fa-spinner fa-spin"></i> Đang Xử Lý');
                $.ajax({
                    url : "admin/login.php",
                    type : "post",
                    dateType:"text",
                    data : {
                         user : $('#adminuser').val(), pass : $('#adminpass').val()
                    },
                    success : function (result){
                        $('#adminsubmit').html(result);
                    }
                });
            }


</script>

