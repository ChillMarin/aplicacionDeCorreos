<div class="container-fluid">
        <div class="row">
            <div class="col-sm-2">
                <div class="list-group">
                    <a href="index.php" class="list-group-item list-group-item-action">Escritorio</a>
                    <a href="calendar.php" class="list-group-item list-group-item-action">Calendario</a>
                    <a href="#" class="list-group-item list-group-item-action">Correos</a>
                    <a href="#" class="list-group-item list-group-item-action">Configuración</a>
                </div>
            </div>
           

            <div class="col-sm-10" id="columna2">
                <div class="row">
                    <div class="col sm-3">
                        <img src="..\assets\logos\chillmarin.png" id="main-logo" class="float-start">
                    </div>

                    <div class="col sm-7">
                        <img src="..\assets\iconos\user.svg" id="profile-icon" class="float-end">
                    </div>
                </div>
                    
                

                <div class="row">
                    <h1>Escritorio</h1>
                    <p id="texto">Puedes crear citas, enviar correos, mandar recordatorios y planificar tareas</p>

                    <form action="/action_page.php">
                        <select class="form-select" aria-label="Default select example" id="accion">
                            <option selected>Seleccione una opción</option>
                            <option id="correoMasivo" value="1">Correo masivo</option>
                            <option id="recordatorioPago" value="2">Recordatorio de pago</option>
                            <option id="recodatorioClase" value="3">Recordatorio de clases</option>
                        </select>
                            
                        <div id="infoForm">   
                            <div class="input-group mb-3">
                                <input type="file" class="form-control" id="inputGroupFile02">
                                <label class="input-group-text" for="inputGroupFile02">Subir excel</label>
                            </div>

                            <div class="form-group">
                                <label for="txt">Asunto</label>
                                <input type="text" class="form-control" placeholder="Asunto" id="pwd">
                            </div>
                        
                            <div class="input-group">
                                <span class="input-group-text">Mensaje</span>
                                <textarea class="form-control" aria-label="With textarea"></textarea>
                                </div>

                            <button type="submit" class="btn btn-primary">Submit</button>
                            

                        </div>
                    </form>

                </div>

               
            </div>
        
    </div>