@extends('layouts.front')

@section('content')
    <div id="operator" class="container py-5">
        <h1 class="text-center text-primary mb-5">De qué operador es un número de teléfono móvil.</h1>

        {{-- IF USER NOT AUTHENTICATED --}}
        @if(!\Illuminate\Support\Facades\Auth::user())
            <div class="card card-body shadow m-auto">
                <p class="h3 text-secondary text-center">
                    Si eres miembro de fuerzas y cuerpo de seguridad del estado, ponte en contacto con <a href="mailto:claudio@dltcode.es">claudio@dltcode.es</a>
                </p>

                <p class="mt-3 text-center">
                    <a href="mailto:claudio@dltcode.es" class="btn btn-secondary">
                        <img height="20" src="{{ asset('img/email.png') }}"> contactar
                    </a>
                </p>


                <p class="mt-3 text-center text-muted">Si ya has contactado y tienes cuenta</p>

                <p class="mt-3 text-center">
                    <a href="{{ route('login') }}" class="btn btn-secondary">
                        iniciar sesión
                    </a>
                </p>
            </div>
        @else
            <div class="contained">
                <form id="search-form" method="POST" action="{{ route('tools.operator.search') }}">
                    <div class="input-group mb-3 w-100 shadow-sm">
                        @csrf
                        <input type="text" type="phone" class="form-control form-control-lg m-0 border-0 h-100"
                               value="{{ $phone ?? '' }}"
                               id="phoneinput" name="phone" placeholder="Número de teléfono (+34 123 123 123)"
                               aria-label="" aria-describedby="basic-addon1">
                        <div class="input-group-append  mt-3 d-block w-100 d-md-flex">
                            <button id="submitBtn" class="btn btn-sm btn-outline-secondary g-recaptcha w-100" type="submit"
                                    data-sitekey="6LfAMf4ZAAAAACF1N9FVYkCuRdRIQlBb5-rjDH14"
                                    data-callback='onSubmit'
                                    data-action='submit'>Buscar
                            </button>
                        </div>
                    </div>
                </form>

                <script>
                    document.getElementById("phoneinput").focus();
                </script>


                @if(isset($error))
                    <div class="alert alert-danger shadow-sm card-body">
                        <strong>{!! $error !!}</strong>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                @endif


                <div class="mt-5 card card-body result shadow-lg">
                    <div class="container">
                        @if(isset($data))
                            @if(is_array($data))
                                @foreach($data ?? [] as $key => $value)
                                    <div class="row">
                                        <div class="col-12 col-sm-3">{{ __($key) }}</div>
                                        @if(is_array($value))
                                            <div class="container">
                                                @foreach($data[$key] ?? [] as $subKey => $subValue)
                                                    <div class="ml-3">
                                                        {{ __($subKey) }}: {{ $subValue }}
                                                    </div>
                                                @endforeach
                                            </div>
                                        @else
                                            <div class="col-12 col-sm-6">{{ __($value) }}</div>
                                        @endif
                                    </div>

                                @endforeach
                            @else
                                {{{ $data }}}
                            @endif
                        @endif
                    </div>
                </div>
            </div>

            <div class="my-5 p-3">

                <h2 class="h4 mb-5"><strong>PRIVACIDAD</strong>: No almacenamos ninguna de las consultas realizadas ni
                    realizamos ningún tratamiento siendo
                    este un servicio totalmente transparente y anónimo. </h2>


                <p>La búsqueda por operador es la mejor manera de encontrar el operador del número de teléfono. El proceso
                    de análisis de los números de teléfono es muy simple y en nuestra web gratuito y permite conocer a qué
                    operador corresponde un número de teléfono.</p>

                <p>Todo lo que necesita hacer es poner el número de teléfono y el código de país. Como resultado, extraerá
                    información sobre la red móvil. Ofrecemos el servicio de verificación telefónica global con el fin de
                    identificar números de teléfono en todo el mundo y sus poratilidades así como estado de red con fines de
                    investigación para profesionales de ciberseguridad y forense.
                </p>
                <p>Si buscas un servicio diferente por favor escribe a <a href="mailto:info@dltcode.es">info@dltcode.es</a>
                </p>
            </div>
        @endif

    </div>

    @include('components.captcha')
    @include('components.google')
@endsection

