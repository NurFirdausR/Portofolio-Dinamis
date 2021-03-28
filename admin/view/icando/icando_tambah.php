<div class="container">
<div class="card-body">
            <form action="function/icando/tambah_icando.php" method="POST" enctype="multipart/form-data">
                    <div class="pl-lg-4">
                    <div class="row">
                        <div class="col-lg-12">
                        <img src="#" id="blah" style="width: 140px; height: 110px;" hidden >
                            <div class="form-group">
                                <label class="form-control-label" for="input-username">Logo Service</label>
                                <input type="file" id="input-username" onchange="readURL(this);" name="gambar_service"class="form-control" placeholder="Gaambar" >
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label class="form-control-label" for="input-nama">Nama Service </label>
                                <input type="text" id="input-nama" name="nama_service" class="form-control" placeholder="Nama">
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label class="form-control-label" for="input-skill">Skill Service </label>
                                <input type="text" id="input-skill" name="skill_service" class="form-control" placeholder="html,css,linux">
                            </div>
                        </div>
                     
                    </div>
                </div>
               
                <!-- Description -->
               
                <input type="submit" class="btn " style="background-color:blueviolet; color:white">
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
                $('#blah').removeAttr('hidden');
            }

            reader.readAsDataURL(input.files[0]);
        }
    }
</script>