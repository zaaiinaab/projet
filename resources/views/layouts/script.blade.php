<script src="assets/code.jquery.com/jquery-3.2.1.min.js"></script>
<script src="assets/ajax.googleapis.com/ajax/libs/jquery/1.8.1/jquery.min.js"></script>
<script src="assets/cdn.shopify.com/s/files/1/0437/0454/9536/t/26/assets/header6070.js?v=10373096426439681222"
    type="text/javascript"></script>

<script
    src="assets/cdn.shopify.com/shopifycloud/shopify/assets/themes_support/shopify_common-8ea6ac3faf357236a97f5de749df4da6e8436ca107bc3a4ee805cbf08bc47392.js"
    type="text/javascript"></script>


<!-- Header hook for plugins ================================================== -->
<script>
    window.performance && window.performance.mark && window.performance.mark('shopify.content_for_header.start');

</script>
<meta id="shopify-digital-wallet" name="shopify-digital-wallet" content="/43704549536/digital_wallets/dialog">
<link href="https://monorail-edge.shopifysvc.com/" rel="dns-prefetch">
<script id="shopify-features" type="application/json">
    {
        "accessToken": "6cabd676046fd2a33edce4a036caa1f2",
        "betas": ["rich-media-storefront-analytics"],
        "domain": "boom-theme.myshopify.com",
        "predictiveSearch": true,
        "shopId": 43704549536,
        "smart_payment_buttons_url": "https:\/\/cdn.shopify.com\/shopifycloud\/payment-sheet\/assets\/latest\/spb.en.js",
        "dynamic_checkout_cart_url": "https:\/\/cdn.shopify.com\/shopifycloud\/payment-sheet\/assets\/latest\/dynamic-checkout-cart.en.js",
        "locale": "en"
    }

</script>
<script>
    (function() {
        if ("sendBeacon" in navigator && "performance" in window) {
            var session_token = document.cookie.match(/_shopify_s=([^;]*)/);

            function handle_abandonment_event(e) {
                var entries = performance.getEntries().filter(function(entry) {
                    return /monorail-edge.shopifysvc.com/.test(entry.name);
                });
                if (!window.abandonment_tracked && entries.length === 0) {
                    window.abandonment_tracked = true;
                    var currentMs = Date.now();
                    var navigation_start = performance.timing.navigationStart;
                    var payload = {
                        shop_id: 43704549536,
                        url: window.location.href,
                        navigation_start,
                        duration: currentMs - navigation_start,
                        session_token: session_token && session_token.length === 2 ? session_token[1] : "",
                        page_type: "customers/login"
                    };
                    window.navigator.sendBeacon("https://monorail-edge.shopifysvc.com/v1/produce", JSON
                        .stringify({
                            schema_id: "online_store_buyer_site_abandonment/1.1",
                            payload: payload,
                            metadata: {
                                event_created_at_ms: currentMs,
                                event_sent_at_ms: currentMs
                            }
                        }));
                }
            }
            window.addEventListener('pagehide', handle_abandonment_event);
        }
    }());

</script>
<script>
    var Shopify = Shopify || {};
    Shopify.shop = "boom-theme.myshopify.com";
    Shopify.locale = "en";
    Shopify.currency = {
        "active": "USD",
        "rate": "1.0"
    };
    Shopify.country = "US";
    Shopify.theme = {
        "name": "Boom  v8- 05-02-2021 + with bundle",
        "id": 119465902240,
        "theme_store_id": null,
        "role": "main"
    };
    Shopify.theme.handle = "null";
    Shopify.theme.style = {
        "id": null,
        "handle": null
    };
    Shopify.cdnHost = "cdn.shopify.com";

</script>
<script type="module">
    ! function(o) {
        (o.Shopify = o.Shopify || {}).modules = !0
    }(window);

</script>
<script>
    ! function(o) {
        function n() {
            var o = [];

            function n() {
                o.push(Array.prototype.slice.apply(arguments))
            }
            return n.q = o, n
        }
        var t = o.Shopify = o.Shopify || {};
        t.loadFeatures = n(), t.autoloadFeatures = n()
    }(window);

