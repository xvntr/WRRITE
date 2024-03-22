<x-layout>

    <main class="my-10">
        <div class="max-w-4xl mx-auto px-4 py-8 mx-auto grid gap-8 md:grid-cols-2 lg:grid-cols-3">
    
            @forelse ($story as $data)
            <!-- Repeat this section for each article -->
            <a href="{{ route('write.show', ['id' => $data->id]) }}" class="block bg-white shadow-lg rounded-lg overflow-hidden">
                <article>
                    <img src="{{ $data->image }}" alt="Article Image" class="w-full h-48 object-cover">
                    <div class="p-5">
                        <h2 class="font-bold text-xl mb-2">{{ $data->title }}</h2>
                        <p class="text-gray-700">By {{ $data->author }}</p>
                    </div>
                </article>
            </a>
            <!-- End Article Section -->
            @empty
            <div>There are no tasks!</div>
        @endforelse
        </div>
        <div class="max-w-4xl mx-auto px-4 py-8 text-center mt-8">
            <div class="px-4 py-3 sm:px-0">
                {{ $story->links() }}
            </div>
        </div>
        
    </main>
    
    </x-layout>
    