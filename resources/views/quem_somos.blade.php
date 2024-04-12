@extends('layout')

@section('conteudo')
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title>
        
    <!-- Responsável pelo css -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <!-- Compiled and minified JavaScript -->
    </head>
    <body>
      <!-- Responsável pelo javascript -->
      <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
      <nav class="indigo darken-4">
        <div class="nav-wrapper">
          <a href="https://cdn.pixabay.com/photo/2017/08/25/19/34/design-2681158_1280.png" class="brand-logo">Logo</a>
          <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
          <ul class="right hide-on-med-and-down">
            <li><a href="sass.html">Home</a></li>
            <li><a href="https://657302d90f93470008c87057.tago.run/">Dashboard</a></li>
            <li><a href="collapsible.html">Quem Somos</a></li>
            <li><a href="mobile.html">Projeto</a></li>
            <a class="indigo darken-1 waves-light btn">Login</a>

          </ul>
        </div>
      </nav>
          <div class="row">
        <div class="col s12 m6">
          <div class="card">
            <div class="card-image">
              <img src="https://d2q79iu7y748jz.cloudfront.net/s/_squarelogo/256x256/3f0adcd4ca55b00001d49b838a26de9d" height="600" width="70">
              <span class="card-title">Parceria</span>
              <a class="btn-floating halfway-fab waves-effect waves-light indigo darken-1"><i class="material-icons">+</i></a>
            </div>
            <div class="card-content">
              <p>Trabalho de Conclusão de Curso elaborado por fins academicos para demonstração de aprendizagem no curso de mecatrônica</p>
            </div>
          </div>
        </div>
      </div>
      <footer class="indigo darken-4  ">
          <div class="container">
            <div class="row">
              <div class="col l6 s12">
                <h5 class="white-text">Footer Content</h5>
                <p class="grey-text text-lighten-4">You can use rows and columns here to organize your footer content.</p>
              </div>
              <div class="col l4 offset-l2 s12">
                <h5 class="white-text">Links</h5>
                <ul>
                  <li><a class="grey-text text-lighten-3" href="#!">Link 1</a></li>
                  <li><a class="grey-text text-lighten-3" href="#!">Link 2</a></li>
                  <li><a class="grey-text text-lighten-3" href="#!">Link 3</a></li>
                  <li><a class="grey-text text-lighten-3" href="#!">Link 4</a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="footer-copyright">
            <div class="container">
            © 2014 Copyright Text
            <a class="grey-text text-lighten-4 right" href="#!">More Links</a>
            </div>
          </div>
        </footer>
            
    </body>
    </html>
@endsection