<?php

namespace App\Http\Livewire\Forms;

use App\Models\Compte;
use Tanthammar\TallForms\Input;
use Tanthammar\TallForms\Select;
use Tanthammar\TallForms\Repeater;
use Tanthammar\TallForms\TallFormComponent;
use Controllers;

class CompteForm extends TallFormComponent
{
    public function mount(?Compte $compte)
    {
        //Gate::authorize();
        $this->mount_form($compte); // $compte from hereon, called $this->model
    }

    protected function formAttr(): array
    {
        $compte = $this->model;
        
        return [
            'formTitle' => 'Create & Edit Compte',
            'wrapWithView' => true, //see https://github.com/tanthammar/tall-forms/wiki/installation/Wrapper-Layout
            'showSave' => true,
            'showReset' => true,
            'showDelete' => $compte->exists ? true : false, //see https://github.com/tanthammar/tall-forms/wiki/Form-Methods#delete
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
        $compte = $this->model;
        // delete...
    }


    protected function fields()
    {
        return [
            Input::make('"ID", "id"')->type('number'),

            Input::make('Numero')
                ->rules(['string', 'max:20']),

            Input::make('Id type')
                ->rules(['required', 'integer', 'gt:0']),

            Input::make('Devise')
                ->rules(['required', 'string', 'max:2']),

            Input::make('Solde')
                ->rules(['required', 'numeric', 'between:-99999999.99,99999999.99'])
                ->type('number')
                ->step(0.10)->min(0.10),

            Input::make('Date')
                ->type('datetime-local')
                ->step(7)
                ->min('2021-01-01')
                ->max(now()->format('Y-m-d'))
                ->default(now()->toDateTimeLocalString('minute')),

            Select::make('Banca')->options(/* TODO pass Array|Collection $BancaOptions */)->relation(/* TODO create a saveBanca() event hook */),

            Repeater::make('Mouvements')->fields([/* TODO add Mouvements fields */])->relation(/* TODO create a saveMouvements() event hook */),

            Input::make('Created at', 'created_at')->type('datetime-local')->default(now()->toDateTimeLocalString('minute')),
            Input::make('Updated at', 'updated_at')->type('datetime-local')->default(now()->toDateTimeLocalString('minute')),
        ];
    }
}
