<x-users.layouts.master>

    <div class="form-box">
        <h1>Simple Contact Form</h1>
        <p>Using <a href="https://getbootstrap.com">Bootstrap</a> and <a href="https://www.formbucket.com">FormBucket</a></p>
        <form action="https://api.formbucket.com/f/c2K3QTQ" method="post">
            <div class="form-group">
                <label for="name">Name</label>
                <input class="form-control" id="name" type="text" name="Name">
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input class="form-control" id="email" type="email" name="Email">
            </div>
            <div class="form-group">
                <label for="message">Message</label>
                <textarea class="form-message" id="message" name="Message"></textarea>
            </div>
            <input class="btn btn-primary" type="submit" value="Submit" />
    </div>
    </form>
    </div>

</x-users.layouts.master>