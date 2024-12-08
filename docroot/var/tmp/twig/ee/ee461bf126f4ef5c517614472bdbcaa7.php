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

/* @MauticFocus/Builder/Notification/parent.less.twig */
class __TwigTemplate_e08c6fd0699a03aa7052fc8617e817a0 extends Template
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
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticFocus/Builder/Notification/animations.less.twig", array(), false);
        yield "

.mf-notification-iframe {
    position: fixed;
    z-index: 21001;
    margin-top: -100%;

    &.mf-loaded {
        margin-top: 0;
        margin-bottom: 0;


        &.mf-animate {
            .notificationAnimate();
        }

        &.mf-notification-iframe-top-left {
            top: 5px;
            left: 5px;

            &.mf-animate {
                .notificationName(mf-notification-slide-right);
            }
        }

        &.mf-notification-iframe-top-right {
            top: 5px;
            right: 5px;

            &.mf-animate {
                .notificationName(mf-notification-slide-left);
            }
        }

        &.mf-notification-iframe-bottom-left {
            bottom: 5px;
            left: 5px;

            &.mf-animate {
                .notificationName(mf-notification-slide-right);
            }
        }

        &.mf-notification-iframe-bottom-right {
            bottom: 5px;
            right: 5px;

            &.mf-animate {
                .notificationName(mf-notification-slide-left);
            }
        }

        &.mf-responsive {
            left: 0 !important;
            right: 0 !important;
        }
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
        return "@MauticFocus/Builder/Notification/parent.less.twig";
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
        return array (  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@MauticFocus/Builder/Notification/parent.less.twig", "/app/docroot/plugins/MauticFocusBundle/Resources/views/Builder/Notification/parent.less.twig");
    }
}
