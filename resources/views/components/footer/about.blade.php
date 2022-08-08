<div id="footer-columns-about" {{ $attributes }}>
    <h3 class="text-sm font-semibold text-indigo-300 tracking-wider uppercase">Nosotros</h3>
    <ul role="list" class="mt-4 space-y-4">
        <li>
            <a href="{{ route('legal.advice') }}" class="text-sm text-indigo-100 hover:text-white">Aviso legal</a>
        </li>
        <li>
            <a href="{{ route('legal.privacity') }}" class="text-sm text-indigo-100 hover:text-white">Política de privacidad</a>
        </li>
        <li>
            <a href="{{ route('legal.cookies') }}" class="text-sm text-indigo-100 hover:text-white">Política de cookies</a>
        </li>
        <li>
            <a href="#" class="gdpr-cookie-notice-nav-item-settings text-sm text-indigo-100 hover:text-white">Configuración de cookies</a>
        </li>
    </ul>
</div>
