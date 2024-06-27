{!! Form::open(array('route' => 'route.name', 'method' => 'POST')) !!}
	<ul>
		<li>
			{!! Form::label('title', 'Title:') !!}
			{!! Form::text('title') !!}
		</li>
		<li>
			{!! Form::label('body', 'Body:') !!}
			{!! Form::text('body') !!}
		</li>
		<li>
			{!! Form::label('author', 'Author:') !!}
			{!! Form::text('author') !!}
		</li>
		<li>
			{!! Form::submit() !!}
		</li>
	</ul>
{!! Form::close() !!}