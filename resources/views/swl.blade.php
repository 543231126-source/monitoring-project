@extends('layouts.dashboard')

@section('title', 'Data Swl')

@push('styles')
    {{-- DataTables CSS --}}
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.5.0/css/responsive.dataTables.min.css">
@endpush

@section('header', 'Data Swl')

@section('content')
    <div class="p-4">
        <div class="bg-white rounded shadow p-4">
            <h1 class="text-xl font-bold mb-4">Data Swl</h1>
            <div class="overflow-x-auto">
                <table id="swlTable" class="display nowrap stripe hover" style="width:100%">
                    <thead>
                        <tr>
                            <th>Project ID</th>
                            <th>Superior Funcloct</th>
                            <th>Site ID MTEL</th>
                            <th>Site ID Tenant</th>
                            <th>Nama Site</th>
                            <th>Provinsi</th>
                            <th>Kabupaten/ Kota</th>
                            <th>Lat</th>
                            <th>Long</th>                            
                            <th>Design tower</th>
                            <th>Project Source</th>
                            <th>Jumlah Tenant</th>
                            <th>Tenant</th>
                            <th>Category Site TSEL</th>
                            <th>Status Extend</th>
                            <th>PKS Start Date</th>
                            <th>PKS End Date</th>
                            <th>Kategori Sewa Lahan (uptodate)</th>
                            <th>PKS Start Date (uptodate)</th>
                            <th>PKS End Date (uptodate)</th>
                            <th>Durasi Sewa (uptodate)</th>
                            <th>Tahun habis sewa (uptodate)</th>
                            <th>Harga Sewa (uptodate) </th>
                            <th>Harga Sewa (uptodate) Include PPh</th>
                            <th>Harga Sewa (uptodate) per tahun</th>
                            <th>Status FO</th>
                            <th>NBV</th>
                            <th>Tenant End Lease (TSEL)</th>
                            <th>Tenant End Lease (IOH)</th>
                            <th>Tenant End Lease (XL)</th>
                            <th>Status SIMPUL (TSEL)</th>
                            <th>Grouping SIMPUL TSEL</th>
                            <th>Status SIMPUL (IOH)</th>
                            <th>Grouping SIMPUL IOH</th>
                            <th>Status SIMPUL (XL)</th>
                            <th>Grouping SIMPUL XL</th>
                            <th>Power</th>
                            <th>Main Power</th>
                            <th>Rev TSEL</th>
                            <th>Remark Program Tenant</th>
                            <th>Remark Already NPA</th>
                            <th>Rev/Month</th>
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
                                <td>{{ $row->COL32 }}</td>
                                <td>{{ $row->COL33 }}</td>
                                <td>{{ $row->COL34 }}</td>
                                <td>{{ $row->COL35 }}</td>
                                <td>{{ $row->COL36 }}</td>
                                <td>{{ $row->COL37 }}</td>
                                <td>{{ $row->COL38 }}</td>
                                <td>{{ $row->COL39 }}</td>
                                <td>{{ $row->COL40 }}</td>
                                <td>{{ $row->COL41 }}</td>
                                <td>{{ $row->COL42 }}</td>
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
            $('#swlTable').DataTable({
                responsive: false,
                scrollX: false,
                pageLength: 50,
                lengthMenu: [20, 50, 100, 250, 500, 1000],
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
