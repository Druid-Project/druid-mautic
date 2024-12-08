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

/* @bundles/CoreBundle/Assets/js/libraries/froala/plugins/save.js */
class __TwigTemplate_296ab9e44653da39d6f8f19a88950f02 extends Template
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
    saveInterval: 10000,
    saveURL: null,
    saveParams: {},
    saveParam: 'body',
    saveMethod: 'POST'
  });


  \$.FE.PLUGINS.save = function (editor) {
    var _timeout = null;
    var _last_html = null;
    var _force = false;

    var BAD_LINK = 1;
    var ERROR_ON_SERVER = 2;

    var error_messages = {};
    error_messages[BAD_LINK] = 'Missing saveURL option.';
    error_messages[ERROR_ON_SERVER] = 'Something went wrong during save.';

    /**
     * Throw an image error.
     */
    function _throwError (code, response) {
      editor.events.trigger('save.error', [{
        code: code,
        message: error_messages[code]
      }, response]);
    }

    function save (html) {
      if (typeof html == 'undefined') html = editor.html.get();

      // Trigger before save event.
      if (editor.events.trigger('save.before') === false) return false;

      if (editor.opts.saveURL) {
        var params = {};
        for (var key in editor.opts.saveParams) {
          if (editor.opts.saveParams.hasOwnProperty(key)) {
            var param = editor.opts.saveParams[key];
            if (typeof(param) == 'function') {
              params[key] = param.call(this);
            } else {
              params[key] = param;
            }
          }
        }

        var dt = {};
        dt[editor.opts.saveParam] = html;

        \$.ajax({
          type: editor.opts.saveMethod,
          url: editor.opts.saveURL,
          data: \$.extend(dt, params),
          crossDomain: editor.opts.requestWithCORS,
          xhrFields: {
            withCredentials: editor.opts.requestWithCredentials
          },
          headers: editor.opts.requestHeaders
        })
        .done(function (data) {
          _last_html = html;

          // data
          editor.events.trigger('save.after', [data]);
        })
        .fail(function (xhr) {
          // (error)
          _throwError(ERROR_ON_SERVER, xhr.response || xhr.responseText);
        });
      } else {
        // (error)
        _throwError(BAD_LINK);
      }
    }

    function _mightSave () {
      clearTimeout(_timeout);
      _timeout = setTimeout(function () {
        var html = editor.html.get();
        if (_last_html != html || _force) {
          _last_html = html;
          _force = false;

          save(html);
        }
      }, editor.opts.saveInterval);
    }

    /**
     * Reset the saving interval.
     */
    function reset () {
      _mightSave();
      _force = false;
    }

    /**
     * Force saving at the end of the current interval.
     */
    function force () {
      _force = true;
    }

    /*
     * Initialize.
     */
    function _init () {
      if (editor.opts.saveInterval) {
        _last_html = editor.html.get();
        editor.events.on('contentChanged', _mightSave);
        editor.events.on('keydown destroy', function () {
          clearTimeout(_timeout);
        });
      }
    }

    return {
      _init: _init,
      save: save,
      reset: reset,
      force: force
    }
  }

  \$.FE.DefineIcon('save', { NAME: 'floppy-o' });
  \$.FE.RegisterCommand('save', {
    title: 'Save',
    undo: false,
    focus: false,
    refreshAfterCallback: false,
    callback: function () {
      this.save.save();
    },
    plugin: 'save'
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
        return "@bundles/CoreBundle/Assets/js/libraries/froala/plugins/save.js";
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
        return new Source("", "@bundles/CoreBundle/Assets/js/libraries/froala/plugins/save.js", "/app/docroot/app/bundles/CoreBundle/Assets/js/libraries/froala/plugins/save.js");
    }
}
