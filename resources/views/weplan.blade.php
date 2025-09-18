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
                            <th>Site ID DMT</th>
                            <th>latitude</th>
                            <th>longitude</th>
                            <th>user_radius</th>
                            <th>location</th>
                            <th>resident_population</th>
                            <th>population_density</th>
                            <th>user_acquisition_potential_from_nearby_towers</th>
                            <th>averaged_users_percentile</th>                            
                            <th>averaged_measurements_percentile</th>
                            <th>analyzed_network</th>
                            <th>lease_up_recommendation</th>
                            <th>tenant_situation</th>
                            <th>site_ranking</th>
                            <th>network_situation</th>
                            <th>benchmark_against_competition</th>
                            <th>closest_tower_global</th>
                            <th>closest_tower_north</th>
                            <th>closest_tower_east</th>
                            <th>closest_tower_south</th>
                            <th>closest_tower_west</th>
                            <th>avg_inter_sites_distance_north</th>
                            <th>avg_inter_sites_distance_east</th>
                            <th>avg_inter_sites_distance_south</th>
                            <th>avg_inter_sites_distance_west</th>
                            <th>closest_tower_north_environment_type</th>
                            <th>closest_tower_east_environment_type</th>
                            <th>closest_tower_south_environment_type</th>
                            <th>closest_tower_west_environment_type</th>
                            <th>closest_tower_north_height_estimate</th>
                            <th>closest_tower_east_height_estimate</th>
                            <th>closest_tower_south_height_estimate</th>
                            <th>closest_tower_west_height_estimate</th>
                            <th>closest_tower_north_events_percentile</th>
                            <th>closest_tower_east_events_percentile</th>
                            <th>closest_tower_south_events_percentile</th>
                            <th>closest_tower_west_events_percentile</th>
                            <th>closest_tower_north_users_percentile</th>
                            <th>closest_tower_east_users_percentile</th>
                            <th>closest_tower_south_users_percentile</th>
                            <th>closest_tower_west_users_percentile</th>
                            <th>most_prevalent_tech</th>
                            <th>percentage_2G</th>
                            <th>percentage_3G</th>
                            <th>percentage_4G</th>
                            <th>percentage_5G</th>
                            <th>percentage_good_events</th>
                            <th>percentage_fair_events</th>
                            <th>percentage_bad_events</th>
                            <th>total_good_events</th>
                            <th>total_fair_events</th>
                            <th>total_bad_events</th>
                            <th>total_events</th>
                            <th>percentage_events_connection_loss</th>
                            <th>percentage_congestion_4G_5G</th>
                            <th>network_performance_score</th>
                            <th>dbm_avg_2G</th>
                            <th>dbm_avg_3G</th>
                            <th>dbm_avg_4G</th>
                            <th>Status Network</th>

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
                                <td>{{ $row->COL43 }}</td>
                                <td>{{ $row->COL44 }}</td>
                                <td>{{ $row->COL45 }}</td>
                                <td>{{ $row->COL46 }}</td>
                                <td>{{ $row->COL47 }}</td>
                                <td>{{ $row->COL48 }}</td>
                                <td>{{ $row->COL49 }}</td>
                                <td>{{ $row->COL50 }}</td>
                                <td>{{ $row->COL51 }}</td>
                                <td>{{ $row->COL52 }}</td>
                                <td>{{ $row->COL53 }}</td>
                                <td>{{ $row->COL54 }}</td>
                                <td>{{ $row->COL55 }}</td>
                                <td>{{ $row->COL56 }}</td>
                                <td>{{ $row->COL57 }}</td>
                                <td>{{ $row->COL58 }}</td>
                                <td>{{ $row->COL59 }}</td>
                                <td>{{ $row->COL60 }}</td>
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
