@extends('layouts.app')

@section('content')
    <div class="grid-container fluid">
        <div class="grid-x grid-margin-x">
            <div class="cell small-6 small-offset-3">
                <div class="card">
                    <div class="card-divider">
                        Restablecer Contraseña
                    </div>
                    <div class="card-section">
                        <form class="grid-container" method="POST" action="{{ route('password.request') }}" data-abide
                              novalidate>
                            {{ csrf_field() }}
                            <input type="hidden" name="token" value="{{ $token }}">
                            <div class="cell small-12 {{ $errors->has('email') ? ' has-error' : '' }}">
                                <label for="email">
                                    E-Mail
                                    <div class="input-group">
                                        <input id="email" type="email" class="input-group-field" name="email"
                                               value="{{ old('email') }}" required autofocus>
                                    </div>
                                    <span class="form-error" data-form-error-for="email">campo requerido</span>
                                    @if ($errors->has('email'))
                                        <span class="help-text"
                                              data-form-error-for="email">{{ $errors->first('email') }}</span>
                                    @endif
                                </label>
                            </div>
                            <div class="cell small-12 {{ $errors->has('password') ? ' has-error' : '' }}">
                                <label for="password">
                                    Contraseña
                                    <div class="input-group">
                                        <input id="password" type="password" class="input-group-field" name="password"
                                               value="{{ old('password') }}" required>
                                    </div>
                                    <span class="form-error" data-form-error-for="password">campo requerido</span>
                                    @if ($errors->has('password'))
                                        <span class="help-text"
                                              data-form-error-for="password">{{ $errors->first('password') }}</span>
                                    @endif
                                </label>
                            </div>
                            <div class="cell small-12">
                                <label for="password-confirm">
                                    Confirma Contraseña
                                    <div class="input-group">
                                        <input class="input-group-field" id="password-confirm"
                                               name="password_confirmation" type="password" pattern="alpha_numeric"
                                               data-equalto="password" required>
                                    </div>
                                    <span class="form-error" data-form-error-for="password-confirm">Las contraseñas no son identicas</span>
                                </label>
                            </div>
                            <div class="input-group">
                                <div class="cell small-6 small-offset-4">
                                    <button type="submit" class="button primary">
                                        Restablecer Contraseña
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
