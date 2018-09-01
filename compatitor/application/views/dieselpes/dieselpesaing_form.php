<!-- Main content -->
        <section class='content'>
          <div class='row'>
            <div class='col-xs-12'>
              <div class='box'>
                <div class='box-header'>
                
                  <h3 class='box-title'>Pesaing Forklift Diesel</h3>
                      <div class='box box-primary'>
        <form action="<?php echo $action; ?>" method="post" enctype="multipart/form-data"><table class='table table-bordered'>
        <tr><td><label>Characteristic</label></td></tr>
        <tr><td>Model<?php echo form_error('model') ?></td>
            <td><input type="text" class="form-control" name="model" id="model" placeholder="model" required="trim" value="<?php echo $model; ?>" / >
        </td>
         <tr><td>Gambar<?php echo form_error('gambar') ?></td>
            <td><input type="file" name="filefoto" class="form-control" value="<?php echo $gambar; ?>"/>
        </td>
  	    <tr><td>Load Capacity (Kg) <?php echo form_error('capacity') ?></td>
              <td><input type="text" class="form-control" name="capacity" id="capacity" placeholder="Load Capacity" required="trim" value="<?php echo $capacity; ?>" />
          </td>
  	    <tr><td>Load Center (mm)<?php echo form_error('center') ?></td>
              <td><input type="text" class="form-control" name="center" id="center" placeholder="Load Center" required="trim" value="<?php echo $center; ?>" />
          </td>
  	   
  	    <tr><td>Power Type<?php echo form_error('powertype') ?></td>
              <td><input type="text" class="form-control" name="powertype" id="powertype" placeholder="Power Type" required="trim" value="<?php echo $powertype; ?>" />
          </td>
          
  	    <tr><td>Operator Position <?php echo form_error('operatorposition') ?></td>
              <td><input type="text" class="form-control" name="operatorposition" id="operatorposition" placeholder="Operator Position" required="trim" value="<?php echo $operatorposition; ?>" />
          </td>
        <tr><td>Tire Type <?php echo form_error('tiretype') ?></td>
            <td><input type="text" class="form-control" name="tiretype" id="tiretype" placeholder="Tire Type" required="trim" value="<?php echo $tiretype; ?>" />
        </td>
         <tr><td>Max Fork Height (mm) <?php echo form_error('maxforkheight') ?></td>
            <td><input type="text" class="form-control" name="maxforkheight" id="maxforkheight" placeholder="Max Fork Height" required="trim" value="<?php echo $maxforkheight; ?>" />
        </td>


         <tr><td><label>Power Train</label></td></tr>
         <tr><td>Engine<?php echo form_error('engine') ?></td>
            <td><input type="text" class="form-control" name="engine" id="engine" placeholder="Engine" required="trim" value="<?php echo $engine; ?>" / >
        </td>
        <tr><td>Rated Power (Kw) <?php echo form_error('ratedpower') ?></td>
              <td><input type="text" class="form-control" name="ratedpower" id="ratedpower" placeholder="Rated Power" required="trim" value="<?php echo $ratedpower; ?>" />
          </td>
          <tr><td>Rated Torque (Nm)<?php echo form_error('ratedtorque') ?></td>
              <td><input type="text" class="form-control" name="ratedtorque" id="ratedtorque" placeholder="Rated Torque" required="trim" value="<?php echo $ratedtorque; ?>" />
          </td>
       
        <tr><td>No of Cylinder<?php echo form_error('noofcylinder') ?></td>
              <td><input type="text" class="form-control" name="noofcylinder" id="noofcylinder" placeholder="No of Cylinder" required="trim" value="<?php echo $noofcylinder; ?>" />
          </td>
          
        <tr><td>Piston Displacement (cc) <?php echo form_error('piston') ?></td>
              <td><input type="text" class="form-control" name="piston" id="piston" placeholder="Piston Displacement" required="trim" value="<?php echo $piston; ?>" />
          </td>
        <tr><td>Fuel Tank Capacity (Ltr) <?php echo form_error('fueltank') ?></td>
            <td><input type="text" class="form-control" name="fueltank" id="fueltank" placeholder="Fuel Tank Capacity" required="trim" value="<?php echo $fueltank; ?>" />
        </td>
         <tr><td>Transmission <?php echo form_error('transmission') ?></td>
            <td><input type="text" class="form-control" name="transmission" id="transmission" placeholder="Transmission" required="trim" value="<?php echo $transmission; ?>" />
        </td>
        <tr><td>Stage <?php echo form_error('stage') ?></td>
            <td><input type="text" class="form-control" name="stage" id="stage" placeholder="Stage" required="trim" value="<?php echo $stage; ?>" />
        </td>
         <tr><td>Operating Pressure (Mpa) <?php echo form_error('operating') ?></td>
            <td><input type="text" class="form-control" name="operating" id="operating" placeholder="Operating Pressure" required="trim" value="<?php echo $operating; ?>" />
        </td>


         <tr><td><label>Performance</label></td></tr>
        <tr><td>Travelling Speed(full load) (km/h)<?php echo form_error('travelling') ?></td>
            <td><input type="text" class="form-control" name="travelling" id="travelling" placeholder="Travelling Speed" required="trim" value="<?php echo $travelling; ?>" / >
        </td>
        <tr><td>Load Lifting(full load) (mm/s) <?php echo form_error('lifting') ?></td>
              <td><input type="text" class="form-control" name="lifting" id="lifting" placeholder="Load Lifting" required="trim" value="<?php echo $lifting; ?>" />
          </td>
        <tr><td>Lowering Speed (mm/s)<?php echo form_error('lowering') ?></td>
              <td><input type="text" class="form-control" name="lowering" id="lowering" placeholder="Lowering Speed" required="trim" value="<?php echo $lowering; ?>" />
          </td>
       
        <tr><td>Gradeability (%)<?php echo form_error('gradeability') ?></td>
              <td><input type="text" class="form-control" name="gradeability" id="gradeability" placeholder="Gradeability" required="trim" value="<?php echo $gradeability; ?>" />
          </td>
          
        <tr><td>Turning Radius(outside) (mm) <?php echo form_error('turning') ?></td>
              <td><input type="text" class="form-control" name="turning" id="turning" placeholder="Turning Radius" required="trim" value="<?php echo $turning; ?>" />
          </td>
        <tr><td>Tilt Range (forward/backward) <?php echo form_error('tilt') ?></td>
            <td><input type="text" class="form-control" name="tilt" id="tilt" placeholder="Tilt Range" required="trim" value="<?php echo $tilt; ?>" />
        </td>
        <tr><td>Noise level at operator's ear <?php echo form_error('noise') ?></td>
            <td><input type="text" class="form-control" name="noise" id="noise" placeholder="Noise level at operator's ear" required="trim" value="<?php echo $noise; ?>" />
        </td>


         <tr><td><label>Dimensions</label></td></tr>
        <tr><td>Vehicle Weight (kg)<?php echo form_error('vehicle') ?></td>
            <td><input type="text" class="form-control" name="vehicle" id="vehicle" placeholder="Vehicle Weight" required="trim" value="<?php echo $vehicle; ?>" / >
        </td>
        <tr><td>Overall Length to Fork Face (mm) <?php echo form_error('overalllength') ?></td>
              <td><input type="text" class="form-control" name="overalllength" id="overalllength" placeholder="Overall Length to Fork Face" required="trim" value="<?php echo $overalllength; ?>" />
          </td>
        <tr><td>Overall Width (mm)<?php echo form_error('width') ?></td>
              <td><input type="text" class="form-control" name="width" id="width" placeholder="Overall Width" required="trim" value="<?php echo $width; ?>" />
          </td>
       
        <tr><td>Overhead Guard Height (mm)<?php echo form_error('guardheight') ?></td>
              <td><input type="text" class="form-control" name="guardheight" id="guardheight" placeholder="Overhead Guard Height" required="trim" value="<?php echo $guardheight; ?>" />
          </td>
          
        <tr><td>Tire Size (front/rear) <?php echo form_error('tire') ?></td>
              <td><input type="text" class="form-control" name="tire" id="tire" placeholder="Tire Size" required="trim" value="<?php echo $tire; ?>" />
          </td>


           <tr><td><label>Options Availability</label></td></tr>
        <tr><td>Full Free Lift 2 Stage Mast<?php echo form_error('freeliftdua') ?></td>
            <td><input type="text" class="form-control" name="freeliftdua" id="freeliftdua" placeholder="Full Free Lift 2 Stage Mast" required="trim" value="<?php echo $freeliftdua; ?>" / >
        </td>
        <tr><td>Full Free Lift 3 Stage Mast <?php echo form_error('freelift3') ?></td>
              <td><input type="text" class="form-control" name="freelift3" id="freelift3" placeholder="Full Free Lift 3 Stage Mast" required="trim" value="<?php echo $freelift3; ?>" />
          </td>
        <tr><td>Digital Display<?php echo form_error('digital') ?></td>
              <td><input type="text" class="form-control" name="digital" id="digital" placeholder="Digital Display" required="trim" value="<?php echo $digital; ?>" />
          </td>
       
        <tr><td>Additional Feature<?php echo form_error('feature') ?></td>
              <td><input type="text" class="form-control" name="feature" id="feature" placeholder="Additional Feature" required="trim" value="<?php echo $feature; ?>" />
          </td>
          
        
       
        
<!--	    <input type="hidden" name="Id_buku" value="<?php echo $Id_buku; ?>" /> -->
	    <tr><td colspan='2'><button type="submit" class="btn btn-primary"><?php echo $button ?></button> 
	    <a href="<?php echo site_url('dieselpesaing') ?>" class="btn btn-default">Cancel</a></td></tr>
	
    </table></form>
    <!-- <script>
            $(document).ready(function () {
                $(".select2").select2({
                    placeholder: "Please Select"
                });
            });
        </script> -->
    </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- /.col -->
          </div><!-- /.row -->
        </section><!-- /.content -->