@extends('layouts.app')

@section('content')

<div class="container-fluid">
    <div class="row justify-content-center">
    <div class="col-md-10 my-4">
            <div class="d-flex align-items-center justify-content-between">
                <h2 class="mb-4"> Invoices </h2>
                <a href="{{route( 'create-invoice') }}" class="btn btn-sm btn-primary"> Add new invoice</a>
            </div>
            <table class="table align-items-center table-flush" id="invoice-table">
                <thead class="thead-light">
                    <tr>
                        <th scope="col">       id              </th>
                        <th scope="col">       invoice_number  </th>
                        <th scope="col">       date            </th>
                        <th scope="col">       total_price     </th>
                        <th scope="col">       user_id         </th>
                        <th scope="col">       edit            </th>
                        <th scope="col">       delete          </th>
                    </tr>
                </thead>
                {{-- <tbody>
                    action datatable server side rendering
                    </tbody>
                --}}

            </table>
        </div>
    </div>
</div>

@endsection

@section('scripts_')

   <script>
       $(document).ready( function () {
            $("#invoice-table").DataTable({
                processing: true,
                serverSide: true,
                "JQueryUI": true,
                ajax: '{!! route('datatable-invoice') !!}',
                columns: [
                    {data: 'id'},
                    {data: 'invoice_number'},
                    {data: 'date'},
                    {data: 'total_price'},
                    {data: 'user_id'},
                    {data: 'edit'},
                    {data: 'delete'}
                ]
            });
       });

   </script>
@endsection
