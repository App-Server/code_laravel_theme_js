@extends('layouts.layout')

@section('title', 'Dashboard')

@section('content')
{{-- Conteudo --}}


<div class="container" style="margin-top: 100px">
    <h3>Dashboard</h3>
    <div class="row">
        <div class="col-sm-4 mb-3 mb-sm-0">
            <div class="card">
                <div class="card-body">
                    
                    <p class="card-text"><i class="bi bi-list-task"></i>Total de tarefas</p>

                    <p class="card-text">--</p>

                    
                </div>
            </div>
        </div>

        <div class="col-sm-4 mb-3">
            <div class="card">
                <div class="card-body">
                    <p class="card-text"><i class="bi bi-person-check"></i>Total de usuarios</p>

                    <p class="card-text">--</p>
                </div>
            </div>
        </div>

        <div class="col-sm-4 mb-3">
            <div class="card">
                <div class="card-body">
                    <p class="card-text"><i class="bi bi-exclamation-triangle"></i>Total de comunicado</p>

                    <p class="card-text">--</p>
                </div>
            </div>
        </div>
    </div>

    

    <div class="card">
        <div class="card-body">
            <canvas id="myChart" width="400" height="120"></canvas>
        </div>
    </div>
    
    <br>
    
    <div class="card">
        <div class="card-body">
            <canvas id="lineChart" width="400" height="120"></canvas>
        </div>
    </div>

    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
        
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.7.0/chart.min.js"></script>
    <script>
        const labels = ['January', 'February', 'March', 'April', 'May', 'June', 'July'];
        const data1 = {
            labels: labels,
            datasets: [{
                label: 'My First Dataset',
                data: [65, 59, 80, 81, 56, 55, 40],
                backgroundColor: '#008B8B',
                borderColor: '#008B8B',
                borderWidth: 1
            }]
        };
    
        const config1 = {
            type: 'bar',
            data: data1,
            options: {}
        };
    
        var myChart = new Chart(
            document.getElementById('myChart'),
            config1
        );
    
        const labels2 = ['January', 'February', 'March', 'April', 'May', 'June', 'July'];
        const data2 = {
            labels: labels2,
            datasets: [{
                label: 'My First Dataset',
                data: [65, 59, 80, 81, 56, 55, 40],
                fill: false,
                borderColor: 'rgb(75, 192, 192)',
                tension: 0.1
            }]
        };
    
        const config2 = {
            type: 'line',
            data: data2,
        };
    
        var myLineChart = new Chart(
            document.getElementById('lineChart'),
            config2
        );
    </script>
        
</div>


@endsection