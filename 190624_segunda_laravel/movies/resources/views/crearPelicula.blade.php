@extends('template')

@section('pageTitle', 'Crear Pelicula')


@section('mainContent')
  <div class="container">

    <h2>Agregar Pelicula</h2>


    <div class="row">

    <form id="agregarPelicula" name="agregarPelicula" method="POST">
      @csrf

      <div class="row">

              <label class="col12" for="titulo">Titulo</label>
              <input type="text" name="titulo" id="titulo"/>

          </div>
          <div class="row">

              <label for="rating">Rating</label>
              <input type="text" name="rating" id="rating"/>

          </div>

          <div class="row">

              <label for="premios">Premios</label>
              <input type="text" name="premios" id="premios"/>

          </div>

          <div class="row">

              <label for="duracion">Duracion</label>
              <input type="text" name="duracion" id="duracion"/>

          </div>

          <div class="row">

              <label>Fecha de Estreno</label>

              <select name="dia">

                  <option value="">Dia</option>
                  <?php for ($i=1; $i < 32; $i++) { ?>
                      <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
                  <?php } ?>

              </select>

              <select name="mes">

                  <option value="">Mes</option>
                  <?php for ($i=1; $i < 13; $i++) { ?>
                      <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
                  <?php } ?>

              </select>

              <select name="anio">

                  <option value="">Anio</option>
                  <?php for ($i=1900; $i < 2017; $i++) { ?>
                      <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
                  <?php } ?>

              </select>

          </div>

          <input type="submit" value="Agregar Pelicula" name="submit"/>

      </form>

    </div>

  </div>

@endsection
