<link rel="stylesheet" href="css/navbar.css">

<nav>
    <div class="relative w-full z-10 py-6 px-6 md:px-20 shadow-lg flex justify-between items-center bg-white">
        <h1 class="font-semibold text-2xl text-sky-600">
            Dekoruma
        </h1>

        <!-- Hamburger Menu -->
        <button id="menu-toggle" class="md:hidden text-sky-600 focus:outline-none">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16m-7 6h7"></path>
            </svg>
        </button>

        <!-- Menu Items -->
        <div id="menu" class="hidden md:flex">
            <ul class="flex flex-col md:flex-row gap-2">
                <li class="text-sky-400 text-base py-1 px-6">
                    <a href="#" class="flex items-center gap-2">
                        <img src="asset/Home.svg" alt="" class="w-4 h-4">
                        <span class="mt-1">Home</span>
                    </a>
                </li>
                <li class="text-sky-400 text-base py-1 px-6">
                    <a href="#" class="flex items-center gap-2">
                        <img src="asset/About.svg" alt="" class="w-4 h-4">
                        <span class="mt-1">About</span>
                    </a>
                </li>
                <li class="py-1 px-6 flex items-center gap-2" id="callus">
                    <a href="#" class="flex items-center gap-3">
                        <img src="asset/Call.svg" alt="Telepon" class="w-3 h-3">
                        <span>Hubungi Kami</span>
                    </a>
                </li>

                <li class="relative flex justify-center items-center rounded-full px-1 group" id="user">
                    <a href="#">
                        <img src="asset/User.png" alt="" class="w-6 h-6">
                    </a>
                    <!-- Dropdown Menu -->
                    <ul id="logout" class="absolute right-0 top-5 mt-2 w-40 bg-white shadow-lg rounded-md opacity-0 group-hover:opacity-100 transition duration-300 ease-in-out">
                        <li>
                            <a href="../backend/process-logout.php" class="block px-4 py-2 text-gray-700 hover:bg-gray-100 hover:rounded-md">
                                Logout
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>

<!-- JavaScript for Mobile Menu -->
<script>
    document.getElementById('menu-toggle').addEventListener('click', function() {
        document.getElementById('menu').classList.toggle('hidden');
    });
</script>