<section class="section">
    <div class="container">
        <div class="max-w-4xl mx-auto">
            <?php foreach ($section as $part): ?>
                <div>
                    <h3><?= $part['title'] ?></h3>
                </div>
                <div class="flex flex-col border rounded-sm overflow-hidden mb-8">
                    <?php foreach ($part['questions'] as $item): ?>
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
            <?php endforeach; ?>
        </div>
    </div>
</section>