<?php
    require 'kontak.class.php';
    if(isset($_POST["submit"]))
        {
        if(tambahkontak::tambah_kontak($_POST)>0){
                echo "
                <script>
                    alert ('Kontak berhasil ditambahkan!');
                    document.location.href ='index.php'
                </script>
                ";
        }else{
            echo "
            <script>
                alert ('Kontak gagal ditambahkan!');
                document.location.href ='index.php'
            </script>
            ";
        }
        }
?>

<head>
    <link href="style.css"  rel="stylesheet">
</head>
    <div class="container">
      <section class="span12">
        <center><h2>Kontak Kami</h2>
        <p>You may leave us a message for any kind of business matter or personal greeting.</p></center><br>
        <div class="edit_label">
          <form method="post" role="form">
            <label for="nama_lengkap">Nama Lengkap :</label>
              <input name="nama_lengkap" id="nama_lengkap" type="text"/>
            <label for="email">Email :</label>
              <input name="email" id="email" type="email"/>
               
            <input type="submit" value="Send" id="submit" name="submit" class="btn btn-info float_l" />
          </form>
        </div>
      </section>
    </div>