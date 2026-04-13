<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web Kelompok - SMK Telkom Malang</title>
    <style>
        /* Base Apple-like Dark Theme */
        :root {
            --bg-color: #000000;
            --card-bg: #1c1c1e;
            --text-primary: #f5f5f7;
            --text-secondary: #86868b;
            --accent-blue: #0071e3;
        }

        body {
            background-color: var(--bg-color);
            color: var(--text-primary);
            font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Helvetica, Arial, sans-serif;
            margin: 0;
            padding: 40px 20px;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        header {
            text-align: center;
            margin-bottom: 50px;
        }

        h1 {
            font-size: 3rem;
            font-weight: 700;
            letter-spacing: -0.05rem;
            margin-bottom: 10px;
        }

        .subtitle {
            color: var(--text-secondary);
            font-size: 1.2rem;
        }

        /* Grid System */
        .container {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 25px;
            max-width: 1100px;
            width: 100%;
        }

        /* Card Design */
        .card {
            background-color: var(--card-bg);
            border-radius: 22px;
            padding: 30px;
            text-align: center;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            border: 1px solid #333;
        }

        .card:hover {
            transform: scale(1.03);
            box-shadow: 0 20px 40px rgba(0,0,0,0.4);
        }

        .profile-img {
            width: 120px;
            height: 120px;
            border-radius: 50%;
            object-fit: cover;
            margin-bottom: 20px;
            border: 3px solid var(--accent-blue);
        }

        .name {
            font-size: 1.5rem;
            font-weight: 600;
            margin: 10px 0 5px 0;
        }

        .info {
            color: var(--text-secondary);
            font-size: 0.95rem;
            line-height: 1.5;
        }

        .badge {
            display: inline-block;
            background: #323235;
            padding: 5px 12px;
            border-radius: 12px;
            font-size: 0.8rem;
            margin-top: 10px;
        }
    </style>
</head>
<body>

    <?php
        // Data Kelompok (Bisa diubah sesuai anggota masing-masing)
        $nama_kelompok = "Tech Innovators"; // Ganti dengan nama kelompokmu [cite: 55]
        $kelas = "XI RPL 7"; // Ganti dengan kelasmu [cite: 59]

        $anggota = [
            [
                "nama" => "Adhiana Alika Apriantina",
                "absen" => "01",
                "foto" => "images/dhiana.jpeg"
            ],
            [
                "nama" => "Nasya Febrina Hegawan Putri",
                "absen" => "24",
                "foto" => "images/nasya.jpeg"
            ],
            [
                "nama" => "Naurah Cinta Zaniabilla",
                "absen" => "25",
                "foto" => "images/cinta.jpeg"
            ],
            [
                "nama" => "Salman Falah Taqiyuddin",
                "absen" => "28",
                "foto" => "images/salman.png"
            ],
            [
                "nama" => "Shabrina Septhyan Nuraini",
                "absen" => "30",
                "foto" => "images/shabrina.jpeg"
            ]
        ];
    ?>

    <header>
        <h1><?php echo $nama_kelompok; ?></h1>
        <p class="subtitle">Praktikum Web Server Dinamis - <?php echo $kelas; ?></p>
    </header>

    <div class="container">
        <?php foreach ($anggota as $p): ?>
            <div class="card">
                <img src="<?php echo $p['foto']; ?>" alt="Foto <?php echo $p['nama']; ?>" class="profile-img">
                
                <div class="name"><?php echo $p['nama']; ?></div>
                
                <div class="info">
                    No. Absen: <?php echo $p['absen']; ?><br>
                    <span class="badge"><?php echo $kelas; ?></span>
                </div>
            </div>
        <?php endforeach; ?>
    </div>

</body>
</html>
