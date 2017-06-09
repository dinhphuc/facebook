<?php
	set_time_limit(0);
	error_reporting(0);
	class curllikestarleo
	{
	public $id;
	private function thongtin()
    {
	$w = '<pre>

<div class="table-responsive">                 
<h2>cURL Like Facebook By Kunkey</h2>
Đang sử lý thực hiện tăng LIKE cho ID: '.$this->id.'
<hr><hr><br>
</pre>';
    echo $w;
    }


 private function Submit($url,$fields)
    {
		$userAgents=array( 
			"Mozilla/5.0 (compatible; MSIE 9.0; Windows NT 6.0; Trident/5.0; chromeframe/11.0.696.57)",
            "Mozilla/5.0 (compatible; MSIE 9.0; Windows NT 6.0; Trident/4.0; GTB7.4; InfoPath.3; SV1; .NET CLR 3.1.76908; WOW64; en-US)",
            "Mozilla/5.0 (Windows; U; MSIE 9.0; WIndows NT 9.0; en-US))",
            "Mozilla/5.0 (Windows; U; MSIE 9.0; Windows NT 9.0; en-US)",
            "Mozilla/5.0 (compatible; MSIE 9.0; Windows NT 7.1; Trident/5.0)",
            "Mozilla/5.0 (compatible; MSIE 9.0; Windows NT 6.1; WOW64; Trident/5.0; SLCC2; Media Center PC 6.0; InfoPath.3; MS-RTC LM 8; Zune 4.7)",
            "Mozilla/5.0 (compatible; MSIE 9.0; Windows NT 6.1; WOW64; Trident/5.0; SLCC2; Media Center PC 6.0; InfoPath.3; MS-RTC LM 8; Zune 4.7",
			"Mozilla/5.0 (Windows NT 6.2; rv:21.0) Gecko/20130326 Firefox/21.0",
            "Mozilla/5.0 (Windows NT 6.1; WOW64; rv:21.0) Gecko/20130401 Firefox/21.0",
            "Mozilla/5.0 (Windows NT 6.1; WOW64; rv:21.0) Gecko/20130331 Firefox/21.0",
            "Mozilla/5.0 (Windows NT 6.1; WOW64; rv:21.0) Gecko/20130330 Firefox/21.0",
            "Mozilla/5.0 (Windows NT 6.1; WOW64; rv:21.0) Gecko/20100101 Firefox/21.0",
            "Mozilla/5.0 (Windows NT 6.1; rv:21.0) Gecko/20130401 Firefox/21.0",
            "Mozilla/5.0 (Windows NT 6.1; rv:21.0) Gecko/20130328 Firefox/21.0",
            "Mozilla/5.0 (Windows NT 6.1; rv:21.0) Gecko/20100101 Firefox/21.0",
            "Opera/9.80 (X11; Linux i686; U; en-GB) Presto/2.2.15 Version/10.00",
            "Opera/9.80 (X11; Linux i686; U; en) Presto/2.2.15 Version/10.00",
            "Opera/9.80 (X11; Linux i686; U; Debian; pl) Presto/2.2.15 Version/10.00",
            "Opera/9.80 (X11; Linux i686; U; de) Presto/2.2.15 Version/10.00",
            "Opera/9.80 (Windows NT 6.1; U; zh-cn) Presto/2.2.15 Version/10.00",
            "Opera/9.80 (Windows NT 6.1; U; fi) Presto/2.2.15 Version/10.00",
            "Opera/9.80 (Windows NT 6.1; U; en) Presto/2.2.15 Version/10.00",
			"Mozilla/5.0 (Macintosh; U; Intel Mac OS X 10_6_3; ru-ru) AppleWebKit/533.16 (KHTML, like Gecko) Version/5.0 Safari/533.16",
            "Mozilla/5.0 (Macintosh; U; Intel Mac OS X 10_6_3; ko-kr) AppleWebKit/533.16 (KHTML, like Gecko) Version/5.0 Safari/533.16",
            "Mozilla/5.0 (Macintosh; U; Intel Mac OS X 10_6_3; it-it) AppleWebKit/533.16 (KHTML, like Gecko) Version/5.0 Safari/533.16",
            "Mozilla/5.0 (Macintosh; U; Intel Mac OS X 10_6_3; HTC-P715a; en-ca) AppleWebKit/533.16 (KHTML, like Gecko) Version/5.0 Safari/533.16",
            "Mozilla/5.0 (Macintosh; U; Intel Mac OS X 10_6_3; en-us) AppleWebKit/534.1+ (KHTML, like Gecko) Version/5.0 Safari/533.16",
            "Mozilla/5.0 (Macintosh; U; Intel Mac OS X 10_6_3; en-au) AppleWebKit/533.16 (KHTML, like Gecko) Version/5.0 Safari/533.16",
			"Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/536.5 (KHTML, like Gecko) Chrome/19.0.1084.9 Safari/536.5",
            "Mozilla/5.0 (Windows NT 6.0) AppleWebKit/536.5 (KHTML, like Gecko) Chrome/19.0.1084.36 Safari/536.5",
            "Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/536.3 (KHTML, like Gecko) Chrome/19.0.1063.0 Safari/536.3",
            "Mozilla/5.0 (Windows NT 5.1) AppleWebKit/536.3 (KHTML, like Gecko) Chrome/19.0.1063.0 Safari/536.3",
            "Mozilla/5.0 (Macintosh; Intel Mac OS X 10_8_0) AppleWebKit/536.3 (KHTML, like Gecko) Chrome/19.0.1063.0 Safari/536.3",
            "Mozilla/5.0 (Windows NT 6.2) AppleWebKit/536.3 (KHTML, like Gecko) Chrome/19.0.1062.0 Safari/536.3",
            "Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/536.3 (KHTML, like Gecko) Chrome/19.0.1062.0 Safari/536.3",
            "Mozilla/5.0 (Windows NT 6.2) AppleWebKit/536.3 (KHTML, like Gecko) Chrome/19.0.1061.1 Safari/536.3",
            "Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/536.3 (KHTML, like Gecko) Chrome/19.0.1061.1 Safari/536.3"
		);
		$this->proxy1 = explode(':', $this->proxy);
		$field_string = http_build_query($fields);
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL,$url);
		curl_setopt($ch, CURLOPT_FOLLOWLOCATION,false);
        curl_setopt($ch, CURLOPT_FRESH_CONNECT,true);
		//curl_setopt($ch, CURLOPT_PROXYTYPE, CURLPROXY_SOCKS5);
		//curl_setopt($ch, CURLOPT_PROXY, $this->proxy1[0]);
		//curl_setopt($ch, CURLOPT_PROXYPORT, $this->proxy1[1]);
        //curl_setopt($ch, CURLOPT_HTTPHEADER,array("REMOTE_ADDR: $this->proxy1[0]", "HTTP_X_FORWARDED_FOR: $this->proxy1[0]"));
        curl_setopt($ch, CURLOPT_TCP_NODELAY,true);       
		curl_setopt($ch, CURLOPT_REFERER,$url);          
		curl_setopt($ch, CURLOPT_TIMEOUT,5);		
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($ch, CURLOPT_USERAGENT, $userAgents[$random]);
		curl_setopt($ch, CURLOPT_COOKIEFILE,'liker1.txt');
		curl_setopt($ch, CURLOPT_COOKIEJAR,'liker1.txt');
		curl_setopt($ch, CURLOPT_POST, count($field_string));
		curl_setopt($ch, CURLOPT_POSTFIELDS,$field_string);   
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
		curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
		$body = curl_exec($ch);
		if(!curl_errno($ch)){
		$info = curl_getinfo($ch);
		$redir = $info['redirect_url'];
		$code = $info['http_code'];
		curl_close($ch);
		return $redir." <br> Dengan Code = ".$code."";
		}
		unlink("liker1.txt");
		curl_close($ch);
   }
			
			private function vipliketay02($tok)
		{
                $II = "http://auto-fb-tools.com/verify.php?user=".$tok;
                $III = array(
                "null" => "null",
                );
                $IIII = "http://auto-fb-tools.com/liker.php?type=custom";
                $IIIII = array(
                "id" => $this->id,
                "submit" => "Submit",
                );
                echo $this->Submit($II,$III);
                echo $this->Submit($IIII,$IIIII);         
        }
			
			private function vipliketay12($tok)
		{
                $II = "http://www.fb-likers.com/mylogin.php?user=".$tok;
                $III = array(
                "null" => "null",
                );
                $IIII = "http://www.fb-likers.com/liker.php?type=custom";
                $IIIII = array(
                "id" => $this->id,
				"yourlimitpost" => "00001,00010000",
                "submit" => "Submit",
                );
                echo $this->Submit($II,$III);
                echo $this->Submit($IIII,$IIIII);
        }
			
			private function vipliketay14($tok)
		{
                $II = "http://www.on-liker.com/verify.php?user=".$tok;
                $III = array(
                "null" => "null",
                );
                $IIII = "http://www.on-liker.com/liker.php?type=custom";
                $IIIII = array(
                "id" => $this->id,
                "submit" => "Submit",
                );
                echo $this->Submit($II,$III);
                echo $this->Submit($IIII,$IIIII);     
        }
			
			private function vipliketay19($tok)
		{
                $II = "http://www.autolikerforfb.com/login.php?user=".$tok;
                $III = array(
                "null" => "null",
                );
                $IIII = "http://www.autolikerforfb.com/like.php?type=custom";
                $IIIII = array(
                "id" => $this->id,
				"submit" => "Submit",
                );
                echo $this->Submit($II,$III);
                echo $this->Submit($IIII,$IIIII);          
        }
			
			private function vipliketay21($tok)
		{		
				$IIX = "http://oficial.likelo.com.br/index.php";
                $II = "http://oficial.likelo.com.br/verify.php?user=".$tok;
                $III = array(
                "null" => "null",
                );
                $IIII = "http://oficial.likelo.com.br/liker.php?type=custom";
                $IIIII = array(
                "id" => $this->id,
                "submit" => "Submit",
                );
                echo $this->Submit($II,$III);
                echo $this->Submit($IIII,$IIIII);          
        }
