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

/* @MauticFocus/Builder/form.html.twig */
class __TwigTemplate_9908936bbc171dc6e1d9c55113560af6 extends Template
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
        // line 14
        $context["formName"] = (("_" . Twig\Extension\CoreExtension::lower($this->env->getCharset(), Mautic\CoreBundle\Helper\InputHelper::alphanum(Mautic\CoreBundle\Helper\InputHelper::transliterate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 14, $this->source); })()), "name", [], "any", false, false, false, 14))))) . "_focus");
        // line 15
        $context["jsFormName"] = Twig\Extension\CoreExtension::trim((isset($context["formName"]) || array_key_exists("formName", $context) ? $context["formName"] : (function () { throw new RuntimeError('Variable "formName" does not exist.', 15, $this->source); })()), "_", "left");
        // line 16
        $context["fields"] = CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 16, $this->source); })()), "fields", [], "any", false, false, false, 16);
        // line 17
        $context["required"] = [];
        // line 18
        yield "
<!-- START FOCUS FORM -->
";
        // line 20
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticForm/Builder/_script.html.twig", ["form" => (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 20, $this->source); })()), "formName" => (isset($context["formName"]) || array_key_exists("formName", $context) ? $context["formName"] : (function () { throw new RuntimeError('Variable "formName" does not exist.', 20, $this->source); })())], false);
        yield "
<script>
    var MauticFocusHandler = function (messageType, message) {
        // Store the HTML
        var wrapper = document.getElementById('mauticform_wrapper";
        // line 24
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["formName"]) || array_key_exists("formName", $context) ? $context["formName"] : (function () { throw new RuntimeError('Variable "formName" does not exist.', 24, $this->source); })()), "html", null, true);
        yield "');
        var innerForm = wrapper.getElementsByClassName('mauticform-innerform');
        innerForm[0].style.display = \"none\";

        ";
        // line 28
        if (("page" == (isset($context["style"]) || array_key_exists("style", $context) ? $context["style"] : (function () { throw new RuntimeError('Variable "style" does not exist.', 28, $this->source); })()))) {
            // line 29
            yield "        document.getElementById('mauticform";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["formName"]) || array_key_exists("formName", $context) ? $context["formName"] : (function () { throw new RuntimeError('Variable "formName" does not exist.', 29, $this->source); })()), "html", null, true);
            yield "_' + messageType).style.fontSize = \"2em\";
        ";
        } elseif (("bar" ==         // line 30
(isset($context["style"]) || array_key_exists("style", $context) ? $context["style"] : (function () { throw new RuntimeError('Variable "style" does not exist.', 30, $this->source); })()))) {
            // line 31
            yield "        document.getElementById('mauticform";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["formName"]) || array_key_exists("formName", $context) ? $context["formName"] : (function () { throw new RuntimeError('Variable "formName" does not exist.', 31, $this->source); })()), "html", null, true);
            yield "_' + messageType).style.fontSize = \"1.1em\";
        ";
        }
        // line 33
        yield "
        var headline = document.getElementsByClassName('mf-headline');
        if (headline.length) {
            headline[0].style.display = \"none\";
        }

        var tagline = document.getElementsByClassName('mf-tagline');
        if (tagline.length) {
            tagline[0].style.display = \"none\";
        }

        if (message) {
            document.getElementById('mauticform";
        // line 45
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["formName"]) || array_key_exists("formName", $context) ? $context["formName"] : (function () { throw new RuntimeError('Variable "formName" does not exist.', 45, $this->source); })()), "html", null, true);
        yield "_' + messageType).innerHTML = message;
        }

        if (messageType == 'error') {
            setTimeout(function () {
                if (headline.length) {
                    ";
        // line 51
        if (("bar" == (isset($context["style"]) || array_key_exists("style", $context) ? $context["style"] : (function () { throw new RuntimeError('Variable "style" does not exist.', 51, $this->source); })()))) {
            // line 52
            yield "                    headline[0].style.display = \"inline-block\";
                    ";
        } else {
            // line 54
            yield "                    headline[0].style.display = \"block\";
                    ";
        }
        // line 56
        yield "                }
                if (tagline.length) {
                    tagline[0].style.display = \"inherit\";
                }

                innerForm[0].style.display = \"inherit\";
                document.getElementById('mauticform";
        // line 62
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["formName"]) || array_key_exists("formName", $context) ? $context["formName"] : (function () { throw new RuntimeError('Variable "formName" does not exist.', 62, $this->source); })()), "html", null, true);
        yield "_' + messageType).innerHTML = '';
            }, 1500);
        }
    }
    if (typeof MauticFormCallback == 'undefined') {
        var MauticFormCallback = {};
    }
    MauticFormCallback[\"";
        // line 69
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["jsFormName"]) || array_key_exists("jsFormName", $context) ? $context["jsFormName"] : (function () { throw new RuntimeError('Variable "jsFormName" does not exist.', 69, $this->source); })()), "html", null, true);
        yield "\"] = {
        onMessageSet: function (data) {
            if (data.message) {
                MauticFocusHandler(data.type);
            }
        },
        onErrorMark: function (data) {
            if (data.validationMessage) {
                MauticFocusHandler('error', data.validationMessage);

                return true;
            }
        },
        onResponse: function (data) {
            if (data.download) {
                // Hit the download in the iframe
                document.getElementById('mauticiframe";
        // line 85
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["formName"]) || array_key_exists("formName", $context) ? $context["formName"] : (function () { throw new RuntimeError('Variable "formName" does not exist.', 85, $this->source); })()), "html", null, true);
        yield "').src = data.download;

                // Register a callback for a redirect
                if (data.redirect) {
                    setTimeout(function () {
                        window.top.location = data.redirect;
                    }, 2000);
                }

                return true;
            } else if (data.redirect) {
                window.top.location = data.redirect;

                return true;
            }

            return false;
        }
    }
