
<style type="text/css">
    .ck-editor__editable {
        min-height: 200px !important;
    }
</style>

<!-- [ Main Content ] start -->
<section class="pcoded-main-container">
    <div class="pcoded-content">
        <!-- [ breadcrumb ] start -->
        <div class="page-header">
            <div class="page-block">
                <div class="row align-items-center">
                    <div class="col-md-12">
                        <div class="page-header-title">
                            <h5 class="m-b-10">Tambah Surat I.N 6</h5>
                        </div>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>"><i class="feather icon-home"></i></a></li>
                            <li class="breadcrumb-item"><a href="#!">Tambah Surat I.N 6</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- [ breadcrumb ] end -->
        <!-- [ Main Content ] start -->
        <div class="row">
            <!-- [ file-upload ] start -->
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h5>Target Operasi</h5>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Nomor</label>
                                    <input type="text" name="nomor" class="form-control" id="exampleInputEmail1" value="" aria-describedby="emailHelp" placeholder="SP.OPS-.../.../.../...">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Tanggal Pengajuan</label>
                                    <input type="text" name="tanggal" class="form-control date2" data-mask="99-99-9999" id="exampleInputPassword1" placeholder="dd-mm-yyyy">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Masalah Pokok</label>
                                    <input type="text" name="masalah" class="form-control" id="exampleInputEmail1" value="" aria-describedby="emailHelp" placeholder="Masalah Pokok">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Tanggal Pengajuan</label>
                                    <input type="text" name="pelaksana" class="form-control" id="exampleInputEmail1" value="" aria-describedby="emailHelp" placeholder="Pelaksana">
                                </div>
                            </div>
                            <div class="row" id="tabel" style="margin-right: 0px; margin-left: 0px; width: 100%;">
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Unsur Utama</label>
                                        <input type="text" name="unser1" class="form-control" id="exampleInputEmail1" value="" aria-describedby="emailHelp" placeholder="Unsur Utama">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Data Awal Operasi</label>
                                        <input type="text" name="data1" class="form-control" id="exampleInputEmail1" value="" aria-describedby="emailHelp" placeholder="Data Awal Operasi">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Instruksi/Permintaan</label>
                                        <input type="text" name="instruksi1" class="form-control" id="exampleInputEmail1" value="" aria-describedby="emailHelp" placeholder="Masalah Pokok">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Keterangan</label>
                                        <input type="text" name="keterangan1" class="form-control" id="exampleInputEmail1" value="" aria-describedby="emailHelp" placeholder="Masalah Pokok">
                                    </div>
                                </div>
                            </div>
                            <button type="button" id="tambah" style="margin-left: 15px; margin-top: 15px;" class="btn btn-success">Tambah</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- [ file-upload ] end -->
        </div>
        <!-- [ Main Content ] end -->
    </div>
</section>
<!-- [ Main Content ] end -->

    <script src="<?php echo base_url(); ?>assets/js/vendor-all.min.js"></script>
    
<script type="text/javascript">
    $("#kirim").click(function(e) {
        e.preventDefault();
        $.ajax({
            type: "POST",
            url: "<?php echo base_url(); ?>/pengajuan/tambah_pengajuan",
            data: { 
                kode: $("#kode").val(),
                id_opd: $("#id_opd").val(), 
                tanggal_pengajuan: $("#tanggal_pengajuan").val(), 
            },
            success: function(result) {
                var response = JSON.parse(result);
                if(response.success == 1) {
                    swal({
                      title: 'Berhasil!',
                      text: 'Pengajuan Berhasil Dikirim!',
                      icon: 'success'
                    }).then(function() {
                        window.location.href = "<?php echo base_url(); ?>/pengajuan/";
                    });
                } else {
                    swal("Gagal!", "Pengajuan Gagal Dikirim, Silahkan Coba Lagi!", "error");
                }
            },
            error: function(result) {
                swal("Gagal!", "Pengajuan Gagal Dikirim, Silahkan Coba Lagi!", "error");
            }
        });
    });

    var tabel = 2;

    $("#tambah").click(function(e) {
        e.preventDefault();

        var strMenimbang;
        strMenimbang = '<div class="col-md-3"> <div class="form-group"> <label for="exampleInputEmail1">Unsur Utama</label> <input type="text" name="unser'+tabel+'" class="form-control" id="exampleInputEmail1" value="" aria-describedby="emailHelp" placeholder="Unsur Utama"> </div></div><div class="col-md-3"> <div class="form-group"> <label for="exampleInputEmail1">Data Awal Operasi</label> <input type="text" name="data'+tabel+'" class="form-control" id="exampleInputEmail1" value="" aria-describedby="emailHelp" placeholder="Data Awal Operasi"> </div></div><div class="col-md-3"> <div class="form-group"> <label for="exampleInputEmail1">Instruksi/Permintaan</label> <input type="text" name="instruksi'+tabel+'" class="form-control" id="exampleInputEmail1" value="" aria-describedby="emailHelp" placeholder="Masalah Pokok"> </div></div><div class="col-md-3"> <div class="form-group"> <label for="exampleInputEmail1">Keterangan</label> <input type="text" name="keterangan'+tabel+'" class="form-control" id="exampleInputEmail1" value="" aria-describedby="emailHelp" placeholder="Masalah Pokok"> </div></div>';
        $("#tabel").append(strMenimbang);

        tabel += 1;

    });

</script>
    