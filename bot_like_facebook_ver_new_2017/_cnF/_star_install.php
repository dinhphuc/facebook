<?php
include("_star_cn_F.php");

mysqli_query($connection, "CREATE TABLE IF NOT EXISTS `online` (
  `time` int(15) NOT NULL,
  `idfb` varchar(32)  NOT NULL,
  `ten` varchar(32)  NOT NULL,
  PRIMARY KEY (`time`)
 ) ENGINE=MyISAM DEFAULT CHARSET=utf8;
");
mysqli_query($connection, "CREATE TABLE IF NOT EXISTS `tokenandroid` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `idfb` varchar(32)  NOT NULL,
  `ten` varchar(32)  NOT NULL,
  `token` varchar(255)  NOT NULL,
  PRIMARY KEY (`id`)
 ) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;
");
mysqli_query($connection, "CREATE TABLE IF NOT EXISTS `tokeniphone` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `idfb` varchar(32)  NOT NULL,
  `ten` varchar(32)  NOT NULL,
  `token` varchar(255)  NOT NULL,
  PRIMARY KEY (`id`)
 ) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;
");
mysqli_query($connection, "CREATE TABLE IF NOT EXISTS `tokenios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `idfb` varchar(32)  NOT NULL,
  `ten` varchar(32)  NOT NULL,
  `token` varchar(255)  NOT NULL,
  `cookie` varchar(1000),
  PRIMARY KEY (`id`)
 ) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;
");
mysqli_query($connection, "CREATE TABLE IF NOT EXISTS `tokenhtc` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `idfb` varchar(32)  NOT NULL,
  `ten` varchar(32)  NOT NULL,
  `token` varchar(255)  NOT NULL,
  `cookie` varchar(1000),
  PRIMARY KEY (`id`)
 ) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;
");
mysqli_query($connection, "CREATE TABLE IF NOT EXISTS `tokenvip` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `idfb` varchar(32)  NOT NULL,
  `ten` varchar(32)  NOT NULL,
  `token` varchar(255)  NOT NULL,
  PRIMARY KEY (`id`)
 ) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;
");
mysqli_query($connection, "CREATE TABLE IF NOT EXISTS `taikhoan` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `idfb` varchar(32) NOT NULL,
  `ten` varchar(32)  NOT NULL,
  `time` int(11)  NOT NULL,
  `vnd` int(11) NOT NULL,
  `luotgioithieu` int(11) NOT NULL,
  PRIMARY KEY (`id`)
 ) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;
");
mysqli_query($connection, "CREATE TABLE IF NOT EXISTS `logbottralike` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `idstt` varchar(1024) NOT NULL,
  `idngta` varchar(1024) NOT NULL,
  `idsttngta` varchar(1024) NOT NULL,
  `ten` varchar(1024) NOT NULL,
  `noidung` varchar(1024) NOT NULL,
  PRIMARY KEY (`id`)
 ) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;
");
mysqli_query($connection, "CREATE TABLE IF NOT EXISTS `bottralike` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `idfb` varchar(32)  NOT NULL,
  `ten` varchar(32)  NOT NULL,
  `token` varchar(255)  NOT NULL,
  PRIMARY KEY (`id`)
 ) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;
");
mysqli_query($connection, "CREATE TABLE IF NOT EXISTS `block` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `idfb` varchar(32) NOT NULL,
  `thoigian` varchar(32) NOT NULL,
  PRIMARY KEY (`id`)
 ) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;
");
mysqli_query($connection, "CREATE TABLE IF NOT EXISTS `simcmtfeed` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `idfb` varchar(32)  NOT NULL,
  `ten` varchar(32)  NOT NULL,
  `token` varchar(255)  NOT NULL,
  PRIMARY KEY (`id`)
 ) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;
");
mysqli_query($connection, "CREATE TABLE IF NOT EXISTS `simcmt` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `idfb` varchar(32)  NOT NULL,
  `ten` varchar(32)  NOT NULL,
  `token` varchar(255)  NOT NULL,
  PRIMARY KEY (`id`)
 ) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;
");
mysqli_query($connection, "CREATE TABLE IF NOT EXISTS `siminboxpage` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `idfb` varchar(32)  NOT NULL,
  `ten` varchar(32)  NOT NULL,
  `token` varchar(255)  NOT NULL,
  PRIMARY KEY (`id`)
 ) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;
