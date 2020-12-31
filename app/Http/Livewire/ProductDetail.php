<?php

namespace App\Http\Livewire;

use App\Models\Product;
use Livewire\Component;

class ProductDetail extends Component
{
    public $product;
    // public function mount(Product $product)
    // {
    //     $this->product = $product;
    // }

    public function render(Product $product)
    {
        return view('livewire.product-detail', [
            'product' => $product,
        ]);
    }
}
