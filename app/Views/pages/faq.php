<?= $this->extend('layout/layout') ?>

<?= $this->section("content"); ?>

<section class="section text-white pt-30 lg:pt-40 xl:pt-45">
    <div class="section-inner">
        <div class="container">
            <div class="text-center">
                <h1>Frequently Asked Questions</h1>
            </div>
        </div>
    </div>
    <div class="section-overlay"></div>
</section>

<section class="section pb-0">
    <div class="container">
        <div class="text-center max-w-4xl mx-auto">
            <p>Darkhourchat is a private <a href="https://www.darkhourchat.com">adult chat line</a> where real people connect for fun, friendly, and exciting conversations. Enjoy live chat, private one-on-one calls, and free trials in a safe and discreet space.</p>
            <p>Whether you are looking for casual talk, flirting, friendship, or meaningful connection, Darkhourchat makes it easy to meet adults and start a real conversation.</p>
        </div>
    </div>
</section>

<?php $faq = lang('Faq.entry'); ?>
<?= service('renderer')->setData(['section' => $faq])->render('sections/faq'); ?>

<?= $this->endSection(); ?>