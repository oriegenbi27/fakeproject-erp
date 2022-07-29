<?php

namespace App\Http\Livewire\Category;

use App\Http\Livewire\WithConfirmation;
use App\Http\Livewire\WithSorting;
use App\Models\Category;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;
    use WithSorting;
    use WithConfirmation;

    public int $perPage;
    public array $orderable;
    public string $search = '';
    public $selected    = [];
    public $paginationOptions;

    protected $queryString = [
        'search'    => [
            'except'    => '',
        ],
        'sortBy'    => [
            'execpt'    => '',
        ],
        'sortDirection' => [
            'execpt'    => 'desc',
        ],
    ];



    public function getSelectedCountProperty()
    {
        return count($this->selected);
    }

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function updatingPerPage()
    {
        $this->resetPage();
    }

    public function resetSelected()
    {
        $this->selected = [];
    }


    public function mount()
    {
        $this->sortBy       = 'id';
        $this->sortDirection    = 'desc';
        $this->perPage          = 100;
        $this->paginationOptions    = config('project.pagination.options');
        $this->orderable            = (new Category())->orderable;
    }

    public function render()
    {
        $query  = Category::advancedFilter([
            'id'                => $this->search ?: null,
            'order_column'      => $this->sortBy,
            'order_direction'   => $this->sortDirection,
        ]);

        $category   = $query->paginate($this->perPage);

        return view('livewire.category.index', compact('query', 'category'));
    }
}
