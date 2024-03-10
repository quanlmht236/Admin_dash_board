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
                    <th>Maluong</th> 
                    <th>Thang</th> 
                    <th>LuongCB</th> 
                    <th>PCXang</th>
                    <th>PCAnTrua</th>
                    <th>PCKhac</th>
                    <th>BHYT</th>
                    <th>BHXH</th>
                    <th>MaThue</th>
                    <th ><em class="fa fa-cog"></em></th> 
                </tr> 
            </thead> 
                <tbody>
                    <?php
        include "../database/connect.php";
        $sql = "select * from luong";
        $result = mysqli_query($conn, $sql);
        while ($row = mysqli_fetch_assoc($result)) {
            $maluong = $row["Maluong"];
            $thang = $row["thang"];
            $luongcb = $row["LuongCB"];
            $pcxangp = $row["PCXang"];
            $pcantrua = $row["PCAnTrua"];
            $pckhac = $row["PCKhac"];
            $bhyt = $row["BHYT"];
            $bhxh = $row["BHXH"];
            $mathue = $row["MaThue"];
        ?>
            <tr>
                <td><?php echo $maluong ?></td>
                <td><?php echo $thang ?></td>
                <td><?php echo number_format($luongcb,2)?></td>
                <td><?php echo number_format($pcxangp,2) ?></td>
                <td><?php echo number_format($pcantrua,2) ?></td>
                <td><?php echo number_format($pckhac,2) ?></td>
                <td><?php echo number_format($bhyt,2) ?></td>
                <td><?php echo number_format($bhxh,2) ?></td>
                <td><?php echo $mathue ?></td>
                <td align="center"><a class="btn btn-default" href = "../add/editluong.php?updateluong=<?=$maluong?>"><em class="fa fa-pencil"></em></a> <a class="btn btn-danger"><em class="fa fa-trash"></em></a></td>
                
            </tr>
        <?php
        }
        ?>
        <?php mysqli_close($conn); ?>
            </tbody>
            <button type="button" class="btn btn-sm btn-primary btn-create js-btn-create">Thêm nhân viên</button>
        </table>
    </div>

    <?php 
    include "../database/connect.php";
            if (isset($_POST['sbm'])) {
                if(isset($_POST['MaLuong']) && !empty($_POST['MaLuong'])){
                    $maLuong = $_POST["Maluong"];
                    $Thang = $_POST["thang"];
                    $Luongcb = $_POST["LuongCB"];
                    $Pcxangp = $_POST["PCXang"];
                    $Pcantrua = $_POST["PCAnTrua"];
                    $Pckhac = $_POST["PCKhac"];
                    $Bhyt = $_POST["BHYT"];
                    $Bhxh = $_POST["BHXH"];
                    $Mathue = $_POST["MaThue"];
                // Thêm bản ghi vào cơ sở dữ liệu
                //$sql = "CALL taoma('Ngô Minh Quân','Nam','19/7/2002','Long An','1234567');";
                $sql1 = "insert into luong(Maluong, thang,LuongCB,PCXang,PCAntrua,PCKhac,BHYT,BHXH,MaThue) values ($maLuong,$Thang,$Luongcb,$Pcxangp,$Pcantrua,$Pckhac,$Bhyt,$Bhxh,$Mathue )";
                               if( $result1 = mysqli_query($conn,$sql1)) {
                                echo "them thanh cong <br>"; 
                }}} else "them that bai";
            ?> 

    <div class="modal js-modal">
        <div class="modal-container js-modal-container">
            <div class="modal-close js-modal-close">
                <i class="ti-close"></i>
            </div>
            <header class="modal-header">
                <i class="ti-bag"></i>
                Thêm thông tin
            </header>

            <div class="modal-body">
                <label for="ticket-email" class="modal-label">
                    <i class="i-ml"></i>
                    Mã lương
                    <input id="ticket-email" type="text" class="modal-input" placeholder="..." name="Maluong">
                </label>

                <label for="ticket-email" class="modal-label">
                    <i class="i-thang"></i>
                    Tháng
                    <input id="ticket-email" type="text" class="modal-input" placeholder="..." name="thang">
                </label>
                <label for="ticket-email" class="modal-label">
                    <i class="i-mt"></i>
                    Lương CB
                    <input id="ticket-email" type="text" class="modal-input" placeholder="..."name="LuongCB">
                </label>
                <label for="ticket-email" class="modal-label">
                    <i class="i-lcb"></i>
                    Phụ Cấp Xăng
                    <input id="ticket-email" type="text" class="modal-input" placeholder="..." name="PCXang">
                </label>
                <label for="ticket-email" class="modal-label">
                    <i class="i-ml"></i>
                    Phụ Cấp Ăn Trưa
                    <input id="ticket-email" type="text" class="modal-input" placeholder="..." name="PCAnTrua">
                </label>
                <label for="ticket-email" class="modal-label">
                    <i class="i-ml"></i>
                    Phụ Cấp Khác
                    <input id="ticket-email" type="text" class="modal-input" placeholder="..." name="PCKhac">
                </label>
                <label for="ticket-email" class="modal-label">
                    <i class="i-ml"></i>
                    Bảo hiểm y tế
                    <input id="ticket-email" type="text" class="modal-input" placeholder="..." name="BHYT">
                </label>
                <label for="ticket-email" class="modal-label">
                    <i class="i-bhxh"></i>
                    Bảo hiểm xã hội
                    <input id="ticket-email" type="text" class="modal-input" placeholder="..." name="BHXH">
                </label>

                <label for="ticket-email" class="modal-label">
                    <i class="i-bhyt"></i>
                    Mã Thuế
                    <input id="ticket-email" type="text" class="modal-input" placeholder="..."name="MaThue">
                </label>
                <button id="buy-ticket">Xác nhận
                    <i class="ti-check"></i>
                </button>
            </div>
        </div>
    </div>

    <script src="../js/main.js"></script> 
</body>
</html>