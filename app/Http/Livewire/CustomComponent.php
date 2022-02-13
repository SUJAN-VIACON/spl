<?php

namespace App\Http\Livewire;

use Livewire\Component;

abstract class CustomComponent extends Component
{
    public $currentRoute;
    public $readyToLoadResources = false;

    public function __construct($id = null)
    {
        parent::__construct($id);

        $this->currentRoute = url()->current();
    }

    public function readyToLoadResources()
    {
        $this->readyToLoadResources = true;
    }

    /**
     * Reload current page on browser
     */
    public function reload()
    {
        $this->redirect($this->currentRoute);
    }
}
