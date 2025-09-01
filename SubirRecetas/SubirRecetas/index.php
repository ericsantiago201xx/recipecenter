<?php include("dbprueba.php")?>
<?php include("incluir/header.php")?>

    <div class="container p-4">

        <div class="row">

             <div class="col-md-4">
                <?php if(isset($_SESSION['message'])){?>

                    <div class="alert alert-warning alert-dismissible fade show" role="alert">
                        <?= $_SESSION['message'];  ?>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>

                <?php session_unset();}?>
               <div class="colum">


                  <div class="card card-body">

                      <form action="save-task.php" method="POST" enctype="multipart/form-data">

                        <div class="form-group">



                           
                            <div class="formulario-video">
    
                                    <h2>Subir un Video</h2>

                                        <div class="file">
                                            <input class="form-control" type="file" name="video" accept="video/mp4" required>

                                            <div class="form-text">Formatos permitidos: MP4, AVI, MOV, etc.</div>
                                        </div>
                                                
                            </div>


                             <br>
                             
                            <input type="text"  name="titulo"  class="form-control" placeholder="Título"
                            autofocus>
                            
                            <div class="form-group">
                                <textarea name="descripcion" rows="2"  class="form-control"
                                placeholder="Descripción de Receta"></textarea>
                            </div>

                            <input type="submit" class="btn btn-success btn-block"
                            name="save_task"  value="Subir Receta">



                        </div>


                      </form>
                     
                  </div>


               </div>


             </div>

        </div>

    </div>



 <div class="col-md-8">
         <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Título</th>
                    <th>Descripción</th>
                    <th>Fecha_Creación</th>
                    <th>Video</th>
                    <th>Acciones</th>
                </tr>
            </thead>

            <tbody>
                <?php 
                $query = "SELECT * FROM recetas";
                $result_recets = mysqli_query($conn, $query);

                while($row = mysqli_fetch_array($result_recets)){?>

                <tr>
                    <td> <?php echo $row['titulo'] ?></td>
                    <td> <?php echo $row['Descripcion'] ?></td>
                    <td> <?php echo $row['Fecha_Creacion'] ?></td>
                    <td> <?php echo $row['ruta_video'] ?></td>
                    <td>
                      <a href="edit.php?id=<?php echo $row['id']?>" class="btn btn-secondary">
                        <i class="fa-solid fa-square-pen"></i>
                      </a>

                      <a href="delete.php?id=<?php echo $row['id']?>" class="btn btn-danger">
                        <i class="fa-solid fa-trash-can"></i>
                      </a>
                
                    </td>
                </tr>

                <?php } ?>
            </tbody>
         </table>
 </div>

<?php include("incluir/footer.php")?>








