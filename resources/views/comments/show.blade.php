@extends('layouts._master')
@section('content')
	<div class="row col-md-offset-1">
		<div class="well col-md-7">
			<h3><label>Name:</label>{{$comment->name}}</h3>
			<hr >
			<p class="lead"><label>Body:</label>{{$comment->body}}</p>
			<hr >
			<br />
			<img src="{{ asset('images/' . $comment->photo)}}" height="200" width="200"/>
		</div>
		<div class="col-md-4">
			<div class="well">
				<dl class="dl-horizontal">
					<label>Link:</label>
					<p>{{($comment->name)}}</p>
				</dl>					
				<label>Created At:</label>
					<p>{{ date('j M, Y h:ia',strtotime($comment->created_at)) }}</p>
				</dl>

				<dl class="dl-horizontal">
					<label>Last Updated:</label>
					<p>{{ date('j M, Y h:ia',strtotime($comment->updated_at)) }}</p>
				</dl>
				<hr>
				<div class="row">
					<div class="col-sm-6">
						{!! Html::linkRoute('comments.edit', 'Edit', array($comment->id), array('class' => 'btn btn-primary btn-block')) !!}
					</div>
					<div class="col-sm-6">
						{!! Form::open(['route'=>['comments.destroy', $comment->id], 'method'=>'DELETE'])!!}
						{!! Form::submit('Delete', ['class'=>'btn btn-danger btn-block'])!!}
						{!! Form::close()!!}
					</div>
				</div>
				<br />
				<div class="row">
					<div class="col-md-12">
						{{ Html::linkRoute('comments.index', '<< See all comments', [], ['class'=> 'btn btn-default btn-block btn-h1-spacing'])}}
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection