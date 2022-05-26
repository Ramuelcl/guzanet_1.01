<?php

namespace App\Http\Livewire\Forms;

use App\Models\Telefono;
use Tanthammar\TallForms\Input;
use Tanthammar\TallForms\KeyVal;
use Tanthammar\TallForms\TallFormComponent;
use Controllers;

class TelefonoForm extends TallFormComponent
{
    public function mount(?Telefono $telefono)
    {
        //Gate::authorize();
        $this->mount_form($telefono); // $telefono from hereon, called $this->model
    }

    protected function formAttr(): array
    {
        $telefono = $this->model;
        
        return [
            'formTitle' => 'Create & Edit Telefono',
            'wrapWithView' => true, //see https://github.com/tanthammar/tall-forms/wiki/installation/Wrapper-Layout
            'showSave' => true,
            'showReset' => true,
            'showDelete' => $telefono->exists ? true : false, //see https://github.com/tanthammar/tall-forms/wiki/Form-Methods#delete
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
        $telefono = $this->model;
        // delete...
    }


    protected function fields()
    {
        return [
            Input::make('"ID", "id"')->type('number'),

            Input::make('Tipo')
                ->rules(['required', 'integer', 'gt:0']),

            KeyVal::make('Numero')
                ->rules(['json'])
                ->fields([]),


        ];
    }
}
