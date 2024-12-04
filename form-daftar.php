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
    }

    input[type="text"], 
    input[type="file"],
    textarea,
    select {
        padding: 0.5rem;
        border-radius: 5px;
        border: 1px solid #ddd;
        background-color: whitesmoke;
    }

    select {
        width: max-content;
    }
    
    label {
        margin-top: 1rem;
    }

    input[type="submit"] {
        border: none;
        padding: 0.5rem 1.3rem;
        cursor: pointer;
        background-color: #003A63;
        color: white;
        border-radius: 6px;
        width: max-content;
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
        <h3>Registrasi</h3>
        <form action="proses-pendaftaran.php" method="POST" enctype="multipart/form-data">
            <label for="file">Foto:</label>
            <img id="image-preview" src="" alt="Image Preview" width="200" height="200" hidden><br>
            <input type="file" id="image" name="image" accept="image/*">
            <label for="nama">Nama</label>
            <input id="nama" type="text" name="nama" placeholder="Nama Lengkap" required />
            <label for="alamat">Alamat:</label>
            <textarea id="alamat" type="text" name="alamat" placeholder="Alamat" required></textarea>
            
            <label for="agama">Agama:</label>
            <select name="agama">
                <option value="Islam">Islam</option>
                <option value="Kristen">Kristen</option>
                <option value="Hindu">Hindu</option>
                <option value="Budha">Budha</option>
            </select>
    
            <label for="jenis_kelamin">Jenis Kelamin:</label>
            <div>
                <input type="radio" name="jenis_kelamin" value="L" required /> Laki-laki <br/>
                <input type="radio" name="jenis_kelamin" value="P" required /> Perempuan
            </div>

            <label for="alamat">Sekolah Asal:</label>
            <input id="sekolah_asal" name="sekolah_asal" type="text" placeholder="Sekolah Asal" />
            <br/>
            <input type="submit" value="Daftar" name="daftar" />
        </form>
    </main>

    <script>
        const image = document.getElementById('image');
        const imagePreview = document.getElementById('image-preview');

        image.addEventListener('change', function() {
            const file = this.files[0];

            if (file) {
                const reader = new FileReader();

                reader.onload = function() {
                    imagePreview.src = reader.result;
                    imagePreview.hidden = false;
                }

                reader.readAsDataURL(file);
            }
        });
    </script>
</body>
</html>