@props(['project'])
<div class="w-full mb-2 rounded-xl border overflow-hidden border-opacity-10 shadow-lg bg-white hover:bg-gray-100 border-blue-800">
    <div 
    class="text-balance flex flex-row" 
    wire:navigate href="{{ route('projects.show', $project->slug) }}">
        
        <div class="">
            <img class="w-full  bg-blue-800" 
            src="/storage/{{ $project->img }}" 
            alt="">
            <img class="w-full bg-blue-800" 
            src="{{ $project->img }}" 
            alt="">
        </div>
        <div class="w-full flex flex-col p-2 my-auto">
		<span class="font-bold text-lg">
        <a wire:navigate href="{{ route('projects.show', $project->slug) }}">{{ $project->name}}</a>
        </span>
        <span class="font-light text-sm">{{ $project->address}}</span>
        </div>
       
        
    
    </div>

</div>