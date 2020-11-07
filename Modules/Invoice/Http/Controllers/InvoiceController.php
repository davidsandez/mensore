<?php

namespace Modules\Invoice\Http\Controllers;

use Modules\Invoice\Entities;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Invoice\Entities\Invoice;
use Yajra\DataTables\DataTables as DataTable;

class InvoiceController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {
        return view('invoice::index');
    }

    public function datatable()
    {
        $id = \Auth::User()->id; //TODO
        $result = Invoice::where("user_id", $id)->get();//TODO
        //$result = $result[0];
        return DataTable::of($result)
            ->addColumn('edit', '<a href="{{ route(\'edit-invoice\', $id) }}" class="btn btn-info btn-sm">' . ('edit') . '</a>')
            ->addColumn('delete', '<form action="{{ route(\'destroy-invoice\', $id) }}" method="post">
            <input type="hidden" name="_method" value="delete">
            <input type="submit" name="submit" value="'. ('delete').'" class="btn btn-danger btn-sm"
            onClick="return confirm(\'¿Seguro de eliminar registro?\')">
            {{ csrf_field() }}
            </form>')
            ->rawColumns(['edit', 'delete'])
            ->toJson();//TODO
    }


    /**
     * Show the form for creating a new resource.
     * @return Renderable
     */
    public function create()
    {
        return view('invoice::create');
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Renderable
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function show($id)
    {
        return view('invoice::show');
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function edit($id)
    {
        $invoice = Invoice::where('id', $id)->first();
        return view('invoice::edit', ['invoice' => $invoice]);
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Renderable
     */
    public function update(Request $request, $id)
    {
        $invoice = Invoice::where('id', $id)->first();
        $invoice->invoice_number = $request->invoice_number;
        $invoice->date = $request->date;
        $invoice->total_price = $request->total_price;
        $invoice->save();
        return redirect('home/invoice');
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Renderable
     */
    public function destroy($id)
    {
        $invoice = Invoice::where('id', $id)->first();
        $invoice->delete();
        return redirect('home/invoice');
    }
}
