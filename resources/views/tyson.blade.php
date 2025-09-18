@extends('layouts.dashboard')

@section('title', 'Data Tyson')

@push('styles')
    {{-- DataTables CSS --}}
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.5.0/css/responsive.dataTables.min.css">
@endpush

@section('header', 'Data Tyson')

@section('content')
    <div class="p-4">
        <div class="bg-white rounded shadow p-4">
            <h1 class="text-xl font-bold mb-4">Data Tyson</h1>
            <div class="overflow-x-auto">
                <table id="tysonTable" class="display nowrap stripe hover" style="width:100%">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>PID</th>
                            <th>Site ID DMT</th>
                            <th>Site ID Actual</th>
                            <th>Site Name Actual</th>
                            <th>Lat NOM</th>
                            <th>Long NOM</th>
                            <th>Lat Act</th>
                            <th>Long Act</th>
                            <th>Radius</th>
                            <th>NOM to Candidat DRM Act (M)</th>
                            <th>Province</th>
                            <th>City | Kabupaten</th>
                            <th>Tower Type and Height</th>
                            <th>TP Existing</th>
                            <th>Site Status</th>
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
            $('#tysonTable').DataTable({
                responsive: false,
                scrollX: false,
                pageLength: 18,
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
