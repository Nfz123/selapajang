@extends('layouts.siode-front.app-master')

@section('content')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">
                <P>Data Pekerja Desa Sentul Jaya</P>
            </h3>
            {{-- <div class="card-tools">
            <div class="input-group input-group-sm" style="width: 250px;">
                <input type="text" name="table_search" class="form-control float-right" placeholder="Search">
                <div class="input-group-append">
                    <button type="submit" class="btn btn-default">
                        <i class="fas fa-search"></i>
                    </button>
                </div>
            </div>
        </div> --}}
        </div>
        <div class="card-body">
            <div class="card card-danger">
                <div class="card-header">
                    <h3 class="card-title">Donut Chart</h3>
                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse">
                            <i class="fas fa-minus"></i>
                        </button>
                        <button type="button" class="btn btn-tool" data-card-widget="remove">
                            <i class="fas fa-times"></i>
                        </button>
                    </div>
                </div>
                <div class="card-body">
                    <div class="chartjs-size-monitor">
                        <div class="chartjs-size-monitor-expand">
                            <div class=""></div>
                        </div>
                        <div class="chartjs-size-monitor-shrink">
                            <div class=""></div>
                        </div>
                    </div>
                    <canvas id="donutChart"
                        style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%; display: block; width: 304px;"
                        width="608" height="500" class="chartjs-render-monitor"></canvas>
                </div>

            </div>
       </div>
    </div>
@endsection
@push('scripts')
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    var ctx = document.getElementById('donutChart').getContext('2d');
  
    var data = {
      labels: ['Label 1', 'Label 2', 'Label 3'],
      datasets: [{
        data: [value1, 10, 15], // Gantilah value1, value2, dan value3 dengan data yang sesuai
        backgroundColor: ['#ff5733', '#33ff57', '#5733ff']
      }]
    };
  
    var donutChart = new Chart(ctx, {
      type: 'doughnut',
      data: data
    });
  </script>
@endpush
