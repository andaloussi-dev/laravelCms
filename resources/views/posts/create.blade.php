@extends('layouts.app')

@section('content')
    <div class="card card-default">
        <div class="card card-header">
            Create Post
        </div>
        <div class="card card-body">
            <form action="{{route('posts.store')}}" method="POST" enctype="multipart/form-data">
                @csrf
               <!--  Input with label-->
              <div class="input-group mb-3"> 
               <div class="input-group-prepend">
                  <span class="input-group-text" id="inputGroup-sizing-default">Title</span>
                </div>
                <input  type="text" name="title" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default">
              </div>
               <!--  Input with label-->
              <div class="input-group mb-3"> 
              <div class="input-group-prepend">
              <span class="input-group-text" id="inputGroup-sizing-default">Descreption</span>
              </div>
              <textarea  name="description" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default"></textarea>
              </div>

               <!--  Input with label-->
              <div class="input-group mb-3"> 
              <div class="input-group-prepend">
              <span class="input-group-text" id="inputGroup-sizing-default">Content</span>
              </div>
              <textarea   name="body" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default"></textarea>
              </div>
              
               <!--  Input with label-->
              <div class="input-group mb-3"> 
              <div class="input-group-prepend">
              <span class="input-group-text" id="inputGroup-sizing-default">Image</span>
              </div>
              <input  type="file" name="image" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default">
              </div>
              
              <div class="input-group mb-3">
               <button type="submit" class="btn btn-success">Add post</button>
              </div>
            </form>
        </div>
    </div>
@endsection