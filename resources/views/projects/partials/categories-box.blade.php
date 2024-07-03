<div id="">
    <h3 class="text-lg font-semibold text-gray-900 mb-3">Projects Category</h3>
    <div class="topics flex flex-wrap justify-start gap-2">
        <ul>
            @foreach ($categories as $category)
                <li>
                    <a href="{{ route('projects.index', ['category' => $category]) }}" class="text-blue-500 hover:bg-blue-500 hover:text-white">
                        {{ $category }}
                    </a>
                </li>
            @endforeach
        </ul>
    </div>
</div>
