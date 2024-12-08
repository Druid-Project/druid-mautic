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

/* @bundles/EmailBundle/Assets/css/email.css */
class __TwigTemplate_4cfad77bab8e94e348a0996d4ba6a0a1 extends Template
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
        yield "/* EmailBundle */

.col-email-id {
    width: 75px;
}

.email-builder .builder-panel .panel-body {
    padding: 5px 0;
}

.table-bordered {
\tborder-left: 0;
}

.table-bordered.email-list > thead > tr > th:first-child, .table-bordered.email-list > tbody > tr > td:first-child,
.table-bordered.email-template > thead > tr > th:first-child, .table-bordered.email-template > tbody > tr > td:first-child {
\tborder-left: 0px;
}

.table-bordered.email-list > thead > tr > th:last-child, .table-bordered.email-list > tbody > tr > td:last-child,
.table-bordered.email-template > thead > tr > th:last-child, .table-bordered.email-template > tbody > tr > td:last-child {
    border-right: 0px;
}

.email-filters {

}

.clickable-stat a { color: #fff; }
.clickable-stat a:hover { color: #fff; }

#emailGraphStats .spinner,
#reads-map-container .spinner{
    text-align: center;
    font-size: 32px;
}
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@bundles/EmailBundle/Assets/css/email.css";
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
        return new Source("", "@bundles/EmailBundle/Assets/css/email.css", "/app/docroot/app/bundles/EmailBundle/Assets/css/email.css");
    }
}
