{!! Form::open(array('route' => 'route.name', 'method' => 'POST')) !!}
	<ul>
		<li>
			{!! Form::label('name', 'Name:') !!}
			{!! Form::text('name') !!}
		</li>
		<li>
			{!! Form::label('profession', 'Profession:') !!}
			{!! Form::text('profession') !!}
		</li>
		<li>
			{!! Form::label('picture', 'Picture:') !!}
			{!! Form::text('picture') !!}
		</li>
		<li>
			{!! Form::label('opinion', 'Opinion:') !!}
			{!! Form::textarea('opinion') !!}
		</li>
		<li>
			{!! Form::submit() !!}
		</li>
	</ul>
{!! Form::close() !!}