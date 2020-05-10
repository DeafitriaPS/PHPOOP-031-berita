<?php
require '../kontak.class.php';
$id = $_GET["id"];

if(deletekontak::hapus_kontak($id)>0){
    echo "
        <script>
            alert ('Data berhasil dihapus!');
            document.location.href ='kontak.view.php'
        </script>
        ";
}else{
    echo "
    <script>
        alert ('Data gagal dihapus!');
        document.location.href ='kontak.view.php'
    </script>
    ";
}
?>