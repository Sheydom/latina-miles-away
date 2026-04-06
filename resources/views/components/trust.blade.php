<section class="mb-10 flex flex-col items-center w-full p-2.5">
    <div class="flex flex-col items-center md:flex-row md:gap-1  ">
        <img src="{{ Vite::asset('resources/images/profile.jpg') }}" alt="profilepicture"
            class="h-auto w-[85vw] max-w-90 mb-6  rounded-3xl object-cover md:max-w-[25vw]">
        <div class="md:flex md:flex-col md:p-5 md:max-w-150 ">
            <div class="flex flex-col p-2">
                <div class="text-center md:text-left mb-2">
                    <h2 class="text-black md:text-[clamp(2rem,4vw,3rem)] md:mb-5 "><span
                            class="underline decoration-tertiary">I've Been</span> in your Shoes</h2>
                </div>
                <p class="leading-relaxed">Originally trained and <button type="button" id="openCertModal"
                        class="bg-white/80  rounded-full px-2 cursor-pointer underline md:hover:border-primary-light border border-transparent md:hover:border hover:text-white hover:bg-primary">qualified</button>
                    as <strong> Lawyer from Peru</strong>, i arrived in
                    Australia with
                    the
                    same dreams and
                    uncertainties you might be feeling today. My path to residency wasn't a straight line-it was a
                    journey of
                    {{-- resilience. <button id="openCertModal" type="button"
                        class="group 
                   max-w-xs 
                   md:w-max
                   p-1
                   rounded-2xl 
                   overflow-hidden 
                   bg-white 
                   shadow-md 
                   border border-neutral-200 
                   hover:shadow-lg 
                   transition cursor-pointer">
                        <div class=" text-xs md:text-xs text-neutral-300 group-hover:text-black transition">
                            See License
                        </div>

                    </button></p> --}}
            </div>
            <div
                class="mt-6 mb-6 border-l-tertiary border-l-3 md:border-l-4 w-full rounded-2xl p-5 bg-gray-100 md:w-max">
                <h3 class="text-black">MY AUSTRALIAN PATH:</h3>
                <p class="text-sm">Student -> COVID Hardship -> Working Holiday<br> -> Sponsorship -> Permanent
                    Residency</p>
            </div>
            {{-- <div class="flex gap-3 mb-6 items-center text-left justify-center w-full">
                <div class="bg-primary rounded-2xl  p-2">
                    <svg class="w-4 h-4 shrink-0 " xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 640 640"><!--!Font Awesome Free v7.2.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2026 Fonticons, Inc.-->
                        <path fill="white"
                            d="M300.9 149.2L184.3 278.8C179.7 283.9 179.9 291.8 184.8 296.7C215.3 327.2 264.8 327.2 295.3 296.7L327.1 264.9C331.3 260.7 336.6 258.4 342 258C348.8 257.4 355.8 259.7 361 264.9L537.6 440L608 384L608 96L496 160L472.2 144.1C456.4 133.6 437.9 128 418.9 128L348.5 128C347.4 128 346.2 128 345.1 128.1C328.2 129 312.3 136.6 300.9 149.2zM148.6 246.7L255.4 128L215.8 128C190.3 128 165.9 138.1 147.9 156.1L144 160L32 96L32 384L188.4 514.3C211.4 533.5 240.4 544 270.3 544L286 544L279 537C269.6 527.6 269.6 512.4 279 503.1C288.4 493.8 303.6 493.7 312.9 503.1L353.9 544.1L362.9 544.1C382 544.1 400.7 539.8 417.7 531.8L391 505C381.6 495.6 381.6 480.4 391 471.1C400.4 461.8 415.6 461.7 424.9 471.1L456.9 503.1L474.4 485.6C483.3 476.7 485.9 463.8 482 452.5L344.1 315.7L329.2 330.6C279.9 379.9 200.1 379.9 150.8 330.6C127.8 307.6 126.9 270.7 148.6 246.6z" />
                    </svg>
                </div>
                <p class="text-sm"><strong>Experience meet Empathy.</strong></p>
            </div> --}}
            <div class="flex flex-col p-2">
                <p class="leading-relaxed">
                    I started Latina Miles Away because i've been in your sheos. Today, as a <strong> Migration Support
                        Consultant
                        and future
                        registered Migration Agent </strong>, I combine legal training with deep empathy. I succesfully
                    traveled
                    this
                    path, and now I'm here to support you on your journey.
                </p>
            </div>
        </div>
    </div>


    <div id="certModal"
        class="fixed inset-0 z-50 hidden 
            items-center justify-center 
            bg-black/70 
            p-3 md:p-6">

        <div class="relative w-full max-w-5xl">

            <!-- Close Button -->
            <button id="closeCertModalx" type="button"
                class="absolute 
                   top-2 right-2 
                   md:-top-10 md:right-0
                   text-white 
                   text-2xl md:text-3xl
                   bg-black/50 
                   rounded-full 
                   w-10 h-10 
                   flex items-center justify-center
                   hover:bg-black/70 
                   transition cursor-pointer">
                ✕
            </button>

            <!-- Certificate -->
            <img id="closeCertModal" src="{{ Vite::asset('resources/images/lawyer.png') }}"
                alt="Law degree certificate full size"
                class="w-full 
                   max-h-[85vh] 
                   object-contain 
                   rounded-xl 
                   bg-white shadow-lg cursor-pointer">

        </div>

    </div>
</section>
