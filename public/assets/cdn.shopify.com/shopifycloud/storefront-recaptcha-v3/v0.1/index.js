! function() {
    "use strict";
    window.Shopify = window.Shopify || {}, window.Shopify.recaptchaV3 = window.Shopify.recaptchaV3 || { siteKey: "" }, window.Shopify.recaptchaV3.hideBadge = function() {
        if (null === document.querySelector("p[data-spam-detection-disclaimer]")) return;
        const e = document.createElement("style");
        document.head.appendChild(e);
        e.sheet.insertRule(".grecaptcha-badge { visibility: hidden; }")
    }, window.Shopify.recaptchaV3.initialize = function(e, t, c) {
        grecaptcha.execute(window.Shopify.recaptchaV3.siteKey, { action: t }).then((function(e) {
            document.querySelectorAll(`form[action^="${t}"]`).forEach((function(t) {
                if (null !== t.querySelector(`input[name="form_type"][value="${c}"]`)) {
                    var i = t.querySelector("input[name=recaptcha-v3-token]");
                    i instanceof HTMLElement ? i.setAttribute("value", e) : ((i = document.createElement("input")).setAttribute("name", "recaptcha-v3-token"), i.setAttribute("type", "hidden"), i.setAttribute("value", e), t.appendChild(i, t))
                }
            }))
        }))
    }, window.storefrontContactFormsRecaptchaCallback = function() { window.Shopify.callbackForms && window.Shopify.callbackForms.forEach(e => { window.Shopify.recaptchaV3.initialize(e.action, e.form_action, e.form_type) }), window.Shopify.recaptchaV3.hideBadge() };
    const e = document.createElement("script");
    e.setAttribute("src", "https://www.recaptcha.net/recaptcha/api.js?onload=storefrontContactFormsRecaptchaCallback&render=" + window.Shopify.recaptchaV3.siteKey + "&hl=en"), document.body.appendChild(e)
}();
//# sourceMappingURL=index.js.map