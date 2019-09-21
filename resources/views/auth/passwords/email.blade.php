@extends('layouts.app')

@section('content')
    <div class="container mx-auto h-screen flex justify-center content-center items-center">
        <div class="flex flex-wrap justify-center">
            <div class="w-full max-w-sm">

                @if (session('status'))
                    <div class="text-sm border border-t-8 rounded text-green-700 border-green-600 bg-green-100 px-3 py-4 mb-4" role="alert">
                        {{ session('status') }}
                    </div>
                @endif

                <div class="flex flex-col break-words">

                    <form class="w-full p-6" method="POST" action="{{ route('password.email') }}">
                        @csrf

                        <div class="flex flex-wrap mb-6">
                            <label for="email" class="block text-white-700 text-sm font-bold mb-2">
                                {{ __('E-Mail Address') }}:
                            </label>

                            <input id="email" type="email" class="shadow appearance-none border rounded w-full py-2 px-3 text-grey-darker leading-tight focus:outline-none focus:shadow-outline{{ $errors->has('email') ? ' border-red' : '' }}" name="email" value="{{ old('email') }}" required>

                            @if ($errors->has('email'))
                                <p class="text-red-500 text-xs italic mt-4">
                                    {{ $errors->first('email') }}
                                </p>
                            @endif
                        </div>

                        <div class="flex flex-wrap">
                            <button type="submit" class="bg-orange-500 hover:bg-orange-600 text-gray-100 font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                                {{ __('Send Password Reset Link') }}
                            </button>

                            <p class="w-full text-xs text-center mt-8 -mb-4">
                                <a class="text-orange-500 hover:text-green-500 no-underline" href="{{ route('login') }}">
                                    Back to login
                                </a>
                            </p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
