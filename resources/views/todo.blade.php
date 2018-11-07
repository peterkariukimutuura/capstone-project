@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
     @include('flash-message')
    </div>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">New Todo
               </div>

                <div class="card-body">
                 <form action="{{route('todo.add')}}" method="post">
                    {{csrf_field()}}
                     <div class="form-group">
                         <label for="name">Name</label>
                         <textarea name="name" class="form-control" style="resize: none;" required></textarea>
                     </div>
                     <div class="form-group">
                         <button type="submit" class="btn btn-primary">Submit</button>
                     </div>
                 </form>
                </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
