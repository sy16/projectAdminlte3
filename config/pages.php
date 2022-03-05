<?php
$pages;


if (isset($_GET['page'])) {
    $pages = $_GET['page'];
    // echo $pages;

    if ($pages == "home") {
        include "home.php";
    } else if ($pages == "data_user") {
        include "page/user/data_user.php";
    } else if ($pages == "data_con_user") {
        include "page/user/data_con_user.php";
    } else if ($pages == "data_barang") {
        include "page/barang/data_barang.php";
    } else if ($pages == "data_stock_barang") {
        include "page/barang/data_stock_barang.php";
    } else if ($pages == "data_supplier") {
        include "page/barang/data_supplier.php";
    } else if ($pages == "data_transaksi_penjualan") {
        include "page/transaksi/data_penjualan.php";
    } else if ($pages == "data_transaksi_pembelian") {
        include "page/transaksi/data_pembelian.php";
    } else {
        include "home.php";
    }
} else {
    include "home.php";
}
