<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HOME</title>

    <!-- Bootstrap Styles-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@1,900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/dataTables.bootstrap4.min.css">
    <link href="<?= base_url() ?>assets/style.css" rel="stylesheet" />
</head>

<body style="background-image: url(<?= base_url() ?>assets/images/service-bg.png); background-color:#6144b9; background-size: 100%;background-repeat:no-repeat;height:100vh;">

    </br>
    <div class="table-responsive container">
        <h2 style="text-align:center; color:#ffffff">Welcome To Youth Preneur Admin Page</h2>
        </br>

        <div class="panel-body">
            <div class="row" style="margin-top: 180px;">


                <div class="container">

                    <!-- <div class="row mt-3">
                        <div class="col-md-6">
                            <form action="" method="post">
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Cari data mahasiswa" name="keyword">
                                    <div class="input-group-append">
                                        <button class="btn btn-primary" type="submit">Cari</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div> -->

                    <div class="row mt-3">
                        <div class="col-md-6">
                            <h3>Daftar Mahasiswa </h3>

                            <table id="data-example" class="table table table-hover" style="width:100%">
                                <thead>
                                    <tr>
                                        <th scope="col" width="25px">No</th>
                                        <th scope="col">Nama</th>
                                        <th scope="col" width="65px">Email</th>
                                        <th scope="col">No telepon</th>
                                        <th scope="col">Gender</th>
                                        <th scope="col">Instansi</th>
                                        <th scope="col" width="130px">Timestamp</th>
                                        <td scope="col" width="50px" style="font-size: 22px;"><i class="fa fa-tools"></i></td>
                                    </tr>
                                </thead>
                                <?php $no = 1; ?>
                                <?php foreach ($sm as $db) : ?>
                                    <tbody>
                                        <tr>
                                            <td><?= $no++; ?></td>
                                            <td><?= $db['name']; ?></td>
                                            <td><?= $db['email']; ?></td>
                                            <td><?= $db['notelp']; ?></td>
                                            <td><?= $db['gender']; ?></td>
                                            <td><?= $db['instansi']; ?></td>
                                            <td><?= $db['timestamp']; ?></td>
                                            <td>
                                                <a href="<?= base_url(); ?>admin/ubah/<?= $db['id']; ?>" class="badge badge-success float-center">ubah</a>
                                                <a href="<?= base_url(); ?>admin/hapus/<?= $db['id']; ?>" class="badge badge-danger float-center" onclick="return confirm ('yakin?');">hapus</a>
                                            </td>
                                        </tr>
                                    </tbody>
                                <?php endforeach ?>
                            </table>

                        </div>
                    </div>

                </div>


            </div>
        </div>

    </div>




    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.3/js/dataTables.bootstrap4.min.js"></script>
    <script>
        AOS.init();

        $(document).ready(function() {
            $('#example').DataTable();
        });
    </script>
</body>

</html>