{{-- <?php

include '../config.php';

session_start();
if (!$_SESSION['nip']) {
    header('Location:../index.php?session=expired');
}

$nis = '';
if (isset($_GET['op'])) {
    $op = $_GET['op'];
} else {
    $op = '';
}

if ($op == 'loan') {
    loan($_GET);
    tmp($_GET);
}
if (isset($_POST['simpan'])) {
    insert_loan($_POST);
}

if ($op == 'delete') {
    delete_tmp($_GET);
}

if ($op == 'retrun') {
    insert_retrun($_GET);
}

if ($sukses) {
    header('refresh:1;url=home.php?page=data-peminjaman');
}

if ($sukses2) {
    header('refresh:2;url=home.php?page=data-pengembalian');
}

$officer = $_SESSION['nip'];

?> --}}
<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">
    <title>Perpustakaan</title>
    <link rel="stylesheet" href="asset/style.css">
    <link rel="stylesheet" href="asset/style2.css">
    <link rel="stylesheet" href="asset/404.css">
    <!-- Boxiocns CDN Link -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <!-- icon title -->
    <link rel="icon" type="image/png" href="../asset/images/icons/library.png" />
    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- ICON FONT AWESOME -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">
    <script src="search.js"></script>
</head>

<body>
   
    @include('includes.sidebar')

    <!-- ISI KONTEN -->
    <section class="home-section">
        <div class="home-content">
            <i class='bx bx-menu'></i>
        </div>

        @yield('content')


        </div>
        </div>
        </div>
    </section>




    <script src="asset/script.js"></script>
    <!-- Script bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous">
    </script>
    <!-- Script SweetAlert 2 -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10.10.1/dist/sweetalert2.all.min.js"></script>
    <script src="search.js"></script>
    <script>
        function hapus_data(data_id) {
            // alert('OK')
            // window.location=("hapus_data.php?nis="+data_id);
            Swal.fire({
                title: 'Apa kamu yakin ?',
                text: "Kamu tidak bisa mengembalikan lagi ya !",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: 'red',
                cancelButtonColor: 'blue',
                confirmButtonText: 'Ya, hapus'
            }).then((result) => {
                if (result.isConfirmed) {
                    window.location = ("datasiswa/hapus_data.php?nis=" + data_id);
                }
            })
        }
    </script>

    <!-- REFRESH -->


</body>

</html>
