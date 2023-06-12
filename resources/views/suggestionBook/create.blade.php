@extends('customer')
@section('content')
<div class="container mt-2">
<div class="row">
<div class="col-lg-12 margin-tb">
<div class="pull-left mb-2">
<h2>Add New Book</h2>
</div>
<div class="pull-right">
<a class="btn btn-primary" href="{{ route('sugg.index') }}"> Back</a>
</div>
</div>
</div>
@if(session('status'))
<div class="alert alert-success mb-1 mt-1">
{{ session('status') }}
</div>
@endif
<form action="{{ route('sugg.store') }}" method="POST" enctype="multipart/form-data">
@csrf
<div class="row">
<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
<strong>Name of Book:</strong>
<input type="text" name="name" class="form-control" placeholder="Enter the Name of book ">
@error('name')
<div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
@enderror
</div>
</div>
 
<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
<strong>Author of Book:</strong>
<input type="text" name="author" class="form-control" placeholder="Enter the author ">
@error('author')
<div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
@enderror
</div>
</div>
<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
<strong>Year of Publisher:</strong>
<input type="text" name="year" class="form-control" placeholder="Enter the year ">
@error('year')
<div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
@enderror
</div>
</div>
<button type="submit" class="btn btn-primary ml-3">Add User</button>
</div>
</div>
</form>
@endsection

