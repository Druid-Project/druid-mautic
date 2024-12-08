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

/* @MauticFocus/Builder/Notification/animations.less.twig */
class __TwigTemplate_8c5441e7ff1188dbcd7422632b0465e6 extends Template
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
        yield ".notificationTranslate(@percent) {
    -webkit-transform: translateX(@percent);
    -ms-transform: translateX(@percent);
    transform: translateX(@percent);
}

.notificationAnimate() {
    -webkit-animation-duration: 1s;
    animation-duration: 1s;
    -webkit-animation-timing-function: ease-in-out;
    animation-timing-function: ease-in-out;
}

.notificationName(@name) {
    -webkit-animation-name: @name;
    animation-name: @name;
}

.notificationSlideLeft() {
    0% {
        .notificationTranslate(150%);
    }
    50% {
        .notificationTranslate(-8%);
    }
    65% {
        .notificationTranslate(4%);
    }
    80% {
        .notificationTranslate(-4%);
    }
    95% {
        .notificationTranslate(2%);
    }
    100% {
        .notificationTranslate(0%);
    }
}

@-webkit-keyframes mf-notification-slide-left {
    .notificationSlideLeft;
}

@keyframes mf-notification-slide-left {
    .notificationSlideLeft;
}

.notificationSlideRight() {
    0% {
        .notificationTranslate(-150%);
    }
    50% {
        .notificationTranslate(8%);
    }
    65% {
        .notificationTranslate(-4%);
    }
    80% {
        .notificationTranslate(4%);
    }
    95% {
        .notificationTranslate(-2%);
    }
    100% {
        .notificationTranslate(0%);
    }
}

@-webkit-keyframes mf-notification-slide-right {
    .notificationSlideRight;
}

@keyframes mf-notification-slide-right {
    .notificationSlideRight;
}
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@MauticFocus/Builder/Notification/animations.less.twig";
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
        return new Source("", "@MauticFocus/Builder/Notification/animations.less.twig", "/app/docroot/plugins/MauticFocusBundle/Resources/views/Builder/Notification/animations.less.twig");
    }
}
