<section class="">
    <div class="mx-auto max-w-5xl sm:px-4">
        <div class="mb-8">
            {{-- <p class="mb-2 text-sm font-semibold uppercase tracking-widest text-primary">
                Contact
            </p> --}}
            <h2 class="text-xl font-bold text-black">
                {{ __('contactForm.title') }}
            </h2>
            <p class="mt-2 max-w-2xl text-gray-900">
                {{ __('contactForm.titleP') }}
            </p>

        </div>

        <form id="form"
            class="grid gap-6 rounded-3xl border border-gray-200 bg-white p-6 shadow-xl md:grid-cols-2 lg:grid-cols-[300px_1fr] xl:grid-cols-[300px_400px]">

            <div class="space-y-5">
                <p id="success" class="text-green-500 hidden"></p>
                <div>
                    {{-- honeypot --}}
                    <input class="hidden" type="text" name="spam">
                    <label class="mb-2 block text-sm font-medium text-gray-700" for="name">
                        {{ __('contactForm.name') }} <span class="text-red-500">*</span>
                    </label>
                    <input
                        class="w-full rounded-xl border border-gray-200 bg-gray-50 px-4 py-3 outline-none transition focus:border-primary focus:bg-white focus:shadow-[0_0_0_4px_rgba(0,245,255,0.15)]"
                        placeholder="John Smith" id="name" name="name" type="text" required minlength="3"
                        maxlength="20">
                </div>

                <div>
                    <label class="mb-2 block text-sm font-medium text-gray-700" for="email">
                        {{ __('contactForm.email') }} <span class="text-red-500">*</span>
                    </label>
                    <input
                        class="w-full rounded-xl border border-gray-200 bg-gray-50 px-4 py-3 outline-none transition focus:border-primary focus:bg-white focus:shadow-[0_0_0_4px_rgba(0,245,255,0.15)]"
                        placeholder="john.smith@gmail.com" id="email" required name="email" type="email">
                </div>

                <div>
                    <label class="mb-2 block text-sm font-medium text-gray-700" for="phone">
                        {{ __('contactForm.phone') }}
                    </label>
                    <input
                        class="w-full rounded-xl border border-gray-200 bg-gray-50 px-4 py-3 outline-none transition focus:border-primary focus:bg-white focus:shadow-[0_0_0_4px_rgba(0,245,255,0.15)]"
                        placeholder="+61 416 334 712" id="phone" name="phone" type="tel" minlength="6"
                        maxlength="20">
                </div>

                <div>
                    <label class="mb-2 block text-sm font-medium text-gray-700" for="country">
                        {{ __('contactForm.country') }} <span class="text-red-500">*</span>
                    </label>
                    <input
                        class="w-full rounded-xl border border-gray-200 bg-gray-50 px-4 py-3 outline-none transition focus:border-primary focus:bg-white focus:shadow-[0_0_0_4px_rgba(0,245,255,0.15)]"
                        placeholder="Peru" id="country" name="country" type="text" required minlength="3"
                        maxlength="20">
                </div>
            </div>

            <div class="flex flex-col">
                <label class="mb-2 block text-sm font-medium text-gray-700" for="message">
                    {{ __('contactForm.message') }} <span class="text-red-500">*</span>
                </label>

                <textarea
                    class="max-h-40 sm:min-h-65 flex-1 resize-none rounded-xl border border-gray-200 bg-gray-50 px-4 py-3 outline-none transition focus:border-primary focus:bg-white focus:shadow-[0_0_0_4px_rgba(0,245,255,0.15)]"
                    placeholder="Write here..." id="message" name="message" rows="10" required minlength="15" maxlength="255"></textarea>

                <button type="submit"
                    class="mt-5 rounded-xl cursor-pointer bg-black px-6 py-4 font-semibold text-white transition hover:-translate-y-0.5 hover:bg-gray-800 hover:shadow-lg">
                    {{ __('contactForm.submit') }}
                </button>
            </div>
        </form>
    </div>
</section>
