<?php
$hoi = $_GET['hoi'];
$dap = json_decode(file_get_contents("http://simsimi.com/getRealtimeReq?uuid=m0njJQ6vh8ElgCfIsaZ6Zp8yYoZ0O1szQWaIvPOlpXg&lc=vi&ft=0&reqText=$hoi"), true);
echo $dap['respSentence'];
?>