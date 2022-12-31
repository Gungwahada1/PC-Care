@extends('../layout/' . $layout)

@section('head')
    <title>Register - PC Care</title>
@endsection

@section('content')
    <div class="container sm:px-10">
        <div class="block xl:grid grid-cols-2 gap-4">
            <!-- BEGIN: Login Info -->
            <div class="hidden xl:flex flex-col min-h-screen">
                <a href="" class="-intro-x flex items-center pt-5">
                    <img alt="PC Care - Images" class="w-6" src="{{ asset('build/assets/images/logo.svg') }}">
                    <span class="text-white text-lg ml-3">
                        PC CARE
                    </span>
                </a>
                <div class="my-auto">
                    @foreach ($registerPage as $item)
                        <img alt="PC Care - Images" class="-intro-x w-1/2 -mt-16"
                            src="{{ asset('build/assets/images/illustration.svg') }}">
                        <div class="-intro-x text-white font-medium text-4xl leading-tight mt-10">{{ $item->title }}</div>
                        <div class="-intro-x mt-5 text-lg text-white text-opacity-70 dark:text-slate-400">
                            {{ $item->description }}</div>
                    @endforeach
                </div>
            </div>
            <!-- END: Login Info -->
            <!-- BEGIN: Login Form -->
            <div class="h-screen xl:h-auto flex py-5 xl:py-0 my-10 xl:my-0">
                <div
                    class="my-auto mx-auto xl:ml-20 bg-white dark:bg-darkmode-600 xl:bg-transparent px-5 sm:px-8 py-8 xl:p-0 rounded-md shadow-md xl:shadow-none w-full sm:w-3/4 lg:w-2/4 xl:w-auto">
                    <h2 class="intro-x font-bold text-2xl xl:text-3xl text-center xl:text-left">Register</h2>
                    <div class="intro-x mt-2 text-slate-400 xl:hidden text-center">A few more clicks to sign in to your
                        account. Manage your e-commerce accounts in one place</div>
                    <div class="intro-x mt-8">
                        <form action="{{ route('register.store') }}" method="POST">
                            <input id="name" type="text" class="intro-x login__input form-control py-3 px-4 block"
                                placeholder="Name" name="name" required>
                            <div class="login__input-error text-danger mt-2"></div>
                            <input id="email" type="email" class="intro-x login__input form-control py-3 px-4 block"
                                placeholder="pccare@example.com" name="email" required>
                            <div id="error-email" class="login__input-error text-danger mt-2"></div>
                            <input id="gender" type="text" class="intro-x login__input form-control py-3 px-4 block"
                                placeholder="Jenis Kelamin : Male/Female" name="gender" required>
                            <div class="login__input-error text-danger mt-2"></div>
                            <input id="password" type="password"
                                class="intro-x login__input form-control py-3 px-4 block mt-4" placeholder="Password"
                                name="password" required>
                            <div id="error-password" class="login__input-error text-danger mt-2"></div>
                            <input id="role" type="number"
                                class="intro-x login__input form-control py-3 px-4 block mt-4 hidden" placeholder="Role"
                                name="role" value="0" required>
                            <input id="active" type="number"
                                class="intro-x login__input form-control py-3 px-4 block mt-4 hidden" placeholder="Status"
                                name="active" value="1" required>
                            <div class="intro-x mt-5 xl:mt-8 text-center xl:text-left">
                                <button class="btn btn-primary py-3 px-4 w-full xl:w-32 xl:mr-3 align-top"
                                    type="submit">Register</button>
                            </div>
                        </form>
                    </div>
                    <div class="intro-x flex text-slate-600 dark:text-slate-500 text-xs sm:text-sm mt-4">
                        <div>Already have account? <a href="{{ route('login.index') }}" class="underline">Login</a></div>
                    </div>

                    <div class="intro-x mt-10 xl:mt-24 text-slate-600 dark:text-slate-500 text-center xl:text-left">
                        By register, you agree to our <a class="text-primary dark:text-slate-200" href="">Terms and
                            Conditions</a> & <a class="text-primary dark:text-slate-200" href="">Privacy Policy</a>
                    </div>
                </div>
            </div>
            <!-- END: Login Form -->
        </div>
    </div>
@endsection
