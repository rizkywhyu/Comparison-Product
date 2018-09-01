<main class="site-main">
    <section class="hero_area">
        <div class="hero_content">
            <div class="container">
              <div class="row">
                <div class="col-md-1"></div>
                <div class="col-md-4"><center><label><h1>Pilih Model Produk</h1></label></center></div>
                <div class="col-md-2"></div>
                <div class="col-md-4"><center><label><h1>Pilih Model Pesaing</h1></label></center></div>
                <div class="col-md-1"></div>
              </div>
              <div class="row">
                <div class="col-md-1"></div>
                <div class="col-md-4">
                  <div class="form-group">
                      <?php echo form_open('index.php/perbandingan/passing_diesel/'); ?>
                      <td>
                          <select class="form-control border-input" type="text" name="pil_produk" id="pil_produk" value="pil_produk">
                          <?php
                          $no = 1;
                          foreach ($pilih_produk as $list){ ?>
                              <option value="<?php echo $list->model?>"><?php echo $list->model?></option>
                          <?php } ?>
                          </select>
                      </td>
                      <div class="clearfix">&nbsp;</div>
                    </div>
                </div>
                <div class="col-md-2"><center><h4>COMPARE WITH</h4></center></div>
                <div class="col-md-4">
                  <div class="form-group">
                      <td>
                          <select class="form-control border-input" type="text" name="pil_pesaing" id="pil_pesaing" value="pil_pesaing">
                          <?php
                          $no = 1;
                          foreach ($pilih_pesaing as $list){ ?>
                              <option value="<?php echo $list->model?>"><?php echo $list->model?></option>
                          <?php } ?>
                          </select>
                      </td>
                      <div class="clearfix">&nbsp;</div>
                    </div>
                </div>
                <div class="col-md-1"></div>
              </div>
              <div class="row">
                <div class="col-md-1"></div>
                <div class="col-md-4"></div>
                <div class="col-md-2"><h3><center><?php echo form_submit(array('id' => 'submit', 'value' => 'COMPARE','class'=>"btn btn-primary btn-lg")); ?></center></h3></div>
                <div class="col-md-4"></div>
                <div class="col-md-1"></div>
              </div>
            </div>
        </div>
    </section>                  
</main>