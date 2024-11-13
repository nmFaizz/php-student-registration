<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SMK Astral Express</title>
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
        background-color: rgba(0, 58, 99, 0.7);
        height: 90vh;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    main > img {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        object-fit: cover;
        object-position: center;
        z-index: 0;
    }

    main section {
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        text-align: center;
        gap: 1rem;
        color: #B9A27A;
        max-width: 430px;
        margin: 0 2rem;
        z-index: 10;
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

    main section .cta {
        display: flex;
        gap: 1rem;
        margin-top: 2rem;
    }

    main section .cta a button {
        cursor: pointer;
    }

    main > img {
        object-fit: cover;
        object-position: center;
    }

    .status {
        background-color: #B9A27A;
        padding: 0.5rem 1rem;
        border-radius: 6px;
        margin-top: 1rem;
        color: green;
        background-color: lightgreen;
    }

    #hero {
        background-color: rgba(0, 58, 99, 0.7);
        z-index: 120;
        width: 100%;
        height: 100%;
        display: flex;
        justify-content: center;
        align-items: center;
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
        <img src="./assets/astral-express.png" alt="astral express" />

        <div id="hero">
            <section>
                <figure>
                    <img src="./assets/smk-astral-logo.png" alt="logo" width="210" />
                </figure>
                <p>Siap sukses? Bergabunglah dengan SMK Astral Express dan kuasai keterampilan industri!</p>
    
                <div class="cta">
                    <a href="form-daftar.php">
                        <button>Pendaftaran</button>
                    </a>
                    <a href="list-siswa.php">
                        <button>Daftar Siswa</button>
                    </a>
                </div>
                
                <?php if(isset($_GET['status'])): ?>
                    <div class="status">
                        <p>
                            <?php
                                if($_GET['status'] == 'sukses'){
                                    echo "Pendaftaran siswa baru berhasil!";
                                } else {
                                    echo "Pendaftaran gagal!";
                                }
                            ?>
                        </p>
                    </div>
                <?php endif; ?>
            </section>
        </div>
    </main>
</body>
</html>