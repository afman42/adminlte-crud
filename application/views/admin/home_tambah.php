<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>DataTables</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">DataTables</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Home Tambah</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <form action="<?= site_url('home/tambah'); ?>" method="post">
                  <div class="form-group">
                      <input type="text" name="judul" class="form-control" placeholder="Masukan judul">
                      <?= form_error('judul', '<small class="text-danger">', '</small>'); ?>
                  </div>
                  <div class="form-group">
                      <textarea name="deskripsi" class="form-control" placeholder="Masukan deskripsi"></textarea>
                      <?= form_error('deskripsi', '<small class="text-danger">', '</small>'); ?>
                  </div>
                  <div class="form-group">
                      <input type="submit" class="btn btn-primary">
                  </div>
                </form>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>