<?php

namespace App\Http\Livewire\Forms;

use App\Models\Direccion;
use Tanthammar\TallForms\Input;
use Tanthammar\TallForms\KeyVal;
use Tanthammar\TallForms\TallFormComponent;
use Controllers;

class DireccionForm extends TallFormComponent
{
    public function mount(?Direccion $direccion)
    {
        //Gate::authorize();
        $this->mount_form($direccion); // $direccion from hereon, called $this->model
    }

    protected function formAttr(): array
    {
        $direccion = $this->model;
        
        return [
            'formTitle' => 'Create & Edit Direccion',
            'wrapWithView' => true, //see https://github.com/tanthammar/tall-forms/wiki/installation/Wrapper-Layout
            'showSave' => true,
            'showReset' => true,
            'showDelete' => $direccion->exists ? true : false, //see https://github.com/tanthammar/tall-forms/wiki/Form-Methods#delete
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
        $direccion = $this->model;
        // delete...
    }


    protected function fields()
    {
        return [
            Input::make('"ID", "id"')->type('number'),

            Input::make('Tipo')
                ->rules(['required', 'integer', 'gt:0']),

            KeyVal::make('Direccion')
                ->rules(['json'])
                ->fields([]),


        ];
    }
}
