@extends ('questions.layout')

@section('content')
    
<section id="banner">
    <div class="container">
        <h1>Questions</h1>
    </div>
</section>

<section id="questions">

    <div class="container">
 
    @foreach($question as $question)
        <div class="question">
            <div class="question-left">
                <div class="question-stat">
                    <span>3</span>
                    <label>responses</label>
                </div>
                <div class="question-stat">
                    <span>5</span>
                    <label>votes</label>
                </div>
            </div>
            <div class="question-right">
                <div class="question-name">
                    <a href="{{route('show question',['id' => $question->id])}}">{{ $question->title }}</a>
                </div>
                <div class="question-info">
                    asked at {{ $question->created_at }} by <a href="">{{ $question->user_id }}</a>
                </div>
            </div>
        </div>

        @endforeach

    </div>
</section>


@endsection