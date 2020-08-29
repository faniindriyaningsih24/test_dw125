<div class="container">
    <div class="row ">
        <div class="col-5">
        <?php
            include 'koneksi.php';
            $videoId = $_GET['videoId'];
            $data = mysqli_query($koneksi,"select * from video_tb where videoId='$videoId'");
            $d = mysqli_fetch_array($data);
        ?>
            <form method="post" action="updateVideo.php" name="formaddVideo">
                <div class="form-group">
                    <label>Video Id</label>
                    <input type="text" class="form-control" name="videoId" placeholder="Code Otomatis"  value="<?php echo $d['videoId']; ?>" readonly>
                </div>
                <div class="form-group">
                    <label>Title</label>
                    <input type="text" class="form-control" name="title" placeholder="Input Title"  value="<?php echo $d['title']; ?>">
                </div>
                <div class="form-group">
                    <label>Category</label>
                    <input type="text" class="form-control" name="categoryId" placeholder="Input Category" value="<?php echo $d['categoryId']; ?>">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlFile1">attache</label>
                    <input type="file" class="form-control-file" name="attache" value="<?php echo $d['attache']; ?>">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlFile1">thumbnail</label>
                    <input type="file" class="form-control-file" name="thumbnail" value="<?php echo $d['thumbnail']; ?>">
                </div>
                <button type="submit" class="btn btn-primary" name="update">update</button>
            </form>
        </div>
    </div>
</div>
