<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;
use Twig\TemplateWrapper;

/* @bundles/CoreBundle/Assets/css/app/less/lesshat.less */
class __TwigTemplate_371f0a0fe884aa7a2787c7cbced4f3e3 extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 1
        yield "//  * =========================================================== *
//  <                            LESSHat                          >
//  * =========================================================== *
//
// Made with Energy drinks in Prague, Czech Republic.
// Handcrafted by Petr Brzek, lesshat.com
// Works great with CSS Hat csshat.com

// version: v3.0.2 (2014-06-26)

// TABLE OF MIXINS:
// align-content
// align-items
// align-self
// animation
// animation-delay
// animation-direction
// animation-duration
// animation-fill-mode
// animation-iteration-count
// animation-name
// animation-play-state
// animation-timing-function
// appearance
// backface-visibility
// background-clip
// background-image
// background-origin
// background-size
// blur
// border-bottom-left-radius
// border-bottom-right-radius
// border-image
// border-radius
// border-top-left-radius
// border-top-right-radius
// box-shadow
// box-sizing
// brightness
// calc
// column-count
// column-gap
// column-rule
// column-width
// columns
// contrast
// display
// drop-shadow
// filter
// flex
// flex-basis
// flex-direction
// flex-grow
// flex-shrink
// flex-wrap
// font-face
// grayscale
// hue-rotate
// hyphens
// invert
// justify-content
// keyframes
// opacity
// order
// perspective
// perspective-origin
// placeholder
// rotate
// rotate3d
// rotateX
// rotateY
// rotateZ
// saturate
// scale
// scale3d
// scaleX
// scaleY
// scaleZ
// selection
// sepia
// size
// skew
// skewX
// skewY
// transform
// transform-origin
// transform-style
// transition
// transition-delay
// transition-duration
// transition-property
// transition-timing-function
// translate
// translate3d
// translateX
// translateY
// translateZ
// user-select

.lh-align-content(...) {
  @process: ~`(function(r){return r=r||\"stretch\"})((function(){var r=\"@{arguments}\";return r=r.replace(/^\\[|\\]\$/g,\"\")})())`;
  @process_ms: ~`(function(t){return t=t||\"stretch\",\"flex-start\"==t?t=\"start\":\"flex-end\"==t?t=\"end\":\"space-between\"==t?t=\"justify\":\"space-around\"==t&&(t=\"distribute\"),t})((function(){var r=\"@{arguments}\";return r=r.replace(/^\\[|\\]\$/g,\"\")})())`;
  -webkit-align-content: @process;
  -ms-flex-line-pack: @process_ms;
  align-content: @process;
}

.lh-align-items(...) {
  @process_olderwebkit: ~`(function(t){return t=t||\"stretch\",\"flex-start\"==t?t=\"start\":\"flex-end\"==t&&(t=\"end\"),t})((function(){var e=\"@{arguments}\";return e=e.replace(/^\\[|\\]\$/g,\"\")})())`;
  @process_moz: ~`(function(t){return t=t||\"stretch\",\"flex-start\"==t?t=\"start\":\"flex-end\"==t&&(t=\"end\"),t})((function(){var t=\"@{arguments}\";return t=t.replace(/^\\[|\\]\$/g,\"\")})())`;
  @process: ~`(function(t){return t=t||\"stretch\"})((function(){var t=\"@{arguments}\";return t=t.replace(/^\\[|\\]\$/g,\"\")})())`;
  @process_ms: ~`(function(t){return t=t||\"stretch\",\"flex-start\"==t?t=\"start\":\"flex-end\"==t&&(t=\"end\"),t})((function(){var t=\"@{arguments}\";return t=t.replace(/^\\[|\\]\$/g,\"\")})())`;
  -webkit-box-align: @process_olderwebkit;
  -moz-box-align: @process_moz;
  -webkit-align-items: @process;
  -ms-flex-align: @process_ms;
  align-items: @process;
}

.lh-align-self(...) {
  @process: ~`(function(t){return t=t||\"auto\"})((function(){var t=\"@{arguments}\";return t=t.replace(/^\\[|\\]\$/g,\"\")})())`;
  @process_ms: ~`(function(t){return t=t||\"auto\",\"flex-start\"==t?t=\"start\":\"flex-end\"==t&&(t=\"end\"),t})((function(){var t=\"@{arguments}\";return t=t.replace(/^\\[|\\]\$/g,\"\")})())`;
  -webkit-align-self: @process;
  -ms-flex-item-align: @process_ms;
  align-self: @process;
}

.lh-animation(...) {
  @process: ~`(function(t){return t=t||\"none\",/^[^, ]*,/.test(t)&&(t=t.replace(/(?:,)(?![^(]*\\))/g,\"\")),t})((function(){var t=\"@{arguments}\";return t=t.replace(/^\\[|\\]\$/g,\"\")})())`;
  -webkit-animation: @process;
  -moz-animation: @process;
  -o-animation: @process;
  animation: @process;
}

.lh-animation-delay(...) {
  @process: ~`(function(t){t=t||\"0\";var r=/(?:\\d)(?:ms|s)/gi,e=/(?:\\s|^)(\\.?\\d+\\.?\\d*)(?![^(]*\\)|\\w|%|\\.)/gi;return r.test(t)||\"0\"===t||(t=t.replace(e,function(t){return t+=parseFloat(t,10)>10?\"ms\":\"s\"})),t})((function(){var t=\"@{arguments}\";return t=t.replace(/^\\[|\\]\$/g,\"\")})())`;
  -webkit-animation-delay: @process;
  -moz-animation-delay: @process;
  -o-animation-delay: @process;
  animation-delay: @process;
}

.lh-animation-direction(...) {
  @process: ~`(function(r){return r||\"normal\"})((function(){var r=\"@{arguments}\";return r=r.replace(/^\\[|\\]\$/g,\"\")})())`;
  -webkit-animation-direction: @process;
  -moz-animation-direction: @process;
  -o-animation-direction: @process;
  animation-direction: @process;
}

.lh-animation-duration(...) {
  @process: ~`(function(r){r=r||\"0\";var t=/ms|s/gi,e=/(?:\\s|^)(\\.?\\d+\\.?\\d*)(?![^(]*\\)|\\w|%|\\.)/gi;return t.test(r)||\"0\"===r||(r=r.replace(e,function(r){return r+=parseFloat(r,10)>10?\"ms\":\"s\"})),r})((function(){var r=\"@{arguments}\";return r=r.replace(/^\\[|\\]\$/g,\"\")})())`;
  -webkit-animation-duration: @process;
  -moz-animation-duration: @process;
  -o-animation-duration: @process;
  animation-duration: @process;
}

.lh-animation-fill-mode(...) {
  @process: ~`(function(r){return r||\"none\"})((function(){var r=\"@{arguments}\";return r=r.replace(/^\\[|\\]\$/g,\"\")})())`;
  -webkit-animation-fill-mode: @process;
  -moz-animation-fill-mode: @process;
  -o-animation-fill-mode: @process;
  animation-fill-mode: @process;
}

.lh-animation-iteration-count(...) {
  @process: ~`(function(r){return r||\"0\"})((function(){var r=\"@{arguments}\";return r=r.replace(/^\\[|\\]\$/g,\"\")})())`;
  -webkit-animation-iteration-count: @process;
  -moz-animation-iteration-count: @process;
  -o-animation-iteration-count: @process;
  animation-iteration-count: @process;
}

.lh-animation-name(...) {
  @process: ~`(function(r){return r||\"none\"})((function(){var r=\"@{arguments}\";return r=r.replace(/^\\[|\\]\$/g,\"\")})())`;
  -webkit-animation-name: @process;
  -moz-animation-name: @process;
  -o-animation-name: @process;
  animation-name: @process;
}

.lh-animation-play-state(...) {
  @process: ~`(function(r){return r||\"running\"})((function(){var r=\"@{arguments}\";return r=r.replace(/^\\[|\\]\$/g,\"\")})())`;
  -webkit-animation-play-state: @process;
  -moz-animation-play-state: @process;
  -o-animation-play-state: @process;
  animation-play-state: @process;
}

.lh-animation-timing-function(...) {
  @process: ~`(function(r){return r||\"ease\"})((function(){var r=\"@{arguments}\";return r=r.replace(/^\\[|\\]\$/g,\"\")})())`;
  -webkit-animation-timing-function: @process;
  -moz-animation-timing-function: @process;
  -o-animation-timing-function: @process;
  animation-timing-function: @process;
}

.lh-appearance(...) {
  @process: ~`(function(r){return r||\"none\"})((function(){var r=\"@{arguments}\";return r=r.replace(/^\\[|\\]\$/g,\"\")})())`;
  -webkit-appearance: @process;
  -moz-appearance: @process;
  appearance: @process;
}

.lh-backface-visibility(...) {
  @process: ~`(function(r){return r||\"visible\"})((function(){var r=\"@{arguments}\";return r=r.replace(/^\\[|\\]\$/g,\"\")})())`;
  -webkit-backface-visibility: @process;
  -moz-backface-visibility: @process;
  -ms-backface-visibility: @process;
  -o-backface-visibility: @process;
  backface-visibility: @process;
}

.lh-background-clip(...) {
  @process: ~`(function(r){return r||\"border-box\"})((function(){var r=\"@{arguments}\";return r=r.replace(/^\\[|\\]\$/g,\"\")})())`;
  -webkit-background-clip: @process;
  -moz-background-clip: @process;
  background-clip: @process;
}

