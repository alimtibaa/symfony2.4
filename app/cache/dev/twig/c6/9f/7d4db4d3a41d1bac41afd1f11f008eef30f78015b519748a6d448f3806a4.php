<?php

/* @WebProfiler/Profiler/base_js.html.twig */
class __TwigTemplate_c69f7d4db4d3a41d1bac41afd1f11f008eef30f78015b519748a6d448f3806a4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<script>/*<![CDATA[*/
    Sfjs = (function() {
        \"use strict\";

        var noop = function() {},

            profilerStorageKey = 'sf2/profiler/',

            request = function(url, onSuccess, onError, payload, options) {
                var xhr = window.XMLHttpRequest ? new XMLHttpRequest() : new ActiveXObject('Microsoft.XMLHTTP');
                options = options || {};
                xhr.open(options.method || 'GET', url, true);
                xhr.setRequestHeader('X-Requested-With', 'XMLHttpRequest');
                xhr.onreadystatechange = function(state) {
                    if (4 === xhr.readyState && 200 === xhr.status) {
                        (onSuccess || noop)(xhr);
                    } else if (4 === xhr.readyState && xhr.status != 200) {
                        (onError || noop)(xhr);
                    }
                };
                xhr.send(payload || '');
            },

            hasClass = function(el, klass) {
                return el.className.match(new RegExp('\\\\b' + klass + '\\\\b'));
            },

            removeClass = function(el, klass) {
                el.className = el.className.replace(new RegExp('\\\\b' + klass + '\\\\b'), ' ');
            },

            addClass = function(el, klass) {
                if (!hasClass(el, klass)) { el.className += \" \" + klass; }
            },

            getPreference = function(name) {
                if (!window.localStorage) {
                    return null;
                }

                return localStorage.getItem(profilerStorageKey + name);
            },

            setPreference = function(name, value) {
                if (!window.localStorage) {
                    return null;
                }

                localStorage.setItem(profilerStorageKey + name, value);
            };

        return {
            hasClass: hasClass,

            removeClass: removeClass,

            addClass: addClass,

            getPreference: getPreference,

            setPreference: setPreference,

            request: request,

            load: function(selector, url, onSuccess, onError, options) {
                var el = document.getElementById(selector);

                if (el && el.getAttribute('data-sfurl') !== url) {
                    request(
                        url,
                        function(xhr) {
                            el.innerHTML = xhr.responseText;
                            el.setAttribute('data-sfurl', url);
                            removeClass(el, 'loading');
                            (onSuccess || noop)(xhr, el);
                        },
                        function(xhr) { (onError || noop)(xhr, el); },
                        options
                    );
                }

                return this;
            },

            toggle: function(selector, elOn, elOff) {
                var i,
                    style,
                    tmp = elOn.style.display,
                    el = document.getElementById(selector);

                elOn.style.display = elOff.style.display;
                elOff.style.display = tmp;

                if (el) {
                    el.style.display = 'none' === tmp ? 'none' : 'block';
                }

                return this;
            }
        }
    })();
/*]]>*/</script>
";
    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/base_js.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  91 => 35,  83 => 30,  79 => 29,  70 => 26,  62 => 24,  26 => 3,  39 => 12,  32 => 6,  28 => 5,  25 => 4,  80 => 27,  77 => 26,  75 => 28,  72 => 24,  66 => 25,  63 => 20,  61 => 19,  58 => 18,  52 => 15,  49 => 14,  47 => 13,  44 => 12,  35 => 8,  33 => 7,  30 => 5,  24 => 2,  21 => 2,  815 => 648,  780 => 616,  776 => 615,  765 => 607,  760 => 605,  756 => 604,  740 => 591,  715 => 569,  710 => 567,  672 => 532,  556 => 419,  552 => 418,  541 => 410,  537 => 409,  526 => 401,  522 => 400,  509 => 390,  505 => 389,  494 => 381,  490 => 380,  479 => 372,  475 => 371,  462 => 361,  458 => 360,  447 => 352,  443 => 351,  432 => 343,  428 => 342,  415 => 332,  411 => 331,  400 => 323,  396 => 322,  385 => 314,  381 => 313,  355 => 290,  345 => 283,  335 => 276,  325 => 269,  315 => 262,  305 => 255,  267 => 220,  242 => 198,  214 => 173,  189 => 151,  55 => 20,  50 => 15,  46 => 14,  42 => 12,  38 => 9,  34 => 14,  19 => 1,);
    }
}