</script>
<script>
    (function() {
        function asyncLoad() {
            var urls = ["\/\/productreviews.shopifycdn.com\/assets\/v4\/spr.js?shop=boom-theme.myshopify.com"];
            for (var i = 0; i < urls.length; i++) {
                var s = document.createElement('script');
                s.type = 'text/javascript';
                s.async = true;
                s.src = urls[i];
                var x = document.getElementsByTagName('script')[0];
                x.parentNode.insertBefore(s, x);
            }
        };
        if (window.attachEvent) {
            window.attachEvent('onload', asyncLoad);
        } else {
            window.addEventListener('load', asyncLoad, false);
        }
    })();

</script>
<script id="__st">
    var __st = {
        "a": 43704549536,
        "offset": -14400,
        "reqid": "1b0ba2d1-06e7-4d80-a55f-fb1d5c98d7ab",
        "pageurl": "boom-theme.myshopify.com\/account\/login",
        "u": "3173aec0ebfa"
    };

</script>
<script>
    window.ShopifyPaypalV4VisibilityTracking = true;

</script>
<script>
    window.ShopifyAnalytics = window.ShopifyAnalytics || {};
    window.ShopifyAnalytics.meta = window.ShopifyAnalytics.meta || {};
    window.ShopifyAnalytics.meta.currency = 'USD';
    var meta = {
        "page": {},
        "page_view_event_id": "36fac2a648fa196cca7cc847b07b607c3228b92fca2b8c761400b14e99eaeff2",
        "cart_event_id": "e253b83b34878cfee3e4339a0f02eca3a6fb4e7c290583e9c3d80aedb10c3b5f"
    };
    for (var attr in meta) {
        window.ShopifyAnalytics.meta[attr] = meta[attr];
    }

</script>
<script>
    window.ShopifyAnalytics.merchantGoogleAnalytics = function() {

    };

