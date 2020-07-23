<?php
define("HOST","localhost");
define("USER","root");
define("PASS","");
define("DB","webodev");
$conn = mysqli_connect(HOST,USER,PASS,DB) or die("Bilgilerde hata var");