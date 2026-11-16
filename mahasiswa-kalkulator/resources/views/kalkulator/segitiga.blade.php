@extends('layouts.akademik')

@section('title', 'Kalkulator Segitiga')

@section('content')
    <section class="panel calculator">
        <p class="eyebrow">Kalkulator geometri</p>
        <h1>Luas Segitiga</h1>
        <p class="intro">Masukkan alas dan tinggi untuk menghitung luas segitiga.</p>

        <form class="form" method="GET" action="{{ route('kalkulator.segitiga') }}">
            <label for="alas">Alas</label>
            <input id="alas" name="alas" type="number" min="0" step="any" value="{{ $alas ?? request('alas') }}" placeholder="Contoh: 10" required>
            @error('alas')
                <p class="error">{{ $message }}</p>
            @enderror

            <label for="tinggi">Tinggi</label>
            <input id="tinggi" name="tinggi" type="number" min="0" step="any" value="{{ $tinggi ?? request('tinggi') }}" placeholder="Contoh: 5" required>
            @error('tinggi')
                <p class="error">{{ $message }}</p>
            @enderror

            <button type="submit">Hitung Luas</button>
        </form>

        @if ($luas !== null)
            <div class="result" role="status">
                <p class="eyebrow">Hasil perhitungan</p>
                <p class="formula">Luas = ½ × {{ $alas }} × {{ $tinggi }}</p>
                <p class="value">{{ rtrim(rtrim(number_format($luas, 2, ',', '.'), '0'), ',') }} <span>satuan²</span></p>
            </div>
        @endif
    </section>
@endsection
