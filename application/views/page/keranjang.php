<?php $this->load->view('include/head'); ?>
<?php $this->load->view('include/navbar'); ?>
<div class="mainbg">
	<div style="background: rgba(0,0,0,.5);">
		<div class="container">
			<div class="col-md-12" style="margin:5% auto; max-height: 150px;height:100%;">
				<h1><label class="wow fadeInLeft judul-link">KERANJANG</label></h1>
			</div>
		</div>
	</div>
	
</div>

<?php if($cekKeranjang->num_rows() > 0){ ?>
<div class="aboutus konten1">
  <div class="container">
      
    <div class="col-md-12" style="margin-top: 2%;">
        
        <form method="post" action="<?=site_url('produk/beli')?>" enctype="multipart/form-data" onsubmit="submitK()">
        
    <?php foreach($showKeranjang->result() as $row){ ?>
        <input type="hidden" value="<?=$row->id_keranjang?>" id="id_keranjang" name="id_keranjang[]">
        <input type="hidden" value="<?=$row->id_produk?>" id="id_produk" name="id_produk[]">
        <input type="hidden" value="<?=$row->stok?>" name="stok[]">
        <div class="panel panel-danger ">
            <div class="panel-head">
                <h4 class="titleMenu" style="color:#e9454b;padding:3%;font-size:1.5em !important;"><?=$row->produk?>
                    <div style="float:right;">
                        
                        <a role="button" onclick="hapusK(<?=$row->id_keranjang?>)" class="btn-danger btn" style="float:right;color:#fff;"><i class="fa fa-trash-o"></i></a>
                    </div>
                </h4>
            </div>
            <div class="panel-body">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Nama Penerima: </label>
                                <input name="nama[]" id="namaK<?=$row->id_keranjang?>" type="text" readonly value="<?=$row->user?>" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label>Email: </label>
                                <input name="email[]" id="emailK<?=$row->id_keranjang?>" type="text" readonly value="<?=$row->email?>" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label>Alamat: </label>
                                <textarea name="alamat[]" id="alamatK<?=$row->id_keranjang?>" class="form-control" readonly style="height:100px;" required><?=$row->alamat?></textarea>
                            </div>
                            <br>
                            
                            
                        </div>
                        <div class="col-md-4">
                        <center><img style="margin-top:10%;border:1px solid;" src="<?=base_url('upload/thumbnail/'. $row->img); ?>" class="responimg"></center> <br>
                        </div>
                        
                        <div class="col-md-4">
                        <div class="form-group">
                                <label>Jumlah: </label>
                                <input name="jumlah[]" id="jumlahK<?=$row->id_keranjang?>" oninput="jumlahK(<?=$row->id_keranjang?>)" type="number" class="form-control" readonly value="<?=$row->jumlah?>" min="1" max="<?=$row->stok?>" onkeydown="return false">
                                <label>Harga: </label>
                                <input id="hidden_hargaK<?=$row->id_keranjang?>" type="hidden" value="<?=$row->harga?>">
                                <input type="text" class="form-control" disabled value="<?='Rp '.number_format($row->harga)?>">
                                <label>Total: </label>
                                <input name="total[]" class="hidden_total" id="hidden_total<?=$row->id_keranjang?>" type="hidden" value="<?=$row->total?>">
                                <input id="totalK<?=$row->id_keranjang?>" type="text" class="form-control" disabled value="<?='Rp '.number_format($row->total)?>">
                                <label>Keterangan (opsional): </label>
                                <textarea name="keterangan[]" class="form-control" placeholder="Tulis keterangan. Contoh: kirim esok hari"></textarea>
                        </div>

                        </div>
                    </div>
            </div>
            <div class="panel-footer">
                    <div class="form-group">
                        <a role="button" button class="btn btn-danger" style="color:#fff;" onclick="editK(<?=$row->id_keranjang?>)">Edit</a>
                    </div>
            </div>
        </div>
    <?php } ?>
    

    </div>

    <div class="col-md-12">
        <div class="panel panel-danger">
            <div class="panel-body">
                <h3>Total : <span id="semuaK"></span></h3> <hr>
                <div class="col-md-4">
                    <div class="form-group">
                        <label>BNI :</label>
                        <input type="text" class="form-control" disabled value="123REKBNI   A.N PEMILIK REKENING">
                    </div>
                    <div class="form-group">
                        <label>BCA :</label>
                        <input type="text" class="form-control" disabled value="123REKBCA   A.N PEMILIK REKENING">
                    </div>
                    <div class="form-group">
                        <label>BRI :</label>
                        <input type="text" class="form-control" disabled value="123REKBRI   A.N PEMILIK REKENING">
                    </div>
                </div>

                <div class="col-md-4">
                    <h3>Pilih Pengiriman</h3>
                    <select name="kurir" required class="form-control" style="height:34px;" required>
                        <option selected hidden disabled value="">Silahkan pilih kurir</option>
                        <option value="JNE">JNE</option>
                        <option value="JNT">JNT</option>
                    </select>
                    <i>Toko kami menyediakan bebas ongkir</i>
                </div>

                <div class="col-md-4">
                    <h3>Upload Bukti Pengiriman</h3>
                        <input name="bukti" type="file" class="form-control" style="height:40px;" >
                </div>

            </div>
            <div class="panel-footer">
                <button id="btnSubmit" class="btn btn-danger">Submit</button>
            </div>

        </div>
    </div>
    </form>

  </div>
</div>

<?php }else{ ?>
<div class="aboutus konten1">
    <div class="container">      
        <div class="col-md-12" style="margin-top: 2%;">
        <center>
            <h1>Keranjang kamu masih kosong</h1>
            <h1>Sudah cek produk hari ini?</h1>
            <a href="<?=site_url('produk')?>"<button class="btn btn-danger mybtn">Produk</button></a>
        </center>
        </div>
    </div>
</div>

<?php } ?>


<?php $this->load->view('include/foot'); ?>