<main class="site-main">
    <section class="">
        <div class="hero_content">
            <div class="container">
          <!-- dibaris ini maneh buat kondisi kalo si variabel pesaing ga NULL sedangkan waktu di controller export tadi ga ada sama sekali deklarasiin atau inisasi variabel ini jadi variabel ini ga dikenal sama sekali, walaupun secara teori dia null kan harusnya tapi karena ga dikenal jadi kondisinya tetep miss -->

              <?php if($pesaing!=NULL) { ?>
                <div class="row">
                  <div class="col-md-12">
                    <table class="table">
                        <thead>
                          <tr>
                            <td></td>
                            <th colspan="3">Picture</th>
                            <td><img src="<?php echo base_url() ?>gambar/<?=$forklift->gambar?>"></td>
                            <td><img src="<?php echo base_url() ?>gambar/<?=$pesaing->gambar?>"></td>
                          </tr>
                          
                        </thead>
                        <tbody>
                          <tr>
                            <td rowspan="7">Characteristic</td>
                            <td colspan="2">Model</td>
                            <td></td>
                            <td><?php echo $forklift->model ?></td>
                            <td><?php echo $pesaing->model ?></td>
                          </tr>
                          <tr>
                            <td colspan="2">Load Capacity</td>
                            <td>Kg</td>
                            <td id='idforklift[0]'><?php echo $forklift->capacity?><span style="margin-left: 40px;" id='iconforklift[0]'></span></td>
                            <td id='idpesaing[0]'><?php echo $pesaing->capacity ?><span style="margin-left: 40px;" id='iconpesaing[0]'></span></td>
                          </tr>
                          <tr>
                            <td colspan="2">Load Center</td>
                            <td>mm</td>
                            <td id='idforklift[1]'><?php echo $forklift->center?><span style="margin-left: 40px;" id='iconforklift[1]'></span></td>
                            <td id='idpesaing[1]'><?php echo $pesaing->center ?><span style="margin-left: 40px;" id='iconpesaing[1]'></span></td>
                          </tr>
                          <tr>
                            <td colspan="2">Power Type</td>
                            <td></td>
                            <td><?php echo $forklift->powertype ?></td>
                            <td><?php echo $pesaing->powertype ?></td>
                          </tr>
                          <tr>
                            <td colspan="2">Operator Position</td>
                            <td></td>
                            <td><?php echo $forklift->operator ?></td>
                            <td><?php echo $pesaing->operator ?></td>
                          </tr>
                          <tr>
                            <td colspan="2">Tire Type</td>
                            <td></td>
                            <td><?php echo $forklift->tiretype ?></td>
                            <td><?php echo $pesaing->tiretype ?></td>
                          </tr>
                          <tr>
                            <td colspan="2">Max Fork Height</td>
                            <td>mm</td>
                            <td id='idforklift[2]'><?php echo $forklift->forkheight?><span style="margin-left: 40px;" id='iconforklift[2]'></span></td>
                            <td id='idpesaing[2]'><?php echo $pesaing->forkheight ?><span style="margin-left: 40px;" id='iconpesaing[2]'></span></td>
                          </tr>
                          <tr>
                            <td rowspan="7">Electrical</td>
                            <td rowspan="2">Battery (Voltage/Capacity)</td>
                            <td>Min</td>
                            <td></td>
                            <td><?php echo $forklift->batmin ?></td>
                            <td><?php echo $pesaing->batmin ?></td>
                          </tr>
                          <tr>
                            <td>High Cap</td>
                            <td></td>
                            <td><?php echo $forklift->batcap ?></td>
                            <td><?php echo $pesaing->batcap ?></td>
                          </tr>
                          <tr>
                            <td rowspan="3">Electric Motor</td>
                            <td>Drive</td>
                            <td>Kw</td>
                            <td id='idforklift[3]'><?php echo $forklift->drive ?><span style="margin-left: 40px;" id='iconforklift[3]'></span></td>
                            <td id='idpesaing[3]'><?php echo $pesaing->drive ?><span style="margin-left: 40px;" id='iconpesaing[3]'></span></td>
                          </tr>
                          <tr>
                            <td>Load Hadling</td>
                            <td>Kw</td>
                            <td id='idforklift[4]'><?php echo $forklift->handling ?><span style="margin-left: 40px;" id='iconforklift[4]'></span></td>
                            <td id='idpesaing[4]'><?php echo $pesaing->handling ?><span style="margin-left: 40px;" id='iconpesaing[4]'></span></td>
                          </tr>
                          <tr>
                            <td>Power Steering</td>
                            <td>Kw</td>
                            <td id='idforklift[5]'><?php echo $forklift->steering ?><span style="margin-left: 40px;" id='iconforklift[5]'></span></td>
                            <td id='idpesaing[5]'><?php echo $pesaing->steering ?><span style="margin-left: 40px;" id='iconpesaing[5]'></span></td>
                          </tr>
                          <tr>
                            <td colspan="2">Control Type</td>
                            <td></td>
                            <td><?php echo $forklift->control ?></td>
                            <td><?php echo $pesaing->control ?></td>
                          </tr>
                          </tr>
                          <tr>
                            <td colspan="2">Operating Pressure</td>
                            <td>Mpa</td>
                            <td id='idforklift[6]'><?php echo $forklift->operating?><span style="margin-left: 40px;" id='iconforklift[6]'></span></td>
                            <td id='idpesaing[6]'><?php echo $pesaing->operating ?><span style="margin-left: 40px;" id='iconpesaing[6]'></span></td>
                          </tr>
                          <tr>
                            <td rowspan="6">Performance</td>
                            <td colspan="2">Travelling Speed</td>
                            <td>Km/h</td>
                            <td id='idforklift[7]'><?php echo $forklift->travelling?><span style="margin-left: 40px;" id='iconforklift[7]'></span></td>
                            <td id='idpesaing[7]'><?php echo $pesaing->travelling ?><span style="margin-left: 40px;" id='iconpesaing[7]'></span></td>
                          </tr>
                          <tr>
                            <td colspan="2">Load Lifting</td>
                            <td>mm/sec</td>
                            <td id='idforklift[8]'><?php echo $forklift->lifting?><span style="margin-left: 40px;" id='iconforklift[8]'></span></td>
                            <td id='idpesaing[8]'><?php echo $pesaing->lifting ?><span style="margin-left: 40px;" id='iconpesaing[8]'></span></td>
                          </tr>
                          <tr>
                            <td colspan="2">Lowering Speed</td>
                            <td>mm/sec</td>
                            <td id='idforklift[9]'><?php echo $forklift->lower ?><span style="margin-left: 40px;" id='iconforklift[9]'></span></td>
                            <td id='idpesaing[9]'><?php echo $pesaing->lower ?><span style="margin-left: 40px;" id='iconpesaing[9]'></span></td>
                          </tr>
                          <tr>
                            <td colspan="2">Gradeability</td>
                            <td>%(tan)</td>
                            <td id='idforklift[10]'><?php echo $forklift->gradeability ?><span style="margin-left: 40px;" id='iconforklift[10]'></span></td>
                            <td id='idpesaing[10]'><?php echo $pesaing->gradeability ?><span style="margin-left: 40px;" id='iconpesaing[10]'></span></td>
                          </tr>
                          <tr>
                            <td colspan="2">Turning Radius</td>
                            <td>mm</td>
                            <td id='idforklift[11]'><?php echo $forklift->turning ?><span style="margin-left: 40px;" id='iconforklift[11]'></span></td>
                            <td id='idpesaing[11]'><?php echo $pesaing->turning ?><span style="margin-left: 40px;" id='iconpesaing[11]'></span></td>
                          </tr>
                          <tr>
                            <td>Tilt Range</td>
                            <td>Forward/Backward</td>
                            <td>deg</td>
                            <td><?php echo $forklift->tilt ?></td>
                            <td><?php echo $pesaing->tilt ?></td>
                          </tr>
                          <tr>
                            <td rowspan="5">Dimension</td>
                            <td colspan="2">Vehicle Weight</td>
                            <td>Kg</td>
                            <td id='idforklift[12]'><?php echo $forklift->vehicle ?><span style="margin-left: 40px;" id='iconforklift[12]'></span></td>
                            <td id='idpesaing[12]'><?php echo $pesaing->vehicle ?><span style="margin-left: 40px;" id='iconpesaing[12]'></span></td>
                          </tr>
                          <tr>
                            <td colspan="2">Overall Lenght to Fork Face</td>
                            <td>mm</td>
                            <td id='idforklift[13]'><?php echo $forklift->lengthtofork ?><span style="margin-left: 40px;" id='iconforklift[13]'></span></td>
                            <td id='idpesaing[13]'><?php echo $pesaing->lengthtofork ?><span style="margin-left: 40px;" id='iconpesaing[13]'></span></td>
                          </tr>
                          <tr>
                            <td colspan="2">Overall Width</td>
                            <td>mm</td>
                            <td id='idforklift[14]'><?php echo $forklift->width ?><span style="margin-left: 40px;" id='iconforklift[14]'></span></td>
                            <td id='idpesaing[14]'><?php echo $pesaing->width ?><span style="margin-left: 40px;" id='iconpesaing[14]'></span></td>
                          </tr>
                          <tr>
                            <td colspan="2">Overhead Guard Height</td>
                            <td>mm</td>
                            <td id='idforklift[15]'><?php echo $forklift->guard ?><span style="margin-left: 40px;" id='iconforklift[15]'></span></td>
                            <td id='idpesaing[15]'><?php echo $pesaing->guard ?><span style="margin-left: 40px;" id='iconpesaing[15]'></span></td>
                          </tr>
                          <tr>
                            <td>Tire Size</td>
                            <td>Front/Rear</td>
                            <td></td>
                            <td><?php echo $forklift->tire ?></td>
                            <td><?php echo $pesaing->tire ?></td>
                          </tr>
                          <tr>
                            <td rowspan="4">Options Availability</td>
                            <td colspan="2">Full free lift 2 stage mast (FV)t</td>
                            <td></td>
                            <td><?php echo $forklift->freeliftdua ?></td>
                            <td><?php echo $pesaing->freeliftdua ?></td>
                          </tr>
                          <tr>
                            <td colspan="2">Full free lift 3 stage mast (FSV)</td>
                            <td></td>
                            <td><?php echo $forklift->freelifttiga ?></td>
                            <td><?php echo $pesaing->freelifttiga ?></td>
                          </tr>
                          <tr>
                            <td colspan="2">Digital display/monitor</td>
                            <td></td>
                            <td><?php echo $forklift->display ?></td>
                            <td><?php echo $pesaing->display ?></td>
                          </tr>
                          <tr>
                            <td colspan="2">Additional Feature</td>
                            <td></td>
                            <td><?php echo $forklift->feature ?></td>
                            <td><?php echo $pesaing->feature ?></td>
                          </tr>
                        </tbody>
                    </table>
                    </div>
                  </div>
                  <div class="row col-md-12">
                    <div class="text-left" style="margin: 10px;">
                       <button class="btn btn-warning" onclick="goBack()" class="btn btn-default btn-wd"> <<< COMPARE</button>
                    </div>
                  </div>
                  <div class="row col-md-12">
                    <div class="text-left" style="margin: 10px;">
                       <a class="btn btn-warning" href="<?php echo site_url('export/cetak/'.$str) ?>" class="btn btn-default btn-wd"> Report</a>
                    </div>
                  </div>
                  <!-- <div id="printableArea">
      <h1>Print me</h1>
</div>
<input type="button" onclick="printDiv('printableArea')" value="print a div!" /> -->



                <?php } ?>
            </div>
        </div>
    </section>                  
