import "./bootstrap";
import Swiper from "swiper";

import { Autoplay, Navigation, Pagination } from "swiper/modules";

import "swiper/css";

import "swiper/css/navigation";

import "swiper/css/pagination";

Swiper.use([Autoplay, Navigation, Pagination]);

document.addEventListener("livewire:navigated", () => {
    const el = document.querySelector(".services-swiper");

    if (!el || el.swiper) return;

    const isMobile = window.innerWidth < 768;

    new Swiper(el, {
        loop: true,
        slidesPerView: "auto",
        spaceBetween: 16,
        speed: 5000,
        autoplay: isMobile
            ? false
            : {
                  delay: 0,
                  disableOnInteraction: false,
                  pauseOnMouseEnter: true,
              },
        preventClicks: false,
        preventClicksPropagation: false,
    });
});

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

// Load Cal script only once better approach because of livewire does only preload html not script
(function (C, A, L) {
    if (C.Cal && C.Cal.loaded) return;

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
                } else {
                    p(cal, ar);
                }

                return;
            }

            p(cal, ar);
        };
})(window, "https://app.cal.com/embed/embed.js", "init");

function initConsultationCal() {
    const bookingDiv = document.getElementById("my-cal-inline-consultation");
    if (!bookingDiv) return;

    // Prevent double-initializing the same container
    if (bookingDiv.dataset.calInitialized === "true") return;

    bookingDiv.dataset.calInitialized = "true";
    bookingDiv.innerHTML = "";

    Cal("init", "consultation", {
        origin: "https://app.cal.com",
    });

    Cal.ns.consultation("inline", {
        elementOrSelector: "#my-cal-inline-consultation",
        config: {
            layout: "month_view",
            useSlotsViewOnSmallScreen: true,
        },
        calLink: "sheyla-solis-qbslzw/consultation",
    });

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
}

document.addEventListener("livewire:navigated", initConsultationCal);

const form = document.getElementById("form");

const success = document.getElementById("success");
console.log(form);

if (form) {
    const submitBtn = form.querySelector('button[type="submit"]');
    form.addEventListener("submit", async (e) => {
        e.preventDefault();

        const formData = new FormData(form);
        const spam = formData.get("spam")?.trim();

        if (spam) {
            return;
        }

        formData.append("access_key", "16c07403-dafb-436d-bff8-9c137f2b2afe");

        const originalText = submitBtn.textContent;

        submitBtn.textContent = "Sending...";
        submitBtn.disabled = true;
        success.textContent = "";

        try {
            const response = await fetch("https://api.web3forms.com/submit", {
                method: "POST",
                body: formData,
            });

            const data = await response.json();

            if (response.ok) {
                success.style.display = "block";
                success.textContent = "Message successful sent!";
                form.reset();
            } else {
                alert("Error: " + data.message);
            }
        } catch (error) {
            alert("Something went wrong. Please try again.");
        } finally {
            submitBtn.textContent = originalText;
            submitBtn.disabled = false;
        }
    });
}
