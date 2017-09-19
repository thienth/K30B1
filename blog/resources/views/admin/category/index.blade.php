@extends('layouts.admin')
@section('title', "Quản lý danh mục")
@section('content')

	<table class="table table-striped">
		<thead>
			<th>#</th>
			<th>Tên danh mục</th>
			<th>Danh mục gốc</th>
			<th>
				<a href="{{route('cate.add')}}" class="btn btn-sm btn-success">
					<i class="fa fa-plus"></i> Tạo mới
				</a>
			</th>
		</thead>
		<tbody>
			@foreach ($cates as $c)
				<tr>
					<td>{{$loop->index+1}}</td>
					<td>{{$c->name}}</td>
					<td>
						@if($c->is_major == 1) 
							<i class="fa fa-check"></i>
						@endif
					</td>
					<td>
						<a href="{{ route('cate.edit', ['id' => $c->id]) }}" class="btn btn-info btn-sm">Edit</a>
						<a href="{{ route('cate.remove', ['id' => $c->id]) }}" class="btn btn-danger btn-sm">Remove</a>
					</td>
				</tr>
			@endforeach
			
		</tbody>
	</table>
@endsection

