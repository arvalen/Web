<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pendaftaran Siswa Baru | SMK Tomorrowland</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            background: url('https://brasil.tomorrowland.com/uploads/containers/assets/welcome/memory-lane/2023/2caba390-bacf-428c-afec-e0f044fe5e16_1697264622419_07bddb9d-bd55-4534-919d-c3fdcc59b7cc.jpg_3648_136875236270472850.jpg/a654d315ec94c3bb26194af2b8686ec6.webp') no-repeat center center fixed;
            background-size: cover;
            color: #fff;
            display: flex;
            flex-direction: column;
            justify-content: flex-start; 
            align-items: center;
            height: 100vh;
            overflow: hidden;
        }
        header {
            background-color: rgba(103, 80, 164, 0.8);
            color: white;
            text-align: center;
            padding: 20px 0;
            width: 100%;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.2);
            margin-bottom: 40px;
        }
        header h1 {
            font-size: 3rem;
            margin: 0;
        }
        header h3 {
            font-size: 1.5rem;
            font-weight: 300;
            margin-top: 10px;
        }
        .container {
            background: rgba(255, 255, 255, 0.); 
            width: 90%;
            max-width: 800px;
            padding: 40px;
            margin-top: 20px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.3);
            border-radius: 12px;
            text-align: center;
            backdrop-filter: blur(5px); 
        }
        .container h4 {
            font-size: 2rem;
            margin-bottom: 20px;
            color: #ffffff;
        }
        .menu {
            display: flex;
            justify-content: center;
            gap: 20px;
            flex-wrap: wrap; 
        }
        .menu a {
            text-decoration: none;
            color: white;
            background-color: #4CAF50;
            padding: 15px 25px;
            border-radius: 50px;
            font-weight: bold;
            font-size: 1.1rem;
            transition: background-color 0.3s, transform 0.2s;
        }
        .menu a:hover {
            background-color: #45a049;
            transform: translateY(-4px);
        }
        footer {
            margin-top: auto;
            font-size: 0.9rem;
            color: #ddd;
            padding: 20px 0;
            text-align: center;
            width: 100%;
        }
        @media (max-width: 600px) {
            .container {
                width: 95%;
                padding: 25px;
            }
            .menu {
                flex-direction: column;
                gap: 15px;
            }
        }
    </style>
</head>
<body>
    <header>
        <h1>SMK Tomorrowland</h1>
        <h3>Pendaftaran Siswa Baru</h3>
    </header>
    <div class="container">
        <h4>Menu Pendaftaran</h4>
        <div class="menu">
            <a href="form-daftar.php">Daftar Baru</a>
            <a href="list-siswa.php">Lihat Pendaftar</a>
            <a href="list-pegawai.php">Lihat Pegawai</a>
        </div>
    </div>
    <footer>
        <p>&copy; 2024 SMK Tomorrowland. All Rights Reserved.</p>
    </footer>
</body>
</html>