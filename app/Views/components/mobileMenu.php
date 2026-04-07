<div class="site-menu lg:hidden fixed inset-0 bg-black z-9999 transition-all invisible opacity-0 [&.active]:visible [&.active]:opacity-100">
    <div class="flex justify-between items-center px-5 py-4">
        <a class="text-white no-underline" href="<?= base_url(); ?>">
            <?php if (!empty(lang("App.site.logo.url"))): ?>
                <img src="<?= base_url(lang("App.site.logo.url")); ?>" alt="<?= lang("App.site.logo.alt") ?>" class="block w-full h-auto" />
            <?php else: ?>
                <div class="flex items-center gap-2">
                    <div class="text-4xl font-black"><?= lang("App.site.title") ?></div>
                </div>
            <?php endif; ?>
        </a>
        <button id="mobile-menu-close" class="text-white size-10 p-2 border rounded-full">
            <svg class='size-full' xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-x-icon lucide-x">
                <path d="M18 6 6 18" />
                <path d="m6 6 12 12" />
            </svg>
        </button>
    </div>
    <div class="site-mmenu-inner size-full flex flex-col items-start justify-start gap-10">
        <ul class="site-mmenu-menu flex flex-col gap-3 items-start justify-start px-5 pt-10">
            <?php foreach (lang("App.nav.mobile") as $item): ?>
                <li>
                    <a class="uppercase font-semibold text-white text-2xl no-underline" href="<?= base_url($item['link']) ?>"><?= $item['label'] ?></a>
                </li>
            <?php endforeach; ?>
        </ul>
    </div>
</div>