<?php

?>

<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Dekoruma</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">

</head>

<body class="bg-gray-200 text-gray-900 font-[Poppins]">
    <main class="flex flex-col items-center">
        <section class="w-full">
            <div>
                <?php include "layout/navbar.php" ?>
            </div>

            <!-- Hero Section -->
            <div class="py-24 px-10 md:px-20 w-full flex flex-col md:flex-row justify-between items-center mx-auto gap-10 rounded-b-xl" id="intro" data-aos="fade-up" data-aos-duration="1000">
                <div class="text-center md:text-left">
                    <h1 class="text-2xl">Selamat Datang di "Dekoruma"</h1>
                    <h1 class="text-5xl md:text-5xl mt-2">
                        Pilihan Tepat untuk <br> Pencarian Barang Rumah Tangga
                    </h1>
                </div>
                <div>
                    <img src="asset/perabotan.jpg" alt="Perabotan Rumah Tangga"
                        class="w-[300px] md:w-[300px] shadow-lg">
                </div>
            </div>

            <!-- Card -->
            <div data-aos="fade-up" data-aos-duration="1000">
                <?php include "layout/card.php" ?>
            </div>


            <!-- product section -->
            <div data-aos="fade-up" data-aos-duration="1000">
                <?php include "layout/product.php" ?>
            </div>


            <div class="flex items-center justify-center py-20" data-aos="fade-up" data-aos-duration="1000">
                <div class="flex flex-col md:flex-row items-center bg-white shadow-lg rounded-lg p-10 gap-8">
                    <!-- Teks -->
                    <div class="md:w-1/2">
                        <h1 class="text-2xl font-semibold text-gray-800 mb-4">Kenapa <span class="text-sky-600">Dekoruma</span> Cocok Untuk Anda</h1>
                        <ul class="space-y-3 text-gray-700">
                            <li class="flex items-center gap-3">
                                <i class="fa-solid fa-check text-green-500 text-lg"></i>
                                <span>Telah dipercaya oleh banyak masyarakat</span>
                            </li>
                            <li class="flex items-center gap-3">
                                <i class="fa-solid fa-check text-green-500 text-lg"></i>
                                <span>Produk berkualitas dan pengiriman yang cepat</span>
                            </li>
                            <li class="flex items-center gap-3">
                                <i class="fa-solid fa-check text-green-500 text-lg"></i>
                                <span>Bisa di retur apabila ada produk yang rusak</span>
                            </li>
                            <li class="flex items-center gap-3">
                                <i class="fa-solid fa-check text-green-500 text-lg"></i>
                                <span>Admin yang fast respon</span>
                            </li>
                        </ul>
                    </div>

                    <!-- Gambar -->
                    <div class="md:w-1/2 flex justify-center">
                        <img src="asset/jempol.png" alt="Jempol" class="w-64 h-64 object-contain">
                    </div>
                </div>
            </div>


            <!-- footer -->
            <div></div>
        </section>
    </main>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
    <script>
        AOS.init();
    </script>

</body>


</html>