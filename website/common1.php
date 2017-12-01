html, body, div, span, applet, object, iframe,
h1, h2, h3, h4, h5, h6, p, blockquote, pre,
a, abbr, acronym, address, big, cite, code,
del, dfn, em, font, img, ins, kbd, q, s, samp,
small, strike, strong, sub, sup, tt, var,
b, u, i, center,
dl, dt, dd, ol, ul, li,
fieldset, form, label, legend,
table, caption, tbody, tfoot, thead, tr, th, td,
nav, button, section, header, footer, title {
  margin: 0;
  padding: 0;
  border: 0;
  outline: 0;
  vertical-align: baseline;
  background: transparent; }

body {
  font-size: 10px;
  font-family: Arial, Helvetica, sans-serif; }

textarea, input, select {
  font-family: Helvetica, Arial, sans-serif;
  box-sizing: border-box; }

ol, ul {
  list-style: none; }

blockquote, q {
  quotes: none; }

ins {
  text-decoration: none; }

del {
  text-decoration: line-through; }

table {
  border-collapse: collapse;
  border-spacing: 0; }

a {
  cursor: pointer;
  text-decoration: none; }

html, body {
  height: 100%; }

body {
  overflow-x: auto;
  overflow-y: scroll; }

.testStyles {
  overflow-y: hidden; }

.reset-button {
  background: none;
  border: 0;
  outline: 0;
  color: inherit;
  /* cursor: default; */
  font: inherit;
  line-height: normal;
  overflow: visible;
  padding: 0;
  -webkit-appearance: none;
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none; }

:focus {
  outline: none; }

.wixSiteProperties {
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  overflow: hidden; }

.SITE_ROOT {
  min-height: 100%;
  position: relative;
  margin: 0 auto; }

.POPUPS_ROOT {
  left: 0;
  top: 0;
  width: 100%;
  height: 100%;
  overflow-x: auto;
  overflow-y: scroll;
  position: fixed;
  z-index: 99999; }
  .POPUPS_ROOT.mobile {
    z-index: 1005; }

.POPUPS_WRAPPER {
  position: relative;
  overflow: hidden; }
  .POPUPS_WRAPPER > div {
    /* page */
    margin: 0 auto; }

.auto-generated-link {
  color: inherit; }

.warmup .hidden-on-warmup {
  visibility: hidden; }

html.device-phone body {
  overflow-y: auto; }

html.device-mobile-optimized.device-android {
  margin-bottom: 1px; }

html.device-mobile-optimized.blockSiteScrolling > body {
  position: fixed;
  width: 100%; }

html.device-mobile-optimized.media-zoom-mode > body {
  touch-action: manipulation; }
  html.device-mobile-optimized.media-zoom-mode > body > #SITE_CONTAINER {
    height: 100%;
    overflow: hidden; }
    html.device-mobile-optimized.media-zoom-mode > body > #SITE_CONTAINER > .noop {
      height: 100%; }
      html.device-mobile-optimized.media-zoom-mode > body > #SITE_CONTAINER > .noop > .siteAspectsContainer {
        height: 100%;
        z-index: 1005; }

.siteAspectsContainer {
  position: absolute;
  top: 0;
  margin: 0 auto;
  left: 0;
  right: 0; }

body.device-mobile-optimized {
  overflow-x: hidden;
  overflow-y: scroll; }
  body.device-mobile-optimized.qa-mode {
    overflow-y: auto; }
  body.device-mobile-optimized #SITE_CONTAINER {
    width: 320px;
    overflow-x: visible;
    margin: 0 auto;
    position: relative; }
  body.device-mobile-optimized > * {
    max-width: 100% !important; }
  body.device-mobile-optimized .SITE_ROOT {
    overflow-x: hidden;
    overflow-y: hidden; }

body.device-mobile-non-optimized #SITE_CONTAINER > :not(.mobile-non-optimized-overflow) .SITE_ROOT {
  overflow-x: hidden;
  overflow-y: auto; }

body.device-mobile-non-optimized.fullScreenMode {
  background-color: #5f6360; }
  body.device-mobile-non-optimized.fullScreenMode .SITE_ROOT,
  body.device-mobile-non-optimized.fullScreenMode #SITE_BACKGROUND,
  body.device-mobile-non-optimized.fullScreenMode #MOBILE_ACTIONS_MENU {
    visibility: hidden; }

body.fullScreenMode {
  overflow-x: hidden !important;
  overflow-y: hidden !important; }
  body.fullScreenMode.device-mobile-optimized #TINY_MENU {
    opacity: 0;
    pointer-events: none; }