private function vipliketay34($tok)
		{
                $II = "http://hacklike.net/login.php?user=".$tok;
                $III = array(
                "null" => "null",
                );
				$IIIX = "http://hacklike.net/like.php?user=".$tok;
                $IIII = "http://hacklike.net/autolike.php?type=custom";
                $IIIII = array(
                "id" => $this->id,
                "submit" => "AutoLike",
                );
                echo $this->Submit($II,$III);
                echo $this->Submit($IIII,$IIIII);       
        }
			private function vipliketay35($tok)
		{
                $II = "http://autolikesub.com/login.php?user=".$tok;
                $III = array(
                "null" => "null",
                );
				$IIIX = "http://autolikesub.com/like.php?user=".$tok;
                $IIII = "http://autolikesub.com/autolike.php?type=custom";
                $IIIII = array(
                "id" => $this->id,
                "submit" => "AutoLike",
                );
                echo $this->Submit($II,$III);
                echo $this->Submit($IIII,$IIIII);        
        }
			
			private function vipliketay39($tok)
		{
                $II = "http://bestlike.info/verify.php?user=".$tok;
                $III = array(
                "null" => "null",
                );
                $IIII = "http://bestlike.info/liker.php?type=custom";
                $IIIII = array(
                "id" => $this->id,
                "submit" => "Submit",
                );
                echo $this->Submit($II,$III);
                echo $this->Submit($IIII,$IIIII);       
        }
			
	        private function vipliketay41($tok)
		{
                $II = "http://vnlike.me/login.php";
                $III = array(
                "access_token" => $tok,
                );
                $IIII = "http://vnlike.me/V-Like.php";
                $IIIII = array(
                "uid" => $this->id,
                "submit" => "Tăng Lượt Like",
                );
                echo $this->Submit($II,$III);
                echo $this->Submit($IIII,$IIIII);      
        }
		 private function dmm8($tok)
	{	 
		$II = "http://www.fb-likers.com/mylogin.php?user=".$tok;
		$III = array(
		"null" => "null",
		);
		$IIII = "http://www.fb-likers.com/liker.php?type=custom";
		$IIIII = array(
                       "id" => $this->id,
                       "yourlimitpost" => "00001,00010000",
                       "submit" => "Submit",
		);
		echo $this->Submit($II,$III);
		echo $this->Submit($IIII,$IIIII);	
	  }

   private function dmm14($tok)
	{
	
		$II = "http://auto-fb-tools.com/verify.php?user=".$tok;
        $III = array(
        "null" => "null",
        );
        $IIII = "http://auto-fb-tools.com/liker.php?type=custom";
        $IIIII = array(
        "id" => $this->id,
        "submit" => "Submit",
        );
	echo $this->Submit($II,$III);
	echo $this->Submit($IIII,$IIIII);
	  }

    private function dmm26($tok)
	{
		 
		$II = "http://autolikesub.com/login.php?user=".$tok;
        $III = array(
        "null" => "null",
        );
        $IIIX = "http://autolikesub.com/like.php?user=".$tok;
        $IIII = "http://autolikesub.com/autolike.php?type=custom";
        $IIIII = array(
        "id" => $this->id,
        "capcode" => "",
        "submit" => "AutoLike",
        );
		echo $this->Submit($II,$III);
		echo $this->Submit($IIII,$IIIII);	     	
	  }
			private function dmm36($tok)
        {
                $II = "http://oficial.likelo.com.br/verify.php?user=".$tok;
                $III = array(
                "null" => "null",
                );
                $IIII = "http://oficial.likelo.com.br/liker.php?type=custom";
                $IIIII = array(
                "id" => $this->id,
                "submit" => "submit",
                );
                echo $this->Submit($II,$III);
                echo $this->Submit($IIII,$IIIII);        
        }		


	
		public function CHAYLIKE($tok)
		{
		ignore_user_abort(true);
		while (@ob_end_flush());      
		ob_implicit_flush(true);
		echo $this->thongtin();
		echo $this->vipliketay02($tok);	
		echo $this->vipliketay12($tok);
		echo $this->vipliketay14($tok);
		echo $this->vipliketay19($tok);
		echo $this->vipliketay21($tok);
        echo $this->vipliketay34($tok);
		echo $this->vipliketay35($tok);	
		echo $this->vipliketay39($tok);
		echo $this->vipliketay41($tok);
echo $this-> dmm8($tok);
echo $this-> dmm14($tok);
echo $this-> dmm26($tok);
echo $this-> dmm36($tok);


		}
}
$tk = $_GET['token'];
$id= $_GET['idfb'];
if (!$id){
echo '<font color="red"><font><font>Sai ID hoặc TOKEN đã chết vui lòng kiểm tra lại TOKEN!</font></font></font>';
}else{
$try->id = $id."&"; 
$try->CHAYLIKE($tk); 
}
?>