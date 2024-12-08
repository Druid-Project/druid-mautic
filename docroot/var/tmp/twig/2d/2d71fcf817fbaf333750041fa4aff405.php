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

/* @bundles/FormBundle/Tests/Controller/AjaxControllerFunctionalTest.php */
class __TwigTemplate_b69255e26279ee430a54ce8097d3ee49 extends Template
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
        yield "<?php

declare(strict_types=1);

namespace Mautic\\FormBundle\\Tests\\Controller;

use Mautic\\CoreBundle\\Test\\MauticMysqlTestCase;
use PHPUnit\\Framework\\Assert;
use Symfony\\Component\\HttpFoundation\\Request;
use Symfony\\Component\\HttpFoundation\\Response;

final class AjaxControllerFunctionalTest extends MauticMysqlTestCase
{
    public function testGetFieldsForObjectAction(): void
    {
        \$this->client->request(
            Request::METHOD_GET,
            '/s/ajax?action=form:getFieldsForObject&mappedObject=company&mappedField=&formId=10',
            [],
            [],
            \$this->createAjaxHeaders()
        );
        \$clientResponse = \$this->client->getResponse();
        \$payload        = json_decode(\$clientResponse->getContent(), true);
        Assert::assertSame(Response::HTTP_OK, \$clientResponse->getStatusCode());

        // Assert some random fields exist.
        Assert::assertSame(
            [
                'label'      => 'Company Email',
                'value'      => 'companyemail',
                'isListType' => false,
            ],
            \$payload['fields'][4]
        );
        Assert::assertSame(
            [
                'label'      => 'Industry',
                'value'      => 'companyindustry',
                'isListType' => true,
            ],
            \$payload['fields'][9]
        );
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
        return "@bundles/FormBundle/Tests/Controller/AjaxControllerFunctionalTest.php";
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
        return new Source("", "@bundles/FormBundle/Tests/Controller/AjaxControllerFunctionalTest.php", "/app/docroot/app/bundles/FormBundle/Tests/Controller/AjaxControllerFunctionalTest.php");
    }
}
