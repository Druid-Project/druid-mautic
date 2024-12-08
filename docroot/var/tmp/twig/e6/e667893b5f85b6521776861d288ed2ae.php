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

/* @bundles/CoreBundle/Assets/js/libraries/froala/plugins/paragraph_style.js */
class __TwigTemplate_71f01afadeb6f74a5c55f7d9761ef942 extends Template
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

  

  \$.extend(\$.FE.DEFAULTS, {
    paragraphStyles: {
      'fr-text-gray': 'Gray',
      'fr-text-bordered': 'Bordered',
      'fr-text-spaced': 'Spaced',
      'fr-text-uppercase': 'Uppercase'
    },
    paragraphMultipleStyles: true
  });

  \$.FE.PLUGINS.paragraphStyle = function (editor) {
    /**
     * Apply style.
     */
    function apply (val, paragraphStyles, paragraphMultipleStyles) {
      if (typeof paragraphStyles == 'undefined') paragraphStyles = editor.opts.paragraphStyles;
      if (typeof paragraphMultipleStyles == 'undefined') paragraphMultipleStyles = editor.opts.paragraphMultipleStyles;

      var styles = '';
      // Remove multiple styles.
      if (!paragraphMultipleStyles) {
        styles = Object.keys(paragraphStyles);
        styles.splice(styles.indexOf(val), 1);
        styles = styles.join(' ');
      }

      editor.selection.save();
      editor.html.wrap(true, true, true, true);
      editor.selection.restore();

      var blocks = editor.selection.blocks();

      // Save selection to restore it later.
      editor.selection.save();

      var hasClass = \$(blocks[0]).hasClass(val);
      for (var i = 0; i < blocks.length; i++) {
        \$(blocks[i]).removeClass(styles).toggleClass(val, !hasClass);

        if (\$(blocks[i]).hasClass('fr-temp-div')) \$(blocks[i]).removeClass('fr-temp-div');
        if (\$(blocks[i]).attr('class') === '') \$(blocks[i]).removeAttr('class');
      }

      // Unwrap temp divs.
      editor.html.unwrap();

      // Restore selection.
      editor.selection.restore();
    }

    function refreshOnShow(\$btn, \$dropdown) {
      var blocks = editor.selection.blocks();

      if (blocks.length) {
        var \$blk = \$(blocks[0]);
        \$dropdown.find('.fr-command').each (function () {
          var cls = \$(this).data('param1');
          var active = \$blk.hasClass(cls);
          \$(this).toggleClass('fr-active', active).attr('aria-selected', active);
        })
      }
    }

    function _init () {
    }

    return {
      _init: _init,
      apply: apply,
      refreshOnShow: refreshOnShow
    }
  }

  // Register the font size command.
  \$.FE.RegisterCommand('paragraphStyle', {
    type: 'dropdown',
    html: function () {
      var c = '<ul class=\"fr-dropdown-list\" role=\"presentation\">';
      var options =  this.opts.paragraphStyles;
      for (var val in options) {
        if (options.hasOwnProperty(val)) {
          c += '<li role=\"presentation\"><a class=\"fr-command ' + val + '\" tabIndex=\"-1\" role=\"option\" data-cmd=\"paragraphStyle\" data-param1=\"' + val + '\" title=\"' + this.language.translate(options[val]) + '\">' + this.language.translate(options[val]) + '</a></li>';
        }
      }
      c += '</ul>';

      return c;
    },
    title: 'Paragraph Style',
    callback: function (cmd, val) {
      this.paragraphStyle.apply(val);
    },
    refreshOnShow: function (\$btn, \$dropdown) {
      this.paragraphStyle.refreshOnShow(\$btn, \$dropdown);
    },
    plugin: 'paragraphStyle'
  })

  // Add the font size icon.
  \$.FE.DefineIcon('paragraphStyle', {
    NAME: 'magic'
  });

}));
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@bundles/CoreBundle/Assets/js/libraries/froala/plugins/paragraph_style.js";
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
        return new Source("", "@bundles/CoreBundle/Assets/js/libraries/froala/plugins/paragraph_style.js", "/app/docroot/app/bundles/CoreBundle/Assets/js/libraries/froala/plugins/paragraph_style.js");
    }
}
