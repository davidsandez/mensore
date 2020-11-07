@extends('layouts.app')

@section('styles_')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="htps:////cdn.datatables.net/1.10.22/css/jquery.dataTables.min.css">
@endsection

@section('content')

<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-10 my-4"><h2 class="mb-4"> List Users </h2>
            <table class="table align-items-center table-flush" id="user-table">
                <thead class="thead-light">
                    <tr>
                        <th scope="col">       id        </th>
                        <th scope="col">       name      </th>
                        <th scope="col">       phone     </th>
                        <th scope="col">       email     </th>
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
            $("#user-table").DataTable({
                processing: true,
                serverSide: true,
                "JQueryUI": true,
                ajax: '{!! route('datatable-user') !!}',
                columns: [
                    {data: 'id', name: 'id'},
                    {data: 'name', name: 'name'},
                    {data: 'phone', name: 'phone'},
                    {data: 'email', name: 'email'}
                ]
            });
       });

   </script>
@endsection
