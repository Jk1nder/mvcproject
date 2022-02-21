<div class="product">
    <p>
        <?= \Core\Url::getLink('/product/list', 'Повернутись до списку товарів'); ?>
    </p>
</div>

<?php
$product =  $this->get('product');
$saved =  $this->get('saved');
?>

<?php if($saved): ?>
    <h3> Зміни збережено </h3>
<?php endif; ?>

<form method="POST" action="<?php $_SERVER['PHP_SELF']; ?>">
    <input name="id" value="<?php echo $product['id'] ?>" hidden>
    <label>
        Код товару
        <input name="sku" required value="<?php echo $product['sku'] ?>">
    </label>
    </br>
    <label>
        Назва товару
        <input name="name" required value="<?php echo $product['name'] ?>">
    </label>
    </br>
    <label>
        Ціна товару
        <input name="price" type="number" step="0.1" min="0"  value="<?php echo $product['price'] ?>">
    </label>
    </br>
    <label>
        Кількість товару
        <input name="qty" type="number" step="0.1" min="0" value="<?php echo $product['qty'] ?>">
    </label>
    </br>
    <label>
        Опис товару
        </br>
        <textarea name="description" cols="100" rows="15"> <?php echo $product['description'] ?> </textarea>
    </label>
    </br>
    <input type="submit" value="Зберегти">
</form>