<div class="container">
<div class="card-body">
            <form action="function/project/tambah_project.php" method="POST" enctype="multipart/form-data">
                    <div class="pl-lg-4">
                    <div class="row">
                        <div class="col-lg-12">
                        <img src="#" id="blah" style="width: 140px; height: 110px;" hidden >
                            <div class="form-group">
                                <label class="form-control-label" for="input-username">Gambar Project</label>
                                <input type="file" id="input-username" onchange="readURL(this);" name="gambar_project"class="form-control" placeholder="Gaambar" >
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label class="form-control-label" for="input-judul">Judul Project </label>
                                <input type="text" id="input-judul" name="judul_project" class="form-control" placeholder="judul">
                            </div>
                        </div>
                     
                    </div>
                </div>
               
                <hr class="my-4" />
                <!-- Description -->
                <div class="pl-lg-4">
                    <div class="form-group">
                        <label class="form-control-label">Deskripsi Project</label>
                        <textarea rows="4" class="form-control" name="deskripsi_project" placeholder="A few words about you ..."> </textarea>
                    </div>
                </div>
                <input type="submit" class="btn " style="background-color:blueviolet; color:white">
                <a href="index.php?halaman=project" class="btn btn-dark">Back</a>

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