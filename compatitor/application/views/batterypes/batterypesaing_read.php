
        <!-- Main content -->
        <section class='content'>
          <div class='row'>
            <div class='col-xs-12'>
              <div class='box'>
                <div class='box-header'>
                <h3 class='box-title'> Pesaing Forklift Battery Read</h3>
        <table class="table table-bordered">
        <tr><td><label>Characteristic</label></td></tr>
  	    <tr><td>Model</td><td><?php echo $model; ?></td></tr>
        <tr><td>Picture</td><td><img src="<?php echo base_url() ?>gambar/<?=$gambar?>"></td></tr>
  	    <tr><td>Load Capacity (Kg)</td><td><?php echo $capacity; ?></td></tr>
  	    <tr><td>Load Center (mm)</td><td><?php echo $center; ?></td></tr>
        <tr><td>Power Type</td><td><?php echo $powertype; ?></td></tr>
        <tr><td>Operator Position</td><td><?php echo $operator; ?></td></tr>
  	    <tr><td>Tire Type</td><td><?php echo $tiretype; ?></td></tr>
        <tr><td>Max Fork Height (mm)</td><td><?php echo $forkheight; ?></td></tr>

        <tr><td><label>Electrical</label></td></tr>
        <tr><td>Battery(Voltage/Capacity)</td></tr>
        <tr><td>Min</td><td><?php echo $batmin; ?></td></tr>
        <tr><td>High Cap</td><td><?php echo $batcap; ?></td></tr>
        <tr><td>Electric Motor</td></tr>
        <tr><td>Drive (Kw)</td><td><?php echo $drive; ?></td></tr>
        <tr><td>Load Handling (Kw)</td><td><?php echo $handling; ?></td></tr>
        <tr><td>Power Steering (Kw)</td><td><?php echo $steering; ?></td></tr>
        <tr><td>Control Type</td><td><?php echo $control; ?></td></tr>
        <tr><td>Operating Pressure(attachment) (Mpa)</td><td><?php echo $operating; ?></td></tr>

        <tr><td><label>Performance</label></td></tr>
        <tr><td>Travelling Speed(full load) (Km/h)</td><td><?php echo $travelling; ?></td></tr>
        <tr><td>Load Lifting(full load) (mm/sec)</td><td><?php echo $lifting; ?></td></tr>
        <tr><td>Lowering Speed(full load) (mm/s)</td><td><?php echo $lower; ?></td></tr>
        <tr><td>Gradeability(full load) (%)</td><td><?php echo $gradeability; ?></td></tr>
        <tr><td>Turning Radius(outside) (mm)</td><td><?php echo $turning; ?></td></tr>
       <tr><td>Tilt Range (forward/backward)</td>td><?php echo $tilt; ?></td></tr>

        <tr><td><label>Dimensions</label></td></tr>
        <tr><td>Vehicle Weight (Kg)</td><td><?php echo $vehicle; ?></td></tr>
        <tr><td>Overall Length to Fork Face (mm)</td><td><?php echo $lengthtofork; ?></td></tr>
        <tr><td>Overall Width (mm)</td><td><?php echo $width; ?></td></tr>
        <tr><td>Overhead Guard Height (mm)</td><td><?php echo $guard; ?></td></tr>
        <tr><td>Tire Size (Front/Rear)</td><td><?php echo $tire; ?></td></tr>

        <tr><td><label>Options Availability</label></td></tr>
        <tr><td>Full Free Lift 2 Stage Mast</td><td><?php echo $freeliftdua; ?></td></tr>
        <tr><td>Full Free Lift 3 Stage Mast</td><td><?php echo $freelifttiga; ?></td></tr>
        <tr><td>Digital Display</td><td><?php echo $display; ?></td></tr>
        <tr><td>Additional Feature</td><td><?php echo $feature; ?></td></tr>
        
       
	    <tr><td></td><td><a href="<?php echo site_url('batterypesaing') ?>" class="btn btn-default">Cancel</a></td></tr>
	</table>
        </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- /.col -->
          </div><!-- /.row -->
        </section><!-- /.content -->