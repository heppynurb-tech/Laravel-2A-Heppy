<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title') | Akademik</title>
    <style>
        :root {
            font-family: Inter, ui-sans-serif, system-ui, -apple-system, BlinkMacSystemFont, "Segoe UI", sans-serif;
            color: #1d2939;
            background: #f3f6fb;
        }
        * { box-sizing: border-box; }
        body { margin: 0; min-height: 100vh; }
        .header { background: #fff; border-bottom: 1px solid #e4e9f1; }
        .nav { max-width: 1000px; margin: auto; padding: 18px 24px; display: flex; align-items: center; justify-content: space-between; gap: 24px; }
        .brand { color: #0e7490; font-size: 1.15rem; font-weight: 800; text-decoration: none; }
        .nav-links { display: flex; flex-wrap: wrap; gap: 20px; }
        .nav-links a { color: #526176; font-size: .95rem; font-weight: 650; text-decoration: none; }
        .nav-links a:hover, .nav-links a[aria-current="page"] { color: #0e7490; }
        main { max-width: 1000px; margin: auto; padding: 56px 24px; }
        .panel { padding: 36px; border: 1px solid #e4e9f1; border-radius: 18px; background: #fff; box-shadow: 0 12px 32px rgb(29 41 57 / 5%); }
        .eyebrow { color: #0e7490; font-size: .78rem; font-weight: 800; letter-spacing: .12em; text-transform: uppercase; }
        h1 { margin: 10px 0 20px; font-size: clamp(2rem, 5vw, 2.8rem); }
        .table-wrap { overflow-x: auto; border: 1px solid #e4e9f1; border-radius: 12px; }
        table { width: 100%; border-collapse: collapse; text-align: left; }
        th, td { padding: 16px 20px; border-bottom: 1px solid #e9edf3; }
        th { background: #ecfeff; color: #155e75; font-size: .84rem; letter-spacing: .04em; text-transform: uppercase; }
        tbody tr:last-child td { border-bottom: 0; }
        tbody tr:hover { background: #f8fafc; }
        .badge { display: inline-block; min-width: 34px; padding: 5px 9px; border-radius: 999px; background: #ecfeff; color: #155e75; font-weight: 800; text-align: center; }
        .calculator { max-width: 680px; margin: auto; }
        .intro { color: #667085; line-height: 1.7; }
        .form { display: grid; gap: 10px; margin-top: 24px; }
        label { margin-top: 8px; font-weight: 700; }
        input { width: 100%; padding: 13px 14px; border: 1px solid #d0d7e2; border-radius: 10px; background: #fff; color: #1d2939; font: inherit; }
        input:focus { border-color: #0e7490; outline: 3px solid rgb(14 116 144 / 14%); }
        button { justify-self: start; margin-top: 12px; padding: 12px 18px; border: 0; border-radius: 10px; background: #0e7490; color: #fff; cursor: pointer; font: inherit; font-weight: 700; }
        button:hover { background: #155e75; }
        .error { margin: 0; color: #b42318; font-size: .9rem; }
        .result { margin-top: 28px; padding: 22px; border: 1px solid #a5f3fc; border-radius: 14px; background: #ecfeff; }
        .formula { color: #526176; }
        .value { margin: 0; color: #0e7490; font-size: 2rem; font-weight: 800; }
        .value span { font-size: .95rem; font-weight: 600; }
        footer { padding: 24px; color: #8390a5; text-align: center; font-size: .9rem; }
        @media (max-width: 560px) {
            .nav { align-items: flex-start; flex-direction: column; }
            main { padding-top: 32px; }
            .panel { padding: 24px 20px; }
        }
    </style>
</head>
<body>
    <header class="header">
        <div class="nav">
            <a class="brand" href="{{ route('mahasiswa.index') }}">Akademik</a>
            <nav class="nav-links" aria-label="Navigasi utama">
                <a href="{{ route('mahasiswa.index') }}" @if(request()->routeIs('mahasiswa.*')) aria-current="page" @endif>Mahasiswa</a>
                <a href="{{ route('kalkulator.segitiga') }}" @if(request()->routeIs('kalkulator.*')) aria-current="page" @endif>Kalkulator</a>
            </nav>
        </div>
    </header>
    <main>
        @yield('content')
    </main>
    <footer>Aplikasi Mahasiswa &amp; Kalkulator Segitiga</footer>
</body>
</html>
