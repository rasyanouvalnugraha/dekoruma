<link rel="stylesheet" href="css/form-login.css">
<link rel="stylesheet" href="css/style.css">

<!-- TEXT SELAMAT DATANG -->
<div class="hidden md:flex md:w-1/2 md:mx-auto" id="background">
    <div class="flex items-center justify-center w-full h-full">
        <h1 id="welcome-text" class="text-white text-6xl font-semibold fade text-animation">Welcome Back!</h1>
    </div>
</div>

<!-- FORM LOGIN  -->
<div class="w-full md:w-1/2 flex items-center justify-center bg-white">
    <div class="max-w-md w-full px-8 py-6">
        <h2 class="text-2xl font-mulish-extend text-center mb-6">Login to Dekoruma</h2>

        <!-- LOGIN FORM -->
        <form action="/backend/process-login.php" method="POST" class="font-mulish">
            <div class="mb-4">
                <!-- USERNAME -->
                <label for="username" class="block text-gray-700 text-sm font-bold mb-2">Username</label>
                <div class="flex items-center border border-gray-300 rounded-md focus-within:ring-2 focus-within:ring-blue-500">
                    <img src="asset/Person.Svg" class="w-6 h-6 ml-3">
                    <input type="text" name="username" class="w-full px-4 py-4 focus:outline-none" required placeholder="username">
                </div>
            </div>

            <!-- PASSWORD -->
            <div class="mb-4">
                <label for="username" class="block text-gray-700 text-sm font-bold mb-2">Password</label>
                <div class="flex items-center border border-gray-300 rounded-md focus-within:ring-2 focus-within:ring-blue-500">
                    <img src="asset/Lock.Svg" class="w-6 h-6 ml-3">
                    <input type="password" name="password" class="w-full px-4 py-4 focus:outline-none" required placeholder="password">
                </div>
            </div>

            <!-- registrasi -->
            <div>
                <label for="username" class="block text-gray-700 text-sm font-bold mb-2">
                    Belum punya account?
                    <a href="register.php" class="text-blue-500">Daftar disini</a>
                </label>

            </div>

            <!-- BUTTON SUMBIT -->
            <div class="flex items-center justify-between">
                <button
                    class="w-full p-3 rounded-lg text-white font-mulish"
                    type="submit" name="login">
                    Login
                </button>
            </div>
        </form>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>
<script>
    var typed = new Typed(".text-animation", {
        strings: ["Dekoruma", "Home Decor", "Interior Design"],
        typeSpeed: 100,
        backSpeed: 100,
        loop: true,
        showCursor: false
    });
</script>