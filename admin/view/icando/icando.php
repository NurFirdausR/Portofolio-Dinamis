<div class="row d-flex justify-content-end">
    <div class="pr-5">
        <h6 class="h2 text-white d-inline-block mb-0">Default</h6>
        <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
            <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                <li class="breadcrumb-item"><a href="#"><i class="ni ni-chart-bar-32"></i></a></li>
                <li class="breadcrumb-item"><a href="#">Skill</a></li>
            </ol>
        </nav>
    </div>
</div>

<div>
    <div class="row">
        <div class="col-xl-12">
            <div class="card">
                <div class="card-header border-0">
                    <div class="row align-items-center">
                        <div class="col">
                            <h3 class="mb-0">Project</h3>
                        </div>
                        <div class="col text-right">
                            <a href="index.php?halaman=icando_tambah" class="btn btn-sm btn-primary">Add Service</a>
                        </div>
                    </div>
                </div>
                <div class="table-responsive">
                    <!-- Projects table -->
                    <table class="table align-items-center table-flush">
                        <thead class="thead-light">
                            <tr class="text-center">
                                <th scope="col">Gambar Service</th>
                                <th scope="col">Nama Service</th>
                                <th scope="col">Skill Service</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                   
                        <tbody>
                        <?php include_once "../../../connect.php"; ?>
                            <?php $query = mysqli_query($conn, "SELECT * FROM icando") ?>
                            <?php foreach ($query as $rows) : ?>
                                <tr class="text-center">
                                    <th scope="row">
                                        <img src="../imgservice/<?= $rows['gambar_service'] ?>" style="width: 120px; height: 100px;" alt="" srcset="">
                                    </th>
                                    <td >
                                        <?= $rows['nama_service'] ?>
                                    </td>
                                    <td>
                                    <textarea name="" disabled id="" cols="30" rows="5"><?= $rows['skill_service'] ?></textarea>
                                </td>
                                    <td>
                                        <a href="index.php?halaman=icando_edit&id=<?= $rows['id']?>" class="btn btn-warning">Edit</a>
                                        <a href="function/icando/hapus_icando.php?id=<?=$rows['id']?>" class="btn btn-danger">Delete</a>
                                    </td>
                                </tr>
                            <?php endforeach ?>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>
</div>