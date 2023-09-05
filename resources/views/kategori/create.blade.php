@extends('layouts.admin')

@section('content')
<div class="main-panel">
    <div class="content">
        <div class="panel-header bg-primary-gradient">
            <div class="page-inner py-5">
                <div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card full-height">
                    <div class="card-header">
                        <div class="card-head-row">
                            <div class="card-title">Tambah Kategori</div>
                            <a href="{{ route ('kategori.index') }}" class="btn btn-warning btn-sm ml-auto" style="border-radius: 100px"><i class="ri-arrow-go-back-line"></i>
                                Back</a>
                        </div>
                    </div>
                <form method="POST" action="{{ route ('kategori.store') }}">
                     @csrf
                    <div class="card-body">
                            <div class="form-group">
                                <label for="Kategori">Nama_Kategori</label>
                                <input type="text"  name="nama_kategori"  class="form-control" id="text" placeholder="Enter Kategori">
                            </div>
                            <div class="card-footer">
                                 <button type="submit" class="btn btn-primary" style="border-radius: 100px">Save</button>
                            </div>
                    </div>
                </form>
                                  <!-- /.card -->
                        <!-- /.content -->
                      </div>
                </div>
            </div>
        </div>
@endsection
