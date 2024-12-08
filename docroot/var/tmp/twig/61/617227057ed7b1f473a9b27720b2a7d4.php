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

/* @MauticFocus/Builder/Modal/style.less.twig */
class __TwigTemplate_46a3248a7afa4965e09886bbc2084b0c extends Template
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
        yield ".mf-modal {
    position: relative;
    opacity: 1;
    z-index: 2000;
    margin: auto;
    padding: 45px;
    border-radius: 4px;
    border-width: 6px 1px 1px 1px;
    border-style: solid;
    background: #fff;
    max-width: 40em;
    text-align: center;

    .mf-content {
        margin-bottom: 30px;

        .mf-headline {
            font-size: 1.6em;
            font-weight: 600;
        }

        .mf-tagline {
            font-size: 1.2em;
            font-weight: normal;
            margin-top: 4px;
        }

        a.mf-link {
            display: block;
            max-width: 70%;
            padding: 10px;
            margin: auto;
            font-size: 1.2em;
        }
    }

    .mf-modal-close {
        position: fixed;
        top: 5px;
        right: 8px;

        a {
            font-size: 1.4em;
            color: #757575;
            opacity: .4;
            text-decoration: none;
        }

        a:hover {
            opacity: .8;
            text-decoration: none;
        }
    }

    .mauticform-input, .mauticform-row select, .mauticform-button, .mauticform-pagebreak {
        width: 75%;
        height: 35px;
        margin-bottom: 5px;
    }
}

.mf-responsive.mf-modal, .mf-responsive .mf-modal {
    width: 90%;
    padding: 10px;
}

";
        // line 67
        if ( !Twig\Extension\CoreExtension::testEmpty((isset($context["preview"]) || array_key_exists("preview", $context) ? $context["preview"] : (function () { throw new RuntimeError('Variable "preview" does not exist.', 67, $this->source); })()))) {
            // line 68
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticFocus/Builder/Modal/animations.less.twig", array(), false);
            yield "
";
            // line 69
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticFocus/Builder/Modal/overlay.less.twig", array(), false);
            yield "

.mf-modal, .mf-modal-overlay {
    position: absolute !important;
}

.mf-modal {
    z-index: 1023;
    left: 50%;
    &.mf-animate {
        .modalAnimate();
    }

    &.mf-modal-top {
        top: 10px;
        .modalTranslate(-50%, 0);

        &.mf-animate {
            .modalAnimateName(mf-modal-slide-down-top);
        }
    }

    &.mf-modal-middle {
        top: 50%;
        .modalTranslate(-50%, -50%);

        &.mf-animate {
            .modalAnimateName(mf-modal-slide-down-middle);
        }
    }

    &.mf-modal-bottom {
        bottom: 10px;
        .modalTranslate(-50%, 0);

        &.mf-animate {
            .modalAnimateName(mf-modal-slide-up-bottom);
        }
    }

}

.mf-modal-overlay {
    z-index: 1022;
}
";
        }
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@MauticFocus/Builder/Modal/style.less.twig";
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
        return array (  116 => 69,  112 => 68,  110 => 67,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@MauticFocus/Builder/Modal/style.less.twig", "/app/docroot/plugins/MauticFocusBundle/Resources/views/Builder/Modal/style.less.twig");
    }
}
