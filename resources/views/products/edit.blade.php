@extends('products.layout')
   
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Edit Product</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('products.index') }}"> Back</a>
            </div>
        </div>
    </div>
   
    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
  
    <form action="{{ route('products.update',$product->id) }}" method="POST">
        @csrf
        @method('PUT')
   
         <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Name:</strong>
                    <input type="text" name="name" value="{{ $product->name }}" class="form-control" placeholder="Name">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Disc:</strong>
                    <textarea class="form-control" style="height:150px" name="detail" placeholder="Disc">{{ $product->disc }}</textarea>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Price:</strong>
                    <textarea class="form-control" style="height:150px" name="detail" placeholder="Price">{{ $product->price }}</textarea>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>User_Price:</strong>
                    <textarea class="form-control" style="height:150px" name="detail" placeholder="User_Price">{{ $product->user_price }}</textarea>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
              <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
   
    </form>
@endsection
{{-- @extends('layout')

@section('content')
<style>
  .uper {
    margin-top: 40px;
  }
</style>
<div class="card uper">
  <div class="card-header">
    Edit Product Data
  </div>
  <div class="card-body">
    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br />
    @endif
      <form method="post" action="{{ route('Products.update', $game->id ) }}">
          <div class="form-group">
              @csrf
              @method('PATCH')
              <label for="country_name"> Name:</label>
              <input type="text" class="form-control" name="name" value="{{ $Product->name }}"/>
          </div>
          <div class="form-group">
              <label for="cases">Disc:</label>
              <input type="text" class="form-control" name="price" value="{{ $Product->Disc  }}"/>
          </div>
          <div class="form-group">
            <label for="cases">Price:</label>
            <input type="text" class="form-control" name="price" value="{{ $Product->Price  }}"/>
        </div>

        <div class="form-group">
            <label for="cases">User_Price:</label>
            <input type="text" class="form-control" name="price" value="{{ $Product->User_Price  }}"/>
        </div>
          <button type="submit" class="btn btn-primary">Update Data</button>
      </form>
  </div>
</div>
@endsection --}}