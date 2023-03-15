<?php
//--------------------------------------
// Baris Variabel-variabel
// Yang bersifat umum
// dan defenisikan fungsi header_dinamis
//--------------------------------------

$NAMA_SERVER = "127.0.0.1";
$NAMA_USER   = "iven";
$PASSWORD    = "69iven";


function header_dinamis()
{
    // Mengatur agar d selalu bersifat dinamis
    header("Expiress:  Mon, 15 Mat 2023 08:00:00 GMT");
    header("Last-Modified: " .
            gmdate("D, d M Y H:i:s"));


    if ($_SERVER["SERVER_PROTOCOL"] == "HTTP/1.0")
    header("Pragma: no-cache");

    else
    header("Cache-Control: no-cache, must-revalidate");
}


?>