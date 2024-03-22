<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Single Post Layout</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100">

    <nav class="bg-black shadow-md">
        <div class="max-w-4xl mx-auto px-4 py-8 flex justify-between items-center">
            <a href="http://wrrite.test" class="no-underline">
                <h1 class="text-xl font-bold text-white">WRRITE</h1>
            </a>
            <ul class="flex space-x-4">
                <li><a href="/publish" class="text-white hover:text-gray-300">Publish</a></li>
                <li><a href="#" class="text-white hover:text-gray-300">Profile</a></li>
                <li><a href="#" class="text-white hover:text-gray-300">Contact</a></li>
            </ul>
        </div>
    </nav>
 

{{ $slot }}

<footer class="bg-black text-white text-center p-5">
    <div>
        <p class="font-semibold">WRITE</p>
        <p class="text-gray-400 text-sm">Your mini description here.</p>
    </div>
</footer>

</body>
</html>
