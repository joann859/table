<!DOCTYPE html>
<html>

<head>
    <title></title>
    <link rel="shortcut icon" type="image/ico" href="images/favicon.ico" />
    <link href="view/style.css" rel="stylesheet">
</head>

<body>
<h2>CLICK TO CREATE TABLE PRODUCTS</h2>
<div class="table-wrapper">
<?php if($get_data):?>
    <table class="fl-table">
        <thead>
        <tr>
            <th>ID</th>
            <th>PRODUCT_ID</th>
            <th>PRODUCT_PRICE</th>
            <th>PRODUCT_ARTICLE</th>
            <th>PRODUCT_QUANTITY</th>
            <th>EDIT</th>
        </tr>
        </thead>
        <?php foreach ($get_data as $table): ?>
        <tbody>         
        <tr>
        <form method="post" action="" >
        <input type="text" name="val" value="<?php echo $table['ID'];?>"style="display:none;">
            <td><?php echo $table['ID'];?></td>
            <td><?php echo $table['PRODUCT_ID'];?></td>
            <td><?php echo $table['PRODUCT_PRICE'];?></td>
            <td><?php echo $table['PRODUCT_ARTICLE'];?></td>
            <td class="quantity">
              <button type="submite" name="less">-</button>
                  <?php echo $table['PRODUCT_QUANTITY'];?>
              <button type="submite" name="more">+</button>     
            </td>
            <td>
                <button type="submite" name="hide" > скрыть </button> 
            </td>
            </form>
        </tr> 
        <tbody>
        <?php endforeach; ?>
    </table>
    <?endif; ?>
     
     
</div>
</body>

</html>
 