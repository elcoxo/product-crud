<x-layout title="Login">
    <x-slot:heading>
        Login
    </x-slot:heading>
    <div class="container d-flex justify-content-center align-items-center">
        <div class="card bg-white col-lg-6">
            <div class="card-body">
                <form method="POST" action="{{route('auth.login.store')}}">
                    @csrf
                    <div class="form-group mb-3">
                        <div class="mt-2">
                            <x-form-label for="email">Email address</x-form-label>
                            <input name="email"
                                   id="email"
                                   type="email"
                                   class="form-control @error('email') is-invalid @enderror"
                                   placeholder="Enter email"
                                   required
                                   value="{{ old('email') }}">
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
                    <br>
                    <div class="col-12">
                        <div class="d-grid my-3">
                            <button class="btn btn-primary" type="submit">Log in
                            </button>
                        </div>
                    </div>

                    <div class="col-12">
                        <p class="m-0 text-secondary text-center">I want to
                            <a href="{{route('auth.register.index')}}"
                               class="link-primary text-decoration-none">
                                create an account
                            </a>
                        </p>
                    </div>
                </form>
            </div>
        </div>
    </div>
    </div>
</x-layout>

