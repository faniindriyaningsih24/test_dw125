<div class="container">
    <div class="row ">
        <div class="col-5">
        <?php
            include 'koneksi.php';
            $categoryId = $_GET['categoryId'];
            $data = mysqli_query($koneksi,"select * from category_tb where categoryId='$categoryId'");
            $d = mysqli_fetch_array($data);
        ?>
        <form method="post" action="updateCategory.php">
            <div class="form-group">
                <label>Category Id</label>
                <input type="text" class="form-control" name="categoryId" placeholder="Code Otomatis" value="<?php echo $d['categoryId']; ?>" readonly>
            </div>
            <div class="form-group">
                <label>Category</label>
                <input type="text" class="form-control" name="category" placeholder="Input Category" value="<?php echo $d['category']; ?>" >
            </div>
            <button type="submit" class="btn btn-primary" name="update">Update</button>
            </form>
        </div>
    </div>
</div>