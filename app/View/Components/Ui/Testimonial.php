<?php

namespace App\View\Components\Ui;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Testimonial extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        public string $title = "",
        public string $testimonialContent = "",
        public string $date = "",
        public string $style="",
        public string $author = "",
        public int $star = 0,
    )
    {        
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View
    {
        return view('components.ui.testimonial');
    }
}
