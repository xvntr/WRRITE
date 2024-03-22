<x-layout>

    <main class="my-10">
        <div class="max-w-4xl mx-auto px-4 py-8 mx-auto grid gap-8 md:grid-cols-2 lg:grid-cols-3">
    
            @forelse ($stories as $story)
            <!-- Repeat this section for each article -->
            <a href="" class="block bg-white shadow-lg rounded-lg overflow-hidden">
                <article>
                    <img src="{{ $story->image }}" alt="Article Image" class="w-full h-48 object-cover">
                    <div class="p-5">
                        <h2 class="font-bold text-xl mb-2">{{ $story->title }}</h2>
                        <p class="text-gray-700">By {{ $story->author }}</p>
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
                {{ $stories->links() }}
            </div>
        </div>
        
    </main>
    
    </x-layout>
    