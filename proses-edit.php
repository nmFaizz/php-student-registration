<?php

include("config.php");

if (isset($_POST['simpan'])) {
    $id = $_POST['id'];
    $foto = $_FILES['image']['name'];
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $jk = $_POST['jenis_kelamin'];
    $agama = $_POST['agama'];
    $sekolah = $_POST['sekolah_asal'];

    $fotoQuery = '';
    $date_photo = '';
    if (!empty($foto)) {
        $sqlCheck = "SELECT foto FROM calon_siswa WHERE id=$id";
        $resultCheck = mysqli_query($db, $sqlCheck);
        $row = mysqli_fetch_assoc($resultCheck);
        $currentPhoto = $row['foto'];  

        if ($currentPhoto && file_exists("assets/images/" . $currentPhoto)) {
            unlink("assets/images/" . $currentPhoto); 
        }

        $date_photo = date('dmYHis') . $foto;  
        $tmp = $_FILES['image']['tmp_name'];    
        $path = "assets/images/" . $date_photo; 

        if (!move_uploaded_file($tmp, $path)) {
            die("Gagal upload foto");
        }

        $fotoQuery = ", foto='$date_photo'";
    }

    $sql = "UPDATE calon_siswa SET nama='$nama', alamat='$alamat', jenis_kelamin='$jk', agama='$agama', sekolah_asal='$sekolah' $fotoQuery WHERE id=$id";
    
    $query = mysqli_query($db, $sql);

    if ($query) {
        header('Location: list-siswa.php');
        exit; // Ensure the script stops after redirection
    } else {
        die("Gagal menyimpan perubahan...");
    }
} else {
    die("Akses dilarang...");
}

?>
