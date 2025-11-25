# Praktikum 7: PHP Dasar
### Nama: Dira Rohmaeni
### NIM: 312410465
### Kelas: TI.24.A5

# Langkah-langkah Praktikum
1. Buat file baru dengan nama php_dasar.php pada directory tersebut. Kemudian buat
kode seperti berikut.
```php
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PHP Dasar</title>
</head>
<body>
    <h1>Belajar PHP Dasar</h1>
    <?php 
        echo "Hello World"; 
    ?>
</body>
</html>
```
Kemudian untuk mengakses direktory tersebut pada web server dengan mengakses URL:
[http://localhost/lab7_php_dasar/](http://localhost/lab7_php_dasar/php_dasar.php)


2. Menambahkan variable pada program.
```php
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PHP Dasar</title>
</head>
<body>
    <h1>Belajar PHP Dasar</h1>
    <?php 
        echo "Hello World"; 
    ?>
    <h2>Menggunakan Variable</h2>
    <?php 
    $nim = "0411500400"; 
    $nama = 'Abdullah'; 
    echo "NIM : " . $nim . "<br>"; 
    echo "Nama : $nama"; 
    ?>

</body>
</html>
```
Kemudian untuk mengakses direktory tersebut pada web server dengan mengakses URL:
[http://localhost/lab7_php_dasar/](http://localhost/lab7_php_dasar/php_dasar.php)


3. Predefine Variable $_GET
```php
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PHP Dasar</title>
</head>
<body>
    
    <h1>Predefine Variable</h1>
    <?php
    echo 'Selamat Datang ' . $_GET['nama'];
    ?>
</body>
</html>
```
Untuk mengaksesnya gunakan URL:
http://localhost/lab7_php_dasar/latihan2.php?nama=Agung


4. Membuat Form Input
```php
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>PHP Dasar</title>
</head>
<body>

<h2>Form Input</h2>

<form method="post">
    <label>Nama: </label>
    <input type="text" name="nama">
    <input type="submit" value="Kirim">
</form>

<?php 
if (isset($_POST['nama'])) {
    echo 'Selamat Datang ' . $_POST['nama'];
}
?>

</body>
</html>
```
Kemudian untuk mengakses direktory tersebut pada web server dengan mengakses URL:
http://localhost/lab7_php_dasar/form_input.php


5. Operator
```php
<?php 
$gaji = 1000000; 
$pajak = 0.1; 
$thp = $gaji - ($gaji*$pajak); 
echo "Gaji sebelum pajak = Rp. $gaji <br>"; 
echo "Gaji yang dibawa pulang = Rp. $thp"; 
?>
```
Kemudian untuk mengakses direktory tersebut pada web server dengan mengakses URL:
http://localhost/lab7_php_dasar/operator.php


6. Kondisi IF
```php
<?php 
$nama_hari = date("l"); 
if ($nama_hari == "Sunday") { 
    echo "Minggu"; 
} elseif ($nama_hari == "Monday") { 
    echo "Senin"; 
} else { 
    echo "Selasa"; 
} 
?>
```
Kemudian untuk mengakses direktory tersebut pada web server dengan mengakses URL:
http://localhost/lab7_php_dasar/kondisi_if.php


7. Kondisi Switch
```php
<?php 
$nama_hari = date("l"); 
switch ($nama_hari) { 
    case "Sunday": 
        echo "Minggu"; 
        break; 
    case "Monday": 
        echo "Senin"; 
        break; 
    case "Tuesday": 
        echo "Selasa"; 
        break; 
    default: 
        echo "Sabtu"; 
} 
?>
```
Kemudian untuk mengakses direktory tersebut pada web server dengan mengakses URL:
http://localhost/lab7_php_dasar/kondisi_switch.php


8. Perulangan for
```php
<?php 
echo "Perulangan 1 sampai 10 <br />"; 
for ($i=1; $i<=10; $i++) { 
    echo "Perulangan ke: " . $i . '<br />'; 
} 

echo "Perulangan Menurun dari 10 ke 1 <br />"; 
for ($i=10; $i>=1; $i--) { 
    echo "Perulangan ke: " . $i . '<br />'; 
} 
?>
```
Kemudian untuk mengakses direktory tersebut pada web server dengan mengakses URL:
http://localhost/lab7_php_dasar/perulangan_for.php


9. Perulangan while
```php
<?php 
echo "Perulangan 1 sampai 10 <br />"; 
$i=1; 
while ($i<=10) { 
    echo "Perulangan ke: " . $i . '<br />'; 
    $i++; 
} 
?>
```
Kemudian untuk mengakses direktory tersebut pada web server dengan mengakses URL:
http://localhost/lab7_php_dasar/perulangan_while.php


10. Perulangan do-while
```php
<?php 
echo "Perulangan 1 sampai 10 <br />"; 
$i=1; 
do { 
    echo "Perulangan ke: " . $i . '<br />'; 
    $i++; 
} while ($i<=10); 
?>
```
Kemudian untuk mengakses direktory tersebut pada web server dengan mengakses URL:
http://localhost/lab7_php_dasar/perulangan_do-while.php


### Pertanyaan dan Tugas
Buatlah program PHP sederhana dengan menggunakan form input yang menampilkan
nama, tanggal lahir dan pekerjaan. Kemudian tampilkan outputnya dengan menghitung
umur berdasarkan inputan tanggal lahir. Dan pilihan pekerjaan dengan gaji yang
berbeda-beda sesuai pilihan pekerjaan.

1. form.php
```php
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Form Input Data</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background: #dff7e8; /* hijau pastel */
            padding: 40px;
        }

        .container {
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
            color: #246b43; /* hijau gelap */
            margin-bottom: 20px;
        }

        label {
            font-weight: bold;
            color: #2f704e;
            display: block;
            margin-bottom: 6px;
        }

        input, select {
            width: 100%;
            padding: 11px;
            margin-bottom: 15px;
            border-radius: 6px;
            border: 1.5px solid #9edbb3;
            background: #f7fff9;
        }

        input:focus, select:focus {
            border-color: #4fae72;
            outline: none;
        }

        input[type="submit"] {
            background: #4fae72;
            color: white;
            font-weight: bold;
            border: none;
            cursor: pointer;
            transition: 0.3s;
        }

        input[type="submit"]:hover {
            background: #3b8d59;
        }
    </style>
</head>
<body>

    <div class="container">
        <h2>Form Input Data</h2>

        <form action="proses.php" method="post">
            <label>Nama:</label>
            <input type="text" name="nama" required>

            <label>Tanggal Lahir:</label>
            <input type="date" name="tgl_lahir" required>

            <label>Pekerjaan:</label>
            <select name="pekerjaan" required>
                <option value="Programmer">Programmer</option>
                <option value="Designer">Designer</option>
                <option value="Manager">Manager</option>
                <option value="Staff">Staff</option>
                <option value="Hrd">Hrd</option>
            </select>

            <input type="submit" value="Kirim">
        </form>
    </div>

</body>
</html>
```
Kemudian untuk mengakses direktory tersebut pada web server dengan mengakses URL:
http://localhost/lab7_php_dasar/form.php


2. proses.php
```php
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
```
Kemudian untuk mengakses direktory tersebut pada web server dengan mengakses URL:
http://localhost/lab7_php_dasar/proses.php
