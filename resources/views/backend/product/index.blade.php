@extends('layouts.master_backend')
@section('content')

<div class="container-xxl flex-grow-1 container-p-y">
                        <div class="card">
                            <h5 class="card-header">Product</h5>
                            <div class="table-responsive text-nowrap">
                                <a href="{{ route('p.create') }}" class="btn btn-success mx-3"><i class='bx bxs-plus-circle'></i> เพิ่มข้อมูล</a>
                              <table class="table mt-4">
                                <thead class="table-dark">
                                  <tr>
                                    <th>No</th>
                                    <th>Name</th>
                                    <th>category</th>
                                    <th>images</th>
                                    <th>Price</th>
                                    <th>Description</th>
                                    <th>Created_at</th>
                                    <th>Updated_at</th>
                                    <th>Actions</th>
                                  </tr>
                                </thead>
                                <tbody class="table-border-bottom-0">
                                @foreach ($products as $pro)
                                  <tr>
                                  <td>{{$products->firstItem() + $loop->index}}</td>
                                  <td>{{$pro->category->name}}</td>
                                <td>
                                    <td>{{ $pro->category->name }}</td>
                                <img src = "{{ asset('backend/product/resize/'.$pro->image) }}" >
                                </td>
                                  <td>{{$pro->price}}</td>
                                  <td>{{$pro->description}}</td>
                                  <td>{{$pro->created_at}}</td>
                                  <td>{{$pro->updated_at}}</td>
                                  <td></td>
                                  <td></td>
                                  <td>
                                  <a href="{{ url('admin/product/edit/'.$pro->product_id) }}" class="btn btn-success">แก้ไข</a>
                                  <a href="{{ url('admin/product/delete/'.$pro->product_id) }}" class="btn btn-danger">ลบ</a>
                                  </td>
                                  </tr>
                                  @endforeach
                                </tbody>
                              </table>
                            </div>
                          </div>
                        </div>
@endsection