</script>
<script class="analytics">
    (function() {
        var customDocumentWrite = function(content) {
            var jquery = null;

            if (window.jQuery) {
                jquery = window.jQuery;
            } else if (window.Checkout && window.Checkout.$) {
                jquery = window.Checkout.$;
            }

            if (jquery) {
                jquery('body').append(content);
            }
        };

        var hasLoggedConversion = function(token) {
            if (token) {
                return document.cookie.indexOf('loggedConversion=' + token) !== -1;
            }
            return false;
        }

        var setCookieIfConversion = function(token) {
            if (token) {
                var twoMonthsFromNow = new Date(Date.now());
                twoMonthsFromNow.setMonth(twoMonthsFromNow.getMonth() + 2);

                document.cookie = 'loggedConversion=' + token + '; expires=' + twoMonthsFromNow;
            }
        }

        var trekkie = window.ShopifyAnalytics.lib = window.trekkie = window.trekkie || [];
        if (trekkie.integrations) {
            return;
        }
        trekkie.methods = [
            'identify',
            'page',
            'ready',
            'track',
            'trackForm',
            'trackLink'
        ];
        trekkie.factory = function(method) {
            return function() {
                var args = Array.prototype.slice.call(arguments);
                args.unshift(method);
                trekkie.push(args);
                return trekkie;
            };
        };
        for (var i = 0; i < trekkie.methods.length; i++) {
            var key = trekkie.methods[i];
            trekkie[key] = trekkie.factory(key);
        }
        trekkie.load = function(config) {
            trekkie.config = config;
            var first = document.getElementsByTagName('script')[0];
            var script = document.createElement('script');
            script.type = 'text/javascript';
            script.onerror = function(e) {
                var scriptFallback = document.createElement('script');
                scriptFallback.type = 'text/javascript';
                scriptFallback.onerror = function(error) {
                    var Monorail = {
                        produce: function produce(monorailDomain, schemaId, payload) {
                            var currentMs = new Date().getTime();
                            var event = {
                                schema_id: schemaId,
                                payload: payload,
                                metadata: {
                                    event_created_at_ms: currentMs,
                                    event_sent_at_ms: currentMs
                                }
                            };
                            return Monorail.sendRequest("https://" + monorailDomain +
                                "/v1/produce", JSON.stringify(event));
                        },
                        sendRequest: function sendRequest(endpointUrl, payload) {
                            // Try the sendBeacon API
                            if (window && window.navigator && typeof window.navigator
                                .sendBeacon === 'function' && typeof window.Blob ===
                                'function' && !Monorail.isIos12()) {
                                var blobData = new window.Blob([payload], {
                                    type: 'text/plain'
                                });

                                if (window.navigator.sendBeacon(endpointUrl, blobData)) {
                                    return true;
                                } // sendBeacon was not successful

                            } // XHR beacon   

                            var xhr = new XMLHttpRequest();

                            try {
                                xhr.open('POST.html', endpointUrl);
                                xhr.setRequestHeader('Content-Type', 'text/plain');
                                xhr.send(payload);
                            } catch (e) {
                                console.log(e);
                            }

                            return false;
                        },
                        isIos12: function isIos12() {
                            return window.navigator.userAgent.lastIndexOf(
                                    'iPhone; CPU iPhone OS 12_') !== -1 || window.navigator
                                .userAgent.lastIndexOf('iPad; CPU OS 12_') !== -1;
                        }
                    };
                    Monorail.produce('monorail-edge.shopifysvc.com',
                        'trekkie_storefront_load_errors/1.1', {
                            shop_id: 43704549536,
                            theme_id: 119465902240,
                            app_name: "storefront",
                            context_url: window.location.href,
                            source_url: "https://cdn.shopify.com/s/trekkie.storefront.3d6c97158a1d2c655afe5e8a7bfac49f365dde39.min.js"
                        });

                };
                scriptFallback.async = true;
                scriptFallback.src =
                    'assets/cdn.shopify.com/s/trekkie.storefront.3d6c97158a1d2c655afe5e8a7bfac49f365dde39.min.js';
                first.parentNode.insertBefore(scriptFallback, first);
            };
            script.async = true;
            script.src =
                'assets/cdn.shopify.com/s/trekkie.storefront.3d6c97158a1d2c655afe5e8a7bfac49f365dde39.min.js';
            first.parentNode.insertBefore(script, first);
        };
        trekkie.load({
            "Trekkie": {
                "appName": "storefront",
                "development": false,
                "defaultAttributes": {
                    "shopId": 43704549536,
                    "isMerchantRequest": null,
                    "themeId": 119465902240,
                    "themeCityHash": "18264953190010162963",
                    "contentLanguage": "en",
                    "currency": "USD"
                },
                "isServerSideCookieWritingEnabled": true,
                "isPixelGateEnabled": true
            },
            "Performance": {
                "navigationTimingApiMeasurementsEnabled": true,
                "navigationTimingApiMeasurementsSampleRate": 1
            },
            "Session Attribution": {}
        });

        var loaded = false;
        trekkie.ready(function() {
            if (loaded) return;
            loaded = true;

            window.ShopifyAnalytics.lib = window.trekkie;


            var originalDocumentWrite = document.write;
            document.write = customDocumentWrite;
            try {
                window.ShopifyAnalytics.merchantGoogleAnalytics.call(this);
            } catch (error) {};
            document.write = originalDocumentWrite;
            (function() {
                if (window.BOOMR && (window.BOOMR.version || window.BOOMR.snippetExecuted)) {
                    return;
                }
                window.BOOMR = window.BOOMR || {};
                window.BOOMR.snippetStart = new Date().getTime();
                window.BOOMR.snippetExecuted = true;
                window.BOOMR.snippetVersion = 12;
                window.BOOMR.application = "storefront-renderer";
                window.BOOMR.themeName = "Boom";
                window.BOOMR.themeVersion = "1.0";
                window.BOOMR.shopId = 43704549536;
                window.BOOMR.themeId = 119465902240;
                window.BOOMR.url =
                    "assets/cdn.shopify.com/shopifycloud/boomerang/shopify-boomerang-1.0.0.min.js";
                var where = document.currentScript || document.getElementsByTagName("script")[0];
                var parentNode = where.parentNode;
                var promoted = false;
                var LOADER_TIMEOUT = 3000;

                function promote() {
                    if (promoted) {
                        return;
                    }
                    var script = document.createElement("script");
                    script.id = "boomr-scr-as";
                    script.src = window.BOOMR.url;
                    script.async = true;
                    parentNode.appendChild(script);
                    promoted = true;
                }

                function iframeLoader(wasFallback) {
                    promoted = true;
                    var dom, bootstrap, iframe, iframeStyle;
                    var doc = document;
                    var win = window;
                    window.BOOMR.snippetMethod = wasFallback ? "if" : "i";
                    bootstrap = function(parent, scriptId) {
                        var script = doc.createElement("script");
                        script.id = scriptId || "boomr-if-as";
                        script.src = window.BOOMR.url;
                        BOOMR_lstart = new Date().getTime();
                        parent = parent || doc.body;
                        parent.appendChild(script);
                    };
                    if (!window.addEventListener && window.attachEvent && navigator.userAgent.match(
                            /MSIE [67]./)) {
                        window.BOOMR.snippetMethod = "s";
                        bootstrap(parentNode, "boomr-async");
                        return;
                    }
                    iframe = document.createElement("IFRAME");
                    iframe.src = "about:blank";
                    iframe.title = "";
                    iframe.role = "presentation";
                    iframe.loading = "eager";
                    iframeStyle = (iframe.frameElement || iframe).style;
                    iframeStyle.width = 0;
                    iframeStyle.height = 0;
                    iframeStyle.border = 0;
                    iframeStyle.display = "none";
                    parentNode.appendChild(iframe);
                    try {
                        win = iframe.contentWindow;
                        doc = win.document.open();
                    } catch (e) {
                        dom = document.domain;
                        iframe.src = "javascript:var d=document.open();d.domain='" + dom +
                            "';void(0);";
                        win = iframe.contentWindow;
                        doc = win.document.open();
                    }
                    if (dom) {
                        doc._boomrl = function() {
                            this.domain = dom;
                            bootstrap();
                        };
                        doc.write("<body onload='document._boomrl();'>");
                    } else {
                        win._boomrl = function() {
                            bootstrap();
                        };
                        if (win.addEventListener) {
                            win.addEventListener("load", win._boomrl, false);
                        } else if (win.attachEvent) {
                            win.attachEvent("onload", win._boomrl);
                        }
                    }
                    doc.close();
                }
                var link = document.createElement("link");
                if (link.relList &&
                    typeof link.relList.supports === "function" &&
                    link.relList.supports("preload") &&
                    ("as" in link)) {
                    window.BOOMR.snippetMethod = "p";
                    link.href = window.BOOMR.url;
                    link.rel = "preload";
                    link.as = "script";
                    link.addEventListener("load", promote);
                    link.addEventListener("error", function() {
                        iframeLoader(true);
                    });
                    setTimeout(function() {
                        if (!promoted) {
                            iframeLoader(true);
                        }
                    }, LOADER_TIMEOUT);
                    BOOMR_lstart = new Date().getTime();
                    parentNode.appendChild(link);
                } else {
                    iframeLoader(false);
                }

                function boomerangSaveLoadTime(e) {
                    window.BOOMR_onload = (e && e.timeStamp) || new Date().getTime();
                }
                if (window.addEventListener) {
                    window.addEventListener("load", boomerangSaveLoadTime, false);
                } else if (window.attachEvent) {
                    window.attachEvent("onload", boomerangSaveLoadTime);
                }
                if (document.addEventListener) {
                    document.addEventListener("onBoomerangLoaded", function(e) {
                        e.detail.BOOMR.init({
                            producer_url: "https://monorail-edge.shopifysvc.com/v1/produce",
                            ResourceTiming: {
                                enabled: true,
                                trackedResourceTypes: ["script", "img", "css"]
                            },
                        });
                        e.detail.BOOMR.t_end = new Date().getTime();
                    });
                } else if (document.attachEvent) {
                    document.attachEvent("onpropertychange", function(e) {
                        if (!e) e = event;
                        if (e.propertyName === "onBoomerangLoaded") {
                            e.detail.BOOMR.init({
                                producer_url: "https://monorail-edge.shopifysvc.com/v1/produce",
                                ResourceTiming: {
                                    enabled: true,
                                    trackedResourceTypes: ["script", "img", "css"]
                                },
                            });
                            e.detail.BOOMR.t_end = new Date().getTime();
                        }
                    });
                }
            })();



            window.ShopifyAnalytics.lib.page(
                null, {},
                "36fac2a648fa196cca7cc847b07b607c3228b92fca2b8c761400b14e99eaeff2"
            );


            var match = window.location.pathname.match(/checkouts\/(.+)\/(thank_you|post_purchase)/)
            var token = match ? match[1] : undefined;
            if (!hasLoggedConversion(token)) {
                setCookieIfConversion(token);

            }
        });


        var eventsListenerScript = document.createElement('script');
        eventsListenerScript.async = true;
        eventsListenerScript.src =
            "assets/cdn.shopify.com/shopifycloud/shopify/assets/shop_events_listener-714e2e017903fad17d4471cb27d1f2c8a83b5a7a276f92420f7e5e40dbc9136e.js";
        document.getElementsByTagName('head')[0].appendChild(eventsListenerScript);

    })();

