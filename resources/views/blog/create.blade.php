@extends('layouts.layout')

@section('title', 'Blog Create')

@section('content')
{{-- Conteudo --}}

<div class="container" style="margin-top: 130px">

    <div class="shadow-lg p-3 mb-5 bg-body-tertiary rounded">

        <div class="card-body ">

            <form id="blogForm">

              <strong >Blog Create</strong>

                <div class="mb-3">
                  <label for="exampleInputText1" class="form-label">Titulo</label>
                  <input type="text" class="form-control" id="exampleInputText1" aria-describedby="textHelp" name="title">
                  <div class="invalid-feedback">
                    Please provide a title.
                  </div>
                </div>

                <div class="mb-3">
                  <label for="exampleInputPassword1" class="form-label">Anexa Imagem</label>
                  <input  type="file" id="myFile" name="filename">
                </div>

                <div class="form-floating">
                    <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 300px" name="comment"></textarea>
                    <label for="floatingTextarea2">Comments</label>
                  <div class="invalid-feedback">
                    Please provide a comment.
                  </div>
                </div>

                <br>
                
                <button type="submit" class="btn btn-primary" >Register Post</button>
            
            </form>

        </div>

    </div>

</div>

@endsection