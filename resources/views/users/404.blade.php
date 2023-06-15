<x-users.layouts.master>

    <x-slot:title>
        404
        </x-slot>

        <div>
            <main>
                <section class="py-5">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-10 mx-auto text-center">
                                <img loading="lazy" decoding="async" src="{{ asset('/user/images/404.png') }}" alt="404" class="img-fluid mb-4" width="500" height="350">
                                @if (Session::has('message'))
                                <h1 class="mb-4">{{ Session::get('message') }}</h1>
                                @else
                                <h1 class="mb-4">Page Not Found!</h1>
                                @endif
                                <a href="{{ route('cyberexpert') }}" class="btn btn-outline-primary">Back To Home</a>
                            </div>
                        </div>

                    </div>
                </section>
            </main>
        </div>

</x-users.layouts.master>