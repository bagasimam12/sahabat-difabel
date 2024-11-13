<x-layout>
    <main id="main" class="main">
        <div class="pagetitle">
        <h1>Dashboard</h1>
        <nav>
            <ol class="breadcrumb"></ol>
        </nav>
        </div>
        <section class="section dashboard">
        <div class="row">
            <div class="col-lg-8">
            <div class="row">
                <div class="col-xxl-4 col-md-6">
                <div class="card info-card sales-card">
                    <div class="filter">
                    </div>

                    <div class="card-body">
                    <h5 class="card-title">Penyandang Disabilitas</h5>

                    <div class="d-flex align-items-center">
                        <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                        <i class="bi bi-person"></i>
                        </div>
                        <div class="ps-3">
                        <h6>{{ $jmlDisabilitas }}</h6>

                        </div>
                    </div>
                    </div>

                </div>
                </div>

                
                <div class="col-xxl-4 col-md-6">
                <div class="card info-card revenue-card">
                    <div class="filter">
                    </div>
                    <div class="card-body">
                    <h5 class="card-title">Layanan/Alat Bantu</h5>

                    <div class="d-flex align-items-center">
                        <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                        <i class="bi bi-collection"></i>
                        </div>
                        <div class="ps-3">
                        <h6>{{ $jmlLayanan }}</h6>
                        </div>
                    </div>
                    </div>

                </div>
                </div>

                
                <div class="col-xxl-4 col-xl-12">

                <div class="card info-card customers-card">

                    <div class="filter">
                    </div>

                    <div class="card-body">
                    <h5 class="card-title">User</h5>

                    <div class="d-flex align-items-center">
                        <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                        <i class="bi bi-people"></i>
                        </div>
                        <div class="ps-3">
                        <h6>{{ $jmlUser }}</h6>
                        </div>
                    </div>

                    </div>
                </div>

                </div>

                
                <div class="col-12">
                <div class="card recent-sales overflow-auto">

                    <div class="filter">
                    </div>

                    <div class="card-body">
                    <h5 class="card-title">Data Difabel</h5>

                    <table class="table table-borderless">
                        <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Jenis Kelamin</th>
                            <th scope="col">Jenis Disabilitas</th>
                            <th scope="col">Status</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($disabilitas as $key => $item)
                            <tr>
                                <th scope="row">{{ $key +1 }}</th>
                                <td>{{ $item->nama_lengkap }}</td>
                                @if ($item->jenis_kelamin == "L")
                                    <td>Laki Laki</td>
                                @else
                                    <td>Perempuan</td>
                                @endif
                                <td>{{ $item->jenisDisabilitas->nama }}</td>
                                @if (strpos($item->status, "Disetujui") !== false)
                                    <td><span class="badge bg-success">{{ $item->status }}</span></td>
                                @elseif(strpos($item->status, "Ditolak") !== false)
                                    <td><span class="badge bg-danger">{{ $item->status }}</span></td>
                                @else
                                    <td><span class="badge bg-secondary">{{ $item->status }}</span></td>
                                @endif
                            </tr>
                        @endforeach
                        </tbody>
                    </table>

                    </div>

                </div>
                </div>
            </div>
            </div>

            
            <div class="col-lg-4">
            
            <div class="card">
                <div class="filter">
                </div>

                <div class="card-body pb-0">
                <h5 class="card-title">Jenis Disabilitas</h5>

                <div id="trafficChart" style="min-height: 400px;" class="echart"></div>

                <script>
                    $(document).ready(function() {
                    let url = $('meta[name=app-url]').attr("content") + "/get-jenis-disabilitas";
                    
                    $.ajax({
                        url: url,
                        method: 'GET',
                        dataType: 'json',
                        success: function(data) {
                            // Initialize the chart after the document is fully loaded
                            const chartElement = document.querySelector("#trafficChart");
                            const myChart = echarts.init(chartElement);
                            
                            const option = {
                                tooltip: {
                                    trigger: 'item'
                                },
                                legend: {
                                    top: '5%',
                                    left: 'center'
                                },
                                series: [{
                                    name: 'Access From',
                                    type: 'pie',
                                    radius: ['40%', '70%'],
                                    avoidLabelOverlap: false,
                                    label: {
                                        show: false,
                                        position: 'center'
                                    },
                                    emphasis: {
                                        label: {
                                            show: true,
                                            fontSize: '18',
                                            fontWeight: 'bold'
                                        }
                                    },
                                    labelLine: {
                                        show: false
                                    },
                                    data: data
                                }]
                            };

                            myChart.setOption(option);
                        },
                        error: function(error) {
                            console.error('Error fetching data', error);
                        }
                    });
                });
                </script>
                </div>
            </div>
        </div>
    </div>
</section>
</main>
</x-layout>