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

/* @bundles/FormBundle/DataFixtures/ORM/fakeformdata.csv */
class __TwigTemplate_891415143762926270eaa29024013c19 extends Template
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
        yield "isPublished,dateAdded,name,alias,description,postAction,postActionProperty,template,formType
1,\"2014-08-10 00:43:12\",\"Kaleidoscope Registration\",\"kaleidosco\",NULL,\"message\",\"Thank you for registering!\",\"blank\",\"standalone\"
1,\"2014-08-10 00:44:27\",\"Kaleidoscope Registro (ES)\",\"kaleidosco\",NULL,\"message\",\"Gracias por registrarse!\",\"blank\",\"standalone\"
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@bundles/FormBundle/DataFixtures/ORM/fakeformdata.csv";
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
        return new Source("", "@bundles/FormBundle/DataFixtures/ORM/fakeformdata.csv", "/app/docroot/app/bundles/FormBundle/DataFixtures/ORM/fakeformdata.csv");
    }
}
