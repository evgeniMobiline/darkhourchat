<header class="site-header sticky top-0 z-999">
    <div class="absolute left-0 top-0 w-full z-999">
        <div class="py-2 border-b bg-[#040104] border-b-white/10">
            <div class="container mx-auto">
                <div class="flex flex-row justify-between items-center gap-8">
                    <div class="w-75 flex-none">
                        <a href="<?= base_url(); ?>" class='text-white'>
                            <?php if (!empty(lang("App.site.logo.url"))): ?>
                                <img src="<?= base_url(lang("App.site.logo.url")); ?>" alt="<?= lang("App.site.logo.alt") ?>" class="block w-full h-auto" />
                            <?php else: ?>
                                <div class="text-3xl font-black"><?= lang("App.site.title") ?></div>
                            <?php endif; ?> 
                        </a>
                    </div>
                    <div class="flex-1 flex flex-row-reverse items-center">
                        <nav class="site-nav hidden lg:block">
                            <ul class="site-menu flex gap-10">
                                <?php foreach (lang("App.nav.header") as $item): ?>
                                    <li>
                                        <a class="font-semibold text-foreground text-base hover:text-primary" href="<?= base_url($item['link']) ?>"><?= $item['label'] ?></a>
                                    </li>
                                <?php endforeach; ?>
                            </ul>
                        </nav>
                        <div class="lg:hidden">
                            <button id="mobile-menu-btn" class="p-2 border">
                                <svg class="size-5" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-menu-icon lucide-menu">
                                    <path d="M4 5h16" />
                                    <path d="M4 12h16" />
                                    <path d="M4 19h16" /> 
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>