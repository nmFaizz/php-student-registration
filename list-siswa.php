<?php include("config.php"); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pendaftaran Siswa Baru | SMK Astral Express</title>
</head>
<style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: 'Poppins', sans-serif;
    }

    header {
        background-color: #003A63;
        display: flex;
        align-items: center;
        gap: 3rem;
        color: #B9A27A;
        padding: 0.5rem 2rem;
        z-index: 1000;
        position: sticky;
        top: 0;
    }

    header nav ul {
        display: flex;
        gap: 2rem;
        list-style-type: none;
    }

    header nav ul a {
        color: inherit;
        text-decoration: none;
    }

    @media screen and (max-width: 768px) {
        header {
            padding: 1rem 2rem;
        }
        
        header figure {
            display: none;
        }        

        header nav ul li a {
            font-size: 14px;
        }

        header nav ul {
            gap: 1rem;
        }
    }

    #daftar-murid {
        max-width: 1200px;
        margin: 0 auto;
        padding: 5rem 3rem;
    }
    
    table {
        border-collapse: collapse;
        border-spacing: 0;
        width: max-content;
        border: 1px solid #ddd;
    }

    th {
        background-color: whitesmoke;
        padding: 0.5rem 1rem;
    }

    tr:hover {
        background-color: #ddd;
    }

    td {
        padding: 0.5rem 1rem;
    }

    button {
        background-color: #B9A27A;
        color: white;
        border-radius: 6px;
        padding: 0.5rem 1rem;
        border: none;
    }

    button:hover {
        opacity: 0.8;
    }
</style>
<body>
    <header>
        <figure>
            <img src="./assets/smk-astral-logo.png" alt="logo" width="120" />
        </figure>

        <nav>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="form-daftar.php">Pendaftaran</a></li>
                <li><a href="list-siswa.php">Daftar Murid</a></li>
            </ul>
        </nav>

    </header>
    <main>
        <section id="daftar-murid">
                <a href="form-daftar.php">
                    <button>[+] Tambah Murid</button>
                </a>
                
                <div style="overflow-x: scroll; margin-top: 3rem;">
                    <table>
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Foto</th>
                                <th>Nama</th>
                                <th>Alamat</th>
                                <th>Jenis Kelamin</th>
                                <th>Agama</th>
                                <th>Sekolah Asal</th>
                                <th>Tindakan</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                                $sql = "SELECT * FROM calon_siswa";
                                $query = mysqli_query($db, $sql);
            
                                while($siswa = mysqli_fetch_array($query)) {
                                    echo "<tr>";
                                    
                                    echo "<td><img src='./assets/images/".$siswa['foto']."' width=100 height=100 /></td>";
                                    echo "<td>".$siswa['id']."</td>";
                                    echo "<td>".$siswa['nama']."</td>";
                                    echo "<td>".$siswa['alamat']."</td>";
                                    echo "<td>".$siswa['jenis_kelamin']."</td>";
                                    echo "<td>".$siswa['agama']."</td>";
                                    echo "<td>".$siswa['sekolah_asal']."</td>";
            
                                    echo "<td>";
                                    echo "<a href='form-edit.php?id=".$siswa['id']."'>Edit</a> | ";
                                    echo "<a href='hapus.php?id=".$siswa['id']."'>Hapus</a>";
                                    echo "</td>";
            
                                    echo "</tr>";
                                }
                            ?>
                        </tbody>
                    </table>
            
                    <p style="margin-top: 2rem;">Total : <?php echo mysqli_num_rows($query) ?></p>
            </div>
        </section>
    </main>
</body>
</html>