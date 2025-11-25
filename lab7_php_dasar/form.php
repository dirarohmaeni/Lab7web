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
