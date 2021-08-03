@extends('layouts.app')
<style>
    div.dataTables_wrapper div.dataTables_paginate
    {
        padding-top: 35px;
    }
</style>
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                <table class="table table-bordered data-table">
        <thead>
            <tr>
                <th>No</th>
                <th>Name</th>

            </tr>
        </thead>
        <tbody>
        </tbody>
    </table>
                </div>
            </div>
        </div>
    </div>
<script type="text/javascript">
  $(function () {

    var table = $('.data-table').DataTable({
        processing: true,
        serverSide: true,
        ajax: "{{ route('product.index') }}",
        columns: [
            {data: 'DT_RowIndex', name: 'DT_RowIndex'},
            {data: 'name', name: 'name'},


        ]
    });

  });
</script>
</div>
@endsection
