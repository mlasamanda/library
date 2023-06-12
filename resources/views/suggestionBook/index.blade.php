@extends('customer')
@section('content')
<div class="container mt-2">
<div class="row">
<div class="col-lg-12 margin-tb">
<div class="pull-left">
<h2>Book Store</h2>
</div>
<div class="pull-right mb-2">
<a class="btn btn-success" href="{{ route('sugg.create') }}">Suggest new book </a>
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
<th>S/N</th>
<th>Name of Book</th>
<th>Author of author</th>
<th>Year of Publisher</th>
<th width="280px">Action</th>
</tr>
</table>
{!! $students->links() !!}
@endsection
