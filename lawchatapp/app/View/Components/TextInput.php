<?php

namespace App\View\Components;

use Illuminate\View\Component;

class TextInput extends Component
{
    public $name;
    public $id;
    public $value;

    /**
     * Create a new component instance.
     *
     * @param string $name
     * @param string|null $id
     * @param string $value
     */
    public function __construct($name = 'input', $id = null, $value = '')
    {
        $this->name = $name; // Set default to 'input' if name isn't provided
        $this->id = $id ?: $name; // Use name as id if no id is given
        $this->value = $value;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.text-input');
    }
}