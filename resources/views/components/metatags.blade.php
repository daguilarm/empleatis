<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="csrf-token" content="{{ csrf_token() }}">
<title>{{ Metatag::set($config)->title() }}</title>
<meta name="description" content="{{ Metatag::set($config)->description() }}">
<meta name="copyright"content="{{ config('emplatis.author') }}">
<meta name="language" content="{{ $config->get('locale') }}">
<meta name="url" content="{{ $config->get('url') }}">
<meta name="identifier-URL" content="{{ env('APP_URL') }}">
<meta name="directory" content="submission">
<meta name="robots" content="index, follow">
<meta http-equiv="Expires" content="0">
<meta http-equiv="Pragma" content="no-cache">
<meta http-equiv="Cache-Control" content="no-cache">
<meta name="og:title" content="{{ Metatag::set($config)->title() }}"/>
<meta name="og:type" content="website"/>
<meta name="og:url" content="{{ $config->get('url') }}"/>
<meta name="og:site_name" content="{{ env('APP_NAME') }}"/>
<meta name="og:description" content="{{ Metatag::set($config)->description() }}"/>
<meta name="twitter:site" content="@daguilarm">
<meta name="twitter:creator" content="@daguilarm">
<meta name="twitter:title" content="{{ Metatag::set($config)->title() }}">
<meta name="twitter:description" content="{{ Metatag::set($config)->description() }}">
<meta name="twitter:url" content="{{ $config->get('url') }}">
<link rel="shortcut icon" href="/img/favicons/favicon.ico">
<link rel="icon" type="image/png" sizes="32x32" href="/img/favicons/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="/img/favicons/favicon-16x16.png">
<link rel="apple-touch-icon" sizes="180x180" href="/img/favicons/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="/img/favicons/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="/img/favicons/favicon-16x16.png">
<link rel="mask-icon" href="/safari-pinned-tab.svg" color="#666666">
<meta name="msapplication-TileColor" content="#ffffff">
<meta name="theme-color" content="#ffffff">
<link rel="dns-prefetch" href="{{ url()->to('/') }}">
