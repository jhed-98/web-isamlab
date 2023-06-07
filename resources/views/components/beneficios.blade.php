@php
    $beneficios = [
        [
            'name' => 'Plantear metas acordes a las necesidades del proyecto.',
            'icon' => '<img width="30" height="30"
                                src="https://img.icons8.com/ios-glyphs/30/ffffff/ok--v1.png" alt="ok--v1" />',
        ],
        [
            'name' => 'Auditar sitios web para corregir y optimizar el SEO.',
            'icon' => '<img width="30" height="30"
                                src="https://img.icons8.com/ios-glyphs/30/ffffff/ok--v1.png" alt="ok--v1" />',
        ],
        [
            'name' => 'Crear estrategias de contenido para ganar visibilidad en los buscadores web.',
            'icon' => '<img width="30" height="30"
                                src="https://img.icons8.com/ios-glyphs/30/ffffff/ok--v1.png" alt="ok--v1" />',
        ],
        [
            'name' => 'Analizar las métricas y optimizar según los datos generados de la estrategia.',
            'icon' => '<img width="30" height="30"
                                src="https://img.icons8.com/ios-glyphs/30/ffffff/ok--v1.png" alt="ok--v1" />',
        ],
        [
            'name' => 'Generar reportes de resultados con indicadores acordes al negocio.',
            'icon' => '<img width="30" height="30"
                                src="https://img.icons8.com/ios-glyphs/30/ffffff/ok--v1.png" alt="ok--v1" />',
        ],
    ];
@endphp
<section class="container">
    <div class="position-relative">
        <div class="row content-beneficio">
            <div class="col-lg-6">
                <div class="pb-5 row">
                    <div class="col-12 col-lg-3">
                        <img src="{{ asset('images/icon_certificate.png') }}" alt="">
                    </div>
                    <div class="content-certificate col-12 col-lg-8">
                        <div class="content-title">Certificado a nombre de la nación</div>
                        <div>Cuando finalices cualquiera de nuestros cursos obtendrás un certificado avalado por ISAM.
                            <strong>Somos un instituto licenciado por MINEDU</strong>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 col-lg-3">
                        <img src="{{ asset('images/icon_creditos.png') }}" alt="">
                    </div>
                    <div class="content-certificate col-12 col-lg-8">
                        <div class="content-title">Créditos convalidables</div>
                        <div>Con la finalización y aprobación de este curso podrás obtener créditos académicos
                            conavlidables para la carrera de informática.
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-5 card-Beneficios">
                <div class="card-imgDescBg">
                    <img src="{{ asset('images/icon_beneficios.png') }}" alt="">
                </div>
                <div class="card-contentBenef">
                    <div>Beneficios:</div>
                    <div>
                        <p>Las habilidades SEO que adquirirás en nuestro curso, te permitirán llegar a un amplio número
                            de
                            usuarios mediante contenidos de valor que serán rastreados e indexados por los buscadores
                            para
                            ser presentados en el momento preciso y a las personas correctas.</p>
                        <p>Aprender SEO te ayudará a:</p>
                    </div>
                    <ul>
                        @foreach ($beneficios as $item)
                            <li>
                                <div class="d-flex">
                                    <div>
                                        {!! $item['icon'] !!}
                                    </div>
                                    {{ $item['name'] }}
                                </div>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>

        </div>
        <div class="position-relative card-triple-certificate">
            <div class="card-content-triple-certificate">
                <img src="{{ asset('images/bg-beneficios.png') }}" alt="">
            </div>
            <div class="content-triple-certificate">
                <div class="triple-certificate-title">Triple certificación</div>
                <div class="triple-certificate-imgs">
                    <div class="">
                        <img src="{{ asset('images/icon-peru.png') }}" alt="">
                        <div>Certificación a nombre de la nación</div>
                    </div>
                    <div>
                        <img src="{{ asset('images/icon-sam.png') }}" alt="">
                    </div>
                    <div>
                        <img src="{{ asset('images/icon-seo.png') }}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
