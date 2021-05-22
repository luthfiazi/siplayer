  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Data Tables
        <small>advanced tables</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Tables</a></li>
        <li class="active">Data tables</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
        
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Data Pemain</h3>
            </div>
            <div class="box-body">
              <div class="pull-right">
              <a href="<?php echo base_url()?>Test/tambah_data" class="btn btn-primary"><i class="mdi mid-plus-circle mr-2 fa fa-plus"></i> Tambah Pemain</a>
            </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>No Punggung</th>
                  <th>Nama Lengkap</th>
                  <th>Umur</th>
                  <th>Asal Club</th>
                  <th>Negara</th>
                </tr>
                </thead>
                <tbody>
                <?php
                  foreach($pemain->result_array() as $data){
                ?>
                <tr>
                  <td><?php echo $data['no_punggung']; ?></td>
                  <td><?php echo $data['nama_lengkap']; ?></td>
                  <td><?php echo $data['umur']; ?></td>
                  <td><?php echo $data['asal_club']; ?></td>
                  <td><?php echo $data['negara']; ?></td>
                </tr>
                <?php } ?>
                </tfoot>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> 2.4.13
    </div>
    <strong>Copyright &copy; 2014-2019 <a href="https://adminlte.io">AdminLTE</a>.</strong> All rights
    reserved.
  </footer>
  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

