<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Edit Product</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" >
</head>
<body>
<div class="container mt-2">
<div class="row">
<div class="col-lg-12 margin-tb">
<div class="pull-left">
<h2>Edit Product</h2>
</div>
    <div class="pull-right">
    <a class="btn btn-primary" href="{{ route('Product.index') }}" enctype="multipart/form-data"> Back</a>
    </div>
</div>
</div>
@if(session('status'))
<div class="alert alert-success mb-1 mt-1">
{{ session('status') }}
</div>
@endif
<form action="{{ route('Product.update',$Product->id) }}" method="POST" enctype="multipart/form-data">
@csrf
@method('PUT')

<div class="row">
<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
    <strong>Product Name:</strong>
        <input type="text" name="name" value="{{ $Product->name }}" class="form-control" placeholder="Product name">
        @error('name')
        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
        @enderror
</div>
</div>
<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
<strong>Disc:</strong>
<input type="text" name="text" class="form-control" placeholder="Description" value="{{ $Product->disc }}">
        @error('Description')
        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
        @enderror
</div>
</div>
<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
<strong>Price:</strong>
<input type="text" name="address" value="{{ $Product->Price }}" class="form-control" placeholder="Price">
        @error('Price')
        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
        @enderror
</div>
</div>

<strong>User_Price:</strong>
<input type="text" name="Price" value="{{ $Product->user_price }}" class="form-control" placeholder="User_price">
        @error('User_price')
        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
        @enderror

<button type="submit" class="btn btn-primary ml-3">Submit</button>
</div>
</form>
</div>
</body>
</html>