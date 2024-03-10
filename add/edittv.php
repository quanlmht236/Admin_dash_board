<?php    
    include '../database/connect.php';
    $maSo = $_GET["update"];
if (isset($_GET["update"])) {
    $querry ="UPDATE `ucv` set`trangthai`='0' WHERE `Maso`='$maSo';
    ";
    $result1 = mysqli_query($conn,$querry);
    if($result1){
        echo "<script type=\"text/javascript\">alert('Update thành công $maSo')
    window.location.replace('../dbtable/tv.php');</script>";
                }
                else
                { echo "<script type=\"text/javascript\">alert('Update không thành công $maSo')
                    window.location.replace('../dbtable/tv.php');</script>";
                }
            }
   ?> 
           