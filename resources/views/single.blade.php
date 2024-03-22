<x-layout>

    <main class="py-10">
        <div class="max-w-4xl mx-auto px-4">
            <img src="{{ $story->image }}" alt="Post Image" class="w-full mb-6 rounded-md" style="height: 400px; object-fit: cover;">
            <h1 class="text-4xl font-bold mb-4">{{ $story->title }}</h1>
            <h2 class="text-xl text-gray-600 mb-4">by {{ $story->author }}</h2>
            <p class="text-gray-700 leading-relaxed">{{ $story->content }}</p>
        </div>
    </main>
  
    <div class="max-w-4xl mx-auto px-4 mt-8">
        <div class="flex justify-between">
            <div>
                <a href="{{ route('write.edit', ['id' => $story->id]) }}" class="inline-block bg-black text-white px-4 py-2 rounded-md hover:bg-gray-800">Edit</a>
            </div>
            <div></div> <!-- This empty div can be used for spacing or additional content if needed -->
        </div>
    </div>
    
    
    </x-layout>
    