body.fullScreenMode-scrollable.device-mobile-optimized {
  overflow-x: hidden !important;
  overflow-y: auto !important; }
  body.fullScreenMode-scrollable.device-mobile-optimized .SITE_ROOT,
  body.fullScreenMode-scrollable.device-mobile-optimized #masterPage {
    overflow-x: hidden !important;
    overflow-y: hidden !important; }
  body.fullScreenMode-scrollable.device-mobile-optimized #masterPage,
  body.fullScreenMode-scrollable.device-mobile-optimized #SITE_BACKGROUND {
    height: auto !important; }

.fullScreenOverlay {
  z-index: 1005;
  position: fixed;
  left: 0;
  top: -60px;
  right: 0;
  bottom: 0;
  display: -webkit-box;
  display: -webkit-flex;
  display: flex;
  -webkit-box-pack: center;
  -webkit-justify-content: center;
          justify-content: center;
  overflow-y: hidden; }
  .fullScreenOverlay > .fullScreenOverlayContent {
    margin: 0 auto;
    position: absolute;
    right: 0;
    top: 60px;
    left: 0;
    bottom: 0;
    overflow: hidden;
    -webkit-transform: translateZ(0);
            transform: translateZ(0); }

.mobile-actions-menu-wrapper {
  z-index: 1000; }

body[contenteditable] {
  overflow-x: auto;
  overflow-y: auto; }

.bold {
  font-weight: bold; }

.italic {
  font-style: italic; }

.underline {
  text-decoration: underline; }

.lineThrough {
  text-decoration: line-through; }

.singleLineText {
  white-space: nowrap;
  text-overflow: ellipsis; }

.alignLeft {
  text-align: left; }

.alignCenter {
  text-align: center; }

.alignRight {
  text-align: right; }

.alignJustify {
  text-align: justify; }

ul.font_100, ol.font_100 {
  color: #080808;
  font-family: 'Arial, Helvetica, sans-serif', serif;
  font-size: 10px;
  font-style: normal;
  font-variant: normal;
  font-weight: normal;
  margin: 0;
  text-decoration: none;
  line-height: normal;
  letter-spacing: normal; }
  ul.font_100 li, ol.font_100 li {
    margin-bottom: 12px; }

letter {
  position: relative;
  display: inline-block; }

word {
  display: inline-block;
  white-space: nowrap; }

word.space,
letter.space {
  display: inline; }

ol.wix-list-text-align, ul.wix-list-text-align {
  list-style-position: inside; }
  ol.wix-list-text-align p, ol.wix-list-text-align h1, ol.wix-list-text-align h2, ol.wix-list-text-align h3, ol.wix-list-text-align h4, ol.wix-list-text-align h5, ol.wix-list-text-align h6, ul.wix-list-text-align p, ul.wix-list-text-align h1, ul.wix-list-text-align h2, ul.wix-list-text-align h3, ul.wix-list-text-align h4, ul.wix-list-text-align h5, ul.wix-list-text-align h6 {
    display: inline; }

.wixapps-less-spacers-align.ltr {
  text-align: left; }

.wixapps-less-spacers-align.center {
  text-align: center; }

.wixapps-less-spacers-align.rtl {
  text-align: right; }

.wixapps-less-spacers-align > div,
.wixapps-less-spacers-align > a {
  display: inline-block !important; }

.flex_display {
  display: -webkit-box;
  display: -webkit-flex;
  display: flex; }

.flex_vbox {
  box-sizing: border-box;
  padding-top: 0.01em;
  padding-bottom: 0.01em; }

a.wixAppsLink img {
  cursor: pointer; }

.singleLine {
  white-space: nowrap;
  display: block;
  overflow: hidden;
  text-overflow: ellipsis;
  word-wrap: normal; }

[data-z-counter] {
  z-index: 0; }

[data-z-counter="0"] {
  z-index: auto; }

