<div class="container">
<div class="panel panel-default">
 <div class="panel-heading"><i class="glyphicon glyphicon-user"></i> <b> Những Người dùng mới</b>
                            </div>
                            <div class="panel-body">
<div class="row">
<?php 
  $tb= mysql_query("SELECT * FROM Likers ORDER BY id DESC LIMIT 5");
        while($row = mysql_fetch_assoc($tb))
        {

?>
   
  <div class="col-xs-6 col-md-2">
    <a aria-expanded="true" href="https://www.facebook.com/profile.php?id=<?php echo $row['user_id']; ?>" target="_blank" class="thumbnail">
      <img class="img-circle" src="https://graph.facebook.com/<?php echo $row['user_id']; ?>/picture?width=70&height=70" alt="<?php echo $row['name'];?>" title="<?php echo $row['name'];?>">
    </a>
</div>
 <?php }?> 

</div>
                            </div>
                            <div class="panel-footer">
<?php
$babi = mysql_query ("SELECT name, COUNT(name) FROM Likers");
$rober = mysql_fetch_array($babi);
$rec=$rober['COUNT(name)']; 
?>
<center>Hiện tại đã có <span class="label label-default"><?php echo $rec; ?></span> thành viên sử dụng hệ thống của chúng tôi!</center>
                            </div>
                        </div>

</div>
</div>


<div class="footer-copyright">
        <div class="container">
        <center>© 2017 By Kunkey<center>
        </div>
      </div>
	  