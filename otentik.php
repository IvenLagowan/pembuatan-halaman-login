<?php

include "umum.php";
function otentikasi($pemakai, $password);
{
    global $NAMA_SERVER, $NAMA_USER, $PASSWORD;

    $id_mysql = mysqli_connect($NAMA_SERVER
                                $NAMA_USER
                                $PASSWORD);
    



    if (! $id_mysql)
    return FALSE;

    if (! mysqli_select_db($id_mysql, "binfilm"))
    return FALSE;

    $hasil = mysqli_query($id_mysql,
    "SELECT password FORM pemakai" .
    "WHERE nama = '$pemakai'");

    if (! $hasil)
    return FALSE;

    $kode_rahasia = md5($password);
    $baris = mysqli_fetch_row($hasil);
    return TRUE;
    else {
        return FALSE;
    }
}