<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        Qwords.com: Cloud Web Hosting Indonesia Akses Cepat Aman
    </title>
    <link rel="icon" href="https://qwords.com/v2/wp-content/uploads/2022/12/cropped-logo-qw-light-32x32.png"
        sizes="32x32">
    <link rel="icon" href="https://qwords.com/v2/wp-content/uploads/2022/12/cropped-logo-qw-light-192x192.png"
        sizes="192x192">
    <!-- Tailwind -->
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <!-- Alpine -->
    <script type="module" src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js"></script>
    <script nomodule src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine-ie11.min.js" defer></script>
    <!-- AOS -->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <!-- Custom style -->
    <link rel="stylesheet" href="css/skilline.css" />
    <!-- Poppins font -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
</head>

<body class="antialiased">
    @include('components.navbar')
    @include('components.hero')
    <div class="container px-4 lg:px-8 mx-auto max-w-screen-xl text-gray-700 overflow-x-hidden">
        @include('components.price')
        @include('components.service')
        @include('components.solution')
        @include('components.websolution')
        @include('components.trusted')
        @include('components.partner')
        @include('components.garansi')
        @include('components.testimoni')
        @include('components.liput')
        @include('components.payment')
        @include('components.faq')
        @include('components.bantuan')
    </div>
    @include('components.footer')
    <!-- AOS init -->
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
</body>

</html>
