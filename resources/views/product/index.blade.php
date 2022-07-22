<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Product</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" >
</head>
<body>
<div class="container mt-2">
<div class="row">
<div class="col-lg-12 margin-tb">
<div class="pull-left">

</div>
<div class="pull-right mb-2">
<a class="btn btn-success" href="{{ route('Product.create') }}"> Create Company</a>
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
    <th>S.No</th>
    <th> Name</th>
    <th>Disc</th>
    <th>Price</th>
    <th>User_Price</th>
    <th width="280px">Action</th>
</tr>
@foreach ($products as $product)
<tr>
    <td>{{ $product->id }}</td>
    <td>{{ $product->name }}</td>
    <td>{{ $product->Disc }}</td>
    <td>{{ $product->Price}}</td>
    <td>{{ $product->User_price}}</td>
<td>
    <form action="{{ route('Product.destroy',$product->id) }}" method="Post">
    <a class="btn btn-primary" href="{{ route('Product.edit',$Product->id) }}">Edit</a>
    @csrf
    @method('DELETE')
    <button type="submit" class="btn btn-danger">Delete</button>
    </form>
</td>
</tr>
@endforeach
</table>
{!! $Product->links() !!}
</body>
</html>