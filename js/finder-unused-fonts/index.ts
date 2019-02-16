class FontFinder {

  constructor() {
    this.findUsing();
    console.log("§ - FontFinder Use: ", this.findUsing());
    console.log("§ - FontFinder Include: ", this.findInclude());
    console.warn("§  -FontFinder Not Use: ", this.notUse());
  }

  findUsing() {
    let useFonts: { family: string, weight: string, style: string }[] = [];
    document.querySelectorAll("*").forEach(x => {
      try {
        let currentFont = {
          family: this.getProp(x, "family"),
          weight: this.getProp(x, "weight"),
          style: this.getProp(x, "style")
        };

        if (useFonts.find(f => { return f.family == currentFont.family && f.weight == currentFont.weight && f.style == currentFont.style }) === undefined)
          useFonts.push(currentFont)
      }
      catch (e) { }
    });
    return useFonts;
  }

  getProp = (el: Element, prop: string) => {
    return window.getComputedStyle(el, null).getPropertyValue("font-" + prop);
  }


  findInclude() {
    let includes: { family: string, style: string, weight: string, src: string }[] = [];
    let sheet = Array.from(document.styleSheets);
    sheet.forEach(x => {
      let rule: any[] = Array.from((<any>x).rules || (<any>x).cssRules || []);
      rule.forEach(y => {
        if (y.constructor.name === 'CSSFontFaceRule')
          includes.push({ family: y.style.fontFamily, style: y.style.fontStyle || "normal", weight: y.style.fontWeight || "400", src: y.style.src });
      });
    });
    return includes;
  }

  notUse() {
    let use = this.findUsing();
    let include = this.findInclude();
    let notUse: { family: string, style: string, weight: string, src: string }[] = [];

    include.forEach(x => {
      debugger
      if (use.find(y =>
        this.prepare(y.family) == this.prepare(x.family) &&
        this.prepare(y.style) == this.prepare(x.style) &&
        this.prepare(y.weight) == this.prepare(x.weight)) == undefined)
        notUse.push(x);
    });

    return notUse;
  }

  prepare(str: string) {
    return str.replace("\"", "").toLowerCase()
  }

}


var prev_handler: any = window.onload;

window.onload = () => {
  if (prev_handler)
    prev_handler();
  new FontFinder();
};


