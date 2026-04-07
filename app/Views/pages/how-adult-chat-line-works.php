<?= $this->extend('layout/layout') ?>

<?= $this->section("content"); ?>
<?php
helper('render');
$content = lang('How.entry');
?>

<section class="section text-white pt-30 lg:pt-40 xl:pt-45">
    <div class="section-inner">
        <div class="container">
            <div class="text-center">
                <h1>Darkhourchat- Your Gateway to Real Adult Connections</h1>
            </div>
        </div>
    </div>
    <div class="section-overlay"></div>
</section>

<section class="section bg-black/20">
    <div class="container">
        <?= render_content($content['s_1']); ?>
    </div>
</section>

<section class="section">
    <div class="container">
        <?= render_content($content['s_2']); ?>
    </div>
</section>

<section class="section bg-mauve-900">
    <div class="container">
        <?= render_content($content['s_3']); ?>
    </div>
</section>

<section class="section text-white">
    <div class="section-inner">
        <div class="container">
            <div class="max-w-5xl mx-auto text-center">
                <?= render_content($content['s_4']); ?>
            </div>
        </div>
    </div>
    <div class="section-overlay">
        <img src="<?= base_url('assets/images/DarkHourChat_Banner_Female4.webp'); ?>"  alt="Start Your Chat Journey Today" class="size-full object-cover opacity-50"/>
    </div>
</section>

<?= $this->endSection(); ?>