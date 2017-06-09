
<style type="text/css">
.loading {
	filter: alpha(opacity = 30); -moz-border-radius: 4px; -webkit-border-radius: 4px; border-radius: 4px; -moz-background-clip: padding; -webkit-background-clip: padding-box; background-clip: padding-box; font-family: Tahoma; font-size: 12px; width:200px; left:50%; top:50%; margin-left:-100px; margin-top:-33px; color:#FFF; text-align:center; padding:10px; position: fixed; 
}

</style>




<script type="text/javascript" src="http://ajax.microsoft.com/ajax/jquery.validate/1.7/jquery.validate.min.js"></script>

<script type="text/javascript">window.onload = detectarCarga;

function detectarCarga() {

document.getElementById("Zenload").style.display="none";

}</script>

<div class="loading" id="Zenload">
<i class="fa fa-spinner fa-3x fa-spin"></i><br>
<div class="progress progress-striped active">
  <div class="progress-bar progress-bar-success"  role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width: 45%">
Loading....
  </div>
</div>
</div>

<script language="JavaScript">

function toggleDisplay(id) {

document.getElementById(id).style.visibility = "visible";

if(document.getElementById(id).style.display == "none" ) {

document.getElementById(id).style.display = "";

} else {

document.getElementById(id).style.display = "none";

}

}

</script>