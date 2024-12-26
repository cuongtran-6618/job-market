<?php

namespace App\View\Components\Ui;

use App\Models\Category;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Paragraph extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        public string $title = "",
        public string $content = "",
        public string $style="",
    )
    {

    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View
    {
        return view('components.ui.paragraph');
    }
}
