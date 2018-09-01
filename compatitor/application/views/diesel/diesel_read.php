
        <!-- Main content -->
        <section class='content'>
          <div class='row'>
            <div class='col-xs-12'>
              <div class='box'>
                <div class='box-header'>
                <h3 class='box-title'>Forklift Diesel Read</h3>
        <table class="table table-bordered">
        <tr><td><label>Characteristic</label></td></tr>
  	    <tr><td>Model</td><td><?php echo $model; ?></td></tr>
        <tr><td>Picture</td><td><img src="<?php echo base_url() ?>gambar/<?=$gambar?>"></td></tr>
  	    <tr><td>Load Capacity (Kg)</td><td><?php echo $capacity; ?></td></tr>
  	    <tr><td>Load Center (mm)</td><td><?php echo $center; ?></td></tr>
        <tr><td>Power Type</td><td><?php echo $powertype; ?></td></tr>
         <tr><td>Operator Position</td><td><?php echo $operatorposition; ?></td></tr>
  	    <tr><td>Tire Type</td><td><?php echo $tiretype; ?></td></tr>
        <tr><td>Max Fork Height (mm)</td><td><?php echo $maxforkheight; ?></td></tr>

        <tr><td><label>Power Train</label></td></tr>
        <tr><td>Engine</td><td><?php echo $engine; ?></td></tr>
        <tr><td>Rated Power (Kw)</td><td><?php echo $ratedpower; ?></td></tr>
        <tr><td>Rated Torque (Nm)</td><td><?php echo $ratedtorque; ?></td></tr>
        <tr><td>No of Cylinder</td><td><?php echo $noofcylinder; ?></td></tr>
        <tr><td>Piston Displacement (cc)</td><td><?php echo $piston; ?></td></tr>
        <tr><td>Fuel Tank Capacity (Ltr)</td><td><?php echo $fueltank; ?></td></tr>
        <tr><td>Transmission</td><td><?php echo $transmission; ?></td></tr>
        <tr><td>Stage</td><td><?php echo $stage; ?></td></tr>
        <tr><td>Operating Pressure(attachment) (Mpa)</td><td><?php echo $operating; ?></td></tr>

        <tr><td><label>Performance</label></td></tr>
        <tr><td>Travelling Speed(full load) (Km/h)</td><td><?php echo $travelling; ?></td></tr>
        <tr><td>Load Lifting(full load) (mm/sec)</td><td><?php echo $lifting; ?></td></tr>
        <tr><td>Lowering Speed(full load) (mm/s)</td><td><?php echo $lowering; ?></td></tr>
        <tr><td>Gradeability(full load) (%)</td><td><?php echo $gradeability; ?></td></tr>
        <tr><td>Turning Radius(outside) (mm)</td><td><?php echo $turning; ?></td></tr>
        <tr><td>Tilt Range (forward/backward)</td>td><?php echo $tilt; ?></td></tr>
        <tr><td>Noise level at operator's ear</td>td><?php echo $noise; ?></td></tr>


        <tr><td><label>Dimensions</label></td></tr>
        <tr><td>Vehicle Weight (Kg)</td><td><?php echo $vehicle; ?></td></tr>
        <tr><td>Overall Length to Fork Face (mm)</td><td><?php echo $overalllength; ?></td></tr>
        <tr><td>Overall Width (mm)</td><td><?php echo $width; ?></td></tr>
        <tr><td>Overhead Guard Height (mm)</td><td><?php echo $guardheight; ?></td></tr>
        <tr><td>Tire Size (Front/Rear)</td><td><?php echo $tire; ?></td></tr>

        <tr><td><label>Options Availability</label></td></tr>
        <tr><td>Full Free Lift 2 Stage Mast</td><td><?php echo $freeliftdua; ?></td></tr>
        <tr><td>Full Free Lift 3 Stage Mast</td><td><?php echo $freelift3; ?></td></tr>
        <tr><td>Digital Display</td><td><?php echo $digital; ?></td></tr>
        <tr><td>Additional Feature</td><td><?php echo $feature; ?></td></tr>
        
       
	    <tr><td></td><td><a href="<?php echo site_url('diesel') ?>" class="btn btn-default">Cancel</a></td></tr>
	</table>
        </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- /.col -->
          </div><!-- /.row -->
        </section><!-- /.content -->