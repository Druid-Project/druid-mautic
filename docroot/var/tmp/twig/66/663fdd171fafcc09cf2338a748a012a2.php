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

/* @bundles/FormBundle/DataFixtures/ORM/fakeactiondata.csv */
class __TwigTemplate_fb079020992f4246765d60c9b2575993 extends Template
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
        yield "form,type,name,description,order,properties
1,lead.create,Create a lead,NULL,1,\"a:2:{s:6:\\\"points\\\";d:10;s:12:\\\"mappedFields\\\";a:22:{i:1;i:1;i:2;N;i:3;N;i:4;N;i:5;N;i:6;i:2;i:7;N;i:8;N;i:9;N;i:10;N;i:11;N;i:12;N;i:13;N;i:14;N;i:15;N;i:16;N;i:17;N;i:18;N;i:19;N;i:20;N;i:21;N;i:22;N;}}\"
2,lead.create,Create a lead,NULL,1,\"a:2:{s:6:\\\"points\\\";d:10;s:12:\\\"mappedFields\\\";a:22:{i:1;i:5;i:2;N;i:3;N;i:4;N;i:5;N;i:6;i:6;i:7;N;i:8;N;i:9;N;i:10;N;i:11;N;i:12;N;i:13;N;i:14;N;i:15;N;i:16;N;i:17;N;i:18;N;i:19;N;i:20;N;i:21;N;i:22;N;}}\"";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@bundles/FormBundle/DataFixtures/ORM/fakeactiondata.csv";
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
        return new Source("", "@bundles/FormBundle/DataFixtures/ORM/fakeactiondata.csv", "/app/docroot/app/bundles/FormBundle/DataFixtures/ORM/fakeactiondata.csv");
    }
}
