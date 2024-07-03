@props(['project'])
<article class="[&:not(:last-child)]:border-b border-gray-100 pb-2">
    <div class="article-body grid grid-cols-4 gap-3 mt-5 items-start">
        <div class="col-span-4 flex flex-row gap-2 items-start">
           
            <div class="col-span-1 flex-shrink-0 w-[180px]">
                <img class="w-auto h-auto max-w-[160px] max-h-[100px] mx-auto  bg-white" src="/storage/{{ $project->img }}" alt="">
                {{-- <img class="w-auto h-auto max-w-[160px] max-h-[100px] mx-auto  bg-blue-600" src="{{ $project->img }}" alt=""> --}}
            </div>
            
            <div class="col-span-2 flex flex-col">
                <div class="flex flex-col flex-between">
                    <h2 class="text-xl font-bold text-gray-900">
                        <a wire:navigate href="{{ route('projects.show', $project->slug) }}" >
                            {{ $project->name }}
                        </a>
                    </h2>
                    <span>{{ $project->address }}</span>
                    
                    
    
                    <p class="mt-2 text-base text-gray-700 font-light">
    
                        @if ($project->description === null)
                        <tr>
                            <td>No Description to display.</td>
                        </tr>
                        @endif
                        {{ $project->getExcerpt() }}
                    </p>
                </div>
                
                <div class="bg-blue-500 text-white px-2 rounded-xl text-xs w-max my-2">
                    <span >{{ $project->category }}</span>
                </div>
                

                
                
            </div>

        </div>
    </div>
</article>