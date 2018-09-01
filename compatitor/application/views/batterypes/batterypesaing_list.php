
        <!-- Main content -->
        <section class='content'>
          <div class='row'>
            <div class='col-md-12'>
              <div class='box'>
                <div class='box-header'>
                  <h3 class='box-title'>Forklift Battery Pesaing List <?php echo anchor('batterypesaing/create/','Create',array('class'=>'btn btn-danger btn-sm'));?></h3>
		
                </div><!-- /.box-header -->
                <div class='box-body'>
        <table class="table table-bordered table-striped" id="mytable">
            <thead>
                <tr>
                    <th width="80px">No</th>
            
		    <th>Model</th>
		    <th>Capacity</th>
		    <th>Center</th>
		    
		    <th>Action</th>
                </tr>
            </thead>
	    <tbody>
            <?php
            $start = 0;
            foreach ($batterypesaing_data as $batterypesaing)
            {
                ?>
                <tr>
		    <td><?php echo ++$start ?></td>
		    <td><?php echo $batterypesaing->model ?></td>
		    <td><?php echo $batterypesaing->capacity ?></td>
		    <td><?php echo $batterypesaing->center ?></td>
		    
		    <td style="text-align:center" width="200px">
			<?php 
			echo anchor(site_url('Batterypesaing/read/'.$batterypesaing->model),'<i class="fa fa-eye"></i>',array('title'=>'detail','class'=>'btn btn-danger btn-sm')); 
			echo '  '; 
			echo anchor(site_url('Batterypesaing/update/'.$batterypesaing->model),'<i class="fa fa-pencil-square-o"></i>',array('title'=>'edit','class'=>'btn btn-danger btn-sm')); 
			echo '  '; 
			echo anchor(site_url('Batterypesaing/delete/'.$batterypesaing->model),'<i class="fa fa-trash-o"></i>','title="delete" class="btn btn-danger btn-sm" onclick="javasciprt: return confirm(\'Are You Sure to Delete ?\')"'); 
           
			?>
		    </td>
	        </tr>
                <?php
            }
            ?>
            </tbody>
        </table>
        <script src="<?php echo base_url('assets/js/jquery-1.11.2.min.js') ?>"></script>
        <script src="<?php echo base_url('assets/datatables/jquery.dataTables.js') ?>"></script>
        <script src="<?php echo base_url('assets/datatables/dataTables.bootstrap.js') ?>"></script>
        <script type="text/javascript">
            $(document).ready(function () {
                $("#mytable").dataTable();
            });
        </script>
                    </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- /.col -->
          </div><!-- /.row -->
        </section><!-- /.content -->