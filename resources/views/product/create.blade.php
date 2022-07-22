<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Add Product</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" >
</head>
<body>
<div class="container mt-2">
<div class="row">
<div class="col-lg-12 margin-tb">
<div class="pull-left mb-2">
<h2>Add Product</h2>
</div>
<div class="pull-right">
<a class="btn btn-primary" href="{{ route('product.index') }}"> Back</a>
</div>
</div>
</div>
    @if(session('status'))
        <div class="alert alert-success mb-1 mt-1">
            {{ session('status') }}
        </div>
    @endif
<form action="{{ route('product.store') }}" method="POST" enctype="multipart/form-data">
@csrf
<div class="row">

<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
    <strong>Name:</strong>
    <input type="text" name="name" class="form-control" placeholder=" Name">
            {{-- @error('name')
            <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
            @enderror --}}
</div>
</div>



<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
<strong>Disc:</strong>
    <input type="text" name="disc" class="form-control" placeholder="Disc">
        {{-- @error('disc')
        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
        @enderror --}}
</div>
</div>

<div class="col-xs-12 col-sm-12 col-md-12">
    <div class="form-group">
        <strong>Price:</strong>
        <input type="Price" name="Price" class="form-control" placeholder="Price">
                {{-- @error('Price')
                <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                @enderror --}}
    </div>
    </div>

<strong>User_Price:</strong>
    <input type="text" name="User_price" class="form-control" placeholder="User_price">
        {{-- @error('User_price')
        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
        @enderror --}}
</div>
</div>
        <button type="submit" class="btn btn-primary ml-3">Submit</button>
</div>
</form>
</body>
</html>