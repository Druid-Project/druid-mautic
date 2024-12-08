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

/* @bundles/ApiBundle/Tests/EntityResultHelperTest.php */
class __TwigTemplate_4ab6772c221c12afa0ac4c3e3691dbdd extends Template
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

namespace Mautic\\ApiBundle\\Tests;

use Doctrine\\ORM\\Tools\\Pagination\\Paginator;
use Mautic\\ApiBundle\\Helper\\EntityResultHelper;
use Mautic\\LeadBundle\\Entity\\Lead;
use PHPUnit\\Framework\\TestCase;

class EntityResultHelperTest extends TestCase
{
    public const NEW_TITLE = 'Callback Title';

    public function testGetArrayEntities(): void
    {
        \$resultHelper = new EntityResultHelper();

        \$lead2 = new Lead();
        \$lead2->setId(2);

        \$lead5 = new Lead();
        \$lead5->setId(5);

        \$results = [2 => \$lead2, 5 => \$lead5];

        \$arrayResult = \$resultHelper->getArray(\$results);

        \$this->assertEquals(\$results, \$arrayResult);

        \$arrayResult = \$resultHelper->getArray(\$results, function (\$entity): void {
            \$this->modifyEntityData(\$entity);
        });

        foreach (\$arrayResult as \$entity) {
            \$this->assertEquals(\$entity->getTitle(), self::NEW_TITLE);
        }
    }

    public function testGetArrayPaginator(): void
    {
        \$resultHelper = new EntityResultHelper();

        \$lead2 = new Lead();
        \$lead2->setId(2);

        \$lead5 = new Lead();
        \$lead5->setId(5);

        \$results = [\$lead2, \$lead5];

        \$iterator = new \\ArrayIterator(\$results);

        \$paginator = \$this->getMockBuilder(Paginator::class)
            ->disableOriginalConstructor()
            ->onlyMethods(['getIterator'])
            ->getMock();

        \$paginator->expects(\$this->any())
            ->method('getIterator')
            ->willReturn(\$iterator);

        \$arrayResult = \$resultHelper->getArray(\$paginator);

        \$this->assertEquals(\$results, \$arrayResult);

        \$arrayResult = \$resultHelper->getArray(\$results, function (\$entity): void {
            \$this->modifyEntityData(\$entity);
        });

        foreach (\$arrayResult as \$entity) {
            \$this->assertEquals(\$entity->getTitle(), self::NEW_TITLE);
        }
    }

    public function testGetArrayAppendedData(): void
    {
        \$resultHelper = new EntityResultHelper();

        \$lead2 = new Lead();
        \$lead2->setId(2);

        \$lead5 = new Lead();
        \$lead5->setId(5);

        \$lead7 = new Lead();
        \$lead7->setId(7);

        \$data = [[\$lead2, 'title' => 'Title 2'], [\$lead5, 'title' => 'Title 5'], [\$lead7, 'title' => 'Title 7']];

        \$expectedResult = [\$lead2, \$lead5, \$lead7];

        \$arrayResult = \$resultHelper->getArray(\$data);

        \$this->assertEquals(\$expectedResult, \$arrayResult);

        foreach (\$arrayResult as \$entity) {
            \$this->assertEquals(\$entity->getTitle(), 'Title '.\$entity->getId());
        }

        \$arrayResult = \$resultHelper->getArray(\$data, function (\$entity): void {
            \$this->modifyEntityData(\$entity);
        });

        foreach (\$arrayResult as \$entity) {
            \$this->assertEquals(\$entity->getTitle(), self::NEW_TITLE);
        }
    }

    private function modifyEntityData(Lead \$entity): void
    {
        \$entity->setTitle(self::NEW_TITLE);
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
        return "@bundles/ApiBundle/Tests/EntityResultHelperTest.php";
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
        return new Source("", "@bundles/ApiBundle/Tests/EntityResultHelperTest.php", "/app/docroot/app/bundles/ApiBundle/Tests/EntityResultHelperTest.php");
    }
}
