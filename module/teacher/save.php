<?php
if (isset($_POST['save'])) {
   include('config.php');
   $nip = $_POST['nip'];
   $name = $_POST['name'];
   $pob = $_POST['pob'];
   $dob = $_POST['dob'];
   $phone = $_POST['phone'];
   $subject_id = $_POST['subject_id'];
   
   $sql = "INSERT INTO teachers SET nip='$nip', name='$name', pob='$pob', dob='$dob', phone='$phone', subject_id='$subject_id'";
   if (mysqli_query($config, $sql)) {
       echo '<script>window.location.href="?m=teacher&s=view"</script>';
       // var_dump($sql);
   } else {
       echo '<script>alert("Data gagal disimpan!"); window.location.href="?m=teacher&s=add"</script>';
   }
} else {
    echo '<script>window.history.back()</script>';
}