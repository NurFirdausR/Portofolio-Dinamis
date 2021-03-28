<div class="row d-flex justify-content-end">
    <div class="pr-5">
        <h6 class="h2 text-white d-inline-block mb-0">Default</h6>
        <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
            <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                <li class="breadcrumb-item"><a href="#"><i class="ni ni-collection"></i></a></li>
                <li class="breadcrumb-item"><a href="#">Project</a></li>
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
                            <a href="index.php?halaman=project_tambah" class="btn btn-sm btn-primary">Add Project</a>
                        </div>
                    </div>
                </div>
                <div class="table-responsive">
                    <!-- Projects table -->
                    <table class="table align-items-center table-flush">
                        <thead class="thead-light">
                            <tr class="text-center">
                                <th scope="col">Gambar Project</th>
                                <th scope="col">Judul Project</th>
                                <th scope="col" style="width: 100%;">Deskripsi Project</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                   
                        <tbody>
                            <?php include_once "../../../connect.php"; ?>
                            <?php $query = mysqli_query($conn, "SELECT * FROM project") ?>
                            <?php foreach ($query as $rows) : ?>
                                <tr class="text-center">
                                    <th scope="row">
                                        <img src="../imgproject/<?= $rows['gambar_project'] ?>" style="width: 120px; height: 100px;" alt="" srcset="">
                                    </th>
                                    <td >
                                        <?= $rows['judul_project'] ?>
                                    </td>
                                    <td>
                                    <textarea name="" disabled id="" cols="30" rows="5"><?= $rows['deskripsi_project'] ?></textarea>
                                </td>
                                    <td>
                                        <a href="index.php?halaman=project_edit&id=<?= $rows['id']?>" class="btn btn-warning">Edit</a>
                                        <a href="function/project/hapus_project.php?id=<?=$rows['id']?>" class="btn btn-danger">Delete</a>
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