.lh-background-image(...) {
  @process_ms: ~`(function(t){function e(t){var e,r,n,a,s,i,u,o,g=\"ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789+/=\",c=0,l=0,f=\"\",d=[];if(!t)return t;do e=t.charCodeAt(c++),r=t.charCodeAt(c++),n=t.charCodeAt(c++),o=e<<16|r<<8|n,a=63&o>>18,s=63&o>>12,i=63&o>>6,u=63&o,d[l++]=g.charAt(a)+g.charAt(s)+g.charAt(i)+g.charAt(u);while(c<t.length);f=d.join(\"\");var p=t.length%3;return(p?f.slice(0,p-3):f)+\"===\".slice(p||3)}if(t=t||8121991,8121991==t)return t;var r=/linear|radial/g.test(t)&&t.split(/,(?=\\s*(?:linear|radial|url))/g),n=[],a={\"to bottom\":'x1=\"0%\" y1=\"0%\" x2=\"0%\" y2=\"100%\"',\"to left\":'x1=\"100%\" y1=\"0%\" x2=\"0%\" y2=\"0%\"',\"to top\":'x1=\"0%\" y1=\"100%\" x2=\"0%\" y2=\"0%\"',\"to right\":'x1=\"0%\" y1=\"0%\" x2=\"100%\" y2=\"0%\"',get\"top\"(){return this[\"to bottom\"]},get\"180deg\"(){return this[\"to bottom\"]},get\"right\"(){return this[\"to left\"]},get\"270deg\"(){return this[\"to left\"]},get\"bottom\"(){return this[\"to top\"]},get\"90deg\"(){return this[\"to right\"]},get\"0deg\"(){return this[\"to top\"]},get\"left\"(){return this[\"to right\"]},\"-45deg\":'x1=\"0%\" y1=\"0%\" x2=\"100%\" y2=\"100%\"',\"45deg\":'x1=\"0%\" y1=\"100%\" x2=\"100%\" y2=\"0%\"',\"ellipse at center\":'cx=\"50%\" cy=\"50%\" r=\"75%\"',get\"135deg\"(){return this[\"-45deg\"]}},s={uri_data:\"url(data:image/svg+xml;base64,\",xml:'<?xml version=\"1.0\" ?>',svg_start:'<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"100%\" height=\"100%\" viewBox=\"0 0 1 1\" preserveAspectRatio=\"none\">',linear_gradient_start:'<linearGradient id=\"lesshat-generated\" gradientUnits=\"userSpaceOnUse\"',radial_gradient_start:'<radialGradient id=\"lesshat-generated\" gradientUnits=\"userSpaceOnUse\"',linear_gradient_end:\"</linearGradient>\",radial_gradient_end:\"</radialGradient>\",rect_linear:'<rect x=\"0\" y=\"0\" width=\"1\" height=\"1\" fill=\"url(#lesshat-generated)\" />',rect_radial:'<rect x=\"-50\" y=\"-50\" width=\"101\" height=\"101\" fill=\"url(#lesshat-generated)\" />',svg_end:\"</svg>\"};if(r.length){r.forEach(function(t){var e={};if(Object.keys(a).some(function(r){return t.indexOf(r)>=0?(e.svg_direction=a[r],!0):(e.svg_direction=!1,void 0)}),/linear/.test(t))e.svg_type=\"linear\";else if(/radial/.test(t))e.svg_type=\"radial\";else if(!/linear/.test(t)&&!/radial/.test(t))return e.url=t.trim(),e.svg_type=\"url\",e.svg_direction=!0,n.push(e),!1;var r=t.match(/rgb|#[a-zA-Z0-9]|hsl/g).length;e.svg_stops=[],t=t.replace(/transparent/g,\"rgba(0,0,0,0)\"),t.match(/#[a-zA-Z0-9]/g)&&t.match(/(#[a-zA-Z0-9]+)\\s*(\\d+%)?/g).forEach(function(t){t=t.split(\" \"),e.svg_stops.push('<stop offset=\"'+(t[1]||!1)+'\" stop-color=\"'+t[0]+'\" stop-opacity=\"1\"/>')}),t.match(/rgba?\\(\\d+,\\s*\\d+,\\s*\\d+(?:,\\s*(0|1|\\.\\d+|0\\.\\d+))?\\)/g)&&t.replace(/rgba?\\((\\d+,\\s*\\d+,\\s*\\d+)(?:,\\s*(0|1|\\.\\d+|0\\.\\d+))?\\)\\s*(\\d+%)?/g,function(t,r,n,a){e.svg_stops.push('<stop offset=\"'+(a||!1)+'\" stop-color=\"rgb('+r+')\" stop-opacity=\"'+(n||1)+'\"/>')}),t.match(/hsla?\\((\\d+,\\s*\\d+%,\\s*\\d+%),\\s*(0|1|\\.\\d+|0\\.\\d+)\\)/g)&&t.replace(/hsla?\\((\\d+,\\s*\\d+%,\\s*\\d+%),\\s*(0|1|\\.\\d+|0\\.\\d+)\\)\\s*(\\d+%)?/g,function(t,r,n,a){e.svg_stops.push('<stop offset=\"'+(a||!1)+'\" stop-color=\"hsl('+r+')\" stop-opacity=\"'+(n||1)+'\"/>')});var s=Math.floor(100/(r-1));e.svg_stops.forEach(function(t,r){/offset=\"false\"/.test(t)&&(e.svg_stops[r]=t.replace(/offset=\"false\"/,'offset=\"'+s*r+'%\"'))}),e.svg_stops.sort(function(t,e){return t=t.match(/offset=\"(\\d+)%\"/),e=e.match(/offset=\"(\\d+)%\"/),2==t.length&&2==e.length?t[1]-e[1]:void 0}),n.push(e)});var i=[],u=n.every(function(t){for(var e in t)if(0==t[e]||0==t[e].length)return!1;return!0});if(!u)return 8121991;n.forEach(function(t,e){(\"linear\"==t.svg_type||\"radial\"==t.svg_type)&&(i[e]=s.xml+s.svg_start),\"linear\"==t.svg_type?(i[e]+=s.linear_gradient_start+\" \"+t.svg_direction+\">\",t.svg_stops.forEach(function(t){i[e]+=t}),i[e]+=s.linear_gradient_end,i[e]+=s.rect_linear,i[e]+=s.svg_end):\"radial\"==t.svg_type?(i[e]+=s.radial_gradient_start+\" \"+t.svg_direction+\">\",t.svg_stops.forEach(function(t){i[e]+=t}),i[e]+=s.radial_gradient_end,i[e]+=s.rect_radial,i[e]+=s.svg_end):\"url\"==t.svg_type&&(i[e]=t.url)}),i.forEach(function(t,r){/<\\?xml version=\"1.0\" \\?>/g.test(t)&&(i[r]=s.uri_data+e(t)+\")\")}),t=i.join(\",\")}return t})((function(){var r=\"@{arguments}\";return r=r.replace(/^\\[|\\]\$/g,\"\")})())`;
  @process_webkit: ~`(function(t){if(t=t||8121991,8121991==t)return t;var e={\"to bottom\":\"top\",\"to left\":\"right\",\"to top\":\"bottom\",\"to right\":\"left\",\"ellipse at center\":\"center, ellipse cover\",\"circle closest-side\":\"center center, circle contain\",\"circle farthest-corner\":\"center center, circle cover\",\"circle farthest-side\":\"center center, circle cover\",\"ellipse closest-side\":\"center center, ellipse contain\",\"ellipse farthest-corner\":\"center center, ellipse cover\",\"ellipse farthest-side\":\"center center, ellipse cover\"},r=/(radial-gradient\\()([a-z- ]+)at\\s+(\\w+%?)\\s*(\\w*%?)/g,n=Object.keys(e);return n.some(function(n){return t.indexOf(n)>=0?(t=t.replace(new RegExp(n+\"(?![ a-z0-9])\",\"g\"),e[n]),!0):(r.test(t)&&(t=t.replace(r,function(t,e,r,n,a){return e.trim()+n.trim()+\" \"+a.trim()+\",\"+r.replace(/closest-side/g,\"contain\").replace(/farthest-corner/g,\"cover\").trim()})),void 0)}),t=t.replace(/(\\d+)\\s*deg/g,function(t,e){return 90-e+\"deg\"}).replace(/(linear|radial)-gradient/g,\"-webkit-\$1-gradient\")})((function(){var t=\"@{arguments}\";return t=t.replace(/^\\[|\\]\$/g,\"\")})())`;
  @process_moz: ~`(function(e){if(e=e||8121991,8121991==e)return e;var t={\"to bottom\":\"top\",\"to left\":\"right\",\"to top\":\"bottom\",\"to right\":\"left\",\"ellipse at center\":\"center, ellipse cover\",\"circle closest-side\":\"center center, circle contain\",\"circle farthest-corner\":\"center center, circle cover\",\"circle farthest-side\":\"center center, circle cover\",\"ellipse closest-side\":\"center center, ellipse contain\",\"ellipse farthest-corner\":\"center center, ellipse cover\",\"ellipse farthest-side\":\"center center, ellipse cover\"},r=/(radial-gradient\\()([a-z- ]+)at\\s+(\\w+%?)\\s*(\\w*%?)/g,n=Object.keys(t);return n.some(function(n){return e.indexOf(n)>=0?(e=e.replace(new RegExp(n+\"(?![ a-z0-9])\",\"g\"),t[n]),!0):(r.test(e)&&(e=e.replace(r,function(e,t,r,n,a){return t.trim()+n.trim()+\" \"+a.trim()+\",\"+r.replace(/closest-side/g,\"contain\").replace(/farthest-corner/g,\"cover\").trim()})),void 0)}),e=e.replace(/(\\d+)\\s*deg/g,function(e,t){return 90-t+\"deg\"}).replace(/(linear|radial)-gradient/g,\"-moz-\$1-gradient\")})((function(){var t=\"@{arguments}\";return t=t.replace(/^\\[|\\]\$/g,\"\")})())`;
  @process_opera: ~`(function(e){if(e=e||8121991,8121991==e)return e;var t={\"to bottom\":\"top\",\"to left\":\"right\",\"to top\":\"bottom\",\"to right\":\"left\",\"ellipse at center\":\"center, ellipse cover\",\"circle closest-side\":\"center center, circle contain\",\"circle farthest-corner\":\"center center, circle cover\",\"circle farthest-side\":\"center center, circle cover\",\"ellipse closest-side\":\"center center, ellipse contain\",\"ellipse farthest-corner\":\"center center, ellipse cover\",\"ellipse farthest-side\":\"center center, ellipse cover\"},r=/(radial-gradient\\()([a-z- ]+)at\\s+(\\w+%?)\\s*(\\w*%?)/g,n=Object.keys(t);return n.some(function(n){return e.indexOf(n)>=0?(e=e.replace(new RegExp(n+\"(?![ a-z0-9])\",\"g\"),t[n]),!0):(r.test(e)&&(e=e.replace(r,function(e,t,r,n,a){return t.trim()+n.trim()+\" \"+a.trim()+\",\"+r.replace(/closest-side/g,\"contain\").replace(/farthest-corner/g,\"cover\").trim()})),void 0)}),e=e.replace(/(\\d+)\\s*deg/g,function(e,t){return 90-t+\"deg\"}).replace(/(linear|radial)-gradient/g,\"-o-\$1-gradient\")})((function(){var e=\"@{arguments}\";return e=e.replace(/^\\[|\\]\$/g,\"\")})())`;
  @process: ~`(function(e){if(e=e||8121991,8121991==e)return e;var t={top:\"to bottom\",right:\"to left\",bottom:\"to top\",left:\"to right\"},r=Object.keys(t);return r.some(function(r){return e.indexOf(r)>=0&&!new RegExp(\"to\\\\s+\"+r+\"|at\\\\s+\"+r,\"g\").test(e)?(e=e.replace(new RegExp(r),t[r]),!0):void 0}),e})((function(){var e=\"@{arguments}\";return e=e.replace(/^\\[|\\]\$/g,\"\")})())`;
  background-image: @process_ms;
  background-image: @process_webkit;
  background-image: @process_moz;
  background-image: @process_opera;
  background-image: @process;
}

