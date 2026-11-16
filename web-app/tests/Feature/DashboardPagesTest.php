<?php

namespace Tests\Feature;

use Tests\TestCase;

class DashboardPagesTest extends TestCase
{
    public function test_home_product_and_about_pages_are_available(): void
    {
        $this->get('/home')
            ->assertOk()
            ->assertSee('Selamat Datang di Olshop Kami');

        $this->get('/product')
            ->assertOk()
            ->assertSee('Sepatu')
            ->assertSee('Baju')
            ->assertSee('Celana')
            ->assertSee('/produk/detail/300000')
            ->assertSee('/produk/detail/200000')
            ->assertSee('/produk/detail/150000');

        $this->get('/about')
            ->assertOk()
            ->assertSee('Lorem ipsum');
    }

    public function test_product_detail_displays_selected_product_price(): void
    {
        $this->get('/produk/detail/300000')
            ->assertOk()
            ->assertSee('Sepatu')
            ->assertSee('Rp 300.000');

        $this->get('/produk/detail/200000')
            ->assertOk()
            ->assertSee('Baju')
            ->assertSee('Rp 200.000');

        $this->get('/produk/detail/150000')
            ->assertOk()
            ->assertSee('Celana')
            ->assertSee('Rp 150.000');
    }

    public function test_unknown_product_price_returns_not_found(): void
    {
        $this->get('/produk/detail/999999')->assertNotFound();
    }
}
