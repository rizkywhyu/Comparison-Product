<!-- Main content -->
        <section class='content'>
          <div class='row'>
            <div class='col-xs-12'>
              <div class='box'>
                <div class='box-header'>
                
                  <h3 class='box-title'>Forklift Battery</h3>
                      <div class='box box-primary'>
        <form action="<?php echo $action; ?>" method="post" enctype="multipart/form-data"><table class='table table-bordered'>
        <tr><td><label>Characteristic</label></td></tr>
        <tr><td>Model<?php echo form_error('model') ?></td>
            <td><input type="text" class="form-control" name="model" id="model" placeholder="model" required="trim" value="<?php echo $model; ?>" / >
        </td>
        <tr><td>Gambar<?php echo form_error('gambar') ?></td>
            <td><input type="file" name="filefoto" class="form-control" value="<?php echo $gambar; ?>" />
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
          
  	    <tr><td>Operator Position <?php echo form_error('operator') ?></td>
              <td><input type="text" class="form-control" name="operator" id="operator" placeholder="Operator Position"  required="trim" value="<?php echo $operator; ?>" />
          </td>
        <tr><td>Tire Type <?php echo form_error('tiretype') ?></td>
            <td><input type="text" class="form-control" name="tiretype" id="tiretype" placeholder="Tire Type" required="trim" value="<?php echo $tiretype; ?>" />
        </td>
         <tr><td>Max Fork Height (mm) <?php echo form_error('forkheight') ?></td>
            <td><input type="text" class="form-control" name="forkheight" id="forkheight" placeholder="Max Fork Height" required="trim" value="<?php echo $forkheight; ?>" />
        </td>


         <tr><td><label>Electrical</label></td></tr>
         <tr><td><b>Battery(Voltage/Capacity) :</b></td></tr>
        <tr><td>Min<?php echo form_error('batmin') ?></td>
            <td><input type="text" class="form-control" name="batmin" id="batmin" placeholder="Min" required="trim" value="<?php echo $batmin; ?>" / >
        </td>
        <tr><td>High Cap <?php echo form_error('batcap') ?></td>
              <td><input type="text" class="form-control" name="batcap" id="batcap" placeholder="High Cap" required="trim" value="<?php echo $batcap; ?>" />
          </td>
           <tr><td><b>Electric Motor :</b></td></tr>
        <tr><td>Drive (Kw)<?php echo form_error('drive') ?></td>
              <td><input type="text" class="form-control" name="drive" id="drive" placeholder="Drive" required="trim" value="<?php echo $drive; ?>" />
          </td>
       
        <tr><td>Load Handling (Kw)<?php echo form_error('handling') ?></td>
              <td><input type="text" class="form-control" name="handling" id="handling" placeholder="Load Handling" required="trim" value="<?php echo $handling; ?>" />
          </td>
          
        <tr><td>Power Steering (Kw) <?php echo form_error('steering') ?></td>
              <td><input type="text" class="form-control" name="steering" id="steering" placeholder="Power Steering" required="trim" value="<?php echo $steering; ?>" />
          </td>
        <tr><td>Control Type <?php echo form_error('control') ?></td>
            <td><input type="text" class="form-control" name="control" id="control" placeholder="Control Type" required="trim" value="<?php echo $control; ?>" />
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
        <tr><td>Lowering Speed (mm/s)<?php echo form_error('lower') ?></td>
              <td><input type="text" class="form-control" name="lower" id="lower" placeholder="Lowering Speed" required="trim" value="<?php echo $lower; ?>" />
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


         <tr><td><label>Dimensions</label></td></tr>
        <tr><td>Vehicle Weight (kg)<?php echo form_error('vehicle') ?></td>
            <td><input type="text" class="form-control" name="vehicle" id="vehicle" placeholder="Vehicle Weight" required="trim" value="<?php echo $vehicle; ?>" / >
        </td>
        <tr><td>Overall Length to Fork Face (mm) <?php echo form_error('lengthtofork') ?></td>
              <td><input type="text" class="form-control" name="lengthtofork" id="lengthtofork" placeholder="Overall Length to Fork Face" required="trim" value="<?php echo $lengthtofork; ?>" />
          </td>
        <tr><td>Overall Width (mm)<?php echo form_error('width') ?></td>
              <td><input type="text" class="form-control" name="width" id="width" placeholder="Overall Width" required="trim" value="<?php echo $width; ?>" />
          </td>
       
        <tr><td>Overhead Guard Height (mm)<?php echo form_error('guard') ?></td>
              <td><input type="text" class="form-control" name="guard" id="guard" placeholder="Overhead Guard Height" required="trim" value="<?php echo $guard; ?>" />
          </td>
          
        <tr><td>Tire Size (front/rear) <?php echo form_error('tire') ?></td>
              <td><input type="text" class="form-control" name="tire" id="tire" placeholder="Tire Size" required="trim" value="<?php echo $tire; ?>" />
          </td>


           <tr><td><label>Options Availability</label></td></tr>
        <tr><td>Full Free Lift 2 Stage Mast<?php echo form_error('freeliftdua') ?></td>
            <td><input type="text" class="form-control" name="freeliftdua" id="freeliftdua" placeholder="Full Free Lift 2 Stage Mast" required="trim" value="<?php echo $freeliftdua; ?>" / >
        </td>
        <tr><td>Full Free Lift 3 Stage Mast <?php echo form_error('freelifttiga') ?></td>
              <td><input type="text" class="form-control" name="freelifttiga" id="freelifttiga" placeholder="Full Free Lift 3 Stage Mast" required="trim" value="<?php echo $freelifttiga; ?>" />
          </td>
        <tr><td>Digital Display<?php echo form_error('display') ?></td>
              <td><input type="text" class="form-control" name="display" id="display" placeholder="Digital Display" required="trim" value="<?php echo $display; ?>" />
          </td>
       
        <tr><td>Additional Feature<?php echo form_error('feature') ?></td>
              <td><input type="text" class="form-control" name="feature" id="feature" placeholder="Additional Feature" required="trim" value="<?php echo $feature; ?>" />
          </td>
          
        
       
        
<!--	    <input type="hidden" name="Id_buku" value="<?php echo $Id_buku; ?>" /> -->
	    <tr><td colspan='2'><button type="submit" class="btn btn-primary"><?php echo $button ?></button> 
	    <a href="<?php echo site_url('Battery') ?>" class="btn btn-default">Cancel</a></td></tr>
	
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