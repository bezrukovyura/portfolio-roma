var FontFinder = /** @class */ (function () {
    function FontFinder() {
        this.getProp = function (el, prop) {
            return window.getComputedStyle(el, null).getPropertyValue("font-" + prop);
        };
        this.findUsing();
        console.log("§ - FontFinder Use: ", this.findUsing());
        console.log("§ - FontFinder Include: ", this.findInclude());
        console.warn("§  -FontFinder Not Use: ", this.notUse());
    }
    FontFinder.prototype.findUsing = function () {
        var _this = this;
        var useFonts = [];
        document.querySelectorAll("*").forEach(function (x) {
            try {
                var currentFont_1 = {
                    family: _this.getProp(x, "family"),
                    weight: _this.getProp(x, "weight"),
                    style: _this.getProp(x, "style")
                };
                if (useFonts.find(function (f) { return f.family == currentFont_1.family && f.weight == currentFont_1.weight && f.style == currentFont_1.style; }) === undefined)
                    useFonts.push(currentFont_1);
            }
            catch (e) { }
        });
        return useFonts;
    };
    FontFinder.prototype.findInclude = function () {
        var includes = [];
        debugger
        var sheet = Array.from(document.styleSheets);
        sheet.forEach(function (x) {
            var rule = Array.from(x.rules || x.cssRules || []);
            rule.forEach(function (y) {
                if (y.constructor.name === 'CSSFontFaceRule')
                    includes.push({ family: y.style.fontFamily, style: y.style.fontStyle || "normal", weight: y.style.fontWeight || "400", src: y.style.src });
            });
        });
        return includes;
    };
    FontFinder.prototype.notUse = function () {
        var _this = this;
        var use = this.findUsing();
        var include = this.findInclude();
        var notUse = [];
        include.forEach(function (x) {
            debugger;
            if (use.find(function (y) {
                return _this.prepare(y.family) == _this.prepare(x.family) &&
                    _this.prepare(y.style) == _this.prepare(x.style) &&
                    _this.prepare(y.weight) == _this.prepare(x.weight);
            }) == undefined)
                notUse.push(x);
        });
        return notUse;
    };
    FontFinder.prototype.prepare = function (str) {
        return str.replace("\"", "").toLowerCase();
    };
    return FontFinder;
}());
var prev_handler = window.onload;
window.onload = function () {
    if (prev_handler)
        prev_handler();

        setTimeout(()=>{
            new FontFinder();
        }, 10000);
   
};
