<?php include "layout/header.php"; ?>
        <div class="container">
        <div class="panel" style="padding-top: 100px">
            <h2 style="text-align: center; padding-bottom: 20px;">KAS Data</h2>
            <div class="container text-center">
            <div class="row align-items-start">
            <div class="col">
                <table class = "table table-bordered table-striped">
                <tr>
                <td>Tanggal</td>
                <td>Jurnal</td>
                <td>Nama Akun</td>
                <td>Debit</td>
                </tr>
                <?php
                require ('koneksi.php');
                $sql = mysqli_query($koneksi, "SELECT * FROM jurnalumum WHERE akun_kredit = 'KAS' ORDER BY tgl_pembelian ASC") or die(mysqli_error());
                $sql2 = mysqli_query($koneksi, "SELECT * FROM jurnalumum WHERE akun_debit = 'KAS' ORDER BY tgl_pembelian ASC") or die(mysqli_error());
            
                while ($data = mysqli_fetch_array($sql)){
                    echo "
                            <tr>
                            <td>$data[tgl_pembelian]</td>
                            <td>$data[jurnal]</td>
                            <td>$data[akun_debit]</td>
                            <td>$data[total_debit]</td>
                            </tr>";
                                };
                            ?> 
                    </table>
            </div>
            <div class="col">
                <table class = "table table-bordered table-striped">
                <tr>
                <td>Tanggal</td>
                <td>Jurnal</td>
                <td>Nama Akun</td>
                <td>Kredit</td>
                </tr>
                <?php
                require ('koneksi.php');
                $sql = mysqli_query($koneksi, "SELECT * FROM jurnalumum WHERE akun_kredit = 'KAS' ORDER BY tgl_pembelian ASC") or die(mysqli_error());
                $sql2 = mysqli_query($koneksi, "SELECT * FROM jurnalumum WHERE akun_debit = 'KAS' ORDER BY tgl_pembelian ASC") or die(mysqli_error());
            
                while ($data = mysqli_fetch_array($sql2)){
                    echo "
                            <tr>
                            <td>$data[tgl_pembelian]</td>
                            <td>$data[jurnal]</td>
                            <td>$data[akun_kredit]</td>
                            <td>$data[total_kredit]</td>
                            </tr>";
                                };
                            ?> 
                    </table>
            </div>
            
            
            </div>
        </div>
<?php include "layout/footer.php"; ?>