<?php
    include "koneksi.php";
    $id_user = $_POST['id_user']; //menginputkan data pada variabel id_user
    $pass=md5($_POST['password']); //menginputkan data pada variabel password
    $sql="SELECT * FROM users WHERE id_user='$id_user' AND password='$pass'"; //query dalam table users
    $login=mysqli_query($con,$sql); //menjalankan query dari sql
    $ketemu=mysqli_num_rows($login);
    $r= mysqli_fetch_array($login);
    if ($ketemu > 0){ ///merupakan fungsi yang memiliki value balik pad varible login
        session_start(); //memulai session
        $_SESSION['iduser'] = $r['id_user'];
        $_SESSION['passuser'] = $r['password'];
        echo"USER BERHASIL LOGIN<br>";//menampilkan teks login apabila user sudah berhasil login 
        echo "id_user =",$_SESSION['iduser'],"<br>";
        echo "password=",$_SESSION['passuser'],"<br>";
        echo "<a href=logout.php><b>LOGOUT</b></a></center>";
    }
    else{
        echo "<center>Login gagal! username & password tidak benar<br>";
        echo "<a href=form_login.php><b>ULANGILAGI</b></a></center>";
    }
    mysqli_close($con);//mengakhiri program 

?>