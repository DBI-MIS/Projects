<div class=" px-3 lg:px-7 py-6">
   
    <div class="py-5 flex flex-col md:grid md:grid-cols lg:grid-cols-2">
        @if ($this->projects->count() == 0)
        <tr>
            <td colspan="4">No projects to display.</td>
        </tr>
        @endif

        @foreach($this->projects as $project)
        <x-projects.project-item :project="$project"/>
        @endforeach
    </div>
    <div class="my-3">
        {{ $this->projects->onEachSide(1)->links() }}
    </div>

</div>