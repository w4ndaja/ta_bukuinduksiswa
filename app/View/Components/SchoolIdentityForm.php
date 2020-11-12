<?php

namespace App\View\Components;

use App\Models\SchoolIdentity;
use Illuminate\View\Component;

class SchoolIdentityForm extends Component
{
    public $schoolIdentity;
    public function __construct()
    {
        $this->schoolIdentity = SchoolIdentity::firstOrNew();
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        $schoolIdentity = $this->schoolIdentity;
        return view('components.school-identity-form', compact('schoolIdentity'));
    }
}
