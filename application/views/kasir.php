
  <?php // echo $_SESSION['jabatan'] ?>
  <?= $this->session->flashdata('trans')?>
    <div class="container">
      <h1 class="mt-3">Transaksi Penjualan</h1>
      <?php if (isset($fungsi) == 'transaksi') {
        ?>
          <form action="<?php echo base_url('index.php/url/strans/'.$id); ?>" method="post">
        <div class="row mt-5">
          <div class="col-md-5">
            <div class="row">
              <div class="col-5">
                <div class="form-group">
                  <label for="exampleInputEmail1">Kode barang</label>
                  <input type="text" class="form-control autocomplete2" id="id" name="kode" placeholder="Kode barang">
                </div>
              </div>
              <div class="col-7">
                <div class="form-group">
                  <label for="exampleInputEmail1">Nama barang</label>
                  <input type="search" class='autocomplete form-control' name="nama" id="autocomplete1" placeholder="Nama barang">
                </div>
              </div>
              
            </div>
             <div class="row"> 
              <div class="col-6">
                <div class="form-group">
                  <label for="exampleInputEmail1">Jumlah beli</label>
                  <input type="number" class="form-control" value="1" id="beli" name="qty" onkeyup="sum();" aria-describedby="emailHelp" placeholder="Jumlah beli">
                </div>
              </div> 
            </div>
             <div class="row"> 
              <div class="col-6">
                <div class="form-group">
                  <label for="exampleInputEmail1">Harga per satuan</label>
                  <input type="text" readonly="" class="form-control autocomplete" name="satuan" id="harga" placeholder="Harga satuan">
                </div>
              </div> 
            </div>
             <div class="row"> 
              <div class="col-6">
                <div class="form-group">
                  <label for="exampleInputEmail1">Total harga</label>
                  <input type="text" readonly="" class="form-control" name="total" id="total" aria-describedby="emailHelp" placeholder="Total harga">
                </div>
              </div> 
            </div>
            <div class="row"> 
              <div class="col-12">
                 <button type="submit" class="btn btn-primary btn-sm pull-right ml-2">Proses</button>
                 <button type="reset" class="btn btn-warning btn-sm pull-right">Kosongi</button>
                 
              </div> 
            </div>
          </div>
          </form>

          <div class="col-md-7">
            <div class="row">
              <div class="col-12">
                <table class="table table-hover table-bordered ">
                  <thead>
                    <tr>
                      <th scope="col">No</th>
                      <th scope="col">Nama Barang</th>
                      <th scope="col">Jumlah beli</th>
                      <th scope="col">Harga satuan</th>
                      <th scope="col">Total harga</th>
                      <th scope="col"></th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php 
                    $no = 0;
                    foreach ($transaksi as $t) { 
                      $no++;
                    ?>
                    <tr>
                      <th><?php echo $no ?></th>
                      <td><?php echo $t->BRG_NAMA ?></td>
                      <td><?php echo $t->TRANS_QTY ?></td>
                      <td><?php echo $t->TRANS_HARGA_SATUAN ?></td>
                      <td><?php echo $t->TRANS_SEMUA ?></td>
                      <td><a href="<?php echo base_url('index.php/url/dTransaksi/'.$t->TRANS_ID.'/'.$t->BRG_ID.'/'.$t->TRANS_QTY) ?>" class="btn btn-sm btn-danger"><i class="fa fa-close"></i></a><br></td>
                    </tr>
                   <?php } ?>
                    
                  </tbody>
                </table>
              </div>            
            </div>
              <div class="row">
                <div class="col-4">
                  <h4>Total Bayar</h4>
                </div>
                <div class="col-8">
                  <?php foreach ($total as $total) {
                    ?>
                  <h4>Rp <?php echo $total->total ?></h4><input type="hidden" name="" id="tot" value="<?php echo $total->total ?>">
                  
                </div>
                
              </div>
             <div class="row">
                <div class="col-4">
                  <h4>Jumlah Bayar</h4>
                </div>
                <div class="col-8">
                  <div class="form-group">
                    <input type="text" class="form-control" id="uang" onkeyup="kurangi();" aria-describedby="emailHelp" placeholder="Jumlah bayar">
                  </div>
                </div>
                
              </div>
              <div class="row">
                <div class="col-4">
                  <h4>Kembalian</h4>
                </div>
                <div class="col-8">
                  <div class="form-group">
                    <input type="text" class="form-control" id="kembali" aria-describedby="emailHelp" placeholder="Kembalian">
                  </div>
                </div>
                
              </div>
              <div class="row">
                <div class="col-4">
                  
                </div>
                <div class="col-8">
                  <a href="<?php echo base_url('index.php/url/endTransaksi/'.$id.'/'.$total->total) ?>" class="btn btn-md btn-success btn-block <?php if (isset($fungsi) != 'transaksi') {
                    echo 'disabled';
                  } ?>" >Selesai</a>
                </div>
                <?php } ?>
              </div>
          </div>  
        </div>   
    </div>
    
        <?php } else { ?>
          <form>
        <div class="row mt-5">
          <div class="col-md-5">
            <div class="row">
              <div class="col-5">
                <div class="form-group">
                  <label for="exampleInputEmail1">Kode barang</label>
                  <input type="email" disabled="" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Kode barang">
                </div>
              </div>
              <div class="col-7">
                <div class="form-group">
                  <label for="exampleInputEmail1">Nama barang</label>
                  <input type="email" disabled="" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama barang">
                </div>
              </div>
              
            </div>
             <div class="row"> 
              <div class="col-6">
                <div class="form-group">
                  <label for="exampleInputEmail1">Jumlah beli</label>
                  <input type="email" disabled="" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Jumlah beli">
                </div>
              </div> 
            </div>
             <div class="row"> 
              <div class="col-6">
                <div class="form-group">
                  <label for="exampleInputEmail1">Harga per satuan</label>
                  <input type="email" disabled="" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Harga satuan">
                </div>
              </div> 
            </div>
             <div class="row"> 
              <div class="col-6">
                <div class="form-group">
                  <label for="exampleInputEmail1">Total harga</label>
                  <input type="email" disabled="" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Total harga">
                </div>
              </div> 
            </div>
            <div class="row"> 
              <div class="col-12">   
                 <a href="<?php echo base_url('index.php/url/transaksi/'.$TRANS_ID) ?>" class="btn btn-primary btn-md btn-block">Transaksi Baru</a>
                 
              </div> 
            </div>
          </div>
          </form>

          <div class="col-md-7">
            <div class="row">
              <div class="col-12">
                <table class="table table-hover table-bordered ">
                  <thead>
                    <tr>
                      <th scope="col">No</th>
                      <th scope="col">Nama Barang</th>
                      <th scope="col">Jumlah beli</th>
                      <th scope="col">Harga satuan</th>
                      <th scope="col">Total harga</th>
                      <th scope="col"></th>
                    </tr>
                  </thead>
                  <tbody>
                    
                    <tr>
                      <th><th>
                      <td><?php //echo $t->BRG_NAMA ?></td>
                      <td><?php //echo $t->TRANS_QTY ?></td>
                      <td><?php //echo $t->TRANS_HARGA_SATUAN ?></td>
                      <td><?php //echo $t->TRANS_SEMUA ?></td>
                      
                    </tr>
                
                    
                  </tbody>
                </table>
              </div>            
            </div>
              <div class="row">
                <div class="col-4">
                  <h4>Total Bayar</h4>
                </div>
                <div class="col-8">
                
                  <h4>Rp </h4><input type="hidden" name="" id="tot" value="">
                  
                </div>
                
              </div>
             <div class="row">
                <div class="col-4">
                  <h4>Jumlah Bayar</h4>
                </div>
                <div class="col-8">
                  <div class="form-group">
                    <input type="text" class="form-control" id="uang" onkeyup="kurangi();" aria-describedby="emailHelp" placeholder="Jumlah bayar">
                  </div>
                </div>
                
              </div>
              <div class="row">
                <div class="col-4">
                  <h4>Kembalian</h4>
                </div>
                <div class="col-8">
                  <div class="form-group">
                    <input type="text" class="form-control" id="kembali" aria-describedby="emailHelp" placeholder="Kembalian">
                  </div>
                </div>
                
              </div>
              <div class="row">
                <div class="col-4">
                  
                </div>
                <div class="col-8">
                  <a href="" class="btn btn-md btn-success btn-block <?php if (isset($fungsi) != 'transaksi') {
                    echo 'disabled';
                  } ?>" >Selesai</a>
                </div>
                
              </div>
          </div>  
        </div>   
    </div>
    
        <?php } ?>
      
