<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quản lý nhân sự</title>
    <link rel="stylesheet" href="./css/main.css">
    <link rel="stylesheet" href="./fonts/fontawesome-free-6.1.1-web/css/all.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
</head>
<body>
    <?php
        session_start();
        include "./database/connect.php";
        $currentUser = $_SESSION['current_user'];
        ?>
    <id id ="main">
        <div id ="header">
            <div class="header__nav">
                <ul class="nav_logo">
                    <li><a href="./index.php">Admin LOGO</a></li>
                </ul>
                <ul class="nav_icon">
                    <li><i class="fa-solid fa-bell opa">
                        <a>Thông báo</a></i>
                        <ul>
                        </ul>
                    </li>
                    <li><i class="fa-solid fa-arrow-right-from-bracket">
                        <a href="./logout.php">Đăng xuất</a></i>
                    </li>
                </ul>
            </div>    
        </div>

        <div class="slider">
            <div class="slider__nav">
                <div class="silder__nav_bar sett">
                    <ul class="nav_bar" id="menu">
                        <li><h3 href=""><img src="./img/blank-profile-picture-973460__340.webp" alt=""><?php printf($currentUser['Usename'])?></h3></li>
                        <li><a class="men active" href="./dbTable/NV.php" name="mx" target="main">Nhân viên</a></li>
                        <li><a class="men " href="./dbTable/PB.php" name="mx" target="main">Phòng ban</a></li>
                        <li><a class="men " href="./dbTable/Luong.php" name="mx" target="main">Lương</a></li>
                        <li><a class="men " href="./dbTable/BCC.php" name="mx" target="main">Chấm công</a></li>
                        <li><a class="men " href="./dbTable/CV.php" name="mx" target="main">Chức vụ</a></li>
                        <li><a class="men " href="./dbTable/TV.php" name="mx" target="main">Thử việc</a></li>

                            
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- Table -->

        <div class="container"> 
            <div class="panel panel-default"> 
                 <div class="panel-heading"> 
                        <div class="row"> 
                            <div class="col col-xs-6"> 
                                <h3 class="panel-title">Danh sách quản trị</h3> 
                            </div> 
                            <div div class="col col-xs-6 text-right"> 
                        <form action="../dbTable/search.php" method="get" target="main">
                        <select class ="seltab" name="seltab" placeholder="search">
                            <option value="nhanvien">Nhân viên</option>
                            <option value="phongban">Phòng ban</option>
                            <option value="luong">Lương</option>
                            <option value="bangchamcong">Chấm công</option>
                            <option value="chucvu">Chức vụ</option>
                        </select>
                            <input class="ip-search" type="text" name="search" placeholder="Tìm kiếm"></input>
                            <input class="btn-search" type="submit" name="ok" value="Tìm kiếm"></input>
                        </form>

                        </div> 
                    </div> 
                    <div class="panel-body"> 
                        <table class="table table-striped table-bordered table-list"> 
                            <iframe name="main" src="./dbTable/NV1.php" width=100% height=100%></iframe>
                        </table> 
                </div> 
            </div> 
        </div>
        
        
        <div class="footer">

        </div>

    <script src="./js/main.js"></script>
    <script>
        var header = document.getElementById("menu");
        var btns = header.getElementsByClassName("men");
        for (var i = 0; i < btns.length; i++) {
        btns[i].addEventListener("click", function() {
        var current = document.getElementsByClassName("active");
        current[0].className = current[0].className.replace(" active", "");
        this.className += " active";
        });
        }
    </script>

</body>
</html>