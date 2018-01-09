        
    <div class="container">

      <?php if (isset($fungsi) == 'edit') {
        ?>
        <h1 class="mt-3">Edit Barang</h1> 
        <form action="<?php echo base_url('index.php/url/update_barang') ?>" method="post">
          <?php foreach ($edit as $e) {
            ?>
            <div class="row">
              <div class="col-3">
                <div class="form-group">
                  <label for="exampleInputEmail1">ID Barang</label>
                  <input type="text" name="id" value="<?php echo $e->BRG_ID ?>" readonly class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="ID barang">
                </div>
              </div>
              <div class="col-5">
                <div class="form-group">
                  <label for="exampleInputEmail1">Nama Barang</label>
                  <input type="text" name="nama" value="<?php echo $e->BRG_NAMA ?>" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama Barang">
                </div>
              </div>
            </div>

             <div class="row"> 
              <div class="col-2">
                <div class="form-group">
                  <label for="exampleInputEmail1">Stok</label>
                  <input type="text" name="stok" class="form-control" value="<?php echo $e->BRG_STOCK ?>" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Jumlah Stok">
                </div>
              </div> 
            </div>
             <div class="row"> 
              <div class="col-3">
                <div class="form-group">
                  <label for="exampleInputEmail1">Harga Beli</label>
                  <input type="text" name="beli" class="form-control" value="<?php echo $e->BRG_HARGA ?>" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Harga Beli">
                </div>
              </div>
                <div class="col-3">
                <div class="form-group">
                  <label for="exampleInputEmail1">Harga Jual</label>
                  <input type="text" name="jual" class="form-control" value="<?php echo $e->BRG_HARGA_JUAL ?>" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Harga Jual">
                </div>
              </div> 
            </div>
             <div class="row"> 
             
            </div>
             <div class="row"> 
              <div class="col-3">
                <div class="form-group">
                  <label for="exampleInputEmail1">Tanggal Kadaluarsa</label>
                  <input type="date" name="kadaluarsa"  class="form-control" value="<?php echo $e->BRG_EXPIRED ?>" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Kadaluarsa">
                </div>
              </div> 
            </div>
             <?php } ?>
            <div class="row"> 
              <div class="col-md-9">   
                 <button type="submit" class="btn btn-primary btn-md pull-left">Simpan Data Barang</button>
                 
              </div> 
            </div>
          </form>
      <?php } else { ?>
        <h1 class="mt-3">Data Barang</h1> 
      <form action="<?php echo base_url('index.php/url/save_barang') ?>" method="post">
            <div class="row">
              <div class="col-3">
                <div class="form-group">
                  <label for="exampleInputEmail1">ID Barang</label>
                  <input type="text" name="id" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="ID barang">
                </div>
              </div>
              <div class="col-5">
                <div class="form-group">
                  <label for="exampleInputEmail1">Nama Barang</label>
                  <input type="text" name="nama" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama Barang">
                </div>
              </div>
            </div>

             <div class="row"> 
              <div class="col-2">
                <div class="form-group">
                  <label for="exampleInputEmail1">Stok</label>
                  <input type="text" name="stok" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Jumlah Stok">
                </div>
              </div> 
            </div>
             <div class="row"> 
              <div class="col-3">
                <div class="form-group">
                  <label for="exampleInputEmail1">Harga Beli</label>
                  <input type="text" name="beli" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Harga Beli">
                </div>
              </div>
                <div class="col-3">
                <div class="form-group">
                  <label for="exampleInputEmail1">Harga Jual</label>
                  <input type="text" name="jual" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Harga Jual">
                </div>
              </div> 
            </div>
             <div class="row"> 
             
            </div>
             <div class="row"> 
              <div class="col-3">
                <div class="form-group">
                  <label for="exampleInputEmail1">Tanggal Kadaluarsa</label>
                  <input type="date" name="kadaluarsa"  class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Kadaluarsa">
                </div>
              </div> 
            </div>
             
            <div class="row"> 
              <div class="col-md-9">   
                 <button type="submit" class="btn btn-primary btn-md pull-left">Simpan Data Barang</button>
                 
              </div> 
            </div>
          </form>
      <?php } ?>

      
          <br>
            <div class="row">
              <div class="col-12">
                <table class="table table-hover table-bordered ">
                  <thead>
                    <tr>
                      <th scope="col">No</th>
                      <th scope="col">ID Barang</th>
                      <th scope="col">Nama Barang</th>
                      <th scope="col">Stok</th>
                      <th scope="col">Harga Beli</th>
                      <th scope="col">Harga Jual</th>
                      <th scope="col">Kadaluarsa</th>
                      <th scope="col"></th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php 
                    $no = 0;
                    foreach ($barang as $b) {
                      $no++;
                    ?>
                    <tr>
                      <th><?php echo $no ?></th>
                      <td><?php echo $b->BRG_ID ?></td>
                      <td><?php echo $b->BRG_NAMA ?></td>
                      <td><?php echo $b->BRG_STOCK ?></td>
                      <td><?php echo $b->BRG_HARGA ?></td>
                      <td><?php echo $b->BRG_HARGA_JUAL ?></td>
                      <td><?php echo $b->BRG_EXPIRED ?></td>
                      <td><a href="<?php echo base_url('index.php/url/edit_barang/'.$b->BRG_ID) ?>" class="btn btn-warning btn-sm">Edit</button>&nbsp<a href="<?php echo base_url('index.php/url/delete_barang/'.$b->BRG_ID) ?>" class="btn btn-danger btn-sm">Hapus</a></td>
                    </tr>
                    <?php } ?>
                  </tbody>
                </table>
              </div>            
            </div>
              
           
             
             
          
        </div>
        


        
       
    </div>
    

