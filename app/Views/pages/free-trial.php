<?= $this->extend('layout/layout') ?>

<?= $this->section("content"); ?>
<?php
helper('render');
$content = lang('Trial.entry');
?>

<section class="section banner">
    <div class="section-inner">
        <div class="container">
            <div class="text-center max-w-4xl mx-auto">
                <?= render_content($content['s_1']); ?>
            </div>
        </div>
    </div>
    <div class="section-overlay">
        <img src="<?= base_url('assets/images/DarkHourChat_banner_trial_man.webp'); ?>"  alt="Try DarkHourChat Free. No Commitment Upfront" class="size-full object-cover opacity-50"/>
    </div>
</section>

<section class="section bg-mauve-900">
    <div class="container">
        <?= render_content($content['s_2']); ?>
    </div>
</section>

<section class="section">
    <div class="container">
        <?= render_content($content['s_3']); ?>
        <div class="text-center mt-12">
            <a href="/how-adult-chat-line-works" class="btn">How It Works</a>
        </div>
    </div>
</section>

<section class="border-y bg-black/30 section">
    <div class="container">
        <?= render_content($content['s_4']); ?>
    </div>
</section>

<section class="section">
    <div class="container">
        <?= render_content($content['s_5']); ?>
    </div>
</section>

<section class="section border-y bg-black/30">
    <div class="container">
        <div class="section-header">
            <h2>Frequently Asked Questions</h2>
        </div>
        <div class="flex flex-col gap-2 rounded-sm max-w-4xl mx-auto overflow-hidden">
            <?php foreach ((array)$content['faq'] as $item): ?>
                <div class="faq-item">
                    <button class="faq-item-title">
                        <span><?= $item['q'] ?></span>
                        <svg class="size-6" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="size-full">
                            <path d="m6 9 6 6 6-6" />
                        </svg>
                    </button>
                    <div class="faq-item-content">
                        <p class="m-0"><?= $item['a'] ?></p>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
        <div class="text-center mt-12">
            <a href="/faq" class="btn">View All FAQs</a>
        </div>
    </div>
</section>

<section class="section text-white">
    <div class="section-inner">
        <div class="container">
            <div class="max-w-5xl mx-auto text-center">
                <?= render_content($content['s_6']); ?>
            </div>
        </div>
    </div>
    <div class="section-overlay">
        <img src="<?= base_url('assets/images/DarkHourChat_Banner_Couple2.webp'); ?>" alt="" class="size-full object-cover opacity-50" />
    </div>
</section>

<?= $this->endSection(); ?>