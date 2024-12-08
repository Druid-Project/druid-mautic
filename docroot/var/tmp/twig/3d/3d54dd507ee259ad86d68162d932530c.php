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

/* @bundles/CoreBundle/Assets/js/libraries/froala/plugins/inline_style.js */
class __TwigTemplate_057176a21a7f8642a0dc4c72438a38dd extends Template
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
    inlineStyles: {
      'Big Red': 'font-size: 20px; color: red;',
      'Small Blue': 'font-size: 14px; color: blue;'
    }
  })

  \$.FE.PLUGINS.inlineStyle = function (editor) {
    function apply (val) {
      if (editor.selection.text() !== '') {
        editor.html.insert(\$.FE.START_MARKER + '<span style=\"' + val + '\">' + editor.selection.text() + '</span>' + \$.FE.END_MARKER);
      }
      else {
        editor.html.insert('<span style=\"' + val + '\">' + \$.FE.INVISIBLE_SPACE + \$.FE.MARKERS + '</span>');
      }
    }

    return {
      apply: apply
    }
  }

  // Register the inline style command.
  \$.FE.RegisterCommand('inlineStyle', {
    type: 'dropdown',
    html: function () {
      var c = '<ul class=\"fr-dropdown-list\" role=\"presentation\">';
      var options =  this.opts.inlineStyles;
      for (var val in options) {
        if (options.hasOwnProperty(val)) {
          c += '<li role=\"presentation\"><span style=\"' + options[val] + '\" role=\"presentation\"><a class=\"fr-command\" tabIndex=\"-1\" role=\"option\" data-cmd=\"inlineStyle\" data-param1=\"' + options[val] + '\" title=\"' + this.language.translate(val) + '\">' + this.language.translate(val) + '</a></span></li>';
        }
      }
      c += '</ul>';

      return c;
    },
    title: 'Inline Style',
    callback: function (cmd, val) {
      this.inlineStyle.apply(val);
    },
    plugin: 'inlineStyle'
  })

  // Add the font size icon.
  \$.FE.DefineIcon('inlineStyle', {
    NAME: 'paint-brush'
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
        return "@bundles/CoreBundle/Assets/js/libraries/froala/plugins/inline_style.js";
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
        return new Source("", "@bundles/CoreBundle/Assets/js/libraries/froala/plugins/inline_style.js", "/app/docroot/app/bundles/CoreBundle/Assets/js/libraries/froala/plugins/inline_style.js");
    }
}
