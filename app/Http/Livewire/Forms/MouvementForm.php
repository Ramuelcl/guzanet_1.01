<?php

namespace App\Http\Livewire\Forms;

use App\Models\Mouvement;
use Tanthammar\TallForms\Input;
use Tanthammar\TallForms\Select;
use Tanthammar\TallForms\TallFormComponent;
use Controllers;

class MouvementForm extends TallFormComponent
{
    public function mount(?Mouvement $mouvement)
    {
        //Gate::authorize();
        $this->mount_form($mouvement); // $mouvement from hereon, called $this->model
    }

    protected function formAttr(): array
    {
        $mouvement = $this->model;
        
        return [
            'formTitle' => 'Create & Edit Mouvement',
            'wrapWithView' => true, //see https://github.com/tanthammar/tall-forms/wiki/installation/Wrapper-Layout
            'showSave' => true,
            'showReset' => true,
            'showDelete' => $mouvement->exists ? true : false, //see https://github.com/tanthammar/tall-forms/wiki/Form-Methods#delete
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
        $mouvement = $this->model;
        // delete...
    }


    protected function fields()
    {
        return [
            Input::make('"ID", "id"')->type('number'),

            Input::make('Date')
                ->type('datetime-local')
                ->step(7)
                ->min('2021-01-01')
                ->max(now()->format('Y-m-d'))
                ->default(now()->toDateTimeLocalString('minute')),

            Input::make('Libell')
                ->rules(['string']),

            Input::make('Montant')
                ->rules(['required', 'numeric', 'between:-99999999.99,99999999.99'])
                ->type('number')
                ->step(0.10)->min(0.10),

            Input::make('Id tipo')
                ->rules(['required', 'integer', 'gt:0']),

            Input::make('DateFiniched')
                ->type('datetime-local')
                ->step(7)
                ->min('2021-01-01')
                ->max(now()->format('Y-m-d'))
                ->default(now()->toDateTimeLocalString('minute')),

            Input::make('Id error')
                ->rules(['required', 'integer', 'gt:0']),

            Select::make('Compte')->options(/* TODO pass Array|Collection $CompteOptions */)->relation(/* TODO create a saveCompte() event hook */),

            Input::make('Created at', 'created_at')->type('datetime-local')->default(now()->toDateTimeLocalString('minute')),
            Input::make('Updated at', 'updated_at')->type('datetime-local')->default(now()->toDateTimeLocalString('minute')),
        ];
    }
}