.lh-background-origin(...) {
  @process: ~`(function(e){return e||\"padding-box\"})((function(){var e=\"@{arguments}\";return e=e.replace(/^\\[|\\]\$/g,\"\")})())`;
  -webkit-background-origin: @process;
  -moz-background-origin: @process;
  background-origin: @process;
}

.lh-background-size(...) {
  @process: ~`(function(e){e=e||\"auto auto\";var t=/\\d/gi,r=/(?:\\s|^)(\\.?\\d+\\.?\\d*)(?![^(]*\\)|\\w|%|\\.)/gi;return/^[^, ]*,/.test(e)&&(e=e.replace(/(?:,)(?![^(]*\\))/g,\"\")),t.test(e)&&(e=e.replace(r,function(e){return 0==e&&e||e+\"px\"})),e})((function(){var e=\"@{arguments}\";return e=e.replace(/^\\[|\\]\$/g,\"\")})())`;
  -webkit-background-size: @process;
  -moz-background-size: @process;
  background-size: @process;
}

.lh-blur(...) {
  @process: ~`(function(e){e=e||\"0\";var t=/\\d/gi,r=/(?:\\s|^)(\\.?\\d+\\.?\\d*)(?![^(]*\\)|\\w|%|\\.)/gi;return t.test(e)&&(e=e.replace(r,function(e){return 0==e&&e||e+\"px\"})),e})((function(){var e=\"@{arguments}\";return e=e.replace(/^\\[|\\]\$/g,\"\")})())`;
  -webkit-filter: blur(@process);
  -moz-filter: blur(@process);
  -ms-filter: blur(@process);
  filter: blur(@process);
}

.lh-border-bottom-left-radius(...) {
  @process: ~`(function(e){e=e||\"0\";var t=/\\d/gi,r=/(?:\\s|^)(\\.?\\d+\\.?\\d*)(?![^(]*\\)|\\w|%|\\.)/gi;return/^[^, ]*,/.test(e)&&(e=e.replace(/(?:,)(?![^(]*\\))/g,\"\")),t.test(e)&&(e=e.replace(r,function(e){return 0==e&&e||e+\"px\"})),e})((function(){var e=\"@{arguments}\";return e=e.replace(/^\\[|\\]\$/g,\"\")})())`;
  -webkit-border-bottom-left-radius: @process; -webkit-background-clip: padding-box;
  -moz-border-radius-bottomleft: @process; -moz-background-clip: padding;
  border-bottom-left-radius: @process; background-clip: padding-box;
}

.lh-border-bottom-right-radius(...) {
  @process: ~`(function(e){e=e||\"0\";var t=/\\d/gi,r=/(?:\\s|^)(\\.?\\d+\\.?\\d*)(?![^(]*\\)|\\w|%|\\.)/gi;return/^[^, ]*,/.test(e)&&(e=e.replace(/(?:,)(?![^(]*\\))/g,\"\")),t.test(e)&&(e=e.replace(r,function(e){return 0==e&&e||e+\"px\"})),e})((function(){var e=\"@{arguments}\";return e=e.replace(/^\\[|\\]\$/g,\"\")})())`;
  -webkit-border-bottom-right-radius: @process; -webkit-background-clip: padding-box;
  -moz-border-radius-bottomright: @process; -moz-background-clip: padding;
  border-bottom-right-radius: @process; background-clip: padding-box;
}

.lh-border-image(...) {
  @process: ~`(function(e){return e=e||8121991,/^[^, ]*,/.test(e)&&(e=e.replace(/(?:,)(?![^(]*\\))/g,\"\")),e})((function(){var e=\"@{arguments}\";return e=e.replace(/^\\[|\\]\$/g,\"\")})())`;
  -webkit-border-image: @process;
  -moz-border-image: @process;
  -o-border-image: @process;
  border-image: @process;
}

.lh-border-radius(...) {
  @process: ~`(function(e){e=e||\"0\";var t=/\\d/gi,r=/(?:\\s|^)(\\.?\\d+\\.?\\d*)(?![^(]*\\)|\\w|%|\\.)/gi;return/^[^, ]*,/.test(e)&&(e=e.replace(/(?:,)(?![^(]*\\))/g,\"\")),t.test(e)&&(e=e.replace(r,function(e){return 0==e&&e||e+\"px\"})),e})((function(){var e=\"@{arguments}\";return e=e.replace(/^\\[|\\]\$/g,\"\")})())`;
  -webkit-border-radius: @process; -webkit-background-clip: padding-box;
  -moz-border-radius: @process; -moz-background-clip: padding;
  border-radius: @process; background-clip: padding-box;
}

.lh-border-top-left-radius(...) {
  @process: ~`(function(e){e=e||\"0\";var t=/\\d/gi,r=/(?:\\s|^)(\\.?\\d+\\.?\\d*)(?![^(]*\\)|\\w|%|\\.)/gi;return/^[^, ]*,/.test(e)&&(e=e.replace(/(?:,)(?![^(]*\\))/g,\"\")),t.test(e)&&(e=e.replace(r,function(e){return 0==e&&e||e+\"px\"})),e})((function(){var e=\"@{arguments}\";return e=e.replace(/^\\[|\\]\$/g,\"\")})())`;
  -webkit-border-top-left-radius: @process; -webkit-background-clip: padding-box;
  -moz-border-radius-topleft: @process; -moz-background-clip: padding;
  border-top-left-radius: @process; background-clip: padding-box;
}

.lh-border-top-right-radius(...) {
  @process: ~`(function(e){e=e||\"0\";var t=/\\d/gi,r=/(?:\\s|^)(\\.?\\d+\\.?\\d*)(?![^(]*\\)|\\w|%|\\.)/gi;return/^[^, ]*,/.test(e)&&(e=e.replace(/(?:,)(?![^(]*\\))/g,\"\")),t.test(e)&&(e=e.replace(r,function(e){return 0==e&&e||e+\"px\"})),e})((function(){var e=\"@{arguments}\";return e=e.replace(/^\\[|\\]\$/g,\"\")})())`;
  -webkit-border-top-right-radius: @process; -webkit-background-clip: padding-box;
  -moz-border-radius-topright: @process; -moz-background-clip: padding;
  border-top-right-radius: @process; background-clip: padding-box;
}

.lh-box-shadow(...) {
  @process: ~`(function(e){e=e||\"0\";var t=/\\d/gi,r=/(?:\\s|^)(\\.?\\d+\\.?\\d*)(?![^(]*\\)|\\w|%|\\.)/gi;return/^[^, ]*,/.test(e)&&(e=e.replace(/(?:,)(?![^(]*\\))/g,\"\")),t.test(e)&&(e=e.replace(r,function(e){return 0==e&&e||e+\"px\"})),e})((function(){var e=\"@{arguments}\";return e=e.replace(/^\\[|\\]\$/g,\"\")})())`;
  -webkit-box-shadow: @process;
  -moz-box-shadow: @process;
  box-shadow: @process;
}

.lh-box-sizing(...) {
  @process: ~`(function(e){return e=e||\"content-box\"})((function(){var e=\"@{arguments}\";return e=e.replace(/^\\[|\\]\$/g,\"\")})())`;
  -webkit-box-sizing: @process;
  -moz-box-sizing: @process;
  box-sizing: @process;
}

.lh-brightness(...) {
  @process: ~`(function(e){return e=e||\"1\"})((function(){var e=\"@{arguments}\";return e=e.replace(/^\\[|\\]\$/g,\"\")})())`;
  -webkit-filter: brightness(@process);
  -moz-filter: brightness(@process);
  -ms-filter: brightness(@process);
  filter: brightness(@process);
}

