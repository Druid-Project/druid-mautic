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

/* @bundles/CoreBundle/Assets/js/libraries/froala/plugins/align.js */
class __TwigTemplate_a297fd148402239dbffe02170ba7ff06 extends Template
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

  

  \$.FE.PLUGINS.align = function (editor) {
    function apply (val) {
      // Wrap.
      editor.selection.save();
      editor.html.wrap(true, true, true, true);
      editor.selection.restore();

      var blocks = editor.selection.blocks();

      for (var i = 0; i < blocks.length; i++) {
        // Check if we should reset to default value.
        if (editor.helpers.getAlignment(\$(blocks[i].parentNode)) == val) {
          \$(blocks[i]).css('text-align', '').removeClass('fr-temp-div');
        }
        else {
          \$(blocks[i]).css('text-align', val).removeClass('fr-temp-div');
        }

        if (\$(blocks[i]).attr('class') === '') \$(blocks[i]).removeAttr('class');
        if (\$(blocks[i]).attr('style') === '') \$(blocks[i]).removeAttr('style');
      }

      editor.selection.save();
      editor.html.unwrap();
      editor.selection.restore();
    }

    function refresh (\$btn) {
      var blocks = editor.selection.blocks();
      if (blocks.length) {
        var alignment = editor.helpers.getAlignment(\$(blocks[0]));

        \$btn.find('> *:first').replaceWith(editor.icon.create('align-' + alignment));
      }
    }

    function refreshOnShow(\$btn, \$dropdown) {
      var blocks = editor.selection.blocks();
      if (blocks.length) {
        var alignment = editor.helpers.getAlignment(\$(blocks[0]));

        \$dropdown.find('a.fr-command[data-param1=\"' + alignment + '\"]').addClass('fr-active').attr('aria-selected', true);
      }
    }

    return {
      apply: apply,
      refresh: refresh,
      refreshOnShow: refreshOnShow
    }
  }

  \$.FE.DefineIcon('align', { NAME: 'align-left' });
  \$.FE.DefineIcon('align-left', { NAME: 'align-left' });
  \$.FE.DefineIcon('align-right', { NAME: 'align-right' });
  \$.FE.DefineIcon('align-center', { NAME: 'align-center' });
  \$.FE.DefineIcon('align-justify', { NAME: 'align-justify' });
  \$.FE.RegisterCommand('align', {
    type: 'dropdown',
    title: 'Align',
    options: {
      left: 'Align Left',
      center: 'Align Center',
      right: 'Align Right',
      justify: 'Align Justify'
    },
    html: function () {
      var c = '<ul class=\"fr-dropdown-list\" role=\"presentation\">';
      var options =  \$.FE.COMMANDS.align.options;
      for (var val in options) {
        if (options.hasOwnProperty(val)) {
          c += '<li role=\"presentation\"><a class=\"fr-command fr-title\" tabIndex=\"-1\" role=\"option\" data-cmd=\"align\" data-param1=\"' + val + '\" title=\"' + this.language.translate(options[val]) + '\">' + this.icon.create('align-' + val) + '<span class=\"fr-sr-only\">' + this.language.translate(options[val]) + '</span></a></li>';
        }
      }
      c += '</ul>';

      return c;
    },
    callback: function (cmd, val) {
      this.align.apply(val);
    },
    refresh: function (\$btn) {
      this.align.refresh(\$btn);
    },
    refreshOnShow: function (\$btn, \$dropdown) {
      this.align.refreshOnShow(\$btn, \$dropdown);
    },
    plugin: 'align'
  })

}));
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@bundles/CoreBundle/Assets/js/libraries/froala/plugins/align.js";
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
        return new Source("", "@bundles/CoreBundle/Assets/js/libraries/froala/plugins/align.js", "/app/docroot/app/bundles/CoreBundle/Assets/js/libraries/froala/plugins/align.js");
    }
}
