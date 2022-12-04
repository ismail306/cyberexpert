<x-users.layouts.master>

    <div class="row container">
        <div class="col-md-4">
            <x-users.layouts.partials.sidebar />



        </div>
        <div class="col-md-8 card">
            <h1>Vulnerability: Stored Cross Site Scripting (XSS)</h1>

            <div class="xss">


                <form action="/action_page.php">
                    <label for="name">Whats your name ?</label><br>
                    <input type="text" id="name" name="name" value=""><br><br>

                    <input type="submit" value="Submit">
                </form>

                <br>
                <br>




            </div>



        </div>



    </div>

</x-users.layouts.master>