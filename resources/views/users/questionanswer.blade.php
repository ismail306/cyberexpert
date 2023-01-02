<x-users.layouts.master>
    <br>
    <br>

    <div class="container">



        <!-- Inner main -->
        <div class="">


            <!-- Inner main body -->

            <!-- Forum List -->
            <div class="inner-main-body p-2 p-sm-3 collapse forum-content show">
                @if(Auth::user())

                <div class="card mb-2">
                    <form action="{{ route('question.store') }}" method="POST">
                        @csrf
                        <input type="text" hidden name="user_pk" value="{{Auth::user()->id}}">
                        <div class="form-group">
                            <label for="question">
                                <h2>What Is Your Question ?</h2>
                            </label>
                            <br>
                            <textarea name="question" class="form-question" rows="2" id="question"></textarea>
                            <br>
                            <button type="submit" class="btn btn-dark">Post</button>
                        </div>

                    </form>
                </div>
                @else
                <h4>If you want to ask any question please <a href="#" class="text-info" data-toggle="modal" data-target="#login"> Sign In </a> first.</h4>


                @endif


                @foreach ($questions as $question)
                <div class="card mb-2">
                    <div class="card-body p-2 p-sm-3">
                        <div class="media forum-item">
                            <a href="#" data-toggle="collapse" data-target=".forum-content"><img src="https://bootdey.com/img/Content/avatar/avatar1.png" class="mr-3 rounded-circle" width="50" alt="User" /></a>


                            <div class="media-body">
                                <h6>{{$question->question}}</h6>


                                @foreach($question->answers as $answer)
                                <p class="text-dark">
                                    {{$answer->answer}}

                                    <br>
                                    <b> {{$answer->created_at->diffForHumans();}}</b>



                                </p>




                                <!-- update modal Start -->

                                <div class="modal fade" id="update" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">

                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">

                                                <div class="contact-box ">

                                                    <h2 class="text-uppercase text-center mb-5">Update this Answer</h2>
                                                    @if(Auth::user())

                                                    <form action="{{ route('answer.edit', $answer->id) }}" method="POST">
                                                        @csrf

                                                        <input type="text" name="user_pk" value="{{Auth::user()->id}}">
                                                        <input type="text" id="answer_id_value" name="answer_id">


                                                        <div class="form-group text-dark">
                                                            <label class="text-dark" for="message"></label>
                                                            <br>
                                                            <textarea class="form-message" id="answer_value" name="answer"></textarea>
                                                        </div>

                                                        <button class="btn btn-primary btn-design" type="submit">Update </button>

                                                    </form>
                                                    @endif
                                                </div>

                                            </div>
                                            <div class="modal-footer">
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-design btn-primary" data-dismiss="modal">Close</button>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Update Modal End -->






                                <div class="row"> @if(Auth::id() == $answer->user_pk)
                                    <a type="button" class="btn btn-outline-primary ml-2 update" data-toggle="modal" data-target="#update" data-answer="{{$answer->answer}}" data-id="{{$answer->id}}" onclick="update(this)">
                                        {{$question->id}} Update
                                    </a>



                                    <form action="{{ route('answer.delete', $answer->id) }}" method="GET" class="d-inline-block">
                                        @csrf
                                        @method('DELETE')

                                        <button type="submit" class="btn btn-outline-danger ml-2">Delete</button>
                                    </form>
                                    @endif
                                </div>


                                @endforeach
                            </div>


                        </div>









                        <div class=" small text-center ">

                            <a type="button" class="btn btn-outline-dark" href="#">
                                <span><i class="far fa-comment ml-2"></i> {{$question->answers->count()}}</span>
                            </a>
                            <a type="submit" onclick="answer(this)" class="btn btn-outline-dark answer" href="#" data-toggle="modal" data-id="{{$question->id}}" data-question="{{$question->question}}" data-target="#answer">
                                Answer
                            </a>
                        </div>



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