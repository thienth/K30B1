@extends('layouts.admin')
@php
	$title = $model->id > 0 ? "Cập nhật danh mục" : "Thêm mới danh mục";
@endphp
@section('title', $title)
@section('content')

	<form action="{{ route('cate.save') }}" method="post" class="col-sm-8 col-sm-offset-2">
		{{csrf_field()}}
		<input type="hidden" name="id" value="{{$model->id}}">
		<div class="form-group">
			<label for="">Tên danh mục</label>
			<input type="text" name="name" value="{{old('name', $model->name)}}" class="form-control">
			@if($errors)
				<span class="text-danger">{{$errors->first('name')}}</span>
			@endif
		</div>
		<div class="form-group">
			<label for="">Danh mục cha</label>
			<select name="parent_id" class="form-control">
				@foreach ($cates as $c)
					<option 
							value="{{$c->id}}"
							@if($model->id == $c->id) 
								selected 
							@endif
							>{{$c->name}}</option>
				@endforeach
			</select>
		</div>

		<div class="form-group text-center">
			<a href="{{ route('dashboard') }}" class="btn btn-sm btn-danger">Huỷ</a>
			<button type="submit" class="btn btn-sm btn-success">Gửi</button>
		</div>
	</form>
@endsection

