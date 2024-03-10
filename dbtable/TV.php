<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/main.css">
    <link rel="stylesheet" href="../fonts/fontawesome-free-6.1.1-web/css/all.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">     

</head>
<body>
    <div class="panel-tbody">
        <table class="table table-striped table-bordered table-list"> 
            <thead> 
                <tr> 
                    <th>Maso</th> 
                    <th>HovaTen</th> 
                    <th>GioiTinh</th> 
                    <th>Namsinh</th> 
                    <th>Que Quan</th>
                    <th>TDHV</th>
                    <th>chuthich</th>
                    <th><em class="fa fa-cog"></em></th> 
                </tr> 
                </thead> 
                <tbody>
                <?php
        include "../database/connect.php";

        
        $sql = "SELECT `Maso`,`HovaTen`, `GioiTinh`, `Namsinh`, `quequan`, `TDHV`, `chuthich` FROM `ucv` WHERE `trangthai`='1';
        ";
        $result = mysqli_query($conn, $sql);
        while ($row = mysqli_fetch_assoc($result)) {
            $maso = $row["Maso"];            
            $tennv = $row["HovaTen"];
            $gioitinh = $row["GioiTinh"];
            $namsinh = $row["Namsinh"];
            $Quequan = $row["quequan"];
            $Tdhv = $row["TDHV"];
            $ChuThich = $row["chuthich"];
        ?>
            <tr>
                <td><?php echo $maso ?></td>
                <td><?php echo $tennv ?></td>
                <td><?php echo $gioitinh ?></td>
                <td><?php echo $namsinh ?></td>
                <td><?php echo $Quequan ?></td>
                <td><?php echo $Tdhv ?></td>
                <td><?php echo $ChuThich ?></td>
                <td align="center"><a class="btn btn-primary"  href="../add/edittv.php?update=<?=$maso?>">Back</a></td>
            </tr>
        <?php
        }
        ?>
        <?php mysqli_close($conn); ?>
            </tbody>
        </table> 
   
    </div> 
    <?php 
    ?>
<!-- ------------------------------------------------------------------------------------------ -->
<!-- Button trigger modal -->
    <script src="../js/main.js"></script>

</body>
</html>