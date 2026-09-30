<?php
// Studi Kasus 2 - Form Input Data Pengguna dengan PHP

$nama = $email = $jenis_kelamin = $alamat = $no_telepon = "";
$sudahSubmit = false;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama          = htmlspecialchars($_POST['nama']);
    $email         = htmlspecialchars($_POST['email']);
    $jenis_kelamin = htmlspecialchars($_POST['jenis_kelamin']);
    $alamat        = htmlspecialchars($_POST['alamat']);
    $no_telepon    = htmlspecialchars($_POST['no_telepon']);
    $sudahSubmit   = true;
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Form Data Pengguna</title>
    <style>
        * {
            box-sizing: border-box;
        }
        html, body {
            height: 100%;
            margin: 0;
        }
        body {
            font-family: Arial, sans-serif;
            background-color: #ffffff;
            color: #000000;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            padding: 20px;
        }
        .container {
            background: #ffffff;
            padding: 25px 30px;
            border: 2px solid #000000;
            border-radius: 8px;
            width: 100%;
            max-width: 450px;
            margin: auto;
        }
        @media (max-width: 480px) {
            .container {
                padding: 20px;
            }
        }
        h2 {
            text-align: center;
            margin-bottom: 20px;
            color: #000000;
        }
        label {
            display: block;
            margin-top: 12px;
            font-weight: bold;
            color: #000000;
        }
        input[type="text"],
        input[type="email"],
        input[type="tel"],
        textarea {
            width: 100%;
            padding: 8px;
            margin-top: 5px;
            box-sizing: border-box;
            border: 1px solid #000000;
            border-radius: 4px;
            background-color: #ffffff;
            color: #000000;
        }
        .radio-group {
            margin-top: 5px;
        }
        .radio-group label {
            display: inline-block;
            font-weight: normal;
            margin-right: 15px;
        }
        button {
            margin-top: 20px;
            width: 100%;
            padding: 10px;
            background-color: #000000;
            color: #ffffff;
            border: 1px solid #000000;
            border-radius: 4px;
            font-size: 16px;
            cursor: pointer;
        }
        button:hover {
            background-color: #ffffff;
            color: #000000;
        }
        .hasil {
            margin-top: 25px;
            padding: 15px;
            background-color: #ffffff;
            border: 2px solid #000000;
            border-radius: 6px;
        }
        .hasil h3 {
            margin-top: 0;
            color: #000000;
        }
        .hasil table td {
            padding: 4px 8px;
            vertical-align: top;
            color: #000000;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Form Data Pengguna</h2>
        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
            <label for="nama">Nama</label>
            <input type="text" id="nama" name="nama" required>

            <label for="email">Email</label>
            <input type="email" id="email" name="email" required>

            <label>Jenis Kelamin</label>
            <div class="radio-group">
                <label><input type="radio" name="jenis_kelamin" value="Laki-laki" required> Laki-laki</label>
                <label><input type="radio" name="jenis_kelamin" value="Perempuan"> Perempuan</label>
            </div>

            <label for="alamat">Alamat</label>
            <textarea id="alamat" name="alamat" rows="3" required></textarea>

            <label for="no_telepon">Nomor Telepon</label>
            <input type="tel" id="no_telepon" name="no_telepon" required>

            <button type="submit">Submit</button>
        </form>

        <?php if ($sudahSubmit): ?>
        <div class="hasil">
            <h3>Data yang Dimasukkan:</h3>
            <table>
                <tr><td><strong>Nama</strong></td><td>: <?php echo $nama; ?></td></tr>
                <tr><td><strong>Email</strong></td><td>: <?php echo $email; ?></td></tr>
                <tr><td><strong>Jenis Kelamin</strong></td><td>: <?php echo $jenis_kelamin; ?></td></tr>
                <tr><td><strong>Alamat</strong></td><td>: <?php echo $alamat; ?></td></tr>
                <tr><td><strong>No. Telepon</strong></td><td>: <?php echo $no_telepon; ?></td></tr>
            </table>
        </div>
        <?php endif; ?>
    </div>
</body>
</html>