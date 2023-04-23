<x-users.layouts.master>
    <x-slot:title>
        SQL Injection
        </x-slot>
        <div class="container">

            <div class="row   mt-4">
                <div class="col-md-4 text-center">


                    <x-users.layouts.partials.sqlsidebar />



                </div>
                <div class="col-md-8 card">
                    <h1 class="text-center">Vulnerability: SQL Injection</h1>

                    <div class="xss pb-1 rounded mb-3">


                        <form method="GET" action="{{ route('execute-query') }}">

                            <label for="id">User ID:</label>
                            <input type="text" name="id" id="id">
                            <button type="submit">Submit</button>

                        </form>

                        @if(isset($sqlusers))

                        @foreach($sqlusers as $sqluser)
                        <div class="text-danger line-space my-4 pb-3">
                            <p><strong>User Name:</strong> {{ $sqluser->username}}</p>
                            <p><strong>Password:</strong> {{ $sqluser->password}}</p>
                        </div>
                        @endforeach

                        @endif



                        <!-- print Authuser name -->

                    </div>
                </div>

            </div>

        </div>



</x-users.layouts.master>