@extends('layout.master')

@section('title', 'blog belajar')

@section('content')

	<h1>selamat datang di blog ini</h1>
	<h2>{{$blog}}</h2>


	<?php foreach ($users as $userx): ?>
	<li> {{ $userx->username . ' ' .$userx->password }} </li>
		
	<?php endforeach ?>

	{!! $unescaped !!}

	@if(count($users)>1)
		<p>usernya lebih dari lima</p>
		@else
		<p>tidak lebih dari lima</p>
	@endif

@endsection


