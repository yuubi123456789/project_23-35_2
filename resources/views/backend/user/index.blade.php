@extends('layouts.master_backend')
@section('content')
<div class="container-fluid">

<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">User</h1>
<p class="mb-4"><a target="_blank"
        href="https://datatables.net"></a>.</p>

<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">User</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                <tr>
                                    <th>No</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Phone</th>
                                    <th>Status</th>
                                    <th>Actions</th>
                                  
                                </thead>
                                <tbody class="table-border-bottom-0">
                                    @foreach ($user as $u)
                                  <tr>
                                  <td>{{ $u->id}}</td>
                                  <td>{{ $u->name}}</td>
                                  <td>{{ $u->email}}</td>
                                  <td>{{ $u->phone}}</td>
                                  <td>admin</td>
                                  <td>
                                  <a href="" class="btn btn-success">แก้ไข</a>
                                  <a href="" class="btn btn-danger">ลบ</a>
                                  </td>
                                  </tr>
                                  @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

</div>

@endsection