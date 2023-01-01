<x-users.layouts.master>
    <br>
    <br>

    <div class="container">
        <div class="main-body p-0">
            <div class="inner-wrapper">
                <!-- Inner sidebar -->

                <!-- /Inner sidebar -->

                <!-- Inner main -->
                <div class="inner-main">


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


                                        <div class="row"> @if(Auth::id() == $answer->user_pk)


                                            <a type="submit" class="btn btn-outline-success" href="#" data-toggle="modal" data-target="#update-{{$question->id, $question->question,$answer->answer.$answer->id }}  ">
                                                Update
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
                                <!-- Answer modal Start -->

                                <div class="modal fade" id="answer-{{$question->id , $question->question }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">

                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">

                                                <div class="contact-box ">

                                                    <h2 class="text-uppercase text-center mb-5">Answer this Question</h2>
                                                    @if(Auth::user())

                                                    <form action="{{ route('answer.store') }}" method="POST">
                                                        @csrf

                                                        <input type="text" hidden name="user_pk" value="{{Auth::user()->id}}">
                                                        <input type="text" hidden name="question_id" value="{{$question->id}}">



                                                        <div class="form-group text-dark">
                                                            <label class="text-dark" for="message">{{$question->question}}</label>
                                                            <br>
                                                            <textarea class="form-message" id="message" name="answer"></textarea>
                                                        </div>

                                                        <button class="btn btn-primary btn-design" type="submit"><i class="fa fa-reply"></i> </button>

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
                                <!-- Modal End -->

                                <!-- update modal Start -->

                                <div class="modal fade" id="update-{{$question->id , $question->question,$answer->answer,$answer->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
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
                                                        <input type="text" name="question_id" value="{{$question->id}}">
                                                        <input type="text" name="answer_id" value="{{$answer->answer}}">
                                                        <input type="text" name="id" value="{{$answer->id}}">



                                                        <div class="form-group text-dark">
                                                            <label class="text-dark" for="message">{{$question->question}}</label>
                                                            <br>
                                                            <textarea class="form-message" id="message" name="answer"></textarea>
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
                                <!-- Modal End -->





                                <div class=" small text-center ">

                                    <a type="button" class="btn btn-outline-dark" href="#">
                                        <span><i class="far fa-comment ml-2"></i> {{$question->answers->count()}}</span>
                                    </a>
                                    <a type="submit" class="btn btn-outline-dark" href="#" data-toggle="modal" data-target="#answer-{{$question->id, $question->question }}  ">
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
        </div>
    </div>
    <div>

    </div>
    <!-- Body inner end -->
    </div>


</x-users.layouts.master>