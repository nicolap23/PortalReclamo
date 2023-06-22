<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Lilita+One&family=Chivo:wght@100;300;400;500;700;900&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="../styles.user" />
    <title>Registro</title>
  </head>
  <body>
    <div class="main_contenedor">
      <div class="navBar">
        <div class="item_navBar active">Mis datos</div>
        <div class="item_navBar">Mi reclamo</div>
        <div class="item_navBar">Adjuntar archivos</div>
        <div class="item_navBar">Vista previa</div>
        <div class="item_navBar">Enviar</div>
      </div>
      <h1 class="title">Mis datos personales</h1>
      <div class="contenedorBody">
        <div class="contentForm">
          <form action="" method="post">
            <div class="contentInput">
              <label for="name">Nombre</label>
              <input type="text" name="name" id="name" />
            </div>
            <div class="contentInput">
              <label for="paternalLastName">Apellido paterno</label>
              <input
                type="text"
                name="paternalLastName"
                id="paternalLastName"
              />
            </div>
            <div class="contentInput">
              <label for="maternalLastName">Apellido materno</label>
              <input
                type="text"
                name="maternalLastName"
                id="maternalLastName"
              />
            </div>
            <div class="contentInput">
              <label for="email">Correo electrónico</label>
              <input type="text" name="email" id="email" />
            </div>
            <div class="contentInput">
              <label for="phone">Telefono</label>
              <input type="number" name="phone" id="phone" />
            </div>
          </form>
          <button class="button">Siguiente</button>
        </div>
        <div class="welcome">
          <h1>Portal Reclamo</h1>
          <h2>
            Gracias por considerar nuestro portal de reclamos para expresar su
            inquietud. Valoramos su confianza y estamos aquí para ayudarle en
            cualquier asunto que desee plantear.
          </h2>
          <div class="isValid">
            <span>Soy humano</span>
            <button></button>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
