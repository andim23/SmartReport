<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>LAPORAN LAUNDRY DAN LISTRIK</title>

    <!-- Bootstrap CSS File  -->
    <link rel="stylesheet" type="text/css" href="bootstrap-3.3.5-dist/css/bootstrap.css"/>
</head>
<body>

<!-- Content Section -->
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>LAPORAN LAUNDRY DAN LISTRIK SAMANTA</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="pull-right">
                <button class="btn btn-success" data-toggle="modal" data-target="#add_new_record_modal">Tambah Data Penghuni</button>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <h3>Data Penghuni:</h3>

            <div class="records_content"></div>
        </div>
    </div>
</div>
<!-- /Content Section -->


<!-- Bootstrap Modals -->
<!-- Modal - Add New Record/User -->
<div class="modal fade" id="add_new_record_modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Tambah Data Penghuni</h4>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <label for="nama">NAMA</label>
                    <input type="text" id="nama" placeholder="NAMA" class="form-control"/>
                </div>

                <div class="form-group">
                    <label for="no_kamar">NOMOR KAMAR</label>
                    <input type="text" id="no_kamar" placeholder="NOMOR KAMAR" class="form-control"/>
                </div>

                <div class="form-group">
                    <label for="sisa_laundry">QUOTA LAUNDRY</label>
                    <input type="text" id="sisa_laundry" placeholder="QUOTA LAUNDRY" class="form-control"/>
                </div>

                <div class="form-group">
                    <label for="sisa_listrik">QUOTA LISTRIK</label>
                    <input type="text" id="sisa_listrik" placeholder="QUOTA LISTRIK" class="form-control"/>
                </div>

                <div class="form-group">
                    <label for="charge">CHARGE</label>
                    <input type="text" id="charge" placeholder="CHARGE" class="form-control" disabled/>
                </div>


            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
                <button type="button" class="btn btn-primary" onclick="addRecord()">Tambah</button>
            </div>
        </div>
    </div>
</div>
<!-- // Modal -->

<!-- Modal - Update User details -->
<div class="modal fade" id="update_user_modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Update</h4>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <label for="update_nama">NAMA</label>
                    <input type="text" id="update_nama" placeholder="NAMA" class="form-control"/>
                </div>

                <div class="form-group">
                    <label for="update_no_kamar">NOMOR KAMAR</label>
                    <input type="text" id="update_no_kamar" placeholder="NOMOR KAMAR" class="form-control"/>
                </div>

                <div class="form-group">
                    <label for="update_laundry">LAUNDRY</label>
                    <input type="text" id="update_laundry" placeholder="LAUNDRY" class="form-control"/>
                </div>

                <div class="form-group">
                    <label for="update_sisa_laundry">SISA LAUNDRY</label>
                    <input type="text" id="update_sisa_laundry" placeholder="SISA LAUNDRY" class="form-control"/>
                </div>

                <div class="form-group">
                    <label for="update_total_laundry">TOTAL LAUNDRY</label>
                    <input type="text" id="update_total_laundry" placeholder="TOTAL LAUNDRY" class="form-control" disabled/>
                </div>

                <div class="form-group">
                    <label for="update_listrik">LISTRIK</label>
                    <input type="text" id="update_listrik" placeholder="LISTRIK" class="form-control"/>
                </div>

                <div class="form-group">
                    <label for="update_sisa_listrik">SISA LISTRIK</label>
                    <input type="text" id="update_sisa_listrik" placeholder="SISA LISTRIK" class="form-control"/>
                </div>

                <div class="form-group">
                    <label for="update_total_listrik">TOTAL LISTRIK</label>
                    <input type="text" id="update_total_listrik" placeholder="TOTAL LISTRIK" class="form-control" disabled/>
                </div>

                <div class="form-group">
                    <label for="update_charge">CHARGE</label>
                    <input type="text" id="update_charge" placeholder="CHARGE" class="form-control" disabled/>
                </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
                <button type="button" class="btn btn-primary" onclick="UpdateUserDetails()" >Simpan</button>
                <input type="hidden" id="hidden_user_id">
            </div>
        </div>
    </div>
</div>
<!-- // Modal -->

<!-- Jquery JS file -->
<script type="text/javascript" src="js/jquery-1.11.3.min.js"></script>

<!-- Bootstrap JS file -->
<script type="text/javascript" src="bootstrap-3.3.5-dist/js/bootstrap.min.js"></script>

<!-- Custom JS file -->
<script type="text/javascript" src="js/script.js"></script>

<script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
            (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

    ga('create', 'UA-75591362-1', 'auto');
    ga('send', 'pageview');

</script>
</body>
</html>
