@extends('layouts.layout')

@section('title', 'Blog Show')

@section('content')
{{-- Conteudo --}}


    <div class="container d-flex justify-content-center" style="margin-top: 80px">
        
        <div class="container" style="margin-top: 30px">
            <h1>List blog</h1>
            <div class="card" style="width: 100%;">
                    
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">
    
                        <div class="row g-3 needs-validation">
                            <div class="col-md-1">
                                <label for="validationCustom01" class="form-label"><strong></i>Id</strong></label>
                                <br>
                                <label for="validationCustom01" class="form-label">10</label>
    
                            </div>
                            <div class="col-md-2">
                                <label for="validationCustom02" class="form-label"><strong>Categoria</strong></label>
                                <br>
                                <label for="validationCustom02" class="form-label">Politica</label>
    
                            </div>
                            <div class="col-md-4">
                                <label for="validationCustom02" class="form-label"><strong>Data da publicação</strong></label>
                                <br>
                                <label for="validationCustom02" class="form-label">20/05/2023 - 14:30:25</label>
    
                            </div>

                            <div class="col-md-2">
                                <label for="validationCustomUsername" class="form-label"><strong>Views Post</strong></label>
                                <br>
                                <label for="validationCustomUsername" class="form-label"><a href="#">View</a></label>
    
                            </div>
                                                   
                            <div class="col-md-2">
                                <label for="validationCustomUsername" class="form-label"><strong>stock</strong></label>
                                <br>
                                <label for="validationCustomUsername" class="form-label"><a href="#">Edit</a></label>
    
                            </div>
    
                            <div class="col-md-1">
                                <label for="validationCustomUsername" class="form-label"><strong>stock</strong></label>
                                <br>
                                <label for="validationCustomUsername" class="form-label"><a href="#">Delete</a></label>
    
                            </div>
    
                        </div>
                    </li>
                </ul>
            </div>
    
        </div>


    </div>

</div>


@endsection