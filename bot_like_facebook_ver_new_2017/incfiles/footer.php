					</div>
				</section>
			</div>
			<footer class="main-footer" style="min-height: 200px;"> 
				<div class="col-md-3 hidden-xs">
					<i class="fa fa-home"></i> Liên Kết Trang
					<ul>
						<li><a href="/">Trang chủ</a></li>
						<li><a href="https://youtu.be/R7osfwJzGVY" target="_blank">Hướng dẫn</a></li>
						<li><a href="../gioi-thieu.html" target="_blank">Giới thiệu</a></li>
						<li><a href="https://www.facebook.com/messages/100006716972752" target="_blank">Liên Hệ</a></li>
					</ul>
					<i class="fa fa-link"></i> Liên Kết Site
					<ul>
						<li><a href="https://www.facebook.com/100006716972752" target="_blank">Facebook</a></li>
						<li><a href="https://www.youtube.com/channel/UC2dJqhGjElzmO9fsV6tLQDA" target="_blank">Youtube</a></li>
					</ul>
				</div>
				<div class="col-md-6">
					<center>
						<div style="text-align:center">
							<p><b>HOTLIKE.NET<br>Hệ Thống Auto Like, Bot Like, Boom Like, Sim Simi Hiện Đại Nhất Hiện Nay</b></p>
							<div>
								<a><i class="fa fa-twitter-square" style="font-size:36px;color:#000000"></i></a> &nbsp;&nbsp;
								<a><i class="fa fa-facebook-square" style="font-size:36px;color:#000000"></i></a> &nbsp;&nbsp;
								<a><i class="fa fa-google-plus-square" style="font-size:36px;color:#000000"></i></a> &nbsp;&nbsp;
								<a><i class="fa fa-youtube-square" style="font-size:36px;color:#000000"></i></a><br>
								<small>Development By <i class="fa fa-paper-plane-o"></i> HDPro.</small><br>
								<small>© 2016 HOT-LIKE.NET</small>
							</div>
						</div>
					</center>
				</div>
			</footer>
			<aside class="control-sidebar control-sidebar-light" style="-webkit-border-radius:5px;-moz-border-radius:5px;border-radius:5px;">
				<ul class="nav nav-tabs tab-border-top-success">
					<li class="active"><a data-toggle="tab" href="#tabinfo"><i class="fa fa-info-circle fa-fw"></i></a></li>
					<li class=""><a data-toggle="tab" href="#tablanguage"><i class="fa fa-cogs"></i></a></li>
				</ul>
				<div class="tab-content">
					<div id="tabinfo" class="tab-pane active">
						<h3>Chào Bạn</h3>
						<ul style="padding:0;-webkit-border-radius:5px;-moz-border-radius:5px;border-radius:5px;">
							<? if ($_SESSION['idfb']) { ?>
							<li class="list-group-item">
								<span class="badge bg-maroon"><? echo isset($_SESSION['ten']) ? $_SESSION['ten'] : "Chưa Thiết Lập"; ?></span> Tên
							</li> 
							<li class="list-group-item ">
								<span class="badge bg-navy"><? echo number_format($vnds['vnd'])."  <i class='fa fa-money'> </i>"; ?></span> VNĐ
							</li>
							<li class="list-group-item">
								<span class="badge bg-yellow"><?php if(isset($_SESSION['idfb'])) echo $_SESSION['idfb']; ?></span> ID
							</li>
							<li class="list-group-item ">
								<span class="badge bg-green"><? echo isset($_SESSION['username']) ? $_SESSION['username'] : "Chưa Thiết Lập"; ?></span> User
							</li>
							<li class="list-group-item">
								<span class="badge bg-lime"><?php if(isset($_SESSION['gioitinh'])) echo $_SESSION['gioitinh']; ?></span> Giới Tính
							</li>
							<li class="list-group-item">
								<span class="badge bg-olive"><?php if(isset($_SESSION['ngaysinh'])) echo $_SESSION['ngaysinh']; ?></span> Ngày Sinh
							</li>
							<li class="list-group-item">
								<span class="badge bg-red"><? echo isset($_SESSION['email']) ? $_SESSION['email'] : "Chưa Thiết Lập"; ?></span> Mail
							</li>
							<li class="list-group-item">
								<span class="badge bg-blue"><? echo isset($_SESSION['sdt']) ? $_SESSION['sdt'] : "Chưa Thiết Lập"; ?></span> SĐT
							</li><br>
							<li class="list-group-item">
								<a style="blue">Ấn Vào</a> <i class="fa fa-bell-o" style="color:green;"></i> <a style="blue">Để Xem Những Cập Nhật Mới Nhé. Chúc Các Bạn Online Vui Vẻ.</a>
							</li>
							<? } else echo '<li class="list-group-item" style="color:red;"><i class="fa fa-hand-peace-o"></i>  Chào Bạn, Hiện Tại Bạn Chưa Đăng Nhập. <i class="fa fa-heart-o"></i></li><li class="list-group-item"><a style="blue">Ấn Vào</a> <i class="fa fa-bell-o" style="color:green;"></i> <a style="blue">Để Xem Những Cập Nhật Mới Nhé. Chúc Các Bạn Online Vui Vẻ.</a></li>'; ?>
						</ul>
					</div>
					<div id="tablanguage" class="tab-pane">
						<h3>Chọn Ngôn Ngữ</h3>
						<ul style="padding:0;-webkit-border-radius:5px;-moz-border-radius:5px;border-radius:5px;">
							<li class="list-group-item">
								<span style="color:red;"><i class="fa fa-language"></i> <h4>Translate</h4></span>
								<p><div id="google_translate_element"></div></p>
							</li>
						</ul>
					</div>
				</div>
			</aside>
		</div>
		<div class="modal inmodal" id="huongdan" tabindex="-1" role="dialog" aria-hidden="true">
			<div class="modal-dialog modal-lg">
				<div class="modal-content animated bounceIn">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
						<h4 class="modal-title">Làm Thế Nào Để Sử Dụng?</h4>
					</div>
					<div class="modal-body">
						<div class="box-body well well-sm no-shadow" style="font-size:13px;">
							<font color="blue">Điều Kiện 1:</font> Thiết Lập Năm Sinh Đủ 18 Tuổi. 
							<hr>
							<font color="blue">Điều Kiện 2:</font> Ai Có Thể Theo Dõi Bạn? Hãy Chọn <kbd><i class="fa fa-globe"></i> Mọi Người <i class="fa fa-caret-down"></i></kbd> Hoặc <kbd><i class="fa fa-globe"></i> EveryOne <i class="fa fa-caret-down"></i></kbd>. <a href="https://www.facebook.com/settings?tab=followers" target="_blank" rel="nofollow"><font color="red">Thiết Lập</font></a>
							<hr>
							<font color="blue">Điều Kiện 3:</font> Các Bài Viết Phải Được Đặt Ở Chế Độ <kbd><i class="fa fa-globe"></i> Mọi Người</kbd>. <a href="https://www.facebook.com/settings?tab=privacy&section=composer&view" target="_blank" rel="nofollow"><font color="red">Thiết Lập</font></a><br>
							(Thiết Lập Này Chỉ Áp Dụng Cho Các Bài Đăng Sau Khi Bạn Thiết Lập. Các Bài Đăng Trước Đó, Bạn Phải Chỉnh Sửa Ngày Trên Bài Đăng.)
							<hr>
							<font color="blue">Điều Kiện 4:</font> Riêng Auto Bình Luận Phải Bật Cho Phép <kbd><i class="fa fa-globe"></i> Mọi Người <i class="fa fa-caret-down"></i></kbd> Hoặc <kbd><i class="fa fa-globe"></i> EveryOne <i class="fa fa-caret-down"></i></kbd> Có Thể Bình Luận Bài Viết Của Bạn. <a href="http://fb.com/settings?tab=followers&amp;section=comment&amp;view" target="_blank" rel="nofollow"><font color="red">Thiết lập</font></a><br><br>
						</div>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-outline btn-danger" data-dismiss="modal">Đóng</button>
					</div>
				</div>
			</div>
		</div>
