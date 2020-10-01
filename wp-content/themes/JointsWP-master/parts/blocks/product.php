<?php

$className = 'product';
if (!empty($block['className'])){
    $className .= ' ' . $block['className'];
}

if (!empty($block['align'])){
    $className .= ' ' . $block['align'];
}

// Retriving Values
$text = get_field('products_text');
$title = get_field('products_title');
$product = get_field('list_a_product'); // Repeater Field

// Are there Prodcuts to display?
if (have_rows('list_a_product')) :
?>

    <div id="Top">
        <p><?php echo $text; ?></p>
        <h3> <?php echo $title; ?> </h3>
        
        <?php while (have_rows('list_a_product')) : the_row();
            // Load values in repeated field
            $product_image = get_sub_field('product_image');
            $product_name = get_sub_field('product_name');
            $product_cost = get_sub_field('product_cost');
        ?>
            <div id="product-list">
                <img src=<?php echo $product_image; ?>>
                <?php echo $product_name . ' ' . $product_cost;?>
            </div>
    </div>
    <?php
        endwhile; 
    else:
    endif; ?>
