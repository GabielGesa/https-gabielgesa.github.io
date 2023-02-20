<?php include "layout/header.php"; ?>
        <div class="panel panel-default" style="padding-top: 100px">
            <div class="container">
            <div class="panel-heading">
                <h2>Jurnal Penjualan</h2>
            </div>
            <div class="panel-body">
            <div class="row align-items-start">
                <div class="col-md-6">
                    <div class="form-group">
                    <form action="proses.php" method="POST" accept-charset="utf-8">
                        <label for="dtp_input2" class="control-label">Tanggal Penerimaan</label>
                        <div class="input-group date form_date" data-date="" data-date-format="dd MM yyyy" data-link-field="dtp_input2" data-link-format="yyyy-mm-dd">
                            <input class="form-control" name="tanggal" type="text" value="" readonly>
                            <span class="input-group-addon"><span class="glyphicon glyphicon-remove"></span></span>
                            <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
                        </div>
                        <input type="hidden" id="dtp_input2" value="" /><br/>
                    </div>
                    <div class="form-group">
                    <label for="nbr">No akun </label>
                    <input type="number" name="nomor" class="form-control" id="nbr">
                    </div>
                    <div class="form-group">
                    <label for="usr">Nama Akun</label>
                    <input type="text" name="akun_user" class="form-control" id="usr">
                    </div>
                    <div class="form-group">
                    <label for="number_saldo">Saldo </label>
                    <input type="number" name="saldo" class="form-control" id="number_saldo">
                    </div>
                    <div class="form-group">
                    <label for="jenis_debt">Jenis </label>
                            <select name="jenis_debt" class="form-control" id="sel1">
                            <option></option>
                            <option>Debit</option>
                            <option>Kredit</option>
                        </select>
                    </div>
                    <br>
                    <input type="submit" name="tambah_penerimaan" value="Tambah Data" class="btn btn-success">
                    <input style="margin-left: 10px" type="reset" value="Reset" class="btn btn-warning">
                    </form>
            </div>
                <div class="col-md-6"> 
                    <table class = "table table-bordered table-striped">
                    <tr>
                    <td>Tanggal</td>
                    <td>No Akun</td>
                    <td>Nama Akun</td>
                    <td>Saldo</td>
                    <td>Jenis</td>
                    </tr>
                    <?php
                    $sql = mysqli_query($koneksi, "SELECT * FROM jurnal_penjualan ORDER BY tgl_penjualan ASC") or die(mysqli_error());
                
                    while ($data = mysqli_fetch_array($sql)){
                        echo "
                                <tr>
                                <td>$data[tgl_penjualan]</td>
                                <td>$data[no_akun]</td>
                                <td>$data[nama_akun]</td>
                                <td>$data[saldo]</td>
                                <td>$data[jenis]</td>
                                </tr>";
                                };
                                ?>
                                </table>
                </div>         
        </div>
<?php include "layout/footer.php"; ?>