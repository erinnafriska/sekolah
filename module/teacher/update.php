<?php
if (isset($_POST['update'])) {
   include('config.php');
   $id = $_POST['id'];
   $teachers = $_POST['teachers'];
   $hour = $_POST['hour'];

   $sql = "UPDATE teachers SET teachers='$teachers', hour='$hour' WHERE id='$id'";
   if (mysqli_query($config, $sql)) {
       echo '<script>alert("Data berhasil diupdate!"); window.location.href="?m=teachers&s=view"</script>';
   } else {
       echo '<script>alert("Data gagal diupdate!"); window.location.href="?m=teachers&s=add"</script>';
   }
} else {
    echo '<script>window.history.back()</script>';
}