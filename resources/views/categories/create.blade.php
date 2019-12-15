@extends('layouts.app')
@section('content')

   <div class="card card-default">
       <div class="card-header">
           {{isset($category)?'Edit Category':'Create Category'}}
       </div>
       <div class="card-body">
       <form action="{{isset($category)?route('categories.update',$category->id):route('categories.store')}}" method="POST">
        @csrf
        @if (isset($category))
        @method('PUT')
        @endif
        
        @if ($errors->any())
            @foreach ($errors->all() as $error)
            <p class="text-danger">{{$error}}</p>
            @endforeach
        @endif
             <!--  Input with label-->
            <div class="input-group mb-3"> 
             <div class="input-group-prepend">
                <span class="input-group-text" id="inputGroup-sizing-default">name</span>
              </div>
            <input value="{{isset($category)?$category->name:''}}" type="text" name="name" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default">
            </div>
             <!-- Submit button-->
            <div class="input-group mb-3">
            <button class="btn btn-success">{{isset($category)?'Update Category':'Add categorie'}}</button>
            </div>
          </form>
       </div>
   </div>
@endsection