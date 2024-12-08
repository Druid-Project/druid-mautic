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

/* @bundles/CoreBundle/Assets/js/libraries/froala/plugins/url.js */
class __TwigTemplate_17461dd766171a783dbdc35a2312cac9 extends Template
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
 * froala_editor v2.4.2 (https://www.froala.com/wysiwyg-editor)
 * License https://froala.com/wysiwyg-editor/terms/
 * Copyright 2014-2017 Froala Labs
 */

(function (factory) {
    if (typeof define === 'function' && define.amd) {
        // AMD. Register as an anonymous module.
        define(['jquery'], factory);
    } else if (typeof module === 'object' && module.exports) {
        // Node/CommonJS
        module.exports = function( root, jQuery ) {
            if ( jQuery === undefined ) {
                // require('jQuery') returns a factory that requires window to
                // build a jQuery instance, we normalize how we use modules
                // that require this pattern but the window provided is a noop
                // if it's defined (how jquery works)
                if ( typeof window !== 'undefined' ) {
                    jQuery = require('jquery');
                }
                else {
                    jQuery = require('jquery')(root);
                }
            }
            factory(jQuery);
            return jQuery;
        };
    } else {
        // Browser globals
        factory(jQuery);
    }
}(function (\$) {

  

  // Extend defaults.
  \$.extend(\$.FE.DEFAULTS, {

  });

  \$.FE.URLRegEx = /(\\s|^|>)((http|https|ftp|ftps)\\:\\/\\/[a-zA-Z0-9\\-\\.]+(\\.[a-zA-Z]{2,3})?(:\\d*)?(\\/[^\\s<]*)?)(\\s|\$|<)/gi;

  \$.FE.PLUGINS.url = function (editor) {

    function _ignore (node) {
      while (node.parentNode) {
        node = node.parentNode;

        if (['A', 'BUTTON', 'TEXTAREA'].indexOf(node.tagName) >= 0) {
          return true;
        }
      }

      return false;
    }

    function _convertURLS () {
      var walker = editor.doc.createTreeWalker(editor.el, NodeFilter.SHOW_TEXT, editor.node.filter(function (node) {
          return \$.FE.URLRegEx.test(node.textContent.replace(/&nbsp;/gi, '')) && !_ignore(node);
        }), false);

      while (walker.nextNode()) {
        var node = walker.currentNode;

        var rel = null;
        if (editor.opts.linkAlwaysNoFollow) {
          rel = 'nofollow';
        }

        // https://github.com/froala/wysiwyg-editor/issues/1576.
        if (editor.opts.linkAlwaysBlank) {
          if (!rel) rel = 'noopener noreferrer';
          else rel += ' noopener noreferrer';
        }

        // Convert it to A.
        \$(node).before(node.textContent.replace(\$.FE.URLRegEx, '\$1<a' + (editor.opts.linkAlwaysBlank ? ' target=\"_blank\"' : '') + (rel ? (' rel=\"' + rel + '\"') : '') + ' href=\"\$2\">\$2</a>\$7'));

        node.parentNode.removeChild(node);
      }
    }

    /*
     * Initialize.
     */
    function _init () {
      editor.events.on('paste.afterCleanup', function (html) {
        if (\$.FE.URLRegEx.test(html)) {
          return html.replace(\$.FE.URLRegEx, '\$1<a' + (editor.opts.linkAlwaysBlank ? ' target=\"_blank\"' : '') + (editor.opts.linkAlwaysNoFollow ? ' rel=\"nofollow\"' : '') + ' href=\"\$2\">\$2</a>\$7')
        }
      });

      editor.events.on('keyup', function (e) {
        var keycode = e.which;
        if (keycode == \$.FE.KEYCODE.ENTER || keycode == \$.FE.KEYCODE.SPACE) {
          _convertURLS(editor.node.contents(editor.el));
        }
      });

      editor.events.on('keydown', function (e) {
        var keycode = e.which;

        if (keycode == \$.FE.KEYCODE.ENTER) {
          var el = editor.selection.element();

          if ((el.tagName == 'A' || \$(el).parents('a').length) && editor.selection.info(el).atEnd) {
            e.stopImmediatePropagation();

            if (el.tagName !== 'A') el = \$(el).parents('a')[0];
            \$(el).after('&nbsp;' + \$.FE.MARKERS);
            editor.selection.restore();

            return false;
          }
        }
      });
    }

    return {
      _init: _init
    }
  }

}));
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@bundles/CoreBundle/Assets/js/libraries/froala/plugins/url.js";
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
        return new Source("", "@bundles/CoreBundle/Assets/js/libraries/froala/plugins/url.js", "/app/docroot/app/bundles/CoreBundle/Assets/js/libraries/froala/plugins/url.js");
    }
}
