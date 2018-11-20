<style>
    /*! normalize.css v7.0.0 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-ms-text-size-adjust:100%;-webkit-text-size-adjust:100%}body{margin:0}article,aside,footer,header,nav,section{display:block}h1{font-size:2em;margin:.67em 0}figcaption,figure,main{display:block}figure{margin:1em 40px}hr{box-sizing:content-box;height:0;overflow:visible}pre{font-family:monospace,monospace;font-size:1em}a{background-color:transparent;-webkit-text-decoration-skip:objects}abbr[title]{border-bottom:none;text-decoration:underline;text-decoration:underline dotted}b,strong{font-weight:inherit}b,strong{font-weight:bolder}code,kbd,samp{font-family:monospace,monospace;font-size:1em}dfn{font-style:italic}mark{background-color:#ff0;color:#000}small{font-size:80%}sub,sup{font-size:75%;line-height:0;position:relative;vertical-align:baseline}sub{bottom:-.25em}sup{top:-.5em}audio,video{display:inline-block}audio:not([controls]){display:none;height:0}img{border-style:none}svg:not(:root){overflow:hidden}button,input,optgroup,select,textarea{font-family:sans-serif;font-size:100%;line-height:1.15;margin:0}button,input{overflow:visible}button,select{text-transform:none}[type=reset],[type=submit],button,html [type=button]{-webkit-appearance:button}[type=button]::-moz-focus-inner,[type=reset]::-moz-focus-inner,[type=submit]::-moz-focus-inner,button::-moz-focus-inner{border-style:none;padding:0}[type=button]:-moz-focusring,[type=reset]:-moz-focusring,[type=submit]:-moz-focusring,button:-moz-focusring{outline:1px dotted ButtonText}fieldset{padding:.35em .75em .625em}legend{box-sizing:border-box;color:inherit;display:table;max-width:100%;padding:0;white-space:normal}progress{display:inline-block;vertical-align:baseline}textarea{overflow:auto}[type=checkbox],[type=radio]{box-sizing:border-box;padding:0}[type=number]::-webkit-inner-spin-button,[type=number]::-webkit-outer-spin-button{height:auto}[type=search]{-webkit-appearance:textfield;outline-offset:-2px}[type=search]::-webkit-search-cancel-button,[type=search]::-webkit-search-decoration{-webkit-appearance:none}::-webkit-file-upload-button{-webkit-appearance:button;font:inherit}details,menu{display:block}summary{display:list-item}canvas{display:inline-block}template{display:none}[hidden]{display:none}/*# sourceMappingURL=normalize.min.css.map */

    @page { margin: 0 }
    body { margin: 0 }
    .sheet {
      margin: 0;
      overflow: hidden;
      position: relative;
      box-sizing: border-box;
      page-break-after: always;
    }

    /** Paper sizes **/
    body.A3           .sheet { width: 297mm; height: 419mm }
    body.A3.landscape .sheet { width: 420mm; height: 296mm }
    body.A4           .sheet { width: 210mm; height: 296mm }
    body.A4.landscape .sheet { width: 297mm; height: 209mm }
    body.A5           .sheet { width: 148mm; height: 209mm }
    body.A5.landscape .sheet { width: 210mm; height: 147mm }

    /** Padding area **/
    .sheet.padding-10mm { padding: 10mm }
    .sheet.padding-15mm { padding: 15mm }
    .sheet.padding-20mm { padding: 20mm }
    .sheet.padding-25mm { padding: 25mm }

    /** For screen preview **/
    @media screen {
      html, body {
        background: #333;
      }
      .sheet {
        box-shadow: 0 .5mm 2mm rgba(0,0,0,.3);
        margin: calc((100vh - 209mm) / 2) auto;
        background: white;
      }
    }

    /** Fix for Chrome issue #273306 **/
    @media print {
               body.A3.landscape { width: 420mm }
      body.A3, body.A4.landscape { width: 297mm }
      body.A4, body.A5.landscape { width: 210mm }
      body.A5                    { width: 148mm }
      body {
        background: white;
      }
    }

    @page {
        size: A4 landscape;
    }

    body {
      font-family: 'Helvetica', sans-serif;
      font-size: 8px;
      color: black;
    }

    table {
      margin: 0;
      padding: 0.4cm 0.8cm 0.2cm 1cm;
      border-spacing: 0.18cm 0.25cm
    }

    tr {
      min-height: 2.6cm;
    }

    .labels-grid {
      height: 100%;
      margin: 0;
      padding: 0.6cm 0.8cm 0.2cm 1.2cm;
      display: grid;
      grid-template-columns: repeat(6, 1fr);
      grid-template-rows: repeat(7, 1fr);
      grid-gap: 0.25cm 0.2cm;
    }

    .label-single {
      width: 4.4cm;
      height: 2.6cm;
      position: relative;
      padding: 0;
      margin: 0;
      opacity: 1;
    }

    .labels-grid .label-single {
      opacity: 1;
    }

    .label-single .label-qr {
      position: absolute;
      top: 0.2cm;
      left: 0.3cm;
      display: -webkit-box;
      display: -ms-flexbox;
      display: flex;
      -webkit-box-align: center;
          -ms-flex-align: center;
              align-items: center;
      -webkit-box-pack: center;
          -ms-flex-pack: center;
              justify-content: center;
      width: 2.15cm;
      height: 2.15cm;
    }

    .label-single .label-qr img {
      width: 100%;
      height: 100%;
      -ms-interpolation-mode: nearest-neighbor;
          image-rendering: -webkit-optimize-contrast;
          image-rendering: -moz-crisp-edges;
          image-rendering: -o-pixelated;
          image-rendering: pixelated;
    }

    .label-single .label-text-id {
      position: absolute;
      bottom: 0.6cm;
      left: 2.2cm;
      width: 1.2cm;
      -webkit-transform: rotate(-90deg);
              transform: rotate(-90deg);
    }

    .label-single .label-logo-b2 {
      position: absolute;
      top: 0.2cm;
      left: 2.5cm;
      width: 0.6cm;
      height: 0.6cm;
    }

    .label-single .label-logo-b2 img {
      width: 0.6cm;
      height: 0.6cm;
    }

    .label-single .label-logo-ei {
      position: absolute;
      top: 0.9cm;
      left: 2.5cm;
      width: 0.6cm;
      height: 0.6cm;
    }

    .label-single .label-logo-ei img {
      width: 0.6cm;
      height: auto;
    }

    .label-single .cutoff {
      width: 0.9cm;
      position: absolute;
      right: 0;
      top: 0;
      height: 100%;
    }

    .label-single .cutoff span {
      display: block;
      -webkit-transform: rotate(-90deg);
              transform: rotate(-90deg);
      position: absolute;
      bottom: 0.45cm;
      height: auto;
      width: 100%;
    }

    .label-single .label-logo-cutoff-b2 {
      position: absolute;
      top: 0.2cm;
      right: 0.2cm;
      width: 0.6cm;
      height: 0.6cm;
    }

    .label-single .label-logo-cutoff-b2 img {
      width: 0.6cm;
      height: 0.6cm;
    }

    .label-single .label-logo-cutoff-ei {
      position: absolute;
      top: 0.9cm;
      right: 0.2cm;
      width: 0.6cm;
      height: 0.6cm;
    }

    .label-single .label-logo-cutoff-ei img {
      width: 0.6cm;
      height: auto;
    }

    .page-info {
      -webkit-transform: rotate(-90deg);
              transform: rotate(-90deg);
      position: absolute;
      display: flex;
      justify-content: space-between;
      top: 100mm;
      left: -85mm;
      width: 192mm;
      height: 0.8cm;
      font-size: 10pt;
      color: rgba(0,0,0,0.8);
    }

    .ui-box {
      float: right;
      position: fixed;
      display: flex !important;
      justify-content: space-between;
      z-index: 999;
      right: calc(50vw / 2);
      width: 50vw;
      height: auto;
      background-color: white;
      padding: 20px;
      text-align: center;
      font-size: 12px;
      box-shadow: 0 .5mm 2mm rgba(0,0,0,.3);
      opacity: 0.25;
      transition: opacity .2s;
    }

    .ui-box.bottom {
      bottom: 0.4cm;
    }

    .ui-box.top {
      top: 0.4cm;
    }

    .ui-box:hover {
      opacity: 1;
      transition: opacity .2s;
    }

    @media (max-width: 297mm) {
      .ui-box {
        width: calc(100vw - 50px);
        right: 0;
      }
    }

    @media screen {
        .noprint {
          display: block;
        }
    }

    @media print {
      body,
      .A4 {
        margin: 0;
        -webkit-box-shadow: 0;
                box-shadow: 0;
        width: 100%;
        height: 100%;
      }

      .noprint {
        display: none;
      }
    }

    /*  PRINTING LABELS MANUALLY
     *      Use NUMBER for just a single label
     *      Use -n+NUMBER for all labels from the start of the row up to that number
     *      Use n+NUMBER for all labels from that number to the end of the row
     */

     @php
       $row_num = 1;
       $label_num = 1;
     @endphp

    .row-{{ $row_num }} .label-single:nth-of-type(n+{{ $label_num }}) {
        opacity: 1;
    }

    .row-2 .label-single,
    .row-3 .label-single,
    .row-4 .label-single,
    .row-5 .label-single,
    .row-6 .label-single,
    .row-7 .label-single {
        opacity: 1;
    }

    /*  Push last four rows down more and more for each one  */
    /*  Push last four columns over to the right more and more  */


    .row-5 .label-single {
      top: 0.1cm;
    }
    .row-6 .label-single {
      top: 0.1cm;
    }
    .row-7 .label-single {
      top: 0.1cm;
    }

    [class^="row-"] .label-single:nth-of-type(4) {
      left: 0.1cm;
    }
    [class^="row-"] .label-single:nth-of-type(5) {
      left: 0.15cm;
    }
    [class^="row-"] .label-single:nth-of-type(6) {
      left: 0.2cm;
    }



</style>
