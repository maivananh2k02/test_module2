<?php
include_once 'app/View/layout/header.php';
?>
    <a class="btn btn-danger" href="index.php?page=add">Add product</a>
    <div style="margin-left: 800px">
    </div>
    <table class="table">
        <thead class="thead-gr">
        <tr>
            <th scope="col">Stt</th>
            <th scope="col">Product Code</th>
            <th scope="col">Product Name</th>
            <th scope="col">Product Type</th>
            <th scope="col">Price</th>
            <th scope="col">Amount</th>
            <th scope="col">Date Of Manufacture</th>
            <th scope="col">Description</th>
            <th scope="col" colspan="2"></th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($products as $key => $product) : ?>
            <tr>
                <td scope="row"><?php echo ++$key ?></td>
                <td  scope="row"><a href="index.php?page=product&id=<?php echo $product['id'] ?>">
                        <?php echo 'SKU-'.$product['id'] ?>
                    </a>
                </td>
                <td scope="row"><?php echo $product['nameProduct'] ?></td>
                <td scope="row"><?php echo $product['productType'] ?></td>
                <td scope="row"><?php echo $product['price'] ?></td>
                <td scope="row"><?php echo $product['amount'] ?></td>
                <td scope="row"><?php echo $product['dateOfManufacture'] ?></td>
                <td scope="row"><?php echo $product['description'] ?></td>
                <td scope="row">
                    <a href="./index.php?page=update&id=<?php echo $product['id']; ?>"
                       class="btn btn-primary btn-sm">Update</a>
                    <a href="./index.php?page=delete&id=<?php echo $product['id']; ?>"
                       class="btn btn-danger btn-sm"
                       onclick="return confirm('Are you sure about that?')">Delete</a>
                </td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
<?php include_once 'View/layout/header.php'; ?>