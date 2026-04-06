import "./bootstrap";

console.log("hi");

document.addEventListener("DOMContentLoaded", () => {
    const openBtn = document.getElementById("openCertModal");
    const closeBtn = document.getElementById("closeCertModal");
    const closeBtnX = document.getElementById("closeCertModalx");
    const modal = document.getElementById("certModal");

    console.log("openBtn:", openBtn);
    console.log("closeBtn:", closeBtn);
    console.log("modal:", modal);

    if (!openBtn || !closeBtn || !modal) {
        console.log("One or more elements not found");
        return;
    }

    openBtn.addEventListener("click", () => {
        console.log("Open button clicked");
        modal.style.display = "flex";
    });

    closeBtn.addEventListener("click", () => {
        console.log("Close button clicked");
        modal.style.display = "none";
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
});

// calendar script

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
