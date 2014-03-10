<?php

/* @WebProfiler/Profiler/base_js.html.twig */
class __TwigTemplate_97dea99024845b73128ec888b8429734e33a5702bc75500abbe77e121cfefd29 extends Twig_Template
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
        return array (  83 => 30,  79 => 29,  75 => 28,  62 => 24,  50 => 15,  46 => 14,  42 => 12,  32 => 6,  26 => 3,  19 => 1,  249 => 59,  235 => 52,  231 => 51,  227 => 50,  219 => 45,  207 => 36,  203 => 35,  194 => 31,  190 => 29,  181 => 26,  178 => 25,  174 => 24,  168 => 22,  157 => 5,  126 => 106,  103 => 86,  99 => 85,  69 => 60,  66 => 25,  64 => 58,  61 => 57,  41 => 9,  39 => 8,  35 => 7,  30 => 5,  24 => 2,  255 => 138,  244 => 58,  233 => 122,  222 => 114,  211 => 106,  200 => 98,  187 => 88,  183 => 87,  179 => 86,  175 => 85,  171 => 23,  167 => 83,  163 => 8,  159 => 81,  155 => 80,  151 => 79,  144 => 74,  117 => 48,  110 => 46,  108 => 45,  106 => 44,  100 => 42,  95 => 84,  91 => 35,  87 => 38,  77 => 37,  74 => 36,  70 => 26,  59 => 22,  44 => 10,  31 => 4,  28 => 3,);
    }
}
