<?php

$connect = mysqli_connect("localhost", "root", "", "dts_sertifikasi");

if (mysqli_connect_errno()) {
    echo "tidak bisa terhubung!" . mysqli_connect_error();
}
