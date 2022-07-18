@extends('adminlte::page')
@section('plugins.Chartjs',true)
@section('title', 'Dashboard')
<!-- Ionicons -->
<link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">

@section('content_header')
<div class="titulo text-center">
  <h1>¡Bienvenido!</h1>
</div>

@stop

@section('content')


<!-- Small boxes (Stat box) -->
<div class="row">
  <div class="col-lg-2 col-6">
    <!-- CAJITA PELICULAS -->
    <div class="small-box bg-info">
      <div class="inner">
        <h3>{{$c_peliculas}}</h3>

        <p>Peliculas agregadas</p>
      </div>
      <div class="icon">
        <i class="ion-ios-videocam"></i>
      </div>
      <a href="#" class="small-box-footer">Más info <i class="fas fa-arrow-circle-right"></i></a>
    </div>
  </div>
  <!-- ./col -->
  <div class="col-lg-2 col-6">
    <!-- CAJITA ALQUILERES -->
    <div class="small-box bg-purple">
      <div class="inner">
        <h3>{{$c_alquilers}}</h3>

        <p>Alquileres</p>
      </div>
      <div class="icon">
        <i class="ion ion-stats-bars"></i>
      </div>
      <a href="#" class="small-box-footer">Más info <i class="fas fa-arrow-circle-right"></i></a>
    </div>
  </div>
  <!-- ./col -->
  <div class="col-lg-2 col-6">
    <!-- CAJITA SOCIOS -->
    <div class="small-box bg-pink">
      <div class="inner">
        <h3>{{$c_socios}}</h3>

        <p>Socios</p>
      </div>
      <div class="icon">
        <i class="ion ion-person-add"></i>
      </div>
      <a href="#" class="small-box-footer">Más info <i class="fas fa-arrow-circle-right"></i></a>
    </div>
  </div>
  <!-- ./col -->
  <div class="col-lg-2 col-6">
    <!-- CAJITA GÉNEROS -->
    <div class="small-box bg-warning">
      <div class="inner">
        <h3>{{$c_generos}}</h3>

        <p>Géneros</p>
      </div>
      <div class="icon">
        <i class="ion ion-ios-film"></i>
      </div>
      <a href="#" class="small-box-footer">Más info <i class="fas fa-arrow-circle-right"></i></a>
    </div>
  </div>
  <!-- ./col -->

  <div class="col-lg-2 col-6">
    <!-- CAJITA FORMATOS -->
    <div class="small-box bg-white">
      <div class="inner">
        <h3>{{$c_formatos}}</h3>

        <p>Formatos</p>
      </div>
      <div class="icon">
        <i class="ion ion-ios-camera"></i>
      </div>
      <a href="#" class="small-box-footer">Más info <i class="fas fa-arrow-circle-right"></i></a>
    </div>
  </div>
  <!-- ./col -->
</div>

<div class="row">
  <div class="col-lg-6 connectedSortable">
    <!-- AREA CHART -->
    <div class="card card-primary">
      <div class="card-header">
        <h3 class="card-title">Ciudades - Socios</h3>

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
        <div class="chart">
          <canvas id="areaChart" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
        </div>
      </div>
      <!-- /.card-body -->
    </div>
    <!-- /.card -->
  </div>

  <div class="col-lg-6 connectedSortable">
    <!-- DONUT CHART -->
    <div class="card card-danger">
      <div class="card-header">
        <h3 class="card-title">Películas - Costos</h3>

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
        <canvas id="donutChart" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
      </div>
      <!-- /.card-body -->
    </div>
    <!-- /.card -->
  </div>

  <div class="col-lg-6 connectedSortable">
    <!-- BAR CHART -->
    <div class="card card-success">
      <div class="card-header">
        <h3 class="card-title">Top 5 peliculas más alquiladas</h3>

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
        <div class="chart">
          <canvas id="barChart" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
        </div>
      </div>
      <!-- /.card-body -->
    </div>
    <!--END BAR CHAT -->
  </div>

  <div class="col-lg-6 connectedSortable">
    <!-- LINE CHART -->
    <div class="card card-info">
      <div class="card-header">
        <h3 class="card-title">Géneros más vendidos</h3>

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
        <div class="chart">
          <canvas id="lineChart" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
        </div>
      </div>
      <!-- /.card-body -->
    </div>
    <!-- END LINE CHART -->
  </div>

  <div class="col-lg-6 connectedSortable">
    <!-- MULTIPLE LINES CHART -->
    <div class="card card-success">
      <div class="card-header">
        <h3 class="card-title">Formatos más solicitados</h3>

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
        <div class="chart">
          <canvas id="multipleLinesChart" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
        </div>
      </div>
      <!-- /.card-body -->
    </div>
    <!-- /.card -->
    <!--MULTIPLE LINES CHAT -->
  </div>

