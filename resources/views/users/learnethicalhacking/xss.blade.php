<x-users.layouts.master>

    <div class="container">


        <div class="row">
            <div class="col-md-4">
                <x-users.layouts.partials.sidebar />



            </div>
            <div class="col-md-8 card">
                <h1>Types of XSS</h1>
                <h2>
                    Background
                </h2>
                <p>
                    This article describes the many different types or categories of cross-site scripting (XSS) vulnerabilities and how they relate to each other.

                    Early on, two primary types of XSS were identified, Stored XSS and Reflected XSS. In 2005, Amit Klein defined a third type of XSS, which Amit coined DOM Based XSS. These 3 types of XSS are defined as follows:
                </p>
                <h2>
                    Reflected XSS (AKA Non-Persistent or Type I)
                </h2>
                <p>
                    Reflected XSS occurs when user input is immediately returned by a web application in an error message, search result, or any other response that includes some or all of the input provided by the user as part of the request, without that data being made safe to render in the browser, and without permanently storing the user provided data. In some cases, the user provided data may never even leave the browser (see DOM Based XSS below).
                </p>
                <h2>
                    Stored XSS (AKA Persistent or Type II)
                </h2>
                <p>
                    Stored XSS generally occurs when user input is stored on the target server, such as in a database, in a message forum, visitor log, comment field, etc. And then a victim is able to retrieve the stored data from the web application without that data being made safe to render in the browser. With the advent of HTML5, and other browser technologies, we can envision the attack payload being permanently stored in the victim’s browser, such as an HTML5 database, and never being sent to the server at all.
                </p>
                <h2>
                    DOM Based XSS (AKA Type-0)
                </h2>
                <p>
                    As defined by Amit Klein, who published the first article about this issue [1], DOM Based XSS is a form of XSS where the entire tainted data flow from source to sink takes place in the browser, i.e., the source of the data is in the DOM, the sink is also in the DOM, and the data flow never leaves the browser. For example, the source (where malicious data is read) could be the URL of the page (e.g., document.location.href), or it could be an element of the HTML, and the sink is a sensitive method call that causes the execution of the malicious data (e.g., document.write).”
                </p>



            </div>



        </div>


    </div>

</x-users.layouts.master>