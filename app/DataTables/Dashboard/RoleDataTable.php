<?php

namespace App\DataTables\Dashboard;

use Spatie\Permission\Models\Role;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Services\DataTable;

class RoleDataTable extends DataTable
{

    public function dataTable($query)
    {
        return datatables()
            ->eloquent($query)

            ->addColumn('action', 'Dashboard.role.parts.action')
            ->rawColumns(['action','id']);
    }


    public function query(Role $model)
    {
        return $model->newQuery()->orderBy('created_at','desc');
    }

    public function html()
    {
        return $this->builder()
            ->setTableId('admin-table')
            ->columns($this->getColumns())
            ->minifiedAjax()
            ->orderBy(0)
            ->lengthMenu(
                [
                    [10, 25, 50, -1],
                    [trans('lang.10row'), trans('lang.25row'),trans('lang.50row'), trans('lang.allRows')]                ])
            ->parameters([
                'language' => [ app()->getLocale()=='en' ? : 'url' => '//cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/Arabic.json']

            ]);
    }

    protected function getColumns()
    {
        return [
            Column::make('id')

                ->orderable(false)
                ->width(30),
            Column::make('name')->title(trans('lang.name')),
            Column::make('action')->title(trans('lang.action')),
        ];
    }

    protected function filename(): string
    {
        return 'Role_' . date('YmdHis');
    }
}
