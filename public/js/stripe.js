! function(e) {
    function t(r) {
        if (n[r]) return n[r].exports;
        var o = n[r] = {
            i: r,
            l: !1,
            exports: {}
        };
        return e[r].call(o.exports, o, o.exports, t), o.l = !0, o.exports
    }
    var n = {};
    t.m = e, t.c = n, t.d = function(e, n, r) {
        t.o(e, n) || Object.defineProperty(e, n, {
            configurable: !1,
            enumerable: !0,
            get: r
        })
    }, t.n = function(e) {
        var n = e && e.__esModule ? function() {
            return e.default
        } : function() {
            return e
        };
        return t.d(n, "a", n), n
    }, t.o = function(e, t) {
        return Object.prototype.hasOwnProperty.call(e, t)
    }, t.p = "", t(t.s = 0)
}([function(e, t, n) {
    e.exports = n(1)
}, function(e, t, n) {
    "use strict";

    function r(e, t) {
        if (!(e instanceof t)) throw new TypeError("Cannot call a class as a function")
    }

    function o(e, t) {
        if (!e) throw new ReferenceError("this hasn't been initialised - super() hasn't been called");
        return !t || "object" != typeof t && "function" != typeof t ? e : t
    }

    function i(e, t) {
        if ("function" != typeof t && null !== t) throw new TypeError("Super expression must either be null or a function, not " + typeof t);
        e.prototype = Object.create(t && t.prototype, {
            constructor: {
                value: e,
                enumerable: !1,
                writable: !0,
                configurable: !0
            }
        }), t && (Object.setPrototypeOf ? Object.setPrototypeOf(e, t) : e.__proto__ = t)
    }

    function a(e, t, n) {
        return t in e ? Object.defineProperty(e, t, {
            value: n,
            enumerable: !0,
            configurable: !0,
            writable: !0
        }) : e[t] = n, e
    }

    function s(e) {
        if (Array.isArray(e)) {
            for (var t = 0, n = Array(e.length); t < e.length; t++) n[t] = e[t];
            return n
        }
        return Array.from(e)
    }

    function u(e) {
        if (Array.isArray(e)) {
            for (var t = 0, n = Array(e.length); t < e.length; t++) n[t] = e[t];
            return n
        }
        return Array.from(e)
    }

    function c(e, t) {
        if (!(e instanceof t)) throw new TypeError("Cannot call a class as a function")
    }

    function l(e) {
        if (Array.isArray(e)) {
            for (var t = 0, n = Array(e.length); t < e.length; t++) n[t] = e[t];
            return n
        }
        return Array.from(e)
    }

    function p(e, t) {
        if (!(e instanceof t)) throw new TypeError("Cannot call a class as a function")
    }

    function f(e, t) {
        if (!e) throw new ReferenceError("this hasn't been initialised - super() hasn't been called");
        return !t || "object" != typeof t && "function" != typeof t ? e : t
    }

    function d(e, t) {
        if ("function" != typeof t && null !== t) throw new TypeError("Super expression must either be null or a function, not " + typeof t);
        e.prototype = Object.create(t && t.prototype, {
            constructor: {
                value: e,
                enumerable: !1,
                writable: !0,
                configurable: !0
            }
        }), t && (Object.setPrototypeOf ? Object.setPrototypeOf(e, t) : e.__proto__ = t)
    }

    function h(e, t) {
        if (!(e instanceof t)) throw new TypeError("Cannot call a class as a function")
    }

    function y(e, t) {
        if (!e) throw new ReferenceError("this hasn't been initialised - super() hasn't been called");
        return !t || "object" != typeof t && "function" != typeof t ? e : t
    }

    function m(e, t) {
        if ("function" != typeof t && null !== t) throw new TypeError("Super expression must either be null or a function, not " + typeof t);
        e.prototype = Object.create(t && t.prototype, {
            constructor: {
                value: e,
                enumerable: !1,
                writable: !0,
                configurable: !0
            }
        }), t && (Object.setPrototypeOf ? Object.setPrototypeOf(e, t) : e.__proto__ = t)
    }

    function _(e, t) {
        if (!(e instanceof t)) throw new TypeError("Cannot call a class as a function")
    }

    function v(e, t) {
        if (!e) throw new ReferenceError("this hasn't been initialised - super() hasn't been called");
        return !t || "object" != typeof t && "function" != typeof t ? e : t
    }

    function b(e, t) {
        if ("function" != typeof t && null !== t) throw new TypeError("Super expression must either be null or a function, not " + typeof t);
        e.prototype = Object.create(t && t.prototype, {
            constructor: {
                value: e,
                enumerable: !1,
                writable: !0,
                configurable: !0
            }
        }), t && (Object.setPrototypeOf ? Object.setPrototypeOf(e, t) : e.__proto__ = t)
    }

    function g(e, t) {
        if (!(e instanceof t)) throw new TypeError("Cannot call a class as a function")
    }

    function w(e, t) {
        if (!e) throw new ReferenceError("this hasn't been initialised - super() hasn't been called");
        return !t || "object" != typeof t && "function" != typeof t ? e : t
    }

    function E(e, t) {
        if ("function" != typeof t && null !== t) throw new TypeError("Super expression must either be null or a function, not " + typeof t);
        e.prototype = Object.create(t && t.prototype, {
            constructor: {
                value: e,
                enumerable: !1,
                writable: !0,
                configurable: !0
            }
        }), t && (Object.setPrototypeOf ? Object.setPrototypeOf(e, t) : e.__proto__ = t)
    }

    function S(e, t) {
        if (!(e instanceof t)) throw new TypeError("Cannot call a class as a function")
    }

    function O(e, t) {
        if (!e) throw new ReferenceError("this hasn't been initialised - super() hasn't been called");
        return !t || "object" != typeof t && "function" != typeof t ? e : t
    }

    function k(e, t) {
        if ("function" != typeof t && null !== t) throw new TypeError("Super expression must either be null or a function, not " + typeof t);
        e.prototype = Object.create(t && t.prototype, {
            constructor: {
                value: e,
                enumerable: !1,
                writable: !0,
                configurable: !0
            }
        }), t && (Object.setPrototypeOf ? Object.setPrototypeOf(e, t) : e.__proto__ = t)
    }

    function P(e, t) {
        if (!(e instanceof t)) throw new TypeError("Cannot call a class as a function")
    }

    function A(e, t) {
        if (!e) throw new ReferenceError("this hasn't been initialised - super() hasn't been called");
        return !t || "object" != typeof t && "function" != typeof t ? e : t
    }

    function j(e, t) {
        if ("function" != typeof t && null !== t) throw new TypeError("Super expression must either be null or a function, not " + typeof t);
        e.prototype = Object.create(t && t.prototype, {
            constructor: {
                value: e,
                enumerable: !1,
                writable: !0,
                configurable: !0
            }
        }), t && (Object.setPrototypeOf ? Object.setPrototypeOf(e, t) : e.__proto__ = t)
    }

    function C(e, t, n) {
        return t in e ? Object.defineProperty(e, t, {
            value: n,
            enumerable: !0,
            configurable: !0,
            writable: !0
        }) : e[t] = n, e
    }

    function T(e, t, n) {
        return t in e ? Object.defineProperty(e, t, {
            value: n,
            enumerable: !0,
            configurable: !0,
            writable: !0
        }) : e[t] = n, e
    }

    function R(e, t, n) {
        return t in e ? Object.defineProperty(e, t, {
            value: n,
            enumerable: !0,
            configurable: !0,
            writable: !0
        }) : e[t] = n, e
    }

    function I(e, t) {
        var n = {};
        for (var r in e) t.indexOf(r) >= 0 || Object.prototype.hasOwnProperty.call(e, r) && (n[r] = e[r]);
        return n
    }

    function M(e, t) {
        if (!(e instanceof t)) throw new TypeError("Cannot call a class as a function")
    }

    function q(e, t) {
        if (!(e instanceof t)) throw new TypeError("Cannot call a class as a function")
    }

    function N(e, t) {
        if (!e) throw new ReferenceError("this hasn't been initialised - super() hasn't been called");
        return !t || "object" != typeof t && "function" != typeof t ? e : t
    }

    function x(e, t) {
        if ("function" != typeof t && null !== t) throw new TypeError("Super expression must either be null or a function, not " + typeof t);
        e.prototype = Object.create(t && t.prototype, {
            constructor: {
                value: e,
                enumerable: !1,
                writable: !0,
                configurable: !0
            }
        }), t && (Object.setPrototypeOf ? Object.setPrototypeOf(e, t) : e.__proto__ = t)
    }

    function L(e, t, n) {
        return t in e ? Object.defineProperty(e, t, {
            value: n,
            enumerable: !0,
            configurable: !0,
            writable: !0
        }) : e[t] = n, e
    }

    function D(e) {
        if (Array.isArray(e)) {
            for (var t = 0, n = Array(e.length); t < e.length; t++) n[t] = e[t];
            return n
        }
        return Array.from(e)
    }

    function F(e) {
        if (Array.isArray(e)) {
            for (var t = 0, n = Array(e.length); t < e.length; t++) n[t] = e[t];
            return n
        }
        return Array.from(e)
    }

    function B(e, t, n) {
        return t in e ? Object.defineProperty(e, t, {
            value: n,
            enumerable: !0,
            configurable: !0,
            writable: !0
        }) : e[t] = n, e
    }

    function z(e) {
        if (Array.isArray(e)) {
            for (var t = 0, n = Array(e.length); t < e.length; t++) n[t] = e[t];
            return n
        }
        return Array.from(e)
    }

    function U(e, t) {
        var n = {};
        for (var r in e) t.indexOf(r) >= 0 || Object.prototype.hasOwnProperty.call(e, r) && (n[r] = e[r]);
        return n
    }

    function H(e, t) {
        if (!(e instanceof t)) throw new TypeError("Cannot call a class as a function")
    }

    function W(e, t) {
        if (!e) throw new ReferenceError("this hasn't been initialised - super() hasn't been called");
        return !t || "object" != typeof t && "function" != typeof t ? e : t
    }

    function K(e, t) {
        if ("function" != typeof t && null !== t) throw new TypeError("Super expression must either be null or a function, not " + typeof t);
        e.prototype = Object.create(t && t.prototype, {
            constructor: {
                value: e,
                enumerable: !1,
                writable: !0,
                configurable: !0
            }
        }), t && (Object.setPrototypeOf ? Object.setPrototypeOf(e, t) : e.__proto__ = t)
    }

    function Y(e, t) {
        var n = {};
        for (var r in e) t.indexOf(r) >= 0 || Object.prototype.hasOwnProperty.call(e, r) && (n[r] = e[r]);
        return n
    }

    function V(e, t) {
        if (!(e instanceof t)) throw new TypeError("Cannot call a class as a function")
    }

    function $(e, t) {
        if (!e) throw new ReferenceError("this hasn't been initialised - super() hasn't been called");
        return !t || "object" != typeof t && "function" != typeof t ? e : t
    }

    function G(e, t) {
        if ("function" != typeof t && null !== t) throw new TypeError("Super expression must either be null or a function, not " + typeof t);
        e.prototype = Object.create(t && t.prototype, {
            constructor: {
                value: e,
                enumerable: !1,
                writable: !0,
                configurable: !0
            }
        }), t && (Object.setPrototypeOf ? Object.setPrototypeOf(e, t) : e.__proto__ = t)
    }

    function J(e, t) {
        var n = {};
        for (var r in e) t.indexOf(r) >= 0 || Object.prototype.hasOwnProperty.call(e, r) && (n[r] = e[r]);
        return n
    }

    function Q(e) {
        if (Array.isArray(e)) {
            for (var t = 0, n = Array(e.length); t < e.length; t++) n[t] = e[t];
            return n
        }
        return Array.from(e)
    }

    function Z(e, t) {
        if (!(e instanceof t)) throw new TypeError("Cannot call a class as a function")
    }

    function X(e, t) {
        if (!e) throw new ReferenceError("this hasn't been initialised - super() hasn't been called");
        return !t || "object" != typeof t && "function" != typeof t ? e : t
    }

    function ee(e, t) {
        if ("function" != typeof t && null !== t) throw new TypeError("Super expression must either be null or a function, not " + typeof t);
        e.prototype = Object.create(t && t.prototype, {
            constructor: {
                value: e,
                enumerable: !1,
                writable: !0,
                configurable: !0
            }
        }), t && (Object.setPrototypeOf ? Object.setPrototypeOf(e, t) : e.__proto__ = t)
    }

    function te(e) {
        if (Array.isArray(e)) {
            for (var t = 0, n = Array(e.length); t < e.length; t++) n[t] = e[t];
            return n
        }
        return Array.from(e)
    }

    function ne(e, t) {
        if (!(e instanceof t)) throw new TypeError("Cannot call a class as a function")
    }

    function re(e, t, n) {
        return t in e ? Object.defineProperty(e, t, {
            value: n,
            enumerable: !0,
            configurable: !0,
            writable: !0
        }) : e[t] = n, e
    }

    function oe(e, t) {
        if (!(e instanceof t)) throw new TypeError("Cannot call a class as a function")
    }

    function ie(e) {
        if (Array.isArray(e)) {
            for (var t = 0, n = Array(e.length); t < e.length; t++) n[t] = e[t];
            return n
        }
        return Array.from(e)
    }

    function ae(e, t) {
        var n = {};
        for (var r in e) t.indexOf(r) >= 0 || Object.prototype.hasOwnProperty.call(e, r) && (n[r] = e[r]);
        return n
    }

    function se(e, t) {
        var n = {};
        for (var r in e) t.indexOf(r) >= 0 || Object.prototype.hasOwnProperty.call(e, r) && (n[r] = e[r]);
        return n
    }

    function ue(e, t) {
        if (!(e instanceof t)) throw new TypeError("Cannot call a class as a function")
    }
    Object.defineProperty(t, "__esModule", {
        value: !0
    });
    var ce, le, pe, fe, de, he, ye = function(e) {
            function t(e) {
                r(this, t);
                var n = o(this, (t.__proto__ || Object.getPrototypeOf(t)).call(this, e));
                return window.__stripeElementsController && window.__stripeElementsController.reportIntegrationError(e), n.name = "IntegrationError", Object.defineProperty(n, "message", {
                    value: n.message,
                    enumerable: !0
                }), n
            }
            return i(t, e), t
        }(Error),
        me = ye,
        _e = function(e) {
            var t = arguments.length > 1 && void 0 !== arguments[1] ? arguments[1] : "absurd";
            throw new Error(t)
        },
        ve = Object.assign || function(e) {
            for (var t = 1; t < arguments.length; t++) {
                var n = arguments[t];
                for (var r in n) Object.prototype.hasOwnProperty.call(n, r) && (e[r] = n[r])
            }
            return e
        },
        be = "function" == typeof Symbol && "symbol" == typeof Symbol.iterator ? function(e) {
            return typeof e
        } : function(e) {
            return e && "function" == typeof Symbol && e.constructor === Symbol && e !== Symbol.prototype ? "symbol" : typeof e
        },
        ge = function(e, t) {
            for (var n = 0; n < e.length; n++)
                if (t(e[n])) return e[n]
        },
        we = function(e, t) {
            for (var n = 0; n < e.length; n++)
                if (t(e[n])) return n;
            return -1
        },
        Ee = function(e) {
            return e && "object" === (void 0 === e ? "undefined" : be(e)) && (e.constructor === Array || e.constructor === Object)
        },
        Se = function(e) {
            return Ee(e) ? Array.isArray(e) ? e.slice(0, e.length) : ve({}, e) : e
        },
        Oe = function e(t) {
            return function() {
                for (var n = arguments.length, r = Array(n), o = 0; o < n; o++) r[o] = arguments[o];
                if (Array.isArray(r[0]) && t) return Se(r[0]);
                var i = Array.isArray(r[0]) ? [] : {};
                return r.forEach(function(n) {
                    n && Object.keys(n).forEach(function(r) {
                        var o = i[r],
                            a = n[r],
                            s = Ee(o) && !(t && Array.isArray(o));
                        "object" === (void 0 === a ? "undefined" : be(a)) && s ? i[r] = e(t)(o, Se(a)) : void 0 !== a ? i[r] = Ee(a) ? e(t)(a) : Se(a) : void 0 !== o && (i[r] = o)
                    })
                }), i
            }
        },
        ke = (Oe(!1), Oe(!0)),
        Pe = function(e, t) {
            for (var n = {}, r = 0; r < t.length; r++) n[t[r]] = !0;
            for (var o = [], i = 0; i < e.length; i++) n[e[i]] && o.push(e[i]);
            return o
        },
        Ae = ["aed", "afn", "all", "amd", "ang", "aoa", "ars", "aud", "awg", "azn", "bam", "bbd", "bdt", "bgn", "bhd", "bif", "bmd", "bnd", "bob", "brl", "bsd", "btn", "bwp", "byr", "bzd", "cad", "cdf", "chf", "clf", "clp", "cny", "cop", "crc", "cuc", "cup", "cve", "czk", "djf", "dkk", "dop", "dzd", "egp", "ern", "etb", "eur", "fjd", "fkp", "gbp", "gel", "ghs", "gip", "gmd", "gnf", "gtq", "gyd", "hkd", "hnl", "hrk", "htg", "huf", "idr", "ils", "inr", "iqd", "irr", "isk", "jmd", "jod", "jpy", "kes", "kgs", "khr", "kmf", "kpw", "krw", "kwd", "kyd", "kzt", "lak", "lbp", "lkr", "lrd", "lsl", "ltl", "lvl", "lyd", "mad", "mdl", "mga", "mkd", "mmk", "mnt", "mop", "mro", "mur", "mvr", "mwk", "mxn", "myr", "mzn", "nad", "ngn", "nio", "nok", "npr", "nzd", "omr", "pab", "pen", "pgk", "php", "pkr", "pln", "pyg", "qar", "ron", "rsd", "rub", "rwf", "sar", "sbd", "scr", "sdg", "sek", "sgd", "shp", "skk", "sll", "sos", "srd", "ssp", "std", "svc", "syp", "szl", "thb", "tjs", "tmt", "tnd", "top", "try", "ttd", "twd", "tzs", "uah", "ugx", "usd", "uyu", "uzs", "vef", "vnd", "vuv", "wst", "xaf", "xag", "xau", "xcd", "xdr", "xof", "xpf", "yer", "zar", "zmk", "zmw", "btc", "jep", "eek", "ghc", "mtl", "tmm", "yen", "zwd", "zwl", "zwn", "zwr"],
        je = Ae,
        Ce = ["AT", "AU", "BE", "BR", "CA", "CH", "DE", "DK", "EE", "ES", "FI", "FR", "GB", "HK", "IE", "IN", "IT", "JP", "LT", "LU", "LV", "MX", "NL", "NZ", "NO", "PH", "PL", "PT", "RO", "SE", "SG", "SK", "US"],
        Te = Ce,
        Re = {
            live: "live",
            test: "test",
            unknown: "unknown"
        },
        Ie = function(e) {
            return /^pk_test_/.test(e) ? Re.test : /^pk_live_/.test(e) ? Re.live : Re.unknown
        },
        Me = function(e) {
            if (e === Re.unknown) throw new me("It looks like you're using an older Stripe key. In order to use this API, you'll need to use a modern API key, which is prefixed with 'pk_live_' or 'pk_test_'.\n    You can roll your publishable key here: https://dashboard.stripe.com/account/apikeys")
        },
        qe = Object.assign || function(e) {
            for (var t = 1; t < arguments.length; t++) {
                var n = arguments[t];
                for (var r in n) Object.prototype.hasOwnProperty.call(n, r) && (e[r] = n[r])
            }
            return e
        },
        Ne = "function" == typeof Symbol && "symbol" == typeof Symbol.iterator ? function(e) {
            return typeof e
        } : function(e) {
            return e && "function" == typeof Symbol && e.constructor === Symbol && e !== Symbol.prototype ? "symbol" : typeof e
        },
        xe = function(e, t, n) {
            return "Invalid value for " + n.label + ": " + (n.path.join(".") || "value") + " should be " + e + ". You specified: " + t + "."
        },
        Le = function(e) {
            return {
                type: "valid",
                value: e,
                warnings: arguments.length > 1 && void 0 !== arguments[1] ? arguments[1] : []
            }
        },
        De = function(e) {
            return {
                error: e,
                errorType: "full",
                type: "error"
            }
        },
        Fe = function(e, t, n) {
            var r = new me(xe(e, t, n));
            return De(r)
        },
        Be = function(e, t, n) {
            return {
                expected: e,
                actual: String(t),
                options: n,
                errorType: "mismatch",
                type: "error"
            }
        },
        ze = function(e) {
            return function(t, n) {
                return void 0 === t ? Le(t) : e(t, n)
            }
        },
        Ue = function(e, t) {
            return function(n, r) {
                var o = e(n, r),
                    i = t(n, r);
                if ("error" === o.type && "error" === i.type) {
                    if ("mismatch" === o.errorType) {
                        if ("mismatch" === i.errorType) {
                            var a = (o.options.path.join(".") || "value") + " should be " + o.expected,
                                s = (i.options.path.join(".") || "value") + " should be " + i.expected,
                                u = (o.options.path.join(".") || "value") + " as " + o.actual,
                                c = (i.options.path.join(".") || "value") + " as " + i.actual;
                            return De(new me("Invalid value for " + r.label + ": " + (a === s ? a : a + " or " + s) + ". You specified " + (u === c ? u : u + " and " + c) + "."))
                        }
                        return De(i.error)
                    }
                    return De(o.error)
                }
                return "valid" === o.type ? o : i
            }
        },
        He = function(e, t) {
            return function(n, r) {
                return n instanceof e ? Le(n) : Be("a " + t + " instance", n, r)
            }
        },
        We = function(e, t) {
            return function(n, r) {
                var o = ge(e, function(e) {
                    return e === n
                });
                if (void 0 === o) {
                    var i = t ? "a recognized string." : "one of the following strings: " + e.join(", ");
                    return Be(i, n, r)
                }
                return Le(o)
            }
        },
        Ke = function(e) {
            return function(t, n) {
                return "string" == typeof t && 0 === t.indexOf(e) ? Le(t) : Be("a string starting with " + e, t, n)
            }
        },
        Ye = function() {
            for (var e = arguments.length, t = Array(e), n = 0; n < e; n++) t[n] = arguments[n];
            return We(t, !1)
        },
        Ve = function() {
            for (var e = arguments.length, t = Array(e), n = 0; n < e; n++) t[n] = arguments[n];
            return We(t, !0)
        },
        $e = Ye.apply(void 0, s(Te)),
        Ge = Ye.apply(void 0, s(je)),
        Je = (Ye.apply(void 0, s(Object.keys(Re))), function(e, t) {
            return "string" == typeof e ? Le(e) : Be("a string", e, t)
        }),
        Qe = function(e, t) {
            return function(n, r) {
                return void 0 === n ? Le(t()) : e(n, r)
            }
        },
        Ze = function(e, t) {
            return "boolean" == typeof e ? Le(e) : Be("a boolean", e, t)
        },
        Xe = function(e, t) {
            return "number" == typeof e && e === parseInt(e, 10) ? Le(e) : Be("an amount in the currency's subunit", e, t)
        },
        et = function(e, t) {
            return e && "object" === (void 0 === e ? "undefined" : Ne(e)) ? Le(e) : Be("an object", e, t)
        },
        tt = function(e) {
            return function(t, n) {
                if (Array.isArray(t)) {
                    return t.map(function(t, r) {
                        return e(t, qe({}, n, {
                            path: [].concat(s(n.path), [String(r)])
                        }))
                    }).reduce(function(e, t) {
                        return "error" === e.type ? e : "error" === t.type ? t : Le([].concat(s(e.value), [t.value]), [].concat(s(e.warnings), s(t.warnings)))
                    }, Le([]))
                }
                return Be("array", t, n)
            }
        },
        nt = function(e) {
            return function(t) {
                return function(n, r) {
                    if (Array.isArray(n)) {
                        var o = t(n, r);
                        if ("valid" === o.type)
                            for (var i = {}, a = 0; a < o.value.length; a += 1) {
                                var s = o.value[a];
                                if ("object" === (void 0 === s ? "undefined" : Ne(s)) && s && "string" == typeof s[e]) {
                                    var u = s[e];
                                    if (i[u]) return De(new me("Duplicate value for " + e + ": " + u + ". The property '" + e + "' of '" + r.path.join(".") + "' has to be unique."));
                                    i[u] = !0
                                }
                            }
                        return o
                    }
                    return Be("array", n, r)
                }
            }
        },
        rt = function(e) {
            return function(t, n) {
                return void 0 === t ? Le(void 0) : Be("used in " + e + " instead", t, n)
            }
        },
        ot = function(e) {
            return function(t) {
                return function(n, r) {
                    if (n && "object" === (void 0 === n ? "undefined" : Ne(n)) && !Array.isArray(n)) {
                        var o = n,
                            i = ge(Object.keys(o), function(e) {
                                return !t[e]
                            });
                        if (i && e) return De(new me("Invalid " + r.label + " parameter: " + [].concat(s(r.path), [i]).join(".") + " is not an accepted parameter."));
                        var u = Le({});
                        return i && (u = Object.keys(o).reduce(function(e, n) {
                            return t[n] ? e : Le(e.value, [].concat(s(e.warnings), ["Unrecognized " + r.label + " parameter: " + [].concat(s(r.path), [n]).join(".") + " is not a recognized parameter. This may cause issues with your integration in the future."]))
                        }, u)), Object.keys(t).reduce(function(e, n) {
                            if ("error" === e.type) return e;
                            var i = t[n],
                                u = i(o[n], qe({}, r, {
                                    path: [].concat(s(r.path), [n])
                                }));
                            return "valid" === u.type && void 0 !== u.value ? Le(qe({}, e.value, a({}, n, u.value)), [].concat(s(e.warnings), s(u.warnings))) : "valid" === u.type ? Le(e.value, [].concat(s(e.warnings), s(u.warnings))) : u
                        }, u)
                    }
                    return Be("an object", n, r)
                }
            }
        },
        it = ot(!0),
        at = ot(!1),
        st = function(e, t, n, r) {
            var o = r || {},
                i = e(t, {
                    origin: o.origin || "",
                    element: o.element || "",
                    label: n,
                    path: []
                });
            return "valid" === i.type ? i : "full" === i.errorType ? i : {
                type: "error",
                errorType: "full",
                error: new me(xe(i.expected, i.actual, i.options))
            }
        },
        ut = function(e, t, n, r) {
            var o = st(e, t, n, r);
            switch (o.type) {
                case "valid":
                    return {
                        value: o.value,
                        warnings: o.warnings
                    };
                case "error":
                    throw o.error;
                default:
                    return _e(o)
            }
        },
        ct = function(e) {
            return /^http(s)?:\/\//.test(e)
        },
        lt = function(e) {
            if (!ct(e)) return null;
            var t = document.createElement("a");
            t.href = e;
            var n = t.protocol,
                r = t.host,
                o = /:80$/,
                i = /:443$/;
            return "http:" === n && o.test(r) ? r = r.replace(o, "") : "https:" === n && i.test(r) && (r = r.replace(i, "")), {
                host: r,
                protocol: n,
                origin: n + "//" + r
            }
        },
        pt = function(e) {
            var t = arguments.length > 1 && void 0 !== arguments[1] ? arguments[1] : null,
                n = lt(e);
            return !!n && n.host !== (t || window.location.host)
        },
        ft = function(e, t) {
            if ("/" === t[0]) {
                var n = lt(e);
                return n ? "" + n.origin + t : t
            }
            return "" + e.replace(/\/[^\/]*$/, "/") + t
        },
        dt = {
            CARD_ELEMENT: "CARD_ELEMENT",
            CONTROLLER: "CONTROLLER",
            METRICS_CONTROLLER: "METRICS_CONTROLLER",
            PAYMENT_REQUEST_ELEMENT: "PAYMENT_REQUEST_ELEMENT",
            PAYMENT_REQUEST: "PAYMENT_REQUEST",
            IBAN_ELEMENT: "IBAN_ELEMENT",
            IDEAL_BANK_ELEMENT: "IDEAL_BANK_ELEMENT",
            AUTHORIZE_WITH_URL: "AUTHORIZE_WITH_URL",
            THREEDS2_EAP: "THREEDS2_EAP"
        },
        ht = dt,
        yt = function(e) {
            return "https://js.stripe.com/v3/" + (e || "")
        },
        mt = function(e) {
            switch (e) {
                case "CARD_ELEMENT":
                    return yt("elements-inner-card-20c0fb346fbcc7133ab9e3049304a9b4.html");
                case "CONTROLLER":
                    return yt("controller-b7d81dedeec3c3d419eaeb8fd94a299b.html");
                case "METRICS_CONTROLLER":
                    return "https://js.stripe.com/v2/m/outer.html";
                case "PAYMENT_REQUEST_ELEMENT":
                    return yt("elements-inner-payment-request-42b14c52f52a321a5cf79a4afb43ed24.html");
                case "PAYMENT_REQUEST":
                    return yt("payment-request-inner-8dc7455d528b6357e5e5d82c1715bcf5.html");
                case "IBAN_ELEMENT":
                    return yt("elements-inner-iban-7769a52301be03e9d1287ad35b2c64a0.html");
                case "IDEAL_BANK_ELEMENT":
                    return yt("elements-inner-ideal-bank-cbbc9e761c4476a6f0588373cbd37da5.html");
                case "AUTHORIZE_WITH_URL":
                    return yt("authorize-with-url-inner-358439185371bb5b0130ed8e2e301eba.html");
                case "THREEDS2_EAP":
                    return yt("threeds2-eap-inner-09c9d4f81015fbd6464f7c70b3498ebc.html");
                default:
                    return _e(e)
            }
        },
        _t = mt,
        vt = {
            card: "card",
            cardNumber: "cardNumber",
            cardExpiry: "cardExpiry",
            cardCvc: "cardCvc",
            postalCode: "postalCode",
            iban: "iban",
            idealBank: "idealBank",
            idealBankSecondary: "idealBankSecondary",
            paymentRequestButton: "paymentRequestButton"
        },
        bt = vt,
        gt = [bt.card, bt.cardNumber, bt.cardExpiry, bt.cardCvc, bt.postalCode],
        wt = gt,
        Et = lt("https://js.stripe.com/v3/"),
        St = Et ? Et.origin : "",
        Ot = {
            family: "font-family",
            src: "src",
            unicodeRange: "unicode-range",
            style: "font-style",
            variant: "font-variant",
            stretch: "font-stretch",
            weight: "font-weight",
            display: "font-display"
        },
        kt = Object.keys(Ot).reduce(function(e, t) {
            return e[Ot[t]] = t, e
        }, {}),
        Pt = [bt.idealBank, bt.idealBankSecondary],
        At = 0,
        jt = function(e) {
            return "" + e + At++
        },
        Ct = function e() {
            var t = arguments.length > 0 && void 0 !== arguments[0] ? arguments[0] : "";
            return t ? (parseInt(t, 10) ^ 16 * Math.random() >> parseInt(t, 10) / 4).toString(16) : "00000000-0000-4000-8000-000000000000".replace(/[08]/g, e)
        },
        Tt = "function" == typeof Symbol && "symbol" == typeof Symbol.iterator ? function(e) {
            return typeof e
        } : function(e) {
            return e && "function" == typeof Symbol && e.constructor === Symbol && e !== Symbol.prototype ? "symbol" : typeof e
        },
        Rt = function e(t, n) {
            var r = [];
            return Object.keys(t).forEach(function(o) {
                var i = t[o],
                    a = n ? n + "[" + o + "]" : o;
                if (i && "object" === (void 0 === i ? "undefined" : Tt(i))) {
                    var s = e(i, a);
                    "" !== s && (r = [].concat(u(r), [s]))
                } else void 0 !== i && null !== i && (r = [].concat(u(r), [a + "=" + encodeURIComponent(String(i))]))
            }), r.join("&").replace(/%20/g, "+")
        },
        It = Rt,
        Mt = n(2),
        qt = n.n(Mt),
        Nt = window.Promise ? Promise : qt.a,
        xt = Nt,
        Lt = n(6),
        Dt = n.n(Lt),
        Ft = function() {
            function e(e, t) {
                var n = [],
                    r = !0,
                    o = !1,
                    i = void 0;
                try {
                    for (var a, s = e[Symbol.iterator](); !(r = (a = s.next()).done) && (n.push(a.value), !t || n.length !== t); r = !0);
                } catch (e) {
                    o = !0, i = e
                } finally {
                    try {
                        !r && s.return && s.return()
                    } finally {
                        if (o) throw i
                    }
                }
                return n
            }
            return function(t, n) {
                if (Array.isArray(t)) return t;
                if (Symbol.iterator in Object(t)) return e(t, n);
                throw new TypeError("Invalid attempt to destructure non-iterable instance")
            }
        }(),
        Bt = function(e, t) {
            var n = {};
            t.forEach(function(e) {
                var t = Ft(e, 2),
                    r = t[0],
                    o = t[1];
                r.split(/\s+/).forEach(function(e) {
                    e && (n[e] = n[e] || o)
                })
            }), e.className = Dt()(e.className, n)
        },
        zt = function(e, t) {
            e.style.cssText = Object.keys(t).map(function(e) {
                return e + ": " + t[e] + " !important;"
            }).join(" ")
        },
        Ut = function(e) {
            try {
                return window.parent.frames[e]
            } catch (e) {
                return null
            }
        },
        Ht = Object.assign || function(e) {
            for (var t = 1; t < arguments.length; t++) {
                var n = arguments[t];
                for (var r in n) Object.prototype.hasOwnProperty.call(n, r) && (e[r] = n[r])
            }
            return e
        },
        Wt = function(e) {
            var t = e.frameId,
                n = e.controllerId,
                r = e.type,
                o = St,
                i = void 0;
            "controller" === r ? i = Ut(t) : "group" === r ? i = Ut(n) : "outer" === r ? i = window.frames[t] : "inner" === r && (o = "*", i = window.parent), i && i.postMessage(JSON.stringify(Ht({}, e, {
                __stripeJsV3: !0
            })), o)
        },
        Kt = function(e) {
            try {
                var t = "string" == typeof e ? JSON.parse(e) : e;
                return t.__stripeJsV3 ? t : null
            } catch (e) {
                return null
            }
        },
        Yt = (n(7), function(e, t) {
            var n = e._isUserError || "IntegrationError" === e.name;
            throw t && !n && t.report("fatal.uncaught_error", {
                iframe: !1,
                name: e.name,
                element: "outer",
                message: e.message || e.description,
                fileName: e.fileName,
                lineNumber: e.lineNumber,
                columnNumber: e.columnNumber,
                stack: e.stack && e.stack.substring(0, 1e3)
            }), e
        }),
        Vt = function(e, t) {
            return function(n) {
                try {
                    return e.call(this, n)
                } catch (e) {
                    return Yt(e, t || this && this._controller)
                }
            }
        },
        $t = function(e, t) {
            return function(n, r) {
                try {
                    return e.call(this, n, r)
                } catch (e) {
                    return Yt(e, t || this && this._controller)
                }
            }
        },
        Gt = function(e, t) {
            return function(n, r, o) {
                try {
                    return e.call(this, n, r, o)
                } catch (e) {
                    return Yt(e, t || this && this._controller)
                }
            }
        },
        Jt = function(e, t) {
            return function() {
                try {
                    for (var n = arguments.length, r = Array(n), o = 0; o < n; o++) r[o] = arguments[o];
                    return e.call.apply(e, [this].concat(r))
                } catch (e) {
                    return Yt(e, t || this && this._controller)
                }
            }
        },
        Qt = function e() {
            var t = this;
            c(this, e), this._emit = function(e) {
                for (var n = arguments.length, r = Array(n > 1 ? n - 1 : 0), o = 1; o < n; o++) r[o - 1] = arguments[o];
                return (t._callbacks[e] || []).forEach(function(e) {
                    var t = e.fn;
                    if (t._isUserCallback) try {
                        t.apply(void 0, r)
                    } catch (e) {
                        throw e._isUserError = !0, e
                    } else t.apply(void 0, r)
                }), t
            }, this._once = function(e, n) {
                var r = function r() {
                    t._off(e, r), n.apply(void 0, arguments)
                };
                return t._on(e, r, n)
            }, this._removeAllListeners = function() {
                return t._callbacks = {}, t
            }, this._on = function(e, n, r) {
                return t._callbacks[e] = t._callbacks[e] || [], t._callbacks[e].push({
                    original: r,
                    fn: n
                }), t
            }, this._userOn = function(e, n) {
                if ("string" != typeof e) throw new me("When adding an event listener, the first argument should be a string event name.");
                if ("function" != typeof n) throw new me("When adding an event listener, the second argument should be a function callback.");
                return n._isUserCallback = !0, t._on(e, n)
            }, this._hasRegisteredListener = function(e) {
                return t._callbacks[e] && t._callbacks[e].length > 0
            }, this._off = function(e, n) {
                if (n) {
                    for (var r = t._callbacks[e], o = void 0, i = 0; i < r.length; i++)
                        if (o = r[i], o.fn === n || o.original === n) {
                            r.splice(i, 1);
                            break
                        }
                } else delete t._callbacks[e];
                return t
            }, this._callbacks = {};
            var n = $t(this._userOn),
                r = $t(this._off),
                o = $t(this._once),
                i = Vt(this._hasRegisteredListener),
                a = Vt(this._removeAllListeners),
                s = Jt(this._emit);
            this.on = this.addListener = this.addEventListener = n, this.off = this.removeListener = this.removeEventListener = r, this.once = o, this.hasRegisteredListener = i, this.removeAllListeners = a, this.emit = s
        },
        Zt = Qt,
        Xt = Object.assign || function(e) {
            for (var t = 1; t < arguments.length; t++) {
                var n = arguments[t];
                for (var r in n) Object.prototype.hasOwnProperty.call(n, r) && (e[r] = n[r])
            }
            return e
        },
        en = function() {
            function e(e, t) {
                for (var n = 0; n < t.length; n++) {
                    var r = t[n];
                    r.enumerable = r.enumerable || !1, r.configurable = !0, "value" in r && (r.writable = !0), Object.defineProperty(e, r.key, r)
                }
            }
            return function(t, n, r) {
                return n && e(t.prototype, n), r && e(t, r), t
            }
        }(),
        tn = function(e) {
            function t(e, n, r) {
                p(this, t);
                var o = f(this, (t.__proto__ || Object.getPrototypeOf(t)).call(this));
                return o.type = e, o.loaded = !1, o._controllerId = n, o._persistentMessages = [], o._queuedMessages = [], o._requests = {}, o.id = o._generateId(), o._iframe = o._createIFrame(r), o._on("load", function() {
                    o.loaded = !0, o._ensureMounted(), o.loaded && (o._persistentMessages.forEach(function(e) {
                        return o._send(e)
                    }), o._queuedMessages.forEach(function(e) {
                        return o._send(e)
                    }), o._queuedMessages = [])
                }), o
            }
            return d(t, e), en(t, [{
                key: "_generateId",
                value: function() {
                    return jt("__privateStripeFrame")
                }
            }, {
                key: "send",
                value: function(e) {
                    this._send({
                        message: e,
                        type: "outer",
                        frameId: this.id,
                        controllerId: this._controllerId
                    })
                }
            }, {
                key: "sendPersistent",
                value: function(e) {
                    this._ensureMounted();
                    var t = {
                        message: e,
                        type: "outer",
                        frameId: this.id,
                        controllerId: this._controllerId
                    };
                    this._persistentMessages = [].concat(l(this._persistentMessages), [t]), this.loaded && Wt(t)
                }
            }, {
                key: "action",
                value: function(e) {
                    var t = this,
                        n = arguments.length > 1 && void 0 !== arguments[1] ? arguments[1] : {},
                        r = jt(e);
                    return new xt(function(o, i) {
                        t._requests[r] = {
                            resolve: o,
                            reject: i
                        }, t._send({
                            message: {
                                action: "stripe-frame-action",
                                payload: {
                                    type: e,
                                    nonce: r,
                                    options: n
                                }
                            },
                            type: "outer",
                            frameId: t.id,
                            controllerId: t._controllerId
                        })
                    })
                }
            }, {
                key: "resolve",
                value: function(e, t) {
                    this._requests[e] && this._requests[e].resolve(t)
                }
            }, {
                key: "_send",
                value: function(e) {
                    this._ensureMounted(), this.loaded ? Wt(e) : this._queuedMessages = [].concat(l(this._queuedMessages), [e])
                }
            }, {
                key: "appendTo",
                value: function(e) {
                    e.appendChild(this._iframe)
                }
            }, {
                key: "unmount",
                value: function() {
                    this.loaded = !1, this._emit("unload")
                }
            }, {
                key: "destroy",
                value: function() {
                    this.unmount();
                    var e = this._iframe.parentElement;
                    e && e.removeChild(this._iframe), this._emit("destroy")
                }
            }, {
                key: "_ensureMounted",
                value: function() {
                    this._isMounted() || this.unmount()
                }
            }, {
                key: "_isMounted",
                value: function() {
                    return !!document.body && document.body.contains(this._iframe)
                }
            }, {
                key: "_createIFrame",
                value: function(e) {
                    var t = window.location.href.toString(),
                        n = lt(t),
                        r = n ? n.origin : "",
                        o = e.queryString && "string" == typeof e.queryString ? e.queryString : It(Xt({}, e, {
                            origin: r,
                            referrer: t,
                            controllerId: this._controllerId
                        })),
                        i = document.createElement("iframe");
                    return i.setAttribute("frameborder", "0"), i.setAttribute("allowTransparency", "true"), i.setAttribute("scrolling", "no"), i.setAttribute("name", this.id), i.setAttribute("allowpaymentrequest", "true"), i.src = _t(this.type) + "#" + o, i
                }
            }]), t
        }(Zt),
        nn = tn,
        rn = function() {
            function e(e, t) {
                for (var n = 0; n < t.length; n++) {
                    var r = t[n];
                    r.enumerable = r.enumerable || !1, r.configurable = !0, "value" in r && (r.writable = !0), Object.defineProperty(e, r.key, r)
                }
            }
            return function(t, n, r) {
                return n && e(t.prototype, n), r && e(t, r), t
            }
        }(),
        on = function e(t, n, r) {
            null === t && (t = Function.prototype);
            var o = Object.getOwnPropertyDescriptor(t, n);
            if (void 0 === o) {
                var i = Object.getPrototypeOf(t);
                return null === i ? void 0 : e(i, n, r)
            }
            if ("value" in o) return o.value;
            var a = o.get;
            if (void 0 !== a) return a.call(r)
        },
        an = {
            border: "none",
            margin: "0",
            padding: "0",
            width: "1px",
            "min-width": "100%",
            overflow: "hidden",
            display: "block",
            visibility: "hidden",
            position: "fixed",
            height: "1px",
            "pointer-events": "none"
        },
        sn = function(e) {
            function t(e, n, r) {
                h(this, t);
                var o = y(this, (t.__proto__ || Object.getPrototypeOf(t)).call(this, e, n, r));
                if (o.autoload = r.autoload || !1, "complete" === document.readyState) o._ensureMounted();
                else {
                    var i = o._ensureMounted.bind(o);
                    document.addEventListener("DOMContentLoaded", i), window.addEventListener("load", i), setTimeout(i, 5e3)
                }
                return o
            }
            return m(t, e), rn(t, [{
                key: "_ensureMounted",
                value: function() {
                    on(t.prototype.__proto__ || Object.getPrototypeOf(t.prototype), "_ensureMounted", this).call(this), this._isMounted() || this._autoMount()
                }
            }, {
                key: "_autoMount",
                value: function() {
                    if (document.body) this.appendTo(document.body);
                    else if ("complete" === document.readyState || "interactive" === document.readyState) throw new me("Stripe.js requires that your page has a <body> element.");
                    this.autoload && (this.loaded = !0)
                }
            }, {
                key: "_createIFrame",
                value: function(e) {
                    var n = on(t.prototype.__proto__ || Object.getPrototypeOf(t.prototype), "_createIFrame", this).call(this, e);
                    return n.setAttribute("aria-hidden", "true"), n.setAttribute("allowpaymentrequest", "true"), n.setAttribute("tabIndex", "-1"), zt(n, an), n
                }
            }]), t
        }(nn),
        un = sn,
        cn = function() {
            function e(e, t) {
                for (var n = 0; n < t.length; n++) {
                    var r = t[n];
                    r.enumerable = r.enumerable || !1, r.configurable = !0, "value" in r && (r.writable = !0), Object.defineProperty(e, r.key, r)
                }
            }
            return function(t, n, r) {
                return n && e(t.prototype, n), r && e(t, r), t
            }
        }(),
        ln = function(e) {
            function t() {
                return _(this, t), v(this, (t.__proto__ || Object.getPrototypeOf(t)).apply(this, arguments))
            }
            return b(t, e), cn(t, [{
                key: "_generateId",
                value: function() {
                    return this._controllerId
                }
            }]), t
        }(un),
        pn = ln,
        fn = function() {
            function e(e, t) {
                for (var n = 0; n < t.length; n++) {
                    var r = t[n];
                    r.enumerable = r.enumerable || !1, r.configurable = !0, "value" in r && (r.writable = !0), Object.defineProperty(e, r.key, r)
                }
            }
            return function(t, n, r) {
                return n && e(t.prototype, n), r && e(t, r), t
            }
        }(),
        dn = function e(t, n, r) {
            null === t && (t = Function.prototype);
            var o = Object.getOwnPropertyDescriptor(t, n);
            if (void 0 === o) {
                var i = Object.getPrototypeOf(t);
                return null === i ? void 0 : e(i, n, r)
            }
            if ("value" in o) return o.value;
            var a = o.get;
            if (void 0 !== a) return a.call(r)
        },
        hn = {
            border: "none",
            margin: "0",
            padding: "0",
            width: "1px",
            "min-width": "100%",
            overflow: "hidden",
            display: "block"
        },
        yn = function(e) {
            function t() {
                return g(this, t), w(this, (t.__proto__ || Object.getPrototypeOf(t)).apply(this, arguments))
            }
            return E(t, e), fn(t, [{
                key: "update",
                value: function(e) {
                    this.send({
                        action: "stripe-user-update",
                        payload: e
                    })
                }
            }, {
                key: "updateStyle",
                value: function(e) {
                    var t = this;
                    Object.keys(e).forEach(function(n) {
                        t._iframe.style[n] = e[n]
                    })
                }
            }, {
                key: "focus",
                value: function() {
                    this.loaded && this.send({
                        action: "stripe-user-focus",
                        payload: {}
                    })
                }
            }, {
                key: "blur",
                value: function() {
                    this.loaded && (this._iframe.contentWindow.blur(), this._iframe.blur())
                }
            }, {
                key: "clear",
                value: function() {
                    this.send({
                        action: "stripe-user-clear",
                        payload: {}
                    })
                }
            }, {
                key: "_createIFrame",
                value: function(e) {
                    var n = dn(t.prototype.__proto__ || Object.getPrototypeOf(t.prototype), "_createIFrame", this).call(this, e);
                    return n.setAttribute("title", "Secure payment input frame"), zt(n, hn), n
                }
            }]), t
        }(nn),
        mn = yn,
        _n = function(e) {
            e.preventDefault()
        },
        vn = [32, 33, 34, 35, 36, 37, 38, 39, 40],
        bn = function(e) {
            vn.indexOf(e.keyCode) >= 0 && _n(e)
        },
        gn = {
            capture: !0,
            passive: !1
        },
        wn = function() {
            return window.addEventListener("wheel", _n, gn), window.addEventListener("touchmove", _n, gn), window.addEventListener("keydown", bn),
                function() {
                    window.removeEventListener("wheel", _n, gn), window.removeEventListener("touchmove", _n, gn), window.removeEventListener("keydown", bn)
                }
        },
        En = function() {
            function e(e, t) {
                for (var n = 0; n < t.length; n++) {
                    var r = t[n];
                    r.enumerable = r.enumerable || !1, r.configurable = !0, "value" in r && (r.writable = !0), Object.defineProperty(e, r.key, r)
                }
            }
            return function(t, n, r) {
                return n && e(t.prototype, n), r && e(t, r), t
            }
        }(),
        Sn = function e(t, n, r) {
            null === t && (t = Function.prototype);
            var o = Object.getOwnPropertyDescriptor(t, n);
            if (void 0 === o) {
                var i = Object.getPrototypeOf(t);
                return null === i ? void 0 : e(i, n, r)
            }
            if ("value" in o) return o.value;
            var a = o.get;
            if (void 0 !== a) return a.call(r)
        },
        On = function(e) {
            return {
                display: e ? "block" : "none",
                visibility: "visible",
                position: "fixed",
                "z-index": "2147483647",
                top: "0",
                left: "0",
                width: "100%",
                height: "100%",
                margin: "0px",
                padding: "0px",
                border: "0px none transparent",
                "overflow-x": "hidden",
                "overflow-y": "auto"
            }
        },
        kn = On(!1),
        Pn = On(!0),
        An = function(e) {
            function t(e, n, r) {
                S(this, t);
                var o = O(this, (t.__proto__ || Object.getPrototypeOf(t)).call(this, e, n, r));
                return o._mountAfterBody = function() {
                    if (!o._isMounted())
                        if (document.body) o.appendTo(document.body);
                        else if ("complete" === document.readyState || "interactive" === document.readyState) throw new me("Stripe.js requires that your page has a <body> element.")
                }, o._autoMount = function() {
                    "complete" === document.readyState ? o._mountAfterBody() : (document.addEventListener("DOMContentLoaded", o._mountAfterBody), window.addEventListener("load", o._mountAfterBody))
                }, o._tryRestoreBodyScroll = function() {
                    o.restoreBodyScroll && (o.restoreBodyScroll(), o.restoreBodyScroll = null)
                }, o.show = function() {
                    o.restoreBodyScroll = wn(), zt(o._iframe, Pn)
                }, o.hide = function() {
                    zt(o._iframe, kn), o._tryRestoreBodyScroll()
                }, o.destroy = function() {
                    o._tryRestoreBodyScroll(), Sn(t.prototype.__proto__ || Object.getPrototypeOf(t.prototype), "destroy", o).call(o)
                }, o.restoreBodyScroll = null, o._autoMount(), o
            }
            return k(t, e), En(t, [{
                key: "_createIFrame",
                value: function(e) {
                    var n = Sn(t.prototype.__proto__ || Object.getPrototypeOf(t.prototype), "_createIFrame", this).call(this, e);
                    return zt(n, kn), n
                }
            }]), t
        }(nn),
        jn = An,
        Cn = Object.assign || function(e) {
            for (var t = 1; t < arguments.length; t++) {
                var n = arguments[t];
                for (var r in n) Object.prototype.hasOwnProperty.call(n, r) && (e[r] = n[r])
            }
            return e
        },
        Tn = function() {
            function e(e, t) {
                for (var n = 0; n < t.length; n++) {
                    var r = t[n];
                    r.enumerable = r.enumerable || !1, r.configurable = !0, "value" in r && (r.writable = !0), Object.defineProperty(e, r.key, r)
                }
            }
            return function(t, n, r) {
                return n && e(t.prototype, n), r && e(t, r), t
            }
        }(),
        Rn = function e(t, n, r) {
            null === t && (t = Function.prototype);
            var o = Object.getOwnPropertyDescriptor(t, n);
            if (void 0 === o) {
                var i = Object.getPrototypeOf(t);
                return null === i ? void 0 : e(i, n, r)
            }
            if ("value" in o) return o.value;
            var a = o.get;
            if (void 0 !== a) return a.call(r)
        },
        In = {
            display: "block",
            position: "absolute",
            "z-index": "1000",
            width: "1px",
            "min-width": "100%",
            margin: "2px 0 0 0",
            padding: "0",
            border: "none",
            overflow: "hidden"
        },
        Mn = function(e) {
            function t() {
                return P(this, t), A(this, (t.__proto__ || Object.getPrototypeOf(t)).apply(this, arguments))
            }
            return j(t, e), Tn(t, [{
                key: "updateStyle",
                value: function(e) {
                    var t = this;
                    Object.keys(e).forEach(function(n) {
                        t._iframe.style[n] = e[n]
                    })
                }
            }, {
                key: "update",
                value: function(e) {
                    this.send({
                        action: "stripe-user-update",
                        payload: e
                    })
                }
            }, {
                key: "_createIFrame",
                value: function(e) {
                    var n = Rn(t.prototype.__proto__ || Object.getPrototypeOf(t.prototype), "_createIFrame", this).call(this, Cn({}, e, {
                        isSecondaryFrame: !0
                    }));
                    return zt(n, In), n.style.height = "0", n
                }
            }]), t
        }(nn),
        qn = Mn,
        Nn = function(e) {
            var t = lt(e),
                n = t ? t.host : "";
            return "stripe.com" === n || !!n.match(/\.stripe\.(com|me)$/)
        },
        xn = function(e, t) {
            var n = lt(e),
                r = lt(t);
            return !(!n || !r) && n.origin === r.origin
        },
        Ln = function(e) {
            return xn(e, "https://js.stripe.com/v3/")
        },
        Dn = function(e) {
            return Ln(e) || Nn(e)
        },
        Fn = ["button", "checkbox", "file", "hidden", "image", "submit", "radio", "reset"],
        Bn = function(e) {
            var t = e.tagName;
            if (e.isContentEditable || "TEXTAREA" === t) return !0;
            if ("INPUT" !== t) return !1;
            var n = e.getAttribute("type");
            return -1 === Fn.indexOf(n)
        },
        zn = Bn,
        Un = function(e) {
            return /(MSIE ([0-9]{1,}[.0-9]{0,})|Trident\/)/i.test(e)
        },
        Hn = function(e) {
            return /SamsungBrowser/.test(e)
        },
        Wn = function(e) {
            return /iPad|iPhone/i.test(e) && !Un(e)
        },
        Kn = function(e) {
            return /Android/i.test(e) && !Un(e)
        },
        Yn = window.navigator.userAgent,
        Vn = (function(e) {
            /Edge\//i.test(e)
        }(Yn), Un(Yn), function(e) {
            return /MSIE 9/i.test(e)
        }(Yn)),
        $n = (function(e) {
            /MSIE ([0-9]{1,}[.0-9]{0,})/i.test(e)
        }(Yn), Wn(Yn)),
        Gn = (function(e) {
            Wn(e) || Kn(e)
        }(Yn), Kn(Yn), function(e) {
            /Android 4\./i.test(e) && !/Chrome/i.test(e) && Kn(e)
        }(Yn), function(e) {
            /^((?!chrome|android).)*safari/i.test(e) && Hn(e)
        }(Yn), function(e) {
            /Firefox\//i.test(e)
        }(Yn), function(e) {
            /Firefox\/(50|51|[0-4]?\d)([^\d]|$)/i.test(e)
        }(Yn), Hn(Yn)),
        Jn = (function(e) {
            Kn(e) && /Chrome\/(6[6-9]|[7-9]\d+|[1-9]\d{2,})/i.test(e)
        }(Yn), window.ApplePaySession, ce = {}, C(ce, bt.card, {
            unique: !0,
            conflict: [bt.cardNumber, bt.cardExpiry, bt.cardCvc, bt.postalCode],
            beta: !1
        }), C(ce, bt.cardNumber, {
            unique: !0,
            conflict: [bt.card],
            beta: !1
        }), C(ce, bt.cardExpiry, {
            unique: !0,
            conflict: [bt.card],
            beta: !1
        }), C(ce, bt.cardCvc, {
            unique: !0,
            conflict: [bt.card],
            beta: !1
        }), C(ce, bt.postalCode, {
            unique: !0,
            conflict: [bt.card],
            beta: !1
        }), C(ce, bt.paymentRequestButton, {
            unique: !0,
            conflict: [],
            beta: !1
        }), C(ce, bt.iban, {
            unique: !0,
            conflict: [],
            beta: !1
        }), C(ce, bt.idealBank, {
            unique: !0,
            conflict: [],
            beta: !1
        }), ce),
        Qn = Jn,
        Zn = (le = {}, T(le, bt.card, ht.CARD_ELEMENT), T(le, bt.cardNumber, ht.CARD_ELEMENT), T(le, bt.cardExpiry, ht.CARD_ELEMENT), T(le, bt.cardCvc, ht.CARD_ELEMENT), T(le, bt.postalCode, ht.CARD_ELEMENT), T(le, bt.paymentRequestButton, ht.PAYMENT_REQUEST_ELEMENT), T(le, bt.iban, ht.IBAN_ELEMENT), T(le, bt.idealBank, ht.IDEAL_BANK_ELEMENT), le),
        Xn = Zn,
        er = ["brand"],
        tr = ["country", "bankName"],
        nr = (pe = {}, R(pe, bt.card, er), R(pe, bt.cardNumber, er), R(pe, bt.iban, tr), pe),
        rr = R({}, bt.idealBank, {
            secondary: bt.idealBankSecondary
        }),
        or = "function" == typeof Symbol && "symbol" == typeof Symbol.iterator ? function(e) {
            return typeof e
        } : function(e) {
            return e && "function" == typeof Symbol && e.constructor === Symbol && e !== Symbol.prototype ? "symbol" : typeof e
        },
        ir = Object.assign || function(e) {
            for (var t = 1; t < arguments.length; t++) {
                var n = arguments[t];
                for (var r in n) Object.prototype.hasOwnProperty.call(n, r) && (e[r] = n[r])
            }
            return e
        },
        ar = !1,
        sr = function(e, t) {
            return document.activeElement === e._iframe || e._iframe.parentElement && document.activeElement === t
        },
        ur = function e(t) {
            M(this, e), cr.call(this);
            var n = t.apiKey,
                r = t.stripeAccount,
                o = t.stripeJsId;
            this._id = jt("__privateStripeController"), this._stripeJsId = o, this._apiKey = n, this._stripeAccount = r, this._controllerFrame = new pn(ht.CONTROLLER, this._id, ir({}, t)), this._frames = {}, this._requests = {}, this._setupPostMessage(), this._handleMessage = Vt(this._handleMessage, this)
        },
        cr = function() {
            var e = this;
            this._sendCAReq = function(t) {
                var n = jt(t.tag);
                return new xt(function(r, o) {
                    e._requests[n] = {
                        resolve: r,
                        reject: o
                    }, e._controllerFrame.send({
                        action: "stripe-safe-controller-action-request",
                        payload: {
                            nonce: n,
                            caReq: t
                        }
                    })
                })
            }, this.action = {
                retrievePaymentIntent: function(t) {
                    return e._sendCAReq({
                        tag: "RETRIEVE_PAYMENT_INTENT",
                        value: t
                    })
                },
                confirmPaymentIntent: function(t) {
                    return e._sendCAReq({
                        tag: "CONFIRM_PAYMENT_INTENT",
                        value: t
                    })
                },
                fetchLocale: function(t) {
                    return e._sendCAReq({
                        tag: "FETCH_LOCALE",
                        value: t
                    })
                },
                updateCSSFonts: function(t) {
                    return e._sendCAReq({
                        tag: "UPDATE_CSS_FONTS",
                        value: t
                    })
                },
                createApplePaySession: function(t) {
                    return e._sendCAReq({
                        tag: "CREATE_APPLE_PAY_SESSION",
                        value: t
                    })
                },
                retrieveSource: function(t) {
                    return e._sendCAReq({
                        tag: "RETRIEVE_SOURCE",
                        value: t
                    })
                },
                tokenizeWithElement: function(t) {
                    return e._sendCAReq({
                        tag: "TOKENIZE_WITH_ELEMENT",
                        value: t
                    })
                },
                tokenizeWithData: function(t) {
                    return e._sendCAReq({
                        tag: "TOKENIZE_WITH_DATA",
                        value: t
                    })
                },
                createSourceWithElement: function(t) {
                    return e._sendCAReq({
                        tag: "CREATE_SOURCE_WITH_ELEMENT",
                        value: t
                    })
                },
                createSourceWithData: function(t) {
                    return e._sendCAReq({
                        tag: "CREATE_SOURCE_WITH_DATA",
                        value: t
                    })
                },
                createPaymentPage: function(t) {
                    return e._sendCAReq({
                        tag: "CREATE_PAYMENT_PAGE",
                        value: t
                    })
                }
            }, this.createElementFrame = function(t, n) {
                var r = n.groupId,
                    o = I(n, ["groupId"]),
                    i = new mn(t, e._id, ir({}, o, {
                        keyMode: Ie(e._apiKey)
                    }));
                return e._setupFrame(i, t, r)
            }, this.createSecondaryElementFrame = function(t, n) {
                var r = n.groupId,
                    o = I(n, ["groupId"]),
                    i = new qn(t, e._id, o);
                return e._setupFrame(i, t, r)
            }, this.createHiddenFrame = function(t, n) {
                var r = new un(t, e._id, n);
                return e._setupFrame(r, t)
            }, this.createLightboxFrame = function(t, n) {
                var r = new jn(t, e._id, n);
                return e._setupFrame(r, t)
            }, this._setupFrame = function(t, n, r) {
                return e._frames[t.id] = t, e._controllerFrame.sendPersistent({
                    action: "stripe-user-createframe",
                    payload: {
                        newFrameId: t.id,
                        frameType: n,
                        groupId: r
                    }
                }), t._on("unload", function() {
                    e._controllerFrame.sendPersistent({
                        action: "stripe-frame-unload",
                        payload: {
                            unloadedFrameId: t.id
                        }
                    })
                }), t._on("destroy", function() {
                    delete e._frames[t.id], e._controllerFrame.sendPersistent({
                        action: "stripe-frame-destroy",
                        payload: {
                            destroyedFrameId: t.id
                        }
                    })
                }), t._on("load", function() {
                    e._controllerFrame.sendPersistent({
                        action: "stripe-frame-load",
                        payload: {
                            loadedFrameId: t.id
                        }
                    }), e._controllerFrame.loaded && t.send({
                        action: "stripe-controller-load",
                        payload: {}
                    })
                }), t
            }, this.report = function(t) {
                var n = arguments.length > 1 && void 0 !== arguments[1] ? arguments[1] : {};
                e._controllerFrame.send({
                    action: "stripe-controller-report",
                    payload: {
                        event: t,
                        data: n
                    }
                })
            }, this.warn = function() {
                for (var t = arguments.length, n = Array(t), r = 0; r < t; r++) n[r] = arguments[r];
                e._controllerFrame.send({
                    action: "stripe-controller-warn",
                    payload: {
                        args: n
                    }
                })
            }, this.controllerFor = function() {
                return "outer"
            }, this._setupPostMessage = function() {
                window.addEventListener("message", function(t) {
                    var n = t.data,
                        r = t.origin,
                        o = Kt(n);
                    o && xn(St, r) && e._handleMessage(o)
                })
            }, this._handleMessage = function(t) {
                var n = t.controllerId,
                    r = t.frameId,
                    o = t.message,
                    i = e._frames[r];
                if (n === e._id) switch (o.action) {
                    case "stripe-frame-event":
                        var a = o.payload,
                            s = a.event,
                            u = a.data;
                        if (i) {
                            if ($n) {
                                var c = i._iframe.parentElement,
                                    l = c && c.querySelector(".__PrivateStripeElement-input");
                                if ("focus" === s && !ar && !sr(i, l)) {
                                    l && l.focus(), ar = !0;
                                    break
                                }
                                if ("blur" === s && ar) {
                                    ar = !1;
                                    break
                                }
                                "blur" === s && setTimeout(function() {
                                    var e = document.activeElement;
                                    if (e && !sr(i, l) && !zn(e)) {
                                        var t = c && c.querySelector(".__PrivateStripeElement-safariInput");
                                        t && (t.focus(), t.blur()), e.focus()
                                    }
                                }, 400)
                            }
                            i._emit(s, u)
                        }
                        break;
                    case "stripe-frame-action-complete":
                        i && i.resolve(o.payload.nonce, o.payload.result);
                        break;
                    case "stripe-frame-error":
                        throw new me(o.payload.message);
                    case "stripe-integration-error":
                        i && i._emit("__privateIntegrationError", {
                            message: o.payload.message
                        });
                        break;
                    case "stripe-controller-load":
                        e._controllerFrame._emit("load"), Object.keys(e._frames).forEach(function(t) {
                            return e._frames[t].send({
                                action: "stripe-controller-load",
                                payload: {}
                            })
                        });
                        break;
                    case "stripe-safe-controller-action-response":
                        e._requests[o.payload.nonce] && e._requests[o.payload.nonce].resolve(o.payload.caRes);
                        break;
                    case "stripe-safe-controller-action-error":
                        if (e._requests[o.payload.nonce]) {
                            var p = o.payload.caErr;
                            "object" === (void 0 === p ? "undefined" : or(p)) && null !== p && "string" == typeof p.name && "IntegrationError" === p.name ? e._requests[o.payload.nonce].reject(new me("string" == typeof p.message ? p.message : "")) : e._requests[o.payload.nonce].reject(p)
                        }
                }
            }
        },
        lr = ur,
        pr = function(e) {
            function t() {
                q(this, t);
                var e = N(this, (t.__proto__ || Object.getPrototypeOf(t)).call(this));
                return e.name = "NetworkError", e
            }
            return x(t, e), t
        }(Error),
        fr = pr,
        dr = Object.assign || function(e) {
            for (var t = 1; t < arguments.length; t++) {
                var n = arguments[t];
                for (var r in n) Object.prototype.hasOwnProperty.call(n, r) && (e[r] = n[r])
            }
            return e
        },
        hr = {
            Accept: "application/json",
            "Content-Type": "application/x-www-form-urlencoded"
        },
        yr = function(e) {
            return Object.keys(hr).forEach(function(t) {
                e.setRequestHeader(t, hr[t])
            }), e
        },
        mr = function e(t) {
            return new xt(function(n, r) {
                var o = t.method,
                    i = t.url,
                    a = t.data,
                    s = t.withCredentials,
                    u = a ? It(a) : "",
                    c = !window.XMLHttpRequest || pt(i) && void 0 === (new XMLHttpRequest).withCredentials,
                    l = "GET" === o && u ? i + "?" + u : i,
                    p = "GET" === o ? "" : u;
                if (c) {
                    var f = new window.XDomainRequest;
                    try {
                        f.open(o, l)
                    } catch (e) {
                        r(e)
                    }
                    f.onerror = function() {
                        n({
                            responseText: JSON.stringify({
                                error: {
                                    type: "api_error"
                                }
                            })
                        })
                    }, f.onload = function() {
                        n({
                            status: 200,
                            responseText: f.responseText
                        })
                    }, setTimeout(function() {
                        f.send(p)
                    }, 0)
                } else {
                    var d = new XMLHttpRequest;
                    s && (d.withCredentials = s), d.open(o, l, !0), yr(d), d.onreadystatechange = function() {
                        4 === d.readyState && (d.onreadystatechange = function() {}, 0 === d.status ? s ? r(new fr) : e(dr({}, t, {
                            withCredentials: !0
                        })).then(n, r) : n(d))
                    };
                    try {
                        d.send(p)
                    } catch (e) {
                        r(e)
                    }
                }
            })
        },
        _r = mr,
        vr = Object.assign || function(e) {
            for (var t = 1; t < arguments.length; t++) {
                var n = arguments[t];
                for (var r in n) Object.prototype.hasOwnProperty.call(n, r) && (e[r] = n[r])
            }
            return e
        },
        br = function(e, t) {
            var n = /@font-face[ ]?{[^}]*}/g,
                r = e.match(n);
            if (!r) throw new me("No @font-face rules found in file from " + t);
            return r
        },
        gr = function(e) {
            var t = e.match(/@font-face[ ]?{([^}]*)}/);
            return t ? t[1] : ""
        },
        wr = function(e, t) {
            var n = e.replace(/\/\*.*\*\//g, "").trim(),
                r = n.length && /;$/.test(n) ? n : n + ";",
                o = r.match(/((([^;(]*\([^()]*\)[^;)]*)|[^;]+)+)(?=;)/g);
            if (!o) throw new me("Found @font-face rule containing no valid font-properties in file from " + t);
            return o
        },
        Er = function(e, t) {
            var n = e.indexOf(":");
            if (-1 === n) throw new me("Invalid css declaration in file from " + t + ': "' + e + '"');
            var r = e.slice(0, n).trim(),
                o = kt[r];
            if (!o) throw new me("Unsupported css property in file from " + t + ': "' + r + '"');
            return {
                property: o,
                value: e.slice(n + 1).trim()
            }
        },
        Sr = function(e, t) {
            var n = e.reduce(function(e, n) {
                var r = Er(n, t),
                    o = r.property,
                    i = r.value;
                return vr({}, e, L({}, o, i))
            }, {});
            return ["family", "src"].forEach(function(e) {
                if (!n[e]) throw new me("Missing css property in file from " + t + ': "' + Ot[e] + '"')
            }), n
        },
        Or = function(e) {
            return _r({
                url: e,
                method: "GET"
            }).then(function(e) {
                return e.responseText
            }).then(function(t) {
                return br(t, e).map(function(t) {
                    var n = gr(t),
                        r = wr(n, e);
                    return Sr(r, e)
                })
            })
        },
        kr = Or,
        Pr = function(e, t) {
            if (!(e && e in Qn)) throw new me("A valid Element name must be provided. Valid Elements are:\n" + Object.keys(Qn).filter(function(e) {
                return !Qn[e].beta
            }).join(", ") + "; you passed: " + e + ".");
            if (Qn[e].unique && -1 !== t.indexOf(e)) throw new me("Can only create one Element of type " + e + ".");
            var n = Pe(t, Qn[e].conflict);
            if (n.length) {
                var r = n[0];
                throw new me("Cannot create an Element of type " + e + " after an Element of type " + r + " has already been created.")
            }
        },
        Ar = function(e, t) {
            var n = Array.prototype.slice.call(document.querySelectorAll("a[href], area[href], input:not([disabled]),\n  select:not([disabled]), textarea:not([disabled]), button:not([disabled]),\n  object, embed, *[tabindex], *[contenteditable]")),
                r = [];
            n.forEach(function(e) {
                var t = e.getAttribute("tabindex"),
                    n = !t || parseInt(t, 10) >= 0,
                    o = e.getBoundingClientRect(),
                    i = o.width > 0 && o.height > 0;
                n && i && r.push(e)
            });
            var o = we(r, function(t) {
                return t === e || e.contains(t)
            });
            return r[o + ("previous" === t ? -1 : 1)]
        },
        jr = Ar,
        Cr = "14px",
        Tr = function(e) {
            var t = e.split(" ").map(function(e) {
                return parseInt(e.trim(), 10)
            });
            return 1 === t.length || 2 === t.length ? 2 * t[0] : 3 === t.length || 4 === t.length ? t[0] + t[2] : 0
        },
        Rr = function() {
            var e = arguments.length > 0 && void 0 !== arguments[0] ? arguments[0] : "1.2em",
                t = arguments.length > 1 && void 0 !== arguments[1] ? arguments[1] : Cr,
                n = arguments.length > 2 && void 0 !== arguments[2] ? arguments[2] : "0",
                r = Tr(n);
            if ("string" == typeof e && /^[0-9.]+px$/.test(e)) {
                return parseFloat(e.toString().replace(/[^0-9.]/g, "")) + r + "px"
            }
            var o = parseFloat(e.toString().replace(/[^0-9.]/g, "")),
                i = parseFloat(Cr.replace(/[^0-9.]/g, "")),
                a = parseFloat(t.toString().replace(/[^0-9.]/g, "")),
                s = void 0;
            if ("string" == typeof t && /^(\d+|\d*\.\d+)px$/.test(t)) s = a;
            else if ("string" == typeof t && /^(\d+|\d*\.\d+)em$/.test(t)) s = a * i;
            else if ("string" == typeof t && /^(\d+|\d*\.\d+)%$/.test(t)) s = a / 100 * i;
            else {
                if ("string" != typeof t || !/^[\d.]+$/.test(t) && !/^\d*\.(px|em|%)$/.test(t)) return "100%";
                s = i
            }
            var u = o * s + r,
                c = u + "px";
            return /^[0-9.]+px$/.test(c) ? c : "100%"
        },
        Ir = Rr,
        Mr = function(e, t) {
            return e ? window.getComputedStyle(e, t) : null
        },
        qr = Mr,
        Nr = function() {
            if (!window.PaymentRequest) return null;
            if (/CriOS\/59/.test(navigator.userAgent)) return null;
            if (/.*\(.*; wv\).*Chrome\/(?:53|54)\.\d.*/g.test(navigator.userAgent)) return null;
            var e = window.PaymentRequest;
            return e.prototype.canMakePayment || (e.prototype.canMakePayment = function() {
                return xt.resolve(!1)
            }), e
        }(),
        xr = {
            CAN_MAKE_PAYMENT: "CAN_MAKE_PAYMENT"
        },
        Lr = function() {
            try {
                return window.location.origin === window.top.location.origin
            } catch (e) {
                return !1
            }
        },
        Dr = void 0,
        Fr = function(e) {
            var t = {};
            return function(n) {
                if (void 0 !== t[n]) return t[n];
                var r = e(n);
                return t[n] = r, r
            }
        }(function(e) {
            return window.ApplePaySession.canMakePaymentsWithActiveCard(e).then(function(e) {
                return Dr && Dr("payreq.can_make_payment_native_response", {
                    available: e
                }), e
            })
        }),
        Br = function(e, t, n, r) {
            if (Dr = r, window.ApplePaySession) {
                if (Lr()) {
                    if (n && "https:" !== window.location.protocol) return window.console && window.console.warn("To test Apple Pay, you must serve this page over HTTPS."), xt.resolve(!1);
                    if (window.ApplePaySession.supportsVersion(2)) {
                        var o = t ? [e, t] : [e],
                            i = "merchant." + o.join(".") + ".stripe";
                        return Fr(i).then(function(r) {
                            if (n && !r && window.console) {
                                var o = t ? "or stripeAccount parameter (" + t + ") " : "";
                                window.console.warn("Either you do not have a card saved to your Wallet or the current domain (" + e + ") " + o + "is not registered for Apple Pay. Visit https://dashboard.stripe.com/account/apple_pay to register this domain.")
                            }
                            return r
                        })
                    }
                    return n && window.console && window.console.warn("This version of Safari does not support ApplePay JS version 2."), xt.resolve(!1)
                }
                return xt.resolve(!1)
            }
            return xt.resolve(!1)
        },
        zr = null,
        Ur = function(e, t) {
            return null !== zr ? xt.resolve(zr) : Nr ? Gn ? xt.resolve(!1) : t && "https:" !== window.location.protocol ? (window.console && window.console.warn("To test Payment Request, you must serve this page over HTTPS."), xt.resolve(!1)) : e ? e.action(xr.CAN_MAKE_PAYMENT).then(function(e) {
                var t = e.available;
                return zr = "boolean" == typeof t && t
            }) : xt.resolve(!1) : xt.resolve(!1)
        },
        Hr = Object.assign || function(e) {
            for (var t = 1; t < arguments.length; t++) {
                var n = arguments[t];
                for (var r in n) Object.prototype.hasOwnProperty.call(n, r) && (e[r] = n[r])
            }
            return e
        },
        Wr = {
            merchantCapabilities: ["supports3DS"],
            displayItems: []
        },
        Kr = {
            amount: Xe,
            label: Je,
            pending: ze(Ze)
        },
        Yr = {
            amount: Xe,
            label: Je,
            pending: ze(Ze),
            id: Qe(Je, function() {
                return jt("shippingOption")
            }),
            detail: Qe(Je, function() {
                return ""
            })
        },
        Vr = {
            displayItems: ze(tt(at(Kr))),
            shippingOptions: ze(nt("id")(tt(at(Yr)))),
            total: ze(at(Kr))
        },
        $r = {
            shipping: "shipping",
            delivery: "delivery",
            pickup: "pickup"
        },
        Gr = {
            requestShipping: ze(Ze),
            requestPayerName: ze(Ze),
            requestPayerEmail: ze(Ze),
            requestPayerPhone: ze(Ze),
            shippingType: ze(Ye.apply(void 0, D(Object.keys($r))))
        },
        Jr = Hr({}, Gr, {
            displayItems: ze(tt(at(Kr))),
            shippingOptions: ze(nt("id")(tt(at(Yr)))),
            total: at(Kr),
            currency: Ge,
            country: $e,
            jcbEnabled: ze(Ze)
        }),
        Qr = {
            success: "success",
            fail: "fail",
            invalid_payer_name: "invalid_payer_name",
            invalid_payer_email: "invalid_payer_email",
            invalid_payer_phone: "invalid_payer_phone",
            invalid_shipping_address: "invalid_shipping_address"
        },
        Zr = Hr({}, Vr, {
            status: Ye.apply(void 0, D(Object.keys(Qr)))
        }),
        Xr = Hr({}, Vr, {
            currency: ze(Ge)
        }),
        eo = at(Zr),
        to = it(Xr),
        no = at(Jr),
        ro = ["mastercard", "visa"],
        oo = ["AT", "AU", "BE", "CA", "CH", "DE", "DK", "ES", "FI", "FR", "GB", "HK", "IE", "IT", "JP", "LU", "NL", "NO", "NZ", "PT", "SE", "SG", "US"],
        io = function(e, t) {
            var n = "US" === e || t ? ["discover", "diners", "jcb"].concat(ro) : ro;
            return -1 !== oo.indexOf(e) ? ["amex"].concat(F(n)) : n
        },
        ao = function(e, t) {
            return io(e, t).reduce(function(e, t) {
                return "mastercard" === t ? [].concat(F(e), ["masterCard"]) : "diners" === t ? e : [].concat(F(e), [t])
            }, [])
        },
        so = {
            bif: 1,
            clp: 1,
            djf: 1,
            gnf: 1,
            jpy: 1,
            kmf: 1,
            krw: 1,
            mga: 1,
            pyg: 1,
            rwf: 1,
            vnd: 1,
            vuv: 1,
            xaf: 1,
            xof: 1,
            xpf: 1
        },
        uo = function(e) {
            var t = so[e.toLowerCase()] || 100;
            return {
                unitSize: 1 / t,
                fractionDigits: Math.log(t) / Math.log(10)
            }
        },
        co = function(e, t) {
            var n = uo(t);
            return (e * n.unitSize).toFixed(n.fractionDigits)
        },
        lo = Object.assign || function(e) {
            for (var t = 1; t < arguments.length; t++) {
                var n = arguments[t];
                for (var r in n) Object.prototype.hasOwnProperty.call(n, r) && (e[r] = n[r])
            }
            return e
        },
        po = function(e, t) {
            return {
                amount: co(e.amount, t.currency),
                label: e.label,
                type: e.pending ? "pending" : "final"
            }
        },
        fo = function(e, t) {
            return {
                amount: co(e.amount, t.currency),
                label: e.label,
                detail: e.detail,
                identifier: e.id
            }
        },
        ho = function(e) {
            return function(t) {
                return t[e] && "string" == typeof t[e] ? t[e].toUpperCase() : null
            }
        },
        yo = (fe = {}, B(fe, Qr.success, 0), B(fe, Qr.fail, 1), B(fe, Qr.invalid_payer_name, 2), B(fe, Qr.invalid_shipping_address, 3), B(fe, Qr.invalid_payer_phone, 4), B(fe, Qr.invalid_payer_email, 4), fe),
        mo = (de = {}, B(de, $r.pickup, "storePickup"), B(de, $r.shipping, "shipping"), B(de, $r.delivery, "delivery"), de),
        _o = {
            total: function(e) {
                return po(e.total, e)
            },
            lineItems: function(e) {
                return e.displayItems ? e.displayItems.map(function(t) {
                    return po(t, e)
                }) : []
            },
            shippingMethods: function(e) {
                return e.shippingOptions ? e.shippingOptions.map(function(t) {
                    return fo(t, e)
                }) : []
            }
        },
        vo = {
            shippingType: function(e) {
                var t = e.shippingType;
                if (!t) return null;
                var n = mo[t];
                if (void 0 !== n) return n;
                throw new me("Invalid value for shippingType: " + t)
            },
            requiredBillingContactFields: function(e) {
                return e.requestPayerName ? ["postalAddress"] : null
            },
            requiredShippingContactFields: function(e) {
                var t = [];
                return e.requestShipping && t.push("postalAddress"), e.requestPayerEmail && t.push("email"), e.requestPayerPhone && t.push("phone"), t.length ? t : null
            },
            countryCode: ho("country"),
            currencyCode: ho("currency"),
            merchantCapabilities: function(e) {
                return function(t) {
                    return t[e] || null
                }
            }("merchantCapabilities"),
            supportedNetworks: function(e) {
                return ao(e.country, e.jcbEnabled || !1)
            }
        },
        bo = {
            status: function(e) {
                return yo[e.status] || 0
            }
        },
        go = lo({}, _o, vo),
        wo = lo({}, _o, bo),
        Eo = function(e) {
            var t = lo({}, Wr, e);
            return Object.keys(go).reduce(function(e, n) {
                var r = go[n],
                    o = r(t);
                return null !== o ? lo({}, e, B({}, n, o)) : e
            }, {})
        },
        So = function(e) {
            return Object.keys(wo).reduce(function(t, n) {
                var r = wo[n],
                    o = r(e);
                return null !== o ? lo({}, t, B({}, n, o)) : t
            }, {})
        },
        Oo = function(e) {
            return "string" == typeof e ? e : null
        },
        ko = function(e) {
            return e ? Oo(e.phoneNumber) : null
        },
        Po = function(e) {
            return e ? Oo(e.emailAddress) : null
        },
        Ao = function(e) {
            return e ? [e.givenName, e.familyName].filter(function(e) {
                return e && "string" == typeof e
            }).join(" ") : null
        },
        jo = function(e) {
            if (e) {
                var t = e.addressLines,
                    n = e.countryCode,
                    r = e.postalCode,
                    o = e.administrativeArea,
                    i = e.locality,
                    a = e.phoneNumber,
                    s = Oo(n);
                return {
                    addressLine: Array.isArray(t) ? t.reduce(function(e, t) {
                        return "string" == typeof t ? [].concat(z(e), [t]) : e
                    }, []) : [],
                    country: s ? s.toUpperCase() : "",
                    postalCode: Oo(r) || "",
                    recipient: Ao(e) || "",
                    region: Oo(o) || "",
                    city: Oo(i) || "",
                    phone: Oo(a) || "",
                    sortingCode: "",
                    dependentLocality: "",
                    organization: ""
                }
            }
            return null
        },
        Co = function(e, t) {
            if (e && t.shippingOptions) {
                var n = e.identifier,
                    r = e.label;
                return t.shippingOptions.filter(function(e) {
                    return e.id === n && e.label === r
                })[0] || null
            }
            return null
        },
        To = function(e, t) {
            var n = e.shippingContact,
                r = e.shippingMethod,
                o = e.billingContact;
            return {
                shippingOption: Co(r, t),
                shippingAddress: jo(n),
                payerEmail: Po(n),
                payerPhone: ko(n),
                payerName: Ao(o),
                methodName: "apple-pay"
            }
        },
        Ro = To,
        Io = function(e) {
            if (!e || !e.length) throw new me("When requesting shipping information, you must specify shippingOptions once a shipping address is selected.\nEither provide shippingOptions in stripe.paymentRequest(...) or listen for the shippingaddresschange event and provide shippingOptions to the updateWith callback there.");
            return e
        },
        Mo = Io,
        qo = "function" == typeof Symbol && "symbol" == typeof Symbol.iterator ? function(e) {
            return typeof e
        } : function(e) {
            return e && "function" == typeof Symbol && e.constructor === Symbol && e !== Symbol.prototype ? "symbol" : typeof e
        },
        No = Object.assign || function(e) {
            for (var t = 1; t < arguments.length; t++) {
                var n = arguments[t];
                for (var r in n) Object.prototype.hasOwnProperty.call(n, r) && (e[r] = n[r])
            }
            return e
        },
        xo = function() {
            function e(e, t) {
                for (var n = 0; n < t.length; n++) {
                    var r = t[n];
                    r.enumerable = r.enumerable || !1, r.configurable = !0, "value" in r && (r.writable = !0), Object.defineProperty(e, r.key, r)
                }
            }
            return function(t, n, r) {
                return n && e(t.prototype, n), r && e(t, r), t
            }
        }(),
        Lo = {
            australia: "AU",
            austria: "AT",
            canada: "CA",
            schweiz: "CH",
            deutschland: "DE",
            hongkong: "HK",
            saudiarabia: "SA",
            espaa: "ES",
            singapore: "SG",
            us: "US",
            usa: "US",
            unitedstatesofamerica: "US",
            unitedstates: "US",
            england: "GB",
            gb: "GB",
            uk: "GB",
            unitedkingdom: "GB"
        },
        Do = function(e) {
            function t(e, n, r, o, i, a, s, u) {
                H(this, t);
                var c = W(this, (t.__proto__ || Object.getPrototypeOf(t)).call(this));
                Fo.call(c), c._controllerReport = e, c._controllerWarn = n, c._createApplePaySession = r, c._tokenizeWithData = o, c._createSourceWithData = i, c._showCalledByButtonElement = null, c._authentication = a, c._mids = s, c._report("payreq.options", {
                    options: u
                });
                var l = ut(no, u || {}, "paymentRequest()"),
                    p = l.value;
                return l.warnings.forEach(function(e) {
                    return c._controllerWarn(e)
                }), c._cachedCanMakePayment = null, c._canMakePaymentCalled = !1, c._initialPaymentRequest = p, c._isShowing = !1, c._initializeSessionState(), c
            }
            return K(t, e), xo(t, [{
                key: "_initializeSessionState",
                value: function() {
                    this._paymentRequestOptions = No({}, this._initialPaymentRequest, {
                        status: Qr.success
                    }), this._privateSession = null, this._privateShippingOption = null;
                    var e = this._paymentRequestOptions.shippingOptions;
                    e && e.length && (this._privateShippingOption = e[0])
                }
            }, {
                key: "_setupSession",
                value: function(e, t) {
                    var n = this;
                    e.addEventListener("validatemerchant", Vt(this._validateMerchant(e, t))), e.addEventListener("paymentauthorized", Vt(this._paymentAuthorized(e))), e.addEventListener("cancel", Vt(function() {
                        n._report("payreq.show_rejected"), n._isShowing = !1, n._emit("cancel")
                    })), e.addEventListener("shippingcontactselected", Vt(this._shippingContactSelected(e))), e.addEventListener("shippingmethodselected", Vt(this._shippingMethodSelected(e)))
                }
            }]), t
        }(Zt),
        Fo = function() {
            var e = this;
            this.canMakePayment = Vt(function() {
                return null === e._cachedCanMakePayment ? Br(window.location.hostname, e._authentication.stripeAccount, Ie(e._authentication.apiKey) === Re.test, e._report).then(function(t) {
                    return e._canMakePaymentCalled = !0, e._cachedCanMakePayment = t, e._report("payreq.can_make_payment_response", {
                        available: e._cachedCanMakePayment
                    }), e._cachedCanMakePayment ? {
                        applePay: !0
                    } : null
                }) : xt.resolve().then(function() {
                    return e._canMakePaymentCalled = !0, e._report("payreq.can_make_payment_response", {
                        available: e._cachedCanMakePayment,
                        cached: !0
                    }), e._cachedCanMakePayment ? {
                        applePay: !0
                    } : null
                })
            }), this.update = Vt(function(t) {
                if (e._isShowing) throw new me("You cannot update Payment Request options while the payment sheet is showing.");
                var n = ut(to, t, "PaymentRequest update()"),
                    r = n.value;
                n.warnings.forEach(function(t) {
                    return e._controllerWarn(t)
                }), e._initialPaymentRequest = ke(e._paymentRequestOptions, r), e._initializeSessionState(), e._report("payreq.update", {
                    updates: t
                })
            }), this.show = Vt(function() {
                null === e._showCalledByButtonElement && (e._showCalledByButtonElement = !1);
                var t = e._showCalledByButtonElement;
                if (e._usedByButtonElement && !e._showCalledByButtonElement && (e._report("payreq.show_called_with_button"), e._controllerWarn("Do not call show() yourself if you are using the paymentRequestButton Element.\nThe Element handles showing the payment sheet.")), !e._canMakePaymentCalled) throw new me("You must first check the Payment Request API's\navailability using paymentRequest.canMakePayment() before calling show().");
                if (!e._cachedCanMakePayment) throw new me("Payment Request is not available in this browser.");
                e._initializeSessionState();
                try {
                    e._controllerWarn(Eo(e._paymentRequestOptions));
                    var n = new window.ApplePaySession(2, Eo(e._paymentRequestOptions));
                    e._privateSession = n, e._setupSession(n, t), n.begin(), e._isShowing = !0, e._report("payreq.show", {
                        listeners: Object.keys(e._callbacks).sort()
                    })
                } catch (e) {
                    throw "Must create a new ApplePaySession from a user gesture handler." === e.message ? new me("show() must be called from a user gesture handler (such as a click handler, after the user clicks a button).") : e
                }
            }), this.abort = Vt(function() {
                e._privateSession && (e._privateSession.abort(), e._report("payreq.abort"))
            }), this._report = function(t, n) {
                e._controllerReport(t, No({}, n, null !== e._showCalledByButtonElement ? {
                    usesButtonElement: e._showCalledByButtonElement
                } : {}, {
                    impl: "applepay"
                }))
            }, this._elementShow = function() {
                e._showCalledByButtonElement = !0, e.show()
            }, this._registerElement = function() {
                e._usedByButtonElement = !0
            }, this._validateMerchant = function(t, n) {
                return function(r) {
                    e._createApplePaySession({
                        data: {
                            validation_url: r.validationURL,
                            domain_name: window.location.hostname,
                            display_name: e._paymentRequestOptions.total.label
                        },
                        usesButtonElement: n
                    }).then(function(n) {
                        switch (n.type) {
                            case "object":
                                t.completeMerchantValidation(JSON.parse(n.object.session));
                                break;
                            case "error":
                                e._handleValidationError(t)(n.error);
                                break;
                            default:
                                _e(n)
                        }
                    }, e._handleValidationError(t))
                }
            }, this._handleValidationError = function(t) {
                return function(n) {
                    var r = n.message;
                    t.abort(), "string" == typeof r ? (e._controllerWarn(n.message), e._report("user_error.apple_pay_session_error", {
                        error: n
                    })) : e._report("fatal.payreq.unexpected_error", {
                        error: n
                    })
                }
            }, this._paymentAuthorized = function(t) {
                return function(n) {
                    var r = n.payment;
                    e._report("payreq.paymentauthorized");
                    var o = e._showCalledByButtonElement ? bt.paymentRequestButton : null;
                    e._tokenizeWithData({
                        type: "apple_pay",
                        elementName: o,
                        tokenData: No({}, r, {
                            billingContact: e._normalizeContact(r.billingContact)
                        }),
                        mids: e._mids
                    }).then(function(n) {
                        if ("error" === n.type) t.completePayment(window.ApplePaySession.STATUS_FAILURE), e._report("fatal.payreq.on_error", {
                            error: n.error
                        });
                        else {
                            var o = e._normalizeContact(r.shippingContact),
                                i = e._normalizeContact(r.billingContact);
                            o && e._paymentRequestOptions.requestShipping && !o.countryCode && t.completePayment(window.ApplePaySession.STATUS_INVALID_SHIPPING_POSTAL_ADDRESS);
                            var a = Ro({
                                shippingContact: o,
                                billingContact: i
                            }, e._paymentRequestOptions);
                            e._onToken(t)(No({}, a, {
                                shippingOption: e._privateShippingOption,
                                token: n.object
                            }))
                        }
                    })
                }
            }, this._normalizeContact = function(t) {
                if (t && "object" === (void 0 === t ? "undefined" : qo(t)) && t.country && "string" == typeof t.country) {
                    var n = t.country.toLowerCase().replace(/[^a-z]+/g, ""),
                        r = void 0;
                    return t.countryCode ? "string" == typeof t.countryCode && (r = t.countryCode.toUpperCase()) : (r = Lo[n]) || e._report("fatal.payreq.missing_country_code", {
                        country: t.country
                    }), No({}, t, {
                        countryCode: r
                    })
                }
                return "object" === (void 0 === t ? "undefined" : qo(t)) ? t : null
            }, this._onToken = function(t) {
                return function(n) {
                    if (e._hasRegisteredListener("token") && e._maybeEmitSourceOrToken("token", No({}, n, {
                            complete: e._completePayment(t)
                        })), e._hasRegisteredListener("source")) {
                        var r = n.token,
                            o = U(n, ["token"]),
                            i = o.payerPhone,
                            a = o.payerEmail,
                            s = e._showCalledByButtonElement ? bt.paymentRequestButton : null;
                        e._createSourceWithData({
                            elementName: s,
                            type: "card",
                            sourceData: {
                                token: r.id,
                                owner: {
                                    phone: i,
                                    email: a
                                }
                            },
                            mids: e._mids
                        }).then(function(n) {
                            "error" === n.type ? (e._report("fatal.payreq.source_failed", {
                                error: n.error,
                                token: r
                            }), t.completePayment(window.ApplePaySession.STATUS_FAILURE)) : e._maybeEmitSourceOrToken("source", No({}, o, {
                                source: n.object,
                                complete: e._completePayment(t)
                            }))
                        })
                    }
                }
            }, this._maybeEmitSourceOrToken = function(t, n) {
                e._isShowing && e._emit(t, n)
            }, this._completePayment = function(t) {
                return function(n) {
                    var r = ut(eo, {
                            status: n
                        }, "status for PaymentRequest completion"),
                        o = r.value;
                    r.warnings.forEach(function(t) {
                        return e._controllerWarn(t)
                    }), e._paymentRequestOptions = ke(e._paymentRequestOptions, o);
                    var i = So(e._paymentRequestOptions),
                        a = i.status;
                    t.completePayment(a), e._isShowing = !1
                }
            }, this._shippingContactSelected = function(t) {
                return function(n) {
                    var r = Ro({
                        shippingContact: e._normalizeContact(n.shippingContact)
                    }, e._paymentRequestOptions).shippingAddress;
                    if (e._hasRegisteredListener("shippingaddresschange")) {
                        var o = {
                            shippingAddress: r,
                            updateWith: e._completeShippingContactSelection(t)
                        };
                        e._emit("shippingaddresschange", o)
                    } else {
                        Mo(e._paymentRequestOptions.shippingOptions);
                        var i = So(e._paymentRequestOptions),
                            a = i.total,
                            s = i.lineItems,
                            u = i.shippingMethods;
                        t.completeShippingContactSelection(window.ApplePaySession.STATUS_SUCCESS, u, a, s)
                    }
                }
            }, this._completeShippingContactSelection = function(t) {
                return function(n) {
                    var r = ut(eo, n || {}, "shipping address selection callback"),
                        o = r.value;
                    if (r.warnings.forEach(function(t) {
                            return e._controllerWarn(t)
                        }), e._paymentRequestOptions = ke(e._paymentRequestOptions, o), e._paymentRequestOptions.status === Qr.success) {
                        var i = Mo(e._paymentRequestOptions.shippingOptions);
                        e._privateShippingOption = i[0]
                    }
                    var a = So(e._paymentRequestOptions),
                        s = a.status,
                        u = a.shippingMethods,
                        c = a.total,
                        l = a.lineItems;
                    t.completeShippingContactSelection(s, u, c, l)
                }
            }, this._shippingMethodSelected = function(t) {
                return function(n) {
                    if (e._privateShippingOption = Ro({
                            shippingMethod: n.shippingMethod
                        }, e._paymentRequestOptions).shippingOption, e._hasRegisteredListener("shippingoptionchange")) {
                        var r = {
                            shippingOption: e._privateShippingOption,
                            updateWith: e._completeShippingMethodSelection(t)
                        };
                        e._emit("shippingoptionchange", r)
                    } else {
                        var o = So(e._paymentRequestOptions),
                            i = o.total,
                            a = o.lineItems;
                        t.completeShippingMethodSelection(window.ApplePaySession.STATUS_SUCCESS, i, a)
                    }
                }
            }, this._completeShippingMethodSelection = function(t) {
                return function(n) {
                    var r = ut(eo, n || {}, "shipping option selection callback"),
                        o = r.value;
                    r.warnings.forEach(function(t) {
                        return e._controllerWarn(t)
                    }), e._paymentRequestOptions = ke(e._paymentRequestOptions, o);
                    var i = So(e._paymentRequestOptions),
                        a = i.status,
                        s = i.total,
                        u = i.lineItems;
                    t.completeShippingMethodSelection(a, s, u)
                }
            }
        },
        Bo = Do,
        zo = Object.assign || function(e) {
            for (var t = 1; t < arguments.length; t++) {
                var n = arguments[t];
                for (var r in n) Object.prototype.hasOwnProperty.call(n, r) && (e[r] = n[r])
            }
            return e
        },
        Uo = function(e) {
            function t(e, n, r, o) {
                V(this, t);
                var i = $(this, (t.__proto__ || Object.getPrototypeOf(t)).call(this));
                Ho.call(i), i._showCalledByButtonElement = null, i._authentication = n, i._controller = e, i._mids = r, i._report("payreq.options", {
                    options: o
                }), i._cachedCanMakePayment = null, i._canMakePaymentCalled = !1;
                var a = ut(no, o || {}, "paymentRequest()"),
                    s = a.value;
                if (a.warnings.forEach(function(e) {
                        return i._controller.warn(e)
                    }), Nr && "https:" === window.location.protocol) {
                    i._controller.action.fetchLocale({
                        locale: "auto"
                    });
                    var u = i._controller.createHiddenFrame(ht.PAYMENT_REQUEST, {
                        authentication: n,
                        mids: i._mids
                    });
                    i._setupPrFrame(u, s), i._prFrame = u
                } else i._prFrame = null;
                return i
            }
            return G(t, e), t
        }(Zt),
        Ho = function() {
            var e = this;
            this.canMakePayment = Vt(function() {
                return null === e._cachedCanMakePayment ? Ur(e._prFrame, Ie(e._authentication.apiKey) === Re.test).then(function(t) {
                    return e._canMakePaymentCalled = !0, e._cachedCanMakePayment = t, e._report("payreq.can_make_payment_response", {
                        available: e._cachedCanMakePayment
                    }), e._cachedCanMakePayment ? {
                        applePay: !1
                    } : null
                }) : xt.resolve().then(function() {
                    return e._canMakePaymentCalled = !0, e._report("payreq.can_make_payment_response", {
                        available: e._cachedCanMakePayment,
                        cached: !0
                    }), e._cachedCanMakePayment ? {
                        applePay: !1
                    } : null
                })
            }), this.update = Vt(function(t) {
                var n = e._prFrame;
                if (n) {
                    var r = ut(to, t, "PaymentRequest update()"),
                        o = r.value;
                    r.warnings.forEach(function(t) {
                        return e._controller.warn(t)
                    }), n.send({
                        action: "stripe-pr-update",
                        payload: {
                            data: o
                        }
                    })
                }
                e._report("payreq.update", {
                    updates: t
                })
            }), this.show = Vt(function() {
                if (null === e._showCalledByButtonElement && (e._showCalledByButtonElement = !1), e._usedByButtonElement && !e._showCalledByButtonElement && (e._report("payreq.show_called_with_button"), e._controller.warn("Do not call show() yourself if you are using the paymentRequestButton Element.\nThe Element handles showing the payment sheet.")), !e._canMakePaymentCalled) throw new me("You must first check the Payment Request API's\navailability using paymentRequest.canMakePayment() before calling show().");
                if (!e._cachedCanMakePayment || !e._prFrame) throw new me("Payment Request is not available in this browser.");
                e._prFrame.send({
                    action: "stripe-pr-show",
                    payload: {
                        data: {
                            usesButtonElement: e._showCalledByButtonElement
                        }
                    }
                }), e._report("payreq.show", {
                    listeners: Object.keys(e._callbacks).sort()
                })
            }), this.abort = Vt(function() {
                e._prFrame && (e._prFrame.send({
                    action: "stripe-pr-abort",
                    payload: {}
                }), e._report("payreq.abort"))
            }), this._report = function(t, n) {
                e._controller.report(t, zo({}, n, null !== e._showCalledByButtonElement ? {
                    usesButtonElement: e._showCalledByButtonElement
                } : {}, {
                    impl: "prapi"
                }))
            }, this._elementShow = function() {
                e._showCalledByButtonElement = !0, e.show()
            }, this._registerElement = function() {
                e._usedByButtonElement = !0
            }, this._setupPrFrame = function(t, n) {
                t.send({
                    action: "stripe-pr-initialize",
                    payload: {
                        data: n
                    }
                }), t._on("pr-cancel", function() {
                    e._emit("cancel")
                }), t._on("pr-error", function(t) {
                    e._report("fatal.payreq.on_error", {
                        error: "Would have emitted 'error' event, but 'error' is silenced."
                    })
                }), t._on("pr-callback", function(r) {
                    var o = r.event,
                        i = r.nonce,
                        a = r.options;
                    if ("token" === o) {
                        var s = function(n) {
                            var r = ut(eo, {
                                    status: n
                                }, "status for PaymentRequest completion"),
                                o = r.value;
                            r.warnings.forEach(function(t) {
                                return e._controller.warn(t)
                            }), t.send({
                                action: "stripe-pr-callback-complete",
                                payload: {
                                    data: o,
                                    nonce: i
                                }
                            })
                        };
                        e._handleToken(t, a, s)
                    } else if ("shippingaddresschange" === o || "shippingoptionchange" === o)
                        if (e._hasRegisteredListener(o)) {
                            var u = a.shippingAddress,
                                c = a.shippingOption,
                                l = "shippingaddresschange" === o ? {
                                    shippingAddress: u
                                } : {
                                    shippingOption: c
                                };
                            e._emit(o, zo({}, l, {
                                updateWith: function(r) {
                                    var a = ut(eo, r || {}, o + " callback"),
                                        s = a.value;
                                    a.warnings.forEach(function(t) {
                                        return e._controller.warn(t)
                                    }), "shippingaddresschange" === o && s.status === Qr.success && Mo(s.shippingOptions || n.shippingOptions), t.send({
                                        action: "stripe-pr-callback-complete",
                                        payload: {
                                            nonce: i,
                                            data: s
                                        }
                                    })
                                }
                            }))
                        } else "shippingaddresschange" === o && Mo(n.shippingOptions), t.send({
                            action: "stripe-pr-callback-complete",
                            payload: {
                                nonce: i,
                                data: {
                                    status: Qr.success
                                }
                            }
                        });
                    else e._report("error.payreq.unknown_event", {
                        event: o,
                        options: a
                    })
                })
            }, this._handleToken = function(t, n, r) {
                var o = n._privateOwner,
                    i = Y(n, ["_privateOwner"]);
                if (e._hasRegisteredListener("token") && e._emit("token", zo({}, i, {
                        complete: r
                    })), e._hasRegisteredListener("source")) {
                    var a = i.token,
                        s = Y(i, ["token"]),
                        u = n.payerPhone || null,
                        c = n.payerEmail || null,
                        l = e._showCalledByButtonElement ? bt.paymentRequestButton : null;
                    e._controller.action.createSourceWithData({
                        elementName: l,
                        type: "card",
                        sourceData: {
                            token: a.id,
                            owner: zo({
                                phone: u,
                                email: c
                            }, o || {})
                        },
                        mids: null
                    }).then(function(t) {
                        "error" === t.type ? (e._report("fatal.payreq.source_failed", {
                            error: t.error,
                            token: a
                        }), r(Qr.fail)) : e._emit("source", zo({}, s, {
                            source: t.object,
                            complete: r
                        }))
                    })
                }
            }
        },
        Wo = Uo,
        Ko = Object.assign || function(e) {
            for (var t = 1; t < arguments.length; t++) {
                var n = arguments[t];
                for (var r in n) Object.prototype.hasOwnProperty.call(n, r) && (e[r] = n[r])
            }
            return e
        },
        Yo = function() {
            function e(e, t) {
                for (var n = 0; n < t.length; n++) {
                    var r = t[n];
                    r.enumerable = r.enumerable || !1, r.configurable = !0, "value" in r && (r.writable = !0), Object.defineProperty(e, r.key, r)
                }
            }
            return function(t, n, r) {
                return n && e(t.prototype, n), r && e(t, r), t
            }
        }(),
        Vo = {
            base: ze(et),
            complete: ze(et),
            empty: ze(et),
            invalid: ze(et),
            paymentRequestButton: ze(et)
        },
        $o = {
            classes: ze(at({
                base: ze(Je),
                complete: ze(Je),
                empty: ze(Je),
                focus: ze(Je),
                invalid: ze(Je),
                webkitAutofill: ze(Je)
            })),
            hidePostalCode: ze(Ze),
            hideIcon: ze(Ze),
            style: ze(at(Vo)),
            iconStyle: ze(Ye("solid", "default")),
            value: ze(Ue(Je, et)),
            __privateCvcOptional: ze(Ze),
            __privateValue: ze(Ue(Je, et)),
            __privateEmitIbanValue: ze(Ze),
            error: ze(at({
                type: Je,
                code: ze(Je),
                decline_code: ze(Je),
                param: ze(Je)
            })),
            locale: rt("elements()"),
            fonts: rt("elements()"),
            placeholder: ze(Je),
            disabled: ze(Ze),
            placeholderCountry: ze(Je),
            paymentRequest: ze(Ue(He(Bo, "stripe.paymentRequest(...)"), He(Wo, "stripe.paymentRequest(...)"))),
            supportedCountries: ze(tt(Je))
        },
        Go = at($o),
        Jo = {
            base: "StripeElement",
            focus: "StripeElement--focus",
            invalid: "StripeElement--invalid",
            complete: "StripeElement--complete",
            empty: "StripeElement--empty",
            webkitAutofill: "StripeElement--webkit-autofill"
        },
        Qo = {
            margin: "0",
            padding: "0",
            border: "none",
            display: "block",
            background: "transparent",
            position: "relative",
            opacity: "1"
        },
        Zo = {
            border: "none",
            display: "block",
            position: "absolute",
            height: "1px",
            top: "0",
            left: "0",
            padding: "0",
            margin: "0",
            width: "100%",
            opacity: "0",
            background: "transparent",
            "pointer-events": "none",
            "font-size": "16px"
        },
        Xo = function(e) {
            return parseFloat(e.toFixed(1))
        },
        ei = function(e) {
            return /^\d+(\.\d*)?px$/.test(e)
        },
        ti = function(e) {
            function t(e) {
                Z(this, t);
                var n = X(this, (t.__proto__ || Object.getPrototypeOf(t)).call(this));
                ni.call(n);
                var r = e.controller,
                    o = e.componentName,
                    i = e.paymentRequest;
                n._controller = r, n._componentName = o;
                var a = "paymentRequestButton" === n._componentName;
                if (a) {
                    if (!i) throw new me("You must pass in a stripe.paymentRequest object in order to use this Element.");
                    n._paymentRequest = i, n._paymentRequest._registerElement()
                }
                return n._createComponent(e, o), n._classes = Jo, n._changeClasses(e.classes || {}), n._lastBackgroundColor = "", n._destroyed = !1, n._focused = !1, n._empty = !a, n._invalid = !1, n._complete = !1, n._autofilled = !1, n._lastSubmittedAt = null, n
            }
            return ee(t, e), Yo(t, [{
                key: "_checkDestroyed",
                value: function() {
                    if (this._destroyed) throw new me("This Element has already been destroyed. Please create a new one.")
                }
            }, {
                key: "_isMounted",
                value: function() {
                    return !!document.body && document.body.contains(this._component)
                }
            }, {
                key: "_mountToParent",
                value: function(e) {
                    var t = this._component.parentElement,
                        n = this._isMounted();
                    if (e === t) {
                        if (n) return;
                        this.unmount(), this._mountTo(e)
                    } else if (t) {
                        if (n) throw new me("This Element is already mounted. Use `unmount()` to unmount the Element before re-mounting.");
                        this.unmount(), this._mountTo(e)
                    } else this._mountTo(e)
                }
            }, {
                key: "_mountTo",
                value: function(e) {
                    var t = Date.now(),
                        n = qr(e, null),
                        r = !!n && "rtl" === n.getPropertyValue("direction");
                    for (this._parent = e; e.firstChild;) e.removeChild(e.firstChild);
                    e.appendChild(this._component), this._frame.send({
                        action: "stripe-user-mount",
                        payload: {
                            mountTime: t,
                            rtl: r
                        }
                    }), this._findPossibleLabel(), this._updateClasses()
                }
            }, {
                key: "_updateClasses",
                value: function() {
                    this._parent && Bt(this._parent, [
                        [this._classes.base, !0],
                        [this._classes.empty, this._empty],
                        [this._classes.focus, this._focused],
                        [this._classes.invalid, this._invalid],
                        [this._classes.complete, this._complete],
                        [this._classes.webkitAutofill, this._autofilled]
                    ])
                }
            }, {
                key: "_removeClasses",
                value: function() {
                    this._parent && Bt(this._parent, [
                        [this._classes.base, !1],
                        [this._classes.empty, !1],
                        [this._classes.focus, !1],
                        [this._classes.invalid, !1],
                        [this._classes.complete, !1],
                        [this._classes.webkitAutofill, !1]
                    ])
                }
            }, {
                key: "_findPossibleLabel",
                value: function() {
                    var e = this._parent;
                    if (e) {
                        var t = e.getAttribute("id"),
                            n = void 0;
                        if (t && (n = document.querySelector("label[for='" + t + "']")), n) e.addEventListener("click", this.focus);
                        else
                            for (n = n || e.parentElement; n && "LABEL" !== n.nodeName;) n = n.parentElement;
                        n ? (this._label = n, n.addEventListener("click", this.focus)) : e.addEventListener("click", this.focus)
                    }
                }
            }, {
                key: "_changeClasses",
                value: function(e) {
                    var t = {};
                    return Object.keys(e).forEach(function(n) {
                        if (!Jo[n]) throw new me(n + " is not a customizable class name.\nYou can customize: " + Object.keys(Jo).join(", "));
                        var r = e[n] || Jo[n];
                        t[n] = r.replace(/\./g, " ")
                    }), this._classes = Ko({}, this._classes, t), this
                }
            }, {
                key: "_emitEvent",
                value: function(e, t) {
                    return this._emit(e, Ko({
                        elementType: this._componentName
                    }, t))
                }
            }, {
                key: "_setupEvents",
                value: function() {
                    var e = this;
                    this._frame._on("redirectfocus", function(t) {
                        var n = t.focusDirection,
                            r = jr(e._component, n);
                        r && r.focus()
                    }), this._frame._on("focus", function() {
                        e._focused = !0, e._updateClasses()
                    }), this._frame._on("blur", function() {
                        e._focused = !1, e._updateClasses(), e._lastSubmittedAt && "paymentRequestButton" === e._componentName && (e._controller.report("payment_request_button.sheet_visible", {
                            latency: new Date - e._lastSubmittedAt
                        }), e._lastSubmittedAt = null)
                    }), this._frame._on("submit", function() {
                        if ("paymentRequestButton" === e._componentName) {
                            e._lastSubmittedAt = new Date;
                            var t = !1,
                                n = !1;
                            e._emitEvent("click", {
                                preventDefault: function() {
                                    e._controller.report("payment_request_button.default_prevented"), t && e._controller.warn("event.preventDefault() was called after the payment sheet was shown. Make sure to call it synchronously when handling the `click` event."), n = !0
                                }
                            }), !n && e._paymentRequest && (e._paymentRequest._elementShow(), t = !0)
                        } else e._emitEvent("submit"), e._formSubmit()
                    }), ["ready", "focus", "blur", "escape"].forEach(function(t) {
                        e._frame._on(t, function() {
                            e._emitEvent(t)
                        })
                    }), this._frame._on("change", function(t) {
                        var n = {};
                        ["error", "value", "empty", "complete"].concat(Q(nr[e._componentName] || [])).forEach(function(e) {
                            return n[e] = t[e]
                        }), e._emitEvent("change", n), e._empty = n.empty, e._invalid = !!n.error, e._complete = n.complete, e._updateClasses()
                    }), this._frame._on("__privateIntegrationError", function(t) {
                        var n = t.message;
                        e._emitEvent("__privateIntegrationError", {
                            message: n
                        })
                    }), this._frame._on("dimensions", function(t) {
                        if (e._parent) {
                            var n = qr(e._parent, null);
                            if (n) {
                                var r = parseFloat(n.getPropertyValue("height")),
                                    o = t.height;
                                if ("border-box" === n.getPropertyValue("box-sizing")) {
                                    var i = parseFloat(n.getPropertyValue("padding-top")),
                                        a = parseFloat(n.getPropertyValue("padding-bottom"));
                                    r = r - parseFloat(n.getPropertyValue("border-top")) - parseFloat(n.getPropertyValue("border-bottom")) - i - a
                                }
                                0 !== r && Xo(r) < Xo(o) && e._controller.report("wrapper_height_mismatch", {
                                    height: o,
                                    outer_height: r
                                });
                                var s = e._component.getBoundingClientRect().height;
                                0 !== s && 0 !== o && Xo(s) !== Xo(o) && (e._frame.updateStyle({
                                    height: o + "px"
                                }), e._controller.report("iframe_height_update", {
                                    height: o,
                                    calculated_height: s
                                }))
                            }
                        }
                    }), this._frame._on("autofill", function() {
                        if (e._parent) {
                            var t = e._parent.style.backgroundColor,
                                n = "#faffbd" === t || "rgb(250, 255, 189)" === t;
                            e._lastBackgroundColor = n ? e._lastBackgroundColor : t, e._parent.style.backgroundColor = "#faffbd", e._autofilled = !0, e._updateClasses()
                        }
                    }), this._frame._on("autofill-cleared", function() {
                        e._autofilled = !1, e._parent && (e._parent.style.backgroundColor = e._lastBackgroundColor), e._updateClasses()
                    })
                }
            }, {
                key: "_handleOutsideClick",
                value: function() {
                    this._secondaryFrame && this._secondaryFrame.send({
                        action: "stripe-outside-click",
                        payload: {}
                    })
                }
            }, {
                key: "_createSecondFrame",
                value: function(e, t, n) {
                    var r = this._controller.createSecondaryElementFrame(e, Ko({}, n, {
                        componentName: t
                    }));
                    return r && r.on && r.on("height-change", function(e) {
                        r.updateStyle({
                            height: e.height + "px"
                        })
                    }), r
                }
            }, {
                key: "_createComponent",
                value: function(e, t) {
                    this._createElement(e, t), this._setupEvents(), this._updateFrameHeight(e, !0)
                }
            }, {
                key: "_updateFrameHeight",
                value: function(e) {
                    var t = arguments.length > 1 && void 0 !== arguments[1] && arguments[1];
                    if ("paymentRequestButton" === this._componentName) {
                        var n = e.style && e.style.paymentRequestButton || {},
                            r = n.height,
                            o = "string" == typeof r ? r : void 0;
                        (t || o) && (this._frame.updateStyle({
                            height: o || this._lastHeight || "40px"
                        }), this._lastHeight = o || this._lastHeight)
                    } else {
                        var i = e.style && e.style.base || {},
                            a = i.lineHeight,
                            s = i.fontSize,
                            u = i.padding,
                            c = "string" != typeof a || isNaN(parseFloat(a)) ? void 0 : a,
                            l = "string" == typeof s ? s : void 0,
                            p = "string" == typeof u ? u : void 0;
                        if (l && !ei(l) && this._controller.warn("The fontSize style you specified (" + l + ") is not in px. We do not recommend using relative css units, as they will be calculated relative to our iframe's styles rather than your site's."), t || c || l) {
                            var f = -1 === Pt.indexOf(this._componentName) ? void 0 : p || this._lastPadding,
                                d = Ir(c || this._lastHeight, l || this._lastFontSize, f);
                            this._frame.updateStyle({
                                height: d
                            }), this._lastFontSize = l || this._lastFontSize, this._lastHeight = c || this._lastHeight, this._lastPadding = f
                        }
                    }
                }
            }, {
                key: "_createElement",
                value: function(e, t) {
                    var n = this,
                        r = (e.classes, e.controller, e.paymentRequest, J(e, ["classes", "controller", "paymentRequest"])),
                        o = document.createElement("div");
                    o.className = "__PrivateStripeElement";
                    var i = document.createElement("input");
                    i.className = "__PrivateStripeElement-input", i.setAttribute("aria-hidden", "true"), i.disabled = !0;
                    var a = document.createElement("input");
                    a.className = "__PrivateStripeElement-safariInput", a.setAttribute("aria-hidden", "true"), a.setAttribute("tabindex", "-1"), zt(o, Qo), zt(i, Zo), zt(a, Zo);
                    var s = qr(document.body),
                        u = !!s && "rtl" === s.getPropertyValue("direction"),
                        c = Xn[t],
                        l = Ko({}, r, {
                            rtl: u
                        }),
                        p = this._controller.createElementFrame(c, l);
                    if (p._on("load", function() {
                            i.disabled = !1
                        }), i.addEventListener("focus", function() {
                            p.focus()
                        }), p.appendTo(o), rr[t]) {
                        var f = rr[t].secondary;
                        this._secondaryFrame = this._createSecondFrame(c, f, Ko({}, l, {
                            primaryElementType: t
                        })), this._secondaryFrame.appendTo(o), window.addEventListener("click", function() {
                            return n._handleOutsideClick()
                        })
                    }
                    o.appendChild(i), o.appendChild(a), this._component = o, this._frame = p, this._fakeInput = i
                }
            }]), t
        }(Zt),
        ni = function() {
            var e = this;
            this.mount = Vt(function(t) {
                e._checkDestroyed();
                var n = void 0;
                if (!t) throw new me("Missing argument. Make sure to call mount() with a valid DOM element or selector.");
                if ("string" == typeof t) {
                    var r = document.querySelectorAll(t);
                    if (r.length > 1 && e._controller.warn("The selector you specified (" + t + ") applies to " + r.length + " DOM elements that are currently on the page.\nThe Stripe Element will be mounted to the first one."), !r.length) throw new me("The selector you specified (" + t + ") applies to no DOM elements that are currently on the page.\nMake sure the element exists on the page before calling mount().");
                    n = r[0]
                } else {
                    if (!t.appendChild) throw new me("Invalid DOM element. Make sure to call mount() with a valid DOM element or selector.");
                    n = t
                }
                if ("INPUT" === n.nodeName) throw new me("Stripe Elements must be mounted in a DOM element that\ncan contain child nodes. `input` elements are not permitted to have child\nnodes. Try using a `div` element instead.");
                if (n.children.length && e._controller.warn("This Element will be mounted to a DOM element that contains child nodes."), e._paymentRequest) {
                    if (!e._paymentRequest._canMakePaymentCalled) throw new me("For paymentRequest Elements, you must first check the Payment Request API's\navailability using paymentRequest.canMakePayment() before mounting the Element.");
                    if (!e._paymentRequest._cachedCanMakePayment) throw new me("The " + e._componentName + " Element is not available in the current environment.");
                    e._mountToParent(n)
                } else e._mountToParent(n)
            }), this.update = Vt(function(t) {
                e._checkDestroyed();
                var n = ut(Go, t || {}, "element.update()"),
                    r = n.value;
                if (n.warnings.forEach(function(t) {
                        return e._controller.warn(t)
                    }), r) {
                    var o = r.classes,
                        i = J(r, ["classes"]);
                    e._changeClasses(o || {}), e._updateFrameHeight(r), Object.keys(i).length && (e._frame.update(i), e._secondaryFrame && e._secondaryFrame.update(i))
                }
                return e
            }), this.focus = Vt(function(t) {
                return e._checkDestroyed(), t && t.preventDefault(), document.activeElement && document.activeElement.blur && document.activeElement.blur(), e._fakeInput.focus(), e
            }), this.blur = Vt(function() {
                return e._checkDestroyed(), e._frame.blur(), e._fakeInput.blur(), e
            }), this.clear = Vt(function() {
                return e._checkDestroyed(), e._frame.clear(), e
            }), this.unmount = Vt(function() {
                e._checkDestroyed();
                var t = e._component.parentElement,
                    n = e._label;
                return t && (t.removeChild(e._component), t.removeEventListener("click", e.focus), e._removeClasses()), e._parent = null, n && (n.removeEventListener("click", e.focus), e._label = null), e._secondaryFrame && (e._secondaryFrame.unmount(), window.removeEventListener("click", e._handleOutsideClick)), e._fakeInput.disabled = !0, e._frame.unmount(), e
            }), this.destroy = Vt(function() {
                return e._checkDestroyed(), e.unmount(), e._destroyed = !0, e._emitEvent("destroy"), e
            }), this._formSubmit = function() {
                for (var t = e._component.parentElement; t && "FORM" !== t.nodeName;) t = t.parentElement;
                if (t) {
                    var n = document.createEvent("Event");
                    n.initEvent("submit", !0, !0), t.dispatchEvent(n)
                }
            }
        },
        ri = ti,
        oi = Object.assign || function(e) {
            for (var t = 1; t < arguments.length; t++) {
                var n = arguments[t];
                for (var r in n) Object.prototype.hasOwnProperty.call(n, r) && (e[r] = n[r])
            }
            return e
        },
        ii = {
            locale: ze(Je),
            fonts: ze(tt(et))
        },
        ai = at(ii),
        si = function e(t, n) {
            var r = this;
            ne(this, e), ui.call(this);
            var o = ut(ai, n || {}, "elements()"),
                i = o.value;
            o.warnings.forEach(function(e) {
                return t.warn(e)
            }), t.report("elements", {
                options: n
            }), this._elements = [], this._id = jt("elements"), this._controller = t;
            var a = i.locale,
                s = i.fonts || [];
            this._controller.action.fetchLocale({
                locale: a || "auto"
            });
            var u = s.filter(function(e) {
                    return !e.cssSrc || "string" != typeof e.cssSrc
                }),
                c = s.map(function(e) {
                    return e.cssSrc
                }).reduce(function(e, t) {
                    return "string" == typeof t ? [].concat(te(e), [t]) : e
                }, []).map(function(e) {
                    return ct(e) ? e : ft(window.location.href, e)
                });
            return this._pendingFonts = c.length, this._commonOptions = oi({}, i, {
                fonts: u
            }), c.forEach(function(e) {
                if ("string" == typeof e) {
                    var t = Date.now();
                    kr(e).then(function(n) {
                        r._controller.report("font.loaded", {
                            load_time: Date.now() - t,
                            font_count: n.length,
                            css_src: e
                        });
                        var o = n.map(function(t) {
                            return oi({}, t, {
                                __privateCssSrc: e
                            })
                        });
                        r._controller.action.updateCSSFonts({
                            fonts: o,
                            groupId: r._id
                        }), r._commonOptions = oi({}, r._commonOptions, {
                            fonts: [].concat(te(r._commonOptions.fonts ? r._commonOptions.fonts : []), te(o))
                        })
                    }).catch(function(n) {
                        r._controller.report("error.font.not_loaded", {
                            load_time: Date.now() - t,
                            message: n && n.message && n.message,
                            css_src: e
                        }), r._controller.warn("Failed to load CSS file at " + e + ".")
                    })
                }
            }), this
        },
        ui = function() {
            var e = this;
            this.create = $t(function(t, n) {
                Pr(t, e._elements);
                var r = ut(Go, n || {}, "create()"),
                    o = r.value;
                r.warnings.forEach(function(t) {
                    return e._controller.warn(t)
                });
                var i = !!e._pendingFonts,
                    a = new ri(oi({}, o, e._commonOptions, {
                        controller: e._controller,
                        componentName: t,
                        groupId: e._id,
                        wait: i
                    }));
                return e._elements = [].concat(te(e._elements), [t]), a._on("destroy", function() {
                    e._elements = e._elements.filter(function(e) {
                        return e !== t
                    })
                }), a
            })
        },
        ci = si,
        li = function(e, t, n, r) {
            return window.ApplePaySession ? new Bo(e.report, e.warn, e.action.createApplePaySession, e.action.tokenizeWithData, e.action.createSourceWithData, t, n, r) : new Wo(e, t, n, r)
        },
        pi = li,
        fi = function(e) {
            var t = arguments.length > 1 && void 0 !== arguments[1] && arguments[1];
            if ("complete" === window.document.readyState) e();
            else {
                var n = !1,
                    r = function() {
                        n || (n = !0, e())
                    };
                window.addEventListener("DOMContentLoaded", r), window.addEventListener("load", r), t && setTimeout(r, 5e3)
            }
        },
        di = fi,
        hi = {
            payment_pages_beta_1: "payment_pages_beta_1",
            payment_intent_beta_1: "payment_intent_beta_1",
            payment_intent_beta_2: "payment_intent_beta_2",
            payment_intent_beta_3: "payment_intent_beta_3",
            acknowledge_ie9_deprecation: "acknowledge_ie9_deprecation",
            threeds_2_eap: "threeds_2_eap"
        },
        yi = Object.keys(hi),
        mi = function(e, t) {
            return e.indexOf(t) >= 0
        },
        _i = {
            card: "card",
            ideal: "ideal",
            sepa_debit: "sepa_debit",
            three_d_secure: "three_d_secure"
        },
        vi = (he = {}, re(he, bt.card, _i.card), re(he, bt.cardNumber, _i.card), re(he, bt.cardExpiry, _i.card), re(he, bt.cardCvc, _i.card), re(he, bt.postalCode, _i.card), re(he, bt.iban, _i.sepa_debit), re(he, bt.idealBank, _i.ideal), he),
        bi = function(e) {
            return -1 === wt.indexOf(e)
        },
        gi = function(e, t) {
            return null != t ? t : bi(e) ? null : vi[e] || null
        },
        wi = function(e) {
            var t = e.name,
                n = e.value,
                r = e.expiresIn,
                o = e.path,
                i = e.domain,
                a = new Date,
                s = r || 31536e6;
            a.setTime(a.getTime() + s);
            var u = o || "/",
                c = (n || "").replace(/[^!#-+\--:<-[\]-~]/g, encodeURIComponent),
                l = encodeURIComponent(t) + "=" + c + ";expires=" + a.toGMTString() + ";path=" + u;
            i && (l += ";domain=" + i), document.cookie = l
        },
        Ei = function(e) {
            var t = ge(document.cookie.split("; "), function(t) {
                var n = t.indexOf("=");
                return decodeURIComponent(t.substr(0, n)) === e
            });
            if (t) {
                var n = t.indexOf("=");
                return decodeURIComponent(t.substr(n + 1))
            }
            return null
        },
        Si = function() {
            function e(e, t) {
                for (var n = 0; n < t.length; n++) {
                    var r = t[n];
                    r.enumerable = r.enumerable || !1, r.configurable = !0, "value" in r && (r.writable = !0), Object.defineProperty(e, r.key, r)
                }
            }
            return function(t, n, r) {
                return n && e(t.prototype, n), r && e(t, r), t
            }
        }(),
        Oi = "__privateStripeMetricsController",
        ki = {
            MERCHANT: "merchant",
            SESSION: "session"
        },
        Pi = function() {
            function e() {
                oe(this, e), this._muid = this._getID(ki.MERCHANT), this._sid = this._getID(ki.SESSION), this._id = jt(Oi), this._controllerFrame = new pn(ht.METRICS_CONTROLLER, this._id, {
                    autoload: !0,
                    queryString: this._buildFrameQueryString()
                }), this._establishMessageChannel(), this._startIntervalCheck(), setTimeout(this._testLatency.bind(this), 2e3 + 500 * Math.random())
            }
            return Si(e, [{
                key: "ids",
                value: function() {
                    return {
                        guid: this._guid || "NA",
                        muid: this._muid || "NA",
                        sid: this._sid || "NA"
                    }
                }
            }, {
                key: "_establishMessageChannel",
                value: function() {
                    var e = this;
                    window.addEventListener("message", function(t) {
                        try {
                            var n = JSON.parse(t.data),
                                r = n.originatingScript,
                                o = n.payload;
                            "m" === r && (e._guid = o)
                        } catch (e) {}
                    })
                }
            }, {
                key: "_startIntervalCheck",
                value: function() {
                    var e = this,
                        t = window.location.href;
                    setInterval(function() {
                        var n = window.location.href;
                        n !== t && (e.send({
                            action: "ping",
                            payload: {
                                sid: e._getID(ki.SESSION),
                                muid: e._getID(ki.MERCHANT),
                                title: document.title,
                                referrer: document.referrer,
                                url: document.location.href
                            }
                        }), t = n)
                    }, 5e3)
                }
            }, {
                key: "report",
                value: function(e, t) {
                    try {
                        this.send({
                            action: "track",
                            payload: {
                                sid: this._getID(ki.SESSION),
                                muid: this._getID(ki.MERCHANT),
                                url: document.location.href,
                                source: e,
                                data: t
                            }
                        })
                    } catch (e) {}
                }
            }, {
                key: "send",
                value: function(e) {
                    var t = _t(ht.METRICS_CONTROLLER);
                    Ln(t) && this._controllerFrame.send(e)
                }
            }, {
                key: "_testLatency",
                value: function() {
                    var e = this,
                        t = [],
                        n = new Date,
                        r = function r() {
                            try {
                                var o = new Date;
                                t.push(o - n), t.length >= 10 && (e.report("mouse-timings-10", t), document.removeEventListener("mousemove", r)), n = o
                            } catch (e) {}
                        };
                    document.addEventListener("mousemove", r)
                }
            }, {
                key: "_extractMetaReferrerPolicy",
                value: function() {
                    var e = document.querySelector("meta[name=referrer]");
                    return null != e && e instanceof HTMLMetaElement ? e.content.toLowerCase() : null
                }
            }, {
                key: "_extractUrl",
                value: function(e) {
                    var t = document.location.href;
                    switch (e) {
                        case "origin":
                        case "strict-origin":
                        case "origin-when-cross-origin":
                        case "strict-origin-when-cross-origin":
                            return document.location.origin;
                        case "unsafe-url":
                            return t.split("#")[0];
                        default:
                            return t
                    }
                }
            }, {
                key: "_buildFrameQueryString",
                value: function() {
                    var e = this._extractMetaReferrerPolicy(),
                        t = this._extractUrl(e),
                        n = {
                            url: t,
                            title: document.title,
                            referrer: document.referrer,
                            muid: this._muid,
                            sid: this._sid,
                            preview: Dn(t)
                        };
                    return null != e && (n.metaReferrerPolicy = e), Object.keys(n).map(function(e) {
                        return null != n[e] ? e + "=" + encodeURIComponent(n[e].toString()) : null
                    }).join("&")
                }
            }, {
                key: "_getID",
                value: function(e) {
                    switch (e) {
                        case ki.MERCHANT:
                            try {
                                var t = Ei("__stripe_mid") || Ct();
                                return wi({
                                    name: "__stripe_mid",
                                    value: t,
                                    domain: "." + document.location.hostname
                                }), t
                            } catch (e) {
                                return "NA"
                            }
                        case ki.SESSION:
                            try {
                                var n = Ei("__stripe_sid") || Ct();
                                return wi({
                                    name: "__stripe_sid",
                                    value: n,
                                    domain: "." + document.location.hostname,
                                    expiresIn: 18e5
                                }), n
                            } catch (e) {
                                return "NA"
                            }
                        default:
                            throw new Error("Invalid ID type specified: " + e)
                    }
                }
            }]), e
        }(),
        Ai = Pi,
        ji = "function" == typeof Symbol && "symbol" == typeof Symbol.iterator ? function(e) {
            return typeof e
        } : function(e) {
            return e && "function" == typeof Symbol && e.constructor === Symbol && e !== Symbol.prototype ? "symbol" : typeof e
        },
        Ci = Object.assign || function(e) {
            for (var t = 1; t < arguments.length; t++) {
                var n = arguments[t];
                for (var r in n) Object.prototype.hasOwnProperty.call(n, r) && (e[r] = n[r])
            }
            return e
        },
        Ti = function(e, t) {
            switch (e.type) {
                case "object":
                    return {
                        paymentIntent: e.object
                    };
                case "error":
                    return {
                        error: Ci({}, t ? {
                            payment_intent: t
                        } : {}, e.error)
                    };
                default:
                    return _e(e)
            }
        },
        Ri = function(e) {
            var t = e.match(/^(pi_[^_]+)_secret_[^-]+$/);
            return t ? {
                id: t[1],
                clientSecret: t[0]
            } : null
        },
        Ii = function(e, t) {
            if ("string" != typeof e) return Be("a client_secret string", e, t);
            var n = Ri(e);
            return null === n ? Be("a client secret of the form pi_${id}_secret_${secret}", e, t) : Le(n, [])
        },
        Mi = function(e, t) {
            if (null == e) return Le(null);
            var n = e.type,
                r = ae(e, ["type"]),
                o = Ci({}, t, {
                    path: [].concat(ie(t.path), ["type"])
                }),
                i = Qe(Je, function() {
                    return null
                })(n, o);
            return "error" === i.type ? i : Le({
                type: i.value,
                data: r
            })
        },
        qi = function(e) {
            return function(t, n) {
                if ("object" === (void 0 === t ? "undefined" : ji(t)) && null !== t) {
                    var r = t.source,
                        o = t.source_data,
                        i = ae(t, ["source", "source_data"]);
                    if (null != r && "string" != typeof r) {
                        var a = Ci({}, n, {
                            path: [].concat(ie(n.path), ["source"])
                        });
                        return Fe("string", void 0 === r ? "undefined" : ji(r), a)
                    }
                    if (null != o && "object" !== (void 0 === o ? "undefined" : ji(o))) {
                        var s = Ci({}, n, {
                            path: [].concat(ie(n.path), ["source_data"])
                        });
                        return Fe("object", void 0 === o ? "undefined" : ji(o), s)
                    }
                    var u = Ci({}, n, {
                            path: [].concat(ie(n.path), ["source_data"])
                        }),
                        c = Mi(o, u);
                    if ("error" === c.type) return c;
                    var l = c.value;
                    return Le({
                        dataAndType: l,
                        source: null == r ? null : r,
                        otherParams: Ci({}, e, i)
                    })
                }
                return null === t ? Fe("object", "null", n) : Fe("object", void 0 === t ? "undefined" : ji(t), n)
            }
        },
        Ni = function(e) {
            return function(t, n) {
                if (void 0 === t) return Le({
                    dataAndType: null,
                    source: null,
                    otherParams: {}
                });
                if ("object" !== (void 0 === t ? "undefined" : ji(t))) return Fe("object", void 0 === t ? "undefined" : ji(t), n);
                if (null === t) return Fe("object", "null", n);
                if (e) {
                    if (!t.payment_intent) return Le({
                        dataAndType: null,
                        source: null,
                        otherParams: t
                    });
                    var r = t.payment_intent,
                        o = ae(t, ["payment_intent"]),
                        i = Ci({}, n, {
                            path: [].concat(ie(n.path), ["payment_intent"])
                        });
                    return qi(o)(r, i)
                }
                return t.payment_intent ? De(new me("The payment_intent parameter has been removed. To fix, move everything nested under the payment_intent parameter to the top-level object.")) : qi({})(t, n)
            }
        },
        xi = function(e) {
            return new xt(function(t, n) {
                setTimeout(function() {
                    t({
                        type: "error",
                        error: {
                            code: "redirect_error",
                            message: "Failed to redirect to " + e
                        }
                    })
                }, 1500), window.top.location.href = e
            })
        },
        Li = function(e, t, n) {
            e.report("redirect_error", {
                initiator: t,
                error: n.error
            })
        },
        Di = {
            _frame: at({
                id: Je
            }),
            _componentName: Je
        },
        Fi = at(Di),
        Bi = function(e) {
            var t = st(Fi, e, "");
            return "error" === t.type ? null : t.value
        },
        zi = Object.assign || function(e) {
            for (var t = 1; t < arguments.length; t++) {
                var n = arguments[t];
                for (var r in n) Object.prototype.hasOwnProperty.call(n, r) && (e[r] = n[r])
            }
            return e
        },
        Ui = "function" == typeof Symbol && "symbol" == typeof Symbol.iterator ? function(e) {
            return typeof e
        } : function(e) {
            return e && "function" == typeof Symbol && e.constructor === Symbol && e !== Symbol.prototype ? "symbol" : typeof e
        },
        Hi = function(e, t, n) {
            if (null === e) {
                if (null === t) throw new me(n + ": you must additionally specify which source type to create using source_data in the options.");
                return t
            }
            if (null === t) return e;
            if (t !== e) throw new me(n + ": you specified a source type of " + t + ", but " + n + " will create a source of type " + e + ".");
            return e
        },
        Wi = function(e, t, n, r, o) {
            var i = st(Fi, r, n);
            if ("error" === i.type) return null;
            var a = i.value,
                s = ut(Ni(e), o, n),
                u = s.value,
                c = u.dataAndType,
                l = u.source,
                p = u.otherParams;
            if (null != l) throw new me("When calling " + n + " on an Element, you can't pass in a pre-existing source ID, as a source will be created using the Element.");
            var f = a._componentName,
                d = a._frame.id,
                h = c ? c.type : null,
                y = gi(f, h);
            return {
                confirmMode: {
                    tag: "element",
                    elementName: f,
                    frameId: d,
                    sourceType: Hi(t, y, n),
                    sourceData: c ? c.data : {}
                },
                otherParams: p
            }
        },
        Ki = function(e, t, n, r, o) {
            var i = ut(Ni(e), r, n),
                a = i.value,
                s = a.dataAndType,
                u = a.source,
                c = a.otherParams;
            if (null !== u && null !== s) throw new me(n + ": Expected either source or source_data, but not both.");
            if (null !== s) {
                var l = s.type,
                    p = s.data;
                return {
                    confirmMode: {
                        tag: "sourceData",
                        sourceType: Hi(t, l, n),
                        sourceData: p
                    },
                    otherParams: c
                }
            }
            return null !== u ? {
                confirmMode: {
                    tag: "source",
                    source: u
                },
                otherParams: c
            } : {
                confirmMode: {
                    tag: "noSource"
                },
                otherParams: c
            }
        },
        Yi = function(e, t, n) {
            return function(r, o) {
                var i = Wi(e, t, n, r, o);
                if (i) return i;
                var a = Ki(e, t, n, r);
                if (a) return a;
                throw new me("Expected: stripe." + n + "(intentSecret, element[, data]) or stripe." + n + "(intentSecret[, data]). Please see the docs for more usage examples https://stripe.com/docs/payments/dynamic-authentication")
            }
        },
        Vi = function(e, t) {
            return e.createLightboxFrame(ht.AUTHORIZE_WITH_URL, {
                url: t
            })
        },
        $i = function(e, t, n) {
            var r = Date.now(),
                o = Vi(n, t);
            return o.show(), n.report("authorize_with_url.loading", {}), o._on("load", function() {
                n.report("authorize_with_url.loaded", {
                    loadDuration: Date.now() - r
                })
            }), new xt(function(e, t) {
                o._once("authorize_with_url_done", function(t) {
                    return n.report("authorize_with_url.done", {
                        shownDuration: Date.now() - r,
                        success: !("error" in t)
                    }), o.destroy(), e(t)
                })
            })
        },
        Gi = function(e, t, n) {
            if ("requires_source_action" !== t.status) return xt.resolve({
                paymentIntent: t
            });
            var r = t.next_source_action;
            if ("authorize_with_url" === r.type && n === _i.card) return $i(t.client_secret, r.value.url, e);
            if ("authorize_with_url" === r.type && n === _i.ideal) {
                var o = function(n) {
                    return Li(e, "ideal redirect", n), Ti(n, t)
                };
                return xi(r.value.url).then(o)
            }
            return xt.resolve({
                paymentIntent: t
            })
        },
        Ji = function(e) {
            switch (e.type) {
                case "error":
                    var t = e.error;
                    if ("payment_intent_unexpected_state" === t.code && "object" === Ui(t.payment_intent) && null != t.payment_intent && "requires_source_action" === t.payment_intent.status) {
                        return {
                            type: "object",
                            object: t.payment_intent
                        }
                    }
                    return e;
                case "object":
                    return e;
                default:
                    return _e(e)
            }
        },
        Qi = function(e, t) {
            return function(n) {
                var r = Ji(n);
                switch (r.type) {
                    case "error":
                        return xt.resolve(Ti(n));
                    case "object":
                        var o = r.object;
                        return Gi(e, o, t);
                    default:
                        return _e(r)
                }
            }
        },
        Zi = function(e, t) {
            var n = ut(Ii, e, "retrievePaymentIntent"),
                r = n.value;
            return t.action.retrievePaymentIntent(r).then(Ti)
        },
        Xi = function(e, t) {
            return function(n, r, o) {
                var i = ut(Ii, n, "stripe.confirmPaymentIntent intent secret"),
                    a = i.value,
                    s = Yi(!1, null, "confirmPaymentIntent")(r, o);
                return e.action.confirmPaymentIntent(zi({}, s, {
                    intentSecret: a,
                    expectedType: null,
                    mids: t
                })).then(Ti)
            }
        },
        ea = function(e, t, n) {
            return function(r, o, i) {
                var a = ut(Ii, r, "stripe.handleCardPayment intent secret"),
                    s = a.value,
                    u = _i.card,
                    c = Yi(n, u, "handleCardPayment")(o, i);
                return e.action.confirmPaymentIntent(zi({}, c, {
                    intentSecret: s,
                    expectedType: u,
                    mids: t
                })).then(Qi(e, u))
            }
        },
        ta = function(e, t, n) {
            return function(r, o, i) {
                var a = ut(Ii, r, "stripe.handleSepaDebitPayment intent secret"),
                    s = a.value,
                    u = _i.sepa_debit,
                    c = Yi(n, u, "handleSepaDebitPayment")(o, i);
                return e.action.confirmPaymentIntent(zi({}, c, {
                    intentSecret: s,
                    expectedType: u,
                    mids: t
                })).then(Qi(e, u))
            }
        },
        na = function(e, t, n) {
            return function(r, o, i) {
                var a = ut(Ii, r, "stripe.handleIdealPayment intent secret"),
                    s = a.value,
                    u = _i.ideal,
                    c = Yi(n, u, "handleIdealPayment")(o, i);
                return e.action.confirmPaymentIntent(zi({}, c, {
                    intentSecret: s,
                    expectedType: u,
                    mids: t
                })).then(Qi(e, u))
            }
        },
        ra = function(e) {
            return function(t) {
                var n = ut(it({
                        sku: ze(Je),
                        plan: ze(Je),
                        success_url: Je,
                        cancel_url: Je,
                        locale: ze(Je)
                    }), t, "stripe.redirectToPaymentPage"),
                    r = n.value;
                if (r.sku && r.plan) throw new me("stripe.redirectToPaymentPage: Expected either sku or plan, but not both.");
                if (!r.sku && !r.plan) throw new me("stripe.redirectToPaymentPage: You must provide either sku or plan.");
                return e.action.createPaymentPage(r).then(function(t) {
                    if ("error" === t.type) return {
                        error: t.error
                    };
                    var n = t.object.url,
                        r = function(t) {
                            return Li(e, "payment page redirect", t), {
                                error: t.error
                            }
                        };
                    return xi(n).then(r)
                })
            }
        },
        oa = function(e) {
            return e.createLightboxFrame(ht.THREEDS2_EAP, {})
        },
        ia = function(e) {
            return xt.resolve({
                jwt: "",
                bin: "424242"
            })
        },
        aa = function(e, t, n) {
            var r = ut(at({
                    source: Je,
                    amount: Xe,
                    currency: Ge,
                    owner: at({
                        name: Je,
                        address: Je,
                        phone: Je
                    })
                }), e, "attempt3DS2EAP"),
                o = (r.value, oa(t));
            return ia().then(function(e) {
                var t = e.jwt,
                    n = e.bin;
                return o.action("stripe-cardinal-3ds2-init", {
                    jwt: t,
                    bin: n
                })
            }).then(function(e) {
                return console.log("SessionId:", e)
            }), xt.resolve({
                source: {}
            })
        },
        sa = "function" == typeof Symbol && "symbol" == typeof Symbol.iterator ? function(e) {
            return typeof e
        } : function(e) {
            return e && "function" == typeof Symbol && e.constructor === Symbol && e !== Symbol.prototype ? "symbol" : typeof e
        },
        ua = function(e) {
            switch (e.type) {
                case "object":
                    return {
                        token: e.object
                    };
                case "error":
                    return {
                        error: e.error
                    };
                default:
                    return _e(e)
            }
        },
        ca = function(e) {
            return "object" === (void 0 === e ? "undefined" : sa(e)) && null !== e ? e : {}
        },
        la = function(e, t) {
            return function(n, r) {
                var o = Bi(n);
                if (o) {
                    var i = o._frame.id,
                        a = o._componentName,
                        s = ca(r);
                    return e.action.tokenizeWithElement({
                        frameId: i,
                        elementName: a,
                        tokenData: s,
                        mids: t
                    }).then(ua)
                }
                if ("string" == typeof n) {
                    var u = n,
                        c = ca(r);
                    return e.action.tokenizeWithData({
                        elementName: null,
                        type: u,
                        tokenData: c,
                        mids: t
                    }).then(ua)
                }
                throw new me("You must provide a Stripe Element or a valid token type to create a Token.")
            }
        },
        pa = "function" == typeof Symbol && "symbol" == typeof Symbol.iterator ? function(e) {
            return typeof e
        } : function(e) {
            return e && "function" == typeof Symbol && e.constructor === Symbol && e !== Symbol.prototype ? "symbol" : typeof e
        },
        fa = function(e) {
            if (!e || "object" !== (void 0 === e ? "undefined" : pa(e))) return null;
            var t = e.type,
                n = se(e, ["type"]);
            return {
                type: "string" == typeof t ? t : null,
                sourceData: n
            }
        },
        da = function(e) {
            switch (e.type) {
                case "object":
                    return {
                        source: e.object
                    };
                case "error":
                    return {
                        error: e.error
                    };
                default:
                    return _e(e)
            }
        },
        ha = {
            source: at({
                id: Ke("src_"),
                client_secret: Ke("src_client_secret_")
            })
        },
        ya = at(ha),
        ma = function() {
            function e(e, t) {
                for (var n = 0; n < t.length; n++) {
                    var r = t[n];
                    r.enumerable = r.enumerable || !1, r.configurable = !0, "value" in r && (r.writable = !0), Object.defineProperty(e, r.key, r)
                }
            }
            return function(t, n, r) {
                return n && e(t.prototype, n), r && e(t, r), t
            }
        }(),
        _a = at({
            apiKey: Je,
            stripeAccount: ze(Je),
            __privateApiUrl: ze(Je),
            betas: ze(tt(Ve.apply(void 0, function(e) {
                if (Array.isArray(e)) {
                    for (var t = 0, n = Array(e.length); t < e.length; t++) n[t] = e[t];
                    return n
                }
                return Array.from(e)
            }(yi))))
        }),
        va = null,
        ba = function() {
            return va || (va = new Ai), va
        },
        ga = function() {
            function e(t, n) {
                var r = this;
                ue(this, e), wa.call(this);
                var o = ut(_a, t || {}, "Stripe()"),
                    i = o.value,
                    a = o.warnings,
                    s = i.apiKey,
                    u = i.stripeAccount,
                    c = i.__privateApiUrl,
                    l = i.betas;
                if ("" === s) throw new me("Please call Stripe() with your publishable key. You used an empty string.");
                if (0 === s.indexOf("sk_")) throw new me("You should not use your secret key with Stripe.js.\n        Please pass a publishable key instead.");
                di(function() {
                    r._ec || (r._ec = ba())
                }), this._apiKey = s, this._keyMode = Ie(s), this._betas = l || [], this._stripeAccount = u || null, this._controller = new lr({
                    apiKey: s,
                    __privateApiUrl: c,
                    stripeAccount: u,
                    stripeJsId: e.stripeJsId
                }), a.forEach(function(e) {
                    return r._controller.warn(e)
                }), this._ensureHTTPS(), this._ensureStripeHosted(n), this._attachPaymentIntentMethods(this._betas), this._attachPaymentPagesMethods(this._betas), this._attach3DS2Methods(this._betas), this._warnIE9Deprecation()
            }
            return ma(e, [{
                key: "_attachPaymentIntentMethods",
                value: function(e) {
                    var t = this,
                        n = mi(this._betas, hi.payment_intent_beta_1) || mi(this._betas, hi.payment_intent_beta_2),
                        r = this._mids(),
                        o = Vt(function(e) {
                            return Zi(e, t._controller)
                        }),
                        i = Gt(Xi(this._controller, r)),
                        a = Gt(ea(this._controller, r, n)),
                        s = Gt(ta(this._controller, r, n)),
                        u = Gt(na(this._controller, r, n));
                    mi(this._betas, hi.payment_intent_beta_1) ? (this.retrievePaymentIntent = o, this.fulfillPaymentIntent = a) : (mi(this._betas, hi.payment_intent_beta_2) || mi(this._betas, hi.payment_intent_beta_3)) && (this.retrievePaymentIntent = o, this.handleCardPayment = a), mi(this._betas, hi.payment_intent_beta_3) && (this.confirmPaymentIntent = i, this.handleSepaDebitPayment = s, this.handleIdealPayment = u)
                }
            }, {
                key: "_attachPaymentPagesMethods",
                value: function(e) {
                    if (mi(this._betas, hi.payment_pages_beta_1)) {
                        var t = ra(this._controller);
                        this.redirectToPaymentPage = t
                    }
                }
            }, {
                key: "_attach3DS2Methods",
                value: function(e) {
                    var t = this;
                    if (mi(this._betas, hi.threeds_2_eap)) {
                        this._mids();
                        this.attempt3DS2EAP = Vt(function(e) {
                            return aa(e, t._controller)
                        })
                    }
                }
            }, {
                key: "_warnIE9Deprecation",
                value: function() {
                    var e = this._keyMode === Re.live,
                        t = "Starting in December 2018, stripe.js v3 will no longer support IE9, per Microsoft's lifecycle policy.\n\nThis error is being thrown only in IE9 in testmode so that you have an opportunity to update your integration or your browser testing strategy.\n\nIf you want to suppress this error in testmode until December, initialize stripe.js with the `acknowledge_ie9_deprecation` beta:\nvar stripe = Stripe(key, {betas: ['acknowledge_ie9_deprecation']})";
                    if (Vn && !e && !mi(this._betas, hi.acknowledge_ie9_deprecation)) throw window.console && console.error(t), new me(t)
                }
            }, {
                key: "_ensureHTTPS",
                value: function() {
                    var e = window.location.protocol,
                        t = -1 !== ["https:", "file:"].indexOf(e),
                        n = -1 !== ["localhost", "127.0.0.1", "0.0.0.0"].indexOf(window.location.hostname),
                        r = this._keyMode === Re.live,
                        o = "Live Stripe.js integrations must use HTTPS. For more information: https://stripe.com/docs/stripe-js/elements/quickstart#http-requirements";
                    if (!t) {
                        if (r && !n) throw this._controller.report("user_error.non_https_error", {
                            protocol: e
                        }), new me(o);
                        !r || n ? window.console && console.warn("You may test your Stripe.js integration over HTTP. However, live Stripe.js integrations must use HTTPS.") : window.console && console.warn(o)
                    }
                }
            }, {
                key: "_ensureStripeHosted",
                value: function(e) {
                    if (!e) throw this._controller.report("user_error.self_hosted"), new me("Stripe.js must be loaded from js.stripe.com. For more information https://stripe.com/docs/stripe-js/reference#including-stripejs")
                }
            }, {
                key: "_mids",
                value: function() {
                    return this._ec ? this._ec.ids() : null
                }
            }]), e
        }();
    ga.version = 3, ga.stripeJsId = Ct();
    var wa = function() {
            var e = this;
            this.elements = Vt(function(t) {
                return new ci(e._controller, t)
            }), this.createToken = $t(function(t, n) {
                var r = e._mids();
                return la(e._controller, r)(t, n)
            }), this.createSource = $t(function(t, n) {
                var r = Bi(t);
                if (r) {
                    var o = r._frame.id,
                        i = r._componentName,
                        a = fa(n);
                    if (!a && bi(i)) return xt.reject(new me("Please provide Source creation parameters to createSource."));
                    var s = a || {
                            type: null,
                            sourceData: {}
                        },
                        u = s.type,
                        c = s.sourceData;
                    return e._controller.action.createSourceWithElement({
                        frameId: o,
                        elementName: i,
                        type: u,
                        sourceData: c,
                        mids: e._mids()
                    }).then(da)
                }
                var l = fa(t);
                if (!l) return xt.reject(new me("Please provide either an Element or Source creation parameters to createSource."));
                var p = l.type,
                    f = l.sourceData;
                return p ? e._controller.action.createSourceWithData({
                    elementName: null,
                    type: p,
                    sourceData: f,
                    mids: e._mids()
                }).then(da) : xt.reject(new me("Please provide a source type to createSource."))
            }), this.retrieveSource = Vt(function(t) {
                var n = ut(ya, {
                        source: t
                    }, "retrieveSource"),
                    r = n.value;
                return n.warnings.forEach(function(t) {
                    return e._controller.warn(t)
                }), e._controller.action.retrieveSource(r).then(da)
            }), this.paymentRequest = Vt(function(t) {
                return Me(e._keyMode), pi(e._controller, {
                    apiKey: e._apiKey,
                    stripeAccount: e._stripeAccount
                }, e._mids(), t)
            })
        },
        Ea = ga,
        Sa = "function" == typeof Symbol && "symbol" == typeof Symbol.iterator ? function(e) {
            return typeof e
        } : function(e) {
            return e && "function" == typeof Symbol && e.constructor === Symbol && e !== Symbol.prototype ? "symbol" : typeof e
        },
        Oa = Object.assign || function(e) {
            for (var t = 1; t < arguments.length; t++) {
                var n = arguments[t];
                for (var r in n) Object.prototype.hasOwnProperty.call(n, r) && (e[r] = n[r])
            }
            return e
        },
        ka = function() {
            if (document.currentScript) {
                var e = lt(document.currentScript.src);
                return !e || Dn(e.origin)
            }
            return !0
        }(),
        Pa = function(e, t) {
            return new Ea(Oa({
                apiKey: e
            }, t && "object" === (void 0 === t ? "undefined" : Sa(t)) ? t : {}), ka)
        };
    Pa.version = Ea.version, window.Stripe && 2 === window.Stripe.version && !window.Stripe.StripeV3 ? window.Stripe.StripeV3 = Pa : window.Stripe ? window.console && console.warn("It looks like Stripe.js was loaded more than one time. Please only load it once per page.") : window.Stripe = Pa;
    t.default = Pa
}, function(e, t, n) {
    "use strict";

    function r(e) {
        var t = new o(o._61);
        return t._81 = 1, t._65 = e, t
    }
    var o = n(3);
    e.exports = o;
    var i = r(!0),
        a = r(!1),
        s = r(null),
        u = r(void 0),
        c = r(0),
        l = r("");
    o.resolve = function(e) {
        if (e instanceof o) return e;
        if (null === e) return s;
        if (void 0 === e) return u;
        if (!0 === e) return i;
        if (!1 === e) return a;
        if (0 === e) return c;
        if ("" === e) return l;
        if ("object" == typeof e || "function" == typeof e) try {
            var t = e.then;
            if ("function" == typeof t) return new o(t.bind(e))
        } catch (e) {
            return new o(function(t, n) {
                n(e)
            })
        }
        return r(e)
    }, o.all = function(e) {
        var t = Array.prototype.slice.call(e);
        return new o(function(e, n) {
            function r(a, s) {
                if (s && ("object" == typeof s || "function" == typeof s)) {
                    if (s instanceof o && s.then === o.prototype.then) {
                        for (; 3 === s._81;) s = s._65;
                        return 1 === s._81 ? r(a, s._65) : (2 === s._81 && n(s._65), void s.then(function(e) {
                            r(a, e)
                        }, n))
                    }
                    var u = s.then;
                    if ("function" == typeof u) {
                        return void new o(u.bind(s)).then(function(e) {
                            r(a, e)
                        }, n)
                    }
                }
                t[a] = s, 0 == --i && e(t)
            }
            if (0 === t.length) return e([]);
            for (var i = t.length, a = 0; a < t.length; a++) r(a, t[a])
        })
    }, o.reject = function(e) {
        return new o(function(t, n) {
            n(e)
        })
    }, o.race = function(e) {
        return new o(function(t, n) {
            e.forEach(function(e) {
                o.resolve(e).then(t, n)
            })
        })
    }, o.prototype.catch = function(e) {
        return this.then(null, e)
    }
}, function(e, t, n) {
    "use strict";

    function r() {}

    function o(e) {
        try {
            return e.then
        } catch (e) {
            return _ = e, v
        }
    }

    function i(e, t) {
        try {
            return e(t)
        } catch (e) {
            return _ = e, v
        }
    }

    function a(e, t, n) {
        try {
            e(t, n)
        } catch (e) {
            return _ = e, v
        }
    }

    function s(e) {
        if ("object" != typeof this) throw new TypeError("Promises must be constructed via new");
        if ("function" != typeof e) throw new TypeError("not a function");
        this._45 = 0, this._81 = 0, this._65 = null, this._54 = null, e !== r && y(e, this)
    }

    function u(e, t, n) {
        return new e.constructor(function(o, i) {
            var a = new s(r);
            a.then(o, i), c(e, new h(t, n, a))
        })
    }

    function c(e, t) {
        for (; 3 === e._81;) e = e._65;
        if (s._10 && s._10(e), 0 === e._81) return 0 === e._45 ? (e._45 = 1, void(e._54 = t)) : 1 === e._45 ? (e._45 = 2, void(e._54 = [e._54, t])) : void e._54.push(t);
        l(e, t)
    }

    function l(e, t) {
        m(function() {
            var n = 1 === e._81 ? t.onFulfilled : t.onRejected;
            if (null === n) return void(1 === e._81 ? p(t.promise, e._65) : f(t.promise, e._65));
            var r = i(n, e._65);
            r === v ? f(t.promise, _) : p(t.promise, r)
        })
    }

    function p(e, t) {
        if (t === e) return f(e, new TypeError("A promise cannot be resolved with itself."));
        if (t && ("object" == typeof t || "function" == typeof t)) {
            var n = o(t);
            if (n === v) return f(e, _);
            if (n === e.then && t instanceof s) return e._81 = 3, e._65 = t, void d(e);
            if ("function" == typeof n) return void y(n.bind(t), e)
        }
        e._81 = 1, e._65 = t, d(e)
    }

    function f(e, t) {
        e._81 = 2, e._65 = t, s._97 && s._97(e, t), d(e)
    }

    function d(e) {
        if (1 === e._45 && (c(e, e._54), e._54 = null), 2 === e._45) {
            for (var t = 0; t < e._54.length; t++) c(e, e._54[t]);
            e._54 = null
        }
    }

    function h(e, t, n) {
        this.onFulfilled = "function" == typeof e ? e : null, this.onRejected = "function" == typeof t ? t : null, this.promise = n
    }

    function y(e, t) {
        var n = !1,
            r = a(e, function(e) {
                n || (n = !0, p(t, e))
            }, function(e) {
                n || (n = !0, f(t, e))
            });
        n || r !== v || (n = !0, f(t, _))
    }
    var m = n(4),
        _ = null,
        v = {};
    e.exports = s, s._10 = null, s._97 = null, s._61 = r, s.prototype.then = function(e, t) {
        if (this.constructor !== s) return u(this, e, t);
        var n = new s(r);
        return c(this, new h(e, t, n)), n
    }
}, function(e, t, n) {
    "use strict";
    (function(t) {
        function n(e) {
            a.length || (i(), s = !0), a[a.length] = e
        }

        function r() {
            for (; u < a.length;) {
                var e = u;
                if (u += 1, a[e].call(), u > c) {
                    for (var t = 0, n = a.length - u; t < n; t++) a[t] = a[t + u];
                    a.length -= u, u = 0
                }
            }
            a.length = 0, u = 0, s = !1
        }

        function o(e) {
            return function() {
                function t() {
                    clearTimeout(n), clearInterval(r), e()
                }
                var n = setTimeout(t, 0),
                    r = setInterval(t, 50)
            }
        }
        e.exports = n;
        var i, a = [],
            s = !1,
            u = 0,
            c = 1024,
            l = void 0 !== t ? t : self,
            p = l.MutationObserver || l.WebKitMutationObserver;
        i = "function" == typeof p ? function(e) {
            var t = 1,
                n = new p(e),
                r = document.createTextNode("");
            return n.observe(r, {
                    characterData: !0
                }),
                function() {
                    t = -t, r.data = t
                }
        }(r) : o(r), n.requestFlush = i, n.makeRequestCallFromTimer = o
    }).call(t, n(5))
}, function(e, t) {
    var n;
    n = function() {
        return this
    }();
    try {
        n = n || Function("return this")() || (0, eval)("this")
    } catch (e) {
        "object" == typeof window && (n = window)
    }
    e.exports = n
}, function(e, t, n) {
    var r, o;
    ! function() {
        "use strict";
        var n = function() {
            function e() {}

            function t(e, t) {
                for (var n = t.length, r = 0; r < n; ++r) i(e, t[r])
            }

            function n(e, t) {
                e[t] = !0
            }

            function r(e, t) {
                for (var n in t) s.call(t, n) && (e[n] = !!t[n])
            }

            function o(e, t) {
                for (var n = t.split(u), r = n.length, o = 0; o < r; ++o) e[n[o]] = !0
            }

            function i(e, i) {
                if (i) {
                    var a = typeof i;
                    "string" === a ? o(e, i) : Array.isArray(i) ? t(e, i) : "object" === a ? r(e, i) : "number" === a && n(e, i)
                }
            }

            function a() {
                for (var n = arguments.length, r = Array(n), o = 0; o < n; o++) r[o] = arguments[o];
                var i = new e;
                t(i, r);
                var a = [];
                for (var s in i) i[s] && a.push(s);
                return a.join(" ")
            }
            e.prototype = Object.create(null);
            var s = {}.hasOwnProperty,
                u = /\s+/;
            return a
        }();
        void 0 !== e && e.exports ? e.exports = n : (r = [], void 0 !== (o = function() {
            return n
        }.apply(t, r)) && (e.exports = o))
    }()
}, function(e, t) {}]);
