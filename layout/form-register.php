<link rel="stylesheet" href="css/form-login.css">
<link rel="stylesheet" href="css/style.css">

<!-- TEXT SELAMAT DATANG -->
<div class="hidden md:flex md:w-1/2 md:mx-auto" id="background">
    <div class="flex items-center justify-center w-full h-full">
        <h1 id="welcome-text" class="text-white text-5xl font-semibold fade text-animation">Join Us Today!</h1>
    </div>
</div>

<!-- FORM REGISTER -->
<div class="w-full md:w-1/2 flex items-center justify-center bg-white">
    <div class="max-w-md w-full px-8 py-6">
        <h2 class="text-2xl font-mulish-extend text-center mb-6">Create Account</h2>

        <!-- REGISTER FORM -->
        <form action="/backend/process-register.php" method="POST" class="font-mulish">

            <!-- USERNAME -->
            <div class="mb-4">
                <label for="username" class="block text-gray-700 text-sm font-bold mb-2">Username</label>
                <div class="flex items-center border border-gray-300 rounded-md focus-within:ring-2 focus-within:ring-blue-500">
                    <img src="asset/Person.Svg" class="w-6 h-6 ml-3">
                    <input type="text" name="username" class="w-full px-4 py-4 focus:outline-none" required placeholder="Username">
                </div>
            </div>

            <!-- PASSWORD -->
            <div class="mb-4">
                <label for="password" class="block text-gray-700 text-sm font-bold mb-2">Password</label>
                <div class="flex items-center border border-gray-300 rounded-md focus-within:ring-2 focus-within:ring-blue-500">
                    <img src="asset/Lock.Svg" class="w-6 h-6 ml-3">
                    <input type="password" name="password" class="w-full px-4 py-4 focus:outline-none" required placeholder="Password">
                </div>
            </div>

            <!-- CONFIRM PASSWORD -->
            <div class="mb-4">
                <label for="confirm_password" class="block text-gray-700 text-sm font-bold mb-2">Confirm Password</label>
                <div class="flex items-center border border-gray-300 rounded-md focus-within:ring-2 focus-within:ring-blue-500">
                    <img src="asset/Lock.Svg" class="w-6 h-6 ml-3">
                    <input type="password" name="confirm_password" class="w-full px-4 py-4 focus:outline-none" required placeholder="Confirm Password">
                </div>
            </div>

            <!-- LOGIN LINK -->
            <div>
                <label class="block text-gray-700 text-sm font-bold mb-2">
                    Sudah punya akun?
                    <a href="../index.php" class="text-blue-500">Login disini</a>
                </label>
            </div>

            <!-- BUTTON REGISTER -->
            <div class="flex items-center justify-between mt-4">
                <button
                    class="w-full p-3 rounded-lg text-white bg-blue-500 font-mulish hover:bg-blue-600 transition duration-300"
                    type="submit" name="register">
                    Register
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
