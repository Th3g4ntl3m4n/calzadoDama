@extends('layoutDashboard')

@section('content')

<div class="container mt-2"> <!-- Reducir el margen superior de la página -->
    <h3 class="text-center mb-3">Estadísticas de Ventas</h3> <!-- Reducir margen inferior del título -->
    
    <div class="row justify-content-center">
        <div class="col-md-8">
            <canvas id="ventasChart"></canvas>
        </div>
    </div>

</div>

<script>
    var ctx = document.getElementById('ventasChart').getContext('2d');
    var ventasChart = new Chart(ctx, {
      type: 'bar', // Puedes cambiar 'bar' a 'line', 'pie', etc.
      data: {
        labels: ['Junio', 'Julio ', 'Agosto', 'Septiembre', 'Octubre'],
        datasets: [{
          label: 'Ventas mensuales',
          data: [120, 150, 180, 100, 200],
          backgroundColor: [
            'rgba(75, 192, 192, 0.2)',
            'rgba(54, 162, 235, 0.2)',
            'rgba(255, 206, 86, 0.2)',
            'rgba(153, 102, 255, 0.2)',
            'rgba(255, 159, 64, 0.2)'
          ],
          borderColor: [
            'rgba(75, 192, 192, 1)',
            'rgba(54, 162, 235, 1)',
            'rgba(255, 206, 86, 1)',
            'rgba(153, 102, 255, 1)',
            'rgba(255, 159, 64, 1)'
          ],
          borderWidth: 1
        }]
      },
      options: {
        responsive: true,
        scales: {
          y: {
            beginAtZero: true
          }
        }
      }
    });
</script>

@endsection
