<?php

namespace App\Http\Livewire\Forms;

use App\Models\Tabla;
use Tanthammar\TallForms\Input;
use Tanthammar\TallForms\Select;
use Tanthammar\TallForms\Repeater;
use Tanthammar\TallForms\TallFormComponent;
use Controllers;

class TablaForm extends TallFormComponent
{
    public function mount(?Tabla $tabla)
    {
        //Gate::authorize();
        $this->mount_form($tabla); // $tabla from hereon, called $this->model
    }

    protected function formAttr(): array
    {
        $tabla = $this->model;
        
        return [
            'formTitle' => 'Create & Edit Tabla',
            'wrapWithView' => true, //see https://github.com/tanthammar/tall-forms/wiki/installation/Wrapper-Layout
            'showSave' => true,
            'showReset' => true,
            'showDelete' => $tabla->exists ? true : false, //see https://github.com/tanthammar/tall-forms/wiki/Form-Methods#delete
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
        $tabla = $this->model;
        // delete...
    }


    protected function fields()
    {
        return [
            Input::make('"ID", "id"')->type('number'),

            Input::make('Id tabla')
                ->rules(['required', 'integer']),

            Input::make('Name')
                ->rules(['string', 'max:50']),

            Input::make('Slug')
                ->rules(['string', 'max:100', 'unique:tablas,slug']),

            Input::make('Status')
                ->rules(['in:activo,inactivo']),

            Select::make('Color')->options(/* TODO pass Array|Collection $ColorOptions */)->relation(/* TODO create a saveColor() event hook */),

            Repeater::make('Colors')->fields([/* TODO add Colors fields */])->relation(/* TODO create a saveColors() event hook */),


        ];
    }
}