</script>
";
        // line 105
        $context["formExtra"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 106
            yield "  <input type=\"hidden\" name=\"mauticform[focusId]\" id=\"mauticform";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["formName"]) || array_key_exists("formName", $context) ? $context["formName"] : (function () { throw new RuntimeError('Variable "formName" does not exist.', 106, $this->source); })()), "html", null, true);
            yield "_focus_id\" value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["focusId"]) || array_key_exists("focusId", $context) ? $context["focusId"] : (function () { throw new RuntimeError('Variable "focusId" does not exist.', 106, $this->source); })()), "html", null, true);
            yield "\"/>
";
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 108
        yield "
";
        // line 109
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticForm/Builder/form.html.twig", ["form" =>         // line 110
(isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 110, $this->source); })()), "formPages" =>         // line 111
(isset($context["pages"]) || array_key_exists("pages", $context) ? $context["pages"] : (function () { throw new RuntimeError('Variable "pages" does not exist.', 111, $this->source); })()), "lastFormPage" =>         // line 112
(isset($context["lastPage"]) || array_key_exists("lastPage", $context) ? $context["lastPage"] : (function () { throw new RuntimeError('Variable "lastPage" does not exist.', 112, $this->source); })()), "formExtra" =>         // line 113
(isset($context["formExtra"]) || array_key_exists("formExtra", $context) ? $context["formExtra"] : (function () { throw new RuntimeError('Variable "formExtra" does not exist.', 113, $this->source); })()), "action" => ((        // line 114
(isset($context["preview"]) || array_key_exists("preview", $context) ? $context["preview"] : (function () { throw new RuntimeError('Variable "preview" does not exist.', 114, $this->source); })())) ? ("#") : (null)), "suffix" => "_focus", "contactFields" =>         // line 116
(isset($context["contactFields"]) || array_key_exists("contactFields", $context) ? $context["contactFields"] : (function () { throw new RuntimeError('Variable "contactFields" does not exist.', 116, $this->source); })()), "companyFields" =>         // line 117
(isset($context["companyFields"]) || array_key_exists("companyFields", $context) ? $context["companyFields"] : (function () { throw new RuntimeError('Variable "companyFields" does not exist.', 117, $this->source); })()), "viewOnlyFields" =>         // line 118
(isset($context["viewOnlyFields"]) || array_key_exists("viewOnlyFields", $context) ? $context["viewOnlyFields"] : (function () { throw new RuntimeError('Variable "viewOnlyFields" does not exist.', 118, $this->source); })()), "displayManager" =>         // line 119
(isset($context["displayManager"]) || array_key_exists("displayManager", $context) ? $context["displayManager"] : (function () { throw new RuntimeError('Variable "displayManager" does not exist.', 119, $this->source); })())], false);
        // line 120
        yield "
<!-- END FOCUS FORM -->
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@MauticFocus/Builder/form.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable(): bool
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  201 => 120,  199 => 119,  198 => 118,  197 => 117,  196 => 116,  195 => 114,  194 => 113,  193 => 112,  192 => 111,  191 => 110,  190 => 109,  187 => 108,  178 => 106,  176 => 105,  153 => 85,  134 => 69,  124 => 62,  116 => 56,  112 => 54,  108 => 52,  106 => 51,  97 => 45,  83 => 33,  77 => 31,  75 => 30,  70 => 29,  68 => 28,  61 => 24,  54 => 20,  50 => 18,  48 => 17,  46 => 16,  44 => 15,  42 => 14,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@MauticFocus/Builder/form.html.twig", "/app/docroot/plugins/MauticFocusBundle/Resources/views/Builder/form.html.twig");
    }
}
