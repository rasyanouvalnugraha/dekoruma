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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
</head>

<body class="bg-blue-100 min-h-screen flex flex-col">
    <nav class="bg-blue-500 text-white p-4 shadow-md">
        <div class="container mx-auto flex justify-between">
            <h1 class="text-lg font-bold">Admin Panel</h1>
            <a href="../logout.php" class="text-white hover:underline">Logout</a>
        </div>
    </nav>
    
    <div class="flex flex-1">
        <?php include "../admin/layout/navbar.php"?>
        
        <!-- Content -->
        <main class="flex-1 p-6">
            <h2 class="text-2xl font-bold text-blue-900">Dashboard</h2>
            <p class="text-blue-700">Selamat datang di panel admin.</p>
        </main>
    </div>
</body>

</html>