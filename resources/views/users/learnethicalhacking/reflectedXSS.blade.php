<x-users.layouts.master>
    <x-slot:title>
        Reflected XSS
        </x-slot>
        <div class="container">

            <div class="row  text-center mt-4">
                <div class="col-md-4 mt-4">
                    <x-users.layouts.partials.sidebar />



                </div>
                <div class="col-md-8 card mt-4">
                    <h1>Vulnerability: Reflected Cross Site Scripting (XSS)</h1>

                    <div class="xss pb-1 rounded mb-3">


                        <form action="{{route('reflectedxss.store')}}" method="post">
                            @csrf

                            <label for="name">Whats your name ?</label><br>
                            <input type="text" id="name" name="name" value=""><br><br>

                            <input type="submit" value="Submit">
                        </form>
                        @if(isset($name))
                        <p class="mt-3" id="reflectedchecker" style="color:red">Hi {!!$name!!}</p>
                        @endif
                        <!-- print Authuser name -->

                    </div>
                </div>

            </div>

        </div>


</x-users.layouts.master>