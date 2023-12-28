<?php
// mengaktifkan session
session_start();

//menghapus semua session
session_destroy();

//mengalihkan halaman sambil mengirim pesan logout
header("location:../index.php?pesan=logout")

?>
<audio autoplay>
      <source src="musik/The Final Chapter.mp3" type="audio/mp3"/>