.lh-calc(...) {
  @process: ~`(function(e){function t(t,r){var a=\");\\n\",c=n.split(\",\"),i=c[0]+\":\"+t+\"(\"+(c[1].trim()||0)+a;\"start\"==r?e=\"0;\\n\"+i:e+=i}e=e||8121991;var r=\"@{state}\",n=e;if(8121991==e)return e;switch(r){case\"1\":t(\"-webkit-calc\",\"start\"),t(\"-moz-calc\"),t(\"calc\");break;case\"2\":t(\"-webkit-calc\",\"start\"),t(\"-moz-calc\");break;case\"3\":t(\"-webkit-calc\",\"start\"),t(\"calc\");break;case\"4\":t(\"-webkit-calc\",\"start\");break;case\"5\":t(\"-moz-calc\",\"start\"),t(\"calc\");break;case\"6\":t(\"-moz-calc\",\"start\");break;case\"7\":t(\"calc\",\"start\")}return e=e.replace(/;\$/g,\"\")})((function(){var e=\"@{arguments}\";return e=e.replace(/^\\[|\\]\$/g,\"\")})())`;
  @state: 1; -lh-property: @process;

}

.lh-column-count(...) {
  @process: ~`(function(e){return e=e||\"auto\"})((function(){var e=\"@{arguments}\";return e=e.replace(/^\\[|\\]\$/g,\"\")})())`;
  -webkit-column-count: @process;
  -moz-column-count: @process;
  column-count: @process;
}

.lh-column-gap(...) {
  @process: ~`(function(e){e=e||\"normal\";var t=/\\d/gi,r=/(?:\\s|^)(\\.?\\d+\\.?\\d*)(?![^(]*\\)|\\w|%|\\.)/gi;return t.test(e)&&(e=e.replace(r,function(e){return 0==e&&e||e+\"px\"})),e})((function(){var e=\"@{arguments}\";return e=e.replace(/^\\[|\\]\$/g,\"\")})())`;
  -webkit-column-gap: @process;
  -moz-column-gap: @process;
  column-gap: @process;
}

.lh-column-rule(...) {
  @process: ~`(function(e){e=e||\"medium none black\";var t=/\\d/gi,r=/(?:\\s|^)(\\.?\\d+\\.?\\d*)(?![^(]*\\)|\\w|%|\\.)/gi;return/^[^, ]*,/.test(e)&&(e=e.replace(/(?:,)(?![^(]*\\))/g,\"\")),t.test(e)&&(e=e.replace(r,function(e){return 0==e&&e||e+\"px\"})),e})((function(){var e=\"@{arguments}\";return e=e.replace(/^\\[|\\]\$/g,\"\")})())`;
  -webkit-column-rule: @process;
  -moz-column-rule: @process;
  column-rule: @process;
}

.lh-column-width(...) {
  @process: ~`(function(e){e=e||\"auto\";var t=/\\d/gi,r=/(?:\\s|^)(\\.?\\d+\\.?\\d*)(?![^(]*\\)|\\w|%|\\.)/gi;return t.test(e)&&(e=e.replace(r,function(e){return 0==e&&e||e+\"px\"})),e})((function(){var e=\"@{arguments}\";return e=e.replace(/^\\[|\\]\$/g,\"\")})())`;
  -webkit-column-width: @process;
  -moz-column-width: @process;
  column-width: @process;
}

.lh-columns(...) {
  @process: ~`(function(e){e=e||\"auto auto\";var t=/^\\d+\$/;return/^[^, ]*,/.test(e)&&(e=e.replace(/(?:,)(?![^(]*\\))/g,\"\"),e=e.split(\" \")),t.test(e[0])&&(e[0]=e[0]+\"px\"),e.join(\" \")})((function(){var e=\"@{arguments}\";return e=e.replace(/^\\[|\\]\$/g,\"\")})())`;
  -webkit-columns: @process;
  -moz-columns: @process;
  columns: @process;
}

.lh-contrast(...) {
  @process: ~`(function(e){e=e||\"100%\";var t=/\\d/gi,r=/(?:\\s|^)(\\.?\\d+\\.?\\d*)(?![^(]*\\)|\\w|%|\\.)/gi;return t.test(e)&&(e=e.replace(r,function(e){return 0==e&&e||e+\"%\"})),e})((function(){var e=\"@{arguments}\";return e=e.replace(/^\\[|\\]\$/g,\"\")})())`;
  -webkit-filter: ~\"contrast(@{process})\";
  -moz-filter: ~\"contrast(@{process})\";
  -ms-filter: ~\"contrast(@{process})\";
  filter: ~\"contrast(@{process})\";
}

.lh-display(...) {
  @process_oldwebkit: ~`(function(e){return e=\"flex\"==e||\"inline-flex\"==e?\"-webkit-box\":8121991})((function(){var e=\"@{arguments}\";return e=e.replace(/^\\[|\\]\$/g,\"\")})())`;
  @process_moz: ~`(function(e){return e=\"flex\"==e||\"inline-flex\"==e?\"-moz-box\":8121991})((function(){var e=\"@{arguments}\";return e=e.replace(/^\\[|\\]\$/g,\"\")})())`;
  @process_webkit: ~`(function(e){return e=\"flex\"==e||\"inline-flex\"==e?\"-webkit-\"+e:8121991})((function(){var e=\"@{arguments}\";return e=e.replace(/^\\[|\\]\$/g,\"\")})())`;
  @process_ms: ~`(function(e){return e=\"flex\"==e?\"-ms-flexbox\":\"inline-flex\"==e?\"-ms-inline-flexbox\":8121991})((function(){var e=\"@{arguments}\";return e=e.replace(/^\\[|\\]\$/g,\"\")})())`;
  @process: ~`(function(e){return\"flex\"!=e&&\"inline-flex\"!=e&&(e=8121991),e})((function(){var e=\"@{arguments}\";return e=e.replace(/^\\[|\\]\$/g,\"\")})())`;
  display: @process_oldwebkit;
  display: @process_moz;
  display: @process_webkit;
  display: @process_ms;
  display: @process;
}

.lh-drop-shadow(...) {
  @process: ~`(function(e){if(e=e||8121991,8121991==e)return e;var t=/\\d/gi,r=/(?:\\s|^)(\\.?\\d+\\.?\\d*)(?![^(]*\\)|\\w|%|\\.)/gi;return/^[^, ]*,/.test(e)&&(e=e.replace(/(?:,)(?![^(]*\\))/g,\"\")),t.test(e)&&(e=e.replace(r,function(e){return 0==e&&e||e+\"px\"})),e})((function(){var e=\"@{arguments}\";return e=e.replace(/^\\[|\\]\$/g,\"\")})())`;
  -webkit-filter: drop-shadow(@process);
  -moz-filter: drop-shadow(@process);
  -ms-filter: drop-shadow(@process);
  filter: drop-shadow(@process);
}

.lh-filter(...) {
  @process: ~`(function(e){return e=e||\"none\",/^[^, ]*,/.test(e)&&(e=e.replace(/(?:,)(?![^(]*\\))/g,\"\")),e})((function(){var e=\"@{arguments}\";return e=e.replace(/^\\[|\\]\$/g,\"\")})())`;
  -webkit-filter: @process;
  -moz-filter: @process;
  -ms-filter: @process;
  filter: @process;
}

.lh-flex(...) {
  @process_olderwebkit: ~`(function(e){return/^\\d+/.test(e)?e=e.match(/^\\d+/)[0]:\"\"==e&&(e=\"0\"),e})((function(){var e=\"@{arguments}\";return e=e.replace(/^\\[|\\]\$/g,\"\")})())`;
  @process_moz: ~`(function(e){return/^\\d+/.test(e)?e=e.match(/^\\d+/)[0]:\"\"==e&&(e=\"0\"),e})((function(){var e=\"@{arguments}\";return e=e.replace(/^\\[|\\]\$/g,\"\")})())`;
  @process: ~`(function(e){return e=e||\"0 1 auto\",/^[^, ]*,/.test(e)&&(e=e.replace(/(?:,)(?![^(]*\\))/g,\"\")),e})((function(){var e=\"@{arguments}\";return e=e.replace(/^\\[|\\]\$/g,\"\")})())`;
  -webkit-box-flex: @process_olderwebkit;
  -moz-box-flex: @process_moz;
  -webkit-flex: @process;
  -ms-flex: @process;
  flex: @process;
}

.lh-flex-basis(...) {
  @process: ~`(function(e){e=e||\"auto\";var t=/\\d/gi,r=/(?:\\s|^)(\\.?\\d+\\.?\\d*)(?![^(]*\\)|\\w|%|\\.)/gi;return t.test(e)&&(e=e.replace(r,function(e){return 0==e&&e||e+\"px\"})),e})((function(){var e=\"@{arguments}\";return e=e.replace(/^\\[|\\]\$/g,\"\")})())`;
  -webkit-flex-basis: @process;
  flex-basis: @process;
}

