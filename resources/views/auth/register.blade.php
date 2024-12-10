<x-layout title="Login">
    <x-slot:heading>
        Register
    </x-slot:heading>
    <div class="container d-flex justify-content-center align-items-center">
        <div class="card bg-white col-lg-6">
            <div class="card-body">

                <form method="POST" action="{{route('auth.register.store')}}">
                    @csrf
                    <div class="form-group mb-3">
                        <x-form-label for="Name">Name</x-form-label>
                        <div class="mt-2">
                            <input name="name"
                                   id="name"
                                   type="text"
                                   class="form-control"
                                   placeholder="Enter your name"
                                   required>
                            <x-form-error name="email"/>
                        </div>
                    </div>
                    <div class="form-group mb-3">
                        <x-form-label for="email">Email address</x-form-label>
                        <div class="mt-2">
                            <input name="email"
                                   id="email"
                                   type="email"
                                   class="form-control"
                                   placeholder="Enter email"
                                   required>
                            <x-form-error name="email"/>
                        </div>
                    </div>
                    <div class="form-group mb-3">
                        <x-form-label for="password">Password</x-form-label>
                        <div class="mt-2">
                            <input name="password"
                                   id="password"
                                   type="password"
                                   class="form-control"
                                   required>
                            <x-form-error name="password"/>
                        </div>
                    </div>
                    <div class="form-group mb-3">
                        <x-form-label for="password_confirmation">Password Confirmation</x-form-label>
                        <div class="mt-2">
                            <input name="password_confirmation"
                                   id="password_confirmation"
                                   type="password"
                                   class="form-control"
                                   required>
                            <x-form-error name="password_confirmation"/>
                        </div>
                    </div>
                    <br>
                    <div class="col-12">
                        <div class="d-grid my-2">
                            <button class="btn btn-primary" type="submit">Sign up
                            </button>
                        </div>
                        <div class="d-grid my-2">
                            <a href="/" class="btn btn-outline-secondary">Cancel
                            </a>
                        </div>
                    </div>
                    <div class="col-12">
                        <p class="m-0 text-secondary text-center">Already have an account?
                            <a href="{{route('auth.login.index')}}" class="link-primary text-decoration-none">Sign
                                in</a></p>
                    </div>


                </form>
            </div>
        </div>
    </div>
    </div>
</x-layout>

