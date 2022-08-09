<div id="footer-columns-about" {{ $attributes }}>
    <h3 class="px-2 text-sm font-semibold text-indigo-300 tracking-wider uppercase">Nosotros</h3>
    <ul role="list" class="mt-4 space-y-4">
        <li>
            <a href="{{ route('legal.advice') }}" class="{{ $link }}">Aviso legal</a>
        </li>
        <li>
            <a href="{{ route('legal.privacity') }}" class="{{ $link }}">Política de privacidad</a>
        </li>
        <li>
            <a href="{{ route('legal.cookies') }}" class="{{ $link }}">Política de cookies</a>
        </li>
    </ul>
</div>
