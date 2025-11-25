<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Hasil Output</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background: #dff7e8; /* hijau pastel */
            padding: 40px;
        }

        .hasil {
            width: 420px;
            background: #ffffff;
            padding: 25px;
            margin: auto;
            border-radius: 12px;
            border: 2px solid #b6e8c8;
            box-shadow: 0 4px 12px rgba(0,0,0,0.08);
        }

        h2 {
            text-align: center;
            color: #246b43;
            margin-bottom: 15px;
        }

        p {
            font-size: 16px;
            margin: 7px 0;
            color: #2f704e;
        }

        .kembali {
            display: block;
            width: 100%;
            text-align: center;
            background: #4fae72;
            color: white;
            padding: 10px;
            margin-top: 20px;
            border-radius: 6px;
            text-decoration: none;
            font-weight: bold;
            transition: 0.3s;
        }

        .kembali:hover {
            background: #3b8d59;
        }
    </style>
</head>
<body>

<div class="hasil">
    <h2>Hasil Data</h2>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $nama = $_POST['nama'];
        $tgl_lahir = $_POST['tgl_lahir'];
        $pekerjaan = $_POST['pekerjaan'];

        // Hitung umur
        $lahir = new DateTime($tgl_lahir);
        $today = new DateTime();
        $umur = $today->diff($lahir)->y;

        // Tentukan gaji
        switch ($pekerjaan) {
            case "Programmer":
                $gaji = 8000000;
                break;
            case "Designer":
                $gaji = 6000000;
                break;
            case "Manager":
                $gaji = 10000000;
                break;
            case "Staff":
                $gaji = 5000000;
                break;
            default:
                $gaji = 0;
        }

        echo "<p><b>Nama:</b> $nama</p>";
        echo "<p><b>Tanggal Lahir:</b> $tgl_lahir</p>";
        echo "<p><b>Umur:</b> $umur tahun</p>";
        echo "<p><b>Pekerjaan:</b> $pekerjaan</p>";
        echo "<p><b>Gaji:</b> Rp " . number_format($gaji, 0, ',', '.') . "</p>";
    }
    ?>
</div>

<a class="kembali" href="form.php">Kembali</a>

</body>
</html>
