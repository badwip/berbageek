@extends('layouts/default')

@section('content')

	<h1>Tuliskan Pertanyaan Anda</h1>

	{{ Form::open(['route' => 'tanya.show']) }}
	<div>
		{{ Form::textarea('ask', null, ['class' => 'input']) }}
	</div>

	<div>
		{{ Form::submit('Submit') }}
	</div>
	{{ Form::close() }}
	
@stop