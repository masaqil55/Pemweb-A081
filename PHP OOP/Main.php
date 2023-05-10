<?php
    require_once('Product.php');
    echo "Tugas PHP OOP Inheritance";
    echo "<br>";
    echo "--------------------------------------------";
    echo "<br>";

    $cdMusic = new CDMusic ("Lagu Barat", 100000, 10);
    $cdMusic->setPrice(100000);
    $cdMusic->setDiscount(10);
    $cdMusic->setArtist("Arianne Grande");
    $cdMusic->setGenre("Pop Music");

    echo "CD Music Details : ";
    echo "<br>";
    echo "Name : ".$cdMusic->getName();
    echo "<br>";
    echo "Harga : Rp.".$cdMusic->getPrice();
    echo "<br>";
    echo "Berikut Informasi Detail Terkait CD Music Anda :<br>";
    echo "Artis : ".$cdMusic->getArtist();
    echo "<br>";
    echo "Genre : ".$cdMusic->getGenre();
    echo "<br>";
    echo "Diskon Berlaku : ".$cdMusic->getDiscount()."%";
    echo "<br>";
    echo "Harga Setelah Diskon : Rp.".(100 - $cdMusic->getDiscount())/100 * $cdMusic->getPrice();
    echo "<br>";

    echo "-------------------------------------------<br>";

    $cdCabinet = new CDCabinet ("Western Digital Corporation", 500000, 15);
    $cdCabinet->setPrice(500000);
    $cdCabinet->setDiscount(15);
    $cdCabinet->setCapacity("256");
    $cdCabinet->setModel("Solid State Drive 2,5");

    echo "CD Kabinet Details : ";
    echo "<br>";
    echo "Name : ".$cdCabinet->getName();
    echo "<br>";
    echo "Harga : Rp.".$cdCabinet->getPrice();
    echo "<br>";
    echo "Berikut Informasi Detail Terkait CD Cabinet Anda :<br>";
    echo "Kapasitas : ".$cdCabinet->getCapacity()." GB";
    echo "<br>";
    echo "Model : ".$cdCabinet->getModel();
    echo "<br>";
    echo "Diskon Berlaku : ".$cdCabinet->getDiscount()."%";
    echo "<br>";
    echo "Harga Setelah Diskon : Rp.".(100 - $cdCabinet->getDiscount())/100 * $cdCabinet->getPrice();
?>