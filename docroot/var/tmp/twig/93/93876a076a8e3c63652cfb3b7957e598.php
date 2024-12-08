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

/* @MauticFocus/Builder/style.less.twig */
class __TwigTemplate_d06e004a352d517b0e0b1e94a9427139 extends Template
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
        // line 3
        $context["preview"] = ((array_key_exists("preview", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["preview"]) || array_key_exists("preview", $context) ? $context["preview"] : (function () { throw new RuntimeError('Variable "preview" does not exist.', 3, $this->source); })()), false)) : (false));
        // line 4
        $context["less"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 5
            yield ".mf-bar-iframe {
    z-index: 19000;
}

.mf-content {
    line-height: 1.1;

    .mf-inner-container {
        margin-top: 20px;
    }

    a.mf-link, .mauticform-button, .mauticform-pagebreak {
        padding: 5px 15px;
        -webkit-border-radius: 4px;
        -moz-border-radius: 4px;
        border-radius: 4px;
        cursor: pointer;
        text-align: center;
        text-decoration: none;
        border: none;
    }

    a.mf-link:hover, .mauticform-button:hover, .mauticform-pagebreak:hover {
        opacity: 0.9;
        text-decoration: none;
        border: none;
    }

    .mauticform-pagebreak {
        width: auto !important;
    }
}

.mautic-focus {
    ";
            // line 39
            if ((isset($context["preview"]) || array_key_exists("preview", $context) ? $context["preview"] : (function () { throw new RuntimeError('Variable "preview" does not exist.', 39, $this->source); })())) {
                // line 40
                yield "    .mauticform-row {
        min-height: 0px;
    }
    ";
            }
            // line 44
            yield "
    .mauticform_wrapper form {
        padding: 0;
        margin: 0;
    }

    .mauticform-input, select {
        border-radius: 2px;
        padding: 5px 8px;
        color: #757575;
        border: 1px solid #ababab;
    }

    .mauticform-input:focus, select:focus {
        outline: none;
        border: 1px solid #757575;
    }
}

";
            // line 63
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticFocus/Builder/Bar/style.less.twig", ["preview" =>             // line 64
(isset($context["preview"]) || array_key_exists("preview", $context) ? $context["preview"] : (function () { throw new RuntimeError('Variable "preview" does not exist.', 64, $this->source); })())], false);
            // line 65
            yield "

";
            // line 67
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticFocus/Builder/Modal/style.less.twig", ["preview" =>             // line 68
(isset($context["preview"]) || array_key_exists("preview", $context) ? $context["preview"] : (function () { throw new RuntimeError('Variable "preview" does not exist.', 68, $this->source); })())], false);
            // line 69
            yield "

";
            // line 71
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticFocus/Builder/Notification/style.less.twig", ["preview" =>             // line 72
(isset($context["preview"]) || array_key_exists("preview", $context) ? $context["preview"] : (function () { throw new RuntimeError('Variable "preview" does not exist.', 72, $this->source); })())], false);
            // line 73
            yield "

";
            // line 75
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticFocus/Builder/Page/style.less.twig", ["preview" =>             // line 76
(isset($context["preview"]) || array_key_exists("preview", $context) ? $context["preview"] : (function () { throw new RuntimeError('Variable "preview" does not exist.', 76, $this->source); })())], false);
            // line 77
            yield "
";
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 79
        yield "
";
        // line 80
        $context["css"] = $this->extensions['MauticPlugin\MauticFocusBundle\Twig\Extension\FocusBundleExtension']->compileLess((isset($context["less"]) || array_key_exists("less", $context) ? $context["less"] : (function () { throw new RuntimeError('Variable "less" does not exist.', 80, $this->source); })()));
        // line 81
        yield "
";
        // line 82
        if ((Twig\Extension\CoreExtension::testEmpty((isset($context["preview"]) || array_key_exists("preview", $context) ? $context["preview"] : (function () { throw new RuntimeError('Variable "preview" does not exist.', 82, $this->source); })())) && ("dev" === CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 82, $this->source); })()), "environment", [], "any", false, false, false, 82)))) {
            // line 83
            yield "    ";
            $context["css"] = $this->extensions['MauticPlugin\MauticFocusBundle\Twig\Extension\FocusBundleExtension']->minifyCss((isset($context["css"]) || array_key_exists("css", $context) ? $context["css"] : (function () { throw new RuntimeError('Variable "css" does not exist.', 83, $this->source); })()));
        }
        // line 85
        yield "
";
        // line 86
        yield (isset($context["css"]) || array_key_exists("css", $context) ? $context["css"] : (function () { throw new RuntimeError('Variable "css" does not exist.', 86, $this->source); })());
        yield "
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@MauticFocus/Builder/style.less.twig";
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
        return array (  157 => 86,  154 => 85,  150 => 83,  148 => 82,  145 => 81,  143 => 80,  140 => 79,  135 => 77,  133 => 76,  132 => 75,  128 => 73,  126 => 72,  125 => 71,  121 => 69,  119 => 68,  118 => 67,  114 => 65,  112 => 64,  111 => 63,  90 => 44,  84 => 40,  82 => 39,  46 => 5,  44 => 4,  42 => 3,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@MauticFocus/Builder/style.less.twig", "/app/docroot/plugins/MauticFocusBundle/Resources/views/Builder/style.less.twig");
    }
}
