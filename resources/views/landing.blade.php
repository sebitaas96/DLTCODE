@extends('layouts.front')

@section('content')

    <header style="background-image: url({{ asset('/img/header-img-2.webp') }})">
        <div class="mt-5 pt-5 row contained">
            <div class="col-12 col-md-5 mb-5 mb-md-0 text-center text-md-left">
                <h1 class="mb-5">Ciberseguridad,<br>Blockchain e<br> Innovación</h1>
                <a data-scroll href="#nuestros-servicios" class="btn btn-light">NUESTROS SERVICIOS</a>
            </div>
            <div class="col-12 col-md-7">
                <div class="card card-body">
                    <h2 class="h4">¿Quiénes somos?</h2>
                    <p>
                        DLTCode es una empresa de servicios profesionales, que opera en consultoría estratégica,
                        ciberseguridad y formación.
                        <br>
                        Está dirigida por un equipo experimentado de consultores líderes y expertos en diferentes
                        materias relativas a tecnologías, ciberseguridad, innovación disruptiva, gestión de empresa
                        y liderazgo.
                        <br><br>
                        Aprovechamos nuestra experiencia para gestionar la transformación digital de su empresa y
                        proporcionar soluciones de seguridad de próxima generación, que ayuden a proteger su
                        organización contra las amenazas actuales y emergentes.
                    </p>
                </div>
            </div>
        </div>
    </header>


    <section>
        <div class="row">
            <div class="col-12 col-md-2 mb-3 mb-md-0 align-self-center">
                <h3 class="h4"><strong>Asociados</strong> con el talento</h3>
            </div>

            <div class="col-12 col-md-10">
                <div class="associated-wrapper">
                    <div class="associated-element">
                        <img src="{{ asset('img/c1berwall.webp') }}">
                    </div>
                    <div class="associated-element">
                        <img src="{{ asset('img/Aspertic.webp') }}">
                    </div>
                    <div class="associated-element">
                        <img src="{{ asset('img/Petec.webp') }}">
                    </div>
                    <div class="associated-element">
                        <img src="{{ asset('img/computerworld.webp') }}">
                    </div>
                    <div class="associated-element">
                        <img src="{{ asset('img/Feindef.webp') }}">
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section id="nuestros-servicios" class="text-center text-dark">
        <h2 class="font-weight-bold mb-5">Servicios de Ciberseguridad</h2>

        <div class="col-12 lines-wrapper mb-3">
            <div></div>
            <div></div>
            <div></div>
            <div></div>
        </div>

        <div class="col-12">
            <div class="row">
                <div class="col-12 col-sm-6 col-md-3 mb-3">
                    <div class="card card-body shadow-sm border-0">
                        <h3 class="font-weight-bold h4">Hacking & SOC</h3>
                        <ul class="text-left text-muted">
                            <li>Auditoría</li>
                            <li>Adecuación</li>
                            <li>Consultoría</li>
                            <li>Análisis de riesgo</li>
                            <li>Normativa y Cumplimiento</li>
                            <li>Gestión y administración</li>
                            <li>Análisis</li>
                            <li>Monitorización</li>
                        </ul>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-3 mb-3">
                    <div class="card card-body shadow-sm border-0">
                        <h3 class="font-weight-bold h4">Forense</h3>
                        <ul class="text-left text-muted">
                            <li>Análisis Forense</li>
                            <li>Consultoría</li>
                            <li>Incident response (DFIR)</li>
                            <li>E-Discovery</li>
                            <li>Audio / Video</li>
                            <li>Whatsapp</li>
                            <li>Email</li>
                            <li>Industrial</li>
                        </ul>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-3 mb-3">
                    <div class="card card-body shadow-sm border-0">
                        <h3 class="font-weight-bold h4">Recuperación de datos</h3>
                        <ul class="text-left text-muted">
                            <li>Movil</li>
                            <li>PC</li>
                            <li>Sistemas RAID</li>
                            <li>Servidores</li>
                            <li>Tarjetas de memoria</li>
                            <li>Android</li>
                            <li>IOS</li>
                            <li>SCADA</li>
                        </ul>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-3 mb-3">
                    <div class="card card-body shadow-sm border-0">
                        <h3 class="font-weight-bold h4">Blockchain</h3>
                        <ul class="text-left text-muted">
                            <li>Auditoría</li>
                            <li>Consultoría</li>
                            <li>Adecuación</li>
                            <li>Auditoría</li>
                            <li>Normativa y Cumplimiento</li>
                            <li>ERC-20</li>
                            <li>CCI framework</li>
                            <li>Trust Over IP Primer</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section id="proactivos">
        <div class="text">
            <div class="card card-body bg-primary text-white">
                <h3 class="text-white mb-5">Proactivos y reactivos protegiendo <br> datos corporativos</h3>
                <p>
                    Las distintas áreas de la empresa cuentan con personal cualificado y reconocido en distintos foros
                    públicos. Como empresa colaboramos y participamos como ponentes de un gran número de congresos. Nos
                    enorgullece decir que todos nuestros profesionales de seguridad participan este año como
                    instructores en la C1b3rWall academy hablando de pentesting, forense, Hacking de vehículos,
                    programación y automatización de tareas de auditoría, análisis masivo de evidencias y otros módulos
                    de Red y Blue Team.
                    <br>
                    <br>
                    Hemos tenido el gran honor de clausurar el evento CiberSeguridad 2020 BARCELONA de IDG/Computerworld
                    como reconocimiento al trabajo de que venimos desarrollando. Por las mismas razones este año
                    estaremos también en EUROPOL y QuBit Praga como ponentnes invitados.
                </p>
            </div>
        </div>

        <div class="image">
            <img src="{{ asset('img/whitedesign.webp') }}">
        </div>

    </section>


    <section id="nuestros-asesores" class="text-centermb-5">
        <h2 class="my-5 text-center">Nuestros asesores, nuestro éxito</h2>
        <div class="row">
            <div class="col-12 col-md-4 mb-3">
                <div class="card card-body bg-white text-muted text-center h-100">
                    <div class="card-img">
                        <img src="{{ asset('img/profesionalidad.webp') }}">
                    </div>
                    <div class="card-text">
                        <h3 class="card-title">Profesionalidad</h3>
                        <p>Todos nuestros asesores son <br> profesionales Nivel "C" en<br> grandes industrias o
                            dirigen<br> su propio negocio</p>
                    </div>
                </div>
            </div>

            <div class="col-12 col-md-4 mb-3">
                <div class="card card-body bg-white text-muted text-center h-100">
                    <div class="card-img">
                        <img src="{{ asset('img/congresos.webp') }}">
                    </div>
                    <div class="card-text">
                        <h3 class="card-title">Congresos</h3>
                        <p>Presencia como expertos y<br> ponentes en diversos congres<br> a gran escala.</p>
                    </div>
                </div>
            </div>

            <div class="col-12 col-md-4 mb-3">
                <div class="card card-body bg-white text-muted text-center h-100">
                    <div class="card-img">
                        <img src="{{ asset('img/vida-asociativa.webp') }}">
                    </div>
                    <div class="card-text">
                        <h3 class="card-title">Vida asociativa</h3>
                        <p>Nuestro equipo es parte o dirige<br> asociaciones profesionales<br> o fundaciones.</p>
                    </div>
                </div>
            </div>

        </div>
    </section>


    <section id="protection" class="mt-5">
        <h2 class="text-center">La protección, nuestra prioridad</h2>
        <div class="row protection-heading">
            <div class="col-12 col-sm-6 col-md-4 protection-element">
                <h4>Fugas de datos</h4>
            </div>
            <div class="col-12 col-sm-6 col-md-4 protection-element">
                <h4>Ciberataques</h4>
            </div>
            <div class="col-12 col-sm-6 col-md-4 protection-element">
                <h4>Compliance</h4>
            </div>
            <div class="col-12 col-sm-6 col-md-4 protection-element">
                <h4>Daños de reputación</h4>
            </div>
            <div class="col-12 col-sm-6 col-md-4 protection-element">
                <h4>Legal</h4>
            </div>
            <div class="col-12 col-sm-6 col-md-4 protection-element">
                <h4>Pérdida o robo de datos</h4>
            </div>
        </div>

        <div class="card shadow-sm common-incidents">
            <div class="row">
                <div class="col-12 col-md-4 incidents">
                    <h3 class="mb-3 h4">Incidentes más habituales</h3>
                    <div>
                        <div class="dot"></div>
                        37.94% Acceso no autorizado
                    </div>
                    <div>
                        <div class="dot" style="background:#163D43;"></div>
                        23.90% Fraude
                    </div>
                    <div>
                        <div class="dot" style="background:#2C7B88;"></div>
                        15.54% Otros
                    </div>
                    <div>
                        <div class="dot" style="background:#E5F4F7;"></div>
                        9.76% Virus y spyware
                    </div>
                </div>
                <div class="col-12 col-md-4 incidents">
                    <div>
                        <div class="dot" style="background: #868186;"></div>
                        5.62% Spam
                    </div>
                    <div>
                        <div class="dot" style="background:#5A535A;"></div>
                        4.41% Denegación de servicio
                    </div>
                    <div>
                        <div class="dot" style="background:#222222;"></div>
                        2.38% Escaneos de red
                    </div>
                    <div>
                        <div class="dot" style="background:#DAD8D8;"></div>
                        0.45% Robo de información
                    </div>
                </div>

                <div class="col-12 col-md-4 text-center m-0 image-wrapper">
                    <img src="{{ asset('img/PieChart.webp') }}">
                </div>
            </div>
        </div>
    </section>


    <section id="equipo" class="my-5 pb-3">
        <h2 class="my-5 text-center">Nuestro equipo</h2>

        <div class="row">
            <div class="col-12 col-sm-6 col-md-3 mb-3">
                <div class="card shadow h-100">
                    <div class="card-header"></div>
                    <div class="card-body">
                        <h3>
                            <span class="text-primary">CLAUDIO</span>
                            <span class="text-secondary">INNOVATION LEAD</span>
                        </h3>
                        <p>
                            Profesional en ciberseguridad y experto forense. Instructor en varios programas de Máster y
                            orador público. Miembro activo con varias asociaciones de expertos forenses y testigos, así
                            como foros de blockchain. Investigador invitado de la universidad de Leon.
                        </p>
                    </div>

                    <div class="card-footer">
                        <a href="https://www.linkedin.com/in/claudiochn/" target="_blank">
                            <img src="{{ asset('img/linkedin.png') }}">
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-12 col-sm-6 col-md-3 mb-3">
                <div class="card shadow h-100">
                    <div class="card-header" style="background: #5EA4AE"></div>
                    <div class="card-body">
                        <h3>
                            <span class="text-primary">ROSA</span>
                            <div class="text-secondary">LEGAL LEAD</div>
                        </h3>
                        <p>
                            Experta en cumplimiento legal y normativo y parte esencial de nuestra organización aportando
                            las herramientas legales necesarias para el cumplimiento de ENS, RGPD/GDPR/LOPD-GDD,
                            LSSI-CE, NIS y demás legislaciones aplicables a cada organización en particular. </p>
                    </div>

                    <div class="card-footer">
                        <a href="https://www.linkedin.com/in/rm-serrano/" target="_blank">
                            <img src="{{ asset('img/linkedin.png') }}">
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-12 col-sm-6 col-md-3 mb-3">
                <div class="card shadow h-100">
                    <div class="card-header" style="background: #2C7B88"></div>
                    <div class="card-body">
                        <h3>
                            <span class="text-primary">ALEX</span>
                            <div class="text-secondary">TECH LEAD</div>
                        </h3>
                        <p>
                            Alex proporciona liderazgo, visión y planificación estratégica para todas las áreas de
                            sistemas de información y tecnología para DLTCode y DLTx. Actualmente top 10 de HackTheBox
                            España y uno de los pentesters más valorados.
                        </p>
                    </div>

                    <div class="card-footer">
                        <a href="https://www.linkedin.com/in/%C3%A1lex-b-62a9971a4/" target="_blank">
                            <img src="{{ asset('img/linkedin.png') }}">
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-12 col-sm-6 col-md-3 mb-3">
                <div class="card shadow h-100">
                    <div class="card-header" style="background: #707070"></div>
                    <div class="card-body">
                        <h3>
                            <span class="text-primary">EVA</span>
                            <div class="text-secondary">SECURITY LEAD</div>
                        </h3>
                        <p>
                            Asesora en Defensa y Seguridad / Relaciones Institucionales y Seguridad física. Ex Jefa del
                            Departamento de Seguridad, Ingenería y Sistemas Aeroespaciales. Jefa de Seguridad –
                            Cualificaciones y acreditaciones del Ministerio de Defensa.
                        </p>
                    </div>

                    <div class="card-footer">
                        <a href="https://www.linkedin.com/in/eva-alvarez-del-manzano-6a2322a/" target="_blank">
                            <img src="{{ asset('img/linkedin.png') }}">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section id="platforms" class="my-5 p-3 pb-5">
        <h2 class="text-center my-5">Nuestras plataformas</h2>
        <div class="row">
            <div class="col-12 col-md-6 mb-3">
                <div class="card card-body h-100 shadow">
                    <h3 class="font-weight-bold text-secondary">0Malware</h3>
                    <p class="text-justify">0Malware responde a la necesidad trasladada por varios expertos e
                        investigadores forenses de
                        disponer de una herramienta para detectar malware y posible spyware de forma ágil en cualquier
                        tipo
                        de plataforma y dispositivo, sin limitar sus funcionalidades habituales.
                        <br>
                        <br>
                        Diseñado como una solución universal aplicable desde un solo dispositivo
                        para un particular a
                        empresas y
                        proyectos de cualquier magnitud, este marco modular y escalable combina Dpi (inspección profunda
                        de
                        paquetes), Cloud Computing, Data Mining y Blockchain para ofrecer una solución completa para
                        descubrir,
                        analizar e informes de amenazas previamente desconocidas, así como todas las conocidas incluso
                        antes
                        de
                        que ocurran.
                        <br>
                        <br>
                        Por su modularidad y modo de operación también ofrece la posibilidad de
                        funcionalidades
                        DLP
                        (prevención de pérdida de datos) controlando las fugas de datos desde cualquier dispositivo de
                        nuestra
                        red, no solo limitado a PC, notebook o smartphone, sino también ofreciendo control sobre
                        impresoras,
                        termostatos o otros dispositivos de IoT. conectado a nuestra red.
                    </p>

                    <img class="shadow-sm mt-4" src="{{ asset('/img/0mwr.webp') }}">
                </div>
            </div>

            <div class="col-12 col-md-6 mb-3">
                <div class="card card-body h-100 shadow">
                    <h3 class="font-weight-bold text-secondary">Attack Surface</h3>
                    <p class="text-justify">En los entornos empresariales modernos, las organizaciones se enfrentan a
                        una mayor presión para adoptar soluciones digitales para seguir siendo competitivas. Si bien
                        estas soluciones tienen indudables beneficios para las organizaciones, también amplían su
                        superficie de ataque potencial y las exponen a mayores niveles de riesgo de ciberseguridad. Si
                        no se abordan, estos riesgos pueden crear brechas de seguridad críticas que pueden ser
                        explotadas por los ciberdelincuentes.
                        <br>
                        <br>
                        Para ayudar a mantenerse protegido, muchas organizaciones están adoptando
                        programas de administración de la superficies de ataque que trabajan para evaluar continuamente
                        sus redes en busca de amenazas potenciales. Con un sistema de gestión de superficie de ataque
                        implementado, las organizaciones pueden evaluar proactivamente el riesgo y reducir su superficie
                        de ataque en tiempo real, limitando el impacto de las amenazas cibernéticas.
                        <br>
                        <br>
                        Attack Surface agiliza la gestión, identificación, clasificación,
                        priorización y monitorizacion continua de activos digitales que contienen o envían datos vitales
                        entre redes. Se ocupa del análisis continuo de los sistemas de red visibles desde internet y
                        ayuda a las organizaciones a identificar y abordar las vulnerabilidades a medida que surgen. Al
                        hacerlo, las empresas pueden reducir activamente su superficie de ataque potencial y, al mismo
                        tiempo, mejorar su postura general de ciberseguridad. Con este método, las organizaciones
                        también obtienen una mayor transparencia, lo que ayuda a fortalecer las relaciones con los
                        clientes y las asociaciones comerciales.</p>

                    <img class="shadow-sm" src="{{ asset('/img/attacksurface.webp') }}">
                </div>
            </div>
        </div>
    </section>

    @include('components.google')
@endsection

