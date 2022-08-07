@extends('legal')

@section('section')
<div id="legal">
    <h3>Politica de privacidad</h3>

    @include('legal.ownership')

    <h4>Principios aplicados en el tratamiento de datos</h4>
    <p>
        En el tratamiento de tus datos personales, el <b>TITULAR</b> aplicará los siguientes principios que se ajustan a las exigencias del nuevo reglamento europeo de protección de datos:
    </p>
    <ul>
        <li>Principio de licitud, lealtad y transparencia: El <b>TITULAR</b> siempre requerirá el consentimiento para el tratamiento de tus datos personales que puede ser para uno o varios fines específicos sobre los que te informará previamente con absoluta transparencia.</li>
        <li>Principio de minimización de datos: El <b>TITULAR</b> solicitará solo los datos estrictamente necesarios para el fin o los fines que los solicita.</li>
        <li>Principio de limitación del plazo de conservación: Los datos se mantendrán durante el tiempo estrictamente necesario para el fin o los fines del tratamiento. El <b>TITULAR</b> informará del plazo de conservación correspondiente según la finalidad. En el caso de suscripciones, el <b>TITULAR</b> revisará periódicamente las listas y eliminará aquellos registros inactivos durante un tiempo considerable.</li>
        <li>Principio de integridad y confidencialidad: Los datos serán tratados de tal manera que su seguridad, confidencialidad e integridad esté garantizada. El <b>TITULAR</b> tomará las precauciones necesarias para evitar el acceso no autorizado o uso indebido de los datos de sus usuarios por parte de terceros.</li>
    </ul>
    <h4>Obtención de datos personales</h4>
    <p>
        Para navegar por la <b>PLATAFORMA</b> no es necesario que se facilite ningún dato personal. Además, actualmente no se guarda ningún dato de catacter personal. Ya que la <b>PLATAFORMA</b> no dispone de formularios de contacto, boletines, bases de datos de usuarios, ni cualquier otro medio o soporte para recopilar y almacenar información personal de los usuarios de la misma.
    </p>
    <p>
        En el momento en que dicha situación cambie, se informará debidamente en el presente apartado, sobre los nuevos métodos de obtención de datos personales.
    </p>
    <h4>Derechos del usuario</h4>
    <p>A continuación se muestrán los derechos que tienen los usuarios de la <b>PLATAFORMA</b> respecto al tratamiento de sus datos personales (en el caso que aplique):</p>
    <ul>
        <li>Solicitar el acceso a los datos almacenados.</li>
        <li>Solicitar una rectificación o la cancelación.</li>
        <li>Solicitar la limitación de su tratamiento.</li>
        <li>Oponerse al tratamiento de dichos datos.</li>
        <li>Solicitar la portabilidad de sus datos.</li>
    </ul>
    <p>
        El ejercicio de estos derechos es personal y por tanto sólo puede ser ejercido directamente por el interesado, para ello, debe solicitarlo directamente al <b>TITULAR</b> de la <b>PLATAFORMA</b>, lo que significa que cualquier cliente, suscriptor o colaborador que haya facilitado sus datos en algún momento puede dirigirse al <b>TITULAR</b> y pedir información sobre los datos que tiene almacenados y sobre cómo los ha obtenido, solicitar la rectificación de los mismos, solicitar la portabilidad de sus datos personales, oponerse al tratamiento, limitar su uso o solicitar la cancelación de esos datos en los ficheros del <b>TITULAR</b>.
    </p>
    <p>
        Para ejercitar los derechos de acceso, rectificación, cancelación, portabilidad y oposición tienes que enviar un correo electrónico al EMAIL del <b>TITULAR</b>, junto con la prueba válida en derecho como una fotocopia del D.N.I. o equivalente.
    </p>
    <p>
        El usuario tiene derecho a la tutela judicial efectiva y a presentar una reclamación ante la autoridad de control, en este caso, la <strong>Agencia Española de Protección de Datos</strong>, si se considera que el tratamiento de sus datos personales infringe el reglamento vigente.
    </p>
    <h4>Finalidad del tratamiento de datos personales</h4>
    <p>Cuando un usuario se conecta a la <b>PLATAFORMA</b> para mandar un correo al <b>TITULAR</b>, se suscribe a un boletín o realiza una contratación de algún servicio, se está facilitando información de carácter personal de la que el responsable es el <b>TITULAR</b>. Esta información puede incluir datos de carácter personal como pueden ser tu dirección IP, nombre y apellidos, dirección física, dirección de correo electrónico, número de teléfono, y otra información. Al facilitar esta información, el usuario da su consentimiento para que la información sea recopilada, utilizada, gestionada y almacenada por el <b>TITULAR</b>, en los términos descritos en el <a href="{{ route('legal.advice') }}">Aviso legal</a> y en la presente <strong>Política de Privacidad</strong>.</p>
    <p>
        Los datos personales y la finalidad del tratamiento por parte del <b>TITULAR</b> es diferente según el método para la obtención de la información. A continuación se describen los métodos utilizados por la <b>PLATAFORMA</b> para obtener los datos personales de los usuarios:
    </p>
    <ul>
        <li>Actualmente no existen ni métodos ni finalidades específicas para el almacenamiento de los datos de los usuarios.</li>
    </ul>
    <p>
        Existen otras finalidades por las que el <b>TITULAR</b> puede tratar los datos personales:
    </p>
    <ul>
        <li>Para garantizar el cumplimiento de las condiciones recogidas en el <a href="{{ route('legal.advice') }}">Aviso legal</a> y en la ley aplicable. Esto puede incluir el desarrollo de herramientas y algoritmos que ayuden a la <b>PLATAFORMA</b> a garantizar la confidencialidad de los datos personales que recoge.</li>
        <li>Para apoyar y mejorar los servicios que ofrece este a la <b>PLATAFORMA</b>.</li>
        <li>Para analizar la navegación. El <b>TITULAR</b> puede recoger otros datos no identificativos que se obtienen mediante el uso de cookies que se descargan en el ordenador del usuario, cuando este navega por la <b>PLATAFORMA</b>, cuyas caracterísiticas y finalidad están detalladas en la <a href="{{ route('legal.cookies') }}">Política de cookies</a>.</li>
        <li>Para gestionar las redes sociales. Si el <b>TITULAR</b> tiene presencia en redes sociales, si el usuario se hace seguidor en dichas redes sociales del <b>TITULAR</b> el tratamiento de los datos personales se regirá por este apartado, así como por aquellas condiciones de uso, políticas de privacidad y normativas de acceso que pertenezcan a la red social que proceda en cada caso y que el usuario debe haber aceptado previamente.</li>
    </ul>
    <p>
        Se pueden consultar las políticas de privacidad de las principales redes sociales en estos enlaces utilizadas por el <b>TITULAR</b>:
    </p>
    <ul>
        <li><a href="https://twitter.com/es/privacy" target="_blank" rel="nofollow">Twitter</a></li>
        <li><a href="https://es.linkedin.com/legal/privacy-policy" target="_blank" rel="nofollow">Linkedin</a></li>
    </ul>
    <p>
        El <b>TITULAR</b> tratará los datos personales con la finalidad de administrar correctamente su presencia en la red social, informarte de sus actividades, productos o servicios, así como para cualquier otra finalidad que las normativas de las redes sociales permitan.
    </p>
    <p>
        En ningún caso el <b>TITULAR</b> utilizará los perfiles de seguidores en redes sociales para enviar publicidad de manera individual.
    </p>
    <h4>Seguridad de los datos personales</h4>
    <p>
        Para proteger los datos personales, el <b>TITULAR</b> toma todas las precauciones razonables y sigue las mejores prácticas de la industria para evitar su pérdida, mal uso, acceso indebido, divulgación, alteración o destrucción de los mismos.
    </p>
    <p>
        La <b>PLATAFORMA</b> está alojada en <a href="https://www.digitalocean.com" target="_blank" rel="nofollow">Digitalocean</a>. La seguridad de los datos está garantizada por parte del proveedor, tomando todas las medidas de seguridad necesarias para ello. Para más información sobre el tema:
    </p>
    <ul>
        <li><a href="https://www.digitalocean.com/legal">Digitalocean Legal</a></li>
    </ul>
    <p>
        El código fuente de la <b>PLATAFORMA</b> también se encuentra almacenado en <a href="https://github.com" target="_blank" rel="nofollow">Github</a>. En ningún caso se almacenan ni datos personales y copias de seguridad de la base de datos con información personal. Sólo una copia del código fuente de la <b>PLATAFORMA</b>.
    </p>
    <h4>Contenido de otros sitios web</h4>
    <p>
        Las páginas de la <b>PLATAFORMA</b> pueden incluir contenido incrustado (por ejemplo, vídeos, imágenes, artículos, etc.). El contenido incrustado de otras web se comporta exactamente de la misma manera que si hubieras visitado la otra web.
    </p>
    <p>
        Estos sitios web pueden recopilar datos sobre el usuario, utilizar cookies, incrustar un código de seguimiento adicional de terceros, y supervisar la interacción del usuario usando este código.
    </p>
    <p>
        Para que la <b>PLATAFORMA</b> funcione correctamente necesita utilizar cookies, que es una información que se almacena en el navegador web del usuario.
    </p>
    <p>
        En la página <a href="{{ route('legal.cookies') }}">Política de cookies</a>, se pueden consultar toda la información relativa a la política de recogida, la finalidad y el tratamiento de las cookies.
    </p>
    <h4>Legitimación para el tratamiento de datos</h4>
    <p>
        La base legal para el tratamiento de los datos es: el <strong>CONSENTIMIENTO</strong>
    </p>
    <p>
        Para contactar con el <b>TITULAR</b>, suscribirse a un boletín o realizar comentarios en la <b>PLATAFORMA</b> deberá aceptar la presente <strong>Política de Privacidad</strong>.
    </p>
    <h4>Categorías de datos personales</h4>
    <p>
        Las categorías de datos personales que trata el <b>TITULAR</b> son:
    </p>
        <ul>
            <li>Datos identificativos (actualmente no se tratan ningún tipo de datos).</li>
        </ul>
    <h4>Conservación de datos personales</h4>
    <p>
        Los datos personales que se proporcionen al <b>TITULAR</b> se conservarán hasta que se solicite su supresión.
    </p>
    <h4>Destinatarios de datos personales</h4>
    <p>
        No hay destinatarios de datos personales.
    </p>
    <h4>Navegación Web</h4>
    <p>
        Al navegar por la <b>PLATAFORMA</b> se pueden recoger datos no identificativos, que pueden incluir, la dirección IP, geolocalización, un registro de cómo se utilizan los servicios y sitios, hábitos de navegación y otros datos que no pueden ser utilizados para identificarte.
    </p>
    <p>
        En caso de utilizarse servicios de terceros, la información serviría para obtener datos estadísticos, analizar tendencias, administrar el sitio, estudiar patrones de navegación y para recopilar información demográfica. Podrás tener más información en nuestra <a href="{{ route('legal.cookies') }}">Política de cookies</a>.
    </p>
    <h4>Exactitud y veracidad de los datos personales</h4>
    <p>
        En caso de facilitarse datos personales, el usuario se compromete a que los datos facilitados al <b>TITULAR</b> sean correctos, completos, exactos y vigentes, así como a mantenerlos debidamente actualizados.
    </p>
    <p>
        Como Usuario del <b>PLATAFORMA</b> se es el único responsable de la veracidad y corrección de los datos que se remitan, exonerando a el <b>TITULAR</b> de cualquier responsabilidad al respecto.
    </p>
    <h4>Aceptación y consentimiento</h4>
    <p>
        Como Usuario de la <b>PLATAFORMA</b> declara haber sido informado de las condiciones sobre protección de datos de carácter personal, que acepta y consiente el tratamiento de los mismos por parte de el <b>TITULAR</b> en la forma y para las finalidades indicadas en esta <strong>Política de Privacidad</strong>.
    </p>
    <h4>Revocabilidad</h4>
    <p>
        Para ejercitar sus derechos de acceso, rectificación, cancelación, portabilidad y oposición, el usuario tendrá que enviar un correo electrónico al EMAIL junto con la prueba válida en derecho como una fotocopia del D.N.I. o equivalente.
    </p>
    <p>
        El ejercicio de los derechos del usuario, no incluye ningún dato que el <b>TITULAR</b> esté obligado a conservar con fines administrativos, legales o de seguridad.
    </p>
    <h4>Cambios en la Política de Privacidad</h4>
    <p>
        El <b>TITULAR</b> se reserva el derecho a modificar la presente Política de Privacidad para adaptarla a novedades legislativas o jurisprudenciales, así como a prácticas de la industria.
    </p>
    <p>
        Estas políticas estarán vigentes hasta que sean modificadas por otras debidamente publicadas.
    </p>
</div>

@endsection
