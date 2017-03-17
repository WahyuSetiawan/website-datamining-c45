
<?php
/* include './head.php';
  include './koneksi.php';
  include './Variable.php';

  if (isset($_POST['submit'])) {
  $bool = mysql_query("INSERT INTO `data_anggota` ("
  . "`no_pembiayaan`, "
  . "`nama_anggota`, "
  . "Jaminan,"
  . "`Jenis_Pembiayaan`, "
  . "`Pekerjaan`, "
  . "`Jumlah_Tanggungan`, "
  . "Keperluan_Pembiayaan, "
  . "`Jumlah_Pembiayaan`, "
  . "`Jangka_Waktu`, "
  . "`Total_Penghasilan`,"
  . "Karakter,"
  . "Kelayakan "
  . ") "
  . "VALUES"
  . " ("
  . "'" . $_POST['no'] . "', "
  . "'" . $_POST['nama'] . "', "
  . "'" . $_POST['Jaminan'] . "', "
  . "'" . $_POST['Jenis_Pembiayaan'] . "', "
  . "'" . $_POST['Pekerjaan'] . "', "
  . "'" . $_POST['Jumlah_Tanggungan'] . "', "
  . "'" . $_POST['Keperluan_Pembiayaan'] . "', "
  . "'" . $_POST['Jumlah_Pembiayaan'] . "', "
  . "'" . $_POST['Jangka_Waktu'] . "', "
  . "'" . $_POST['Total_Penghasilan'] . "', "
  . "'" . $_POST['Karakter'] . "', "
  . "'" . $_POST['kelayakan'] . "');
  ") or exit(mysql_error());
  }

  if (isset($_POST['submitUbah'])) {
  $query = "UPDATE `data_anggota` SET "
  . "`no_pembiayaan`='" . $_POST["no"] . "', "
  . "`nama_anggota`='" . $_POST["nama"] . "', ";

  $keys = array_keys($variable);

  foreach ($keys as $value) {
  $query .= "`" . $value . "`='" . $_POST[$value] . "', ";
  }

  $query .= "`kelayakan`='" . $_POST['kelayakan'] . "' "
  . "WHERE  `id`=" . $_POST['id'] . ";";
  mysql_query($query) or exit(mysql_error());
  } */
?>
<div class="selficon">
    <h3><strong> Data Nasabah</strong></h3>
    <h2>Data Keseluruhan Nasabah</h2>
</div>

<hr>

