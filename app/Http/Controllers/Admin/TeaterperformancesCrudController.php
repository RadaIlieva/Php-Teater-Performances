<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\TeaterperformancesRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;

class TeaterperformancesCrudController extends CrudController
{
    use \Backpack\CRUD\app\Http\Controllers\Operations\ListOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\CreateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\UpdateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\DeleteOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\ShowOperation;

    private function getFieldsData($show = false)
    {
        return [
            [
                'name' => 'name',
                'label' => 'Name',
                'type' => 'text',
            ],
            [
                'name' => 'date',
                'label' => 'Date',
                'type' => 'date',
            ],
            [
                'name' => 'venue',
                'label' => 'Venue',
                'type' => 'text',
            ],
            [
                'name' => 'image',
                'label' => 'Image',
                'type' => ($show ? 'view' : 'upload'),
                'upload' => true,
                'view' => 'partials/image',
            ],
            [
                'name' => 'additional_info',
                'label' => 'Additional Info',
                'type' => 'textarea',
            ],
            [
                'name' => 'bilety',
                'label' => 'Ticket',
                'type' => 'text',
            ],
            
        ];
    }

    /**
     * Configure the CrudPanel object. Apply settings to all operations.
     * 
     * @return void
     */
    public function setup()
    {
        CRUD::setModel(\App\Models\Teaterperformances::class);
        CRUD::setRoute(config('backpack.base.route_prefix') . '/teaterperformances');
        CRUD::setEntityNameStrings('teaterperformances', 'teaterperformances');

        $this->crud->addFields($this->getFieldsData());
    }

    /**
     * Define what happens when the List operation is loaded.
     * 
     * @see  https://backpackforlaravel.com/docs/crud-operation-list-entries
     * @return void
     */
    protected function setupListOperation()
    {
        $this->crud->addColumns($this->getFieldsData(true));

        // Add any additional columns or configurations specific to the List operation.
    }

    /**
     * Define what happens when the Create operation is loaded.
     * 
     * @see https://backpackforlaravel.com/docs/crud-operation-create
     * @return void
     */
    protected function setupCreateOperation()
    {
        $this->crud->setValidation(TeaterperformancesRequest::class);
        $this->crud->addField([   
            'name' => 'image',
            'type' => 'upload',
            'upload' => true,
        ]);
        $this->crud->addField([   
            'name' => 'additional_info',
            'type' => 'textarea',
        ]);
        $this->crud->addField([   
            'name' => 'bilety',
            'label' => 'Ticket',
            'type' => 'text',      
        ]);
        

        // Add any additional fields or configurations specific to the Create operation.
    }

    /**
     * Define what happens when the Update operation is loaded.
     * 
     * @see https://backpackforlaravel.com/docs/crud-operation-update
     * @return void
     */
    protected function setupUpdateOperation()
    {
        $this->setupCreateOperation();

        // Add any additional fields or configurations specific to the Update operation.
    }
}