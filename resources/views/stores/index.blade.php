@extends('stores.layout')
 
@section('content')
    <div class="row" style="margin-top: 5rem;">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>store curd</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('stores.create') }}"> Create New stores</a>
            </div>
        </div>
    </div>
   
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
   
    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Name</th>
            <th>Address</th>
            <th>City</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($stores as $store)
        <tr>
            {{-- <td>{{ ++$i }}</td> --}}
            <td>{{ $store->name }}</td>
            <td>{{ $store->Address }}</td>
            <td>{{ $store->City }}</td>
            {{-- <td>{{ \Str::limit($value->description, 100) }}</td> --}}
            <td>
                <form action="{{ route('stores.destroy',$store->id) }}" method="POST">   
                    <a class="btn btn-info" href="{{ route('stores.show',$store->id) }}">Show</a>    
                    <a class="btn btn-primary" href="{{ route('stores.edit',$store->id) }}">Edit</a>   
                    @csrf
                    @method('DELETE')      
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>  
    {{-- {!! $stores->links() !!}       --}}
@endsection