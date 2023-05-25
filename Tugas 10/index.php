<?php
    $status = isset($_GET['status']) ? $_GET['status'] : ' ';
    $namaFile = "dataPerpus.txt";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perpustakaan Yeah</title>
    <link rel="stylesheet" href="stylesheet.css">
</head>
<body>
    <div>
        <nav>
            <h1>Program Gweh Yahh</h1>
            <ul>
                <div class="items1">
                <li>
                    <a href="index.php" style="color: white;">Data Buku Perpustakaan</a>
                </li>
                </div>
                <div class="items2">
                <li>
                    <a href="add.php">Tambah Buku</a>
                </li>
                </div>
            </ul>
        </nav>
        <div class="wrapper">
            <main role="main">
                <?php
                    if ($status == 'ok') {
                        echo '<br>Data Buku Berhasil Ditambah';
                    } elseif ($status == 'error') {
                        echo '<br>Data Buku Gagal Diperbarui';
                    }
                ?>
                <h2>Data Buku</h2>
                <div>
                    <table border="5" class="tableGua">
                        <thead>
                            <tr>
                                <th>Kode Buku</th>
                                <th>Judul</th>
                                <th>Pengarang</th>
                                <th>Penerbit</th>
                                <th>Tahun Terbit</th>
                                <th>Cover</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                foreach (file($namaFile) as $dataBuku) :
                                    $data = explode("-", $dataBuku);
                            ?>
                            <tr>
                                <td><?= $data[0]; ?></td>
                                <td><?= $data[1]; ?></td>
                                <td><?= $data[2]; ?></td>
                                <td><?= $data[3]; ?></td>
                                <td><?= $data[4]; ?></td>
                                <td><img src="./<?= $data[5]; ?>" width="150px" alt="pict"></td>
                            </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </main>
        </div>
    </div>
</body>
</html>