<?php
    require_once 'header.php'; 
?>

<div class="container ">
    <div class="row ">
        <div class="col-sm-12 text-center">
            <div class="container ">
                <div class="row " >
                    <div class="col-sm-6 mx-auto text-center " >
                        <div class="card mx-auto" style="width: 12rem; border-color:transparent">
                            <img src="raw/img/logo (1).png" class="card-img-top" alt="...">
                        </div>
                    </div>
                </div>
                <hr class="linea">
                <!-- aca empezara el formulario -->
                <div class="row ">
                    <div class="col-sm-6 mx-auto">
                        <form action="servidor/agregarRegistro.php" method="POST" enctype="multipart/form-data" class="form-group">
                            <div class="row">

                                <div class="col-sm-4">
                                    <label for="nombre">NOMBRE</label>
                                    <input type="text" class="form-control rounded-pill" name="nombre" placeholder="ingresa tu nombre" required pattern="[A-Za-z]{4,15}">
                                </div>
                                <div class="col-sm-4">
                                    <label for="apellidoP">Apellido Paterno</label>
                                    <input type="text" class="form-control rounded-pill" name="apellidoP" placeholder="Apellido Paterno" required pattern="[A-Za-z]{4,15}">
                                </div>
                                <div class="col-sm-4">
                                    <label for="apellidoM">Apellido Materno </label>
                                    <input type="text" class="form-control rounded-pill" name="apellidoM" placeholder="Apellido Materno" required pattern="[A-Za-z]{4,15}">
                                </div>
                            </div>
                            <!-- 2° row -->
                            <div class="row mt-3">
                                <div class="col-sm-4 ">
                                <label for="matricula">matricula</label>
                                    <input type="text" class="form-control rounded-pill" name="matricula" placeholder="ingresa tu matriculas" required pattern="[l0-9]{10}">
                                </div>
                                <div class="col-sm-4">
                                    <label for="fecha">Fecha de nacimiento</label>
                                    <input type="date" class="form-control rounded-pill" name="fecha" required max="2003-12-31" min="1941-01-01">
                                </div>
                                <div class="col-sm-4">
                                    <label for="especialidad">Especialidad</label>
                                    <input list="especialidad" name="especialidad"  class="form-control rounded-pill" required>
                                    <datalist id="especialidad">
                                        <option value="Full Stack">
                                        <option value="Back-end">
                                        <option value="Front-end">
                                        <option value="Minst tack">
                                        <option value="Android">
                                        <option value="Redes">
                                    </datalist>
                                </div>
                            </div>
                            <!-- 3° row -->
                            <div class="row mt-3">
                                <div class="col-sm-4">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col text-center">
                                               <label for=""><h5>sexo</h5></label> 
                                            </div>
                                            
                                        </div>
                                        <div class="row">
                                            <div class="col">
                                                <input type="radio" name="sexo" value="Masculino" required>
                                                <label for="sexo">MASCULINO</label><br>
                                            </div>
                                            <div class="col">
                                                <input type="radio" name="sexo" value="Femenino" required>
                                                <label for="sexo">FEMENINO</label><br>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <label for="miArchivo">foto:</label>
                                    <input type="file" name="miArchivo"  required>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col">
                                    <button class="btn btn-info">Guardar</button>
                                </div>
                            </div>
                            
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
    require_once 'footer.php'; 
?>