@extends('layouts.master_backend')
@section('content')

<div class="container-xxl flex-grow-1 container-p-y">
                        <div class="row">
                            <div class="col-md-12">
                              <div class="card mb-9">
                                <h5 class="card-header">Edit Product</h5>
                                <div class="card-body">

                                <form action="{{ url('admin/product/updete/.$pro->product_id') }}" method="post" enctype="multipart/form-data">
                                  @csrf
                                  <div>
                                    <label for="defaultFormControlInput" class="form-label">Name</label>
                                    <select name="_id" class="form-select" id="exampleFormControlSelect1" aria-label="Default select example">
                                        <option selected>กรุณาเลือกประเภทสินค้า</option>
                                        @foreach ($product as $pro)
                                        <option value="{{$pro->product_id}}"
                                        @if($c->product_id == $pro->product_id)
                                        selected
                                        @endif>
                                        {{ $c->name }}
                                        </option>
                                        @endforeach
                                      </select>

                                      type="text"
                                      name="name"
                                      class="form-control"
                                      id="defaultFormControlInput"
                                      placeholder="กรุณากรอกชื่อสินค้า"
                                      aria-describedby="defaultFormControlHelp"
                                    />
                                    @error('name')
                                  </div class="alert alert-danger">{{ $message }}</div>
                                  @enderror
                                </div>

                                    <label for="defaultFormControlInput" class="form-label">Price</label>
                                    <input
                                      type="text"
                                      name="price"
                                      class="form-control"
                                      id="defaultFormControlInput"
                                      placeholder="กรุณากรอกราคาสินค้า"
                                      aria-describedby="defaultFormControlHelp"
                                    />

                                    <label for="defaultFormControlInput" class="form-label">Description</label>
                                    <input
                                      type="text"
                                      name="description"
                                      value="{{ $pro->name }}"
                                      class="form-control"
                                      id="defaultFormControlInput"
                                      placeholder="กรุณากรอกรายละเอียดสินค้า"
                                      aria-describedby="defaultFormControlHelp"
                                    />
                                    <label for="defaultFormControlInput" class="form-label">Images</label>
                                      <div class="input-group">
                                        <input type="file" name="image" class="form-control" id="inputGroupFile02" />
                                        <label class="input-group-text" for="inputGroupFile02">Upload</label>
                                      </div>

                                    <input type="submit" value="บันทึก" class="btn btn-primary mt-3 mx-2">
                                    <a href="{{ route('p.create') }}" class="btn btn-danger mt-3 mx-2">ย้อนกลับ</a>
                                  </div>
                                </form>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>

@endsection
@extends('layouts.master_backend')
@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
                        <div class="row">
                            <div class="col-md-12">
                              <div class="card mb-9">
                                <h5 class="card-header">product</h5>
                                <div class="card-body">
                                  <form method="POST"action="{{ url('admin/product/update/'.$pro->product_id) }}">
                                    @csrf
                                  <div>
                                    <label for="defaultFormControlInput" class="form-label">Name</label>
                                    <input
                                      type="text"
                                      value="{{$pro->name}}"
                                      name="name"
                                      class="form-control"
                                      id="defaultFormControlInput"
                                      placeholder="กรุณากรอกประเภทสินค้า"
                                      aria-describedby="defaultFormControlHelp"
                                    />
                                    <div class="mt-3">
                                    @error('name')
                                  <div class="alert alert-danger">{{ $message }}</div>
                                     @enderror
                                     </div>
                                    <input type="submit"value="อัพเดทข้อมูล"class="btn btn-primary mt-3 mx-2">
                                    <a href="{{ route('c.index') }}" class="btn btn-danger mt-3 mx-2">ย้อนกลับ</a>
                                  </div>
                                  </form>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
@endsection
