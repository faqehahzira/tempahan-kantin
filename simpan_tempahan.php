<?php
$nama = $_POST['nama'];
$menu = $_POST['menu'];
$data = "$nama - $menu\n";
file_put_contents("tempahan.txt", $data, FILE_APPEND);
echo "Tempahan berjaya!";
?>