</div>




@stop

@section('css')
<link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')

<script type="text/javascript">
  window.liveware.on('closeModal', () => {
    $('#createDataModal').modal('hide');
  });
</script>

<script>
  //--------------
  //- AREA CHART -
  //--------------

  // Get context with jQuery - using jQuery's .get() method.
  var areaChartCanvas = $('#areaChart').get(0).getContext('2d')

  var areaChartData = {
    labels: ['Quito', 'Latacunga', 'Quevedo', 'Ambato', 'Salcedo'],
    datasets: [{
      label: 'Ciudades',
      backgroundColor: 'rgba(60,141,188,0.9)',
      borderColor: 'rgba(60,141,188,0.8)',
      pointRadius: false,
      pointColor: '#3b8bba',
      pointStrokeColor: 'rgba(60,141,188,1)',
      pointHighlightFill: '#fff',
      pointHighlightStroke: 'rgba(60,141,188,1)',
      data: ['{{$cQuito}}', '{{$cLatacunga}}', '{{$cQuevedo}}', '{{$cAmbato}}', '{{$cSalcedo}}']
    }, ]
  }

  var areaChartOptions = {
    maintainAspectRatio: false,
    responsive: true,
    legend: {
      display: false
    },
    scales: {
      xAxes: [{
        gridLines: {
          display: false,
        }
      }],
      yAxes: [{
        gridLines: {
          display: false,
        }
      }]
    }
  }

  // This will get the first returned node in the jQuery collection.
  new Chart(areaChartCanvas, {
    type: 'line',
    data: areaChartData,
    options: areaChartOptions
  })

  //--END AREA CHART 

  //-------------
  //- DONUT CHART -
  //-------------
  // Get context with jQuery - using jQuery's .get() method.
  var donutChartCanvas = $('#donutChart').get(0).getContext('2d')
  var donutData = {
    labels: [
      '$2.50',
      '$3.00',
      '$3.25',
      '$3.50',
      '$4.00',
      '$4.50',
    ],
    datasets: [{
      data: ['', 500, 400, 600, 300, 100],
      backgroundColor: ['#f56954', '#00a65a', '#f39c12', '#00c0ef', '#3c8dbc', '#d2d6de'],
    }]
  }
  var donutOptions = {
    maintainAspectRatio: false,
    responsive: true,
  }
  //Create pie or douhnut chart
  // You can switch between pie and douhnut using the method below.
  new Chart(donutChartCanvas, {
    type: 'doughnut',
    data: donutData,
    options: donutOptions
  })
  // END DONUT --------

  //-------------
  //- BAR CHART -
  //-------------
  var xValues = ["El orfanato", "	El Irlandés", "Oliver Twist", "Bastardos sin gloria", "Tiempos violentos"];
var yValues = [30, 20, 15, 10, 5];
var barColors = ["#00a65a", "#f39c12","#00c0ef","#3c8dbc","#d2d6de"];

new Chart("barChart", {
  type: "bar",
  data: {
    labels: xValues,
    datasets: [{
      backgroundColor: barColors,
      data: yValues
    }]
  },
  options: {
    legend: {display: false},
    title: {
      display: true,
      text: "5 películas más alquiladas"
    }
  }
});
  // END BAR----------

  //-------------
  //- LINE CHART -
  //--------------
  var xValues = ['Accion','Terror','Drama','Comedia','Suspenso'];
var yValues = [7,8,8,9,9,9,10,11,14,14,15];

new Chart("lineChart", {
  type: "line",
  data: {
    labels: xValues,
    datasets: [{
      fill: false,
      lineTension: 0,
      backgroundColor: "rgba(0,0,255,1.0)",
      borderColor: "rgba(0,0,255,0.1)",
      data: yValues
    }]
  },
  options: {
    legend: {display: false},
    scales: {
      yAxes: [{ticks: {min: 6, max:16}}],
    }
  }
});
  // END LINE CHART

  //---------------------
  //- MULTIPLE LINES CHART -
  //---------------------
  var xValues = [100,200,300,400,500,600,700,800,900,1000];

new Chart("multipleLinesChart", {
  type: "line",
  data: {
    labels: xValues,
    datasets: [{ 
      data: [860,1140,1060,1060,1070,1110,1330,2210,7830,2478],
      borderColor: "#f39c12",
      fill: false
    }, { 
      data: [1600,1700,1700,1900,2000,2700,4000,5000,6000,7000],
      borderColor: "#00c0ef",
      fill: false
    }, { 
      data: [300,700,2000,5000,6000,4000,2000,1000,200,100],
      borderColor: "#d2d6de",
      fill: false
    }]
  },
  options: {
    legend: {display: false}
  }
});
  // END MULTIPLE LINES
</script>

@stop