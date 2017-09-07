@extends('layouts.client.main')
@section('title', $pageTitle)

@section('content')
@php
	$newpeople = "duytd";
@endphp

{{$newpeople}}
<br>
<strong>Toi ten la: {!!$name!!}</strong> - <strong>Toi: {{$age}} tuoi</strong>
<table>
	@foreach($arr as $v)
		<tr>
			<td>{{$loop->depth}}</td>
			<td>{{$v['name']}}</td>
			<td>
				{{$v['age']}} 
				@if($v['age'] < 18)
					<strong>(Trẻ con)</strong>
				@else
					<strong>(Người cao tuổi)</strong>
				@endif
			</td>
		</tr>
	@endforeach
</table>
@endsection