@extends('layouts.app')

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
                    {data: 'id'},
                    {data: 'name'},
                    {data: 'phone'},
                    {data: 'email'}
                ]
            });
       });

   </script>
@endsection