</main>
<script>
    function goBack() {
       window.history.go(-1);
}
</script>
<script type="text/javascript">
for (i=0;i<18;i++){  
  var forkCells = document.getElementById("idforklift["+i+"]");
  var pesCells = document.getElementById("idpesaing["+i+"]");
  var sForklift = document.getElementById("iconforklift["+i+"]");
  var sPesaing = document.getElementById("iconpesaing["+i+"]");
  if ((forkCells.innerText*100) == (pesCells.innerText*100)) {
    // document.getElementById("pesan["+i+"]").style.color = 'green';
    // document.getElementById("pesan["+i+"]").innerHTML = 'coba' ;
    sForklift.style.color = '';
    sPesaing.style.color = '';
    sForklift.className += '';
    sPesaing.className += '';
  } else if ((forkCells.innerText*100) > (pesCells.innerText*100)) {
    // document.getElementById("pesan["+i+"]").style.color = 'red';
    // document.getElementById("pesan["+i+"]").innerHTML = 'salah' ;
    sForklift.style.color = 'green';
    sPesaing.style.color = 'red';
    sForklift.className += 'glyphicon glyphicon-plus';
    sPesaing.className += 'glyphicon glyphicon-minus';
  } else if ((forkCells.innerText*100) < (pesCells.innerText*100)) {
    // document.getElementById("pesan["+i+"]").style.color = 'red';
    // document.getElementById("pesan["+i+"]").innerHTML = 'salah' ;
    sForklift.style.color = 'red';
    sPesaing.style.color = 'green';
    sForklift.className += 'glyphicon glyphicon-minus';
    sPesaing.className += 'glyphicon glyphicon-plus';
  }
}  
</script>
<script type="text/javascript">
      function printDiv(divName) {
     var printContents = document.getElementById(divName).innerHTML;
     var originalContents = document.body.innerHTML;

     document.body.innerHTML = printContents;

     window.print();

     document.body.innerHTML = originalContents;
}
</script>
<script>
function printPage(id)
{
   var html="<html>";
   html+= document.getElementById(id).innerHTML;

   html+="</html>";

   var printWin = window.open('','','left=0,top=0,width=1,height=1,toolbar=0,scrollbars=0,status  =0');
   printWin.document.write(html);
   printWin.document.close();
   printWin.focus();
   printWin.print();
   printWin.close();
}
</script>