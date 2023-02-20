<?php include "layout/header.php"; ?>
        <div class="container">
        <div class="panel panel-default" style="margin-top: 100px">
            <div class="row" style="padding-bottom: 30px; padding-left: 10px; ">
                <div class="col-md-8">
                        <h2>Jurnal Umum</h2>
                </div>
            </div>
            
            <table class = "table table-bordered table-striped">
                <tr>
                <td>Tanggal</td>
                <td>Jurnal</td>
                <td>Akun Debit</td>
                <td>Total</td>
                <td>Akun Kredit</td>
                <td>Total</td>
                </tr>
                <?php
                require ('koneksi.php');
                $sql = mysqli_query($koneksi, "SELECT * FROM jurnalumum ORDER BY tgl_pembelian ASC") or die(mysqli_error());
            
                while ($data = mysqli_fetch_array($sql)){
                    echo "
                        <tr>
                        <td>$data[tgl_pembelian]</td>
                        <td>$data[jurnal]</td>
                        <td>$data[akun_debit]</td>
                        <td>$data[total_debit]</td>
                        <td>$data[akun_kredit]</td>
                        <td>$data[total_kredit]</td>
                        </tr>";
                        };
                        ?>
                </table>
            </div>
        </div>
<?php include "layout/footer.php"; ?>