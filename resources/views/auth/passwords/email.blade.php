@extends('layouts.app')

@section('content')
    <div class="grid-container fluid">
        <div class="grid-x grid-margin-x grid-padding-y">
            <div class="cell small-6 small-offset-3">
                <div class="card">
                    <div class="card-divider">
                        Restablecer Contraseña
                    </div>
                    <div class="card-section">
                        @if (session('status'))
                            <div class="callout success">
                                {{ session('status') }}
                            </div>
                        @endif
                        <form class="grid-container" method="POST" action="{{ route('password.email') }}" data-abide
                              novalidate>
                            {{ csrf_field() }}
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
                            <div class="input-group">
                                <div class="cell small-6 small-offset-3">
                                    <button type="submit" class="button primary">
                                        Enviarme un enlace para recuperar mi contraseña
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
