@extends('legal')

@section('section')
    <div id="legal">
        <h3>Política de cookies</h3>

        @include('legal.ownership')

        <p>
            La presente política de cookies tiene por finalidad informarle de manera clara y precisa sobre las cookies que se utilizan en la <b>PLATAFORMA</b>.
        </p>

        <h4>¿Qué son las cookies?</h4>
        <p>
            Las cookies son pequeños fragmentos de texto que los sitios web, que visita, envían al navegador y por tanto, que permite que este, recuerde información sobre su visita, su idioma preferido y otras opciones, con el fin de facilitar su próxima visita y hacer que el sitio web le resulte más útil.
        </p>
        <p>
            Las cookies desempeñan un papel muy importante y contribuyen a tener una mejor experiencia de navegación para el usted (en adelante el <b>USUARIO</b>).
        </p>
        <h4>Tipos de cookies</h4>
        <p>
            Existen diversas clasificaciones para las cookies. A continuación vamos a comentar las principales:
        </p>
        <ul>
            <li>Según quién gestione las cookies, se pueden distinguir dos tipos: cookies propias y cookies de terceros.</li>
            <li>Tambien pueden clasificarse en función del tiempo que permanecen almacenadas en el navegador: cookies de sesión o cookies persistentes.</li>
            <li>Según la finalidad para la que se traten los datos obtenidos: cookies técnicas, cookies de personalización, cookies de análisis, cookies publicitarias y cookies de publicidad comportamental:</li>
            <ul>
                <li><b>Cookies técnicas</b>: aquellas que permiten al usuario la navegación a través de una página web, plataforma o aplicación y la utilización de las diferentes opciones o servicios que en ella existan como, por ejemplo, controlar el tráfico y la comunicación de datos, identificar la sesión, acceder a partes de acceso restringido, recordar los elementos que integran un pedido, realizar el proceso de compra de un pedido, realizar la solicitud de inscripción o participación en un evento, utilizar elementos de seguridad durante la navegación, almacenar contenidos para la difusión de vídeos o sonido o compartir contenidos a través de redes sociales.</li>
                <li><b>Cookies de personalización</b>: permiten al usuario acceder al servicio con algunas características de carácter general predefinidas en función de una serie de criterios en el terminal del usuario como por ejemplo serian el idioma, el tipo de navegador a través del cual accede al servicio, la configuración regional desde donde accede al servicio, etc.</li>
                <li><b>Cookies de análisis</b>: permiten al responsable de las mismas, el seguimiento y análisis del comportamiento de los usuarios de los sitios web a los que están vinculadas. La información recogida mediante este tipo de cookies se utiliza en la medición de la actividad de los sitios web, aplicación o plataforma y para la elaboración de perfiles de navegación de los usuarios de dichos sitios, aplicaciones y plataformas, con el fin de introducir mejoras en función del análisis de los datos de uso que hacen los usuarios del servicio.</li>
                <li><b>Cookies publicitarias</b>: permiten la gestión, de la forma más eficaz posible, de los espacios publicitarios.</li>
                <li><b>Cookies de publicidad comportamental</b>: almacenan información del comportamiento de los usuarios obtenida a través de la observación continuada de sus hábitos de navegación, lo que permite desarrollar un perfil específico para mostrar publicidad en función del mismo. </li>
            </ul>
        </ul>
        <p>
            En el caso de que las cookies sean instaladas desde un equipo o dominio gestionado por el propio editor pero la información que se recoja mediante éstas sea gestionada por un tercero, no pueden ser consideradas como cookies propias.
        </p>
        <p>
            Para más información sobre cookies:
        </p>
        <ul>
            <li><a href="https://www.aepd.es" target="_blank">Agencia Española de Protección de Datos</a></li>
            <li><a href="https://www.aepd.es/es/documento/guia-cookies.pdf" target="_blank">Guía de uso de cookies de la AEPD</a></li>
        </ul>
        <h4>Cookies propias utilizadas por la <b>PLATAFORMA</b></h4>
        <p>
            La web utiliza las cookies necesarias por el lenguaje de programación PHP y el Framework Laravel para poder funcionar correctamente. Estas son cookies técnicas, como las de inicio de sesión, etc.
        </p>
        <p>
            Para la gestión del consentimiento de cookies, se utiliza la cookie: gdprCookieNotice, que almacena la configuración del consentimiento para las cookies del usuario.
        </p>
        <p>A modo de resumen:</p>
        <table>
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Nombre técnico</th>
                    <th>Propósito</th>
                    <th>Descripción</th>
                    <th>Duración</th>
                    <th>Gestión</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Seguridad XSRF</td>
                    <td>XSRF-TOKEN</td>
                    <td>Técnica</td>
                    <td>Proteger la plataforma contra ataques por falsificación de remitente.</td>
                    <td>24 horas</td>
                    <td>Propia</td>
                </tr>
                <tr>
                    <td>Sesión</td>
                    <td>laravel_session</td>
                    <td>Técnica</td>
                    <td>Distinguir entre usuarios sin guardar datos personales.</td>
                    <td>24 horas</td>
                    <td>Propia</td>
                </tr>
                <tr>
                    <td>Favoritos</td>
                    <td>{{ config('cookie.offers') }}</td>
                    <td>Técnica</td>
                    <td>Guardar ofertas en favoritos por parte del usuario.</td>
                    <td>30 días</td>
                    <td>Propia</td>
                </tr>
                <tr>
                    <td>GDPR Cookie</td>
                    <td>gdprCookieNotice</td>
                    <td>Técnica</td>
                    <td>Gestión del consentimiento de las cookies.</td>
                    <td>30 días</td>
                    <td>Propia</td>
                </tr>
            </tbody>
        </table>
        <h4>Cookies de terceros</h4>
        <p>
            Actualmente se utilizan las cookies de Google Analytics para obtener datos analíticos sobre los visitantes del web. Para ello se utilizan las siguientes cookies:
        </p>

        <table>
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Nombre técnico</th>
                    <th>Propósito</th>
                    <th>Descripción</th>
                    <th>Duración</th>
                    <th>Gestión</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Google Analytics</td>
                    <td>_ga</td>
                    <td>Analítica</td>
                    <td>Para distinguir entre usuarios.</td>
                    <td>2 años</td>
                    <td>Terceros</td>
                </tr>
                <tr>
                    <td>Google Analytics</td>
                    <td>_gid</td>
                    <td>Analítica</td>
                    <td>Para distinguir entre usuarios.</td>
                    <td>24 horas</td>
                    <td>Terceros</td>
                </tr>
                <tr>
                    <td>Google Analytics</td>
                    <td>_gat</td>
                    <td>Analítica</td>
                    <td>Se usa para limitar el porcentaje de solicitudes.</td>
                    <td>1 minuto</td>
                    <td>Terceros</td>
                </tr>
                <tr>
                    <td>Google Analytics</td>
                    <td>_gac_{property-id}</td>
                    <td>Analítica</td>
                    <td>Incluye información de la campaña relativa al usuario. Se utiliza cuando se vinculan cuentas de Google Analytics y AdWords.</td>
                    <td>90 días</td>
                    <td>Terceros</td>
                </tr>
            </tbody>
        </table>
        <p>Para más información sobre las cookies de Google:</p>
        <ul>
            <li><a href="https://developers.google.com/analytics/devguides/collection/gajs/cookie-usage?hl=es" target="_blank">Cookies de Google</a></li>
        </ul>
        <h4>Aceptación de la política de cookies</h4>
        <p>
            La PLATAFORMA asume que usted acepta el uso de cookies. No obstante, la PLATAFORMA muestra información sobre su Política de cookies en la parte inferior de cualquier página del portal con el objeto de que usted sea consciente de la misma.
        </p>
        <p>
            Ante esta información, y una vez que aparezca el banner de aceptación de cookies, es posible llevar a cabo las siguientes acciones:
        </p>
        <ul>
            <li>Aceptar cookies. No se volverá a visualizar este aviso al acceder a cualquier página del portal durante la presente sesión.</li>
            <li>Cerrar. Se oculta el aviso en la presente página.</li>
            <li>Modificar su configuración. Podrá obtener más información sobre qué son las cookies, conocer la Política de *cookies* de la PLATAFORMA y modificar la configuración de su navegador. </li>
        </ul>
        <h4>Cómo modificar la configuración de las cookies en su navegador</h4>
        <p>
            Usted tiene la opción de permitir, bloquear o eliminar las cookies instaladas en su equipo mediante la configuración de las opciones del navegador. Al desactivar cookies, algunos de los servicios disponibles podrían dejar de estar operativos. La forma de deshabilitar las cookies es diferente para cada navegador, pero normalmente puede hacerse desde el menú Herramientas u Opciones. También puede consultarse el menú de Ayuda del navegador dónde se pueden encontrar instrucciones. El usuario podrá en cualquier momento elegir qué cookies quiere que funcionen en este sitio web.
        </p>
        <ul>
            <li><a href="http://windows.microsoft.com/es-es/windows-vista/Block-or-allow-cookies" target="_blank">Microsoft Internet Explorer o Microsoft Edge</a></li>
            <li><a href="http://support.mozilla.org/es/kb/impedir-que-los-sitios-web-guarden-sus-preferencia" target="_blank">Mozilla Firefox</a></li>
            <li><a href="https://support.google.com/accounts/answer/61416?hl=es" target="_blank">Chrome</a></li>
            <li><a href="http://safari.helpmax.net/es/privacidad-y-seguridad/como-gestionar-las-cookies/" target="_blank">Safari</a></li>
            <li><a href="http://help.opera.com/Linux/10.60/es-ES/cookies.html" target="_blank">Opera</a></li>
        </ul>
        <p>
            Además, también puede gestionar el almacén de cookies en su navegador a través de herramientas como las siguientes:
        </p>
        <ul>
            <li><a href="http://www.ghostery.com" target="_blank">Ghostery</a></li>
            <li><a href="www.youronlinechoices.com/es/" target="_blank">Your online choices</a></li>
        </ul>
        <p>
            El hecho de que el Usuario configure su navegador para rechazar todas las cookies o expresamente nuestras cookies puede suponer que no sea posible acceder a algunos de los servicios y que su experiencia en nuestra <b>PLATAFORMA</b> pueda resultar menos satisfactoria.
        </p>
    </div>
@endsection
