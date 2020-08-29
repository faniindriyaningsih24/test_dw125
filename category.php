<?php include("koneksi.php"); ?>
<div class="container">
    <div class="row ">
        <div class="col-8">
        <a href="index.php?page=addCategory" class="btn btn-primary my-3" >Add Category</a>
        <table class="table">
                <thead class="thead-light">
                    <tr>
                    <th scope="col">No</th>
                    <th scope="col">Category Id</th>
                    <th scope="col">Category</th>
                    <th scope="col">Action</th>
                    </tr>
                </thead>
                    <?php 
                        include 'koneksi.php';
                        $no = 1;
                        $data = mysqli_query($koneksi,"select * from category_tb");
                        while($d = mysqli_fetch_array($data)){
                    ?>
                <tbody>
                    <tr>
                        <td><?php echo $no++; ?></td>
                        <td><?php echo $d['categoryId']; ?></td>
                        <td><?php echo $d['category']; ?></td>
                        <td>
                            <a href="index.php?page=editCategory&categoryId=<?php echo $d['categoryId']; ?>" class=" badge badge-success">edit</a>
                            <a href="deleteCategory.php?categoryId=<?php echo $d['categoryId']; ?>" class=" badge badge-danger">hapus</a>
                        </td>
                    </tr>
                </tbody>
                    <?php 
                        }
                    ?>
            </table>
        </div>
    </div>
</div>

