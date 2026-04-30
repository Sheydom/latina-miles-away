@php
    $metaDescription = __('startHere.pageHeader.pageTitleParagraph');
    $metaTitle = __('startHere.pageHeader.pageTitle');
    $ogTitle = $metaTitle;
    $ogDescription = $metaDescription;
    $ogImage = asset('images/lmaLogo.PNG');
    $ogUrl = 'https://latinamilesaway.com/free-guides';
@endphp

<x-layout.app :metaTitle="$metaTitle" :metaDescription="$metaDescription" :ogTitle="$ogTitle" :ogDescription="$ogDescription" :ogImage="$ogImage"
    :ogUrl="$ogUrl">
    <section class="w-full bg-linear-to-b from-primary to-[#EAEFEF] py-10 md:py-16 px-4">
        <div class="max-w-6xl mx-auto">

            {{-- Intro --}}
            <div class="max-w-3xl mx-auto text-center mb-10 md:mb-14 bg-white p-4 rounded-2xl">
                <span class="inline-block px-4 py-1.5 text-sm font-medium rounded-full bg-primary/10 text-primary mb-4">
                    {{ __('startHere.pageHeader.freeBadge') }}
                </span>

                <h1 class="text-3xl md:text-4xl font-bold tracking-tight text-neutral-900 mb-4">
                    {{ __('startHere.pageHeader.pageTitle') }}
                </h1>

                <p class="text-base md:text-lg text-neutral-700 ">
                    {{ __('startHere.pageHeader.pageTitleParagraph') }}
                </p>
            </div>

            {{-- Guide cards --}}
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 lg:gap-8">

                {{-- Card 1 --}}
                <article class="bg-white rounded-3xl shadow-sm border border-neutral-200 overflow-hidden flex flex-col">
                    <div class="p-6 md:p-8 flex flex-col gap-5 grow">
                        <div>
                            <span
                                class="inline-block px-3 py-1 text-xs font-semibold rounded-full bg-primary/10 text-primary mb-3">
                                {{ __('startHere.arrivalGuide.arrivalBadge') }}
                            </span>

                            <h2 class="text-2xl font-bold text-neutral-900 mb-2">
                                {{ __('startHere.arrivalGuide.arrivalHeader') }}
                            </h2>

                            <p class="text-neutral-700 ">
                                {{ __('startHere.arrivalGuide.arrivalHeaderParagraph') }}
                            </p>
                        </div>

                        <div class="rounded-2xl overflow-hidden border border-neutral-200 bg-neutral-50">
                            <iframe class="hidden md:block h-105 w-full md:h-140"
                                src="{{ asset('downloads/checklist7days-web.pdf') }}" loading="lazy">
                            </iframe>

                            <img class="block md:hidden w-full h-auto"
                                src="{{ asset('images/checklistGuideScreenshot.png') }}"
                                alt="Preview of the 7 days checklist guide">
                        </div>

                        <div class="flex flex-col sm:flex-row gap-3 mt-auto">
                            <a class="inline-flex justify-center items-center px-5 py-3 rounded-xl border border-primary text-primary font-semibold transition duration-200 hover:-translate-y-1 hover:opacity-90"
                                href="{{ asset('downloads/checklist7days-web.pdf') }}" target="_blank" rel="noopener">
                                {{ __('startHere.arrivalGuide.previewButton') }}
                            </a>

                            <a class="inline-flex justify-center items-center px-5 py-3 rounded-xl bg-primary text-white font-semibold transition duration-200 hover:-translate-y-1 hover:opacity-90"
                                href="{{ asset('downloads/checklist7days-web.pdf') }}" download>
                                {{ __('startHere.arrivalGuide.downloadButton') }}
                            </a>
                        </div>
                    </div>
                </article>

                {{-- Card 2 --}}
                <article class="bg-white rounded-3xl shadow-sm border border-neutral-200 overflow-hidden flex flex-col">
                    <div class="p-6 md:p-8 flex flex-col gap-5 grow">
                        <div>
                            <span
                                class="inline-block px-3 py-1 text-xs font-semibold rounded-full bg-primary/10 text-primary mb-3">
                                {{ __('startHere.workGuide.workBadge') }}
                            </span>

                            <h2 class="text-2xl font-bold text-neutral-900 mb-2">
                                {{ __('startHere.workGuide.workHeader') }}
                            </h2>

                            <p class="text-neutral-700 ">
                                {{ __('startHere.workGuide.workHeaderParagraph') }}
                            </p>
                        </div>

                        <div class="rounded-2xl overflow-hidden border border-neutral-200 bg-neutral-50">
                            <iframe class="hidden md:block h-105 w-full md:h-140"
                                src="{{ asset('downloads/encontrarTrabajoGuide-web.pdf') }}" loading="lazy">
                            </iframe>

                            <img class="block md:hidden w-full h-auto"
                                src="{{ asset('images/trabajoGuideScreenshot.png') }}"
                                alt="Preview of the Encontrar Trabajo guide">
                        </div>

                        <div class="flex flex-col sm:flex-row gap-3 mt-auto">
                            <a class="inline-flex justify-center items-center px-5 py-3 rounded-xl border border-primary text-primary font-semibold transition duration-200 hover:-translate-y-1 hover:opacity-90"
                                href="{{ asset('downloads/encontrarTrabajoGuide-web.pdf') }}" target="_blank"
                                rel="noopener">
                                {{ __('startHere.workGuide.previewButton') }}
                            </a>

                            <a class="inline-flex justify-center items-center px-5 py-3 rounded-xl bg-primary text-white font-semibold transition duration-200 hover:-translate-y-1 hover:opacity-90"
                                href="{{ asset('downloads/encontrarTrabajoGuide-web.pdf') }}" download>
                                {{ __('startHere.workGuide.downloadButton') }}
                            </a>
                        </div>
                    </div>
                </article>

            </div>
        </div>
    </section>
</x-layout.app>
