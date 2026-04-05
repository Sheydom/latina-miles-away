<nav class="flex bg-soft px-2.5 sticky top-0 z-50 md:px-10">
    <div class="flex w-full md:justify-between">
        <div class="flex gap-5  items-center md:w-full ">
            <a class="cursor-pointer" href="{{ route('home') }}">
                <img class="w-15 h-15 sm:w-15 sm:h-15 shrink-0  overflow-hidden"
                    src="{{ Vite::asset('resources/images/lma.svg') }}" alt="Latina Miles Away Logo">
            </a>
            {{-- <svg class="w-10 h-10 shrink-0 "xmlns="http://www.w3.org/2000/svg"
                viewBox="0 0 448 512"><!--!Font Awesome Free v7.2.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2026 Fonticons, Inc.-->
                <path
                    d="M0 96C0 78.3 14.3 64 32 64l384 0c17.7 0 32 14.3 32 32s-14.3 32-32 32L32 128C14.3 128 0 113.7 0 96zM0 256c0-17.7 14.3-32 32-32l384 0c17.7 0 32 14.3 32 32s-14.3 32-32 32L32 288c-17.7 0-32-14.3-32-32zM448 416c0 17.7-14.3 32-32 32L32 448c-17.7 0-32-14.3-32-32s14.3-32 32-32l384 0c17.7 0 32 14.3 32 32z" />
            </svg> --}}
            <p class="hidden md:block">Latina Miles Away</p>

            <!-- Cal element-click embed code begins -->
            <script type="text/javascript">
                (function(C, A, L) {
                    let p = function(a, ar) {
                        a.q.push(ar);
                    };
                    let d = C.document;
                    C.Cal = C.Cal || function() {
                        let cal = C.Cal;
                        let ar = arguments;
                        if (!cal.loaded) {
                            cal.ns = {};
                            cal.q = cal.q || [];
                            d.head.appendChild(d.createElement("script")).src = A;
                            cal.loaded = true;
                        }
                        if (ar[0] === L) {
                            const api = function() {
                                p(api, arguments);
                            };
                            const namespace = ar[1];
                            api.q = api.q || [];
                            if (typeof namespace === "string") {
                                cal.ns[namespace] = cal.ns[namespace] || api;
                                p(cal.ns[namespace], ar);
                                p(cal, ["initNamespace", namespace]);
                            } else p(cal, ar);
                            return;
                        }
                        p(cal, ar);
                    };
                })(window, "https://app.cal.com/embed/embed.js", "init");
                Cal("init", "consultation", {
                    origin: "https://app.cal.com"
                });


                // Important: Please add the following attributes to the element that should trigger the calendar to open upon clicking.
                // `data-cal-link="sheyla-solis-qbslzw/consultation"`
                // data-cal-namespace="consultation"
                // `data-cal-config='{"layout":"month_view","useSlotsViewOnSmallScreen":"true"}'`



                Cal.ns.consultation("ui", {
                    "cssVarsPerTheme": {
                        "light": {
                            "cal-brand": "#34a0a9"
                        },
                        "dark": {
                            "cal-brand": "#34a0a9"
                        }
                    },
                    "hideEventTypeDetails": false,
                    "layout": "month_view"
                });
            </script>
            <!-- Cal element-click embed code ends -->
            @if (request()->routeIs('legal.*') || request()->routeIs('contact'))
                <a href="{{ route('home') }}"
                    class="flex mr-5 cursor-pointer rounded-2xl p-1 text-primary items-center  hover:bg-primary-light group hover:text-white transition duration-500 ease-in-out">
                    <svg class="h-5 w-5 shrink-0 text-primary group-hover:text-white transition duration-500 ease-in-out"
                        xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 640 640"><!--!Font Awesome Free v7.2.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2026 Fonticons, Inc.-->
                        <path fill="currentColor"
                            d="M341.8 72.6C329.5 61.2 310.5 61.2 298.3 72.6L74.3 280.6C64.7 289.6 61.5 303.5 66.3 315.7C71.1 327.9 82.8 336 96 336L112 336L112 512C112 547.3 140.7 576 176 576L464 576C499.3 576 528 547.3 528 512L528 336L544 336C557.2 336 569 327.9 573.8 315.7C578.6 303.5 575.4 289.5 565.8 280.6L341.8 72.6zM264 320C264 289.1 289.1 264 320 264C350.9 264 376 289.1 376 320C376 350.9 350.9 376 320 376C289.1 376 264 350.9 264 320zM208 496C208 451.8 243.8 416 288 416L352 416C396.2 416 432 451.8 432 496C432 504.8 424.8 512 416 512L224 512C215.2 512 208 504.8 208 496z" />
                    </svg>
                    <p>HOME</p>
                </a>
            @endif
            {{-- Now</button><button
                class="cursor-pointer p-1 rounded-xl border border-primary text-primary hover:text-white hover:bg-primary transition duration-200 ease-in-out">Ressources</button> --}}
        </div>

        <div class="flex items-center gap-1">
            <button class="text-primary hover:bg-primary rounded-2xl p-1 cursor-pointer transition duration-200 ease-in-out hover:text-white hidden md:block">Ressources</button>
            <button data-cal-link="sheyla-solis-qbslzw/consultation"
                data-cal-namespace="consultation"
                data-cal-config='{"layout":"month_view","useSlotsViewOnSmallScreen":true}'
                class="cursor-pointer p-1 rounded-xl 
          font-semibold text-white
          bg-linear-to-r 
          from-[#34A0A9] to-[#4CC9D4]
          shadow-[0_6px_16px_rgba(52,160,169,0.35)]
          hover:shadow-[0_8px_20px_rgba(52,160,169,0.5)]
          hover:scale-[1.02]
          transition duration-200">Enquire</button>
            {{-- <svg class="w-5 h-5 shrink-0 hidden" xmlns="http://www.w3.org/2000/svg"
                viewBox="0 0 512 512"><!--!Font Awesome Free v7.2.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2026 Fonticons, Inc.-->
                <path
                    d="M351.9 280l-190.9 0c2.9 64.5 17.2 123.9 37.5 167.4 11.4 24.5 23.7 41.8 35.1 52.4 11.2 10.5 18.9 12.2 22.9 12.2s11.7-1.7 22.9-12.2c11.4-10.6 23.7-28 35.1-52.4 20.3-43.5 34.6-102.9 37.5-167.4zM160.9 232l190.9 0C349 167.5 334.7 108.1 314.4 64.6 303 40.2 290.7 22.8 279.3 12.2 268.1 1.7 260.4 0 256.4 0s-11.7 1.7-22.9 12.2c-11.4 10.6-23.7 28-35.1 52.4-20.3 43.5-34.6 102.9-37.5 167.4zm-48 0C116.4 146.4 138.5 66.9 170.8 14.7 78.7 47.3 10.9 131.2 1.5 232l111.4 0zM1.5 280c9.4 100.8 77.2 184.7 169.3 217.3-32.3-52.2-54.4-131.7-57.9-217.3L1.5 280zm398.4 0c-3.5 85.6-25.6 165.1-57.9 217.3 92.1-32.7 159.9-116.5 169.3-217.3l-111.4 0zm111.4-48C501.9 131.2 434.1 47.3 342 14.7 374.3 66.9 396.4 146.4 399.9 232l111.4 0z" />
            </svg> --}}

            {{-- <button type="button" class="cursor-pointer">ES|EN</button> --}}

        </div>
    </div>
</nav>
