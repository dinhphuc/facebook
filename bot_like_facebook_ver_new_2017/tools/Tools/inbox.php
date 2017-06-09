     <div class="col-md-5">
	  <div class="box box-info">
	       <div class="box-title box-header with-border">
		    <h4>
                    <i class="fa fa-info-circle fa-fw"></i> 
                    Hộp Thư
                    </h4>
                    <div class="box-tools pull-right">
                         <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                         <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                    </div>
	       </div>
	       <div class="box-body">
                      <button type="button" class="btn btn-info" id="megg" onclick="postMess();">Load Tin Nhắn!</button><hr>

<?
$getID = json_decode(auto('https://graph.facebook.com/me?access_token='.$_SESSION['matoken'].'&fields=id'),true);
$getpage = json_decode(auto('https://graph.facebook.com/'.$getID[id].'/conversations?access_token='.$_SESSION['matoken']),true);
for($i=0;$i<count($getpage[data]);$i++){
?>
<label>
<input type="radio" name="inboxpro" id="fid" value="<? echo $getpage['data'][$i]['id'];?>">  <?=$getpage['data'][$i]['participants']['data'][0]['name']?> 
<font color=red>[<?=$getpage['data'][$i]['message_count']?>]</font>
</label><br>
<?
}
?>
	       </div>
	  </div>				
     </div><!--.col-md-6-->
     <div class="col-md-7">
	  <div class="box box-info">
	       <div class="box-title box-header with-border">
		    <h4>
                    <i class="fa fa-info-circle fa-fw"></i> 
                    Xem & Gửi Tin Nhắn
                    </h4>
                    <div class="box-tools pull-right">
                         <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                         <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                    </div>
	       </div>
	       <div class="box-body">
					<div class="input-group" id="process" style="padding: 15px;display:none">
					     <input type="text" name="traloi" id="traloi" placeholder="Nhập Tin Nhắn vào đây" class="form-control" >
					     <input type="hidden" id="type" value="1" >
                                             <span class="input-group-btn"> 
					           <button id="null" type="button" onclick="post_Traloi();" class="btn btn-primary">
                                                   Trả Lời
                                                   </button>
                                             </span>
					</div><hr />
                    <div id="result"></div>
	       </div>
	  </div>				
     </div><!--.col-md-6-->