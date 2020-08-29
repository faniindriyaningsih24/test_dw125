<div class="container">
    <div class="row ">
        <div class="col-5">
            <form method="post" action="insertVideo.php" enctype="multipart/form-data" name="formaddVideo">
                <div class="form-group">
                    <label>Video Id</label>
                    <input type="text" class="form-control" name="videoId" placeholder="Code Otomatis" readonly>
                </div>
                <div class="form-group">
                    <label>Title</label>
                    <input type="text" class="form-control" name="title" placeholder="Input Title">
                </div>
                <div class="form-group">
                    <label>Category</label>
                    <input type="text" class="form-control" name="categoryId" placeholder="Input Category">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlFile1">attache</label>
                    <input type="file" class="form-control-file" name="attache">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlFile1">thumbnail</label>
                    <input type="file" class="form-control-file" name="thumbnail">
                </div>
                <button type="submit" class="btn btn-primary" name="save">Save</button>
                <button type="reset" class="btn btn-primary" name="cancel">Cancel</button>
            </form>
        </div>
    </div>
</div>
