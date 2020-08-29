<div class="container">
    <div class="row ">
        <div class="col-5">
            <form method="post" action="insertCategory.php" name="formaddCategory">
                <div class="form-group">
                    <label>Category Id</label>
                    <input type="text" class="form-control" name="categoryId" placeholder="Code Otomatis" readonly>
                </div>
                <div class="form-group">
                    <label>Category</label>
                    <input type="text" class="form-control" name="category" placeholder="Input Category">
                </div>
                <button type="submit" class="btn btn-primary" name="save">Save</button>
                <button type="reset" class="btn btn-primary" name="cancel">Cancel</button>
            </form>
        </div>
    </div>
</div>
