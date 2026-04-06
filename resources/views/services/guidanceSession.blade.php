<x-layout.app>
    <section class="w-full text-center flex flex-col items-center">
        <div class="w-full bg-primary p-2.5 md:p-15 md:grid md:grid-cols-2">
            <div
                class="w-full mx-auto  bg-white rounded-tl-2xl rounded-tr-2xl text-left md:text-left md:rounded-tr-none md:rounded-bl-2xl shadow-md p-6 md:p-25">
                <!-- Title -->
                <h2 class="text-xl md:text-3xl font-semibold text-center md:text-left mb-2">
                    1:1 Guidance Session
                </h2>
                <p class="text-sm md:text-base text-neutral-500 text-center md:text-left mb-6">
                    Clarity, direction, and real-world guidance for your migration journey.
                </p>
                <!-- Who it's for -->
                <div class="mb-5">
                    <h3 class="font-semibold text-lg md:text-2xl mb-2 text-primary">
                        Who it's for
                    </h3>
                    <p class="text-sm md:text-base text-neutral-700">
                        If you're planning to move to Australia or already here and feel unsure about your next steps.
                    </p>
                </div>
                <!-- What we talk about -->
                <div class="mb-5">
                    <h3 class="font-semibold text-lg md:text-2xl mb-2 text-primary">
                        What we can talk about
                    </h3>
                    <ul class="space-y-2 text-sm md:text-base text-neutral-700">
                        <li>• Your visa pathway (based on real experience)</li>
                        <li>• What documents you may need</li>
                        <li>• How to prepare your application process</li>
                        <li>• Job and settlement strategies</li>
                        <li>• How to avoid common mistakes</li>
                    </ul>
                </div>

                <!-- What you get -->
                <div class="mb-6">
                    <h3 class="font-semibold text-lg md:text-2xl mb-2 text-primary">
                        What you get
                    </h3>
                    <ul class="space-y-2 text-sm md:text-base text-neutral-700">
                        <li>• Personalised guidance</li>
                        <li>• Clear next steps</li>
                        <li>• Honest insights based on real situations</li>
                    </ul>
                </div>
                <!-- Final trust line -->
                <p class="text-sm md:text-base text-neutral-600 italic text-center">
                    “This session is designed to give you clarity and direction — so you don’t waste time, money, or
                    make
                    unnecessary mistakes.”
                </p>
            </div>
            <div class="w-full bg-white md:rounded-r-2xl md:flex md:flex-col md:items-center md:p-25 ">
                <div class=""><img class="md:rounded-2xl md:max-h-100"
                        src="{{ Vite::asset('resources/images/profile.jpg') }}" alt="profilePhoto">
                </div>
                <div class="bg-white rounded-br-2xl rounded-bl-2xl md:rounded-bl-none">
                    <!-- Experience -->
                    <div class="mb-5  p-5 md:text-left">
                        <h3 class="font-semibold text-lg md:text-2xl mb-2 text-primary">
                            My experience
                        </h3>
                        <ul class="space-y-2 flex justify-around text-left text-sm md:text-base text-neutral-700">
                            <div>
                                <li>• Student visa</li>
                                <li>• COVID visa (408)</li>
                            </div>
                            <div>
                                <li>• Partner sponsorship</li>
                                <li>• Permanent Residency</li>
                            </div>
                        </ul>
                        <p class="text-sm text-center md:text-base text-neutral-600 mt-2">
                            I understand the process <br md:hidden> from real experience — not theory.
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <div class="text-center mt-6 mb-6">

            <p class="text-sm text-neutral-600 mb-2">

                Have a quick question before booking?<br>
                Send us a quick email

            </p>

            <a href="mailto:latinamilesaway@gmail.com"
                class="cursor-pointer inline-block px-5 py-2 rounded-xl
       bg-primary text-white font-semibold
       hover:opacity-90 transition hover:-translate-y-1 duration-200 ease-in-out">
                Send us a quick email
            </a>

            <p class="text-xs text-neutral-500">

                For full guidance, please book a consultation.

            </p>

        </div>



        <!-- Cal inline embed code begins -->
        <div style="height:100%; width:100%;-webkit-overflow-scrolling: touch; " id="my-cal-inline-consultation"></div>
        <!-- Cal inline embed code ends -->
    </section>

</x-layout.app>
