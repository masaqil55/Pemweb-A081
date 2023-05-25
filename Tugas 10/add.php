<?php
    $status = '';
    $namaFile = fopen("dataPerpus.txt","a+");
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $bookCode = $_POST['kode_buku'];
        $JudulBuku = $_POST['judul_buku'];
        $pengarang = $_POST['pengarang_buku'];
        $penerbit = $_POST['penerbit_buku'];
        $tahunTerbit = $_POST['tahun_terbit'];
        $coverBook = $_FILES['cover_buku'];

        $file_name = $bookCode.'-'.$coverBook['name'];
        $temp = $coverBook['tmp_name'];

        $directory = "fileDate/";

        $uploadFile = move_uploaded_file($temp, $directory.$file_name);
        if (!$uploadFile)
         echo "<script>alert('Gagal Menyimpan Gambar')</script>";

        $data = '';
        $data .= $bookCode."--";
        $data .= $JudulBuku."--";
        $data .= $pengarang."--";
        $data .= $penerbit."--";
        $data .= $tahunTerbit."--";
        $data .= $directory.$file_name."\n";

        $simpan = fwrite($namaFile, $data);

        if ($simpan == false) {
            $status = 'error';
        } else {
            $status = 'ok';
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Buku Perpustakaan Yeay</title>
</head>
<body>
    <div>
        <nav>
            <h1>Program Perpustakaan Mine</h1>
            <ul>
                <li>
                    <a href="index.php">Back to Main Menu</a>
                </li>
            </ul>
        </nav>
        <div>
            <main role="main">
                <?php
                    if ($status == 'ok') {
                        echo '<br><div role="alert">Data Buku Berhasil Disimpan</div>';
                    } elseif ($status == 'error') {
                        echo '<br><div role="alert">Data Buku Gagal Disimpan</div>';
                    }
                ?>

                <h2>Tambah Buku Perpustakaan</h2>
                <form action="" method="post" enctype="multipart/form-data">
                    <div>
                        <label for="kode_buku">Kode Buku</label>
                        <input type="number" name="kode_buku" id="kode_buku" required placeholder="Kode Buku Disini">
                    </div>
                    <div>
                        <label for="judul_buku">Judul Buku</label>
                        <input type="text" name="judul_buku" id="judul_buku" placeholder="Masukkan Judul Buku Disini" required>
                    </div>
                    <div>
                        <label for="pengarang_buku">Pengarang Buku</label>
                        <input type="text" name="pengarang_buku" id="pengarang_buku" placeholder="Masukkan Pengarang Buku Disini" required>
                    </div>
                    <div>
                        <label for="penerbit_buku">Penerbit Buku</label>
                        <input type="text" name="penerbit_buku" id="penerbit_buku" placeholder="Masukkan Penerbit Buku Disini" required>
                    </div>
                    <div>
                        <label for="tahun_terbit">Tahun Terbit Buku</label>
                        <input type="number" name="tahun_terbit" id="tahun_terbit" placeholder="Masukkan Tahun Terbit Buku" required>
                    </div>
                    <div>
                        <label for="cover_buku">Cover Buku</label>
                        <input type="file" name="cover_buku" id="cover_buku" placeholder="Upload Cover" required>
                    </div>
                    <button type="submit">Save Changes</button>
                </form>
            </main>
        </div>
    </div>
</body>
</html>