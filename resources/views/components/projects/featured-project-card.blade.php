@props(['project'])
<div class="w-full mb-2 rounded-xl border overflow-hidden border-opacity-10 shadow-lg bg-white hover:bg-gray-100 border-blue-800">
    <div 
    class="flex flex-row text-balance" 
    wire:navigate href="{{ route('projects.show', $project->slug) }}">
        
        <div class="">
            {{-- @if ($project->img === null)
            <tr>
                <td><img src="{{asset('')}}" alt="project Image" class="w-auto h-auto max-h-[120px] max-w-[180px]"></td>
            </tr>
            @endif --}}
            {{-- <img class="w-auto h-auto max-h-[120px] max-w-[180px]  bg-blue-800" 
            src="/storage/{{ $project->img }}" 
            alt=""> --}}
            <img class="w-full bg-blue-800" 
            src="{{ $project->img }}" 
            alt="">
            {{-- <div class="h-auto bg-blue-800"></div> --}}
        </div>
        <div class="w-full flex flex-col p-2 my-auto">
            
		<span class="font-bold text-lg">
        <a wire:navigate href="{{ route('projects.show', $project->slug) }}">{{ $project->name}}</a>
        </span>
        <span class="font-light text-sm">{{ $project->address}}</span>
        {{-- <span class="font-light text-sm">{{ $project->category}}</span> --}}
        </div>
       
        
    
    </div>
    

</div>