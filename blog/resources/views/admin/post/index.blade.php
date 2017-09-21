@extends('layouts.admin')
@section('title', "Quản lý danh mục")
@section('content')
	<form action="{{ route('post.index') }}" method="get" class="col-xs-10 col-sm-4">
		<div class="form-group">
			<label for="">Tìm kiếm</label>
			<input type="text" name="keyword" value="{{$keyword}}" placeholder="Tìm kiếm" class="form-control">
			<button type="submit" class="btn btn-sm">
				<i class="fa fa-search"></i>
			</button>
		</div>
	</form>
	<table class="table table-striped">
		<thead>
			<th>#</th>
			<th>Ảnh</th>
			<th>Tiêu đề</th>
			<th>Danh mục</th>
			<th>
				<a href="{{route('post.add')}}" class="btn btn-sm btn-success">
					<i class="fa fa-plus"></i> Tạo mới
				</a>
			</th>
		</thead>
		<tbody>
			@foreach ($posts as $p)
				<tr>
					<td>{{$p->id}}</td>
					<td>{{$p->feature_image}}</td>
					<td>{{$p->title}}</td>
					<td>
						{{$p->getCateName()}}
					</td>
					<td>
						<a href="{{ route('cate.edit', ['id' => $p->id]) }}" class="btn btn-info btn-sm">Edit</a>
						<a href="{{ route('cate.remove', ['id' => $p->id]) }}" class="btn btn-danger btn-sm">Remove</a>
					</td>
				</tr>
			@endforeach
			<tr>
				<td colspan="6" class="text-right">
					{{$posts->links()}}
				</td>
			</tr>
			
		</tbody>
	</table>
@endsection

