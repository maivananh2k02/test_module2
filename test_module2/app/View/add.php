<?php
    include_once 'app/View/layout/header.php';
?>
<div class="col-12 col-md-12 mt-2">
    <div class="card">
        <div class="card-header">
            Add product
        </div>
        <div class="card-body">
            <div class="col-12">
                <form method="post">
                    <div class="form-group">
                        <label class="form-label">Product Name</label>
                        <input type="text" name="nameProduct" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label class="form-label">Product Type</label>
<!--                        <select name="productType" class="custom-select" id="inputGroupSelect01" >-->
<!--                            <option value="Điện Thoại">Điện Thoại</option>-->
<!--                            <option  value="Điều Hòa">Điều Hòa</option>-->
<!--                            <option  value="Tủ Lạnh">Tủ Lạnh</option>-->
<!--                        </select>-->
                        <input type="text" name="productType" class="form-control">
                    </div>
                    <div class="form-group">
                        <label class="form-label">Price</label>
                        <input type="text" class="form-control" name="price" required>
                    </div>
                    <div class="form-group">
                        <label class="form-label">Amount</label>
                        <input type="text" class="form-control" name="amount" required>
                    </div>
                    <div class="form-group">
                        <label class="form-label">Date Of Manufacture</label>
                        <input type="date" class="form-control" name="dateOfManufacture" required>
                    </div>
                    <div class="form-group">
                        <label class="form-label">Description</label>
                        <textarea class="form-control" name="description" required></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Add</button>
                    <button class="btn btn-secondary" onclick="window.history.go(-1); return false;">Hủy</button>
                </form>
            </div>
        </div>
    </div>
</div>
<?php include_once 'View/layout/footer.php'; ?>
