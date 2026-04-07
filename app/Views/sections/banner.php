<?php
helper('render');
$entry = $section['entry'];
$media = $section['media'];
$args = $section['args'];
?>

<section class="relative text-white">
    <?php if ($media): ?>
        <div class="absolute z-0 inset-0 ">
            <img src="<?= base_url($media['url']) ?>" alt="<?= $media['alt'] ?>" class="size-full object-cover object-center" />
        </div>
    <?php endif; ?>
    <div class="relative z-1 aspect-5/2 flex items-center bg-stone-950/30 pb-10 pt-25 lg:pb-20 lg:pt-30 xl:pb-25 xl:pt-35 backdrop-blur-xs">
        <div class="container">
            <div class="lg:w-2/3 xl:w-1/2">
                <?= render_content($entry) ?> 
            </div>
        </div>
    </div>
</section>