<div class="row placeholder">
    <p>
        <button type="button" data-toggle="modal" data-target="#ModalInputData" class="btn btn-primary">
            Input Data Nasabah
        </button>
    </p>

    <div class="row">
        <div class="col-md-2 col-md-offset-10">
            <button class="btn-lg btn-danger" onclick="del('proses_delete_all.php')">Delete All</button>
        </div>
    </div>
    <div class="row">
        <hr>
        <table id="table_anggota">
            <thead>
                <tr>
                    <th id="dataHeaderTable">No.</th>
                    <th>Kelayakan</th>
                    <th>Action</th>
                </tr>
            </thead>

        </table>
    </div>

    <div id="ModalInputData" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="Input Data Pelanggan">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <div class="modal-title"><h4>Input Data Pelanggan</h4></div>
                </div>
                <div class="modal-body">
                    <form name="formDataNasabah" id="formDataNasabah" class="form-horizontal" style="font-size: small" action="tampil_data_nasabah_daftar.php?page=daftar" enctype="multipart/form-data" method="POST">
                        <input type="hidden" name="id" id="tampildatatambahan">

                        <div class="form-group">
                            <label class="control-label col-sm-3" style="text-align: left">Kelayakan</label>
                            <div class="col-sm-9">
                                <select class="form-control" name="kelayakan">
                                    <option>Ya</option>
                                    <option>Tidak</option>
                                </select>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
                    <button type="button" class="btn btn-info">Bersihkan</button>
                    <button type="button" id="submitAnggota" class="btn btn-success">Simpan Data</button>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    var $_GET = <?php echo json_encode($_GET); ?>;
    var urlproses = window.location.href.substr(0, window.location.href.length - $_GET['page'].length) + 'modules/proses.php';
    var dataVariable = {};
    var dataDeskripsi = {};

    function del(url) {
        if (confirm("Apakah ingin manghapus data ini ?")) {
            window.location.href = url;
        }
    }

    $('#submitAnggota').click(function () {
        $.ajax({
            type: 'post',
            url: urlproses,
            data: {param: 'simpanDataAnggota', data: $('#formDataNasabah').serialize()},
            dataType: 'json',
            success: function (result) {
                console.log(result);
            }, complete: function (jqXHR, textStatus) {
                console.log("ajax penyimapan data anggota " + textStatus);
            }
        });
    });

    $(document).ready(function () {
        $.ajax({
            type: 'post',
            url: urlproses,
            data: {param: 'getDataVariable'},
            dataType: 'json',
            success: function (result) {
                dataVariable = result;

                var keys = Object.keys(dataVariable);

                keys.forEach(function (item, index) {
                    membuatForm(dataVariable[item].id, dataVariable[item].nama, dataVariable[item]['value']);
                    membuatHeaderTable(dataVariable[item].nama);
                });
            },
            complete: function (jqXHR, textStatus) {
                console.log("ajax get data variable " + textStatus);
                $.ajax({
                    type: 'post',
                    url: urlproses,
                    data: {param: 'getDataDeskripsi'},
                    dataType: 'json',
                    success: function (data, textStatus, jqXHR) {
                        dataDeskripsi = data;

                        var keys = Object.keys(dataDeskripsi);

                        keys.forEach(function (item, index) {
                            membuatFormDeskripsi(dataDeskripsi[item].id, dataDeskripsi[item].nama);
                            membuatHeaderTable(dataDeskripsi[item].nama);
                        });
                    },
                    complete: function (jqXHR, textStatus) {
                        console.log("ajax get data deskripsi " + textStatus);

                        $.ajax({
                            type: 'post',
                            url: urlproses,
                            data: {param: 'getDataAnggota'},
                            dataType: 'json',
                            success: function (result) {
                                console.log(result);
                                $('#table_anggota').DataTable({
                                    "data": result,
                                    "scrollX": true,
                                    "columnDefs": [{
                                            "targets": -1,
                                            "data": result,
                                            "defaultContent": '<button name="delete" class="btn btn-danger btn-sm">Delete</button>' +
                                                    '<button name = "edit" class="btn btn-warning btn-sm">Edit</button>'
                                        }]
                                });

                            },
                            complete: function (jqXHR, textStatus) {
                                console.log("ajax get data Anggota " + textStatus);
                            }
                        });
                    }
                });

                $('#table_anggota').on('click', 'button.btn-danger', function () {
                    console.log($(this));

                    /*ar data = table.row( $(this)['context'] ).data();
                     console.log(data);*/
                });
            }
        });
    });

    function membuatHeaderTable(nama) {
        var header = document.createElement("th");
        header.innerHTML = nama.replace("_", " ");

        $('#dataHeaderTable').after(header);
        $('#dataHeaderTablefoot').after(header);
    }

    function membuatFormDeskripsi(id, nama) {
        var div = document.createElement('div');
        div.className += "form-group";

        var label = document.createElement('label');
        label.className += "control-label col-sm-3";
        label.innerHTML = nama;
        label.style.textAlign = 'left';

        var divcontent = document.createElement('div');
        divcontent.className += "col-sm-9";

        var text = document.createElement('input');
        text.className += "form-control";
        text.setAttribute("name", "deskripsi[" + id + "]");
        text.setAttribute("type", "text");

        divcontent.appendChild(text);

        div.appendChild(label);
        div.appendChild(divcontent);

        $('#tampildatatambahan').before(div);
    }

    function membuatForm(id, nama, value) {
        var div = document.createElement('div');
        div.className += "form-group";

        var label = document.createElement('label');
        label.className += "control-label col-sm-3";
        label.innerHTML = nama.replace('_', ' ');
        label.style.textAlign = 'left';

        var divcontent = document.createElement('div');
        divcontent.className += "col-sm-9";

        var select = document.createElement('select');
        select.className += "form-control";
        select.setAttribute("name", "data[" + id + "]");

        var keysvalue = Object.keys(value);

        keysvalue.forEach(function (index, item) {
            var optionselect = document.createElement('option');
            optionselect.value = value[index].id;
            optionselect.innerHTML = value[index].nilai_variable;

            select.appendChild(optionselect);
        });

        divcontent.appendChild(select);

        div.appendChild(label);
        div.appendChild(divcontent);

        $('#tampildatatambahan').after(div);
    }

</script>