</script>
<script>
    ! function(e) {
        e.addEventListener("DOMContentLoaded", function() {
            var t = ['form[action^="/contact"] input[name="form_type"][value="contact"]',
                'form[action*="/comments"] input[name="form_type"][value="new_comment"]'
            ].join(",");
            null !== e.querySelector(t) && (window.Shopify = window.Shopify || {}, window.Shopify
                .recaptchaV3 = window.Shopify.recaptchaV3 || {
                    siteKey: "6LcCR2cUAAAAANS1Gpq_mDIJ2pQuJphsSQaUEuc9"
                }, (t = e.createElement("script")).setAttribute("src",
                    "assets/cdn.shopify.com/shopifycloud/storefront-recaptcha-v3/v0.1/index.js"), e.body
                .appendChild(t))
        })
    }(document);

</script>
<script integrity="sha256-2KbxRG1nAJxSTtTmhkiAC6kILrdVSO4o4QUDMcvnuig="
    data-source-attribution="shopify.loadfeatures" defer="defer"
    src="assets/cdn.shopify.com/shopifycloud/shopify/assets/storefront/load_feature-d8a6f1446d67009c524ed4e68648800ba9082eb75548ee28e1050331cbe7ba28.js"
    crossorigin="anonymous"></script>
<script integrity="sha256-h+g5mYiIAULyxidxudjy/2wpCz/3Rd1CbrDf4NudHa4="
    data-source-attribution="shopify.dynamic-checkout" defer="defer"
    src="assets/cdn.shopify.com/shopifycloud/shopify/assets/storefront/features-87e8399988880142f2c62771b9d8f2ff6c290b3ff745dd426eb0dfe0db9d1dae.js"
    crossorigin="anonymous"></script>
