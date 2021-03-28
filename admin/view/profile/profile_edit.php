<div class="row">

<?php 
include_once "../../../connect.php";
$sql = mysqli_query($conn,"SELECT * FROM `portofolio-dinamis`.admin");
$w = mysqli_fetch_assoc($sql);
// var_dump($w);?
?>
<div class="card-body" style="margin-top: 10px;">
        <form action="function/profile/edit_ubah.php" method="POST" enctype="multipart/form-data">
            <div class="card card-profile">
                <div class="row justify-content-center">
                    <div class="col-lg-3 order-lg-2">
                    <br>
                    <br>
                        <div class="card-profile-image">
                            <a href="#">
                                <img src="../img/<?= $w['foto_admin'] ?>" style="width: 400px; height: 170px; border: 2px solid black;" class="rounded-circle">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="card-header text-center border-0 pt-8 pt-md-4 pb-0 pb-md-4">

                </div>
                <div class="card-body pt-0">
                    <br>
                    <br>
                    <br>
                </div>
            </div>
            <div class="pl-lg-4">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label class="form-control-label" for="input-username">Username</label>
                            <input type="text" id="input-username" name="username" class="form-control" placeholder="Username" value="<?= $w['username'] ?>">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label class="form-control-label" for="password">Password</label>
                            <input type="password" id="password" name="password" class="form-control" placeholder="jesse@example.com" value="<?= $w['password'] ?>" >
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label class="form-control-label" for="admin_name">Admin Name</label>
                            <input type="text" id="admin_name " name="nama_admin" class="form-control" placeholder="First name" value="<?= $w['nama_admin'] ?>">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label class="form-control-label" for="input-last-name">Foto Admin</label>
                            <input type="file" id="input-last-name" name="foto_admin" class="form-control" placeholder="Last name">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label class="form-control-label" for="input-last-name">Job Admin</label>
                            <input type="text" id="input-last-name" name="job_admin" class="form-control" placeholder="Last name" value="<?= $w['job_admin']?>">
                        </div>
                    </div>
                    <div class="col-lg-3 mt-md-4">
                        <div class="row">
                            <div class="col-6">
                                <input type="submit" class="btn" style="background-color: indigo; color:white;">
                                <input name="id" value="<?php echo $w['id']; ?>"  hidden />
                            </div>
                            <div class="col-6">
                                <a href="index.php?halaman=dashboard" class="btn btn-dark">Back</a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <!-- Address -->

            <!-- Description -->
            <!-- <div class="pl-lg-4">
                    <div class="form-group">
                        <label class="form-control-label">About Me</label>
                        <textarea rows="4" name="" class="form-control" placeholder="A few words about you ..."></textarea>
                    </div>
                </div> -->
        </form>
    </div>
</div>
<br>