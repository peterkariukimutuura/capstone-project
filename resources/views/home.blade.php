@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
     @include('flash-message')
    </div>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Welcome {{Auth::user()->name}}  to your tod list manager.
                    
               </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div class="row">
                        @if($todos->count() > 0)
                        <table class="table table-striped">
                            <thead>
                                <th colspan="2">Todos</th>
                                <th>Created</th>
                                <th>Action</th>
                            </thead>
                            @foreach($todos as $todo)
                            <tr>
                                <td colspan="2">{{$todo->name}}</td>
                                <td>{{$todo->created_at->diffForHumans()}}</td>
                                <td><a href="/todo/delete/{{$todo->id}}">Delete</a></td>
                            </tr>
                            @endforeach
                        </table>
                        <hr>
                        <a class="nav-link text-center"  href="{{route('todo')}}">Add More Todo</a>
                        @else
                        <div class="alert alert-info text-center" style="width: 100%;">
                            You have not added any Todos! 
                        </div>
                        <a class="nav-link text-center"  href="{{route('todo')}}">Click to add Todo</a>
                        @endif
                    </div>
                </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
