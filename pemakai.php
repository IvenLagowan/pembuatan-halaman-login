<?php
    include "umum.php";

    $id_mysqli = mysqli_connect($NAMA_SERVER,
                                $NAMA_USER,
                                $PASSWORD);
    
     if (! $id_mysql)
     die("Database server MySQL tidak dapat di koneksikan");

     if (! mysqli_select_db($id_mysql, "binfilm"))
     die("Database tidak dipilih");

     // Kosong Tabel
     mysqli_query($id_mysql,
        "DELETE FOROM pemakai") or
            die("Tak dapat dihapus tabel");

     $passl = md5('bintang1');
     mysqli_query("$id_mysql,
        "INSERT INTO pemakai .
        "VALUES('bintang1', '$pass1')") or
    die("Tidak dapat menambakan data 1");

     $pass2 = md5('bintang2');
     mysqli_query("$id_mysql,
        "INSERT INTO pemakai .
        "VALUES('bintang2 ', '$pass2')") or
    die("Tidak dapat menambakan data 2");

    print("Data password di tambakan");
?>