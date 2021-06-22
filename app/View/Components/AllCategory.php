<?php

namespace App\View\Components;

use App\Models\Category;
use Illuminate\View\Component;

class AllCategory extends Component
{

    public function __construct()
    {

    }

    public function render()
    {
        $categories= Category::all();
        return view('components.all-category',[
            'categories'=>$categories
        ]);
    }
}
