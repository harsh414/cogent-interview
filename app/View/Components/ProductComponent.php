<?php

namespace App\View\Components;

use App\Models\Category;
use Illuminate\View\Component;

class ProductComponent extends Component
{
    public $category;
    public function __construct($category)
    {
        $this->category= $category;
    }

    public function render() {
        return view('components.product-component',[
            'category'=>$this->category,
        ]);
    }
}
