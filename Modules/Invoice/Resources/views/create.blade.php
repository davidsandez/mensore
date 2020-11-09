@extends('layouts.app')

@section('content')

<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-10 my-4"><h2 class="mb-4"> Add invoice </h2>

            <form action="{{ route('add-invoice') }}" method="post">
                    @csrf
                <div class="form-group row">
                    <label for="i_number" class="col-md-4">invoice number:</label>
                    <input type="number" name="invoice_number" min="89" max="9427" id="i_number" class="form control col-md-8" >
                </div>
                <div class="form-group row">
                    <label for="i_date" class="col-md-4">date:</label>
                    <input type="date" name="date" id="i_date" class="form control col-md-8" >
                </div>
                <div class="form-group row">
                    <label for="i_price" class="col-md-4">total price:</label>
                    <input type="number" name="total_price" min="100" max="45000" id="i_price" class="form control col-md-8" >
                </div>
                <input type="submit" class="btn btn-primary" value="send">
            </form>

        </div>
    </div>
</div>
@endsection
