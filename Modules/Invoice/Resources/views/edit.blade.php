@extends('layouts.app')

@section('styles_')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="htps:////cdn.datatables.net/1.10.22/css/jquery.dataTables.min.css">
@endsection

@section('content')

.<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-10 my-4"><h2 class="mb-4"> Edit invoice </h2>
        <form action="{{ route('update-invoice', $invoice->id) }}" method="post">
            @csrf
        <div class="form-group row">
            <label for="i_number" class="col-md-4">invoice number:</label>
            <input type="number" min="89" max="9427" id="i_number" class="form control col-md-8" value="{{ $invoice->invoice_number }}">
        </div>
        <div class="form-group row">
            <label for="i_date" class="col-md-4">date:</label>
            <input type="text" id="i_date" class="form control col-md-8" value="{{ $invoice->date }}">
        </div>
        <div class="form-group row">
            <label for="i_price" class="col-md-4">total price:</label>
            <input type="number" min="100" max="45000" id="i_price" class="form control col-md-8" value="{{ $invoice->total_price }}">
        </div>
        <input type="submit" class="btn btn-primary" value="send">

        </form>
        </div>
    </div>
</div>
@endsection
