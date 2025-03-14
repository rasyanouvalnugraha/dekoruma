<?php

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
  <title>Dekoruma</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
  <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="css/style.css">
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.0/dist/sweetalert2.all.min.js"></script>
  <link rel="stylesheet" href="sweetalert2.min.css">

</head>

<body>
  <main class="flex h-screen">
    <?php include "layout/form-login.php" ?>
  </main>

  <script>
    const messageCreateAccount = new URLSearchParams(window.location.search).get('messageCreate');
    if (messageCreateAccount) {
      if (messageCreateAccount === "Success") {
        Swal.fire({
          title: 'Berhasil',
          text: 'Akun berhasil dibuat, Silahkan Login dengan kembali',
          icon: 'success',
          confirmButtonText: 'Okay'
        }).then(() => {
          const url = new URL(window.location);
          url.searchParams.delete("messageCreate");
          window.history.replaceState({}, document.title, url);
        })
      }
    }
  </script>
</body>

</html>