<?php
include_once 'app/View/layout/header.php';
?>
<div class="col-12 col-md-12 mt-2">
    <div class="card">

        <div class="card-body">
            <div class="col-12">
                <form method="post" action="./index.php?page=update&id=<?php echo $product['id']; ?>"
                      enctype="multipart/form-data">
                    <input type="hidden" value="<?php echo $product['id']; ?>" name="id">
                    <div class="mb-3">
                        <label class="form-label">Product Name</label>
                        <input type="text" name="nameProduct" value="<?php echo $product['nameProduct']; ?>"
                               class="form-control">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Product Type</label>
<!--                        <select name="productType" class="custom-select" id="inputGroupSelect01" >-->
<!--                            <option class="form-label" value="Điện Thoại">Điện Thoại</option>-->
<!--                            <option class="form-label" value="Điều Hòa">Điều Hòa</option>-->
<!--                            <option class="form-label" value="Tủ Lạnh">Tủ Lạnh</option>-->
<!--                        </select>-->
                        <input type="text" name="productType" class="form-control">
                    </div>
                    <div class="form-label">
                        <label class="form-label">Price</label>
                        <input type="text" class="form-control" value="<?php echo $product['price']; ?>" name="price">
                    </div>
                    <div class="form-label">
                        <label class="form-label">Amount</label>
                        <input type="text" class="form-control" name="amount" value="<?php echo $product['amount']?>">
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Date Of Manufacture</label>
                        <input type="date" name="dateOfManufacture" class="form-control"
                               value="<?php echo $product['dateOfManufacture']?>">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Description</label>
                        <input type="text" class="form-control"
                               value="<?php echo $product['description']; ?>"
                               name="description">
                    </div>
                    <button type="submit" class="btn btn-primary">update</button>
                    <button class="btn btn-secondary" onclick="window.history.go(-1); return false;">Hủy</button>
                </form>
            </div>
        </div>
    </div>
</div>
<?php include_once 'View/layout/footer.php'; ?>
