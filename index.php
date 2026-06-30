<?php
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>SiTangkas - Login</title>
        <link rel="stylesheet" href="assets/bower_components/bootstrap/dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/bower_components/font-awesome/css/font-awesome.min.css">
        <link rel="stylesheet" href="assets/bower_components/Ionicons/css/ionicons.min.css">
        <style>
        body{margin:0;font-family:Arial,sans-serif;background:#eef2f7}
        .login-container{max-width:980px;margin:40px auto;background:#fff;border-radius:20px;overflow:hidden;display:flex;box-shadow:0 10px 30px rgba(0,0,0,.15)}
        .login-left{width:50%;padding:40px}
        .login-right{width:50%}
        .login-right img{width:100%;height:100%;object-fit:cover}
        .logo{text-align:center;margin-bottom:20px}
        .logo i{font-size:70px;color:#0b4f8a}
        .logo h2{margin:10px 0 5px}
        .logo p{color:#666}
        .input-group2{margin:15px 0;position:relative}
        .input-group2 input{width:100%;padding:12px;border:none;border-bottom:1px solid #ccc}
        .eye{position:absolute;right:10px;top:40px;cursor:pointer}
        .btn-login{width:100%;padding:12px;border:none;border-radius:30px;background:#163d6b;color:#fff;font-weight:bold}
        .alert{margin-top:10px}
        @media(max-width:768px){.login-container{flex-direction:column;margin:10px}.login-left,.login-right{width:100%}.login-right{display:none}}
        </style>
        </head>
        <body>
            <div class="login-container">
                <div class="login-left">
                    <div class="logo">
                        <i class="fa fa-university"></i>
                        <h2>SiTangkas</h2>
                        <p>Sistem Anggaran dan Kas</p>
                    </div>
                    <?php
                    if(isset($_GET['alert'])){
                        if($_GET['alert']=="gagal") echo "<div class='alert alert-danger'>LOGIN GAGAL! USERNAME DAN PASSWORD SALAH!</div>";
                        else if($_GET['alert']=="logout") echo "<div class='alert alert-success'>ANDA TELAH BERHASIL LOGOUT</div>";
                        else if($_GET['alert']=="belum_login") echo "<div class='alert alert-warning'>ANDA HARUS LOGIN UNTUK MENGAKSES DASHBOARD</div>";
                        }
                        ?>
                        <form action="periksa_login.php" method="POST">
                            <div class="input-group2">
                                <label>Username</label>
                                <input type="text" name="username" required autocomplete="off">
                            </div>
                            <div class="input-group2">
                                <label>Password</label>
                                <input type="password" id="password" name="password" required autocomplete="off">
                                <span class="eye" onclick="togglePassword()"><i class="fa fa-eye"></i></span>
                            </div>
                            <button class="btn-login" type="submit">Log In</button>
                        </form>
                    </div>
                    <div class="login-right">
                        <img src="banner.jpg" onerror="this.src='https://via.placeholder.com/500x700?text=SiTangkas';">
                    </div>
                </div>
                <script>
                function togglePassword(){
                    var x=document.getElementById('password');
                    x.type=x.type==='password'?'text':'password';
                    }
                    </script>
                    </body>
                    </html>