@extends('layouts.master_backend')
@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
                        <div class="row">
                            <div class="col-md-12">
                              <div class="card mb-9">
                                <h5 class="card-header">Edit Category</h5>
                                <div class="card-body">
                                  <form method="POST"action="{{ url('admin/category/update/'.$cat->category_id) }}">
                                    @csrf
                                  <div>
                                    <label for="defaultFormControlInput" class="form-label">Name</label>
                                    <input
                                      type="text"
                                      value="{{$cat->name}}"
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
