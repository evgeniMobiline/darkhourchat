<?php
helper('render');
$entry = $section['entry'];
$args = $section['args'];
?>

<section class="py-10 lg:py-20 xl:py-25">
    <div class="container">
        <?= render_content($entry) ?>
    </div>
</section>