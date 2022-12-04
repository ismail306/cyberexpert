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
                    <input type="text" id="name" name="name" value=""><br>
                    <label for="message">Feedback</label><br>
                    <textarea class="" id="message" name="Message"></textarea>
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


                <label for="name">Hello, *******</label><br>
                <input type="text" id="name" name="name" value=""><br><br>
                <label for="message">Your feedback: </label><br>
                <textarea class="" id="message" name="Message"></textarea>



                <br>
                <br>




            </div>



        </div>



    </div>

</x-users.layouts.master>