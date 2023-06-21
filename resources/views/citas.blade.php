        @extends('layouts.layout')
        @section('citas')

        <div class="s-content">
          

            <header class="listing-header">
                <h1 class="display-1">Citas medicas</h1>
            </header>
            
            <form class="row g-3">
                <div class="col-md-6">
                  <label for="inputName" class="form-label">Nombre</label>
                  <input type="text" class="form-control" id="inputName">
                </div>
                <div class="col-md-6">
                  <label for="inputLastName" class="form-label">Apellidos</label>
                  <input type="text" class="form-control" id="inputLastName">
                </div>
                <div class="col-6">
                  <label for="inputEmail" class="form-label">Correo</label>
                  <input type="text" class="form-control" id="inputEmail" placeholder="juan@gmail">
                </div>
                <div class="col-6">
                  <label for="inputAddress2" class="form-label">Direccion</label>
                  <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
                </div>
                <div class="col-md-5">
                  <label for="inputCity" class="form-label">Ciudad</label>
                  <input type="text" class="form-control" id="inputCity">
                </div>
                <div class="col-6 col-sm-5" >
                    <label for="inputCity" class="form-label">Dia de la cita</label>
                    <input type="date"  id="inputCity" class="form-control form-control-lg w-60 ">
                  </div>
                <div class="col-md-5">
                  <label for="inputState" class="form-label">Tipo de cita</label>
                  <select id="inputState" class="form-select">
                    <option selected>Choose...</option>
                    <option>...</option>
                  </select>
                </div>
                <div class="col-md-5">
                    <label for="inputState" class="form-label">Sujetos Disponibilidad</label>
                    <select id="inputState" class="form-select">
                      <option selected>Choose...</option>
                      <option>...</option>
                    </select>
                  </div>
                  
                <div class="col-12">
                  <button type="submit" class="btn btn-primary">Enviar</button>
                </div>
              </form>
          