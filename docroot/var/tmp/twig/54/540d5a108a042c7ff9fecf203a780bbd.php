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

/* @MauticFocus/Builder/Notification/style.less.twig */
class __TwigTemplate_a7b4b2bb8de5b79325e32266da88c6fb extends Template
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
        yield ".mf-notification {
    position: relative;
    opacity: 1;
    z-index: 2000;
    margin: auto;
    background: #fff;
    border-radius: 4px;
    border-width: 6px 1px 1px 1px;
    border-style: solid;
    min-height: 8em;
    padding: 10px 20px;
    width: 350px;

    .mf-content {
        margin-bottom: 30px;

        .mf-headline {
            font-size: 1.2em;
            font-weight: 600;
        }

        .mf-tagline {
            font-size: 1em;
            font-weight: normal;
            margin-top: 4px;
        }
    }

    .mf-notification-close {
        position: fixed;
        top: 5px;
        right: 8px;

        a {
            font-size: 1em;
            color: #757575;
            opacity: .4;
            text-decoration: none;

            &:hover {
                opacity: .8;
                text-decoration: none;
            }
        }
    }

    .mauticform-input, .mauticform-row select, .mauticform-button, .mauticform-pagebreak {
        width: 100%;
        height: 28px;
        margin-bottom: 2px;
    }
}

.mf-responsive.mf-notification, .mf-responsive .mf-notification {
    width: 90%;
    padding: 10px;
    left: 0;
    right: 0;
}

";
        // line 61
        if ( !Twig\Extension\CoreExtension::testEmpty((isset($context["preview"]) || array_key_exists("preview", $context) ? $context["preview"] : (function () { throw new RuntimeError('Variable "preview" does not exist.', 61, $this->source); })()))) {
            // line 62
            yield ".mf-notification {
    position: absolute !important;

    &.mf-animate {
        .notificationAnimate();
    }

    &.mf-notification-top-left {
        top: 5px;
        left: 5px;

        &.mf-animate {
            .notificationName(mf-notification-slide-right);
        }
    }

    &.mf-notification-top-right {
        top: 5px;
        right: 5px;

        &.mf-animate {
            .notificationName(mf-notification-slide-left);
        }
    }

    &.mf-notification-bottom-left {
        bottom: 5px;
        left: 5px;

        &.mf-animate {
            .notificationName(mf-notification-slide-right);
        }
    }

    &.mf-notification-bottom-right {
        bottom: 5px;
        right: 5px;

        &.mf-animate {
            .notificationName(mf-notification-slide-left);
        }
    }
}

";
            // line 106
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticFocus/Builder/Notification/animations.less.twig", array(), false);
            yield "
";
        }
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@MauticFocus/Builder/Notification/style.less.twig";
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
        return array (  152 => 106,  106 => 62,  104 => 61,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@MauticFocus/Builder/Notification/style.less.twig", "/app/docroot/plugins/MauticFocusBundle/Resources/views/Builder/Notification/style.less.twig");
    }
}
