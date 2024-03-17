<?php

namespace App\View\Components;

use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class ImageRenderer extends Component
{

    public $imageUrl;

    /**
     * Create a new component instance.
     */
    public function __construct($imageUrl)
    {
        //
        $this->imageUrl = $imageUrl;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View
    {
        return view('components.image-renderer', [
            'imageUrl' => $this->imageUrl,
        ]);
    }
}
