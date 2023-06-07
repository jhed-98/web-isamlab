@php
    
    $quas = [
        [
            'id' => 1,
            'name' => '¿Cómo me ayudaría este curso a mejorar mi perfil profesional?',
            'description' => '
            Dominar el SEO te ayudará a tener habilidades altamente demandadas en el mercado laboral actual.
Podrás plantear estrategias de posicionamiento orgánico en buscadores para cualquier tipo de empresa o proyecto personal.
',
        ],
        [
            'id' => 2,
            'name' => '¿Por qué debería aprender sobre SEO?',
            'description' => 'Dominar el SEO te ayudará a tener habilidades altamente demandadas en el mercado laboral actual.
Podrás plantear estrategias de posicionamiento orgánico en buscadores para cualquier tipo de empresa o proyecto personal.
',
        ],
        [
            'id' => 3,
            'name' => '¿Por qué elegir este curso?',
            'description' => 'Dominar el SEO te ayudará a tener habilidades altamente demandadas en el mercado laboral actual.
Podrás plantear estrategias de posicionamiento orgánico en buscadores para cualquier tipo de empresa o proyecto personal.
',
        ],
    ];
    
@endphp

<section class="container">
    <div class="quas-container">
        <div class="quas-content">
            <span>Preguntas frecuentes sobre el</span>
            <div> Curso Profesional de Marketing en Buscadores</div>
        </div>
        <div class="quas-items">
            @foreach ($quas as $qua)
                <div class="quas" x-data="{ open: false }">
                    <div class="quas-body" :class="{ 'active': open }" @click="open = ! open">
                        <div>
                            <span :class="{ 'active': open }">{{ $qua['id'] }}</span>
                            <div class="quas-name"> {{ $qua['name'] }}</div>
                        </div>
                        <img width="30" height="30" :class="{ 'd-none': open, 'd-block': !open }"
                            src="https://img.icons8.com/ios-glyphs/30/ffffff/plus-math.png" alt="plus-math" />
                        <img width="30" height="30" :class="{ 'd-block': open, 'd-none': !open }"
                            src="https://img.icons8.com/ios-glyphs/30/ffffff/minus-math.png" alt="minus-math" />
                    </div>
                    <div class="quas-content-description" :class="{ 'd-block': open, 'd-none': !open }">
                        <p class="text-base">{{ $qua['description'] }}</p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
