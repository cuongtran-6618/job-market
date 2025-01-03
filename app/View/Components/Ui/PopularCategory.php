<?php

namespace App\View\Components\Ui;

use App\Models\Category;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class PopularCategory extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct()
    {

    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        $categories = Category::all()->where('deleted_at', null);
        return view('components.ui.popular-category', compact('categories'));
    }
}
