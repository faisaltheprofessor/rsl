<x-layouts.storefront :title="'Contact'">
    <header class="sticky top-0 z-40 border-b border-[#E36A6A]/18 bg-[#FFFBF1]/85 backdrop-blur-xl">
        <div class="mx-auto flex max-w-7xl items-center justify-between px-6 py-4 lg:px-10">
            <a href="{{ route('home') }}" class="flex items-center gap-4">
                <img src="{{ asset('images/logo-rsl.svg') }}" alt="RSL logo" class="h-12 w-auto">
                <div>
                    <p class="font-display text-2xl font-semibold tracking-[0.16em] text-[#E36A6A]">RSL</p>
                    <p class="text-xs uppercase tracking-[0.38em] text-[#E36A6A]">Raouf Sajid Ltd.</p>
                </div>
            </a>

            <nav class="hidden items-center gap-8 text-sm font-semibold uppercase tracking-[0.28em] text-[#B9858A] md:flex">
                <a href="{{ route('home') }}#home" class="transition hover:text-[#E36A6A]">Home</a>
                <a href="{{ route('home') }}#about" class="transition hover:text-[#E36A6A]">About</a>
                <a href="{{ route('home') }}#trends" class="transition hover:text-[#E36A6A]">Trends</a>
                <a href="{{ route('contact') }}" class="text-[#E36A6A]">Contact</a>
            </nav>

            <button type="button" class="mobile-menu-button inline-flex items-center justify-center rounded-full border border-[#E36A6A]/24 bg-white/80 p-3 text-[#E36A6A] md:hidden" data-menu-toggle="contact-mobile-menu" aria-label="Open navigation menu" aria-expanded="false">
                <span class="sr-only">Open menu</span>
                <span class="flex h-4 w-5 flex-col justify-between">
                    <span class="block h-0.5 w-full rounded-full bg-current"></span>
                    <span class="block h-0.5 w-full rounded-full bg-current"></span>
                    <span class="block h-0.5 w-full rounded-full bg-current"></span>
                </span>
            </button>
        </div>

        <div class="hidden border-t border-[#E36A6A]/12 px-6 py-4 md:hidden" data-menu="contact-mobile-menu">
            <nav class="flex flex-col gap-4 text-sm font-semibold uppercase tracking-[0.24em] text-[#B9858A]">
                <a href="{{ route('home') }}#home" class="transition hover:text-[#E36A6A]" data-menu-close="contact-mobile-menu">Home</a>
                <a href="{{ route('home') }}#about" class="transition hover:text-[#E36A6A]" data-menu-close="contact-mobile-menu">About</a>
                <a href="{{ route('home') }}#trends" class="transition hover:text-[#E36A6A]" data-menu-close="contact-mobile-menu">Trends</a>
                <a href="{{ route('contact') }}" class="text-[#E36A6A]" data-menu-close="contact-mobile-menu">Contact</a>
            </nav>
        </div>
    </header>

    <main class="mx-auto max-w-7xl px-6 py-20 lg:px-10">
        <div class="grid gap-10 lg:grid-cols-[0.9fr_1.1fr]">
            <section class="order-2 space-y-8 lg:order-1">
                <span class="section-label">Contact</span>
                <h1 class="font-display text-6xl leading-none text-[#E36A6A] sm:text-7xl">
                    Connect with the velvet team.
                </h1>
                <p class="max-w-xl text-lg leading-8 text-[#B9858A]">
                    Reach Raouf Sajid Ltd. through your preferred channel. The QR codes below are ready for WeChat and WhatsApp contact.
                </p>

                <div class="fabric-card rounded-[2rem] p-8">
                    <p class="text-xs uppercase tracking-[0.3em] text-[#E36A6A]">Direct Support</p>
                    <p class="mt-4 text-lg leading-8 text-[#B9858A]">
                        For inquiries, sampling requests, and order discussions, connect directly through WeChat or WhatsApp and our team will respond with the relevant fabric details.
                    </p>
                </div>

                <div class="fabric-card rounded-[2rem] p-8">
                    <p class="text-xs uppercase tracking-[0.3em] text-[#E36A6A]">Address</p>
                    <div class="mt-5 space-y-5 text-[#B9858A]">
                        <div>
                            <p class="text-sm font-semibold uppercase tracking-[0.24em] text-[#E36A6A]">Company Name</p>
                            <p class="mt-2 text-base leading-8">Chinese: 绍兴锐弗萨贸易有限公司</p>
                            <p class="text-base leading-8">English: SHAOXING RAOUF SAJID TRADING CO., LTD.</p>
                        </div>
                        <div>
                            <p class="text-sm font-semibold uppercase tracking-[0.24em] text-[#E36A6A]">Office Address</p>
                            <p class="mt-2 text-base leading-8">Chinese: 浙江省绍兴市柯桥区华舍街道越府大厦2幢京悦酒店1107室</p>
                            <p class="text-base leading-8">English: Room 1107, Jingyue Hotel, Keqiao Yuefu Building 2, Keqiao District, Shaoxing City, Zhejiang Province</p>
                        </div>
                    </div>
                </div>
            </section>

            <section class="order-1 grid grid-cols-2 gap-4 sm:gap-6 lg:order-2">
                <article class="fabric-card rounded-[2rem] p-6">
                    <div class="gold-outline rounded-[1.5rem] bg-white/70 p-5">
                        <img src="{{ asset('images/wechat.png') }}" alt="WeChat QR code" class="aspect-square w-full rounded-2xl bg-white object-contain p-4">
                    </div>
                    <p class="mt-5 text-xs uppercase tracking-[0.3em] text-[#E36A6A]">WeChat</p>
                    <h2 class="font-display mt-3 text-3xl text-[#E36A6A]">Scan for WeChat</h2>
                </article>

                <article class="fabric-card rounded-[2rem] p-6">
                    <div class="gold-outline rounded-[1.5rem] bg-white/70 p-5">
                        <img src="{{ asset('images/whatsapp.png') }}" alt="WhatsApp QR code" class="aspect-square w-full rounded-2xl bg-white object-contain p-4">
                    </div>
                    <p class="mt-5 text-xs uppercase tracking-[0.3em] text-[#E36A6A]">WhatsApp</p>
                    <h2 class="font-display mt-3 text-3xl text-[#E36A6A]">Scan for WhatsApp</h2>
                </article>
            </section>
        </div>
    </main>
</x-layouts.storefront>
