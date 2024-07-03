<?php

namespace App\Livewire;

use App\Models\Project;
use Livewire\Attributes\Computed;
use Livewire\Attributes\On;
use Livewire\Attributes\Url;
use Livewire\Component;
use Livewire\WithPagination;

class ProjectList extends Component
{

    use WithPagination;

    #[Url()]
    public $sort = 'desc';

    #[Url()]
    public ?string $search = '';

    #[Url()]
    public $category = '';


    public function setSort($sort)
    {
        $this->sort = ($sort === 'desc') ? 'desc' : 'asc';
        
    }

    #[On('search')]
    public function updateSearch($search)
    {
        $this->search = $search;
        $this->category = '';
        $this->resetPage();
    }

    public function clearFilters()
    {
        $this->search = '';
        $this->category = '';
        $this->resetPage();
    }


    #[Computed()]
    public function projects()
    {
        return Project::orderBy('published_at', $this->sort)
        ->where('status',true)
        ->where('name','like',"%{$this->search}%")
        ->paginate(20);

        // $query = Project::orderBy('published_at', $this->sort)
        //     ->where('status', true)
        //     ->where('name', 'like', "%{$this->search}%");

        // if ($this->category) {
        //     $query->where('category', $this->category);
        // }

        // return $query->paginate(20);
    }

    #[Computed()]
    public function category()
    {
        return Project::where('category', $this->category)->first();
    }

    public function render()
    {
        // return view('livewire.project-list');

        return view('livewire.project-list', [
            // 'projects' => $this->projects(),
            // 'category' => $this->activeCategory(),
        ]);
    }
}
