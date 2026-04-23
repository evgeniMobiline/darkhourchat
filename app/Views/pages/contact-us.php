<?= $this->extend('layout/layout') ?>

<?= $this->section("content"); ?>
<?php
helper('render');
$content = lang('Contact.entry');
?>

<section class="section text-white pt-30 lg:pt-40 xl:pt-45">
    <div class="section-inner">
        <div class="container">
            <div class="text-center">
                <h1>Support Center | DarkHourChat Adult Chat Line</h1>
            </div>
        </div>
    </div>
    <div class="section-overlay"></div>
</section>

<section class="section">
    <div class="container">
        <?= render_content($content['s_1']); ?>
    </div>
</section>

<section class="section bg-mauve-900">
    <div class="container">
        <?= render_content($content['s_2']); ?>
    </div>
</section>

<section class="section">
    <div class="container">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 lg:gap-15">
            <div class="border bg-mauve-700/20 rounded-md p-4 lg:p-7">
                <?= render_content($content['s_3']); ?>
                <div id="contact-form"></div>
            </div>
            <div>
                <?= render_content($content['s_4']); ?>
            </div>
        </div>
    </div>
</section>

<section class="section text-white">
    <div class="section-inner">
        <div class="container">
            <div class="max-w-5xl mx-auto text-center">
                <?= render_content($content['s_5']); ?>
            </div>
        </div>
    </div>
    <div class="section-overlay">
        <img src="<?= base_url('assets/images/DarkHourChat_Banner_Male2.webp'); ?>"  alt="DarkHourChat Adult Chat Line" class="size-full object-cover opacity-50"/>
    </div>
</section>


<?= $this->endSection(); ?>