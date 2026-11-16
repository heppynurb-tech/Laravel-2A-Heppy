<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title') | Olshop</title>
    <style>
        :root {
            color-scheme: light;
            font-family: Inter, ui-sans-serif, system-ui, -apple-system, BlinkMacSystemFont, "Segoe UI", sans-serif;
            color: #172033;
            background: #f5f7fb;
        }
        * { box-sizing: border-box; }
        body { margin: 0; min-height: 100vh; }
        a { color: inherit; }
        .site-header { background: #fff; border-bottom: 1px solid #e6eaf0; }
        .nav-wrap { max-width: 1080px; margin: auto; padding: 18px 24px; display: flex; align-items: center; justify-content: space-between; gap: 24px; }
        .brand { color: #4f46e5; font-size: 1.25rem; font-weight: 800; text-decoration: none; }
        nav { display: flex; flex-wrap: wrap; gap: 22px; }
        nav a { color: #536078; font-size: .95rem; font-weight: 600; text-decoration: none; }
        nav a:hover, nav a[aria-current="page"] { color: #4f46e5; }
        main { max-width: 1080px; margin: auto; padding: 64px 24px; }
        .hero, .panel { background: #fff; border: 1px solid #e6eaf0; border-radius: 20px; padding: 40px; box-shadow: 0 12px 32px rgb(23 32 51 / 5%); }
        .hero { background: linear-gradient(135deg, #eef2ff, #fff 70%); }
        .eyebrow { color: #4f46e5; font-size: .8rem; font-weight: 800; letter-spacing: .12em; text-transform: uppercase; }
        h1 { margin: 12px 0 16px; font-size: clamp(2rem, 5vw, 3.2rem); line-height: 1.12; }
        .intro { max-width: 650px; color: #637087; font-size: 1.1rem; line-height: 1.7; }
        .button { display: inline-block; margin-top: 16px; padding: 12px 18px; border-radius: 10px; background: #4f46e5; color: #fff; font-weight: 700; text-decoration: none; }
        .button:hover { background: #4338ca; }
        .product-grid { display: grid; grid-template-columns: repeat(auto-fit, minmax(220px, 1fr)); gap: 18px; margin-top: 28px; }
        .product-card { display: flex; min-height: 220px; flex-direction: column; align-items: flex-start; background: #fff; border: 1px solid #e6eaf0; border-radius: 16px; padding: 24px; }
        .product-icon { display: grid; width: 52px; height: 52px; place-items: center; border-radius: 14px; background: #eef2ff; color: #4f46e5; font-size: 1.5rem; }
        .product-card h2 { margin: 18px 0 4px; font-size: 1.2rem; }
        .price { color: #4f46e5; font-size: 1.1rem; font-weight: 800; }
        .product-card .button { margin-top: auto; }
        .back-link { display: inline-block; margin-top: 24px; color: #4f46e5; font-weight: 700; text-decoration: none; }
        .site-footer { padding: 24px; color: #8390a5; text-align: center; font-size: .9rem; }
        @media (max-width: 560px) {
            .nav-wrap { align-items: flex-start; flex-direction: column; }
            main { padding-top: 36px; }
            .hero, .panel { padding: 28px 22px; }
        }
    </style>
</head>
<body>
    <header class="site-header">
        <div class="nav-wrap">
            <a class="brand" href="{{ route('home.page') }}">Olshop</a>
            <nav aria-label="Navigasi utama">
                <a href="{{ route('home.page') }}" @if(request()->routeIs('home.page')) aria-current="page" @endif>Home</a>
                <a href="{{ route('product') }}" @if(request()->routeIs('product', 'product.detail')) aria-current="page" @endif>Product</a>
                <a href="{{ route('about') }}" @if(request()->routeIs('about')) aria-current="page" @endif>About</a>
            </nav>
        </div>
    </header>
    <main>
        @yield('content')
    </main>
    <footer class="site-footer">© {{ date('Y') }} Olshop. Belanja mudah, nyaman, dan terpercaya.</footer>
</body>
</html>
