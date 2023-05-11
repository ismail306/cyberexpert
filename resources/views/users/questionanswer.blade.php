<x-users.layouts.master>
    <br>
    <br>
    <x-slot:title>
        Q&A | Forum
        </x-slot>

        <div class="container">



            <!-- Inner main -->
            <div class="">


                <!-- Inner main body -->

                <!-- Forum List -->
                <div class="inner-main-body p-2 p-sm-3 collapse forum-content show">


                    <div class="card mb-2">
                        <form action="{{ route('question.store') }}" method="POST">
                            @csrf
                            <input type="text" hidden name="user_pk" value="{{isset(Auth::user()->id) ? Auth::user()->id : ''}}">
                            <div class="form-group">
                                <label for="question">
                                    <h2>What do you want to know ?</h2>
                                </label>
                                <br>
                                <textarea name="question" class="form-question" rows="2" id="question"></textarea>
                                <br>
                                <button type="submit" class="btn btn-primary">Post</button>
                            </div>

                        </form>
                    </div>



                    @foreach ($questions as $question)
                    <div class="card mb-2">
                        <div class="card-body p-2 p-sm-3">
                            <div class="media forum-item">
                                <a href="#" data-toggle="collapse" data-target=".forum-content"><i class="fa fa-question-circle pr-2" aria-hidden="true"></i>
                                </a>



                                <div class="media-body">
                                    <h6 class="mt-1">{{$question->question}}</h6>

                                    @foreach($question->answers as $answer)
                                    <div class="answer">
                                        @if(strlen($answer->answer) > 200)
                                        <p><i class="fa fa-reply" aria-hidden="true"></i>
                                            <span class="short-answer">{{substr($answer->answer,0,200)}}...</span>
                                            <span class="full-answer d-none">{{$answer->answer}}</span>
                                            <a class="read-more" href="#">Read more</a>
                                        </p>
                                        @else
                                        <p><i class="fa fa-reply" aria-hidden="true"></i> {{$answer->answer}} </p>
                                        @endif
                                        <p class="text-dark">
                                            <b>{{$answer->created_at->diffForHumans();}}</b>
                                        </p>
                                        <div class="row">
                                            @if(Auth::id() == $answer->user_pk)
                                            <a type="button" class="btn btn-outline-primary ml-2 update" data-toggle="modal" data-target="#update" data-answer="{{$answer->answer}}" data-id="{{$answer->id}}" onclick="update(this)">
                                                Update
                                            </a>
                                            <form action="{{ route('answer.delete', $answer->id) }}" method="POST" class="d-inline-block">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-outline-danger ml-2">Delete</button>
                                            </form>
                                            @endif
                                        </div>
                                    </div>
                                    @endforeach
                                </div>


                            </div>








                            <div class=" small text-center ">


                                <a type="button" class="btn btn-outline-dark" href="#">
                                    <span><i class="far fa-comment ml-2"></i> {{$question->answers->count()}}</span>
                                </a>
                                <a type="submit" onclick="answer(this)" class="btn btn-outline-primary answer" href="#" data-toggle="modal" data-id="{{$question->id}}" data-question="{{$question->question}}" data-target="#answer">
                                    Answer
                                </a>
                            </div>



                        </div>
                        <div class="text-center mb-3">

                            @if(Auth::id() == $question->user_pk)

                            <form action="{{ route('question.delete', $question->id) }}" method="GET" class="d-inline-block">
                                @csrf
                                @method('DELETE')

                                <button type="submit" class="btn btn-outline-danger ">Delete Question</button>
                            </form>
                            @endif

                        </div>
                    </div>



                    @endforeach

                </div>

            </div>
            <!-- /Inner main -->

        </div>
        <div>

        </div>
        <!-- Body inner end -->
        </div>




        <script>
            let x = document.getElementsByClassName('answer');

            function answer(element) {
                const id = element.dataset.id;
                const qid = document.querySelector('#question_id_value');
                qid.value = id;


            }
        </script>


        <script>
            const readMoreLinks = document.querySelectorAll('.read-more');

            readMoreLinks.forEach(link => {
                link.addEventListener('click', e => {
                    e.preventDefault();
                    const shortAnswer = e.target.previousElementSibling;
                    const fullAnswer = shortAnswer.nextElementSibling;
                    const linkText = e.target.textContent;

                    if (fullAnswer.classList.contains('d-none')) {
                        fullAnswer.classList.remove('d-none');
                        shortAnswer.classList.add('d-none');
                        e.target.textContent = 'Show less';
                    } else {
                        fullAnswer.classList.add('d-none');
                        shortAnswer.classList.remove('d-none');
                        e.target.textContent = 'Read more';
                    }
                });
            });
        </script>

        <script>
            let y = document.getElementsByClassName('update');

            function update(element) {
                const id = element.dataset.id;
                const answer = element.dataset.answer;
                const answer_id = document.querySelector('#answer_id_value');
                const answer_value = document.querySelector('#answer_value');
                answer_id.value = id;
                answer_value.value = answer;

            }
        </script>


</x-users.layouts.master>