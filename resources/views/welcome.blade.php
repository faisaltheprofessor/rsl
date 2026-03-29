<x-layouts.storefront :title="'Home'">
    @php
        $velvetFiles = collect([
            'ABUIABACGAAgzM3SpQYo4t2J3AQwgAk4gAY.jpg',
            'ABUIABACGAAgvcvSpQYohLvruAIwgBI4gAw.jpg',
            'ABUIABACGAAgis3SpQYowL_b4gcwgAY4gAk.jpg',
            'ABUIABACGAAg_87SpQYo0-m72wIwgBI4gAw.jpg',
        ])
            ->map(fn ($file) => asset('images/velvet/'.$file))
            ->values();
    @endphp

    <header class="sticky top-0 z-40 border-b border-[#E36A6A]/18 bg-[#FFFBF1]/85 backdrop-blur-xl">
        <div class="mx-auto flex max-w-7xl items-center justify-between px-6 py-4 lg:px-10">
            <a href="{{ route('home') }}" class="flex items-center gap-4 reveal-up" style="--reveal-delay: 0ms;">
                <img src="{{ asset('images/logo-rsl.svg') }}" alt="RSL logo" class="h-12 w-auto">
                <div>
                    <p class="font-display text-2xl font-semibold tracking-[0.16em] text-[#E36A6A]">RSL</p>
                    <p class="text-xs uppercase tracking-[0.38em] text-[#E36A6A]">Raouf Sajid Ltd.</p>
                </div>
            </a>

            <nav class="hidden items-center gap-8 text-sm font-semibold uppercase tracking-[0.28em] text-[#B9858A] md:flex reveal-up" style="--reveal-delay: 90ms;">
                <a href="#home" class="transition hover:text-[#E36A6A]">Home</a>
                <a href="#about" class="transition hover:text-[#E36A6A]">About</a>
                <a href="#trends" class="transition hover:text-[#E36A6A]">Trends</a>
                <a href="{{ route('contact') }}" class="transition hover:text-[#E36A6A]">Contact</a>
            </nav>

            <div class="hidden items-center gap-3 md:flex">
                <button type="button" class="shine-link reveal-up rounded-full border border-[#E36A6A]/30 bg-white/70 px-5 py-2.5 text-xs font-semibold uppercase tracking-[0.3em] text-[#E36A6A] transition hover:bg-white" style="--reveal-delay: 140ms;" data-modal-open="contact-modal">
                    Get In Touch
                </button>
            </div>

            <button type="button" class="mobile-menu-button inline-flex items-center justify-center rounded-full border border-[#E36A6A]/24 bg-white/80 p-3 text-[#E36A6A] md:hidden" data-menu-toggle="home-mobile-menu" aria-label="Open navigation menu" aria-expanded="false">
                <span class="sr-only">Open menu</span>
                <span class="flex h-4 w-5 flex-col justify-between">
                    <span class="block h-0.5 w-full rounded-full bg-current"></span>
                    <span class="block h-0.5 w-full rounded-full bg-current"></span>
                    <span class="block h-0.5 w-full rounded-full bg-current"></span>
                </span>
            </button>
        </div>

        <div class="hidden border-t border-[#E36A6A]/12 px-6 py-4 md:hidden" data-menu="home-mobile-menu">
            <nav class="flex flex-col gap-4 text-sm font-semibold uppercase tracking-[0.24em] text-[#B9858A]">
                <a href="#home" class="transition hover:text-[#E36A6A]" data-menu-close="home-mobile-menu">Home</a>
                <a href="#about" class="transition hover:text-[#E36A6A]" data-menu-close="home-mobile-menu">About</a>
                <a href="#trends" class="transition hover:text-[#E36A6A]" data-menu-close="home-mobile-menu">Trends</a>
                <a href="{{ route('contact') }}" class="transition hover:text-[#E36A6A]" data-menu-close="home-mobile-menu">Contact</a>
                <button type="button" class="mt-2 rounded-full border border-[#E36A6A]/30 bg-white/80 px-5 py-3 text-left text-xs font-semibold uppercase tracking-[0.3em] text-[#E36A6A]" data-modal-open="contact-modal" data-menu-close="home-mobile-menu">
                    Get In Touch
                </button>
            </nav>
        </div>
    </header>

    <main>
        <section id="home" class="hero-grid relative overflow-hidden px-4 pb-12 pt-8 sm:px-6 lg:px-8">
            <div class="mx-auto max-w-5xl text-center">
                <span class="section-label reveal-up justify-center" style="--reveal-delay: 100ms;">Home</span>
                <h1 class="font-display reveal-up mt-8 text-5xl leading-none font-semibold text-[#E36A6A] sm:text-6xl lg:text-7xl" style="--reveal-delay: 180ms;">
                    Velvet collections designed to feel rich, soft, and modern.
                </h1>
                <p class="reveal-up mx-auto mt-6 max-w-3xl text-base leading-8 text-[#B9858A] sm:text-lg" style="--reveal-delay: 280ms;">
                    Raouf Sajid Ltd. presents export-ready velvet qualities for apparel, interiors, and printed fabric programs with a focus on dependable supply, color depth, and commercial quality.
                </p>
            </div>

            <div class="full-bleed-carousel fabric-card gold-outline reveal-up mx-auto mt-10 overflow-hidden rounded-[2.4rem] p-4 sm:p-5" style="--reveal-delay: 360ms;" data-carousel>
                <div class="mb-5 flex flex-col gap-4 px-3 pt-3 sm:flex-row sm:items-end sm:justify-between sm:px-5">
                    <div>
                        <p class="text-xs uppercase tracking-[0.32em] text-[#E36A6A]">Featured Carousel</p>
                        <h2 class="font-display mt-3 text-4xl text-[#E36A6A] sm:text-5xl">Selected velvet textures</h2>
                    </div>

                    @if ($velvetFiles->count() > 1)
                        <div class="flex items-center gap-3">
                            <button type="button" class="carousel-arrow rounded-full bg-white/90 px-4 py-3 text-sm font-bold text-[#E36A6A] shadow-lg transition hover:bg-white" data-carousel-prev aria-label="Previous slide">
                                &larr;
                            </button>
                            <button type="button" class="carousel-arrow rounded-full bg-white/90 px-4 py-3 text-sm font-bold text-[#E36A6A] shadow-lg transition hover:bg-white" data-carousel-next aria-label="Next slide">
                                &rarr;
                            </button>
                        </div>
                    @endif
                </div>

                <div class="relative overflow-hidden rounded-[2rem] border border-[#E36A6A]/15 bg-white/75">
                    <div class="relative aspect-[21/9] min-h-[22rem] overflow-hidden sm:min-h-[30rem] lg:min-h-[40rem]">
                        @foreach ($velvetFiles as $index => $image)
                            <div
                                class="carousel-slide absolute inset-0 {{ $index === 0 ? 'opacity-100 translate-x-0 scale-100' : 'pointer-events-none opacity-0 translate-x-[4%] scale-[1.05]' }}"
                                data-carousel-slide
                            >
                                <img src="{{ $image }}" alt="Velvet fabric sample {{ $index + 1 }}" class="h-full w-full object-cover">
                                <div class="absolute inset-0 bg-[linear-gradient(180deg,rgba(255,255,255,0.02),rgba(255,178,178,0.16)_52%,rgba(227,106,106,0.48))]"></div>
                            </div>
                        @endforeach
                    </div>

                    @if ($velvetFiles->isNotEmpty())
                        <div class="absolute inset-x-0 bottom-0 flex flex-col gap-4 bg-[linear-gradient(180deg,transparent,rgba(29,14,18,0.68))] px-6 py-6 sm:flex-row sm:items-end sm:justify-between sm:px-8">
                            <div class="text-white">
                                <p class="text-xs uppercase tracking-[0.32em] text-[#FFF2D0]">RSL Showcase</p>
                                <p class="mt-3 font-display text-3xl sm:text-4xl">Premium velvet for fashion and interiors.</p>
                            </div>

                            <div class="flex gap-2">
                                @foreach ($velvetFiles as $index => $image)
                                    <button
                                        type="button"
                                        class="carousel-dot h-2.5 w-8 rounded-full bg-white/30 transition sm:w-10"
                                        data-carousel-dot
                                        data-carousel-index="{{ $index }}"
                                        aria-label="Go to slide {{ $index + 1 }}"
                                        aria-current="{{ $index === 0 ? 'true' : 'false' }}"
                                    ></button>
                                @endforeach
                            </div>
                        </div>
                    @endif
                </div>
            </div>
        </section>

        <section id="about" class="mx-auto max-w-7xl px-6 py-24 lg:px-10">
            <div class="grid gap-8 lg:grid-cols-[0.9fr_1.1fr] lg:items-start">
                <div class="space-y-6 reveal-up">
                    <span class="section-label">About</span>
                    <h2 class="font-display text-5xl leading-tight text-[#E36A6A] sm:text-6xl">
                        Serving the fabric trade since 1990.
                    </h2>
                </div>

                <div class="fabric-card reveal-up rounded-[2rem] p-8 sm:p-10" style="--reveal-delay: 120ms;">
                    <p class="text-lg leading-9 text-[#B9858A]">
                        Raouf Sajid Ltd. has been connected to the textile business since 1990, building long-term experience in sourcing, trading, and supplying velvet qualities for buyers who value consistency, feel, and presentation.
                    </p>
                    <p class="mt-6 text-lg leading-9 text-[#B9858A]">
                        Today the company continues that background through Shaoxing operations, supporting clients with practical product knowledge, reliable communication, and trend-focused fabric selections that can later grow into broader category and subcategory programs.
                    </p>
                </div>
            </div>
        </section>

        <section id="trends" class="mx-auto max-w-7xl px-6 pb-24 lg:px-10">
            <div class="flex flex-col gap-6 sm:flex-row sm:items-end sm:justify-between">
                <div class="reveal-up">
                    <span class="section-label">Trends</span>
                    <h2 class="font-display mt-6 text-5xl leading-tight text-[#E36A6A] sm:text-6xl">
                        Three current trend lines, ready for future subcategories.
                    </h2>
                </div>
                <a href="{{ route('contact') }}" class="reveal-up text-sm font-semibold uppercase tracking-[0.28em] text-[#E36A6A] transition hover:text-[#FFB2B2]" style="--reveal-delay: 120ms;">
                    Request catalog
                </a>
            </div>

            <div class="mt-12 grid gap-6 lg:grid-cols-3">
                <article class="fabric-card reveal-up rounded-[2rem] p-8 transition duration-300 hover:-translate-y-1">
                    <p class="text-xs uppercase tracking-[0.3em] text-[#E36A6A]">Trend 01</p>
                    <h3 class="font-display mt-5 text-4xl text-[#E36A6A]">5000</h3>
                    <p class="mt-4 leading-8 text-[#B9858A]">
                        A core velvet direction suited for scalable stock programs, with room to expand later into multiple quality and shade-based subcategories.
                    </p>
                </article>

                <article class="fabric-card reveal-up rounded-[2rem] p-8 transition duration-300 hover:-translate-y-1" style="--reveal-delay: 120ms;">
                    <p class="text-xs uppercase tracking-[0.3em] text-[#E36A6A]">Trend 02</p>
                    <h3 class="font-display mt-5 text-4xl text-[#E36A6A]">9000</h3>
                    <p class="mt-4 leading-8 text-[#B9858A]">
                        A richer line developed for customers looking for deeper handfeel, stronger visual depth, and a structured range that can grow over time.
                    </p>
                </article>

                <article class="fabric-card reveal-up rounded-[2rem] p-8 transition duration-300 hover:-translate-y-1" style="--reveal-delay: 220ms;">
                    <p class="text-xs uppercase tracking-[0.3em] text-[#E36A6A]">Trend 03</p>
                    <h3 class="font-display mt-5 text-4xl text-[#E36A6A]">Screen print</h3>
                    <p class="mt-4 leading-8 text-[#B9858A]">
                        A print-led direction prepared for decorative patterns, fashion surfaces, and future print collections with their own subcategory structure.
                    </p>
                </article>
            </div>
        </section>
    </main>

    <div class="modal-overlay hidden items-center justify-center p-4 sm:p-6" data-modal="contact-modal" aria-hidden="true">
        <div class="absolute inset-0 bg-[#E36A6A]/22 backdrop-blur-sm" data-modal-close="contact-modal"></div>

        <div class="modal-panel fabric-card gold-outline relative z-10 w-full max-w-6xl overflow-hidden rounded-[2rem] p-6 sm:p-8">
            <button type="button" class="absolute right-4 top-4 rounded-full border border-[#E36A6A]/20 bg-white/80 px-3 py-2 text-sm font-bold text-[#E36A6A] transition hover:bg-white" data-modal-close="contact-modal" aria-label="Close contact modal">
                Close
            </button>

            <div class="pr-16">
                <p class="text-xs uppercase tracking-[0.32em] text-[#E36A6A]">Get In Touch</p>
                <h2 class="font-display mt-4 text-4xl text-[#E36A6A] sm:text-5xl">Scan to connect with RSL.</h2>
            </div>

            <div class="mt-8 grid gap-6 lg:grid-cols-[1fr_1.05fr]">
                <div class="order-2 space-y-6 lg:order-1">
                    <div class="fabric-card rounded-[1.6rem] p-6">
                        <p class="text-xs uppercase tracking-[0.28em] text-[#E36A6A]">Company Name</p>
                        <p class="mt-3 text-base leading-8 text-[#B9858A]">Chinese: 绍兴锐弗萨贸易有限公司</p>
                        <p class="text-base leading-8 text-[#B9858A]">English: SHAOXING RAOUF SAJID TRADING CO., LTD.</p>
                    </div>

                    <div class="fabric-card rounded-[1.6rem] p-6">
                        <p class="text-xs uppercase tracking-[0.28em] text-[#E36A6A]">Office Address</p>
                        <p class="mt-3 text-base leading-8 text-[#B9858A]">Chinese: 浙江省绍兴市柯桥区华舍街道越府大厦2幢京悦酒店1107室</p>
                        <p class="text-base leading-8 text-[#B9858A]">English: Room 1107, Jingyue Hotel, Keqiao Yuefu Building 2, Keqiao District, Shaoxing City, Zhejiang Province</p>
                    </div>

                    <a href="{{ route('contact') }}" class="inline-flex rounded-full border border-[#E36A6A]/26 bg-white/80 px-6 py-3 text-xs font-semibold uppercase tracking-[0.28em] text-[#E36A6A] transition hover:bg-white">
                        Open Full Contact Page
                    </a>
                </div>

                <div class="order-1 grid grid-cols-1 items-start gap-5 self-start sm:grid-cols-2 lg:order-2">
                    <article class="fabric-card self-start rounded-[1.6rem] p-4">
                        <div class="gold-outline rounded-[1.25rem] bg-white/70 p-2">
                            <img src="{{ asset('images/wechat.png') }}" alt="WeChat QR code" class="aspect-square w-full rounded-xl bg-white object-contain">
                        </div>
                        <p class="mt-4 text-[10px] uppercase tracking-[0.34em] text-[#E36A6A] sm:text-xs">WeChat</p>
                    </article>

                    <article class="fabric-card self-start rounded-[1.6rem] p-4">
                        <div class="gold-outline rounded-[1.25rem] bg-white/70 p-2">
                            <img src="{{ asset('images/whatsapp.png') }}" alt="WhatsApp QR code" class="aspect-square w-full rounded-xl bg-white object-contain">
                        </div>
                        <p class="mt-4 text-[10px] uppercase tracking-[0.34em] text-[#E36A6A] sm:text-xs">WhatsApp</p>
                    </article>
                </div>
            </div>
        </div>
    </div>
</x-layouts.storefront>
