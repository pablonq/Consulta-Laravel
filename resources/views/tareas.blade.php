<!doctype html>
<html lang="en">
  <head>
    <title>Aplicacion con Laravel</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta
    name="viewport"
    content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    
    <!-- Bootstrap CSS v5.2.1 -->
    <link
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
    rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
    crossorigin="anonymous"
    />
  </head>
  
  <body>
    <header>
      <!-- place navbar here -->
    </header>
    <main class="container">
      <div class="card">
        <div class="card-header">TAREAS</div>
        <div class="card-body">
            <form action="{{ url('/') }}" method="post" >
        
                @csrf <!-- El @csrf es una directiva de Blade en Laravel que se utiliza para agregar un campo de token CSRF (Cross-Site Request Forgery) a los formularios HTML generados por Laravel.
                Este token es una medida de seguridad para proteger tu aplicación contra ataques CSRF. Cuando se envía un formulario en Laravel, el middleware de protección verifica que el token CSRF enviado con la solicitud coincida con el token almacenado en la sesión del usuario. Si los tokens no coinciden, Laravel rechaza la solicitud, lo que ayuda a prevenir ataques de falsificación de solicitudes entre sitios.
                Por lo tanto, el @csrf en tu formulario está generando automáticamente un campo de entrada oculto que contiene el token CSRF, asegurando que tus formularios estén protegidos contra este tipo de ataques. -->
                <input type="text" name="nombre" id="tarea" class="form-control">
                <input type="submit" value="Agregar Tarea" class="btn btn-primary mt-2">
              </br>
            </form>
          
        </div>
</br>
    <div
      class="table-responsive-sm table-bordered table-striped"
    >
      <table
        class="table table-primary"
      >
        <thead>
          <tr>
            <th scope="col">ID</th>
            <th scope="col">Nombre</th>
            <th scope="col">Fecha de Creacion</th>
            <th scope="col">Accion</th>
          </tr>
        </thead>
        @foreach ( $tareas as $tarea )
        <tbody>
          <tr class="">
            <td> {{ $tarea->id  }} </td>
            <td> {{ $tarea->nombre }}  </td>
            <td> {{ $tarea->created_at }}  </td>
            <td> <form action="{{ route('destroy', $tarea->id) }}" method = "post">
              @csrf
              @method('delete') <!-- Metodo -->
              
                <input
                  type="submit"
                  value = "Eliminar"
                  class= "btn btn-danger"
                >
                     
              </form>
            </td>
            
          </tr>
        </tbody>
        @endforeach
      </table>
    </div>
      
      
  
</main>
    <footer>
      <!-- place footer here -->
    </footer>
    <!-- Bootstrap JavaScript Libraries -->
    <script
      src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
      integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
      crossorigin="anonymous"
    ></script>

    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
      integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
      crossorigin="anonymous"
    ></script>
  </body>
</html>

