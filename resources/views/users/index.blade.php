@extends('layouts.layout')

@section('title', 'User')

@section('content')
{{-- Conteudo --}}


    <div class="container d-flex justify-content-center" style="margin-top: 80px">

        @foreach ($users as $user)

        <li>
            {{ $user->name }}
            {{ $user->email }}
        </li>
        
        @endforeach
        
        <div class="container" style="margin-top: 30px">
            <h3>Users List</h3>
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
                                <label for="validationCustom02" class="form-label"><strong>Username</strong></label>
                                <br>
                                <label for="validationCustom02" class="form-label">Marcio Teles</label>
    
                            </div>
                            <div class="col-md-3">
                                <label for="validationCustom02" class="form-label"><strong>Email</strong></label>
                                <br>
                                <label for="validationCustom02" class="form-label">marcio.teles@company.com</label>
    
                            </div>
                            <div class="col-md-2">
                                <label for="validationCustom02" class="form-label"><strong>Create</strong></label>
                                <br>
                                <label for="validationCustom02" class="form-label">20/05/2023 - 14:30:25</label>
    
                            </div>

                            <div class="col-md-2">
                                <label for="validationCustomUsername" class="form-label"><strong>Update</strong></label>
                                <br>
                                <label for="validationCustom02" class="form-label">20/05/2023 - 14:30:25</label>
    
                            </div>
                                                   
                            <div class="col-md-1">
                                <label for="validationCustomUsername" class="form-label"><strong>stock</strong></label>
                                <br>
                                <i class="bi bi-trash3"></i>
    
                            </div>
    
                            <div class="col-md-1">
                                <label for="validationCustomUsername" class="form-label"><strong>stock</strong></label>
                                <br>
                                <i class="bi bi-pencil-square"></i>
    
                            </div>
    
                        </div>
                    </li>
                </ul>
            </div>
    
        </div>


       

    </div>

</div>


@endsection