import "./bootstrap";

document.addEventListener("DOMContentLoaded", () => {
    const openBtn = document.getElementById("openCertModal");
    const closeBtnX = document.getElementById("closeCertModalX");
    const modal = document.getElementById("certModal");
    const image = document.getElementById("certImage");

    if (!openBtn || !image || !modal) {
        console.log("One or more elements not found");
        return;
    }

    openBtn.addEventListener("click", () => {
        console.log("Open button clicked");
        modal.style.display = "flex";
    });

    closeBtnX.addEventListener("click", () => {
        console.log("Close button clicked");
        modal.style.display = "none";
    });

    modal.addEventListener("click", (e) => {
        if (e.target === modal) {
            console.log("Modal background clicked");
            modal.style.display = "none";
        }
    });
    image.addEventListener("click", () => {
        modal.style.display = "none";
    });
    document.addEventListener("keydown", (e) => {
        if (e.key === "Escape") {
            modal.style.display = "none";
        }
    });
});

// calendar script for buttons

(function (C, A, L) {
    let p = function (a, ar) {
        a.q.push(ar);
    };
    let d = C.document;
    C.Cal =
        C.Cal ||
        function () {
            let cal = C.Cal;
            let ar = arguments;
            if (!cal.loaded) {
                cal.ns = {};
                cal.q = cal.q || [];
                d.head.appendChild(d.createElement("script")).src = A;
                cal.loaded = true;
            }
            if (ar[0] === L) {
                const api = function () {
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
    origin: "https://app.cal.com",
});
// Important: Please add the following attributes to the element that should trigger the calendar to open upon clicking.
// `data-cal-link="sheyla-solis-qbslzw/consultation"`
// data-cal-namespace="consultation"
// `data-cal-config='{"layout":"month_view","useSlotsViewOnSmallScreen":"true"}'`
Cal.ns.consultation("ui", {
    cssVarsPerTheme: {
        light: {
            "cal-brand": "#34a0a9",
        },
        dark: {
            "cal-brand": "#34a0a9",
        },
    },
    hideEventTypeDetails: false,
    layout: "month_view",
});

// calendar script for imbedded
document.addEventListener("DOMContentLoaded", () => {
    const bookingDiv = document.getElementById("my-cal-inline-consultation");
    if (!bookingDiv) return;
    (function (C, A, L) {
        let p = function (a, ar) {
            a.q.push(ar);
        };
        let d = C.document;
        C.Cal =
            C.Cal ||
            function () {
                let cal = C.Cal;
                let ar = arguments;
                if (!cal.loaded) {
                    cal.ns = {};
                    cal.q = cal.q || [];
                    d.head.appendChild(d.createElement("script")).src = A;
                    cal.loaded = true;
                }
                if (ar[0] === L) {
                    const api = function () {
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
        origin: "https://app.cal.com",
    });

    Cal.ns.consultation("inline", {
        elementOrSelector: "#my-cal-inline-consultation",
        config: {
            layout: "month_view",
            useSlotsViewOnSmallScreen: "true",
        },
        calLink: "sheyla-solis-qbslzw/consultation",
    });

    Cal.ns.consultation("ui", {
        cssVarsPerTheme: {
            light: {
                "cal-brand": "#cd7f4a",
            },
            dark: {
                "cal-brand": "#cd7f4a",
            },
        },
        hideEventTypeDetails: false,
        layout: "month_view",
    });
});
