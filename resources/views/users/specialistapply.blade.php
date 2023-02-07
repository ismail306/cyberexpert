<x-users.layouts.master>


    <div class="content-wrapper">
        <div class="content">

            <div class="bg-white border rounded">
                <div class="row no-gutters">
                    <x-users.layouts.partials.profileinfo />

                    <div class="col-lg-7 col-xl-8">
                        <div class="profile-content-right profile-right-spacing py-5">
                            <h2 class="text-center">Submit Your Information</h2>

                            <div class="tab-content px-3 px-xl-5" id="myTabContent">

                                <x-users.layouts.partials.specialistapplication />

                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Character counter -->
    <script src="https://unpkg.com/short-and-sweet/dist/short-and-sweet.min.js"></script>
    <script>
        shortAndSweet("textarea, input");
    </script>


</x-users.layouts.master>