<!-- CONTENT HEADER -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Data Peminjaman</h1>
            </div>
            
            <div class="col-sm-8">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Transaksi</a></li>
                    <li class="breadcrumb-item active">Data Peminjaman</li>
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
                <div class="card text-white bg-secondary bg-gradient border border-dark">
                    <div class="card-header">
                        Detail Peminjaman
                    </div>
           
                    <form action="" method="post">
                        <div class="mb-2 row justify-content-start p-3">
                            <label class="col form-label">ID</label>
                                <div class="col-sm-3">
                                    <input type="text" class="form-control" name="id" value="<?php echo $randomNumber ?>" disabled>
                                </div>

                            <label class="col form-label">ID Buku</label>
                                <div class="col-sm-3">
                                    <table>
                                        <thead>
                                            <tr>
                                                <th>....</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                                $tmp = read_tmp("temporari");
                                                while ($r = mysqli_fetch_array($tmp)) {
                                            ?>
                                            <tr>
                                                <td><input type="checkbox" required name="book[]" value="<?php echo $r['id_book'] ?>"></td>
                                                <td><?php echo $r['id_book'] ?></td>
                                            </tr>
                                                
                                            <?php
                                                }
                                            ?>
                                        </tbody>
                                    </table>
                                </div>

                    <label class="col form-label">Petugas</label>
                    <div class="col-sm-3">
                        <input type="text" class="form-control" name="officer" value="<?= $officer ?>" readonly>
                        
                    </div>
                </div>
                <div class="mb-2 row p-3">
                    <label class="col form-label">NIS</label>
                    <div class="col-sm-3">
                        <input type="text" class="form-control" required placeholder="NIS" name="nis" list="student">
                        <datalist name="nis" id="student">
                            <?php
                            $sql = "SELECT * FROM student";
                            $q = mysqli_query($db, $sql);

                            while ($data = mysqli_fetch_array($q)) {
                                echo "<option value= $data[nis]>$data[nama]</option>";
                            }

                            ?>

                        </datalist>
                    </div>

                    <label class="col form-label">Loan Date</label>
                    <div class="col-sm-3">
                        <input type="date" class="form-control" name="loan_date" value="">
                    </div>
                    <label class="col form-label">Return Date</label>
                    <div class="col-sm-3">
                        <input type="date" class="form-control" name="retrun_date" value="">
                    </div>
                </div>
                
                <div class="row align-items-end">
                    <div class="col">
                        <button type="submit" name="simpan" value="Simpan Data" class="btn btn-warning btn-rounded">Simpan</button>
                    </div>
                </div>
            </form>

            <div class="card-body text-white mt-2">
                <table class="table align-middle text-white table-striped table-hover">
                    <thead>
                        <tr>

                            <th scope="col">No</th>
                            <th scope="col">Cover</th>
                            <th scope="col">Author</th>
                            <th scope="col">Title</th>
                            <th scope="col">Publiser</th>
                            <th scope="col">Aksi</th>

                        </tr>
                    </thead>
                    <?php
                    $tmp = read_tmp("temporari");
                    $urut = 1;

                    while ($r3 = mysqli_fetch_assoc($tmp)) {
                        $id = $r3['id_tmp']
                    ?>
                        <tr>
                            <th class="text-white" scope="row"><?php echo $urut++ ?></th>
                            <td scope="row">
                                <img src="../asset/images/cover/<?= $r3['cover'] ?>" class="img-thumbnail" alt="" style="width: 100px;">
                            </td>
                            <td class="text-white" scope="row"><?php echo $r3['author'] ?></td>
                            <td class="text-white" scope="row"><?php echo $r3['title'] ?></td>
                            <td class="text-white" scope="row"><?php echo $r3['publiser'] ?></td>
                            <td class="text-white" scope="row">
                                <a href="home.php?page=data-peminjaman&op=delete&id=<?php echo $id ?>"><button type="button" class="btn btn-danger">Delete</button></a>
                                <!-- <a href="index.php?op=delete&id=<?php echo $id ?>" onclick="return confirm('Yakin mau delete data?')"><button type="button" class="btn btn-danger">Delete</button></a> -->
                            </td>
                        </tr>
                    <?php
                    }
                    ?>
                </table>


            </div>
        </div>

        <!-- PEMINJAMAN -->
        <div class="container mt-5 p-1">
            <div class="card text-white bg-info bg-gradient border border-info">
                <div class="card-header">
                    Peminjaman
                </div>
                <div class="card-body">
                    <input type="search" name="" placeholder="Cari..." class="form-control light-table-filter mt-3" data-table="table-hover">

                    <table class="table align-middle table-striped table-primary table-hover mt-4">
                        <thead class="table-info">
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Cover</th>
                                <th scope="col">Author</th>
                                <th scope="col">Year</th>
                                <th scope="col">Title</th>
                                <th scope="col">City</th>
                                <th scope="col">Publiser</th>
                                <th scope="col">Synopsis</th>
                                <th scope="col">Stock</th>
                                <th scope="col">Transaksi</th>
                            </tr>
                        </thead>
                        <?php
                            $hasil = read('book');
                            $urut = 1;

                            while ($r2 = mysqli_fetch_assoc($hasil)) {

                                $id_book = $r2['id_book'];

                        ?>
                            <tr>
                                <th scope="row"><?php echo $urut++ ?></th>
                                <td scope="row">
                                    <img src="../asset/images/cover/<?= $r2['cover'] ?>" class="img-thumbnail" alt="" style="width: 100px;">
                                </td>
                                <td scope="row"><?php echo $r2['author'] ?></td>
                                <td scope="row"><?php echo $r2['year'] ?></td>
                                <td scope="row"><?php echo $r2['title'] ?></td>
                                <td scope="row"><?php echo $r2['city'] ?></td>
                                <td scope="row"><?php echo $r2['publiser'] ?></td>
                                <td scope="row"><?php echo $r2['sinopsis'] ?></td>
                                <td scope="row"><?php echo $r2['stock'] ?></td>
                                <td scope="row">
                                    <a href="home.php?page=data-peminjaman&op=loan&id=<?php echo $id_book ?>"><button type="button" class="btn btn-primary">Pinjam</button></a>
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