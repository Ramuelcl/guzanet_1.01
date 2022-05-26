<?php

namespace App\Http\Livewire\Forms;

use App\Models\Color;
use Tanthammar\TallForms\Input;
use Tanthammar\TallForms\TallFormComponent;
use Controllers;

class ColorForm extends TallFormComponent
{
    public function mount(?Color $color)
    {
        //Gate::authorize();
        $this->mount_form($color); // $color from hereon, called $this->model
    }

    protected function formAttr(): array
    {
        $color = $this->model;
        
        return [
            'formTitle' => 'Create & Edit Color',
            'wrapWithView' => true, //see https://github.com/tanthammar/tall-forms/wiki/installation/Wrapper-Layout
            'showSave' => true,
            'showReset' => true,
            'showDelete' => $color->exists ? true : false, //see https://github.com/tanthammar/tall-forms/wiki/Form-Methods#delete
            'showGoBack' => true,
        ];
    }


    // REQUIRED, if you are creating a model with this form
    protected function onCreateModel($validated_data)
    {
        // create...
    }

    // OPTIONAL, method exists in tall-form component
    protected function onUpdateModel($validated_data)
    {
        // update...
    }

    // OPTIONAL, method exists in tall-form component
    protected function onDeleteModel()
    {
        $color = $this->model;
        // delete...
    }


    protected function fields()
    {
        return [
            Input::make('"ID", "id"')->type('number'),

            Input::make('Name')
                ->rules(['required', 'string', 'max:50']),

            Input::make('Hexa')
                ->rules(['required', 'string', 'max:6']),

            Input::make('Rgb')
                ->rules(['required', 'string', 'max:20']),

            Input::make('Metadata')
                ->rules(['required', 'string']),


        ];
    }
}