<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
<script type="text/javascript">
!function(e){function t(t,n){return parseInt(e.css(t[0],n))||0}function n(e){return e[0].offsetWidth+t(e,"marginLeft")+t(e,"marginRight")}function i(e){return e[0].offsetHeight+t(e,"marginTop")+t(e,"marginBottom")}e.fn.jCarouselLite=function(t){return t=e.extend({btnPrev:null,btnNext:null,btnGo:null,mouseWheel:!1,auto:null,hoverPause:!1,speed:200,easing:null,vertical:!1,circular:!0,visible:3,start:0,scroll:1,beforeStart:null,afterEnd:null},t||{}),this.each(function(){function r(){l(),N=setInterval(function(){c(g+t.scroll)},t.auto+t.speed)}function l(){clearInterval(N)}function s(){return p.slice(g).slice(0,b)}function c(n){if(!o){if(t.beforeStart&&t.beforeStart.call(this,s()),t.circular)0>n?(v.css(u,-((g+d)*m)+"px"),g=n+d):n>x-b?(v.css(u,-((g-d)*m)+"px"),g=n-d):g=n;else{if(0>n||n>x-b)return;g=n}o=!0,v.animate("left"==u?{left:-(g*m)}:{top:-(g*m)},t.speed,t.easing,function(){t.afterEnd&&t.afterEnd.call(this,s()),o=!1}),t.circular||(e(t.btnPrev+","+t.btnNext).removeClass("disabled"),e(g-t.scroll<0&&t.btnPrev||g+t.scroll>x-b&&t.btnNext||[]).addClass("disabled"))}return!1}var o=!1,u=t.vertical?"top":"left",a=t.vertical?"height":"width",f=e(this),v=e("ul",f),h=e("li",v),d=h.size(),b=t.visible;t.circular&&(v.prepend(h.slice(d-b+1).clone()).append(h.slice(0,t.scroll).clone()),t.start+=b-1);var p=e("li",v),x=p.size(),g=t.start;f.css("visibility","visible"),p.css({overflow:"hidden","float":t.vertical?"none":"left"}),v.css({margin:"0",padding:"0",position:"relative","list-style-type":"none","z-index":"1"}),f.css({overflow:"hidden",position:"relative","z-index":"2",left:"0px"});var m=t.vertical?i(p):n(p),P=m*x,w=m*b;p.css({width:p.width(),height:p.height()}),v.css(a,P+"px").css(u,-(g*m)),f.css(a,w+"px"),t.btnPrev&&(e(t.btnPrev).click(function(){return c(g-t.scroll)}),t.hoverPause&&e(t.btnPrev).hover(function(){l()},function(){r()})),t.btnNext&&(e(t.btnNext).click(function(){return c(g+t.scroll)}),t.hoverPause&&e(t.btnNext).hover(function(){l()},function(){r()})),t.btnGo&&e.each(t.btnGo,function(n,i){e(i).click(function(){return c(t.circular?t.visible+n:n)})}),t.mouseWheel&&f.mousewheel&&f.mousewheel(function(e,n){return c(n>0?g-t.scroll:g+t.scroll)});var N;t.auto&&(t.hoverPause&&f.hover(function(){l()},function(){r()}),r())})}}(jQuery);
function googleTranslateElementInit() {
  new google.translate.TranslateElement({pageLanguage: 'vi'}, 'google_translate_element');
}
function toarst(status,msg,title){
	Command: toastr[status](msg, title)
	toastr.options = {
	  "closeButton": true,
	  "debug": false,
	  "progressBar": true,
	  "positionClass": "toast-top-right",
	  "onclick": null,
	  "showDuration": "400",
	  "hideDuration": "1000",
	  "timeOut": "4000",
	  "extendedTimeOut": "1000",
	  "showEasing": "swing",
	  "hideEasing": "linear",
	  "showMethod": "slideDown",
	  "hideMethod": "slideUp"
	}
}
function login(n){return""==n?(a="error",b="Vui lòng đọc kỹ hướng dẫn sử dụng!",c="Lời Nhắn!",toarst(a,b,c),!1):"https://www.facebook.com/connect/blank.html#_=_"==n?(a="error",b="Bạn đã quá chậm ^^! Hãy thao tác nhanh hơn để có thể lấy được token. Xem video hướng dẫn bên dưới phần Hỗ trợ",c="Đăng Nhập Thất Bại",toarst(a,b,c),!1):($("#go").html('<i class="fa fa-spinner fa-spin"></i> Đang Tiến Hành'),document.getElementById("go").disabled=!0,n.match(/access_token=(.*)&expires_in/)?token=n.match(/access_token=(.*)&expires_in/)[1]:token=n,void $.post("/login/logincheck.php",{access_token:token,ref:""},function(n,t){datas=JSON.parse(n),"error"==datas.status?(a="error",c="Đăng Nhập Thất Bại",toarst(a,datas.mes,c)):"success"==datas.status?(a="success",c="Đăng Nhập Thành Công.",toarst(a,datas.mes,c),window.location=datas.link):(a="error",b="Lỗi không xác định",c="Đăng Nhập Thất Bại",ThongBao(a,b,c)),$("#go").html("Đăng nhập"),document.getElementById("go").disabled=!1}))}
function logincookie() {
    cookies = document.getElementById('cookie').value;
    if (!cookies) {toarst("error","Vui Lòng Nhập Vào Cookie Để Đăng Nhập","Lỗi Đăng Nhập"); return false;}
    apps = document.getElementById('appcookie').value;
    if (!apps) {toarst("error","Vui Lòng Chọn Ứng Dụng Để Đăng Nhập","Lỗi Đăng Nhập"); return false;}
    document.getElementById("botcookie").disabled = true;
    document.getElementById("cookie").disabled = true;
    document.getElementById("appcookie").disabled = true;
    $("#botcookie").html('<i class="fa fa-refresh fa-spin"></i> Đang Tiến Hành');
    $("#message").html("");
    $.post('modun/post_cookie.php', {
        cookie: cookies,
        app: apps
    }, function(data, status) {
        log(data);
        $("#botcookie").html('Đăng Nhập');
        document.getElementById("botcookie").disabled = false;
        document.getElementById("cookie").disabled = false;
        document.getElementById("appcookie").disabled = false;
    });
}
function loginemail() {
    emails = document.getElementById('email').value;
    if (!emails) {toarst("error","Vui Lòng Nhập Vào Email Hoặc Số Điện Thoại Để Đăng Nhập","Lỗi Đăng Nhập"); return false;}
    passwords = document.getElementById('password').value;
    if (!passwords) {toarst("error","Vui Lòng Nhập Vào Mật Khẩu Để Đăng Nhập","Lỗi Đăng Nhập"); return false;}
    apps = document.getElementById('app').value;
    if (!apps) {toarst("error","Vui Lòng Chọn App Để Đăng Nhập","Lỗi Đăng Nhập"); return false;}
    document.getElementById("botlogin").disabled = true;
    document.getElementById("email").disabled = true;
    document.getElementById("password").disabled = true;
    document.getElementById("app").disabled = true;
    $("#botlogin").html('<i class="fa fa-refresh fa-spin"></i> Đang Tiến Hành');
    $("#message").html("");
    $.post('modun/post_login.php', {
        email: emails,
        password: passwords,
        app: apps
    }, function(data, status) {
        log(data);
        $("#botlogin").html('Đăng Nhập');
        document.getElementById("botlogin").disabled = false;
        document.getElementById("email").disabled = false;
        document.getElementById("password").disabled = false;
        document.getElementById("app").disabled = false;
    });
}
</script>
<script type="text/javascript">
c = "success";
d = "Sao Chép ID Thành Công! Bây Giờ Bạn Có Thể Tiến Hành Auto Like"; 
e = "Thông Báo Từ Hệ Thống";
f = "error";
g ="Không Thể Thực Hiện. Vui Lòng Sao Chép ID Sau Đó Thực Hiện Auto";
h = "Thông Báo Từ Hệ Thống";
k = "Status Đang Không Ở Chế Độ Công Khai! Bạn Cần Để Ở Chế Độ Công Khai Trước Khi Tiếp Tục. ";
sus = "toarst(c,d,e)"; 
loi = "toarst(f,g,h)";
pri = "toarst(f,k,h)";
cr = "$('html, body').animate({ scrollTop: 0 }, 'slow')";
id_input = "'id'";
$(window).load(loadallposts());
function loadallposts(){
    $('#allposts').append('<div id="allposts">Đang tải dữ liệu, vui lòng chờ ... <br><i class="fa fa-spinner fa-pulse"></i></div>');
    token = "<?php if(isset($_SESSION['matoken'])) echo $_SESSION['matoken']; ?>";
    url=encodeURI("https://graph.facebook.com/me/feed?fields=type,message,full_picture,likes,created_time,privacy,link,permalink_url,comments,shares,from&limit=30&access_token="+token);
    $.getJSON(url,"NULL",function(feed,stat){
        allposts = '';
        long = feed['data'].length;
        for(i=0;i<long;i++){
            id = feed['data'][i]['from']['id'];
            name = feed['data'][i]['from']['name'];
            avt = '<img class="img-circle" style="border:2px solid rgb(5, 255, 71);" src="https://graph.facebook.com/' + id + '/picture" alt="Avt"/>';
            feed['data'][i]['message'] ? msg = '<p>'+feed['data'][i]['message']+'</p>' : msg = "<p>Không Có Nội Dung</p>";
            feed['data'][i]['full_picture'] ? img = '<img class="img-responsive" src="'+ feed['data'][i]['full_picture'] +'">' : img = '';
            feed['data'][i]['id'] ? idstt = feed['data'][i]['id'] : idstt = "Không Lấy Được ID Post Này. Bạn Vui Lòng Lấy Bằng Cách Khác";
            if (feed['data'][i]['privacy']['value'] == "EVERYONE") {
            	privacy = "";
            	button = '<button class="badge bg-green" id="click" onclick="'+ sus + ';' + cr + ';document.getElementById('+id_input+').value=getElementById('+i+').value;">Sao Chép ID</button><input type="hidden" id="' + i + '" value="' + idstt + '">';
            }else{
            	privacy = '<div class="alert alert-danger">Không Thể Auto Cho Post Này! Post Đang <strong>Không</strong> Ở Chế Độ Công Khai.<br /> Vào <a class="alert-link" target="_blank" href="http://facebook.com/'+ idstt +'">Đây</a> Để Đặt Chế Độ Công Khai Cho Post.</div>';
            	button = '<button class="badge bg-maroon" id="click" onclick="' + pri + ';">Sao Chép ID</button>'
            }
            btn = '<div class="btn-group">'+ button+'</div>';
            feed['data'][i]['created_time'] ? timef =  feed['data'][i]['created_time'].split("T") : time = "Lỗi";
            times = timef[1].split(":");
            time = "Đăng Lúc " + times[0] + " Giờ " + times[1] + " Phút - " + timef[0];
            allposts += '<div class="social-feed-box"><div class="social-avatar"><a href="#" class="pull-left">'+ avt+'</a>   <div class="media-body">   <a href="#">'+ name +'</a> <small class="text-muted">'+time+'</small></div></div>';
            allposts += '<div class="social-body">'+ msg +' '+ img+' '+ btn +'<br /></div><br>'+privacy+'</div><hr>'; 
        }
        $("#allposts").html('');
        $("#allposts").append(allposts);
    });
}
function loadstatus(){
    $('#status').append('<div id="status">Đang tải dữ liệu, vui lòng chờ ... <br><i class="fa fa-spinner fa-pulse"></i></div>');
    token = "<?php if(isset($_SESSION['matoken'])) echo $_SESSION['matoken']; ?>";
    url=encodeURI("https://graph.facebook.com/me/feed?fields=type,message,full_picture,likes,created_time,privacy,link,permalink_url,comments,shares,from&limit=30&access_token="+token);
    $.getJSON(url,"NULL",function(feed,stat){
        status = '';
        long = feed['data'].length;
        for(i=0;i<long;i++){
            id = feed['data'][i]['from']['id'];
            name = feed['data'][i]['from']['name'];
            avt = '<img class="img-circle" style="border:2px solid rgb(5, 255, 71);" src="https://graph.facebook.com/' + id + '/picture" alt="Avt"/>';
            feed['data'][i]['message'] ? msg = '<p>'+feed['data'][i]['message']+'</p>' : msg = "<p>Không Có Nội Dung</p>";
            feed['data'][i]['full_picture'] ? img = '<img class="img-responsive" src="'+ feed['data'][i]['full_picture'] +'">' : img = '';
            feed['data'][i]['id'] ? idstt = feed['data'][i]['id'] : idstt = "Không Lấy Được ID Post Này. Bạn Vui Lòng Lấy Bằng Cách Khác";
            if (feed['data'][i]['privacy']['value'] == "EVERYONE") {
            	privacy = "";
            	button = '<button class="badge bg-green" id="click" onclick="'+ sus + ';' + cr + ';document.getElementById('+id_input+').value=getElementById('+i+').value;">Sao Chép ID</button><input type="hidden" id="' + i + '" value="' + idstt + '">';
            }else{
            	privacy = '<div class="alert alert-danger">Không Thể Auto Cho Post Này! Post Đang <strong>Không</strong> Ở Chế Độ Công Khai.<br /> Vào <a class="alert-link" target="_blank" href="http://facebook.com/'+ idstt +'">Đây</a> Để Đặt Chế Độ Công Khai Cho Post.</div>';
            	button = '<button class="badge bg-maroon" id="click" onclick="' + pri + ';">Sao Chép ID</button>'
            }
            if (feed['data'][i]['type'] == 'status') {
	            btn = '<div class="btn-group">'+ button+'</div>';
	            feed['data'][i]['created_time'] ? timef =  feed['data'][i]['created_time'].split("T") : time = "Lỗi";
	            times = timef[1].split(":");
	            time = "Đăng Lúc " + times[0] + " Giờ " + times[1] + " Phút - " + timef[0];
	            status += '<div class="social-feed-box"><div class="social-avatar"><a href="#" class="pull-left">'+ avt+'</a>   <div class="media-body">   <a href="#">'+ name +'</a><small class="text-muted">'+time+'</small></div></div>';
	            status += '<div class="social-body">'+ msg +' '+ img+' '+ btn +'<br /></div><br>'+privacy+'</div><hr>'; 
        }
        }
        if(status == "") status = "Không Có Nội Dung";
        $("#status").html('');
        $("#status").append(status);
    });
}
function loadphotos(){
    $('#photos').append('<div id="photos">Đang tải dữ liệu, vui lòng chờ ... <br><i class="fa fa-spinner fa-pulse"></i></div>');
    token = "<?php if(isset($_SESSION['matoken'])) echo $_SESSION['matoken']; ?>";
    url=encodeURI("https://graph.facebook.com/me/feed?fields=type,message,full_picture,likes,created_time,privacy,link,permalink_url,comments,shares,from&limit=30&access_token="+token);
    $.getJSON(url,"NULL",function(feed,stat){
        photos = '';
        long = feed['data'].length;
        for(i=0;i<long;i++){
            id = feed['data'][i]['from']['id'];
            name = feed['data'][i]['from']['name'];
            avt = '<img class="media-object img-circle" style="border:2px solid rgb(5, 255, 71);" src="https://graph.facebook.com/' + id + '/picture" alt="Avt"/>';
            feed['data'][i]['message'] ? msg = '<p>'+feed['data'][i]['message']+'</p>' : msg = "<p>Không Có Nội Dung</p>";
            feed['data'][i]['full_picture'] ? img = '<img class="img-responsive" src="'+ feed['data'][i]['full_picture'] +'">' : img = '';
            feed['data'][i]['id'] ? idstt = feed['data'][i]['id'] : idstt = "Không Lấy Được ID Post Này. Bạn Vui Lòng Lấy Bằng Cách Khác";
            if (feed['data'][i]['privacy']['value'] == "EVERYONE") {
            	privacy = "";
            	button = '<button class="badge bg-green" id="click" onclick="'+ sus + ';' + cr + ';document.getElementById('+id_input+').value=getElementById('+i+').value;">Sao Chép ID</button><input type="hidden" id="' + i + '" value="' + idstt + '">';
            }else{
            	privacy = '<div class="alert alert-danger">Không Thể Auto Cho Post Này! Post Đang <strong>Không</strong> Ở Chế Độ Công Khai.<br /> Vào <a class="alert-link" target="_blank" href="http://facebook.com/'+ idstt +'">Đây</a> Để Đặt Chế Độ Công Khai Cho Post.</div>';
            	button = '<button class="badge bg-maroon" id="click" onclick="' + pri + ';">Sao Chép ID</button>'
            }
           if (feed['data'][i]['type'] == 'photo') {
	            btn = '<div class="btn-group">'+ button+'</div>';
	            feed['data'][i]['created_time'] ? timef =  feed['data'][i]['created_time'].split("T") : time = "Lỗi";
	            times = timef[1].split(":");
	            time = "Đăng Lúc " + times[0] + " Giờ " + times[1] + " Phút - " + timef[0];
	            photos += '<div class="social-feed-box"><div class="social-avatar"><a href="#" class="pull-left">'+ avt+'</a>   <div class="media-body">   <a href="#">'+ name +'</a><small class="text-muted">'+time+'</small></div></div>';
	            photos += '<div class="social-body">'+ msg +' '+ img+' '+ btn +'<br /></div><br>'+privacy+'</div><hr>'; 
        }
        }
        if(photos == "") photos = "Không Có Nội Dung";
        $("#photos").html('');
        $("#photos").append(photos);
    });
}
function loadvideos(){
    $('#videos').append('<div id="videos">Đang tải dữ liệu, vui lòng chờ ... <br><i class="fa fa-spinner fa-pulse"></i></div>');
    token = "<?php if(isset($_SESSION['matoken'])) echo $_SESSION['matoken']; ?>";
    url=encodeURI("https://graph.facebook.com/me/feed?fields=type,message,full_picture,likes,created_time,privacy,link,permalink_url,comments,shares,from&limit=30&access_token="+token);
    $.getJSON(url,"NULL",function(feed,stat){
        videos = '';
        long = feed['data'].length;
        for(i=0;i<long;i++){
            id = feed['data'][i]['from']['id'];
            name = feed['data'][i]['from']['name'];
            avt = '<img class="media-object img-circle" style="border:2px solid rgb(5, 255, 71);" src="https://graph.facebook.com/' + id + '/picture" alt="Avt"/>';
            feed['data'][i]['message'] ? msg = '<p>'+feed['data'][i]['message']+'</p>' : msg = "<p>Không Có Nội Dung</p>";
            feed['data'][i]['full_picture'] ? img = '<img class="img-responsive" src="'+ feed['data'][i]['full_picture'] +'">' : img = '';
            feed['data'][i]['id'] ? idstt = feed['data'][i]['id'] : idstt = "Không Lấy Được ID Post Này. Bạn Vui Lòng Lấy Bằng Cách Khác";
            if (feed['data'][i]['privacy']['value'] == "EVERYONE") {
            	privacy = "";
            	button = '<button class="badge bg-green" id="click" onclick="'+ sus + ';' + cr + ';document.getElementById('+id_input+').value=getElementById('+i+').value;">Sao Chép ID</button><input type="hidden" id="' + i + '" value="' + idstt + '">';
            }else{
            	privacy = '<div class="alert alert-danger">Không Thể Auto Cho Post Này! Post Đang <strong>Không</strong> Ở Chế Độ Công Khai.<br /> Vào <a class="alert-link" target="_blank" href="http://facebook.com/'+ idstt +'">Đây</a> Để Đặt Chế Độ Công Khai Cho Post.</div>';
            	button = '<button class="badge bg-maroon" id="click" onclick="' + pri + ';">Sao Chép ID</button>'
            }
            if (feed['data'][i]['type'] == 'video') {
	            btn = '<div class="btn-group">'+ button+'</div>';
	            feed['data'][i]['created_time'] ? timef =  feed['data'][i]['created_time'].split("T") : time = "Lỗi";
	            times = timef[1].split(":");
	            time = "Đăng Lúc " + times[0] + " Giờ " + times[1] + " Phút - " + timef[0];
	            photos += '<div class="social-feed-box"><div class="social-avatar"><a href="#" class="pull-left">'+ avt+'</a>   <div class="media-body">   <a href="#">'+ name +'</a><small class="text-muted">'+time+'</small></div></div>';
	            photos += '<div class="social-body">'+ msg +' '+ img+' '+ btn +'<br /></div><br>'+privacy+'</div><hr>'; 
        }
        }
        if(videos == "") videos = "Không Có Nội Dung";
        $("#videos").html('');
        $("#videos").append(videos);
    });
}
function loadlinks(){
    $('#links').append('<div id="links">Đang tải dữ liệu, vui lòng chờ ... <br><i class="fa fa-spinner fa-pulse"></i></div>');
    token = "<?php if(isset($_SESSION['matoken'])) echo $_SESSION['matoken']; ?>";
    url=encodeURI("https://graph.facebook.com/me/feed?fields=type,message,full_picture,likes,created_time,privacy,link,permalink_url,comments,shares,from&limit=30&access_token="+token);
    $.getJSON(url,"NULL",function(feed,stat){
        links = '';
        long = feed['data'].length;
        for(i=0;i<long;i++){
            id = feed['data'][i]['from']['id'];
            name = feed['data'][i]['from']['name'];
            avt = '<img class="media-object img-circle" style="border:2px solid rgb(5, 255, 71);" src="https://graph.facebook.com/' + id + '/picture" alt="Avt"/>';
            feed['data'][i]['message'] ? msg = '<p>'+feed['data'][i]['message']+'</p>' : msg = "<p>Không Có Nội Dung</p>";
            feed['data'][i]['full_picture'] ? img = '<img class="img-responsive" src="'+ feed['data'][i]['full_picture'] +'">' : img = '';
            feed['data'][i]['id'] ? idstt = feed['data'][i]['id'] : idstt = "Không Lấy Được ID Post Này. Bạn Vui Lòng Lấy Bằng Cách Khác";
            if (feed['data'][i]['privacy']['value'] == "EVERYONE") {
            	privacy = "";
            	button = '<button class="badge bg-green" id="click" onclick="'+ sus + ';' + cr + ';document.getElementById('+id_input+').value=getElementById('+i+').value;">Sao Chép ID</button><input type="hidden" id="' + i + '" value="' + idstt + '">';
            }else{
            	privacy = '<div class="alert alert-danger">Không Thể Auto Cho Post Này! Post Đang <strong>Không</strong> Ở Chế Độ Công Khai.<br /> Vào <a class="alert-link" target="_blank" href="http://facebook.com/'+ idstt +'">Đây</a> Để Đặt Chế Độ Công Khai Cho Post.</div>';
            	button = '<button class="badge bg-maroon" id="click" onclick="' + pri + ';">Sao Chép ID</button>'
            }
              if (feed['data'][i]['type'] == 'link') {
	            btn = '<div class="btn-group">'+ button+'</div>';
	            feed['data'][i]['created_time'] ? timef =  feed['data'][i]['created_time'].split("T") : time = "Lỗi";
	            times = timef[1].split(":");
	            time = "Đăng Lúc " + times[0] + " Giờ " + times[1] + " Phút - " + timef[0];
	            links += '<div class="social-feed-box"><div class="social-avatar"><a href="#" class="pull-left">'+ avt+'</a>   <div class="media-body">   <a href="#">'+ name +'</a><small class="text-muted">'+time+'</small></div></div>';
	            links += '<div class="social-body">'+ msg +' '+ img+' '+ btn +'<br /></div><br>'+privacy+'</div><hr>'; 
        }
        }
        if(links == "") links = "Không Có Nội Dung";
        $("#links").html('');
        $("#links").append(links);
    });
}
function loadfr(){
    $('#friend').append('<div id="friend">Đang tải dữ liệu, vui lòng chờ ... <br><i class="fa fa-spinner fa-pulse"></i></div>');
    token = "<?php if(isset($_SESSION['matoken'])) echo $_SESSION['matoken']; ?>";
    url=encodeURI("https://graph.facebook.com/me/friends?limit=5000&access_token="+token);
    $.getJSON(url,"NULL",function(f,stat){
        long = f['data'].length+1;
        friend = '';
        id = "'id'";
        fa="Sao Chép ID Thành Công! Bây Giờ Bạn Có Thể Bão Like";
        star = "toarst(c,fa,e)"; 
        for (i=1;i<long;i++) {
            friend += '<tr><td>'+ i+'</td><td>'+f['data'][i-1]['name']+'</td><td>'+f['data'][i-1]['id']+'</td><td><button class="badge bg-green" id="click" onclick="'+ star + ';' + cr + ';document.getElementById('+id+').value=getElementById('+i+').value;">Sao Chép ID</button><input type="hidden" id="' + i + '" value="' + f['data'][i-1]['id'] + '"></td></tr>';
        }
        $("#friend").html('');
        $("#friend").append(friend);
    });
}
</script>
<script type="text/javascript">
(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v2.6&appId=1736099326674733";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));
$(function() {
    $(".newsticker-jcarousellite").jCarouselLite({
        vertical: true,
        hoverPause:true,
        visible: 1,
        auto:1000,
        speed:3000
    });
});
    $("#loi").click(function(){
    a = "error";
    b = "Vui Lòng Chọn Copy ID Rồi Sử Dụng Auto Nhé!";
    c = "Lời Nhắn Từ Hệ Thống";
    toarst(a,b,c);
    })
</script>
<script type="text/javascript">
var seconds = "<? echo $conlai; ?>";
function secondPassed() {
var minutes = Math.round((seconds - 30) / 60);
var remainingSeconds = seconds % 60;
if (remainingSeconds < 10) {
remainingSeconds = "0" + remainingSeconds;
}
document.getElementById("countdown").innerHTML = "Vui Lòng Chờ  " + minutes + " Phút " + remainingSeconds + "  Giây Còn Lại Để Tiếp Tục Auto Lần Tiếp Theo";
if (seconds <= 0) {
clearInterval(countdownTimer);
document.getElementById("countdown").innerHTML = "";
} else {
seconds--;
}
}
var countdownTimer = setInterval("secondPassed()", 1000);
function get_id(ids) {
	if (ids.match(/fbid=([0-9]*)&set/)) {
	    id = ids.match(/photo.php\?fbid=([0-9]*)&set/)[1];
	} else if (ids.match(/story_fbid=([0-9]*)&/)) {
	    id = ids.match(/story_fbid=([0-9]*)&/)[1];
	} else if (ids.match(/posts\/([0-9]*)/)) {
	    id = ids.match(/posts\/([0-9]*)/)[1];
	} else if (ids.match(/fbid=([0-9]*)&/)) {
	    id = ids.match(/posts\/([0-9]*)/)[1];
	} else if (ids.match(/facebook\.com\/([0-9]*)\/photos/)) {
	    id = ids.match(/facebook\.com\/([0-9]*)\/photos/)[1];
	} else if (ids.match(/www.facebook.com\/(.*)\/videos\/([0-9]*)/)) {
	    id = ids.match(/www.facebook.com\/(.*)\/videos\/([0-9]*)/)[2];
	} else {
	    id = ids;
	}
	idfb2 = ids.match(/comment_id=([0-9]*)/);
	if (idfb2) {
	id = id + '_' + idfb2[1];
	}
    return id;
}
function log(msg) {
    $('#message').html('');
    $('#message').append(msg);
    $('#message').fadeIn(999);
}
function check() {
$("#lol").load('modun/post_chatbox.php');
}
$(document).ready(function() {
check(); 
});
function postChatbox() {
    messs = document.getElementById('mess').value;
    if (messs == "") {toarst("error", "Vui Lòng Nhập Tin Nhắn","Thông Báo Lỗi"); return false;}
    document.getElementById("chatbox").disabled = true;
    $("#chatbox").html('<i class="fa fa-refresh fa-spin"></i> Đang Gửi');
    $("#message").html("");
    log('<i class="fa fa-spinner fa-pulse"></i> Đang Thực Hiện, vui lòng đợi ... ')
    $.post('modun/post_chatbox.php', {
        mess: messs
    }, function(data, status) {
        log(data);
        $("#chatbox").html('<i class="fa fa-exchange"></i> Gửi');
        document.getElementById('mess').value = "";
        document.getElementById("chatbox").disabled = false;
    });
}
function postVip() {
    ids = document.getElementById('idfb').value;
    names = document.getElementById('tenfb').value;
    levels = document.getElementById('goi_vip').value;
    if (levels == 0) {toarst("error", "Vui Lòng Chọn Gói Vip","Thông Báo Lỗi"); return false;}
    times = document.getElementById('time').value;
    document.getElementById("muavip").disabled = true;
    autos = "muavip";
    $("#muavip").html('<i class="fa fa-refresh fa-spin"></i> Đang Tiến Hành');
    $("#message").html("");
    $('#star').show();
    log('<i class="fa fa-spinner fa-pulse"></i> Đang Thực Hiện, vui lòng đợi ... ')
    $.post('modun/post_vip.php', {
        id: ids,
        name: names,
        level: levels,
        auto:autos,
        time: times
    }, function(data, status) {
        log(data);
        $("#muavip").html('<i class="fa fa-exchange"></i> Mua Vip');
        document.getElementById("muavip").disabled = false;
    });
}
function postNaptien() {
    ids = document.getElementById('id').value;
    names = document.getElementById('name').value;
    telcoCodes = document.getElementById('telcoCode').value;
    if (telcoCodes == 0) {toarst("error", "Vui Lòng Chọn Nhà Mạng","Thông Báo Lỗi"); return false;}
    cardPins = document.getElementById('cardPin').value;
     if (!cardPins) {toarst("error", "Vui Lòng Nhập Vào Mã Thẻ","Thông Báo Lỗi"); return false;}
    cardSerials = document.getElementById('cardSerial').value;
     if (!cardSerials) {toarst("error", "Vui Lòng Nhập Vào Số Seri","Thông Báo Lỗi"); return false;}
    document.getElementById("naptien").disabled = true;
    autos = "naptien";
    $("#naptien").html('<i class="fa fa-refresh fa-spin"></i> Đang Tiến Hành');
    $("#message").html("");
    $('#star').show();
    log('<i class="fa fa-spinner fa-pulse"></i> Đang Thực Hiện, vui lòng đợi ... ')
    $.post('modun/post_vip.php', {
        id: ids,
        name: names,
        cardPin: cardPins,
        cardSerial: cardSerials,
        auto:autos,
        telcoCode: telcoCodes
    }, function(data, status) {
        log(data);
        $("#naptien").html('<i class="fa fa-exchange"></i> Thanh Toán');
        document.getElementById("naptien").disabled = false;
    });
}
    function muavip() {
        goi = document.getElementById('goi_vip').value;
        $.get('/modun/post_info.php?goi=' + goi, function(data, status) {
            datas = JSON.parse(data);
            price_goi = datas['price'];
            limitday = datas['limitday'];
            limitlike = datas['limit_liketus'];
            limitlikec = datas['limit_likecmt'];
            name = datas['name'];
            price_time = document.getElementById('time').value;
            price = price_time * price_goi;
            var point_me = 993183500;
            var sodu = point_me - price;
            $("#tien").html(formatNumber(price));
            $("#luongngay").html(price_time);
            $("#luonglike").html(limitlike);
            $("#luonglikec").html(limitlikec);
            $("#tenvip").html(name);
            $("#gioihan").html(limitday);
            $("#sodu").html(formatNumber(sodu));
            if (point_me - price < 0) {
                toarst("error","Số Tiền Trong Tài Khoản Không Đủ.","Thông Báo Lỗi");
                $('#star').show();
                $("#message").html('Bạn không đủ tiền \n\n Giá VIP bạn chọn: ' + formatNumber(price) + ' VNĐ. Số tiền bạn có: ' + formatNumber(point_me) + ' VNĐ. Bạn có muốn nạp thêm không ? <a href="Vip-naptien.html"><b><font color=red>Click vào đây để nạp tiền</font></b></a>');
                
                document.getElementById('z').disabled = true;
                return false;
            } else {
                document.getElementById('z').disabled = false;
                return true;
            }
        })
    };
function formatNumber(number){
    number = number.toFixed(2) + '';
    x = number.split('.');
    x1 = x[0];
    x2 = x.length > 1 ? '.' + x[1] : '';
    var rgx = /(\d+)(\d{3})/;
    while (rgx.test(x1)) {
        x1 = x1.replace(rgx, '$1' + ',' + '$2');
    }
    return x1;
}
function postMess() {
    document.getElementById("megg").disabled = true;
    $("#megg").html('<i class="fa fa-refresh fa-spin"></i> Đang Gửi');
    $("#result").html('<i class="fa fa-spinner fa-pulse"></i> Đang Thực Hiện, vui lòng đợi ... ');
               var fid = $('input[name=inboxpro]:checked').val();
               var url_login = 'modun/post_inbox.php';
               $.ajax({
                   url: url_login,
                   data: 'fid=' + fid,
                   type: 'POST',
                   dataType: 'html',
                   success: function (pesan) {
                       $("#result").html(pesan);
                       $('#megg').html(' Load Tin Nhắn');
        document.getElementById("megg").disabled = false;
			$('#process').css('display','block');
                   },
               });
}
function post_Traloi() {
    document.getElementById("null").disabled = true;
    $("#null").html('<i class="fa fa-refresh fa-spin"></i> Đang Gửi');
    $("#result").html('<i class="fa fa-spinner fa-pulse"></i> Đang Thực Hiện, vui lòng đợi ... ');
               var fid = $('input[name=inboxpro]:checked').val();
               var traloi = $('#traloi').val();
               var url_login = 'modun/post_inboxsend.php';
               $.ajax({
                   url: url_login,
                   data: 'fid=' + fid + '&traloi=' + traloi,
                   type: 'POST',
                   dataType: 'html',
                   success: function (pesan) {
                       $("#result").html(pesan);
                 postMess();
                       $('#null').html(' Gửi Tin Nhắn');
        document.getElementById("null").disabled = false;
                   },
               });
}
function post_Like() {
	a = document.getElementById('id').value;
	ids = get_id(a);
	server = document.getElementById('_SERVER').value;
	autos = 'like';
	limits = document.getElementById('limit').value;
	document.getElementById("like").disabled = true;
	$("#like").html('<i class="fa fa-refresh fa-spin"></i> Đang Tiến Hành');
	$("#message").html("");
	$('#star').show();
	log('<i class="fa fa-spinner fa-pulse"></i> Đang Auto Like, vui lòng đợi ... ')
	$.post('modun/post_auto.php', {
	    id: ids,
	    limit: limits,
                _SERVER: server,
	    auto: autos
	}, function(data, status) {
	    log(data);
	    $("#like").html('<i class="fa fa-exchange"></i> Auto Like');
	    document.getElementById("like").disabled = false;
	});
}
function post_CamXuc() {
	a = document.getElementById('id').value;
	ids = get_id(a);
	types = document.getElementById('type').value;
	server = document.getElementById('_SERVER').value;
	autos = 'camxuc';
	limits = document.getElementById('limit').value;
	document.getElementById("camxuc").disabled = true;
	$("#camxuc").html('<i class="fa fa-refresh fa-spin"></i> Đang Tiến Hành');
	$("#message").html("");
	$('#star').show();
	log('<i class="fa fa-spinner fa-pulse"></i> Đang Auto Cảm Xúc, vui lòng đợi ... ')
	$.post('modun/post_auto.php', {
	    id: ids,
	    type: types,
	    limit: limits,
                _SERVER: server,
	    auto: autos
	}, function(data, status) {
	    log(data);
	    $("#camxuc").html('<i class="fa fa-exchange"></i> Auto Cảm Xúc');
	    document.getElementById("camxuc").disabled = false;
	});
}
function post_Danhgia() {
	a = document.getElementById('id').value;
	ids = get_id(a);
	rates = document.getElementById('rate').value;
	server = document.getElementById('_SERVER').value;
	autos = 'danhgia';
	limits = document.getElementById('limit').value;
	document.getElementById("danhgia").disabled = true;
	$("#danhgia").html('<i class="fa fa-refresh fa-spin"></i> Đang Tiến Hành');
	$("#message").html("");
	$('#star').show();
	log('<i class="fa fa-spinner fa-pulse"></i> Đang Auto Đánh Giá, vui lòng đợi ... ')
	$.post('modun/post_auto.php', {
	    id: ids,
	    rate: rates,
	    limit: limits,
                _SERVER: server,
	    auto: autos
	}, function(data, status) {
	    log(data);
	    $("#danhgia").html('<i class="fa fa-exchange"></i> Auto Đánh Giá');
	    document.getElementById("danhgia").disabled = false;
	});
}
function post_Share() {
	a = document.getElementById('id').value;
	ids = get_id(a);
	server = document.getElementById('_SERVER').value;
	autos = 'share';
	limits = document.getElementById('limit').value;
	document.getElementById("share").disabled = true;
	$("#share").html('<i class="fa fa-refresh fa-spin"></i> Đang Tiến Hành');
	$("#message").html("");
	$('#star').show();
	log('<i class="fa fa-spinner fa-pulse"></i> Đang Auto Chia Sẻ, vui lòng đợi ... ')
	$.post('modun/post_auto.php', {
	    id: ids,
	    limit: limits,
                _SERVER: server,
	    auto: autos
	}, function(data, status) {
	    log(data);
	    $("#share").html('<i class="fa fa-exchange"></i> Auto Chia Sẻ');
	    document.getElementById("share").disabled = false;
	});
}
function post_Friend() {
	ids = document.getElementById('id').value;
	server = document.getElementById('_SERVER').value;
	autos = 'friend';
	limits = document.getElementById('limit').value;
	document.getElementById("friend").disabled = true;
	$("#friend").html('<i class="fa fa-refresh fa-spin"></i> Đang Tiến Hành');
	$("#message").html("");
	$('#star').show();
	log('<i class="fa fa-spinner fa-pulse"></i> Đang Auto Kết Bạn, vui lòng đợi ... ')
	$.post('modun/post_auto.php', {
	    id: ids,
	    limit: limits,
                _SERVER: server,
	    auto: autos
	}, function(data, status) {
	    log(data);
	    $("#friend").html('<i class="fa fa-exchange"></i> Auto Kết Bạn');
	    document.getElementById("friend").disabled = false;
	});
}
function post_Cmt() {
	a = document.getElementById('id').value;
	ids = get_id(a);
	params = document.getElementById('param').value;
	if (!params) {toarst("error","Trường Nội Dung Đang Trống. Bạn Cần Kiểm Tra Lại.","Thông Báo Lỗi"); return false;}
	server = document.getElementById('_SERVER').value;
	autos = 'cmt';
	limits = document.getElementById('limit').value;
	document.getElementById("cmt").disabled = true;
	$("#cmt").html('<i class="fa fa-refresh fa-spin"></i> Đang Tiến Hành');
	$("#message").html("");
	$('#star').show();
	log('<i class="fa fa-spinner fa-pulse"></i> Đang Auto Bình Luận, vui lòng đợi ... ')
	$.post('modun/post_auto.php', {
	    id: ids,
	    limit: limits,
	    param: params,
                _SERVER: server,
	    auto: autos
	}, function(data, status) {
	    log(data);
	    $("#cmt").html('<i class="fa fa-exchange"></i> Auto Bình Luận');
	    document.getElementById("cmt").disabled = false;
	});
}
function post_Sub() {
	ids = document.getElementById('id').value;
	server = document.getElementById('_SERVER').value;
	autos = 'sub';
	limits = document.getElementById('limit').value;
	document.getElementById("sub").disabled = true;
	$("#sub").html('<i class="fa fa-refresh fa-spin"></i> Đang Tiến Hành');
	$("#message").html("");
	$('#star').show();
	log('<i class="fa fa-spinner fa-pulse"></i> Đang Auto Theo Dõi, vui lòng đợi ... ')
	$.post('modun/post_auto.php', {
	    id: ids,
	    limit: limits,
                _SERVER: server,
	    auto: autos
	}, function(data, status) {
	    log(data);
	    $("#sub").html('<i class="fa fa-exchange"></i> Auto Theo Dõi');
	    document.getElementById("sub").disabled = false;
	});
}
function post_BotCamXuc() {
    ids = document.getElementById('id').value;
    camxucs = document.getElementById('camxuc').value;
    likecmts = document.getElementById('likecmt').value;
    yeucaus = document.getElementById('yeucau').value;
    server = document.getElementById('_SERVER').value;
    autos = 'botcamxuc';
    tokens = document.getElementById('token').value;
    document.getElementById("botcamxuc").disabled = true;
    $("#botcamxuc").html('<i class="fa fa-refresh fa-spin"></i> Đang Tiến Hành');
    $("#message").html("");
    $('#star').show();
    log('<i class="fa fa-spinner fa-pulse"></i> Quá Trình Cài Đặt Đang Diễn Ra, Vui Lòng Đợi ... ')
    $.post('modun/post_bot.php', {
        id: ids,
        yeucau: yeucaus,
        token: tokens,
        _SERVER: server,
        auto: autos,
        camxuc: camxucs,
        likecmt: likecmts
    }, function(data, status) {
        log(data);
        $("#botcamxuc").html('<i class="fa fa-exchange"></i> Thực Thi');
        document.getElementById("botcamxuc").disabled = false;
    });
}
function post_BotLike() {
    ids = document.getElementById('id').value;
    likecmts = document.getElementById('likecmt').value;
    yeucaus = document.getElementById('yeucau').value;
    server = document.getElementById('_SERVER').value;
    autos = 'botlike';
    tokens = document.getElementById('token').value;
    document.getElementById("botlike").disabled = true;
    $("#botlike").html('<i class="fa fa-refresh fa-spin"></i> Đang Tiến Hành');
    $("#message").html("");
    $('#star').show();
    log('<i class="fa fa-spinner fa-pulse"></i> Quá Trình Cài Đặt Đang Diễn Ra, Vui Lòng Đợi ... ')
    $.post('modun/post_bot.php', {
        id: ids,
        yeucau: yeucaus,
        token: tokens,
         _SERVER: server,
        auto: autos,
        likecmt: likecmts
    }, function(data, status) {
        log(data);
        $("#botlike").html('<i class="fa fa-exchange"></i> Thực Thi');
        document.getElementById("botlike").disabled = false;
    });
}
function post_BotExLike() {
    ids = document.getElementById('id').value;
    likecmts = document.getElementById('likecmt').value;
    yeucaus = document.getElementById('yeucau').value;
    server = document.getElementById('_SERVER').value;
    autos = 'botexlike';
    tokens = document.getElementById('token').value;
    document.getElementById("botexlike").disabled = true;
    $("#botexlike").html('<i class="fa fa-refresh fa-spin"></i> Đang Tiến Hành');
    $("#message").html("");
    $('#star').show();
    log('<i class="fa fa-spinner fa-pulse"></i> Quá Trình Cài Đặt Đang Diễn Ra, Vui Lòng Đợi ... ')
    $.post('modun/post_bot.php', {
        id: ids,
        yeucau: yeucaus,
        token: tokens,
         _SERVER: server,
        auto: autos,
        likecmt: likecmts
    }, function(data, status) {
        log(data);
        $("#botexlike").html('<i class="fa fa-exchange"></i> Thực Thi');
        document.getElementById("botexlike").disabled = false;
    });
}
function post_BotExLove() {
    ids = document.getElementById('id').value;
    likecmts = document.getElementById('likecmt').value;
    yeucaus = document.getElementById('yeucau').value;
    server = document.getElementById('_SERVER').value;
    autos = 'botexlove';
    tokens = document.getElementById('token').value;
    document.getElementById("botexlove").disabled = true;
    $("#botexlove").html('<i class="fa fa-refresh fa-spin"></i> Đang Tiến Hành');
    $("#message").html("");
    $('#star').show();
    log('<i class="fa fa-spinner fa-pulse"></i> Quá Trình Cài Đặt Đang Diễn Ra, Vui Lòng Đợi ... ')
    $.post('modun/post_bot.php', {
        id: ids,
        yeucau: yeucaus,
        token: tokens,
         _SERVER: server,
        auto: autos,
        likecmt: likecmts
    }, function(data, status) {
        log(data);
        $("#botexlove").html('<i class="fa fa-exchange"></i> Thực Thi');
        document.getElementById("botexlove").disabled = false;
    });
}
function post_BotCmt() {
    ids = document.getElementById('id').value;
    bts = document.getElementById('bieutuong').value;
    qcs = document.getElementById('quangcao').value;
    yeucaus = document.getElementById('yeucau').value;
    server = document.getElementById('_SERVER').value;
    autos = 'botcmt';
    tokens = document.getElementById('token').value;
    document.getElementById("botcmt").disabled = true;
    $("#botcmt").html('<i class="fa fa-refresh fa-spin"></i> Đang Tiến Hành');
    $("#message").html("");
    $('#star').show();
    log('<i class="fa fa-spinner fa-pulse"></i> Quá Trình Cài Đặt Đang Diễn Ra, Vui Lòng Đợi ... ')
    $.post('modun/post_bot.php', {
        id: ids,
        yeucau: yeucaus,
        token: tokens,
         _SERVER: server,
        auto: autos,
        quangcao: qcs,
        bieutuong: bts
    }, function(data, status) {
        log(data);
        $("#botcmt").html('<i class="fa fa-exchange"></i> Thực Thi');
        document.getElementById("botcmt").disabled = false;
    });
}
function post_BotTuongTac() {
    ids = document.getElementById('id').value;
    yeucaus = document.getElementById('yeucau').value;
    server = document.getElementById('_SERVER').value;
    autos = 'bottuongtac';
    tokens = document.getElementById('token').value;
    document.getElementById("bottuongtac").disabled = true;
    $("#bottuongtac").html('<i class="fa fa-refresh fa-spin"></i> Đang Tiến Hành');
    $("#message").html("");
    $('#star').show();
    log('<i class="fa fa-spinner fa-pulse"></i> Quá Trình Cài Đặt Đang Diễn Ra, Vui Lòng Đợi ... ')
    $.post('modun/post_bot.php', {
        id: ids,
        yeucau: yeucaus,
        token: tokens,
        _SERVER: server,
        auto: autos
    }, function(data, status) {
        log(data);
        $("#bottuongtac").html('<i class="fa fa-exchange"></i> Thực Thi');
        document.getElementById("bottuongtac").disabled = false;
    });
}
function post_BotTraLike() {
    ids = document.getElementById('id').value;
    yeucaus = document.getElementById('yeucau').value;
    server = document.getElementById('_SERVER').value;
    autos = 'bottralike';
    tokens = document.getElementById('token').value;
    document.getElementById("bottralike").disabled = true;
    $("#bottralike").html('<i class="fa fa-refresh fa-spin"></i> Đang Tiến Hành');
    $("#message").html("");
    $('#star').show();
    log('<i class="fa fa-spinner fa-pulse"></i> Quá Trình Cài Đặt Đang Diễn Ra, Vui Lòng Đợi ... ')
    $.post('modun/post_bot.php', {
        id: ids,
        yeucau: yeucaus,
        token: tokens,
         _SERVER: server,
        auto: autos
    }, function(data, status) {
        log(data);
        $("#bottralike").html('<i class="fa fa-exchange"></i> Thực Thi');
        document.getElementById("bottralike").disabled = false;
    });
}
function post_BoomLike() {
    ids = document.getElementById('id').value;
    cmts = document.getElementById('likecmt').value;
    server = document.getElementById('_SERVER').value;
    tokens = document.getElementById('token').value;
    autos = 'boomlike';
    limits = document.getElementById('limit').value;
    document.getElementById("boomlike").disabled = true;
    $("#boomlike").html('<i class="fa fa-refresh fa-spin"></i> Đang Tiến Hành');
    $("#message").html("");
    $('#star').show();
    log('<i class="fa fa-spinner fa-pulse"></i> Quá Trình Bão Like Đang Diễn Ra, Vui Lòng Đợi ... ')
    $.post('modun/post_boom.php', {
        id: ids,
        cmt: cmts,
        token: tokens,
        limit: limits,
         _SERVER: server,
        auto: autos
    }, function(data, status) {
        log(data);
        $("#boomlike").html('<i class="fa fa-exchange"></i> Thực Thi');
        document.getElementById("boomlike").disabled = false;
    });
}
function post_BoomCamXuc() {
    ids = document.getElementById('id').value;
    cmts = document.getElementById('likecmt').value;
    camxucs = document.getElementById('camxuc').value;
    server = document.getElementById('_SERVER').value;
    tokens = document.getElementById('token').value;
    autos = 'boomcamxuc';
    limits = document.getElementById('limit').value;
    document.getElementById("boomcamxuc").disabled = true;
    $("#boomcamxuc").html('<i class="fa fa-refresh fa-spin"></i> Đang Tiến Hành');
    $("#message").html("");
    $('#star').show();
    log('<i class="fa fa-spinner fa-pulse"></i> Quá Trình Bão Cảm Súc Đang Diễn Ra, Vui Lòng Đợi ... ')
    $.post('modun/post_boom.php', {
        id: ids,
        cmt: cmts,
        token: tokens,
        camxuc: camxucs,
        limit: limits,
         _SERVER: server,
        auto: autos
    }, function(data, status) {
        log(data);
        $("#boomcamxuc").html('<i class="fa fa-exchange"></i> Thực Thi');
        document.getElementById("boomcamxuc").disabled = false;
    });
}
function post_BoomCmt() {
    ids = document.getElementById('id').value;
    nds = document.getElementById('noidung').value;
    server = document.getElementById('_SERVER').value;
    tokens = document.getElementById('token').value;
    autos = 'boomcmt';
    limits = document.getElementById('limit').value;
    document.getElementById("boomcmt").disabled = true;
    $("#boomcmt").html('<i class="fa fa-refresh fa-spin"></i> Đang Tiến Hành');
    $("#message").html("");
    $('#star').show();
    log('<i class="fa fa-spinner fa-pulse"></i> Quá Trình Bão Comment Đang Diễn Ra, Vui Lòng Đợi ... ')
    $.post('modun/post_boom.php', {
        id: ids,
        noidung: nds,
        token: tokens,
        limit: limits,
         _SERVER: server,
        auto: autos
    }, function(data, status) {
        log(data);
        $("#boomcmt").html('<i class="fa fa-exchange"></i> Thực Thi');
        document.getElementById("boomcmt").disabled = false;
    });
}
function post_SimFeed() {
    ids = document.getElementById('id').value;
    yeucaus = document.getElementById('yeucau').value;
    server = document.getElementById('_SERVER').value;
    autos = 'simfeed';
    tokens = document.getElementById('token').value;
    document.getElementById("simfeed").disabled = true;
    $("#simfeed").html('<i class="fa fa-refresh fa-spin"></i> Đang Tiến Hành');
    $("#message").html("");
    $('#star').show();
    log('<i class="fa fa-spinner fa-pulse"></i> Quá Trình Cài Đặt Đang Diễn Ra, Vui Lòng Đợi ... ')
    $.post('modun/post_sim.php', {
        id: ids,
        yeucau: yeucaus,
        token: tokens,
         _SERVER: server,
        auto: autos
    }, function(data, status) {
        log(data);
        $("#simfeed").html('<i class="fa fa-exchange"></i> Thực Thi');
        document.getElementById("simfeed").disabled = false;
    });
}
function post_SimStatus() {
    ids = document.getElementById('id').value;
    yeucaus = document.getElementById('yeucau').value;
    server = document.getElementById('_SERVER').value;
    autos = 'simstatus';
    tokens = document.getElementById('token').value;
    document.getElementById("simstatus").disabled = true;
    $("#simstatus").html('<i class="fa fa-refresh fa-spin"></i> Đang Tiến Hành');
    $("#message").html("");
    $('#star').show();
    log('<i class="fa fa-spinner fa-pulse"></i> Quá Trình Cài Đặt Đang Diễn Ra, Vui Lòng Đợi ... ')
    $.post('modun/post_sim.php', {
        id: ids,
        yeucau: yeucaus,
        token: tokens,
         _SERVER: server,
        auto: autos
    }, function(data, status) {
        log(data);
        $("#simstatus").html('<i class="fa fa-exchange"></i> Thực Thi');
        document.getElementById("simstatus").disabled = false;
    });
}
function post_SimInboxPage() {
    ids = document.getElementById('id').value;
    yeucaus = document.getElementById('yeucau').value;
    server = document.getElementById('_SERVER').value;
    autos = 'siminboxpage';
    tokens = document.getElementById('token').value;
    document.getElementById("siminboxpage").disabled = true;
    $("#siminboxpage").html('<i class="fa fa-refresh fa-spin"></i> Đang Tiến Hành');
    $("#message").html("");
    $('#star').show();
    log('<i class="fa fa-spinner fa-pulse"></i> Quá Trình Cài Đặt Đang Diễn Ra, Vui Lòng Đợi ... ')
    $.post('modun/post_sim.php', {
        id: ids,
        yeucau: yeucaus,
        token: tokens,
         _SERVER: server,
        auto: autos
    }, function(data, status) {
        log(data);
        $("#siminboxpage").html('<i class="fa fa-exchange"></i> Thực Thi');
        document.getElementById("siminboxpage").disabled = false;
    });
}
function post_SimInboxCanhan() {
    ids = document.getElementById('id').value;
    yeucaus = document.getElementById('yeucau').value;
    server = document.getElementById('_SERVER').value;
    autos = 'siminboxcanhan';
    tokens = document.getElementById('token').value;
    document.getElementById("siminboxcanhan").disabled = true;
    $("#siminboxcanhan").html('<i class="fa fa-refresh fa-spin"></i> Đang Tiến Hành');
    $("#message").html("");
    $('#star').show();
    log('<i class="fa fa-spinner fa-pulse"></i> Quá Trình Cài Đặt Đang Diễn Ra, Vui Lòng Đợi ... ')
    $.post('modun/post_sim.php', {
        id: ids,
        yeucau: yeucaus,
        token: tokens,
         _SERVER: server,
        auto: autos
    }, function(data, status) {
        log(data);
        $("#siminboxcanhan").html('<i class="fa fa-exchange"></i> Thực Thi');
        document.getElementById("siminboxcanhan").disabled = false;
    });
}
function loaded() {
    var emojiElem = document.getElementsByClassName("emoji");
    for (var counter = 0; emojiElem[counter]; counter++) {
        emojiElem[counter].addEventListener('click', function(e) {
            var data_c = e.srcElement.getAttribute('data-c');
            document.getElementById("copyText").value += data_c;
        });
    }
    document.getElementById("mainForm").addEventListener('submit', function(e) {
        e.preventDefault();
    });
    document.getElementById("copyTextButton").addEventListener('click', function(e) {
        executeCopy(document.getElementById("copyText").value);
    });
    document.getElementById("clearTextButton").addEventListener('click', function(e) {
        document.getElementById("copyText").value = "";
        toarst(x,"Đã Xóa Tất Cả Các Biểu Tượng",z);
    });
    $('.emoji').click(function() {
            x = "success";
            y = "Biểu Tượng Đã Được Thêm Thành Công!";
            z = "Lời Nhắn Từ Hệ Thống";
            toarst(x,y,z);
    });
}
function executeCopy(text) {
    var input = document.getElementById("copyText");
    input.value = text;
    input.focus();
    input.select();
    document.execCommand('Copy');
    toarst(x,"Sao Chép Thành Công",z);
}
window.onload = loaded;

function showvideo(link,id){
    $("#"+id).html('<div class="box-body"><iframe width="350" height="200" src="'+link+'" frameborder="0" allowfullscreen></iframe></div>');
}if(screen.width<300){
    $("#form").removeClass("input-group input-group-lg").addClass('input-group input-group-sm');
    $(".col-md-10.col-xs-offset-1").removeClass("col-xs-offset-1");
    $(".col-xs-8.col-xs-offset-2").removeClass("col-xs-offset-2").removeClass("col-xs-8").addClass('col-xs-12');
}
</script>
</body>
</html>