<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <style>
        * {
            margin: 0px;
            padding: 0px;
            box-sizing: border-box;
            font-family: sans-serif;
        }

        .navtop {
            background-color: #f1f1f1;
            height: 6vh;
            position: fixed;
            /* Fixa a posição do elemento */
            top: 0;
            /* Define a posição inicial a partir do topo */
            left: 0;
            /* Define a posição inicial a partir da esquerda */
            width: 100%;
            /* Define a largura do elemento como 100% da largura da tela */
        }

        .sidebar {
            margin-top: 30px;
            width: 200px;
            background-color: #f8f9fa;
            position: fixed;
            height: 100%;
            overflow: auto;
        }

        .sidebar a {
            display: block;
            padding: 16px;
            text-decoration: none;
            color: black;
        }

        .sidebar a:hover:not(.active) {
            background-color: #555;
            color: white;
        }

        .content {
            margin-left: 200px;
            padding: 1px 16px;
            height: 1000px;
        }

        .conteudo {
            margin-top: 80px;
        }

        @media screen and (max-width: 700px) {
            .sidebar {
                display: none;
            }

            .content {
                margin-left: 0px;
            }

            .navbar {
                display: none;
            }
        }

        /* Estilos para telas maiores que 700px */
        @media screen and (min-width: 700px) {
            .navresponse {
                display: none;
                /* Oculta a navegação */
            }
        }

        /* Estilos para telas menores ou iguais a 700px */
        @media screen and (max-width: 700px) {
            .navresponse {
                display: block;
                /* Exibe a navegação */
            }
        }

        /* Style the buttons that are used to open and close the accordion panel */
.accordion {
  background-color: #eee;
  color: #444;
  cursor: pointer;
  padding: 18px;
  width: 100%;
  text-align: left;
  border: none;
  outline: none;
  transition: 0.4s;
}

/* Add a background color to the button if it is clicked on (add the .active class with JS), and when you move the mouse over it (hover) */
.active, .accordion:hover {
  background-color: #ccc;
}

/* Style the accordion panel. Note: hidden by default */
.panel {
  padding: 0px;
  background-color: white;
  display: none;
  overflow: hidden;
}
    </style>
</head>

<body >

    <nav class="navbar bg-body-tertiary fixed-top">
        <div class="container-fluid">
            <span class="navbar-brand mb-0 h1">Tecno Pro</span>
            <form class="d-flex" role="search">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
              </form>
        </div>
        
    </nav>

    <nav class="navresponse navbar bg-body-tertiary fixed-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Offcanvas navbar</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar"
                aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar"
                aria-labelledby="offcanvasNavbarLabel">
                <div class="offcanvas-header">
                    <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Offcanvas</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                    <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Link</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                Dropdown
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Action</a></li>
                                <li><a class="dropdown-item" href="#">Another action</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="#">Something else here</a></li>
                            </ul>
                        </li>
                    </ul>
                    <form class="d-flex mt-3" role="search">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success" type="submit">Search</button>
                    </form>
                </div>
            </div>
        </div>
    </nav>

    <div class="sidebar">
        <br>
        

        <a href="#"><i class="bi bi-house-door"></i>Home</a>
        

        <button class="accordion"><i class="bi bi-modem"></i></i>Intranet</button>
        <div class="panel">
            <a href="#">Criar Comunicado</a>
            <a href="#">Lista de Comunicado</a>
        </div>

        <button class="accordion"><i class="bi bi-book"></i> Tarefa</button>
        <div class="panel">
            <a href="#">Criar Tarefa</a>
            <a href="#">Lista de Tarefa</a>
        </div>

        <button class="accordion"><i class="bi bi-info-circle"></i> Tech Informação</button>
        <div class="panel">
            <a href="#">Lista de Chamados TI</a>
            <a href="#">Abrir Chamado TI</a>
        </div>
        
        <button class="accordion"><i class="bi bi-info-circle"></i>User</button>
        <div class="panel">
            <a href="#">Users</a>
            <a href="#">User Create</a>
        </div>

        <button class="accordion"><i class="bi bi-info-circle"></i> Blog</button>
        <div class="panel">
            <a href="#">Blog</a>
            <a href="#">Blog Create</a>
        </div>
    </div>

    <div class="content">
        <div class="conteudo">
    </div>


<div class="container" style="margin-top: 120px">
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
        
            <canvas id="myChart" width="400" height="150"></canvas>
        </div>
    </div>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.7.0/chart.min.js"></script>
<script>
    const labels = ['January', 'February', 'March', 'April', 'May', 'June', 'July'];
    const data = {
        labels: labels,
        datasets: [{
            label: 'My First Dataset',
            data: [65, 59, 80, 81, 56, 55, 40],
            backgroundColor: [
                'rgba(75, 192, 192, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                'rgba(75, 192, 192, 0.2)'
            ],
            borderColor: [
                'rgb(75, 192, 192)',
                'rgb(75, 192, 192)',
                'rgb(75, 192, 192)',
                'rgb(75, 192, 192)',
                'rgb(75, 192, 192)',
                'rgb(75, 192, 192)',
                'rgb(75, 192, 192)'
            ],
            borderWidth: 1
        }]
    };

    const config = {
        type: 'bar',
        data: data,
        options: {}
    };

    var myChart = new Chart(
        document.getElementById('myChart'),
        config
    );

    var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
  acc[i].addEventListener("click", function() {
    /* Toggle between adding and removing the "active" class,
    to highlight the button that controls the panel */
    this.classList.toggle("active");

    /* Toggle between hiding and showing the active panel */
    var panel = this.nextElementSibling;
    if (panel.style.display === "block") {
      panel.style.display = "none";
    } else {
      panel.style.display = "block";
    }
  });
}
    
</script>

<br>
    <br>
    <br>
    <br>
    <br>


    </div>

</body>

</html>