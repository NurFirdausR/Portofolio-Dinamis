<?php 
include_once "../connect.php";
$sql = mysqli_query($conn,"SELECT * FROM `portofolio-dinamis`.about");
$w = mysqli_fetch_assoc($sql);
// var_dump($w);
$sql = mysqli_query($conn,"SELECT * FROM `portofolio-dinamis`.admin");
$admin = mysqli_fetch_assoc($sql);
// var_dump($admin);
?>

<div class="row d-flex justify-content-end">
    <div class="pr-5">
        <h6 class="h2 text-white d-inline-block mb-0">Default</h6>
        <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
            <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                <li class="breadcrumb-item"><a href="#"><i class="ni ni-planet"></i></a></li>
                <li class="breadcrumb-item"><a href="#">About</a></li>
            </ol>
        </nav>
    </div>
</div>
    <div class="container">
        <div class="card-body">
            <form action="function/about/edit_ubah.php" method="POST">
                    <div class="pl-lg-4">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label class="form-control-label" for="input-username">Nama</label>
                                <input type="text" id="input-username" name="name_me"class="form-control" value="<?= $admin['nama_admin'] ?>"placeholder="Username" >
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label class="form-control-label" for="input-email">Email </label>
                                <input type="email" id="input-email" name="email_me" class="form-control" value="<?= $w['email_me'] ?>"placeholder="Email">
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label class="form-control-label" for="input-github">Github </label>
                                <input type="text" id="input-github" name="github_me" class="form-control" value="<?= $w['github_me'] ?>"placeholder="GIthub">
                            </div>
                        </div>
                    </div>
                </div>
               
                <hr class="my-4" />
                <!-- Description -->
                <div class="pl-lg-4">
                    <div class="form-group">
                        <label class="form-control-label">About Me</label>
                        <textarea rows="4" class="form-control" name="about_me" placeholder="A few words about you ..."> <?= $w['about_me'] ?> </textarea>
                    </div>
                </div>
                <input type="submit" class="btn " style="background-color:blueviolet; color:white">
                <input type="hidden"  name="id" value="<?= $w['id']?>">
                <a href="index.php?halaman=dashboard" class="btn btn-dark">Back</a>

            </form>
        </div>
    </div>
    <br>
    <br>