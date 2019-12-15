@extends('layouts.app')
@section('content')
<div class="d-flex justify-content-end">
        <a href="categories/create" class="btn btn-success float-right"> Add categorie</a>
</div>
   <div class="card card-default">
       <div class="card-header">
           Categories
       </div>

       <div class="card-body">
           
           <table class="table  table-striped table-dark">
               <tr>
                   <th> Name</th>
               </tr>

               @foreach ($categories as $category)
               <tr>
                   <td>
                       {{$category->name}}
                       <a href="{{ route('categories.edit', $category->id) }}" class="btn btn-secondary float-right">Edit</a>
                   </td>
               </tr>
           @endforeach
           </table>
             
           
       </div>
   </div>
@endsection