<link rel="stylesheet" media="screen"
    href="assets/cdn.shopify.com/s/files/1/0437/0454/9536/t/26/compiled_assets/styles1775.css?3053">
<script id="sections-script" data-sections="header-model-8" defer="defer"
    src="assets/cdn.shopify.com/s/files/1/0437/0454/9536/t/26/compiled_assets/scripts1775.js?3053"></script>

<script>
    window.performance && window.performance.mark && window.performance.mark('shopify.content_for_header.end');

</script>
<script type="text/javascript">
    delete History

</script>
<script>
    jQuery(function() {
        jQuery('.swatch :radio').change(function() {
            var optionIndex = jQuery(this).closest('.swatch').attr('data-option-index');
            var optionValue = jQuery(this).val();
            jQuery(this)
                .closest('form')
                .find('.single-option-selector')
                .eq(optionIndex)
                .val(optionValue)
                .trigger('change');
        });
    });

</script>

<script>
    Shopify.productOptionsMap = {};
    Shopify.quickViewOptionsMap = {};

    Shopify.updateOptionsInSelector = function(selectorIndex, wrapperSlt) {
        Shopify.optionsMap = wrapperSlt === '.product' ? Shopify.productOptionsMap : Shopify
        .quickViewOptionsMap;

        switch (selectorIndex) {
            case 0:
                var key = 'root';
                var selector = $(wrapperSlt + ' .single-option-selector:eq(0)');
                break;
            case 1:
                var key = $(wrapperSlt + ' .single-option-selector:eq(0)').val();
                var selector = $(wrapperSlt + ' .single-option-selector:eq(1)');
                break;
            case 2:
                var key = $(wrapperSlt + ' .single-option-selector:eq(0)').val();
                key += ' / ' + $(wrapperSlt + ' .single-option-selector:eq(1)').val();
                var selector = $(wrapperSlt + ' .single-option-selector:eq(2)');
        }

        var initialValue = selector.val();

        selector.empty();

        var availableOptions = Shopify.optionsMap[key];

        if (availableOptions && availableOptions.length) {
            for (var i = 0; i < availableOptions.length; i++) {
                var option = availableOptions[i];

                var newOption = $('<option></option>').val(option).html(option);

                selector.append(newOption);
            }

            $(wrapperSlt + ' .swatch[data-option-index="' + selectorIndex + '"] .swatch-element').each(
            function() {
                if ($.inArray($(this).attr('data-value'), availableOptions) !== -1) {
                    $(this).removeClass('soldout').find(':radio').removeAttr('disabled', 'disabled')
                        .removeAttr('checked');
                } else {
                    $(this).addClass('soldout').find(':radio').removeAttr('checked').attr('disabled',
                        'disabled');
                }
            });

            if ($.inArray(initialValue, availableOptions) !== -1) {
                selector.val(initialValue);
            }

            selector.trigger('change');
        };
    };

    Shopify.linkOptionSelectors = function(product, wrapperSlt) {
        // Building our mapping object.
        Shopify.optionsMap = wrapperSlt === '.product' ? Shopify.productOptionsMap : Shopify
        .quickViewOptionsMap;

        for (var i = 0; i < product.variants.length; i++) {
            var variant = product.variants[i];

            if (variant.available) {
                // Gathering values for the 1st drop-down.
                Shopify.optionsMap['root'] = Shopify.optionsMap['root'] || [];

                Shopify.optionsMap['root'].push(variant.option1);
                Shopify.optionsMap['root'] = Shopify.uniq(Shopify.optionsMap['root']);

                // Gathering values for the 2nd drop-down.
                if (product.options.length > 1) {
                    var key = variant.option1;
                    Shopify.optionsMap[key] = Shopify.optionsMap[key] || [];
                    Shopify.optionsMap[key].push(variant.option2);
                    Shopify.optionsMap[key] = Shopify.uniq(Shopify.optionsMap[key]);
                }

                // Gathering values for the 3rd drop-down.
                if (product.options.length === 3) {
                    var key = variant.option1 + ' / ' + variant.option2;
                    Shopify.optionsMap[key] = Shopify.optionsMap[key] || [];
                    Shopify.optionsMap[key].push(variant.option3);
                    Shopify.optionsMap[key] = Shopify.uniq(Shopify.optionsMap[key]);
                }
            }
        };

        // Update options right away.
        Shopify.updateOptionsInSelector(0, wrapperSlt);

        if (product.options.length > 1) Shopify.updateOptionsInSelector(1, wrapperSlt);
        if (product.options.length === 3) Shopify.updateOptionsInSelector(2, wrapperSlt);

        // When there is an update in the first dropdown.
        $(wrapperSlt + " .single-option-selector:eq(0)").change(function() {
            Shopify.updateOptionsInSelector(1, wrapperSlt);
            if (product.options.length === 3) Shopify.updateOptionsInSelector(2, wrapperSlt);
            return true;
        });

        // When there is an update in the second dropdown.
        $(wrapperSlt + " .single-option-selector:eq(1)").change(function() {
            if (product.options.length === 3) Shopify.updateOptionsInSelector(2, wrapperSlt);
            return true;
        });
    };

</script>