<?php
require "../admin/backend/manage.php"
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
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
</head>

<body class="bg-gray-100 min-h-screen flex flex-col">
    <nav class="bg-blue-500 text-white p-4 shadow-md">
        <div class="container mx-auto flex justify-between">
            <h1 class="text-lg font-bold">Admin Panel</h1>
            <a href="../logout.php" class="text-white hover:underline">Logout</a>
        </div>
    </nav>

    <div class="flex flex-1">
        <?php include "../admin/layout/navbar.php" ?>
        <!-- Content -->
        <main class="flex-1 p-6">
            <div>
                <div class="overflow-x-auto sm:mx-8 border-b-2 bg-gray-400 rounded-md text-white">
                    <table id="dataPemasukan" class="min-w-full rounded-lg shadow-md display">
                        <thead>
                            <thead>
                                <tr class="bg-gradient text-white">
                                    <th class="py-2 px-4 border-b text-start">No</th>
                                    <th class="py-2 px-4 border-b text-center ">Username</th>
                                    <th class="py-2 px-4 border-b text-center ">Password</th>
                                    <th class="py-2 px-4 border-b text-center ">
                                        action
                                    </th>
                                </tr>
                            </thead>
                        <tbody>
                            <?php
                            $no = 1; // Tambahkan variabel nomor urut
                            while ($data = mysqli_fetch_assoc($result)) : ?>
                                <tr>
                                    <td class="py-2 px-4 border-b"><?= $no++; ?></td>
                                    <td class="py-2 px-4 border-b text-center"><?= htmlspecialchars($data['username']); ?></td>
                                    <td class="py-2 px-4 border-b text-center"><?= htmlspecialchars($data['password']); ?></td>
                                    <td class="py-2 px-4 border-b text-center flex justify-center">
                                        <a href="javascript:void(0);" onclick="" class="text-blue-400 hover:text-blue-600 font-semibold mr-3">Edit</a>
                                        <!-- Form Hapus -->
                                        <form action="" method="POST">
                                            <input type="hidden" name="delete_id" value="">
                                            <button type="submit" class="text-red-400 font-semibold hover:text-red-600" name="delete">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            <?php endwhile; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </main>
    </div>
</body>

</html>