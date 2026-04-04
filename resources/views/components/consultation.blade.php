<section class="w-full">
    <div class="bg-white rounded-2xl shadow-md border border-neutral-200 p-6 mb-6">

        <h3 class="text-lg font-semibold mb-4">
            What to expect during your consultation
        </h3>

        <ul class="space-y-2 text-neutral-700">

            <li>✔ Review your current situation and available information</li>

            <li>✔ Discuss general visa pathways using publicly available information</li>

            <li>✔ Explain general requirements, costs, and expected timelines</li>

            <li>✔ Answer your questions clearly</li>

            <li>✔ Provide general next steps to help you understand your options</li>

        </ul>

        <p class="mt-4 text-sm text-neutral-600">
            This consultation is ideal if you are looking for detailed guidance and personalised advice.
        </p>
    </div>



    <div class="text-center mt-6 mb-6">

        <p class="text-sm text-neutral-600">

            Have a quick question before booking?
            Send us a quick email <br>
            For full guidance, please book a consultation.

        </p>

        <a href="mailto:info@latinamilesaway.com"
            class="inline-block px-5 py-2 rounded-xl
       bg-primary text-white font-semibold
       hover:opacity-90 transition">
            Send us a quick email
        </a>

        <p class="text-xs text-neutral-500 mt-2">

            For full guidance, please book a consultation.

        </p>

    </div>



    <!-- Cal inline embed code begins -->

    <div style="height:100%; width:100%;-webkit-overflow-scrolling: touch; " id="my-cal-inline-consultation"></div>
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

        Cal.ns.consultation("inline", {
            elementOrSelector: "#my-cal-inline-consultation",
            config: {
                "layout": "month_view",
                "useSlotsViewOnSmallScreen": "true"
            },
            calLink: "sheyla-solis-qbslzw/consultation",
        });

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
    <!-- Cal inline embed code ends -->
</section>