.lh-flex-direction(...) {
  @process_oldestwebkit: ~`(function(e){return e=\"row\"==e||\"column\"==e?\"normal\":\"row-reverse\"==e||\"column-reverse\"==e?\"reverse\":8121991})((function(){var e=\"@{arguments}\";return e=e.replace(/^\\[|\\]\$/g,\"\")})())`;
  @process_oldermoz: ~`(function(e){return e=\"row\"==e||\"column\"==e?\"normal\":\"row-reverse\"==e||\"column-reverse\"==e?\"reverse\":8121991})((function(){var e=\"@{arguments}\";return e=e.replace(/^\\[|\\]\$/g,\"\")})())`;
  @process_olderwebkit: ~`(function(e){return e=\"row\"==e||\"row-reverse\"==e?\"horizontal\":\"column\"==e||\"column-reverse\"==e?\"vertical\":8121991})((function(){var e=\"@{arguments}\";return e=e.replace(/^\\[|\\]\$/g,\"\")})())`;
  @process_moz: ~`(function(e){return e=\"row\"==e||\"row-reverse\"==e?\"horizontal\":\"column\"==e||\"column-reverse\"==e?\"vertical\":8121991})((function(){var e=\"@{arguments}\";return e=e.replace(/^\\[|\\]\$/g,\"\")})())`;
  @process: ~`(function(e){return e=e||\"row\"})((function(){var e=\"@{arguments}\";return e=e.replace(/^\\[|\\]\$/g,\"\")})())`;
  -webkit-box-direction: @process_oldestwebkit;
  -moz-box-direction: @process_oldermoz;
  -webkit-box-orient: @process_olderwebkit;
  -moz-box-orient: @process_moz;
  -webkit-flex-direction: @process;
  -ms-flex-direction: @process;
  flex-direction: @process;
}

.lh-flex-grow(...) {
  @process: ~`(function(e){return e=e||\"0\"})((function(){var e=\"@{arguments}\";return e=e.replace(/^\\[|\\]\$/g,\"\")})())`;
  -webkit-flex-grow: @process;
  flex-grow: @process;
}

.lh-flex-shrink(...) {
  @process: ~`(function(e){return e=e||\"1\"})((function(){var e=\"@{arguments}\";return e=e.replace(/^\\[|\\]\$/g,\"\")})())`;
  -webkit-flex-shrink: @process;
  flex-shrink: @process;
}

.lh-flex-wrap(...) {
  @process: ~`(function(e){return e=e||\"nowrap\"})((function(){var e=\"@{arguments}\";return e=e.replace(/^\\[|\\]\$/g,\"\")})())`;
  -webkit-flex-wrap: @process;
  -ms-flex-wrap: @process;
  flex-wrap: @process;
}

