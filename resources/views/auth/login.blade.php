@extends('layouts.app')

@section('content')
    <div class="grid-container fluid">
        <div class="grid-x grid-margin-x grid-padding-y">
            <div class="cell hide-for-small-only medium-2 large-4"><!-- ### --></div>
            <div class="cell small-12 medium-8 large-4">
                <div class="card">
                    <div class="card-divider">
                        Entrar
                    </div>
                    <div class="card-section">
                        <form class="grid-container" method="POST" action="{{ route('login') }}" data-abide novalidate>
                        {{ csrf_field() }}
                        <!--<div data-abide-error class="alert callout" style="display: none;">
                                <p><i class="fi-alert"></i> Hay algunos errores en el formulario.</p>
                            </div>-->
                            @if ($errors->has('email'))
                                <div data-abide-error class="alert callout">
                                    <span class="help-text" data-form-error-for="email">
                                        <i class="fi-alert"></i> {{ $errors->first('email') }}
                                    </span>
                                </div>
                            @endif
                            <div class="cell small-12">
                                <label for="email">
                                    E-Mail
                                    <div class="input-group">
                                        <input class="input-group-field" id="email" type="email" name="email"
                                               value="{{ old('email') }}" required autofocus>
                                    </div>
                                    <span class="form-error" data-form-error-for="email">campo requerido</span>
                                </label>
                            </div>
                            <div class="cell small-12 {{ $errors->has('password') ? ' has-error' : '' }}">
                                <label for="password">
                                    Contraseña
                                    <div class="input-group">
                                        <input class="input-group-field" id="password" type="password" name="password"
                                               required>
                                    </div>
                                    <span class="form-error" data-form-error-for="password">campo requerido</span>
                                    @if ($errors->has('password'))
                                        <span class="help-text"
                                              data-form-error-for="password">{{ $errors->first('password') }}</span>
                                    @endif
                                </label>
                            </div>
                            <div>
                                <div class="cell small-6 small-offset-4">
                                    <input id="remember" type="checkbox"
                                           name="remember" {{ old('remember') ? 'checked' : '' }}>
                                    <label for="remember">Recordarme</label>
                                </div>
                            </div>
                            <div class="input-group">
                                <div class="cell small-full">
                                    <button type="submit" class="button primary">
                                        Entrar
                                    </button>
                                    <a class="clear button" href="{{ route('password.request') }}">
                                        Olvido su contraseña?
                                    </a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="cell hide-for-small-only medium-2 large-4"><!-- #### --></div>
        </div>
    </div>
@endsection
