<x-users.layouts.master>
    <x-slot:title>
        Stored|XSS
        </x-slot>

        <div class="container">
            <div class="row text-center mt-4">
                <div class="col-md-4">
                    <x-users.layouts.partials.sidebar />


                    <div class="card xssmenu " style="width: 18rem;">

                        <ul class="list-group list-group-flush ">

                            <li class="borderlist list-group-item"><a href="{{route('storedxss.reset')}}">Reset DB</a> </li>

                        </ul>
                    </div>
                </div>
                <div class="col-md-8 card">
                    <h1>Vulnerability: Stored Cross Site Scripting (XSS)</h1>

                    @if(session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                    @endif

                    <div class="xss">


                        <form action="{{route('storedxss.store')}}" method="post">
                            @csrf
                            <label for="name">Whats your name ?</label><br>
                            <input type="text" id="name" name="name" value=""><br>
                            <label for="message">Feedback</label><br>
                            <textarea class="" id="message" name="message"></textarea>
                            <br>
                            <br>

                            <input type="submit" value="Submit">
                            <input type="reset" value="Reset">
                        </form>

                        <br>
                        <br>

                    </div>
                    <h3 class="h-3">Output</h3>

                    <div class="xss">

                        @foreach($storedxss as $storedxss)
                        <label for="name">Hello, {!!$storedxss->name!!}</label><br>
                        <label class="mb-4" for="message">Feedback: {!!$storedxss->message!!}</label><br>
                        @endforeach

                        <br>
                        <br>

                    </div>
                </div>
            </div>
        </div>


</x-users.layouts.master>