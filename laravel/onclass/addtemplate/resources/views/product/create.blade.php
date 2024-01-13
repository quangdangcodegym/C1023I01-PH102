@extends('layout.layout')

@section('main-content')
    <div class="container row">
        <form class="col-6 offset-2" method="POST" action="{{ route('admin.product.saveProduct') }}">
            @csrf
            <div class="form-group">
                <label class="form-label">Name: </label>
                <input value="{{ old('name') }}" name="name" type="text" class="form-control"
                    placeholder="Enter fullname" />
                @error('name')
                    <div class="form-error"> {{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label class="form-label">Price: </label>
                <input value="{{ old('price') }}" name="price" type="number" class="form-control"
                    placeholder="Enter price" />
                @error('price')
                    <div class="form-error"> {{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label class="form-label">Image: </label>
                <input value="{{ old('img_url') }}" name="img_url" type="text" class="form-control"
                    placeholder="Enter image" />
                @error('img_url')
                    <div class="form-error"> {{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label class="form-label">Image: </label>
                <select class="form-control" name="category_id">
                    @foreach ($categories as $cate)
                        <option value="{{ $cate->id }}" {{ old('category_id') == $cate->id ? 'checked' : '' }}>
                            {{ $cate->name }}</option>
                    @endforeach
                </select>
                @error('category_id')
                    <div class="form-error"> {{ $message }}</div>
                @enderror
            </div>
            <div>
                <button class="btn btn-primary">Save</button>
                <button class="btn btn-dark">Cancel</button>
            </div>
        </form>
    </div>
@endsection
