@extends('layouts.layout')

@section('title', 'User Create')

@section('content')
{{-- Conteudo --}}

<div class="container col-sm-4" style="margin-top: 130px">

    <h3>User Create</h3>

    <div class="shadow-lg p-3 mb-5 bg-body-tertiary rounded">

        <div class="card-body ">

            <form id="userForm">

                <div class="mb-3">

                    <label for="exampleInputText1" class="form-label">Username</label>
                    <input type="text" class="form-control" id="exampleInputText1" aria-describedby="emailHelp">
                    <div class="invalid-feedback">
                        Please provide a Username.
                    </div>
                </div>

                <div class="mb-3">

                    <label for="exampleInputEmail1" class="form-label">Email address</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    <div class="invalid-feedback">
                        Please provide a email.
                    </div>
                </div>

                <div class="mb-3">

                    <label for="exampleInputPassword1" class="form-label">Password</label>
                    <input type="password" class="form-control" id="exampleInputPassword1">
                    <div class="invalid-feedback">
                        Please provide a password.
                    </div>
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>

            </form>

        </div>

    </div>

</div>
    
<script>
    document.getElementById('userForm').addEventListener('submit', 
        function(event) {
            var nameInput = document.getElementById('exampleInputText1');
            var emailInput = document.getElementById('exampleInputEmail1');
            var passwordInput = document.getElementById('exampleInputPassword1');
            var isValid = true;
            
            // Validação do campo email
            if (nameInput.value.trim() === '') {
                nameInput.classList.add('is-invalid');
                isValid = false;
            } else {
                nameInput.classList.remove('is-invalid');
            }

            // Validação do campo senha
            if (emailInput.value.trim() === '') {
                emailInput.classList.add('is-invalid');
                isValid = false;
            } else {
                emailInput.classList.remove('is-invalid');
            }

            // Validação de sennha
            if (passwordInput.value.trim() === '') {
                passwordInput.classList.add('is-invalid');
                isValid = false;
            } else {
                passwordInput.classList.remove('is-invalid');
            }

            // Impedir o envio do formulário se houver campos vazios
            if (!isValid) {
                event.preventDefault();
            }
        }
    )
</script>




@endsection