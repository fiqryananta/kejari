
<!-- [ Main Content ] start -->
<section class="pcoded-main-container">
    <div class="pcoded-content">
        <!-- [ breadcrumb ] start -->
        <div class="page-header">
            <div class="page-block">
                <div class="row align-items-center">
                    <div class="col-md-12">
                        <div class="page-header-title">
                            <h5 class="m-b-10">I.N 6</h5>
                        </div>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>"><i class="feather icon-home"></i></a></li>
                            <li class="breadcrumb-item"><a href="#!">I.N 6</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- [ breadcrumb ] end -->
        <!-- [ Main Content ] start -->
        <div class="row">
            <!-- Zero config table start -->
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h5>Surat I.N 6</h5>
                        <a href="<?php echo base_url(); ?>in6/tambah"><button type="button" class="btn btn-icon btn-primary" style="float: right;"><i class="feather icon-plus"></i></button></a>
                    </div>
                    <div class="card-body">
                        <div class="dt-responsive table-responsive">
                            <table id="simpletable" class="table table-striped table-bordered nowrap">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Nomor</th>
                                        <th>Tanggal</th>
                                        <th>Berkas</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    <?php
                                     $x = 1;
                                     foreach ($berkas as $row) { ?>
                                        
                                   

                                    <tr>
                                        <td><?php echo $x; ?></td>
                                        <td><?php echo $row['nomor']; ?></td>
                                        <td><?php echo $row['tanggal']; ?></td>
                                        <td><button type="button" id="berkas" kode="<?php echo $row['id']; ?>"  class="btn btn-outline-info berkas"><i class="mr-2 feather icon-file-text"></i>Berkas</button></td>
                                        <td>
                                            <button type="button" class="btn  btn-danger btn-sm hapus"  kode="<?php echo $row['id']; ?>">Hapus</button>
                                        </td>
                                    </tr>

                                <?php
                                    $x++;
                                 } ?>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Zero config table end -->
        </div>
        <!-- [ Main Content ] end -->
    </div>
</section>
<!-- [ Main Content ] end -->
    
    <div class="modal fade bd-example-modal-lg" tabindex="-1" id="modal" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title h4" id="myLargeModalLabel">Berkas Arsip</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                </div>
                <div id="xmodal2"></div>
            </div>
        </div>
    </div>

<script>
    

    $('.hapus').click(function(e) {

        e.preventDefault();

        var kode = $(this).attr('kode');

        swal({
            title: "Hapus Pengajuan?",
            text: "Anda Yakin Untuk Menghapus Pengajuan Ini?",
            icon: "warning",
            buttons: true,
            dangerMode: true,
        })
        .then((willDelete) => {
            if (willDelete) {

                $.ajax({

                    type: 'POST',

                    url: '<?= base_url() ?>pengajuan/hapus/',

                    data: {
                        'kode': kode,
                    },

                    success: function(data) {

                                  
                        swal({
                          title: 'Berhasil!',
                          text: 'Berkas Berhasil Dihapus!',
                          icon: 'success'
                        }).then(function() {
                            window.location.href = "<?php echo base_url(); ?>/pengajuan/";
                        });



                    }

                });

            }
        });

    });

</script>