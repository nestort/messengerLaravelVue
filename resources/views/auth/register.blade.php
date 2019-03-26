@extends('layouts.app')

@section('content')


<b-container>
    <b-row align-h="center">
        <b-col cols="8">
            <b-card-group deck>
                <b-card title="Registro">            
                    <b-form method="POST" action="{{ route('register') }}">
                        @csrf            
                        

                        

                        <b-form-group label-cols-sm="4"  label-align-md="right" label="Nombre: " label-for="name">
                            
                                <b-form-input  type="text" name="email" id="email" value="{{ old('name') }}" required autofocus />
                                @if ($errors->has('name'))
                                <b-alert show variant="danger">{{ $errors->first('name') }}</b-alert>
                               
                            @endif
                        </b-form-group>


                    

                       
                                <b-form-group label-cols-sm="4"  label-align-md="right" label="Correo electrónico:" label-for="email">
                            
                                        <b-form-input   type="email" name="email" id="email" value="{{ old('email') }}" required autofocus />
                                </b-form-group>
                            @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                         

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </b-forms>
                </b-card>
            </b-card-group>
        </b-col>
    </b-row >
</b-container>
@endsection
