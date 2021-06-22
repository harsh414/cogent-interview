<?php

namespace App\View\Components;

use App\Models\Category;
use Illuminate\View\Component;

class Navbar extends Component
{
    public function render() {
        $category= Category::all();
        return view('components.navbar',[
            'category'=>$category,
        ]);
    }
}
