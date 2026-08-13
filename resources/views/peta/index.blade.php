@extends('layouts.app')

@section('content')
    <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 20px;">
        <h1>Halaman 8: Peta Infrastruktur & Sebaran Pelanggan</h1>
        <div>
            <button type="button" style="padding: 8px 15px; background-color: #007bff; color: white; border: none; cursor: pointer;">+ Tambah Titik ODP / Core</button>
        </div>
    </div>

    <!-- Filter Peta -->
    <div style="background-color: white; padding: 15px; border: 1px solid #ddd; margin-bottom: 20px; display: flex; gap: 15px; align-items: center;">
        <label style="font-weight: bold;">Filter Layer:</label>
        <label><input type="checkbox" checked> Sebaran Pelanggan Aktif</label>
        <label><input type="checkbox" checked> Sebaran Pelanggan Isolir</label>
        <label><input type="checkbox" checked> Titik ODP (Optical Distribution Point)</label>
        <label><input type="checkbox" checked> Jalur Kabel Fiber Optik</label>
    </div>

    <!-- MOCKUP CONTAINER PETA (GIS / LEAFLET / GOOGLE MAPS) -->
    <div style="border: 2px solid #999; height: 450px; background-color: #e5e3df; display: flex; align-items: center; justify-content: center; position: relative;">
        <div style="text-align: center; color: #555;">
            <h3>[ MOCKUP INTERACTIVE MAP / GIS ]</h3>
            <p>Menampilkan titik koordinat sebaran pelanggan dan perangkat jaringan ODP di area cakupan layanan.</p>
            <small style="background: white; padding: 5px 10px; border: 1px solid #ccc;">Koordinat Pusat: -7.0892, 110.8553 (Purwodadi Area)</small>
        </div>
    </div>

    <!-- Keterangan / Legenda Peta -->
    <div style="margin-top: 15px; background-color: white; padding: 15px; border: 1px solid #ddd; display: flex; gap: 30px;">
        <div><span style="color: green; font-size: 18px;">●</span> Pelanggan Aktif</div>
        <div><span style="color: red; font-size: 18px;">●</span> Pelanggan Isolir / Gangguan</div>
        <div><span style="color: blue; font-size: 18px;">■</span> Titik ODP (Kapasitas Terisi / Total)</div>
    </div>
@endsection
