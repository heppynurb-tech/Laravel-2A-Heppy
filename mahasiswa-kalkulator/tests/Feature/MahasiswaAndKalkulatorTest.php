<?php

namespace Tests\Feature;

use Tests\TestCase;

class MahasiswaAndKalkulatorTest extends TestCase
{
    public function test_mahasiswa_page_lists_all_students_and_details(): void
    {
        $this->get('/daftar/mahasiswa')
            ->assertOk()
            ->assertSee('Daftar Mahasiswa')
            ->assertSee('Anton')
            ->assertSee('Surabaya')
            ->assertSee('Budi')
            ->assertSee('Kediri')
            ->assertSee('Ani')
            ->assertSee('Malang')
            ->assertSee('Sinta')
            ->assertSee('L')
            ->assertSee('P');
    }

    public function test_triangle_calculator_parses_query_parameters_and_displays_area(): void
    {
        $this->get('/kalkulator/segitiga')
            ->assertOk()
            ->assertSee('Luas Segitiga')
            ->assertSee('name="alas"', false)
            ->assertSee('name="tinggi"', false);

        $this->get('/kalkulator/segitiga?alas=10&tinggi=5')
            ->assertOk()
            ->assertSee('Luas = ½ × 10 × 5')
            ->assertSee('25')
            ->assertSee('satuan²');
    }

    public function test_triangle_calculator_rejects_missing_or_non_positive_dimensions(): void
    {
        $this->from('/kalkulator/segitiga')
            ->get('/kalkulator/segitiga?alas=10')
            ->assertRedirect('/kalkulator/segitiga')
            ->assertSessionHasErrors(['tinggi']);

        $this->from('/kalkulator/segitiga')
            ->get('/kalkulator/segitiga?alas=0&tinggi=5')
            ->assertRedirect('/kalkulator/segitiga')
            ->assertSessionHasErrors(['alas']);
    }
}
