@extends('questions.layout')

@section('content')
@include('errors')

<form action="{{ action('QuestionController@store') }}" method="post">
FORM

{{ csrf_field() }}
<div class="form-group prl-5">
{!! Form::label('title', 'Title ofquestion') !!}
{!! Form::text('title', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group prl-5">
{!! Form::label('text', 'Text') !!}
{!! Form::textarea('text', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group prl-5">
{!! Form::submit('Save') !!}
</div>

</form>

@endsection