        <footer class="footer">
            <div class="container">
                <div class="footer-widgets">
                    <?php foreach (lang("App.widgets") as $widget): ?>
                        <div class="basis-full md:basis-auto grow md:grow-0">
                            <h4 class="uppercase mb-4"><?= $widget['title'] ?></h4>
                            <ul class="flex flex-col gap-2 font-medium">
                                <?php foreach ($widget['links'] as $link): ?>
                                    <li><a href="<?= $link['url'] ?>"><?= $link['label'] ?></a></li>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
            <div class="copyright">
                <div class="container">
                    <p class="m-0"><?= sprintf('%d %s. All rights reserved. Must be 18 years or older to call.', date('Y'), lang("App.site.footer")) ?></p>
                </div>
            </div>
        </footer>

        <?= $this->include('components/mobileMenu'); ?>

        <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
        <script src="<?= base_url('assets/js/base.js') ?>"></script>
        <script src="<?= base_url('assets/js/app.js') ?>"></script>
        <script src="<?= base_url('assets/js/forms.js') ?>"></script>
        </body>

        </html>