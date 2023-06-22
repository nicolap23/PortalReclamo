<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Lilita+One&family=Chivo:wght@100;300;400;500;700;900&display=swap"
      rel="stylesheet">
      <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
    
  <link rel="stylesheet" href="../styles.upload" />
    <title>Reclamo</title>
</head>

<body>

<div class="main_contenedor">
      <div class="navBar">
        <div class="item_navBar done  ">Mis datos</div>
        <div class="item_navBar done">Mi reclamo</div>
        <div class="item_navBar active">Adjuntar archivos</div>
        <div class="item_navBar">Vista previa</div>
        <div class="item_navBar">Enviar</div>
      </div>
      <h1 class="title">adjuntar archivos</h1>
      

      
      <div class="wrapper">
    <header>agregar archivo</header>
    <form action="#">
      <input class="file-input" type="file" name="file" hidden>
      <i class="fas fa-cloud-upload-alt"></i>
      <p>buscar archivo</p>
    </form>
    <section class="progress-area"></section>
    <section class="uploaded-area"></section>
   
    
  </div>
  
  <button class="button">Siguiente</button>
  <script src="script.js"></script>
  

</body>

</html>