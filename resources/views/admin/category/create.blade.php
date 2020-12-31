@extends('admin.templates.default')

@section('title', 'Create Category')
    
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card card-primary">

                <div class="card-header">
                    <h3 class="card-title">Create Category</h3>
                </div>

                <form action="{{ route('admin.categories.store') }}" method="POST">
                    @csrf

                    <div class="card-body">
                        <div class="form-group">
                            <label for="">Category Name</label>
                            <input type="text" name="name" class="form-control @error('name') is-invalid       @enderror" placeholder="Enter Category Name" value="{{ old('name')}}">

                            @error('name')
                            <span class="invalid-feedback">{{ $message }}</span>
                            @enderror
                    </div>
                        </div>                     
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Tambahkan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection