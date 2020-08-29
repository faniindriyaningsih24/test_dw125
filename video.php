<?php include("koneksi.php"); ?>
<div class="container">
    <div class="row ">
        <div class="col-15">
        <a href="index.php?page=addVideo" class="btn btn-primary my-3" >Add Video</a>
        <table class="table">
                <?php 
		            if(isset($_GET['alert'])){
			        if($_GET['alert']=='gagal_ekstensi'){
				?>
				<div class="alert alert-warning alert-dismissible">
					<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
					<h4><i class="icon fa fa-warning"></i> Peringatan !</h4>
					Ekstensi Tidak Diperbolehkan
				</div>								
				<?php
			        }elseif($_GET['alert']=="gagal_ukuran"){
				?>
				<div class="alert alert-warning alert-dismissible">
					<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
					<h4><i class="icon fa fa-check"></i> Peringatan !</h4>
					Ukuran File terlalu Besar
				</div> 								
				<?php
			        }elseif($_GET['alert']=="berhasil"){
				?>
				<div class="alert alert-success alert-dismissible">
					<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
					<h4><i class="icon fa fa-check"></i> Success</h4>
					Berhasil Disimpan
				</div> 								
				<?php
			            }
		            }
                ?>
                
                <thead class="thead-light">
                    <tr>
                    <th scope="col">No</th>
                    <th scope="col">Title</th>
                    <th scope="col">Category</th>
                    <th scope="col">Attache</th>
                    <th scope="col">Thumbnail</th>
                    <th scope="col">Action</th>
                    </tr>
                </thead>
                
                <?php 
                    include 'koneksi.php';
                    $no = 1;
                    $data = mysqli_query($koneksi,"select * from video_tb");
                    while($d = mysqli_fetch_array($data)){
				?>
                <tbody>
                    <tr>
                        <td><?php echo $no++; ?></td>
                        <td><?php echo $d['title']; ?></td>
                        <td><?php echo $d['categoryId']; ?></td>
                        <td><embed src="attache/<?php echo $d['attache']; ?>" autostart="false" height="150" width="150" /></td>
                        <td><img src="thumbnail/<?php echo $d['thumbnail'] ?>" width="100" height="100"></td>
                        <td>
                            <a href="#" class=" badge badge-success">edit</a>
                            <a href="#" class=" badge badge-danger">hapus</a>
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

