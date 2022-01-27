<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Registrar tareas</title>
  <!-- CSS only -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
  <link rel="stylesheet" href="./css/style.css">

  <script src="https://www.gstatic.com/firebasejs/4.7.0/firebase.js"></script>
  <script>
    const config = {
      apiKey: "AIzaSyBv4DIYk042Tc3x079VQeZsbfneR3CFd2Y",
      authDomain: "to-do-list-2d779.firebaseapp.com",
      projectId: "to-do-list-2d779",
      storageBucket: "to-do-list-2d779.appspot.com",
      messagingSenderId: "43464913148",
      appId: "1:43464913148:web:41898f44397842f6182779"
    };
    firebase.initializeApp(config);
  </script>
  <script>
    function verificar(){
      firebase.auth().onAuthStateChanged(function(user) {
        if (user) {
          // El usuario está logueado, realiza acciones aquí
        } else {
          console.log("usuario nullo");
          location.replace("index.html");
        }

      });
    };
    verificar();
  </script>

</head>

<body>
  <div class="cont-botonlogout">

    <!-- <form action="./php/destruir_sesion.php">
      <input class="btn-logout btn" type="submit" name="sesionDestroy" value="Cerrar Sesión" />
    </form> -->
    <button class="btn-logout btn" onclick="cerrar()">Cerrar Sesión</button>
  </div>

  <div class="wrapper">
    <header>Registre sus tareas</header>
    <div class="inputField">
      <input type="text" placeholder="Agregue nueva tarea">
      <button><i class="bi bi-plus-lg"></i></button>
    </div>
    <ul class="todoList">
      <!-- todas las tareas se almacenan aqui -->
    </ul>
    <div class="footer">
      <span>Tienes <span class="pendingTasks"></span> tareas pendientes</span>
      <button>Limpiar todo</button>
    </div>
  </div>
  <div class="fondo_transparente">
    <div class="modal">
      <div class="modal_cerrar">
        <span>x</span>
      </div>
      <div class="modal_titulo">Editar Tarea</div>
      <div class="modal_mensaje">
        <p>ingresar nueva Tarea</p>
        <input type="text" id="nuevaTarea">
      </div>
      <div class="modal_botones">
        <a href="" class="boton" onclick="editTask()">ACEPTAR</a>
        <a href="" class="boton">CANCELAR</a>

      </div>
    </div>
  </div>
  <!-- JavaScript Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
    crossorigin="anonymous"></script>
  <script src="./js/app.js"></script>
  <script src="./js/logout.js"></script>
</body>

</html>