@extends('admin.templates.default')

@section('title', 'Create Category')
    
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card card-primary">

                <div class="card-header">
                    <h3 class="card-title">Create Product</h3>
                </div>

                <form action="{{ route('admin.products.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <div class="card-body">
                        <div class="form-group">
                            <label for="">Product Name</label>
                            <input type="text" name="name" class="form-control @error('name') is-invalid       @enderror" placeholder="Enter Category Name" value="{{ old('name')}}">

                            @error('name')
                            <span class="invalid-feedback">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="">Product description</label>
                            <textarea name="description" id="descriprtion" rows="4" class="form-control @error('description') is-invalid       @enderror" placeholder="Product description">{{ old('description') }}</textarea>

                            @error('description')
                            <span class="invalid-feedback">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="">Product Image</label>
                            <input type="file" name="image" class="form-control @error('image') is-invalid       @enderror" placeholder="Enter product image" value="{{ old('image')}}">

                            @error('image')
                            <span class="invalid-feedback">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="">Product Category</label>
                            <select name="categories[]" id="" class="form-control select2bs4" multiple>
                                @foreach ($categories as $category)
                                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                                @endforeach
                            </select>

                            @error('categories')
                            <span class="invalid-feedback">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="">Product Price</label>
                            <input type="text" name="price" class="form-control @error('price') is-invalid       @enderror" placeholder="Enter Product price" value="{{ old('price')}}">

                            @error('price')
                            <span class="invalid-feedback">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="">Product qty</label>
                            <input type="text" name="qty" class="form-control @error('qty') is-invalid       @enderror" placeholder="Enter Product qty" value="{{ old('qty')}}">

                            @error('qty')
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

@push('styles')
    <link rel="stylesheet" href="{{ asset('assets/plugins/select2/css/select2.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css') }}">
@endpush

@push('scripts')
    <script src="{{ asset('assets/plugins/select2/js/select2.full.min.js') }}"></script>
    <script>
        $(function() {
            $('.select2bs4').select2({
                theme: 'bootstrap4'
            })
        })
    </script>
@endpush 