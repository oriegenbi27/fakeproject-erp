<?php

namespace App\Http\Livewire\Category;

use App\Models\Category;
use Illuminate\Http\Request;
use Livewire\Component;
use Illuminate\Support\Str;

class Create extends Component
{
    public Category $category;

    public function mount(Category $category)
    {
        $this->category = $category;
    }

    public function render()
    {
        return view('livewire.category.create');
    }

    public function submit(Request $request)
    {
        $this->validate();
        $create         = new Category();
        $create->name   = $this->category->name;
        $create->slug   = Str::slug($this->category->name);
        $create->save();

        return redirect()->route('admin.category.index');
    }

    public function rules(): array
    {
        return [
            'category.name' => [
                'string',
                'required',
            ],
        ];
    }
}
