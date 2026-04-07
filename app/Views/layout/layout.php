<?= $this->include('layout/header'); ?>

<div id="page" class="site">
    <?= $this->include('layout/navbar'); ?>
    <main class="site-content">
        <?= $this->renderSection('content'); ?>
    </main>
</div>

<?= $this->include('layout/footer'); ?>