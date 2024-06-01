@extends('layouts.app')
@section('content')
    <div class="container-sm" style="max-width: 720px">

    <div class="card">
        <h5 class="card-header">Craete Posts</h5>
        <div class="card-body">
           <form method="POST" enctype="multipart/form-data" action="{{route('posts.store')}}">
               @csrf
               <!--Title -->
               <div class="mb-3">
                   <label for="exampleFormControlInput1" class="form-label">Enter Title</label>
                   <input type="text"  name="title" class="form-control" id="exampleFormControlInput1" placeholder="Enter title">
                   @error('title')
                   <span class="invalid-feedback"  role="alert">{{ $message }}</span>
                   @enderror
               </div>
               <!--categories -->
               <div class="mb-3">
                   <select class="form-select" aria-label="Default select example">
                       <option selected>Select Category</option>
                       <option value="1">One</option>
                       <option value="2">Two</option>
                       <option value="3">Three</option>
                   </select>
                   @error('categories')
                   <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                   @enderror
               </div>
               <!--image upload -->
               <div class="mb-3">
                   <input class="form-control" type="file" name="image" id="formFile">
                   @error('image')
                   <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                   @enderror
               </div>
               <!--text area -->
               <div class="form-floating mb-3">
                   <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px"></textarea>
                   <label for="floatingTextarea2">Comments</label>
                   @error('content')
                   <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
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
