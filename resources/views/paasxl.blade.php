@extends('layouts.dashboard')

@section('title', 'Data PaasXL')

@push('styles')
    {{-- DataTables CSS --}}
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.5.0/css/responsive.dataTables.min.css">
@endpush

@section('header', 'Data PaasXL')

@section('content')
    <div class="p-4">
        <div class="bg-white rounded shadow p-4">
            <h1 class="text-xl font-bold mb-4">Data PaasXL</h1>
            <div class="overflow-x-auto">
                <table id="paasxlTable" class="display nowrap stripe hover" style="width:100%">
                    <thead>
                        <tr>
                            <th>Site ID OLO</th>
                            <th>Site Name OLO</th>
                            <th>Longitude NOM</th>
                            <th>Latitude NOM</th>
                            <th>Site ID Actual</th>
                            <th>Site Name Actual</th>
                            <th>Long Act</th>
                            <th>Lat Act</th>
                            <th>Province</th>                            
                            <th>City | Kabupaten</th>
                            <th>Address</th>
                            <th>Tower Type & Height</th>
                            <th>Mitra SACME</th>
                            <th>Power Status</th>
                            <th>PS Aktual Type</th>
                            <th>PLN Connect date (Reguler)</th>
                            <th>Kapasitas</th>
                            <th>ID Pelanggan</th>
                            <th>Remarks PLN Reguler</th>
                            <th>Date HO PLN</th>
                            <th>Mitra RECTI / PAAS</th>
                            <th>Status Recti</th>
                            <th>RFS Date</th>
                            <th>Target RECTI to XL (EXTERNAL)</th>
                            <th>Remarks RECTI</th>
                            <th>Tipe Rectifier</th>
                            <th>BAUF Done Date</th>
                            <th>WO Perangkat Terpasang</th>
                            <th>"Remark Alarm NOCOM (Active/No Active)"</th>
                            <th>Status NMS</th>
                            <th>SM</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($data as $row)
                            <tr>
                                <td>{{ $row->COL1 }}</td>
                                <td>{{ $row->COL2 }}</td>
                                <td>{{ $row->COL3 }}</td>
                                <td>{{ $row->COL4 }}</td>
                                <td>{{ $row->COL5 }}</td>
                                <td>{{ $row->COL6 }}</td>
                                <td>{{ $row->COL7 }}</td>
                                <td>{{ $row->COL8 }}</td>
                                <td>{{ $row->COL9 }}</td>
                                <td>{{ $row->COL10 }}</td>
                                <td>{{ $row->COL11 }}</td>
                                <td>{{ $row->COL12 }}</td>
                                <td>{{ $row->COL13 }}</td>
                                <td>{{ $row->COL14 }}</td>
                                <td>{{ $row->COL15 }}</td>
                                <td>{{ $row->COL16 }}</td>
                                <td>{{ $row->COL17 }}</td>
                                <td>{{ $row->COL18 }}</td>
                                <td>{{ $row->COL19 }}</td>
                                <td>{{ $row->COL20 }}</td>
                                <td>{{ $row->COL21 }}</td>
                                <td>{{ $row->COL22 }}</td>
                                <td>{{ $row->COL23 }}</td>
                                <td>{{ $row->COL24 }}</td>
                                <td>{{ $row->COL25 }}</td>
                                <td>{{ $row->COL26 }}</td>
                                <td>{{ $row->COL27 }}</td>
                                <td>{{ $row->COL28 }}</td>
                                <td>{{ $row->COL29 }}</td>
                                <td>{{ $row->COL30 }}</td>
                                <td>{{ $row->COL31 }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    {{-- jQuery --}}
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    {{-- DataTables JS --}}
    <script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.5.0/js/dataTables.responsive.min.js"></script>

    <script>
        $(document).ready(function() {
            $('#paasxlTable').DataTable({
                responsive: false,
                scrollX: false,
                pageLength: 153,
                lengthMenu: [20, 50, 100, 250, 500],
                language: {
                    search: "Cari:",
                    lengthMenu: "Tampilkan _MENU_ data per halaman",
                    zeroRecords: "Tidak ada data ditemukan",
                    info: "Menampilkan _START_ sampai _END_ dari _TOTAL_ data",
                    infoEmpty: "Tidak ada data tersedia",
                    infoFiltered: "(difilter dari total _MAX_ data)"
                }
            });
        });
    </script>
@endpush
