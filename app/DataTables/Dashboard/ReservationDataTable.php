<?php

namespace App\DataTables\Dashboard;

use App\Models\Reservation;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Services\DataTable;

class ReservationDataTable extends DataTable
{

    public function dataTable($query)
    {
        return datatables()
            ->eloquent($query)
            ->addColumn('action', 'Dashboard.reservations.parts.action')
            ->editColumn('created_at', function ($model) {
                return Carbon::parse($model->created_at)->diffForHumans();
            })
            ->editColumn('status', function ($model) {
                return trans('lang.' . $model->status);
            })
            ->rawColumns(['action', 'id']);
    }

    public function query(Reservation $model, Request $request)
    {
        $q = $model->newQuery();
        if ($request->is_employee) {
            $q->where("is_employee", 1);
        }
        if ($request->is_lawsuit) {
            $q->where("is_lawsuit", 1);
        }
        if ($request->c_r_num) {
            $q->whereNotNull("c_r_num");
        }
        if ($request->is_rights) {
            $q->where("is_rights", 1);
        }
        return $q;
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
                    [trans('lang.10row'), trans('lang.25row'), trans('lang.50row'), trans('lang.allRows')]])
            ->parameters([
                'language' => [app()->getLocale() == 'en' ? '' : 'url' => '//cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/Arabic.json']

            ]);
    }

    protected function getColumns()
    {

        return [
            Column::make('id')->title(trans('lang.id')),
            Column::make('full_name')->title(trans('lang.name')),
            Column::make('id_number')->title(trans('lang.id_number')),
            Column::make('phone')->title(trans('lang.phone')),
            Column::make('status')->title(trans('lang.status')),
            Column::make('created_at')->title(trans('lang.created_at')),
            Column::make('action')->title(trans('lang.action')),
        ];
    }

    protected function filename(): string
    {
        return 'Reservations_' . date('YmdHis');
    }
}
