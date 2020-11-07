@extends('layouts.app')

@section('styles_')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="htps:////cdn.datatables.net/1.10.22/css/jquery.dataTables.min.css">
@endsection

@section('content')

<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-10 my-4"><h2 class="mb-4"> Invoices </h2>
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
