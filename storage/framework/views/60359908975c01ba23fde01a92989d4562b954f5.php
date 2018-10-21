<!-- edit.blade.php -->
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Laravel 5.6 CRUD Tutorial With Example </title>
    <link rel="stylesheet" href="<?php echo e(asset('css/app.css')); ?>">
  </head>
  <body>
    <div class="container">
      <h2>Edit A Form</h2><br  />
        <form method="post" action="<?php echo e(action('PassportController@update', $id)); ?>">
        <?php echo csrf_field(); ?>
        <input name="_method" type="hidden" value="PATCH">
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <label for="name">Name:</label>
            <input type="text" class="form-control" name="name" value="<?php echo e($passport->name); ?>">
          </div>
        </div>
        <div class="row">
          <div class="col-md-4"></div>
            <div class="form-group col-md-4">
              <label for="email">Email</label>
              <input type="text" class="form-control" name="email" value="<?php echo e($passport->email); ?>">
            </div>
          </div>
        <div class="row">
          <div class="col-md-4"></div>
            <div class="form-group col-md-4">
              <label for="number">Phone Number:</label>
              <input type="text" class="form-control" name="number" value="<?php echo e($passport->number); ?>">
            </div>
          </div>
        <div class="row">
          <div class="col-md-4"></div>
            <div class="form-group col-md-4" style="margin-left:0px">
                <lable>Passport Office</lable>
                <select name="office">
                    <option value="Angeles">Angeles (MarQuee Mall,Angeles, Pampanga)</option>
                    <option value="Bacolod">Bacolod (Robinsons Bacolod)</option>
                    <option value="Baguio">Baguio (SM City Baguio)</option>
                    <option value="Butuan">Butuan (Robinsons Butuan)</option>
                    <option value="CDO">Cagayan De Oro (Centrio Mall, Cagayan de Oro City)</option>
                    <option value="Calasiao">Calasiao (Robinsons Calasiao, Pangasinan)</option>
                    <option value="Cebu">Cebu (Pacific Mall Metro Mandaue, Cebu)</option>
                    <option value="Cotabato">Cotabato (Mall of Alnor, Cotabato City)</option>
                    <option value="Aseana">DFA Manila (Aseana)</option>
                    <option value="Mandaluyong">DFA NCR East (SM Megamall, Mandaluyong City)</option>
                    <option value="Novaliches">DFA NCR North (Robinsons Novaliches, Quezon City)</option>
                    <option value="Cubao">DFA NCR Northeast (Ali Mall Cubao, Quezon City)</option>
                    <option value="Alabang">DFA NCR South (Metro Alabang Town Center, Muntinlupa City)</option>
                    <option value="Manika">DFA NCR West (SM City, Manila)</option>
                    <option value="Davao">Davao (SM City Davao)</option>
                    <option value="Dumaguete">Dumaguete (Robinsons Dumaguete)</option>
                    <option value="GenSan">General Santos (Robinsons General Santos City)</option>
                    <option value="Ilocos">Ilocos Norte (Robinsons Place, San Nicolas)</option>
                    <option value="Iloilo">Iloilo (Robinsons Iloilo)</option>
                    <option value="LaUnion">La Union (Manna Mall San Fernando, La Union)</option>
                    <option value="Legazpi">Legazpi (Pacific Mall Legazpi)</option>
                    <option value="Lipa">Lipa (Robinsons Lipa)</option>
                    <option value="Lucena">Lucena (Pacific Mall, Lucena)</option>
                    <option value="Pampanga">Pampanga (Robinsons StarMills San Fernando, Pampanga)</option>
                    <option value="Palawan">Puerto Princesa (Robinsons Palawan)</option>
                    <option value="Isabela">Santiago, Isabela (Robinsons Place Santiago, Isabela)</option>
                    <option value="Tacloban">Tacloban (Robinsons North Abucay, Tacloban City)</option>
                    <option value="Tuguegarao">Tuguegarao (Regional Government Center, Tuguegarao City)</option>
                    <option value="Zamboanga">Zamboanga (Go-Velayo Bldg. Veterans Ave. Zamboanga City)</option>
                </select>
            </div>
        </div>
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4" style="margin-top:60px">
            <button type="submit" class="btn btn-success" style="margin-left:38px">Update</button>
          </div>
        </div>
      </form>
    </div>
  </body>
</html>