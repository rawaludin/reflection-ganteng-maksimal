<?php
include_once "Twitter.php";
$twitter = new Twitter("agus", "Menikahi orang yang dicintai adalah kemungkinan. Tapi, mencintai orang yang dinikahi adalah kewajiban. Catet.");
echo "Akun twitter : " . $twitter->username() . "\n";
echo "Tweet : " . $twitter->tweet() . "\n";
