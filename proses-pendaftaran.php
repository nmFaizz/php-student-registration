<?php
    include("config.php");

    if(isset($_POST['daftar'])){  
        $foto = $_FILES['image']['name']; 
        $nama = $_POST['nama'];
        $alamat = $_POST['alamat'];
        $jk = $_POST['jenis_kelamin'];
        $agama = $_POST['agama'];
        $sekolah = $_POST['sekolah_asal'];

        $date_photo = date('dmYHis').$foto;
        $tmp = $_FILES['image']['tmp_name'];

        $path = "assets/images/".$date_photo;

        if (!move_uploaded_file($tmp, $path)) {
            die("gagal upload foto");
        } 

        $sql = "INSERT INTO calon_siswa (nama, alamat, jenis_kelamin, agama, sekolah_asal, foto) VALUE ('$nama', '$alamat', '$jk', '$agama', '$sekolah', '$date_photo')";
        $query = mysqli_query($db, $sql);

        if( $query ) {
            header('Location: index.php?status=sukses');
        } else {
            header('Location: index.php?status=gagal');
        }
    } else {
        die("Akses dilarang...");
    }
?>