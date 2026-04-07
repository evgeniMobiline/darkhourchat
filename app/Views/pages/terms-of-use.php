<?= $this->extend('layout/layout') ?>
<?= $this->section("content"); ?>
<?php
    helper('render');
    $content = lang('Terms.entry'); 
?>

<section class="section text-white pt-30 lg:pt-40 xl:pt-45">
    <div class="section-inner">
        <div class="container">
            <div class="text-center">
                <h1>Terms of Use</h1>
            </div>
        </div>
    </div>
    <div class="section-overlay"></div>
</section>

<section class="section">
    <div class="section-inner">
        <div class="container">
            <div class="flex flex-col gap-5 max-w-4xl mx-auto">
                <?php foreach($content as $entry): ?>
                    <div class="">
                        <?= render_content($entry); ?>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</section>

<?= $this->endSection(); ?>