<?php
$conn = mysqli_connect("localhost","root","","db_berita");

function query($query){
    global $conn;
    $result= mysqli_query($conn,$query);
    $rows=[];
    while($row=mysqli_fetch_assoc($result)){
        $rows[]=$row;
    }
    return $rows;
}
/**
 * 
 */
class tambahkontak
{
    public function tambah_kontak($data)
    {
        global $conn;
        $nama_lengkap = htmlspecialchars($data["nama_lengkap"]);
        $email = htmlspecialchars($data["email"]);
        
        if(empty($nama_lengkap && $email)){
            echo "<script>
            alert('Isikan field terlebih dahulu!');
            </script>";
        return false;
        }else
        {
            $query = "INSERT INTO kontak VALUES ('','$nama_lengkap','$email')";
            mysqli_query($conn,"$query");
            
        return mysqli_affected_rows($conn);
        }
    }
	
}

 class deletekontak
 {
 	function hapus_kontak($id){
        global $conn;
        mysqli_query($conn,"DELETE FROM kontak WHERE id = $id");
        return mysqli_affected_rows($conn);
    }
 	
 }
    
?>