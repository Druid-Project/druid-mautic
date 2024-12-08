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

/* @bundles/PointBundle/Assets/css/point.css */
class __TwigTemplate_7c38c3854c5b6aff964250e23d1c45a3 extends Template
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
        yield ".col-point-id, .col-pointtrigger-id {
    width: 75px;
}

.trigger-event-group-header {
    font-size: 1.1em;
    font-weight: bold;
}

#triggerEvents .trigger-event-row {
    padding: 20px;
    margin-bottom: 0 !important;
    border: 1px solid #ecf0f1;
}

#triggerEvents .trigger-event-row .event-label {
    font-size: 1.1em;
    font-weight: bold;
    display: block;
}

#triggerEvents .trigger-event-row .event-descr {
    font-size: 0.9em;
    display: block;
}

#triggerEvents .trigger-event-row:hover {
    background-color: #ecf0f1;
}

#triggerEvents .trigger-event-row.bg-danger:hover {
    background-color: #f2d4d2;
}

#triggerEvents .form-buttons {
    float: right;
}

.col-pointtrigger-color {
    width: 50px;
}";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@bundles/PointBundle/Assets/css/point.css";
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
        return new Source("", "@bundles/PointBundle/Assets/css/point.css", "/app/docroot/app/bundles/PointBundle/Assets/css/point.css");
    }
}
