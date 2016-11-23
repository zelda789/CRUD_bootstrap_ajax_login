<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">

  <title>Welcome to CodeIgniter</title>
  <!-- bootstrap -->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/bootstrap/css/bootstrap.min.css">
  <!-- datatables css -->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/datatables/datatables.min.css">

</head>
<body>


  <div class="container">

    <div class="page-header">
      <center><h2>Data Siswa</h2></center>
    </div>

    <div class="messages"></div>

    <button class="btn btn-default pull pull-right" data-toggle="modal" data-target="#addMember" onclick="addMemberModel()">
      Tambah Siswa
    </button>

    <br /> <br />

    <table class="table table-bordered" id="manageMemberTable">
      <thead>
        <tr>
          <th>Nama</th>
          <th>Alamat</th>
          <th>Kelas</th>
          <th>Pilihan</th>      
        </tr>
      </thead>    
</table>
</div>

  <!-- add member -->
  <div class="modal fade" tabindex="-1" role="dialog" id="addMember">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title"><center>Tambah Siswa</center></h4>
      </div>
      <form method="post" action="http://localhost/php/admin_ci/index.php/siswa/create" id="createForm">
      <div class="modal-body">        
        <div class="form-group">
          <label for="nama">Nama</label>
          <input type="text" class="form-control" id="fname" name="nama" placeholder="Masukkan Nama">
        </div>
        <div class="form-group">
          <label for="alamat">Alamat</label>
          <input type="text" class="form-control" id="alamat" name="alamat" placeholder="Masukkan Alamat">
        </div>         

        <div class="form-group">
        <label for="kelas">Kelas</label>
       <select name="id_kelas" class="form-control">
      <option value="">--Pilih Kelas--</option>
      <?php
      foreach ($kelas as $key => $value): ?>
        <option value="<?php echo $value->id_kelas ?>"><?php echo $value->nama_kelas ?></option>
   
      <?php endforeach  ?>
      </select>     
      </div>
      </div>
  
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
        <button type="submit" class="btn btn-primary">Simpan</button>
      </div>
      </form>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
  <!-- /add mmebers -->

  <!-- edit member -->
  <div class="modal fade" tabindex="-1" role="dialog" id="editMemberModal">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Edit Member</h4>
      </div>
      <form method="post" action="http://localhost/php/admin_ci/index.php/siswa/edit" id="editForm">
      <div class="modal-body">        
        <div class="form-group">
          <label for="nama">Nama </label>
          <input type="text" class="form-control" id="edit_nama" name="edit_nama" placeholder="Nama">
        </div>
        <div class="form-group">
          <label for="alamat">Alamat</label>
          <input type="text" class="form-control" id="edit_alamat" name="edit_alamat" placeholder="Alamat">
        </div>  

       <div class="form-group">
        <label for="kelas">Kelas</label>
       <select name="edit_kelas" class="form-control">
      <option value="">--Pilih Kelas--</option>
      <?php
      foreach ($kelas as $key => $value): ?>
        <option value="<?php echo $value->id_kelas ?>" id="edit_kelas<?php echo $value->id_kelas ?>"> <?php echo $value->nama_kelas; ?></option>   
    <?php endforeach  ?>   
      </select>     
      </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save changes</button>
      </div>
      </form>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
  <!-- /edit mmebers -->


 <!-- removeMember -->
<div class="modal fade" tabindex="-1" role="dialog" id="removeMemberModal">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Modal title</h4>
      </div>
      <div class="modal-body">
        <p>Do you really want to remove ?</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" id="removeMemberBtn" class="btn btn-primary">Save changes</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
  <!-- removeMember -->
</body>
</html>