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
                    <p>Puedes crear citas, enviar correos, mandar recordatorios y planificar tareas</p>

                    <form action="/action_page.php">
                    <div class="form-group">
                        <label for="email">Correo</label>
                        <input type="email" class="form-control" placeholder="Enter email" id="email">
                    </div>
                    <div class="input-group mb-3">
                    <input type="file" class="form-control" id="inputGroupFile02">
                    <label class="input-group-text" for="inputGroupFile02">Upload</label>
                    </div>

                    <div class="form-group">
                        <label for="txt">Asunto</label>
                        <input type="text" class="form-control" placeholder="Enter password" id="pwd">
                    </div>

                    <div class="input-group">
                        <span class="input-group-text">Mensaje</span>
                        <textarea class="form-control" aria-label="With textarea"></textarea>
                        </div>

                    <div class="form-group form-check">
                        <label class="form-check-label">
                        <input class="form-check-input" type="checkbox"> Remember me
                        </label>
                    </div>
                    
                    <button type="submit" class="btn btn-primary">Submit</button>
                    </form>


                </div>

               
            </div>
        
    </div>