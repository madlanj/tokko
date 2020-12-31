<?php

namespace App\Http\Livewire;

use App\Models\Category;
use App\Models\Product;
use Livewire\Component;

class Home extends Component
{
    public $search;
    public $category;
    protected $queryString = [
        'search' => ['except' => ''],
        'category',
    ];

    public function mount()
    {
        $this->search = request('search');
    }

    public function render()
    {
        $products = Product::query();

        if ($this->search !== null) {
            $products->where('name', 'like', '%' . $this->search . '%');
        }

        return view('livewire.home', [
            'categories' => Category::get(),
            'products' => $products->paginate(4),
        ]);
    }

    public function selectCategory($categoryId)
    {
        $this->category = $categoryId;
    }
}