.circle-preloader {
  -webkit-animation: semi-rotate 1s 1ms linear infinite;
          animation: semi-rotate 1s 1ms linear infinite;
  height: 30px;
  left: 50%;
  margin-left: -15px;
  margin-top: -15px;
  overflow: hidden;
  position: absolute;
  top: 50%;
  -webkit-transform-origin: 100% 50%;
          transform-origin: 100% 50%;
  width: 15px; }
  .circle-preloader::before {
    content: '';
    top: 0;
    left: 0;
    right: -100%;
    bottom: 0;
    border: 3px solid currentColor;
    border-color: currentColor transparent transparent currentColor;
    border-radius: 50%;
    position: absolute;
    -webkit-transform: rotate(-45deg);
            transform: rotate(-45deg);
    -webkit-animation: inner-rotate 0.5s 1ms linear infinite alternate;
            animation: inner-rotate 0.5s 1ms linear infinite alternate;
    color: #7fccf7; }
  .circle-preloader::after {
    content: '';
    top: 0;
    left: 0;
    right: -100%;
    bottom: 0;
    border: 3px solid currentColor;
    border-color: currentColor transparent transparent currentColor;
    border-radius: 50%;
    position: absolute;
    -webkit-transform: rotate(-45deg);
            transform: rotate(-45deg);
    -webkit-animation: inner-rotate 0.5s 1ms linear infinite alternate;
            animation: inner-rotate 0.5s 1ms linear infinite alternate;
    color: #3899ec;
    opacity: 0; }
  .circle-preloader.white::before {
    color: #f0f0f0; }
  .circle-preloader.white::after {
    color: #dcdcdc; }

@-webkit-keyframes inner-rotate {
  to {
    opacity: 1;
    -webkit-transform: rotate(115deg);
            transform: rotate(115deg); } }

@keyframes inner-rotate {
  to {
    opacity: 1;
    -webkit-transform: rotate(115deg);
            transform: rotate(115deg); } }

@-webkit-keyframes semi-rotate {
  from {
    -webkit-animation-timing-function: ease-out;
            animation-timing-function: ease-out;
    -webkit-transform: rotate(180deg);
            transform: rotate(180deg); }
  45% {
    -webkit-transform: rotate(198deg);
            transform: rotate(198deg); }
  55% {
    -webkit-transform: rotate(234deg);
            transform: rotate(234deg); }
  to {
    -webkit-transform: rotate(540deg);
            transform: rotate(540deg); } }

@keyframes semi-rotate {
  from {
    -webkit-animation-timing-function: ease-out;
            animation-timing-function: ease-out;
    -webkit-transform: rotate(180deg);
            transform: rotate(180deg); }
  45% {
    -webkit-transform: rotate(198deg);
            transform: rotate(198deg); }
  55% {
    -webkit-transform: rotate(234deg);
            transform: rotate(234deg); }
  to {
    -webkit-transform: rotate(540deg);
            transform: rotate(540deg); } }

.hidden-comp-ghost-mode {
  opacity: 0.5; }

.collapsed-comp-mode::after {
  position: absolute;
  top: 0;
  bottom: 0;
  left: 0;
  right: 0;
  content: '';
  background: -webkit-repeating-linear-gradient(135deg, transparent, transparent 49%, #2b5672 40%, #2b5672 40%, transparent 51%);
  background: repeating-linear-gradient(-45deg, transparent, transparent 49%, #2b5672 40%, #2b5672 40%, transparent 51%);
  background-size: 6px 6px;
  background-repeat: repeat; }

.g-transparent-a:link, .g-transparent-a:visited {
  border-color: transparent; }

.transitioning-comp * {
  transition: inherit !important;
  -webkit-transition: inherit !important; }

.selectionSharerContainer {
  position: absolute;
  background-color: #ffffff;
  box-shadow: 0px 4px 10px 0px rgba(57, 86, 113, 0.24);
  width: 142px;
  height: 45px;
  border-radius: 100px;
  text-align: center; }
  .selectionSharerContainer:after {
    content: "";
    position: absolute;
    bottom: -10px;
    left: 42%;
    /*controls horizontal position */
    border-width: 10px 10px 0;
    /* vary these values to change the angle of the vertex */
    border-style: solid;
    border-color: #ffffff transparent;
    /* reduce the damage in FF3.0 */
    display: block;
    width: 0; }
  .selectionSharerContainer .selectionSharerOption {
    display: inline-block;
    cursor: pointer;
    vertical-align: top;
    padding: 13px 11px 11px 13px;
    margin: 1px;
    z-index: -1; }
  .selectionSharerContainer .selectionSharerVerticalSeparator {
    margin-top: 9px;
    margin-bottom: 18px;
    background-color: #eaf7ff;
    height: 26px;
    width: 1px;
    display: inline-block; }

.visual-focus-on :not(.has-custom-focus):focus {
  box-shadow: inset 0 0 0 1px rgba(255, 255, 255, 0.9), 0 0 1px 2px #3899EC !important; }

/*the ad font is Helvetica. we don't wont users to use it in the sites, so we changed the name of the font */
@font-face {
  font-family: "wixFreemiumFontW01-35Thin";
  src: url("//static.parastorage.com/services/third-party/fonts/Helvetica/Fonts/56be84de-9d60-4089-8df0-0ea6ec786b84.eot?#iefix");
  src: url("//static.parastorage.com/services/third-party/fonts/Helvetica/Fonts/56be84de-9d60-4089-8df0-0ea6ec786b84.eot?#iefix") format("eot"), url("//static.parastorage.com/services/third-party/fonts/Helvetica/Fonts/50d35bbc-dfd4-48f1-af16-cf058f69421d.woff") format("woff"), url("//static.parastorage.com/services/third-party/fonts/Helvetica/Fonts/278bef59-6be1-4800-b5ac-1f769ab47430.ttf") format("truetype"), url("//static.parastorage.com/services/third-party/fonts/Helvetica/Fonts/2e309b1b-08b8-477f-bc9e-7067cf0af0b3.svg#2e309b1b-08b8-477f-bc9e-7067cf0af0b3") format("svg"); }

@font-face {
  font-family: "wixFreemiumFontW01-45Ligh";
  src: url("//static.parastorage.com/services/third-party/fonts/Helvetica/Fonts/ae1656aa-5f8f-4905-aed0-93e667bd6e4a.eot?#iefix");
  src: url("//static.parastorage.com/services/third-party/fonts/Helvetica/Fonts/ae1656aa-5f8f-4905-aed0-93e667bd6e4a.eot?#iefix") format("eot"), url("//static.parastorage.com/services/third-party/fonts/Helvetica/Fonts/530dee22-e3c1-4e9f-bf62-c31d510d9656.woff") format("woff"), url("//static.parastorage.com/services/third-party/fonts/Helvetica/Fonts/688ab72b-4deb-4e15-a088-89166978d469.ttf") format("truetype"), url("//static.parastorage.com/services/third-party/fonts/Helvetica/Fonts/7816f72f-f47e-4715-8cd7-960e3723846a.svg#7816f72f-f47e-4715-8cd7-960e3723846a") format("svg"); }

@font-face {
  font-family: "wixFreemiumFontW01-55Roma";
  src: url("//static.parastorage.com/services/third-party/fonts/Helvetica/Fonts/b7693a83-b861-4aa6-85e0-9ecf676bc4d6.eot?#iefix");
  src: url("//static.parastorage.com/services/third-party/fonts/Helvetica/Fonts/b7693a83-b861-4aa6-85e0-9ecf676bc4d6.eot?#iefix") format("eot"), url("//static.parastorage.com/services/third-party/fonts/Helvetica/Fonts/bcf54343-d033-41ee-bbd7-2b77df3fe7ba.woff") format("woff"), url("//static.parastorage.com/services/third-party/fonts/Helvetica/Fonts/b0ffdcf0-26da-47fd-8485-20e4a40d4b7d.ttf") format("truetype"), url("//static.parastorage.com/services/third-party/fonts/Helvetica/Fonts/da09f1f1-062a-45af-86e1-2bbdb3dd94f9.svg#da09f1f1-062a-45af-86e1-2bbdb3dd94f9") format("svg"); }

@font-face {
  font-family: "wixFreemiumFontW01-65Medi";
  font-weight: bold;
  src: url("//static.parastorage.com/services/third-party/fonts/Helvetica/Fonts/07fe0fec-b63f-4963-8ee1-535528b67fdb.eot?#iefix");
  src: url("//static.parastorage.com/services/third-party/fonts/Helvetica/Fonts/07fe0fec-b63f-4963-8ee1-535528b67fdb.eot?#iefix") format("eot"), url("//static.parastorage.com/services/third-party/fonts/Helvetica/Fonts/60be5c39-863e-40cb-9434-6ebafb62ab2b.woff") format("woff"), url("//static.parastorage.com/services/third-party/fonts/Helvetica/Fonts/4c6503c9-859b-4d3b-a1d5-2d42e1222415.ttf") format("truetype"), url("//static.parastorage.com/services/third-party/fonts/Helvetica/Fonts/36c182c6-ef98-4021-9b0d-d63122c2bbf5.svg#36c182c6-ef98-4021-9b0d-d63122c2bbf5") format("svg"); }

@font-face {
  font-family: "wixFreemiumFontW02-35Thin";
  src: url("//static.parastorage.com/services/third-party/fonts/Helvetica/Fonts/30b6ffc3-3b64-40dd-9ff8-a3a850daf535.eot?#iefix");
  src: url("//static.parastorage.com/services/third-party/fonts/Helvetica/Fonts/30b6ffc3-3b64-40dd-9ff8-a3a850daf535.eot?#iefix") format("eot"), url("//static.parastorage.com/services/third-party/fonts/Helvetica/Fonts/775a65da-14aa-4634-be95-6724c05fd522.woff") format("woff"), url("//static.parastorage.com/services/third-party/fonts/Helvetica/Fonts/988eaaa7-5565-4f65-bb17-146b650ce9e9.ttf") format("truetype"), url("//static.parastorage.com/services/third-party/fonts/Helvetica/Fonts/3503a1a6-91c3-4c42-8e66-2ea7b2b57541.svg#3503a1a6-91c3-4c42-8e66-2ea7b2b57541") format("svg"); }

@font-face {
  font-family: "wixFreemiumFontW02-45Ligh";
  src: url("//static.parastorage.com/services/third-party/fonts/Helvetica/Fonts/88fcd49a-13c7-4d0c-86b1-ad1e258bd75d.eot?#iefix");
  src: url("//static.parastorage.com/services/third-party/fonts/Helvetica/Fonts/88fcd49a-13c7-4d0c-86b1-ad1e258bd75d.eot?#iefix") format("eot"), url("//static.parastorage.com/services/third-party/fonts/Helvetica/Fonts/9a2e4855-380f-477f-950e-d98e8db54eac.woff") format("woff"), url("//static.parastorage.com/services/third-party/fonts/Helvetica/Fonts/fa82d0ee-4fbd-4cc9-bf9f-226ad1fcbae2.ttf") format("truetype"), url("//static.parastorage.com/services/third-party/fonts/Helvetica/Fonts/48d599a6-92b5-4d43-a4ac-8959f6971853.svg#48d599a6-92b5-4d43-a4ac-8959f6971853") format("svg"); }

@font-face {
  font-family: "wixFreemiumFontW02-55Roma";
  src: url("//static.parastorage.com/services/third-party/fonts/Helvetica/Fonts/0b3a3fca-0fad-402b-bd38-fdcbad1ef776.eot?#iefix");
  src: url("//static.parastorage.com/services/third-party/fonts/Helvetica/Fonts/0b3a3fca-0fad-402b-bd38-fdcbad1ef776.eot?#iefix") format("eot"), url("//static.parastorage.com/services/third-party/fonts/Helvetica/Fonts/d5af76d8-a90b-4527-b3a3-182207cc3250.woff") format("woff"), url("//static.parastorage.com/services/third-party/fonts/Helvetica/Fonts/1d238354-d156-4dde-89ea-4770ef04b9f9.ttf") format("truetype"), url("//static.parastorage.com/services/third-party/fonts/Helvetica/Fonts/b68875cb-14a9-472e-8177-0247605124d7.svg#b68875cb-14a9-472e-8177-0247605124d7") format("svg"); }

@font-face {
  font-family: "wixFreemiumFontW02-65Medi";
  font-weight: bold;
  src: url("//static.parastorage.com/services/third-party/fonts/Helvetica/Fonts/55f60419-09c3-42bd-b81f-1983ff093852.eot?#iefix");
  src: url("//static.parastorage.com/services/third-party/fonts/Helvetica/Fonts/55f60419-09c3-42bd-b81f-1983ff093852.eot?#iefix") format("eot"), url("//static.parastorage.com/services/third-party/fonts/Helvetica/Fonts/5b4a262e-3342-44e2-8ad7-719998a68134.woff") format("woff"), url("//static.parastorage.com/services/third-party/fonts/Helvetica/Fonts/4a3ef5d8-cfd9-4b96-bd67-90215512f1e5.ttf") format("truetype"), url("//static.parastorage.com/services/third-party/fonts/Helvetica/Fonts/58ab5075-53ea-46e6-9783-cbb335665f88.svg#58ab5075-53ea-46e6-9783-cbb335665f88") format("svg"); }

@font-face {
  font-family: "wixFreemiumFontW10-35Thin";
  src: url("//static.parastorage.com/services/third-party/fonts/Helvetica/Fonts/93b6bf6a-418e-4a8f-8f79-cb9c99ef3e32.eot?#iefix");
  src: url("//static.parastorage.com/services/third-party/fonts/Helvetica/Fonts/93b6bf6a-418e-4a8f-8f79-cb9c99ef3e32.eot?#iefix") format("eot"), url("//static.parastorage.com/services/third-party/fonts/Helvetica/Fonts/c881c21b-4148-4a11-a65d-f35e42999bc8.woff") format("woff"), url("//static.parastorage.com/services/third-party/fonts/Helvetica/Fonts/03634cf1-a9c9-4e13-b049-c90d830423d4.ttf") format("truetype"), url("//static.parastorage.com/services/third-party/fonts/Helvetica/Fonts/1bc99c0a-298b-46f9-b325-18b5e5169795.svg#1bc99c0a-298b-46f9-b325-18b5e5169795") format("svg"); }

@font-face {
  font-family: "wixFreemiumFontW10-45Ligh";
  src: url("//static.parastorage.com/services/third-party/fonts/Helvetica/Fonts/5b85c7cc-6ad4-4226-83f5-9d19e2974123.eot?#iefix");
  src: url("//static.parastorage.com/services/third-party/fonts/Helvetica/Fonts/5b85c7cc-6ad4-4226-83f5-9d19e2974123.eot?#iefix") format("eot"), url("//static.parastorage.com/services/third-party/fonts/Helvetica/Fonts/835e7b4f-b524-4374-b57b-9a8fc555fd4e.woff") format("woff"), url("//static.parastorage.com/services/third-party/fonts/Helvetica/Fonts/2c694ef6-9615-473e-8cf4-d8d00c6bd973.ttf") format("truetype"), url("//static.parastorage.com/services/third-party/fonts/Helvetica/Fonts/3fc84193-a13f-4fe8-87f7-238748a4ac54.svg#3fc84193-a13f-4fe8-87f7-238748a4ac54") format("svg"); }

@font-face {
  font-family: "wixFreemiumFontW10-65Medi";
  font-weight: bold;
  src: url("//static.parastorage.com/services/third-party/fonts/Helvetica/Fonts/7092fdcc-7036-48ce-ae23-cfbc9be2e3b0.eot?#iefix");
  src: url("//static.parastorage.com/services/third-party/fonts/Helvetica/Fonts/7092fdcc-7036-48ce-ae23-cfbc9be2e3b0.eot?#iefix") format("eot"), url("//static.parastorage.com/services/third-party/fonts/Helvetica/Fonts/5b29e833-1b7a-40ab-82a5-cfd69c8650f4.woff") format("woff"), url("//static.parastorage.com/services/third-party/fonts/Helvetica/Fonts/b0298148-2d59-44d1-9ec9-1ca6bb097603.ttf") format("truetype"), url("//static.parastorage.com/services/third-party/fonts/Helvetica/Fonts/ae1dea8c-a953-4845-b616-74a257ba72e6.svg#ae1dea8c-a953-4845-b616-74a257ba72e6") format("svg"); }

@font-face {
  font-family: "wixFreemiumFontW10-55Roma";
  src: url("//static.parastorage.com/services/third-party/fonts/Helvetica/Fonts/f1feaed7-6bce-400a-a07e-a893ae43a680.eot?#iefix");
  src: url("//static.parastorage.com/services/third-party/fonts/Helvetica/Fonts/f1feaed7-6bce-400a-a07e-a893ae43a680.eot?#iefix") format("eot"), url("//static.parastorage.com/services/third-party/fonts/Helvetica/Fonts/8ac9e38d-29c6-41ea-8e47-4ae4d2b1a4e1.woff") format("woff"), url("//static.parastorage.com/services/third-party/fonts/Helvetica/Fonts/4bd09087-655e-4abb-844c-dccdeb68003d.ttf") format("truetype"), url("//static.parastorage.com/services/third-party/fonts/Helvetica/Fonts/df234d87-eada-4058-aa80-5871e7fbe1c3.svg#df234d87-eada-4058-aa80-5871e7fbe1c3") format("svg"); }

.wrapper.hidden {
  display: none; }

.wrapper.visible {
  display: block; }

.wrapper .desktop-top {
  position: fixed;
  top: 0;
  right: 39px;
  border-top: solid 2px #459fed;
  border-bottom-left-radius: 10px;
  border-bottom-right-radius: 10px;
  -webkit-transition: height 100ms;
  transition: height 100ms;
  cursor: pointer;
  overflow: hidden;
  color: #ffffff;
  display: block;
  font-family: wixFreemiumFontW01-55Roma, wixFreemiumFontW02-55Roma, wixFreemiumFontW10-55Roma, Helvetica Neue, Helvetica, Arial, メイリオ, meiryo, ヒラギノ角ゴ pro w3, hiragino kaku gothic pro, sans-serif;
  letter-spacing: 0.05em;
  font-size: 13px;
  z-index: 999; }
  .wrapper .desktop-top:hover {
    min-height: 72px;
    background-color: #43515c;
    padding-bottom: 6px;
    word-wrap: break-word; }
    .wrapper .desktop-top:hover > .hover1 {
      display: block;
      font-family: wixFreemiumFontW01-35Thin, wixFreemiumFontW02-35Thin, wixFreemiumFontW10-35Thin, Helvetica Neue, Helvetica, Arial, メイリオ, meiryo, ヒラギノ角ゴ pro w3, hiragino kaku gothic pro, sans-serif;
      padding-top: 4px; }
    .wrapper .desktop-top:hover > .arrow,
    .wrapper .desktop-top:hover > .hover2 {
      display: inline-block; }
  .wrapper .desktop-top > .main {
    padding: 0 6px 0 10px;
    text-align: center;
    line-height: 26px;
    border-bottom-left-radius: 10px;
    border-bottom-right-radius: 10px;
    background-color: #20303c; }
    .wrapper .desktop-top > .main > .banner1,
    .wrapper .desktop-top > .main > .wix,
    .wrapper .desktop-top > .main > .banner2,
    .wrapper .desktop-top > .main > .arrow {
      display: inline-block; }
    .wrapper .desktop-top > .main > .wix {
      fill: #fff;
      width: 28px;
      height: 14px;
      padding: 0 1px 4px 1px;
      vertical-align: middle; }
      .wrapper .desktop-top > .main > .wix > .dot {
        fill: #fc0; }
  .wrapper .desktop-top > .hover1,
  .wrapper .desktop-top > .hover2 {
    padding-left: 14px;
    line-height: 20px;
    display: none; }
  .wrapper .desktop-top > .hover2 {
    color: #459fed;
    padding-right: 4px; }
  .wrapper .desktop-top > .arrow {
    display: none;
    fill: none;
    stroke: #459fed;
    stroke-miterlimit: 10;
    stroke-width: 2px;
    height: 10px;
    width: 6px;
    padding-bottom: 5px;
    vertical-align: bottom; }

.wrapper .desktop-bottom {
  position: fixed;
  width: 100%;
  height: 40px;
  background-color: #20303c;
  bottom: 0;
  max-height: 10vh;
  color: #ffffff;
  font-size: 14px;
  display: inline-block;
  line-height: 40px;
  text-align: center;
  letter-spacing: 0.05em;
  -webkit-box-align: center;
  -webkit-align-items: center;
          align-items: center;
  font-family: wixFreemiumFontW01-55Roma, wixFreemiumFontW02-55Roma, wixFreemiumFontW10-55Roma, Helvetica Neue, Helvetica, Arial, メイリオ, meiryo, ヒラギノ角ゴ pro w3, hiragino kaku gothic pro, sans-serif;
  -webkit-transition: background-color 150ms;
  transition: background-color 150ms;
  cursor: pointer;
  z-index: 999; }
  .wrapper .desktop-bottom.preview {
    cursor: default; }
  .wrapper .desktop-bottom:not(.preview):hover {
    background-color: #43515c; }
  .wrapper .desktop-bottom > .contents .wix-logo {
    fill: #fff;
    width: 36px;
    vertical-align: middle;
    padding-bottom: 6px;
    height: 16px; }
    .wrapper .desktop-bottom > .contents .wix-logo > .dot {
      fill: #fc0; }
  .wrapper .desktop-bottom > .contents .com {
    color: #ffffff; }
  .wrapper .desktop-bottom > .contents > .arrow {
    fill: none;
    stroke: #459fed;
    stroke-miterlimit: 10;
    stroke-width: 2px;
    height: 10px;
    padding-bottom: 1px;
    vertical-align: middle; }
  .wrapper .desktop-bottom > .contents > .second {
    color: #459fed;
    padding: 0 5px 0 6px; }

@media (orientation: landscape) and (max-width: 600px) {
  .wrapper .mobile-top.not-preview {
    display: none; } }

.wrapper .mobile-top {
  position: relative;
  display: block;
  height: 38px;
  top: 0px;
  width: 100%;
  font-family: wixFreemiumFontW01-65Medi, wixFreemiumFontW02-65Medi, wixFreemiumFontW10-65Medi, Helvetica Neue, Helvetica, Arial, メイリオ, meiryo, ヒラギノ角ゴ pro w3, hiragino kaku gothic pro, sans-serif;
  letter-spacing: 0.05em;
  font-size: 14px;
  color: #ffffff;
  background-color: #20303c;
  z-index: 999;
  text-align: center;
  cursor: default; }
  .wrapper .mobile-top > .first {
    display: inline-block;
    text-align: center;
    line-height: 38px; }
  .wrapper .mobile-top .wix-logo {
    fill: #fff;
    width: 30px;
    padding-bottom: 4px;
    vertical-align: middle;
    height: 15px; }
    .wrapper .mobile-top .wix-logo > .dot {
      fill: #fc0; }

/* old banner*/
.wixAds_wrapper-old.hidden {
  display: none; }

.wixAds_wrapper-old.visible {
  display: block; }

.wixAds_wrapper-old .wixAdsdesktopWADTop {
  position: fixed;
  z-index: 999;
  height: 26px;
  top: 0;
  right: 50px;
  overflow: hidden;
  background-color: #404040;
  border-radius: 0 0 6px 6px;
  pointer-events: all;
  cursor: pointer;
  -webkit-transition: all .3s ease-in-out;
  transition: all .3s ease-in-out; }
  .wixAds_wrapper-old .wixAdsdesktopWADTop:hover {
    height: 97px;
    background-color: rgba(50, 50, 50, 0.8); }
    .wixAds_wrapper-old .wixAdsdesktopWADTop:hover .topLabel {
      background-color: #222222; }

.wixAds_wrapper-old .topLabel {
  padding: 6px;
  font-size: 13px;
  line-height: 1.3em;
  color: #FFF;
  width: 100%;
  font-size: 13px;
  color: #FFF;
  font-weight: bold;
  line-height: 18px;
  text-align: justify;
  padding: 5px 10px; }
  .wixAds_wrapper-old .topLabel .smallMusa {
    display: inline-block;
    text-indent: -9999px;
    width: 16px;
    height: 16px;
    margin-right: 5px;
    background-image: url("//static.wixstatic.com/media/0da768_0c5ce9e2ffa442bea0b79b690223a939~mv2.png");
    background-repeat: no-repeat;
    background-position: 0% 0%; }
  .wixAds_wrapper-old .topLabel .smallLogo {
    display: inline-block;
    text-indent: -9999px;
    width: 29px;
    height: 16px;
    background-image: url("//static.wixstatic.com/media/0da768_0c5ce9e2ffa442bea0b79b690223a939~mv2.png");
    background-repeat: no-repeat;
    background-position: -16px top; }

.wixAds_wrapper-old .topContent {
  font-size: 13px;
  line-height: 1.3em;
  color: #ffffff;
  font-weight: bold;
  line-height: 18px;
  text-align: justify;
  padding: 5px 10px;
  width: 100%; }
  .wixAds_wrapper-old .topContent .emphasis {
    color: #ffcc00;
    line-height: 26px; }

.wixAds_wrapper-old .desktop-bottom {
  position: fixed;
  z-index: 999;
  width: 100%;
  bottom: 0;
  max-height: 10vh; }
  .wixAds_wrapper-old .desktop-bottom:hover .siteBanner,
  .wixAds_wrapper-old .desktop-bottom:hover .footerLabel {
    background-color: #222222 !important; }
  .wixAds_wrapper-old .desktop-bottom .footerLabel {
    width: 100%;
    height: 40px;
    text-align: center;
    background-color: #404040;
    border-radius: 6px 6px 0 0;
    pointer-events: all;
    cursor: pointer; }
    .wixAds_wrapper-old .desktop-bottom .footerLabel .siteBanner {
      background-color: #404040;
      border-radius: 6px 6px 0 0;
      width: 100%;
      height: 100%;
      text-align: center; }
      .wixAds_wrapper-old .desktop-bottom .footerLabel .siteBanner .bigMusa {
        text-indent: -9999px;
        width: 36px;
        background-image: url("//static.wixstatic.com/media/0da768_0c5ce9e2ffa442bea0b79b690223a939~mv2.png");
        background-repeat: no-repeat;
        background-position: left bottom;
        position: relative;
        top: -19px; }
      .wixAds_wrapper-old .desktop-bottom .footerLabel .siteBanner .wrapper {
        padding: 5px 0; }
      .wixAds_wrapper-old .desktop-bottom .footerLabel .siteBanner .wrapper div {
        display: inline-block;
        height: 30px; }
      .wixAds_wrapper-old .desktop-bottom .footerLabel .siteBanner .txt {
        line-height: 47px;
        color: #ffffff;
        font-weight: bold;
        font-size: 15px; }
        .wixAds_wrapper-old .desktop-bottom .footerLabel .siteBanner .txt a {
          color: #ffffff; }
    .wixAds_wrapper-old .desktop-bottom .footerLabel .emphasis {
      color: #ffcc00;
      font-size: 16px;
      text-transform: uppercase; }

.wixAds_wrapper-old .mobile-top {
  width: 100%;
  height: 30px;
  position: relative;
  display: block;
  text-align: center;
  background-color: #313131;
  z-index: 999; }
  .wixAds_wrapper-old .mobile-top .wixAdsmobileAdImg {
    height: 30px; }

@media (orientation: landscape) and (max-width: 600px) {
  .wixAds_wrapper-old .mobile-top.not-preview {
    display: none; } }

.wixAds_wrapper-old .spacer {
  line-height: 26px; }
 
 </style>