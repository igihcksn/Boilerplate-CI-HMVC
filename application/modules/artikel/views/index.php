 <!-- Begin Page Content -->
        <div class="container-fluid">
          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <div class="row">
                <div class="col-6">
                  <h3 class="m-0 font-weight-bold text-primary p-1">Data Artikel</h3>
                </div>
                <div class="col-6 text-right">
                  <a href="<?= base_url()?>artikel/add_artikel" class="btn btn-primary btn-icon-split ml-auto">
                    <span class="icon text-white-50">
                      <i class="fas fa-plus-square"></i>
                    </span>
                    <span class="text">Tambah Artikel</span>
                  </a>
                </div>
              </div>
            </div>
            <div class="card-body">
              <?php if($this->session->flashdata("success_message")){?>
                <div class="alert alert-success alert-dismissible" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close" style="color:#000"><span aria-hidden="true">&times;</span></button>
                  <p class="m-0" style="color:#3c763d"><?= $this->session->flashdata("success_message") ?></p>
                </div>
                <?php }elseif($this->session->flashdata("error_message")){?>
                <div class="alert alert-danger alert-dismissible" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close" style="color:#000"><span aria-hidden="true">&times;</span></button>
                  <p class="m-0" style="color:#a94442"><?= $this->session->flashdata("error_message") ?></p>
                </div>
              <?php }?>
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>Title</th>
                      <th>Category</th>
                      <th>Images</th>
                      <th>Description</th>
                    </tr>
                  </thead>
                  <tbody>
                  </tbody>
                </table>
              </div>
            </div>
          </div>

        </div>
        <!-- /.container-fluid -->

        <script type="text/javascript">
          $(document).ready(function() {
            var table  = $('#dataTable').DataTable( {
                  "processing": true,
                  "serverSide": true,
                  "ajax": {
                      "url": "<?= base_url(); ?>artikel/all_index",
                      "type": "POST"
                  },
                  "columns": [
                      { "data": "judul" },
                      { "data": "kategori" },
                      { "data": "gambar" },
                      { "data": "detail" },
                  ]
              } );
          } );
        </script>

        <!-- <script type="text/javascript">
            var table;
            $(document).ready(function() {
                table = $('#dataTable').dataTable({ 
                    "processing": true, 
                    "serverSide": true, 
                    "order": [], 
                    "ajax": {
                        "url": '<?php echo site_url('artikel/all_index'); ?>',
                        "type": "POST"
                    },
                    "lengthMenu": [[10, 25, 50, -1], [10, 25, 50, "All"]],
                    "columns": [
                        {"data": "id","visible":false},
                        {"data": "judul",width:170},
                        {"data": "kategori",width:100},
                        {"data": "gambar",width:100},
                        {"data": "detail",width:100}
                    ],
 
                });
                table.on( 'order.dt search.dt', function () {
                  table.column(0, {search:'applied', order:'applied'}).nodes().each( function (cell, i) {
                      cell.innerHTML = i+1;
                  } );
              } ).draw();
 
            });
        </script> -->