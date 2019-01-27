const app = new Vue({
    el: '#app',
    data: {
        is_busy: false,
        menu_opened: false,
    },
    created: function() {
        if (!String.prototype.includes) {
            String.prototype.includes = function(search, start) {
                'use strict';
                if (typeof start !== 'number') {
                    start = 0;
                }
                if (start + search.length > this.length) {
                    return false;
                } else {
                    return this.indexOf(search, start) !== -1;
                }
            };
        }
        if (!Array.prototype.includes) {
            Object.defineProperty(Array.prototype, 'includes', {
                value: function(searchElement, fromIndex) {

                    if (this == null) {
                        throw new TypeError('"this" is null or not defined');
                    }

                    // 1. Let O be ? ToObject(this value).
                    var o = Object(this);

                    // 2. Let len be ? ToLength(? Get(O, "length")).
                    var len = o.length >>> 0;

                    // 3. If len is 0, return false.
                    if (len === 0) {
                        return false;
                    }

                    // 4. Let n be ? ToInteger(fromIndex).
                    //    (If fromIndex is undefined, this step produces the value 0.)
                    var n = fromIndex | 0;

                    // 5. If n ≥ 0, then
                    //  a. Let k be n.
                    // 6. Else n < 0,
                    //  a. Let k be len + n.
                    //  b. If k < 0, let k be 0.
                    var k = Math.max(n >= 0 ? n : len - Math.abs(n), 0);

                    function sameValueZero(x, y) {
                        return x === y || (typeof x === 'number' && typeof y === 'number' && isNaN(x) && isNaN(y));
                    }

                    // 7. Repeat, while k < len
                    while (k < len) {
                        // a. Let elementK be the result of ? Get(O, ! ToString(k)).
                        // b. If SameValueZero(searchElement, elementK) is true, return true.
                        if (sameValueZero(o[k], searchElement)) {
                            return true;
                        }
                        // c. Increase k by 1.
                        k++;
                    }

                    // 8. Return false
                    return false;
                }
            });
        }
        if (!Math.trunc) {
            Math.trunc = function(v) {
                v = +v;
                if (!isFinite(v)) return v;
                return (v - v % 1)   ||   (v < 0 ? -0 : v === 0 ? v : 0);
            };
        }
        this.$on('is_busy', function(value){
            this.is_busy = value;
        });
    },
    methods: {
        toggle_menu: function () {
            this.menu_opened = !this.menu_opened;
        }
    }
});