.lh-font-face(@fontname, @fontfile, @fontweight:normal, @fontstyle:normal) {
  font-family: \"@{fontname}\";
  src: url(\"@{fontfile}.eot\");
  src: url(\"@{fontfile}.eot?#iefix\") format(\"embedded-opentype\"),
  url(\"@{fontfile}.woff\") format(\"woff\"),
  url(\"@{fontfile}.ttf\") format(\"truetype\"),
  url(\"@{fontfile}.svg#@{fontname}\") format(\"svg\");
  font-weight: @fontweight;
  font-style: @fontstyle;
}

.lh-grayscale(...) {
  @process: ~`(function(e){e=e||\"0\";var r=/\\d/gi,t=/(?:\\s|^)(\\.?\\d+\\.?\\d*)(?![^(]*\\)|\\w|%|\\.)/gi;return r.test(e)&&(e=e.replace(t,function(e){return 0==e&&e||e+\"%\"})),e})((function(){var e=\"@{arguments}\";return e=e.replace(/^\\[|\\]\$/g,\"\")})())`;
  -webkit-filter: grayscale(@process);
  -moz-filter: grayscale(@process);
  -ms-filter: grayscale(@process);
  filter: grayscale(@process);
}

.lh-hue-rotate(...) {
  @process: ~`(function(e){e=e||\"0\";var r=/\\d/gi,t=/(?:\\s|^)(\\.?\\d+\\.?\\d*)(?![^(]*\\)|\\w|%|\\.)/gi;return r.test(e)&&(e=e.replace(t,function(e){return 0==e&&e||e+\"deg\"})),e})((function(){var e=\"@{arguments}\";return e=e.replace(/^\\[|\\]\$/g,\"\")})())`;
  -webkit-filter: hue-rotate(@process);
  -moz-filter: hue-rotate(@process);
  -ms-filter: hue-rotate(@process);
  filter: hue-rotate(@process);
}

.lh-hyphens(...) {
  @process: ~`(function(e){return e=e||\"manual\"})((function(){var e=\"@{arguments}\";return e=e.replace(/^\\[|\\]\$/g,\"\")})())`;
  -webkit-hyphens: @process;
  -moz-hyphens: @process;
  -ms-hyphens: @process;
  hyphens: @process;
}

.lh-invert(...) {
  @process: ~`(function(e){e=e||\"100%\";var r=/\\d/gi,t=/(?:\\s|^)(\\.?\\d+\\.?\\d*)(?![^(]*\\)|\\w|%|\\.)/gi;return r.test(e)&&(e=e.replace(t,function(e){return 0==e&&e||e+\"%\"})),e})((function(){var e=\"@{arguments}\";return e=e.replace(/^\\[|\\]\$/g,\"\")})())`;
  -webkit-filter: invert(@process);
  -moz-filter: invert(@process);
  -ms-filter: invert(@process);
  filter: invert(@process);
}

.lh-justify-content(...) {
  @process_oldestWebkit: ~`(function(e){return e=e||\"start\",\"flex-start\"==e?e=\"start\":\"flex-end\"==e?e=\"end\":(\"space-between\"==e||\"space-around\"==e)&&(e=\"justify\"),e})((function(){var e=\"@{arguments}\";return e=e.replace(/^\\[|\\]\$/g,\"\")})())`;
  @process_moz: ~`(function(e){return e=e||\"start\",\"flex-start\"==e?e=\"start\":\"flex-end\"==e?e=\"end\":(\"space-between\"==e||\"space-around\"==e)&&(e=\"justify\"),e})((function(){var e=\"@{arguments}\";return e=e.replace(/^\\[|\\]\$/g,\"\")})())`;
  @process_ms: ~`(function(e){return e=e||\"start\",\"flex-start\"==e?e=\"start\":\"flex-end\"==e?e=\"end\":\"space-between\"==e?e=\"justify\":\"space-around\"==e&&(e=\"distribute\"),e})((function(){var e=\"@{arguments}\";return e=e.replace(/^\\[|\\]\$/g,\"\")})())`;
  @process: ~`(function(e){return e=e||\"flex-start\"})((function(){var e=\"@{arguments}\";return e=e.replace(/^\\[|\\]\$/g,\"\")})())`;
  -webkit-box-pack: @process_oldestWebkit;
  -moz-box-pack: @process_moz;
  -ms-flex-pack: @process_ms;
  -webkit-justify-content: @process;
  justify-content: @process;
}

.lh-keyframes(...) {
  @process: ~`(function(e){function r(r,t,c){var i=\"}\\n\",u=n.split(/(^[a-zA-Z0-9-]+),/g),s=t+\" \"+u[1]+\"{\",o=[\"-webkit-\",\"-moz-\",\"-ms-\",\"\"];c?a.forEach(function(r){-1!==e.indexOf(r)&&(u[2]=u[2].replace(new RegExp(r,\"g\"),function(e){return c+e}))}):u[2]=u[2].replace(/{([^}]+)}/g,function(e,r){var t=r.split(\";\");t.forEach(function(e,r){a.forEach(function(n){-1!==e.indexOf(n)&&(t[r]=\"\",o.forEach(function(a){t[r]+=e.trim().replace(new RegExp(n,\"g\"),function(e){return a+e})+\";\"}))})});var n=t.join(\";\").replace(/;;/g,\";\");return e.replace(r,n)}),s+=u[2]+i,\"start\"==r?e=\"0; } \\n\"+s:\"startend\"==r?e=\"0; } \\n\"+s.replace(i,\"\"):e+=\"end\"==r?s.replace(i,\"\"):s}e=e||8121991;var t=\"@{state}\",n=e;if(8121991==e)return e;var a=[\"animation\",\"transform\",\"filter\"];switch(t){case\"1\":r(\"start\",\"@-webkit-keyframes\",\"-webkit-\"),r(null,\"@-moz-keyframes\",\"-moz-\"),r(null,\"@-o-keyframes\",\"-o-\"),r(\"end\",\"@keyframes\");break;case\"2\":r(\"start\",\"@-webkit-keyframes\",\"-webkit-\"),r(null,\"@-moz-keyframes\",\"-moz-\"),r(\"end\",\"@keyframes\");break;case\"3\":r(\"start\",\"@-webkit-keyframes\",\"-webkit-\"),r(null,\"@-moz-keyframes\",\"-moz-\"),r(\"end\",\"@-o-keyframes\",\"-o-\");break;case\"4\":r(\"start\",\"@-webkit-keyframes\",\"-webkit-\"),r(null,\"@-o-keyframes\",\"-o-\"),r(\"end\",\"@keyframes\");break;case\"5\":r(\"start\",\"@-webkit-keyframes\",\"-webkit-\"),r(\"end\",\"@-moz-keyframes\",\"-moz-\");break;case\"6\":r(\"start\",\"@-webkit-keyframes\",\"-webkit-\"),r(\"end\",\"@-o-keyframes\",\"-o-\");break;case\"7\":r(\"start\",\"@-webkit-keyframes\",\"-webkit-\"),r(\"end\",\"@keyframes\");break;case\"8\":r(\"startend\",\"@-webkit-keyframes\",\"-webkit-\");break;case\"9\":r(\"start\",\"@-moz-keyframes\",\"-moz-\"),r(null,\"@-o-keyframes\",\"-o-\"),r(\"end\",\"@keyframes\");break;case\"10\":r(\"start\",\"@-moz-keyframes\",\"-moz-\"),r(\"end\",\"@-o-keyframes\",\"-o-\");break;case\"11\":r(\"start\",\"@-moz-keyframes\",\"-moz-\"),r(\"end\",\"@keyframes\");break;case\"12\":r(\"startend\",\"@-moz-keyframes\",\"-moz-\");break;case\"13\":r(\"start\",\"@-o-keyframes\",\"-o-\"),r(\"end\",\"@keyframes\");break;case\"14\":r(\"startend\",\"@-o-keyframes\",\"-o-\");break;case\"15\":r(\"startend\",\"@keyframes\")}return e})((function(){var e=\"@{arguments}\";return e=e.replace(/^\\[|\\]\$/g,\"\")})())+\"} \\nlesshat-selector { -lh-property: 0 \"`;
  @state: 1; lesshat-selector { -lh-property: @process; }
}


.lh-opacity(...) {
  @process_ms: ~`(function(e){return e=e||\"filter: alpha(opacity=100)\",\"alpha(opacity=\"+Math.floor(100*e)+\")\"})((function(){var e=\"@{arguments}\";return e=e.replace(/^\\[|\\]\$/g,\"\")})())`;
  @process: ~`(function(e){return e=e||\"1\"})((function(){var e=\"@{arguments}\";return e=e.replace(/^\\[|\\]\$/g,\"\")})())`;
  zoom: 1; filter: @process_ms;
  -webkit-opacity: @process;
  -moz-opacity: @process;
  opacity: @process;
}

.lh-order(...) {
  @process: ~`(function(e){return e=e||\"0\"})((function(){var e=\"@{arguments}\";return e=e.replace(/^\\[|\\]\$/g,\"\")})())`;
  -webkit-box-ordinal-group: @process;
  -moz-box-ordinal-group: @process;
  -ms-flex-order: @process;
  -webkit-order: @process;
  order: @process;
}

.lh-perspective(...) {
  @process: ~`(function(e){e=e||\"none\";var r=/\\d/gi,t=/(?:\\s|^)(\\.?\\d+\\.?\\d*)(?![^(]*\\)|\\w|%|\\.)/gi;return r.test(e)&&(e=e.replace(t,function(e){return 0==e&&e||e+\"px\"})),e})((function(){var e=\"@{arguments}\";return e=e.replace(/^\\[|\\]\$/g,\"\")})())`;
  -webkit-perspective: @process;
  -moz-perspective: @process;
  perspective: @process;
}

.lh-perspective-origin(...) {
  @process: ~`(function(e){e=e||\"50% 50%\";var r=/\\d/gi,t=/(?:\\s|^)(\\.?\\d+\\.?\\d*)(?![^(]*\\)|\\w|%|\\.)/gi;return/^[^, ]*,/.test(e)&&(e=e.replace(/(?:,)(?![^(]*\\))/g,\"\")),r.test(e)&&(e=e.replace(t,function(e){return 0==e&&e||e+\"%\"})),e})((function(){var e=\"@{arguments}\";return e=e.replace(/^\\[|\\]\$/g,\"\")})())`;
  -webkit-perspective-origin: @process;
  -moz-perspective-origin: @process;
  perspective-origin: @process;
}

.lh-placeholder(@color:#aaa, @element: 08121991) {
  .inception (@arguments) when not (@element = 08121991) {
    @{element}::-webkit-input-placeholder {
      color: @color;
    }
    @{element}:-moz-placeholder {
      color: @color;
    }
    @{element}::-moz-placeholder {
      color: @color;
    }
    @{element}:-ms-input-placeholder {
      color: @color;
    }
  }
  .inception (@arguments) when (@element = 08121991) {
    &::-webkit-input-placeholder {
      color: @color;
    }
    &:-moz-placeholder {
      color: @color;
    }
    &::-moz-placeholder {
      color: @color;
    }
    &:-ms-input-placeholder {
      color: @color;
    }
  }
  .inception(@arguments);
}

.lh-rotate(...) {
  @process: ~`(function(e){e=e||\"0\";var r=/\\d/gi,t=/(?:\\s|^)(\\.?\\d+\\.?\\d*)(?![^(]*\\)|\\w|%|\\.)/gi;return r.test(e)&&(e=e.replace(t,function(e){return 0==e&&e||e+\"deg\"})),e})((function(){var e=\"@{arguments}\";return e=e.replace(/^\\[|\\]\$/g,\"\")})())`;
  -webkit-transform: rotate(@process);
  -moz-transform: rotate(@process);
  -ms-transform: rotate(@process);
  -o-transform: rotate(@process);
  transform: rotate(@process);
}

.lh-rotate3d(...) {
  @process: ~`(function(e){return e=e||\"0, 0, 0, 0\",e=e.replace(/,\\s*\\d+\$/,function(e){return e+\"deg\"})})((function(){var e=\"@{arguments}\";return e=e.replace(/^\\[|\\]\$/g,\"\")})())`;
  -webkit-transform: rotate3d(@process);
  -moz-transform: rotate3d(@process);
  -ms-transform: rotate3d(@process);
  -o-transform: rotate3d(@process);
  transform: rotate3d(@process);
}

.lh-rotateX(...) {
  @process: ~`(function(e){e=e||\"0\";var r=/\\d/gi,t=/(?:\\s|^)(\\.?\\d+\\.?\\d*)(?![^(]*\\)|\\w|%|\\.)/gi;return r.test(e)&&(e=e.replace(t,function(e){return 0==e&&e||e+\"deg\"})),e})((function(){var e=\"@{arguments}\";return e=e.replace(/^\\[|\\]\$/g,\"\")})())`;
  -webkit-transform: rotateX(@process);
  -moz-transform: rotateX(@process);
  -ms-transform: rotateX(@process);
  -o-transform: rotateX(@process);
  transform: rotateX(@process);
}

.lh-rotateY(...) {
  @process: ~`(function(e){e=e||\"0\";var r=/\\d/gi,t=/(?:\\s|^)(\\.?\\d+\\.?\\d*)(?![^(]*\\)|\\w|%|\\.)/gi;return r.test(e)&&(e=e.replace(t,function(e){return 0==e&&e||e+\"deg\"})),e})((function(){var e=\"@{arguments}\";return e=e.replace(/^\\[|\\]\$/g,\"\")})())`;
  -webkit-transform: rotateY(@process);
  -moz-transform: rotateY(@process);
  -ms-transform: rotateY(@process);
  -o-transform: rotateY(@process);
  transform: rotateY(@process);
}

.lh-rotateZ(...) {
  @process: ~`(function(e){e=e||\"0\";var r=/\\d/gi,t=/(?:\\s|^)(\\.?\\d+\\.?\\d*)(?![^(]*\\)|\\w|%|\\.)/gi;return r.test(e)&&(e=e.replace(t,function(e){return 0==e&&e||e+\"deg\"})),e})((function(){var e=\"@{arguments}\";return e=e.replace(/^\\[|\\]\$/g,\"\")})())`;
  -webkit-transform: rotateZ(@process);
  -moz-transform: rotateZ(@process);
  -ms-transform: rotateZ(@process);
  -o-transform: rotateZ(@process);
  transform: rotateZ(@process);
}

.lh-saturate(...) {
  @process: ~`(function(e){e=e||\"100%\";var r=/\\d/gi,t=/(?:\\s|^)(\\.?\\d+\\.?\\d*)(?![^(]*\\)|\\w|%|\\.)/gi;return r.test(e)&&(e=e.replace(t,function(e){return 0==e&&e||e+\"%\"})),e})((function(){var e=\"@{arguments}\";return e=e.replace(/^\\[|\\]\$/g,\"\")})())`;
  -webkit-filter: ~\"saturate(@{process})\";
  -moz-filter: ~\"saturate(@{process})\";
  -ms-filter: ~\"saturate(@{process})\";
  filter: ~\"saturate(@{process})\";
}

.lh-scale(...) {
  @process: ~`(function(e){return e=e||\"1\"})((function(){var e=\"@{arguments}\";return e=e.replace(/^\\[|\\]\$/g,\"\")})())`;
  -webkit-transform: scale(@process);
  -moz-transform: scale(@process);
  -ms-transform: scale(@process);
  -o-transform: scale(@process);
  transform: scale(@process);
}

.lh-scale3d(...) {
  @process: ~`(function(e){return e=e||\"1, 1, 1\"})((function(){var e=\"@{arguments}\";return e=e.replace(/^\\[|\\]\$/g,\"\")})())`;
  -webkit-transform: scale3d(@process);
  -moz-transform: scale3d(@process);
  -ms-transform: scale3d(@process);
  -o-transform: scale3d(@process);
  transform: scale3d(@process);
}

.lh-scaleX(...) {
  @process: ~`(function(e){return e=e||\"1\"})((function(){var e=\"@{arguments}\";return e=e.replace(/^\\[|\\]\$/g,\"\")})())`;
  -webkit-transform: scaleX(@process);
  -moz-transform: scaleX(@process);
  -ms-transform: scaleX(@process);
  -o-transform: scaleX(@process);
  transform: scaleX(@process);
}

.lh-scaleY(...) {
  @process: ~`(function(e){return e=e||\"1\"})((function(){var e=\"@{arguments}\";return e=e.replace(/^\\[|\\]\$/g,\"\")})())`;
  -webkit-transform: scaleY(@process);
  -moz-transform: scaleY(@process);
  -ms-transform: scaleY(@process);
  -o-transform: scaleY(@process);
  transform: scaleY(@process);
}

.lh-scaleZ(...) {
  @process: ~`(function(e){return e=e||\"1\"})((function(){var e=\"@{arguments}\";return e=e.replace(/^\\[|\\]\$/g,\"\")})())`;
  -webkit-transform: scaleZ(@process);
  -moz-transform: scaleZ(@process);
  -ms-transform: scaleZ(@process);
  -o-transform: scaleZ(@process);
  transform: scaleZ(@process);
}

.lh-selection(...) {
  @process: ~`(function(e){function r(r,t){var a=\"}\\n\",c=n.split(\",\"),u=(c[1]||\"\")+t+\"{\"+c[0]+a;\"start\"==r?e=\"0; } \\n\"+u:\"startend\"==r?e=\"0; } \\n\"+u.replace(a,\"\"):e+=\"end\"==r?u.replace(a,\"\"):u}e=e||8121991;var t=\"@{state}\",n=e;if(8121991==e)return e;switch(t){case\"1\":r(\"start\",\"::selection\"),r(\"end\",\"::-moz-selection\");break;case\"2\":r(\"startend\",\"::selection\");break;case\"3\":r(\"startend\",\"::-moz-selection\")}return e=e.replace(/;\$/g,\"\")})((function(){var e=\"@{arguments}\";return e=e.replace(/^\\[|\\]\$/g,\"\")})())`;
  @state: 1; lesshat-selector { -lh-property: @process; }

}

.lh-sepia(...) {
  @process: ~`(function(e){e=e||\"100%\";var r=/\\d/gi,t=/(?:\\s|^)(\\.?\\d+\\.?\\d*)(?![^(]*\\)|\\w|%|\\.)/gi;return r.test(e)&&(e=e.replace(t,function(e){return 0==e&&e||e+\"%\"})),e})((function(){var e=\"@{arguments}\";return e=e.replace(/^\\[|\\]\$/g,\"\")})())`;
  -webkit-filter: sepia(@process);
  -moz-filter: sepia(@process);
  -ms-filter: sepia(@process);
  filter: sepia(@process);
}

.lh-size(@square) {
  @unit: 'px';
  .process(@square) when (ispixel(@square)), (isem(@square)), (ispercentage(@square)), (iskeyword(@square)) {
    width: @square;
    height: @square;
  }

  .process(@square) when not (ispixel(@square)) and not (isem(@square)) and not (ispercentage(@square)) and not (isstring(@square)) and not (iskeyword(@square)) {
    width: ~`@{square} + @{unit}`;
    height: ~`@{square} + @{unit}`;
  }

  .process(@square);

}

.lh-size(@width, @height) {
  @unit: 'px';
  .process(@width, @height) when (ispixel(@width)), (isem(@width)), (ispercentage(@width)), (iskeyword(@width)) {
    .kittens(@height) when (ispixel(@height)), (isem(@height)), (ispercentage(@height)), (iskeyword(@height)) {
      width: @width;
      height: @height;
    }
    .kittens(@height) when not (ispixel(@height)) and not (isem(@height)) and not (ispercentage(@height)) and not (iskeyword(@height)) {
      width: @width;
      height: ~`@{height} + @{unit}`;
    }
    .kittens(@height);
  }

  .process(@width, @height) when (ispixel(@height)), (isem(@height)), (ispercentage(@height)), (iskeyword(@height)) {
    .kittens(@width) when (ispixel(@width)), (isem(@width)), (ispercentage(@width)), (iskeyword(@width)) {}
    .kittens(@width) when not (ispixel(@width)) and not (isem(@width)) and not (ispercentage(@width)) and not (iskeyword(@width)) {
      width: ~`@{width} + @{unit}`;
      height: @height;
    }
    .kittens(@width);
  }

  .process(@width, @height) when not (ispixel(@width)) and not (isem(@width)) and not (ispercentage(@width)) and not (iskeyword(@width)) and not (ispixel(@height)) and not (isem(@height)) and not (ispercentage(@height)) and not (iskeyword(@height))  {
    width: ~`@{width} + @{unit}`;
    height: ~`@{height} + @{unit}`;
  }

  .process(@width, @height);

}

.lh-skew(...) {
  @process: ~`(function(e){e=e||\"0\";var r=/\\d/gi,t=/(?:\\s|^)(\\.?\\d+\\.?\\d*)(?![^(]*\\)|\\w|%|\\.)/gi;return r.test(e)&&(e=e.replace(t,function(e){return 0==e&&e||e+\"deg\"})),e})((function(){var e=\"@{arguments}\";return e=e.replace(/^\\[|\\]\$/g,\"\")})())`;
  -webkit-transform: skew(@process);
  -moz-transform: skew(@process);
  -ms-transform: skew(@process);
  -o-transform: skew(@process);
  transform: skew(@process);
}

.lh-skewX(...) {
  @process: ~`(function(e){e=e||\"0\";var r=/\\d/gi,t=/(?:\\s|^)(\\.?\\d+\\.?\\d*)(?![^(]*\\)|\\w|%|\\.)/gi;return r.test(e)&&(e=e.replace(t,function(e){return 0==e&&e||e+\"deg\"})),e})((function(){var e=\"@{arguments}\";return e=e.replace(/^\\[|\\]\$/g,\"\")})())`;
  -webkit-transform: skewX(@process);
  -moz-transform: skewX(@process);
  -ms-transform: skewX(@process);
  -o-transform: skewX(@process);
  transform: skewX(@process);
}

.lh-skewY(...) {
  @process: ~`(function(e){e=e||\"0\";var r=/\\d/gi,t=/(?:\\s|^)(\\.?\\d+\\.?\\d*)(?![^(]*\\)|\\w|%|\\.)/gi;return r.test(e)&&(e=e.replace(t,function(e){return 0==e&&e||e+\"deg\"})),e})((function(){var e=\"@{arguments}\";return e=e.replace(/^\\[|\\]\$/g,\"\")})())`;
  -webkit-transform: skewY(@process);
  -moz-transform: skewY(@process);
  -ms-transform: skewY(@process);
  -o-transform: skewY(@process);
  transform: skewY(@process);
}

.lh-transform(...) {
  @process: ~`(function(e){e=e||\"none\";var r={translate:\"px\",rotate:\"deg\",rotate3d:\"deg\",skew:\"deg\"};/^\\w*\\(?[a-z0-9.]*\\)?/.test(e)&&(e=e.replace(/(?:,)(?![^(]*\\))/g,\"\"));for(var t in r)e.indexOf(t)>=0&&(e=e.replace(new RegExp(t+\"[\\\\w]?\\\\([a-z0-9, %]*\\\\)\"),function(e){var n=/(\\d+\\.?\\d*)(?!\\w|%)/g;return\"rotate3d\"==t&&(n=/,\\s*\\d+\$/),e.replace(n,function(e){return e+r[t]})}));return e})((function(){var e=\"@{arguments}\";return e=e.replace(/^\\[|\\]\$/g,\"\")})())`;
  -webkit-transform: @process;
  -moz-transform: @process;
  -ms-transform: @process;
  -o-transform: @process;
  transform: @process;
}

.lh-transform-origin(...) {
  @process: ~`(function(e){e=e||\"50% 50% 0\";var r=/\\d/gi,t=/(?:\\s|^)(\\.?\\d+\\.?\\d*)(?![^(]*\\)|\\w|%|\\.)/gi;return/^[^, ]*,/.test(e)&&(e=e.replace(/(?:,)(?![^(]*\\))/g,\"\")),r.test(e)&&(e=e.replace(t,function(e){return 0==e&&e||e+\"%\"})),e})((function(){var e=\"@{arguments}\";return e=e.replace(/^\\[|\\]\$/g,\"\")})())`;
  -webkit-transform-origin: @process;
  -moz-transform-origin: @process;
  -ms-transform-origin: @process;
  -o-transform-origin: @process;
  transform-origin: @process;
}

.lh-transform-style(...) {
  @process: ~`(function(e){return e=e||\"flat\"})((function(){var e=\"@{arguments}\";return e=e.replace(/^\\[|\\]\$/g,\"\")})())`;
  -webkit-transform-style: @process;
  -moz-transform-style: @process;
  -ms-transform-style: @process;
  -o-transform-style: @process;
  transform-style: @process;
}

.lh-transition(...) {
  @process_webkit: ~`(function(e){e=e||\"all 0 ease 0\";var r=[\"background-size\",\"border-radius\",\"border-bottom-left-radius\",\"border-bottom-right-radius\",\"border-top-left-radius\",\"border-top-right-radius\",\"box-shadow\",\"column\",\"transform\",\"filter\"],t=\"-webkit-\",n=/(?:\\d)(?:ms|s)/gi,a=/(?:\\s|^)(\\.?\\d+\\.?\\d*)(?![^(]*\\)|\\w|%)/gi;return/^[^, ]*,/.test(e)&&(e=e.replace(/(?:,)(?![^(]*\\))/g,\"\")),r.forEach(function(r){-1!==e.indexOf(r)&&(e=e.replace(new RegExp(r,\"g\"),function(e){return t+e}))}),n.test(e)||\"0\"===e||(e=e.replace(a,function(e){return e+=parseFloat(e,10)>10?\"ms\":\"s\"})),e})((function(){var e=\"@{arguments}\";return e=e.replace(/^\\[|\\]\$/g,\"\")})())`;
  @process_moz: ~`(function(e){e=e||\"all 0 ease 0\";var r=[\"background-size\",\"box-shadow\",\"column\",\"transform\",\"filter\"],t=\"-moz-\",n=/(?:\\d)(?:ms|s)/gi,a=/(?:\\s|^)(\\.?\\d+\\.?\\d*)(?![^(]*\\)|\\w|%)/gi;return/^[^, ]*,/.test(e)&&(e=e.replace(/(?:,)(?![^(]*\\))/g,\"\")),r.forEach(function(r){-1!==e.indexOf(r)&&(e=e.replace(new RegExp(r,\"g\"),function(e){return t+e}))}),n.test(e)||\"0\"===e||(e=e.replace(a,function(e){return e+=parseFloat(e,10)>10?\"ms\":\"s\"})),e})((function(){var e=\"@{arguments}\";return e=e.replace(/^\\[|\\]\$/g,\"\")})())`;
  @process_opera: ~`(function(e){e=e||\"all 0 ease 0\";var r=[\"transform\"],t=\"-o-\",n=/(?:\\d)(?:ms|s)/gi,a=/(?:\\s|^)(\\.?\\d+\\.?\\d*)(?![^(]*\\)|\\w|%)/gi;return/^[^, ]*,/.test(e)&&(e=e.replace(/(?:,)(?![^(]*\\))/g,\"\")),r.forEach(function(r){-1!==e.indexOf(r)&&(e=e.replace(new RegExp(r,\"g\"),function(e){return t+e}))}),n.test(e)||\"0\"===e||(e=e.replace(a,function(e){return e+=parseFloat(e,10)>10?\"ms\":\"s\"})),e})((function(){var e=\"@{arguments}\";return e=e.replace(/^\\[|\\]\$/g,\"\")})())`;
  @process: ~`(function(e){e=e||\"all 0 ease 0\";var r=[\"-webkit-\",\"-moz-\",\"-o-\",\"\"],t=[\"column\",\"transform\",\"filter\"],n=/(?:\\d)(?:ms|s)/gi,a=/(?:\\s|^)(\\.?\\d+\\.?\\d*)(?![^(]*\\)|\\w|%)/gi;/^[^, ]*,/.test(e)&&(e=e.replace(/(?:,)(?![^(]*\\))/g,\"\"));var c=e.split(/(?:,)(?![^(]*\\))/g);return c.forEach(function(e,n){t.forEach(function(t){-1!==e.indexOf(t)&&(c[n]=\"\",r.forEach(function(a,u){c[n]+=e.trim().replace(new RegExp(t,\"g\"),function(e){return a+e}),u<r.length-1&&(c[n]+=\",\")}))})}),e=c.join(\",\"),n.test(e)||\"0\"===e||(e=e.replace(a,function(e){return e+=parseFloat(e,10)>10?\"ms\":\"s\"})),e})((function(){var e=\"@{arguments}\";return e=e.replace(/^\\[|\\]\$/g,\"\")})())`;
  -webkit-transition: @process_webkit;
  -moz-transition: @process_moz;
  -o-transition: @process_opera;
  transition: @process;
}

.lh-transition-delay(...) {
  @process: ~`(function(e){e=e||\"0\";var r=/(?:\\d)(?:ms|s)/gi,t=/(?:\\s|^)(\\.?\\d+\\.?\\d*)(?![^(]*\\)|\\w|%|\\.)/gi;return r.test(e)||\"0\"===e||(e=e.replace(t,function(e){return e+=parseFloat(e,10)>10?\"ms\":\"s\"})),e})((function(){var e=\"@{arguments}\";return e=e.replace(/^\\[|\\]\$/g,\"\")})())`;
  -webkit-transition-delay: @process;
  -moz-transition-delay: @process;
  -o-transition-delay: @process;
  transition-delay: @process;
}

.lh-transition-duration(...) {
  @process: ~`(function(e){e=e||\"0\";var r=/ms|s/gi,t=/(?:\\s|^)(\\.?\\d+\\.?\\d*)(?![^(]*\\)|\\w|%|\\.)/gi;return r.test(e)||\"0\"===e||(e=e.replace(t,function(e){return e+=parseFloat(e,10)>10?\"ms\":\"s\"})),e})((function(){var e=\"@{arguments}\";return e=e.replace(/^\\[|\\]\$/g,\"\")})())`;
  -webkit-transition-duration: @process;
  -moz-transition-duration: @process;
  -o-transition-duration: @process;
  transition-duration: @process;
}

.lh-transition-property(...) {
  @process_webkit: ~`(function(e){e=e||\"all\";var r=[\"background-size\",\"border-radius\",\"border-bottom-left-radius\",\"border-bottom-right-radius\",\"border-top-left-radius\",\"border-top-right-radius\",\"box-shadow\",\"column\",\"transform\",\"filter\"],t=\"-webkit-\";return r.forEach(function(r){-1!==e.indexOf(r)&&(e=e.replace(new RegExp(r,\"g\"),function(e){return t+e}))}),e})((function(){var e=\"@{arguments}\";return e=e.replace(/^\\[|\\]\$/g,\"\")})())`;
  @process_moz: ~`(function(e){e=e||\"all\";var r=[\"background-size\",\"box-shadow\",\"column\",\"transform\",\"filter\"],t=\"-moz-\";return r.forEach(function(r){-1!==e.indexOf(r)&&(e=e.replace(new RegExp(r,\"g\"),function(e){return t+e}))}),e})((function(){var e=\"@{arguments}\";return e=e.replace(/^\\[|\\]\$/g,\"\")})())`;
  @process_opera: ~`(function(e){e=e||\"all\";var r=[\"transform\"],t=\"-o-\";return r.forEach(function(r){-1!==e.indexOf(r)&&(e=e.replace(new RegExp(r,\"g\"),function(e){return t+e}))}),e})((function(){var e=\"@{arguments}\";return e=e.replace(/^\\[|\\]\$/g,\"\")})())`;
  @process: ~`(function(e){e=e||\"all\";var r=[\"-webkit-\",\"-moz-\",\"-o-\",\"\"],t=[\"column\",\"transform\",\"filter\"],n=e.split(/(?:,)(?![^(]*\\))/g);return n.forEach(function(e,a){t.forEach(function(t){-1!==e.indexOf(t)&&(n[a]=\"\",r.forEach(function(c,u){n[a]+=e.trim().replace(new RegExp(t,\"g\"),function(e){return c+e}),u<r.length-1&&(n[a]+=\",\")}))})}),e=n.join(\",\")})((function(){var e=\"@{arguments}\";return e=e.replace(/^\\[|\\]\$/g,\"\")})())`;
  -webkit-transition-property: @process_webkit;
  -moz-transition-property: @process_moz;
  -o-transition-property: @process_opera;
  transition-property: @process;
}

.lh-transition-timing-function(...) {
  @process: ~`(function(e){return e=e||\"ease\"})((function(){var e=\"@{arguments}\";return e=e.replace(/^\\[|\\]\$/g,\"\")})())`;
  -webkit-transition-timing-function: @process;
  -moz-transition-timing-function: @process;
  -o-transition-timing-function: @process;
  transition-timing-function: @process;
}

.lh-translate(...) {
  @process: ~`(function(e){e=e||\"0\";var r=/\\d/gi,t=/(?:\\s|^)(\\.?\\d+\\.?\\d*)(?![^(]*\\)|\\w|%|\\.)/gi;return r.test(e)&&(e=e.replace(t,function(e){return 0==e&&e||e+\"px\"})),e})((function(){var e=\"@{arguments}\";return e=e.replace(/^\\[|\\]\$/g,\"\")})())`;
  -webkit-transform: translate(@process);
  -moz-transform: translate(@process);
  -ms-transform: translate(@process);
  -o-transform: translate(@process);
  transform: translate(@process);
}

.lh-translate3d(...) {
  @process: ~`(function(e){e=e||\"0, 0, 0\";var r=/\\d/gi,t=/(?:\\s|^)(\\.?\\d+\\.?\\d*)(?![^(]*\\)|\\w|%|\\.)/gi;return r.test(e)&&(e=e.replace(t,function(e){return 0==e&&e||e+\"px\"})),e})((function(){var e=\"@{arguments}\";return e=e.replace(/^\\[|\\]\$/g,\"\")})())`;
  -webkit-transform: translate3d(@process);
  -moz-transform: translate3d(@process);
  -ms-transform: translate3d(@process);
  -o-transform: translate3d(@process);
  transform: translate3d(@process);
}

.lh-translateX(...) {
  @process: ~`(function(e){e=e||\"0\";var r=/\\d/gi,t=/(?:\\s|^)(\\.?\\d+\\.?\\d*)(?![^(]*\\)|\\w|%|\\.)/gi;return r.test(e)&&(e=e.replace(t,function(e){return 0==e&&e||e+\"px\"})),e})((function(){var e=\"@{arguments}\";return e=e.replace(/^\\[|\\]\$/g,\"\")})())`;
  -webkit-transform: translateX(@process);
  -moz-transform: translateX(@process);
  -ms-transform: translateX(@process);
  -o-transform: translateX(@process);
  transform: translateX(@process);
}

.lh-translateY(...) {
  @process: ~`(function(e){e=e||\"0\";var r=/\\d/gi,t=/(?:\\s|^)(\\.?\\d+\\.?\\d*)(?![^(]*\\)|\\w|%|\\.)/gi;return r.test(e)&&(e=e.replace(t,function(e){return 0==e&&e||e+\"px\"})),e})((function(){var e=\"@{arguments}\";return e=e.replace(/^\\[|\\]\$/g,\"\")})())`;
  -webkit-transform: translateY(@process);
  -moz-transform: translateY(@process);
  -ms-transform: translateY(@process);
  -o-transform: translateY(@process);
  transform: translateY(@process);
}

.lh-translateZ(...) {
  @process: ~`(function(e){e=e||\"0\";var r=/\\d/gi,t=/(?:\\s|^)(\\.?\\d+\\.?\\d*)(?![^(]*\\)|\\w|%|\\.)/gi;return r.test(e)&&(e=e.replace(t,function(e){return 0==e&&e||e+\"px\"})),e})((function(){var e=\"@{arguments}\";return e=e.replace(/^\\[|\\]\$/g,\"\")})())`;
  -webkit-transform: translateZ(@process);
  -moz-transform: translateZ(@process);
  -ms-transform: translateZ(@process);
  -o-transform: translateZ(@process);
  transform: translateZ(@process);
}

.lh-user-select(...) {
  @process: ~`(function(e){return e=e||\"auto\"})((function(){var e=\"@{arguments}\";return e=e.replace(/^\\[|\\]\$/g,\"\")})())`;
  -webkit-user-select: @process;
  -moz-user-select: @process;
  -ms-user-select: @process;
  user-select: @process;
}";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@bundles/CoreBundle/Assets/css/app/less/lesshat.less";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@bundles/CoreBundle/Assets/css/app/less/lesshat.less", "/app/docroot/app/bundles/CoreBundle/Assets/css/app/less/lesshat.less");
    }
}
