<!-- CONTENT HEADER -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Data Pengembalian</h1>
            </div>
            
            <div class="col-sm-8">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Transaksi</a></li>
                    <li class="breadcrumb-item active">Data Pengembalian</li>
                </ol>
            </div>
        </div>
    </div>
</div>

<!-- ISI KONTEN -->
<div class="container text-center">
    <div class="row justify-content-start">
        <div class="col">
        <div class="container p-5">
        <div class="card bg-info bg-gradient border border-dark">
            <div class="card-header">
                Pengembalian
            </div>
            <div class="card-body">
            <input type="search" name="" placeholder="Cari..." class="form-control light-table-filter mt-3" data-table="table-hover">
            <table class="table align-middle table-hover table-primary table-striped mt-4">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Cover</th>
                            <th scope="col">Title</th>
                            <th scope="col">NIS</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Tanggal Peminjaman</th>
                            <th scope="col">Status</th>
                            <th scope="col">Kondisi</th>
                            <th scope="col">Denda</th>
                            <th scope="col">Action</th>

                        </tr>
                    </thead>
                    <?php
                    $hasil = read_detailloan();
                    $urut = 1;

                    while ($r2 = mysqli_fetch_assoc($hasil)) {

                        $id = $r2['id_loan'];
                        $id_dtl = $r2['id_detail_loan'];

                    ?>
                        <tr>
                            <th scope="row"><?php echo $urut++ ?></th>
                            <td scope="row">
                                <img src="../asset/images/cover/<?= $r2['cover'] ?>" class="img-thumbnail" alt="" style="width: 100px;">
                            </td>
                            <td scope="row"><?php echo $r2['title'] ?></td>
                            <td scope="row"><?php echo $r2['nis'] ?></td>
                            <td scope="row"><?php echo $r2['nama'] ?></td>
                            <td scope="row"><?php echo $r2['date_loan'] ?></td>
                            <td scope="row"><?php
                                            $loan_date = date("Y-m-d");
                                            if ($loan_date > $r2['date_retrun']) {
                                                echo '<button class="btn btn-danger" disabled><i class="fa-solid fa-circle-xmark"></i> Telat</button>';
                                            } else {
                                                echo '<button class="btn btn-primary" disabled><i class="fa-solid fa-circle-check"></i> Tepat</button>';
                                            }


                                            ?></td>
                            <td scope="row">

                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                    <label class="form-check-label" for="flexCheckDefault">
                                       Ada
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
                                    <label class="form-check-label" for="flexCheckChecked">
                                        Hilang
                                    </label>
                                </div>
                            </td>
                            <td scope="row">
                                <?php
                                if ($loan_date > $r2['date_retrun']) {
                                    $a = $r2['date_retrun'];
                                    $t = date_create($r2['date_retrun']);
                                    $n = date_create(date('Y-m-d'));
                                    $terlambat = date_diff($t, $n);
                                    $hari = $terlambat->format("%a");

                                    $denda = $hari * 1000;
                                    echo $denda;
                                } else {
                                    echo $denda = 0;
                                }

                                ?></td>
                            <td scope="row">
                                <a href="home.php?page=data-pengembalian&op=retrun&id=<?php echo $id ?>&id2=<?php echo $id_dtl ?>"><button type="button" class="btn btn-success">Kembalikan</button></a>
                                <!-- <a href="index.php?op=delete&id=<?php echo $id ?>" onclick="return confirm('Yakin mau delete data?')"><button type="button" class="btn btn-danger">Delete</button></a> -->
                            </td>
                        </tr>
                    <?php
                    }
                    ?>

                </table>

            </div>
        </div>


        </div>
    </div>
</div>  