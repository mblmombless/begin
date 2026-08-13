@extends('layouts.app')

@section('content')
    <div style="margin-bottom: 20px;">
        <h1>Halaman 12: System Log (Log Sistem & Router)</h1>
        <p>Memantau catatan sistem otomatis dari perangkat MikroTik, Radius Server, dan core application.</p>
    </div>

    <!-- Filter System Log -->
    <form action="#" method="GET" style="background-color: white; padding: 15px; border: 1px solid #ddd; margin-bottom: 20px;">
        <input type="text" name="search" placeholder="Cari pesan log / perangkat..." style="padding: 6px; width: 240px;">
        <select name="level" style="padding: 6px;">
            <option value="">Semua Level Log</option>
            <option value="info">Info</option>
            <option value="warning">Warning</option>
            <option value="error">Error / Critical</option>
        </select>
        <select name="perangkat" style="padding: 6px;">
            <option value="">Semua Perangkat</option>
            <option value="router_core">Router Core (MikroTik)</option>
            <option value="radius">Radius Server (FreeRADIUS)</option>
            <option value="app_server">App Server Laravel</option>
        </select>
        <button type="submit" style="padding: 7px 15px;">Filter Log</button>
    </form>

    <!-- Tabel System Log -->
    <table border="1" cellpadding="8" cellspacing="0" style="width: 100%; border-collapse: collapse; background-color: white;">
        <thead>
            <tr style="background-color: #eee;">
                <th>Waktu</th>
                <th>Perangkat / Sumber</th>
                <th>Level</th>
                <th>Pesan Log Sistem</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>13 Agu 2026, 14:50:12</td>
                <td>Router Core (Bantul)</td>
                <td><span style="color: red; font-weight: bold;">ERROR</span></td>
                <td>PPPoE client CUST-002 disconnected: remote peer disconnected</td>
            </tr>
            <tr style="background-color: #f9f9f9;">
                <td>13 Agu 2026, 14:45:00</td>
                <td>Radius Server</td>
                <td><span style="color: orange; font-weight: bold;">WARNING</span></td>
                <td>High memory usage detected (85% utilization)</td>
            </tr>
            <tr>
                <td>13 Agu 2026, 14:00:22</td>
                <td>App Server</td>
                <td><span style="color: green; font-weight: bold;">INFO</span></td>
                <td>Automated daily database backup completed successfully.</td>
            </tr>
        </tbody>
    </table>
@endsection
