<nav class="navbar navbar-expand-lg px-5 navbar_isamLab">
    <a class="navbar-brand" href="#">
        <img src="{{ asset('images/logo.png') }}">
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02"
        aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon">
            <i class="fa-solid fa-bars"></i>
        </span>
    </button>

    <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
        <ul class="navbar-nav ml-auto  ">
            <li class="nav-item active">
                <a class="nav-link" href="#">Inicio</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Nosotros</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Cursos
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Something else here</a>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#"><img src="{{ asset('images/escribenos.png') }}">Escribenos</a>
            </li>
        </ul>
    </div>
</nav>
<section class="container py-5 content-profesional">
    <div class="row">
        <div class="col-12 col-lg-7 row">
            <div class="col-12 col-lg-8">
                <h1 class="border-bottom pb-4">Curso Profesional de SEO</h1>
                <h5 class="py-2">¡Posiciona sitios web en los <strong>buscadores más usados en el mundo!</strong></h5>
                <div class="border-bottom pb-3 icons-seo">
                    <img src="{{ asset('images/icon-google.png') }}">
                    <img src="{{ asset('images/icon-bing.png') }}">
                    <img src="{{ asset('images/icon-yahoo.png') }}">
                </div>
            </div>
            <div class="col-12 col-lg-5">
                <div>
                    <div>
                        <table>
                            <thead>
                                <tr>
                                    <th scope="col" colspan="2" class="thead-title">Inicio: 00 de mayo</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row" class="text-right text-th">04</th>
                                    <td>Semanas</td>
                                </tr>
                                <tr>
                                    <th scope="row" class="text-right text-th">16</th>
                                    <td>Horas</td>
                                </tr>
                                <tr>
                                    <th scope="row" class="text-right text-th">100%</th>
                                    <td>Online</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="mt-5">
                        <p class="text-p">Destaca en el mundo laboral adquiriendo habilidades en posicionamiento
                            orgánico en
                            buscadores
                        </p>
                    </div>
                </div>
            </div>
            <div class="img-hero">
                <img src="{{ asset('images/people.png') }}">
            </div>
        </div>
        <div class="col-12 col-lg-5">
            <div class="div_form">
                <div class="form-title">
                    Quiero seguir creciendo laboralmente
                </div>
                {{-- @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif --}}
                <form action="{{ route('forms.cursos') }}" method="POST">
                    @csrf
                    <div class="form-group floating">
                        <input type="text" class="form-control floating @error('name') is-invalid @enderror"
                            id="name" name="name" required value="{{ old('name') }}">
                        <label for="last_name">Nombre</label>
                    </div>
                    @error('name')
                        <div id="validationServer03Feedback" class="invalid-feedback active">
                            {{ $message }}
                        </div>
                    @endError
                    <div class="form-group floating">
                        <input type="text" class="form-control floating @error('last_name') is-invalid @enderror"
                            id="last_name" name="last_name" required value="{{ old('last_name') }}">
                        <label for="last_name">Apellido</label>
                    </div>
                    @error('last_name')
                        <div id="validationServer03Feedback" class="invalid-feedback active">
                            {{ $message }}
                        </div>
                    @endError
                    <div class="form-group floating">
                        <input type="email" class="form-control floating" id="email" name="email" required
                            value="{{ old('email') }}">
                        <label for="email">Correo</label>
                    </div>
                    @error('email')
                        <div id="validationServer03Feedback" class="invalid-feedback active">
                            {{ $message }}
                        </div>
                    @endError
                    <div class="form-group floating">
                        <input type="text" class="form-control floating" id="phone" name="phone" required
                            value="{{ old('phone') }}">
                        <label for="phone">Celular</label>
                    </div>
                    @error('phone')
                        <div id="validationServer03Feedback" class="invalid-feedback active">
                            {{ $message }}
                        </div>
                    @endError
                    <div class="w-100 text-start mb-4 ml-4">
                        <div>
                            <input type="checkbox" class="form-check-input" id="check_info" name="check_info">
                            <label class="form-check-label check_info" for="check_info">Deseo
                                recibir información de ofertas y promociones</label>
                        </div>
                        @error('check_info')
                            <div id="validationServer03Feedback" class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @endError
                        <div>
                            <input type="checkbox" class="form-check-input" id="check_politica"
                                name="check_politica">
                            <label class="form-check-label check_politica" for="check_politica">Acepto la Politica de
                                proteccion de
                                datos</label>
                        </div>
                        @error('check_politica')
                            <div id="validationServer03Feedback" class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @endError
                    </div>
                    <div class="w-100 text-center">
                        <input type="submit" class="btn_Enviar" value="Enviar">
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
