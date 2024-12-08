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

/* @themes/fresh-center/js/parallax-element.js */
class __TwigTemplate_623175429800ac1cd191eea7fe41a609 extends Template
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
        yield "/*!
 * parallax-element.js
 * jQuery plugin to add parallax effect to individual elements
 * @author  Shaun M. Baer
 * @url     https://github.com/iamhexcoder/parallax-element
 * @license MIT
 */
(function( \$, window, document, undefined ) { \$.fn.parallaxElement = function(options) {
/*! requestAnimationFrame Polyfill via Paul Irish: https://gist.github.com/paulirish/1579671 */
  (function() {
    var lastTime = 0;
    var vendors = ['ms', 'moz', 'webkit', 'o'];
    for(var x = 0; x < vendors.length && !window.requestAnimationFrame; ++x) {
      window.requestAnimationFrame  = window[vendors[x]+'RequestAnimationFrame'];
      window.cancelAnimationFrame   = window[vendors[x]+'CancelAnimationFrame'] ||
                                      window[vendors[x]+'CancelRequestAnimationFrame'];
    }
    if (!window.requestAnimationFrame) {
      window.requestAnimationFrame = function(callback, element) {
        var currTime = new Date().getTime();
        var timeToCall = Math.max(0, 16 - (currTime - lastTime));
        var id = window.setTimeout(function() { callback(currTime + timeToCall); },
                 timeToCall);
        lastTime = currTime + timeToCall;
        return id;
      };
    }
    if (!window.cancelAnimationFrame) {
      window.cancelAnimationFrame = function(id) {
        clearTimeout(id);
      };
    }
  }());
/*! end requestAnimationFrame Polyfill */
  var defaults = {
    defaultSpeed:  0.2,   
    useOffset:     true,  
    defaultOffset: 200,   
    disableMobile: false, 
    minWidth:      false  
  };
  var opts = \$.extend( {}, defaults, options );
  if( opts.disableMobile && /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) ) {
    return false;
  }
  var windowYOffset = window.pageYOffset;
  var winHeight     = \"innerHeight\" in window ? window.innerHeight : document.documentElement.offsetHeight;
  var winWidth      = \"innerWidth\" in window ? window.innerWidth : document.documentElement.clientWidth;
  var navToggle     = \$('#filter-toggle');
  var winBottom     = (windowYOffset + winHeight);
  var body          = document.body;
  var html          = document.documentElement;
  var docHeight     = Math.max( body.scrollHeight, body.offsetHeight,
                      html.clientHeight, html.scrollHeight, html.offsetHeight );
  \$(window).on('resize', function(){
    winHeight = \"innerHeight\" in window ? window.innerHeight : document.documentElement.offsetHeight;
    winWidth  = window.innerWidth;
    docHeight = Math.max( body.scrollHeight, body.offsetHeight,
                    html.clientHeight, html.scrollHeight, html.offsetHeight );
  });
  function runScrollElement(el) {
    var thisTop = el.offset().top;
    if( opts.useOffset && thisTop - opts.defaultOffset > ( winBottom ) ) {
      return false;
    }
    var speed = el.attr('data-speed') ? ( el.attr('data-speed') * -1 ) : ( opts.defaultSpeed * -1 );
    var val;
    if(el.hasClass('scroll-start-zero')) {
      val = ( windowYOffset * speed );
    } else {
      val = ( ( windowYOffset - thisTop ) + ( winHeight / 2 ) ) * speed;
    }
    if(val > docHeight) {
      val = docHeight;
    }
    var styleVal = 'translate3d( 0px, ' + val + 'px, 0px)';
    el.css({
      \"-webkit-transform\": styleVal,
      \"-moz-transform\": styleVal,
      \"-ms-transform\": styleVal,
      \"-o-transform\": styleVal,
      \"transform\": styleVal
    });
  }
  var scrollEls = [];
  this.each( function(i) {
    scrollEls.push( \$(this) );
  });
  window.addEventListener(\"load\", function(){
    if ( opts.minWidth && opts.minWidth > winWidth ) {
      \$(this).removeAttr('style');
      return false;
    }
    \$.each(scrollEls, function(i, el) {
      windowYOffset = window.pageYOffset;
      winBottom     = (windowYOffset + winHeight);
      runScrollElement(el);
    });
  });
  return document.addEventListener('scroll', function(){
    if( opts.minWidth && opts.minWidth > winWidth ) {
      \$(this).removeAttr('style');
      return false;
    }
    \$.each(scrollEls, function(i, el) {
      windowYOffset = window.pageYOffset;
      winBottom     = (windowYOffset + winHeight);
      window.requestAnimationFrame( function() {
        runScrollElement(el);
      });
    });
  });
}; }( jQuery, window, document ));";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@themes/fresh-center/js/parallax-element.js";
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
        return new Source("", "@themes/fresh-center/js/parallax-element.js", "/app/docroot/themes/fresh-center/js/parallax-element.js");
    }
}
