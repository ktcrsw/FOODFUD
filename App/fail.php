<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>fail</title>
    <title>log in</title>
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="style.css">
    <style>
        .box {
            border-radius: 30px;
        }
    </style>
</head>
<body  style="background-color: blanchedalmond;">
    <div class="container d-flex vh-100 align-items-center justify-content-center">
        <div class="box bg-dark" style="height: 350px; width: 350px;">
            <center>
                <form id="Success">
                    <h1 class="my-5 text-danger">ไม่สำเร็จ</h1>
                    <h3 class="my-5 text-white"> กรุณาลองใหม่</h3>
                    <button class="btn btn-warning my-5 "><a href="../Login.php">กรุณาลองใหม่</a></button>
                    <?php
                    
                    
                    header('refresh:1.3s; url= ../Login.php');
                    
                    ?>
                </form>
            </center>
        </div>
    </div>
    
    
</body>
</html>