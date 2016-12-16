<?php

namespace App\DataTables;

use App\Material;
use Yajra\Datatables\Services\DataTable;

class MaterialsDataTable extends DataTable
{
    /**
     * Display ajax response.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function ajax()
    {
        return $this->datatables
            ->eloquent($this->query())            
            ->make(true);
    }

    /**
     * Get the query object to be processed by dataTables.
     *
     * @return \Illuminate\Database\Eloquent\Builder|\Illuminate\Database\Query\Builder|\Illuminate\Support\Collection
     */
    public function query($id, $file)
    {
        $project = \App\Project::findOrFail($id);
        $file = \App\File::find($file);                          
        $materials = Material::where('file_id', '=', $file->id)->get();
        $query = $materials->query();

        return $this->applyScopes($query);
    }

    /**
     * Optional method if you want to use html builder.
     *
     * @return \Yajra\Datatables\Html\Builder
     */
    public function html()
    {
        return $this->builder()
            ->columns([
                'material_name',
                 'amount_paid',
                 'payment_date', 
                 'payment_type', 
                 'paid_to',
            ])
            ->parameters([
                'dom' => 'Bfrtip',
                'buttons' => ['csv', 'excel', 'print', 'reset', 'reload'],
            ]);
    }

    /**
     * Get columns.
     *
     * @return array
     */
    protected function getColumns()
    {
        return [
            'material_name',
            'amount_paid',
            'payment_date', 
            'payment_type', 
            'paid_to',
        ];
    }

    /**
     * Get filename for export.
     *
     * @return string
     */
    protected function filename()
    {
        return 'materials_' . time();
    }
}
