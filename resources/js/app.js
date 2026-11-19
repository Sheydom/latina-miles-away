import "./bootstrap";
import Swiper from "swiper";

import { Autoplay, Navigation, Pagination } from "swiper/modules";

import "swiper/css";

import "swiper/css/navigation";

import "swiper/css/pagination";
Swiper.use([Autoplay, Navigation, Pagination]);

// Livewire fires "livewire:navigated" on the first page load AND after every
// wire:navigate page change, so all page-specific setup runs from there.

// ---------------------------------------------------------------------------
// Services carousel
// ---------------------------------------------------------------------------
function initServicesSwiper() {
    const el = document.querySelector(".services-swiper");

    if (!el || el.swiper) return;

    new Swiper(el, {
        loop: true,
        slidesPerView: "auto",
        spaceBetween: 16,
        speed: 5000,
        autoplay: {
            delay: 0,
            disableOnInteraction: false,
            pauseOnMouseEnter: true,
        },
        preventClicks: true,
        preventClicksPropagation: true,
    });
}

// ---------------------------------------------------------------------------
// Cal.com (popup buttons + inline booking on the guidance session page)
// ---------------------------------------------------------------------------
const CAL_LINK = "sheyla-solis-qbslzw/consultation";
const CAL_UI = {
    cssVarsPerTheme: {
        light: { "cal-brand": "#34a0a9" },
        dark: { "cal-brand": "#34a0a9" },
    },
    hideEventTypeDetails: false,
    layout: "month_view",
};

// Official Cal.com loader snippet (loaded once).
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

// Buttons with data-cal-link / data-cal-namespace="consultation" open the popup.
Cal("init", "consultation", { origin: "https://app.cal.com" });
Cal.ns.consultation("ui", CAL_UI);

function initConsultationCal() {
    const bookingDiv = document.getElementById("my-cal-inline-consultation");
    if (!bookingDiv || bookingDiv.dataset.calInitialized === "true") return;

    bookingDiv.dataset.calInitialized = "true";
    bookingDiv.innerHTML = "";

    Cal.ns.consultation("inline", {
        elementOrSelector: "#my-cal-inline-consultation",
        config: {
            layout: "month_view",
            useSlotsViewOnSmallScreen: true,
        },
        calLink: CAL_LINK,
    });
}

// ---------------------------------------------------------------------------
// Contact form (sent through Web3Forms)
// ---------------------------------------------------------------------------
const WEB3FORMS_KEY = "16c07403-dafb-436d-bff8-9c137f2b2afe";

function showMessage(el, lines) {
    el.replaceChildren();
    [].concat(lines).forEach((line, i) => {
        if (i > 0) el.appendChild(document.createElement("br"));
        el.appendChild(document.createTextNode(line));
    });
    el.classList.remove("hidden");
}

function initContactForm() {
    const form = document.getElementById("form");
    if (!form || form.dataset.initialized === "true") return;
    form.dataset.initialized = "true";

    const success = document.getElementById("success");
    const error = document.getElementById("error");
    const submitBtn = form.querySelector('button[type="submit"]');

    // Translated texts come from the Blade component (data-messages).
    let msg = {};
    try {
        msg = JSON.parse(form.dataset.messages || "{}");
    } catch (_) {}

    form.addEventListener("submit", async (e) => {
        e.preventDefault();

        const formData = new FormData(form);
        const get = (key) => (formData.get(key) || "").toString().trim();

        // Honeypot: bots fill the hidden field, humans don't.
        if (get("spam")) return;

        const name = get("name");
        const email = get("email");
        const tel = get("phone");
        const country = get("country");
        const message = get("message");
        const errors = [];

        if (name.length < 2 || name.length > 60) errors.push(msg.errorName);
        if (!/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email)) errors.push(msg.errorEmail);
        if (tel !== "" && (tel.length < 6 || tel.length > 20)) errors.push(msg.errorPhone);
        if (country.length < 2 || country.length > 56) errors.push(msg.errorCountry);
        if (message.length < 15 || message.length > 2000) errors.push(msg.errorMessage);

        success.classList.add("hidden");

        if (errors.length > 0) {
            showMessage(error, errors);
            return;
        }

        error.classList.add("hidden");
        formData.append("access_key", WEB3FORMS_KEY);

        const originalText = submitBtn.textContent;
        submitBtn.textContent = msg.sending;
        submitBtn.disabled = true;

        try {
            const response = await fetch("https://api.web3forms.com/submit", {
                method: "POST",
                body: formData,
            });
            const data = await response.json().catch(() => ({}));

            if (response.ok && data.success !== false) {
                track("generate_lead", { form: "contact" });
                showMessage(success, msg.success);
                form.reset();
            } else {
                showMessage(error, msg.errorSend);
            }
        } catch (_) {
            showMessage(error, msg.errorSend);
        } finally {
            submitBtn.textContent = originalText;
            submitBtn.disabled = false;
        }
    });
}

// ---------------------------------------------------------------------------
// Conversion tracking (Google Analytics 4 events)
// ---------------------------------------------------------------------------
// Events: booking_open, booking_completed, generate_lead (contact form),
// whatsapp_click, guide_download, free_guides_click.
// Mark booking_completed, generate_lead and whatsapp_click as "key events"
// in Google Analytics (Admin → Events) to see them as conversions.
function track(name, params = {}) {
    if (typeof window.gtag !== "function") return;
    window.gtag("event", name, {
        page_path: location.pathname,
        language: document.documentElement.lang,
        ...params,
    });
}

// One listener for the whole page: keeps working after wire:navigate.
document.addEventListener("click", (e) => {
    const el = e.target.closest("a, button");
    if (!el) return;

    if (el.matches("[data-cal-link]")) {
        track("booking_open", { location: el.dataset.trackLocation || "page" });
        return;
    }

    const href = el.getAttribute("href") || "";

    if (href.startsWith("https://wa.me/")) {
        track("whatsapp_click", { location: el.dataset.trackLocation || "page" });
    } else if (/\.pdf($|\?)/i.test(href)) {
        track("guide_download", { file_name: href.split("/").pop().split("?")[0] });
    } else if (el.dataset.track) {
        track(el.dataset.track);
    }
});

// Cal.com tells the page when a booking is finished. Both event versions are
// listened to (Cal.com renamed it), so only count one per booking.
let lastBookingTracked = 0;
function onBookingSuccessful() {
    if (Date.now() - lastBookingTracked < 10000) return;
    lastBookingTracked = Date.now();
    track("booking_completed");
}
Cal.ns.consultation("on", { action: "bookingSuccessfulV2", callback: onBookingSuccessful });
Cal.ns.consultation("on", { action: "bookingSuccessful", callback: onBookingSuccessful });

// ---------------------------------------------------------------------------
document.addEventListener("livewire:navigated", () => {
    initServicesSwiper();
    initConsultationCal();
    initContactForm();
});
