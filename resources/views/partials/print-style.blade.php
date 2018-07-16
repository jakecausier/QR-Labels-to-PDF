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
      .sheet {
        background: white;
        box-shadow: 0 .5mm 2mm rgba(0,0,0,.3);
        margin: 5mm;
      }
    }

    /** Fix for Chrome issue #273306 **/
    @media print {
               body.A3.landscape { width: 420mm }
      body.A3, body.A4.landscape { width: 297mm }
      body.A4, body.A5.landscape { width: 210mm }
      body.A5                    { width: 148mm }
    }

    @page {
        size: A4 landscape;
    }

    body {
      background: white;
      font-family: 'Helvetica', sans-serif;
      font-size: 8px;
      color: black;
    }

    table {
      width: 100%;
      height: 100%;
      margin: 0;
      padding: 0.4cm 0.8cm 0.2cm 1cm;
      border-spacing: 0.3cm 0.2cm;
    }

    tr {
      height: 2.6cm;
    }

    .label-single {
      width: 4.4cm;
      height: 2.6cm;
      position: relative;
      padding: 0;
      margin: 0;
      opacity: 0;
    }

    .label-single .label-qr {
      position: absolute;
      top: 0.01cm;
      left: 0;
      display: -webkit-box;
      display: -ms-flexbox;
      display: flex;
      -webkit-box-align: center;
          -ms-flex-align: center;
              align-items: center;
      -webkit-box-pack: center;
          -ms-flex-pack: center;
              justify-content: center;
      width: 2.6cm;
      height: 2.6cm;
    }

    .label-single .label-qr img {
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

    .ui-box {
      float: right;
      position: absolute;
      z-index: 999;
      right: 10px;
      bottom: 10px;
      width: auto;
      height: auto;
      background-color: white;
      padding: 20px;
      font-size: 12px;
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

    @php
        $row_num = 1;
        $label_num = 3;
    @endphp

    /*  PRINTING LABELS MANUALLY
     *      Use NUMBER for just a single label
     *      Use -n+NUMBER for all labels from the start of the row up to that number
     *      Use n+NUMBER for all labels from that number to the end of the row
     */

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

</style>
