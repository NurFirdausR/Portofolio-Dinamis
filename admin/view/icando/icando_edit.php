
<?php 
include_once "../../../connect.php";
$id = $_GET['id'];
$sql = mysqli_query($conn,"SELECT * FROM `portofolio-dinamis`.icando where id = $id");
$w = mysqli_fetch_assoc($sql);
// var_dump($w);
?>
<div class="container">
<div class="card-body">
            <form action="function/icando/edit_ubah.php" method="POST" enctype="multipart/form-data">
                    <div class="pl-lg-4">
                    <div class="row">
                        <div class="col-lg-12">
                        <img src="../imgservice/<?= $w['gambar_service']?>" id="blah" style="width: 140px; height: 110px;"  >
                            <div class="form-group">
                                <label class="form-control-label" for="input-username">Logo Service</label>
                                <input type="file" id="input-username" onchange="readURL(this);" name="gambar_service"class="form-control" placeholder="Gaambar" >
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label class="form-control-label" for="input-nama">Nama Service </label>
                                <input type="text" id="input-nama" value="<?= $w['nama_service']?>"name="nama_service" class="form-control" placeholder="Nama">
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label class="form-control-label" for="input-skill">Skill Service </label>
                                <input type="text" id="input-skill" value="<?= $w['skill_service']?>"name="skill_service" class="form-control" placeholder="html,css,linux">
                            </div>
                        </div>
                     
                    </div>
                </div>
               
                <!-- Description -->
                <input type="hidden" hidden id="input-skill" name="id" value="<?= $w['id']?>"  class="form-control" placeholder="html,css,linux">
                <input type="submit" class="btn " style="background-color:blueviolet; color:white" value="Update">
                <a href="index.php?halaman=icando" class="btn btn-dark">Back</a>

            </form>
        </div>
</div>
<script type="text/javascript">
    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('#blah').attr('src', e.target.result);
                // $('#blah').removeAttr('hidden');
            }

            reader.readAsDataURL(input.files[0]);
        }
    }
</script>