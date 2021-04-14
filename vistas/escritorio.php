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

                    <form action="../correos/correo.php" method="post" enctype="multipart/form-data" id="formulario">
                        
                        <div class="form-floating">
                            <select class="form-select" id="accion" aria-label="Floating label select example">
                                <option value="1" selected>Correo masivo</option>
                                <option value="2">Recordatorio de pago</option>
                                <option value="3">Recordatorio de clases</option>
                            </select>
                            <label for="floatingSelect">Acciones a realizar</label>
                        </div>
                            
                        <div id="infoForm">   
                            <div class="input-group mb-3" id="excel" style="margin-top:10px;">
                                <input type="file" class="form-control" id="inputGroupFile02" name="excelFile" >
                                <label class="input-group-text" for="inputGroupFile02" >Subir excel</label>
                            </div>

                            <div class="form-floating mb-3">
                                <input name="asunto" type="text" class="form-control" id="floatingInput" placeholder="Asunto" required>
                                <label for="floatingInput">Asunto</label>
                            </div>
                        
                            <div class="form-group">
                                <textarea id="editor" name="mensaje"></textarea>
                            </div>

                            <div class="form-group row" id="fechayhora" style="display:none">
                                <label for="example-datetime-local-input" class="col-2 col-form-label">Fecha y hora</label>
                                <div class="col-10">
                                    <input name="fechayhora" class="form-control" type="datetime-local" value="2021-08-19T13:45:00" id="example-datetime-local-input">
                                 </div>
                            </div>

                            <button type="submit" class="btn btn-primary" onclick="excel()">Enviar</button>
                            

                        </div>
                    </form>

                </div>

               
            </div>
        
    </div>