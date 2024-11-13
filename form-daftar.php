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

    main {
        max-width: 748px;
        margin: 5rem auto;
        padding: 0 2rem;
    }

    form {
        display: flex;
        flex-direction: column;
        gap: 2rem;
        margin-top: 2rem;
    }

    input[type=text], select {
        padding: 0.5rem;
        border-radius: 5px;
        border: 1px solid #ddd;
    }

    input[type=submit] {
        border: none;
        padding: 0.5rem 1rem;
        cursor: pointer;
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
        <h2>Registrasi Murid</h2>
        <form action="proses-pendaftaran.php" method="POST">
            <input id="nama" type="text" name="nama" placeholder="Nama Lengkap" required />
            <input id="alamat" type="text" name="alamat" placeholder="Alamat" required />
            
            <div>
                <label for="agama">Agama:</label><br/>
                <select name="agama">
                    <option value="Islam">Islam</option>
                    <option value="Kristen">Kristen</option>
                    <option value="Hindu">Hindu</option>
                    <option value="Budha">Budha</option>
                </select>
            </div>
    
            <div>
                <label for="jenis_kelamin">Jenis Kelamin:</label><br />
                <input type="radio" name="jenis_kelamin" value="L" required /> Laki-laki <br/>
                <input type="radio" name="jenis_kelamin" value="P" required /> Perempuan
            </div>
    
            <input id="sekolah_asal" name="sekolah_asal" type="text" placeholder="Sekolah Asal"> <br />
    
            <input type="submit" value="Daftar" name="daftar" />
        </form>
    </main>
</body>
</html>