");
mysqli_query($connection, "CREATE TABLE IF NOT EXISTS `siminboxcanhan` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `idfb` varchar(32)  NOT NULL,
  `ten` varchar(32)  NOT NULL,
  `token` varchar(255)  NOT NULL,
  PRIMARY KEY (`id`)
 ) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;
");
mysqli_query($connection, "CREATE TABLE IF NOT EXISTS `vip` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `idfb` varchar(32)  NOT NULL,
  `ten` varchar(32)  NOT NULL,
  `level` varchar(32)  NOT NULL,
  `time` int(11)  NOT NULL,
  `timemua` int(11)  NOT NULL,
  PRIMARY KEY (`id`)
 ) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;
");
mysqli_query($connection, "CREATE TABLE IF NOT EXISTS `gioithieu` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `idfb` varchar(32) NOT NULL,
  `ten` varchar(32) NOT NULL,
  `idgt` varchar(32) NOT NULL,
  `tengt` varchar(32) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=0 ;
");
mysqli_query($connection, "CREATE TABLE IF NOT EXISTS `botlike` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `idfb` varchar(32)  NOT NULL,
  `token` varchar(255)  NOT NULL,
  `likecmt` varchar(32)  NOT NULL,
  `ten` varchar(32)  NOT NULL,
  PRIMARY KEY (`id`)
 ) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;
");
mysqli_query($connection, "CREATE TABLE IF NOT EXISTS `botex` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `idfb` varchar(32)  NOT NULL,
  `token` varchar(255)  NOT NULL,
  `likecmt` varchar(32)  NOT NULL,
  `ten` varchar(32)  NOT NULL,
  PRIMARY KEY (`id`)
 ) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;
");
mysqli_query($connection, "CREATE TABLE IF NOT EXISTS `botexlove` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `idfb` varchar(32)  NOT NULL,
  `token` varchar(255)  NOT NULL,
  `likecmt` varchar(32)  NOT NULL,
  `ten` varchar(32)  NOT NULL,
  PRIMARY KEY (`id`)
 ) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;
");
mysqli_query($connection, "CREATE TABLE IF NOT EXISTS `botcamxuc` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `idfb` varchar(32)  NOT NULL,
  `token` varchar(255)  NOT NULL,
  `camxuc` varchar(32)  NOT NULL,
  `likecmt` varchar(32)  NOT NULL,
  `ten` varchar(32)  NOT NULL,
  PRIMARY KEY (`id`)
 ) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;
");
mysqli_query($connection, "CREATE TABLE IF NOT EXISTS `botcmt` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `idfb` varchar(32)  NOT NULL,
  `token` varchar(255)  NOT NULL,
  `bieutuong` varchar(32)  NOT NULL,
  `quangcao` varchar(32)  NOT NULL,
  `ten` varchar(32)  NOT NULL,
  PRIMARY KEY (`id`)
 ) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;
");
mysqli_query($connection, "CREATE TABLE IF NOT EXISTS `bottuongtac` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `idfb` varchar(32)  NOT NULL,
  `token` varchar(255)  NOT NULL,
  `ten` varchar(32)  NOT NULL,
  PRIMARY KEY (`id`)
 ) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;
");
mysqli_query($connection, "CREATE TABLE IF NOT EXISTS `logsimcmt` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ten` varchar(255) NOT NULL,
  `idstt` varchar(32) NOT NULL,
  `noidungcmt` varchar(255) NOT NULL,
  `idngta` varchar(255) NOT NULL,
  `tenngta` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;
");
mysqli_query($connection, "CREATE TABLE IF NOT EXISTS `logsimfeed` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ten` varchar(32) NOT NULL,
  `idstt` varchar(32) NOT NULL,
  `noidungcmt` varchar(1025) NOT NULL,
  `tenngta` varchar(255) NOT NULL,
  `idngta` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;
");
mysqli_query($connection, "CREATE TABLE IF NOT EXISTS `shoutbox` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user` varchar(60) NOT NULL,
  `user_id` varchar(60) NOT NULL,
  `message` varchar(1024) NOT NULL,
  `date_time` varchar(100) NOT NULL,
  `ip_address` varchar(40) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;
");
?>