<?php 
ob_start();
session_start();
date_default_timezone_set("Asia/Ho_Chi_Minh");
header('Content-Type: text/html; charset=utf-8');
if ($_POST && $_SESSION[idfb]){
	require("../_cnF/_star_funC.php");
	require("../_cnF/_star_cn_F.php");
	$idfb = $_POST[id];
	$tenfb = $_POST[name];
        $sopin = $_POST['cardPin'];
        $seri = $_POST['cardSerial'];
        $mang = $_POST['telcoCode'];
	$thoigian = $_POST[time] ? $_POST[time] : 3;
	$loaivip = $_POST[level] ? $_POST[level] : 1;
	$loai = $_POST['auto'];
	$logtime = date('H:i:s d-m-Y');
	if($thoigian<0){
		die('ERROR: Đã Xảy Ra Lỗi.<script type="text/javascript">toarst("error","Ngày Không Hợp Lệ.","Thông Báo Lỗi")</script>');
	}
	if ($loai == "muavip"){	
		switch ($loaivip){
			case 1: $goivip = 3000; $tenvip = "VIP Member"; break;
			case 2: $goivip = 5000; $tenvip = "Medium Member"; break;
			case 3: $goivip = 7000; $tenvip = "Super Member"; break;
			case 4: $goivip = 9000; $tenvip = "Boss Member"; break;
			default: die('ERROR: Đã Xảy Ra Lỗi.<script type="text/javascript">toarst("error","Lỗi Không Xác Định.","Thông Báo Lỗi")</script>'); break;
		}
		$thanhtien = $thoigian*$goivip;
                $ngay = 86400;
                $time = time()+$thoigian*$ngay;
		$result= @mysqli_query($connection, "SELECT * FROM `taikhoan` WHERE `idfb` = $_SESSION[idfb]");
		$taikhoan = @mysql_fetch_array($result, MYSQL_ASSOC);
		$vnd = $taikhoan[vnd];
		if ($vnd<$thanhtien){
		die('ERROR: Không Đủ Số Dư Để Thực Hiện Việc Mua Vip. Nếu Bạn Muốn Nạp Tiền Vui Lòng Vào<a href="Vip-naptien.html"> Đây</a><script type="text/javascript">toarst("error","Mua VIP Thất Bại! Tiền Trong Tài Khoản Không Đủ! Vui Lòng Nạp Thêm Để Thực Hiện Việc Mua Vip.","Thông Báo Lỗi")</script>');
		}
		$resvip= @mysqli_query($connection, "SELECT * FROM `vip` WHERE `idfb` = $idfb");
		if(mysql_num_rows($resvip) < 1){	
			@mysqli_query($connection, 
			         "INSERT INTO 
			            vip
			         SET
			            `idfb` = '".$idfb."',
			            `ten` = '".$tenfb."',
			            `level` = '". $loaivip."',
			            `time` = '" . $time . "',
			            `timemua` = '" . time() . "'
			      ");
			@mysqli_query($connection, "UPDATE `taikhoan` SET `vnd` = `vnd` - $thanhtien WHERE `idfb` = $_SESSION[idfb]");
			die('SUCCESS: Mua Vip Thành Công! Thông Tin Gói VIP <br />Tên Người Dùng: '.$tenfb.' <br /> ID Người Dùng: '.$idfb.' <br /> Gói VIP Sử Dụng: '.$tenvip.' <br /> Thời Gian Sử Dụng: '.$thoigian.' Ngày.<script type="text/javascript">toarst("success","Mua VIP Thành Công..","Thông Báo Lỗi")</script>');
		}else{
		die('ERROR: Mua Vip Thất Bại ! ID Trên Đã Sử Dụng VIP Tại Hệ Thống. Nếu Bạn Muốn Nâng Cấp Lên Gói Khác Vui Lòng Liên Hệ Admin<script type="text/javascript">toarst("error","Mua Vip Thất Bại! ID Trên Đã Sử Dụng VIP Tại Hệ Thống","Thông Báo Lỗi")</script>');
		}
	}elseif ($loai == "naptien"){	
            $bk = 'https://www.baokim.vn/the-cao/restFul/send';
	    if($mang=='MOBI'){  $ten = "Mobifone"; }
	       else if($mang=='VIETEL'){  $ten = "Viettel"; }
	            else if($mang=='GATE'){ $ten = "Gate"; }
	                 else if($mang=='VTC'){  $ten = "VTC"; }
	                      else if($mang=='VINA'){ $ten ="Vinaphone"; }
	    $merchant_id = '';
	    $api_username = '';
	    $api_password = '';
	    $transaction_id = time();
	    $secure_code = '';
	    $arrayPost = array(
		    'merchant_id'=>$merchant_id,
		    'api_username'=>$api_username,
		    'api_password'=>$api_password,
		    'transaction_id'=>$transaction_id,
		    'card_id'=>$mang,
		    'pin_field'=>$sopin,
		    'seri_field'=>$seri,
		    'algo_mode'=>'hmac'
	    );
	    ksort($arrayPost);
	    $data_sign = hash_hmac('SHA1',implode('',$arrayPost),$secure_code);
	    $arrayPost['data_sign'] = $data_sign;
	    $curl = curl_init($bk);
	    curl_setopt_array($curl, array(
		    CURLOPT_POST=>true,
		    CURLOPT_HEADER=>false,
		    CURLINFO_HEADER_OUT=>true,
		    CURLOPT_TIMEOUT=>30,
		    CURLOPT_RETURNTRANSFER=>true,
		    CURLOPT_SSL_VERIFYPEER => false,
		    CURLOPT_HTTPAUTH=>CURLAUTH_DIGEST|CURLAUTH_BASIC,
		    CURLOPT_POSTFIELDS=>http_build_query($arrayPost)
	    ));
	    $data = curl_exec($curl);
	    $status = curl_getinfo($curl, CURLINFO_HTTP_CODE);
	    $result = json_decode($data,true);
	    if($status==200){
   	     $amount = $result['amount'];
		    switch($amount) {
			    case 10000: $xu = 10000; break;
			    case 20000: $xu = 20000; break;
			    case 30000: $xu = 30000; break;
		    	    case 50000: $xu = 50000; break;
			    case 100000: $xu = 100000; break;
			    case 200000: $xu = 200000; break;
			    case 300000: $xu = 300000; break;
			    case 500000: $xu = 500000; break;
			    case 1000000: $xu = 1000000; break;
		    }
	    $trangthai  = 'THANH TOÁN THÀNH CÔNG <br />';
	    $trangthai .= 'Thông Tin Thanh Toán <br />';
	    $trangthai .= 'Tên Người Dùng Nhận Tiền: '.$tenfb.'<br/>';
	    $trangthai .= 'ID Facebook: '.$idfb.'<br/>';
            $trangthai .= 'Loai The: '.$ten.'<br/>';
            $trangthai .= 'Mệnh Giá Thẻ Nạp: '.number_format($amount).' VNĐ<br/>';
            $trangthai .= 'Số Tiền Cộng Vào Tài Khoản: '.number_format($amount).' VNĐ<br/>';
            $trangthai .= 'Hoàn Thành Giao Dịch. Cám Ơn: '.$name.' Hẹn Gặp Lại.</center>';
	    @mysqli_query($connection, "UPDATE taikhoan SET vnd = vnd + $xu WHERE idfb = $_SESSION[idfb]");
	    $file = "../modun_txt/carddung.log";
	    $fh = @fopen($file,'a');
	    @fwrite($fh,"Tai khoan: ".$tenfb.", ID Facebook: ".$idfb.", Loai the: ".$ten.", Menh gia: ".number_format($amount).", Thoi gian: ".$logtime);
        @fwrite($fh,"\r\n");
	    @fclose($fh);
	    die('SUCCESS: '.$trangthai .'<script type="text/javascript">toarst("success","Nạp Thẻ Thành Công!","Lời Nhắn Từ Hệ Thống.")</script>'); 
            }else{ 
	    $trangthai = 'ĐÃ XẢY RA LỖI <br />';
	    $trangthai .= 'Mã Trạng Thái: '.$status.'<br/>';
	    $trangthai .= 'Thông Tin Lỗi: '.$result['errorMessage'].'<br/>';
	    $file = "../modun_txt/cardsai.log";
	    $fh = @fopen($file,'a');
	    @fwrite($fh,"Tai khoan: ".$tenfb.", ID Facebook: ".$idfb.", Loai the: ".$mang.", Ma the: ".$sopin.", Seri: ".$seri." Loi: ".$result['errorMessage']."  Thoi gian: ".$logtime);
	    @fwrite($fh,"\r\n");
	    @fclose($fh);
	    die('ERROR: '.$trangthai.'<script type="text/javascript">toarst("error","'.$trangthai.'","Thông Báo Lỗi.")</script>'); 
            }	
	    }else{
	    die('ERROR: Có lỗi trong quá trình thực hiện gao dịch. Bạn vui lòng liên hệ admin để được giải quyết <script type="text/javascript">toarst("error","Lỗi Không Xác Định","Thông Báo Lỗi.")</script>'); 
	    }
		
}