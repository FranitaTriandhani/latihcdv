<?php
 include "db.php";
 if(isset($_POST['update']))
 {
 $NIP=$_POST['NIP'];
 $Nama_dosen=$_POST['Nama_dosen'];
 $Alamat_dosen=$_POST['Alamat_dosen'];
 $Telp_dosen=$_POST['Telp_dosen'];
 $Email_dosen=$_POST['Email_dosen'];
 $alamat=$_POST['alamat'];
 
 $q=mysqli_query($con,"UPDATE `dosen` SET `NIP`='$NIP',`Nama_dosen`='$Nama_dosen',`Alamat_dosen`='$Alamat_dosen`',`Telp_dosen`='$Telp_dosen',`Email_dosen`='$Email_dosen',`alamat`='$alamat' where `NIP`='$NIP'");
 if($q)
 echo "success";
 else
 echo "error";
 }
 ?>