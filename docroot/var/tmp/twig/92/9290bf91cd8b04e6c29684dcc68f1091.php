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

/* @MauticFocus/Builder/Modal/parent.less.twig */
class __TwigTemplate_3ed01dfa2eee5b50828b0fe1dd44b1fc extends Template
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
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticFocus/Builder/Modal/animations.less.twig", array(), false);
        yield "
";
        // line 2
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticFocus/Builder/Modal/overlay.less.twig", array(), false);
        yield "
.mf-modal-iframe {
    position: fixed;
    z-index: 21003;
    left: 50%;

    &.mf-animate {
        .modalAnimate();
    }

    &.mf-modal-iframe-top {
        top: 10px;
        margin-top: -100%;
        .modalTranslate(-50%, 0);

        &.mf-animate {
            .modalAnimateName(mf-modal-slide-down-top);
        }
    }

    &.mf-modal-iframe-middle {
        top: 50%;
        margin-top: -100%;
        .modalTranslate(-50%, -50%);

        &.mf-animate {
            .modalAnimateName(mf-modal-slide-down-middle);
        }
    }

    &.mf-modal-iframe-bottom {
        bottom: 10px;
        margin-bottom: -100%;
        .modalTranslate(-50%, 0);

        &.mf-animate {
            .modalAnimateName(mf-modal-slide-up-bottom);
        }
    }

    &.mf-loaded {
        margin-top: 0;
        margin-bottom: 0;
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
        return "@MauticFocus/Builder/Modal/parent.less.twig";
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
        return array (  46 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@MauticFocus/Builder/Modal/parent.less.twig", "/app/docroot/plugins/MauticFocusBundle/Resources/views/Builder/Modal/parent.less.twig");
    }
}
