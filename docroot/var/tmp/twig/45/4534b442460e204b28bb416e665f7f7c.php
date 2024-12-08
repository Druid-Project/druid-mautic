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

/* @bundles/LeadBundle/Tests/Controller/Api/CustomFieldsApiControllerTraitTest.php */
class __TwigTemplate_750697d848ed863f5aeac463c0ef576a extends Template
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

namespace Mautic\\LeadBundle\\Tests\\Controller\\Api;

use Doctrine\\ORM\\Tools\\Pagination\\Paginator;
use Mautic\\LeadBundle\\Controller\\Api\\CustomFieldsApiControllerTrait;
use Mautic\\LeadBundle\\Model\\FieldModel;
use PHPUnit\\Framework\\Assert;

final class CustomFieldsApiControllerTraitTest extends \\PHPUnit\\Framework\\TestCase
{
    public function testGetEntityFormOptions(): void
    {
        \$result = [
            'field_1' => [
                'label' => 'Field 1',
                'type'  => 'text',
            ],
            'field_2' => [
                'label' => 'Field 2',
                'type'  => 'text',
            ],
        ];

        \$paginator = \$this->createMock(Paginator::class);
        \$paginator->method('getIterator')
            ->willReturn(\$result);

        \$modelFake = \$this->createMock(FieldModel::class);
        \$modelFake->expects(self::once())
            ->method('getEntities')
            ->willReturn(\$paginator);

        \$controller = new class(\$modelFake) {
            use CustomFieldsApiControllerTrait;

            private object \$model;
            private string \$entityNameOne = 'lead';

            public function __construct(object \$modelFake)
            {
                \$this->model = \$modelFake;
            }

            /**
             * @return mixed[]
             */
            public function getEntityFormOptionsPublic(): array
            {
                return \$this->getEntityFormOptions();
            }

            public function getModel(?string \$name): object
            {
                return \$this->model;
            }
        };

        Assert::assertSame(\$result, (array) \$controller->getEntityFormOptionsPublic()['fields']); // Calling once, should be live
        Assert::assertSame(\$result, (array) \$controller->getEntityFormOptionsPublic()['fields']); // Calling twice, should be cached
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
        return "@bundles/LeadBundle/Tests/Controller/Api/CustomFieldsApiControllerTraitTest.php";
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
        return new Source("", "@bundles/LeadBundle/Tests/Controller/Api/CustomFieldsApiControllerTraitTest.php", "/app/docroot/app/bundles/LeadBundle/Tests/Controller/Api/CustomFieldsApiControllerTraitTest.php");
    }
}
