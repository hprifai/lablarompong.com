<!-- Simplicity is an acquired taste. - Katharine Gerould -->
<!DOCTYPE html>
<html lang="en" class="h-full bg-gray-100 scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    @vite(['resources/js/app.js'])
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css" />
    <title>{{ $title }}</title>
</head>

<body class="h-full">
    <div class="min-h-full">
        <x-navbar></x-navbar>

        {{-- <x-header>{{ $title }}</x-header> --}}

        <main>
            {{ $slot }}
        </main>
    </div>
    <x-footer></x-footer>

<script>
    // Menu Layanan konversi ke Rupiah
    const rupiah = (number) => {
        return new Intl.NumberFormat('id-ID', {
        style : "currency",
        currency : 'IDR',
        minimumFractionDigits :0
        }).format(number);
    }
</script>
<script src="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.js" ></script>
</body>

</html>
