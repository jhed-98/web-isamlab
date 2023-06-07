@php
    $profesions = [
        [
            'img' => asset('images/icon-seo-1.png'),
            'title' => 'Fundamentos',
            'p' => 'Conocerás y aprenderás sobre los términos y conceptos necesarios para implementar estrategias de marketing enfocadas en SEO.',
            'active' => false,
        ],
        [
            'img' => asset('images/icon-seo-2.png'),
            'title' => 'Auditoria',
            'p' => 'Aprenderás a establecer los criterios necesarios para determinar una hoja de ruta en la optimización SEO de sitios web',
            'active' => true,
        ],
        [
            'img' => asset('images/icon-seo-3.png'),
            'title' => 'SEO ON page',
            'p' => 'Entenderás cuáles son los criterios de contenidos a nivel de página para poder posicionar contenidos en los buscadores. Aprenderás a usar herramientas de vanguardia como ChatGPT.',
            'active' => true,
        ],
        [
            'img' => asset('images/icon-seo-4.png'),
            'title' => 'Medición ',
            'p' => 'Profundizarás un poco más en las métricas generadas en las estrategias para tomar decisiones basadas en datos.',
            'active' => false,
        ],
    ];
@endphp
<section class="container">
    <div class="cardP mt-5">
        <div class="cardP-title">
            ¿Qué aprenderás en el Curso Profesional de SEO?
        </div>
        <p>
            Aproveche los beneficios de poder atraer nuevos clientes a su negocio y aprender cómo emplear estas
            herramientas de publicidad para mejorar su empleabilidad o hacer crecer su proyecto.
        </p>
    </div>
    <div class="cardP-grid">
        @foreach ($profesions as $item)
            <div class="cardP-content {{ $item['active'] ? 'active' : '' }}">
                <div>
                    <img src="{{ $item['img'] }}" alt="">
                </div>
                <div>
                    <div>{{ $item['title'] }}</div>
                    <p>{{ $item['p'] }}</p>
                </div>
            </div>
        @endforeach
    </div>
    <div class="cardP-button">
        <div>
            <img width="30" height="30" src="https://img.icons8.com/ios-filled/50/ffffff/add--v1.png"
                alt="add--v1" />
            <span>
                Ver sílabo del curso
            </span>
        </div>
    </div>
</section>
<section class="container">
    <div class="cursos-title">¿Para quién es este curso?</div>
    <div class="row">
        <div class="col-lg-7 card-items-cursos">
            <div class="row cursos-span">
                <div class="col-12 col-lg-6">
                    <div class="d-flex py-2">
                        <img width="25" height="25" src="https://img.icons8.com/ios/fabd04/ok--v1.png"
                            alt="ok--v1" />
                        <span class="ml-2">Trabajadores independiente</span>
                    </div>
                    <div class="d-flex py-2">
                        <img width="25" height="25" src="https://img.icons8.com/ios/fabd04/ok--v1.png"
                            alt="ok--v1" />
                        <span class="ml-2">Emprendedores</span>
                    </div>
                    <div class="d-flex py-2">
                        <img width="25" height="25" src="https://img.icons8.com/ios/fabd04/ok--v1.png"
                            alt="ok--v1" />
                        <span class="ml-2">Estudiantes de marketing</span>
                    </div>
                    <div class="d-flex py-2">
                        <img width="25" height="25" src="https://img.icons8.com/ios/fabd04/ok--v1.png"
                            alt="ok--v1" />
                        <span class="ml-2">Comerciantes</span>
                    </div>
                    <div class="d-flex py-2">
                        <img width="25" height="25" src="https://img.icons8.com/ios/fabd04/ok--v1.png"
                            alt="ok--v1" />
                        <span class="ml-2">Analistas de marketing</span>
                    </div>
                </div>
                <div class="col-12 col-lg-6">
                    <div class="d-flex py-2">
                        <img width="25" height="25" src="https://img.icons8.com/ios/fabd04/ok--v1.png"
                            alt="ok--v1" />
                        <span class="ml-2">Practicantes de marketing</span>
                    </div>
                    <div class="d-flex py-2">
                        <img width="25" height="25" src="https://img.icons8.com/ios/fabd04/ok--v1.png"
                            alt="ok--v1" />
                        <span class="ml-2">Community Manager</span>
                    </div>
                    <div class="d-flex py-2">
                        <img width="25" height="25" src="https://img.icons8.com/ios/fabd04/ok--v1.png"
                            alt="ok--v1" />
                        <span class="ml-2">Creadores de contenidos</span>
                    </div>
                    <div class="d-flex py-2">
                        <img width="25" height="25" src="https://img.icons8.com/ios/fabd04/ok--v1.png"
                            alt="ok--v1" />
                        <span class="ml-2">Influencers, entre otros</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-5 cursos-img">
            <div>
                <img src="{{ asset('images/cursos.png') }}" alt="">
            </div>
        </div>
    </div>
</section>
<section class="bg-black">
    <div class="container">
        <div class="tutor-title"> Sobre los docentes especialistas</div>
        <div class="content-tutor">
            <div>
                <img src="{{ asset('images/andruz.png') }}" alt="">
            </div>
            <div class="description-tutor">
                <div>
                    Ing. Andruz Legro
                </div>
                <p> Especialista SEO</p>

                <p>Tengo más de 7 años de experiencia en el diseño, desarrollo e implementación de estrategias SEO para
                    la
                    creación de canales de adquisición orgánicos.</p>

            </div>
        </div>
    </div>
</section>
