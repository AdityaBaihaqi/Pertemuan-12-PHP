<?php
    require_once 'dbkoneksi.php';
    require_once 'class_produk.php';

    $objproduk = new Produk($dbh);
    $rsproduk = $objproduk -> getAllProduk();
?>
<h3>Daftar Produk</h3>
<table border="1" width="100%">
    <thead>
        <tr>
            <th>No</th>
            <th>Nama Produk</th>
            <th>Qty</th>
            <th>Harga</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        <?php
            $nomor = 1;
            foreach($rsproduk as $row){
                echo '<tr><td>'.$nomor.'</td>
                <td>'.$row -> nama.'</td>
                <td>'.$row -> qty.'</td>
                <td>'.$row -> harga.'</td>
                <td align="center">
                <a href="edit.php?id='.$row -> id.'">Edit</a>
                <a href="delete.php?id='.$row -> id.'">Del</a>
                </td></tr>';
                $nomor++;
            }
        ?>
    </tbody>
</table>
<br>
<a class="btn mt-2" style="background-color:#17a2b8; color:#ffffff" href="form_produk.php">Kembali</a>