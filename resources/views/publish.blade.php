<x-layout>

<body class="bg-gray-100">
    <div class="max-w-4xl mx-auto px-4 py-8">
        <form action=" {{ route('write.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-6">
                <label for="title" class="block mb-2 text-sm font-medium text-gray-900">Title</label>
                <input type="text" id="title" name="title" required class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
            </div>
            <div class="mb-6">
                <label for="author" class="block mb-2 text-sm font-medium text-gray-900">Nama Author</label>
                <input type="text" id="author" name="author" required class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
            </div>
            <div class="mb-6">
                <label for="content" class="block mb-2 text-sm font-medium text-gray-900">Konten</label>
                <textarea id="content" name="content" rows="10" required class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"></textarea>
            </div>
            <div class="mb-6">
                <label for="image" class="block mb-2 text-sm font-medium text-gray-900">URL Gambar</label>
                <input type="url" id="image" name="image" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="Masukkan URL gambar">
            </div>
            <button type="submit" class="text-white bg-blue-500 hover:bg-blue-700 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center">Publish</button>
        </form>
    </div>
</body>

</x-layout>