<form method="POST" action="{{ route('login') }}">
    @csrf

    <div>
        <label for="email">{{ __('Email') }}</label>

        <div>
            <input id="email" type="text" name="email" value="{{ old('email') }}" required autofocus />
        </div>
    </div>

    <div>
        <label for="password">{{ __('Password') }}</label>

        <div>
            <input id="password" type="password" name="password" required autocomplete="current-password" />
        </div>
    </div>

    <div>
        <div>
            <button type="submit">
                {{ __('Login') }}
            </button>
        </div>
    </div>
</form>
