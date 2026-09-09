<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Higgle Session Admin</title>

    <!-- Tailwind CSS -->
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css"
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">

    <style>
    body {
        font-family: 'Inter', sans-serif;
    }

    ::-webkit-scrollbar {
        width: 6px;
    }

    ::-webkit-scrollbar-thumb {
        background: #3f3f46;
        border-radius: 999px;
    }
    </style>

</head>

<body class="bg-[#0a0a0a] text-white overflow-x-hidden">

    <!-- Wrapper -->
    <div class="flex min-h-screen">

        <!-- Overlay Mobile -->
        <div id="sidebarOverlay" class="fixed inset-0 bg-black/70 z-40 hidden lg:hidden">
        </div>

        <!-- Sidebar -->
        @include('layouts.sidebar')
        <!-- END SIDEBAR -->

        <!-- MAIN CONTENT -->
        <main class="flex-1 flex flex-col min-h-screen">

            <!-- TOPBAR -->
            @include('layouts.topbar')
            <!-- END TOPBAR -->

            <!-- PAGE CONTENT -->
            <div class="flex-1 bg-[#0a0a0a]">
                {{$slot}}
            </div>
            <!-- END PAGE CONTENT -->

            <!-- FOOTER -->
            @include('layouts.footer')
            <!-- END FOOTER -->

        </main>
        <!-- END MAIN CONTENT -->

    </div>
    <!-- END WRAPPER -->

    <!-- Script -->
    <script>
    const menuBtn = document.getElementById('menuBtn');
    const sidebar = document.getElementById('sidebar');
    const overlay = document.getElementById('sidebarOverlay');

    menuBtn.addEventListener('click', () => {

        sidebar.classList.remove('-translate-x-full');

        overlay.classList.remove('hidden');

    });

    overlay.addEventListener('click', () => {

        sidebar.classList.add('-translate-x-full');

        overlay.classList.add('hidden');

    });
    </script>
    

</body>

</html>