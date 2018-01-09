       
    <div class="container">
      <h1 class="mt-3">Data Kasir</h1>
      <?php if (isset($fungsi) == 'edit') {
        ?>
        <form action="<?php echo base_url(). 'index.php/url/updatekasir'; ?>" method="post">
        <div class="row mt-5">
          <div class="col-md-5">
            <div class="row">
              <div class="col-sm-9">
                <div class="form-group">
                </div>
              </div>
            </div>
            <?php foreach ($kasir as $k) {
              ?>
              <div class="row"> 
              <div class="col-sm-9">
                <div class="form-group">
                  <label for="exampleInputEmail1">ID Kasir</label>
                  <input type="text" name="ksr_id" class="form-control" value="<?php echo $k->KSR_ID ?>" maxlength="10" id="exampleInputEmail1" aria-describedby="emailHelp" readonly placeholder="ID Kasir">
                </div>
              </div> 
            </div>
             <div class="row"> 
              <div class="col-sm-9">
                <div class="form-group">
                  <label for="exampleInputEmail1">Nama</label>
                  <input type="text" name="ksr_nama" class="form-control" value="<?php echo $k->KSR_NAMA ?>" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Username">
                </div>
              </div> 
            </div>
             <div class="row"> 
              <div class="col-sm-9">
                <div class="form-group">
                  <label for="exampleInputEmail1">Password</label>
                  <input type="password" name="ksr_password" class="form-control" value="<?php echo $k->KSR_PASSWORD ?>" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Password">
                </div>
              </div> 
            </div>
             <div class="row"> 
              <div class="col-sm-9">
                <div class="form-group">
                  <label for="exampleInputEmail1">Jabatan</label>
                  <select name="ksr_jabatan" class="form-control" id="sel1">
                    <option>- PIlih -</option>
                    <option <?php if ($k->KSR_JABATAN == 'Kasir') { echo 'selected'; } ?> >Kasir</option>
                    <option <?php if ($k->KSR_JABATAN == 'Manager') { echo 'selected'; } ?>>Manager</option>
                  </select>
                </div>
              </div> 
            </div>
            <?php } ?>
            <div class="row"> 
              <div class="col-sm-12">   
                 <button type="submit" class="btn btn-primary btn-md pull-right">Simpan Data</button>
                 
              </div> 
            </div>
          </form>

        <?php } else { ?>   
          <form action="<?php echo base_url(). 'index.php/url/aksi_daftar'; ?>" method="post">
        <div class="row mt-5">
          <div class="col-md-5">
            <div class="row">
              <div class="col-sm-9">
                <div class="form-group">
        </div>
              </div>
            </div>
      <div class="row"> 
              <div class="col-sm-9">
                <div class="form-group">
                  <label for="exampleInputEmail1">ID Kasir</label>
                  <input type="text" name="ksr_id" class="form-control" maxlength="10" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="ID Kasir">
                </div>
              </div> 
            </div>
             <div class="row"> 
              <div class="col-sm-9">
                <div class="form-group">
                  <label for="exampleInputEmail1">Nama</label>
                  <input type="text" name="ksr_nama" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Username">
                </div>
              </div> 
            </div>
             <div class="row"> 
              <div class="col-sm-9">
                <div class="form-group">
                  <label for="exampleInputEmail1">Password</label>
                  <input type="password" name="ksr_password" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Password">
                </div>
              </div> 
            </div>
             <div class="row"> 
              <div class="col-sm-9">
                <div class="form-group">
                  <label for="exampleInputEmail1">Jabatan</label>
                  <select name="ksr_jabatan" class="form-control" id="sel1">
                    <option>- PIlih -</option>
                    <option>Kasir</option>
                    <option>Manager</option>
                  </select>
                </div>
              </div> 
            </div>
            <div class="row"> 
              <div class="col-sm-12">   
                 <button type="submit" class="btn btn-primary btn-md pull-right">Simpan Data</button>
                 
              </div> 
            </div>
          </form>

        <?php } ?>

      


          </div>
          <div class="col-md-7">
            <div class="row">
              <div class="col-12">
                <table class="table table-hover table-bordered ">
                  <thead>
                    <tr>
                      <th scope="col">No</th>
                      <th scope="col">Nama</th>
                      <th scope="col">Username</th>
                      <th scope="col">Password</th>
                      <th scope="col">Jabatan</th>
                      <th scope="col"></th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php 
                    $no = 0;
                    foreach ($tb_kasir as $row){ 
                    $no++;
                    ?>
                    <tr>
                      <th><?php echo $no ?></th>
                      <td><?php echo $row->KSR_NAMA ?></td>
                      <td><?php echo $row->KSR_ID ?></td>
                      <td><?php echo $row->KSR_PASSWORD ?></td>
                      <td><?php echo $row->KSR_JABATAN ?></td>
                      <td><a href="<?php echo base_url('index.php/url/editkasir/')?><?php  echo $row->KSR_ID; ?>" class="btn btn-warning btn-sm">Edit</a>&nbsp&nbsp&nbsp;<a href="<?php echo base_url('index.php/url/hapuskasir') ?>/<?php  echo $row->KSR_ID; ?>" class="btn btn-danger btn-sm">Hapus</a></td>
                    </tr>
                    <?php } ?>
                    
                  </tbody>
                </table>
              </div>            
            </div>
              
           
             
             
          </div>  
        </div>
        


        
       
    </div>