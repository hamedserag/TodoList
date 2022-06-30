<?php
define('DB_SERVER','localhost');
define('DB_USER','root');
define('DB_PASS' ,'');
define('DB_NAME','blockchainapp');
$con = mysqli_connect(DB_SERVER,DB_USER,DB_PASS,DB_NAME);
// Check connection
if (mysqli_connect_errno())
{
 echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
?>



<?php
//000webhost config
// define('DB_SERVER','localhost');
// define('DB_USER','id17142215_root');
// define('DB_PASS' ,'B&P{Gr^<7Z!57ZX]');
// define('DB_NAME','id17142215_build');
// $con = mysqli_connect(DB_SERVER,DB_USER,DB_PASS,DB_NAME);
// // Check connection
// if (mysqli_connect_errno())
// {
//  echo "Failed to connect to MySQL: " . mysqli_connect_error();
// }
?>