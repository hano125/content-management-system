@extends('layouts.app')
@section('content')
    <div class="container-sm" style="max-width: 720px">

        @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
        @endif
        <div class="card">
            <h5 class="card-header">Craete Categories</h5>
            <div class="card-body">
                <form method="post"  action="{{route('categories.update',$categories->id)}}">
                    @csrf
                    @method('PUT')
                    <!--Title -->
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Enter Name</label>
                        <input type="text"  name="name" value="{{$categories->name}}" class="form-control" id="exampleFormControlInput1" placeholder="Enter Name">
                        @error('name')
                        <span class="invalid-feedback"  role="alert">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <button type="submit" class="btn btn-outline-success w-100">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
