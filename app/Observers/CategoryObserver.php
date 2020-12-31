<?php

namespace App\Observers;

use Illuminate\Support\Str;
use App\Models\Category;

class CategoryObserver
{
    public function creating(Category $category)
    {
        $category->slug = Str::slug($category->name);
    }

    // public function updating(Category $category)
    // {
    //     $category->slug = Str::slug($category->name);
    // }
}
