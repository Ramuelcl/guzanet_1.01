<?php

namespace App\Http\Livewire\Forms;

use App\Models\Banca;
use Tanthammar\TallForms\Input;
use Tanthammar\TallForms\Repeater;
use Tanthammar\TallForms\TallFormComponent;
use Controllers;

class BancaForm extends TallFormComponent
{
    public function mount(?Banca $banca)
    {
        //Gate::authorize();
        $this->mount_form($banca); // $banca from hereon, called $this->model
    }

    protected function formAttr(): array
    {
        $banca = $this->model;
        
        return [
            'formTitle' => 'Create & Edit Banca',
            'wrapWithView' => true, //see https://github.com/tanthammar/tall-forms/wiki/installation/Wrapper-Layout
            'showSave' => true,
            'showReset' => true,
            'showDelete' => $banca->exists ? true : false, //see https://github.com/tanthammar/tall-forms/wiki/Form-Methods#delete
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
        $banca = $this->model;
        // delete...
    }


    protected function fields()
    {
        return [
            Input::make('"ID", "id"')->type('number'),

            Input::make('Title')
                ->rules(['string', 'max:100']),

            Input::make('Slug')
                ->rules(['required', 'string', 'max:150', 'unique:bancas,slug']),

            Repeater::make('Comptes')->fields([/* TODO add Comptes fields */])->relation(/* TODO create a saveComptes() event hook */),

            Input::make('Created at', 'created_at')->type('datetime-local')->default(now()->toDateTimeLocalString('minute')),
            Input::make('Updated at', 'updated_at')->type('datetime-local')->default(now()->toDateTimeLocalString('minute')),
        ];
    }
}
