<?php
require '../kontak.class.php';
$kontak = query("SELECT * FROM kontak");
?>

<head>
    <link href="../style.css"  rel="stylesheet">
</head>
<center><h2>Kontak</h2></center>
<div class="tabel">
<table border="1">
    <thead>
        <tr>
            <th>No.</th>
            <th>Nama</th>
            <th>Email</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
    <?php $i=1; ?>
    <?php foreach($kontak as $row):?>
        <tr>
            <td><?= $i; ?></td>
            <td><?=$row["nama_lengkap"];?></td>
            <td><?=$row["email"];?></td>
            <td>
                <a href="kontak.delete.php?id=<?=$row["id"];?>"onclick="return confirm('yakin?');">Delete</a>
            </td>
        </tr>
    <?php $i++ ?>
    <?php endforeach ?>
    </tbody>
</table>
</div>