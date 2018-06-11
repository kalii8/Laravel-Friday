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
                    <a href="{{route('show question',['id' => 1])}}">Title</a>
                </div>
                <div class="question-info">
                    asked at  by <a href="">slavo</a>
                </div>
            </div>
        </div>
@endforeach
         <div class="question">
            <div class="question-left">
                <div class="question-stat">
                    <span>7</span>
                    <label>responses</label>
                </div>
                <div class="question-stat">
                    <span>16</span>
                    <label>votes</label>
                </div>
            </div>
            <div class="question-right">
                <div class="question-name">
                    <a href="{{route('show question',['id' => 2])}}">I don't know how to Laravel????!!!?</a>
                </div>
                <div class="question-info">
                    asked at 2017-03-03 14:23:22 by <a href="">slavo</a>
                </div>
            </div>
        </div>

        <div class="question">
            <div class="question-left">
                <div class="question-stat">
                    <span>1</span>
                    <label>responses</label>
                </div>
                <div class="question-stat">
                    <span>14</span>
                    <label>votes</label>
                </div>
            </div>
            <div class="question-right">
                <div class="question-name">
                    <a href="{{route('show question',['id' => 3])}}">Is orange or lemon better for breakfast?</a>
                </div>
                <div class="question-info">
                    asked at 2017-03-03 14:23:22 by <a href="">slavo</a>
                </div>
            </div>
        </div>

    </div>
</section>


@endsection