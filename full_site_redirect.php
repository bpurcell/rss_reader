<?php
setcookie("mobile","m", time()+3600, "/",".crossfitprovidence.com");
header("Location: ".$_GET['url'].")");
?>