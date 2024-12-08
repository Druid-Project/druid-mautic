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

/* @MauticFocus/Builder/Bar/parent.less.twig */
class __TwigTemplate_2a13e939fd7ae6dcfcdf499193ec68dd extends Template
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
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticFocus/Builder/Bar/animations.less.twig", array(), false);
        yield "

.mf-bar-iframe {
    width: 100%;
    position: static;
    z-index: 20000;
    left: 0;
    right: 0;

    &.mf-animate {
        .barAnimate();
    }

    &.mf-bar-iframe-top {
        top: 0;
        margin-top: -100px;
    }

    &.mf-bar-iframe-bottom {
        bottom: 0;
        margin-bottom: -100px;
    }

    &.mf-bar-iframe-regular {
        body, html {
            min-height: 30px;
        }

        &.mf-bar-iframe-top {
            margin-top: -30px;
        }

        &.mf-bar-iframe-bottom {
            margin-bottom: -30px;
        }
    }

    &.mf-bar-iframe-large {
        body, html {
            min-height: 50px;
        }

        &.mf-bar-iframe-top {
            margin-top: -50px;
        }

        &.mf-bar-iframe-bottom {
            margin-bottom: -50px;
        }
    }

    &.mf-bar-iframe-sticky {
        position: fixed;
    }
}

";
        // line 57
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticFocus/Builder/Bar/shared.less.twig", array(), false);
        yield "
";
        // line 58
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticFocus/Builder/Bar/collapser.less.twig", array(), false);
        yield "

@media only screen and (max-width: 667px) {
    .mf-bar-collapser {
        display: none !important;
    }
}
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@MauticFocus/Builder/Bar/parent.less.twig";
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
        return array (  105 => 58,  101 => 57,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@MauticFocus/Builder/Bar/parent.less.twig", "/app/docroot/plugins/MauticFocusBundle/Resources/views/Builder/Bar/parent.less.twig");
    }
}
