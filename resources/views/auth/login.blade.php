@extends('layouts.app')
@section('content')
<b-container>
    <b-row align-h="center">
        <b-col cols="8">                
            <b-card-group deck>
                <b-card title="Inicio de sesión">
                        
                    <b-form method="POST" action="{{ route('login') }}">
                        @csrf
                        <b-form-group label="Correo electrónico:" label-for="email">
                            <b-form-input type="email" name="email" id="email" value="{{ old('email') }}"
                                placeholder="example@mail.com" required autofocus />
                        </b-form-group>
                        <b-form-group label="Contraseña:" label-for="password">
                            <b-form-input type="password" name="password" id="password" value="{{ old('password') }}"
                                required />
                        </b-form-group>
                        <b-form-checkbox name="remember" {{ old('remember') ? 'checked="true"' : '' }}>
                            Recordar sesión
                        </b-form-checkbox>
                        <b-form-group >
                            <b-button type="submit" variant="primary">Ingresar</b-button>
                            <b-button href="{{ route('password.request') }}" variant="link" >Olvide la contraseña</b-button>
                        </b-form-group>
                    </b-form>                   
                </b-card>
            </b-card-group>       
        </b-col>
    </b-row>
</b-container>
@endsection