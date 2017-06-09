<?php
session_start();
session_destroy();
header('location: index.php');
?>
 <script language="javascript">
window.location.href = "index.php";
      </script>