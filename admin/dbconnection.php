<?php
$con=mysqli_connect("cmr.mysql.database.azure.com", "cloud", "Azure1234567890", "cmr");
if(mysqli_connect_errno()){
echo "Connection Fail".mysqli_connect_error();
}

?>
