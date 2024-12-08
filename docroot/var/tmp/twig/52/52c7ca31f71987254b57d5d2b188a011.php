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

/* @bundles/IntegrationsBundle/Tests/Unit/Sync/DAO/Sync/Order/ObjectChangeDAOTest.php */
class __TwigTemplate_6bed5219e5b69c3ae68d2f51929db4d9 extends Template
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

namespace Mautic\\IntegrationsBundle\\Tests\\Unit\\Sync\\DAO\\Sync\\Order;

use Mautic\\IntegrationsBundle\\Entity\\ObjectMapping;
use Mautic\\IntegrationsBundle\\Sync\\DAO\\Sync\\Order\\FieldDAO;
use Mautic\\IntegrationsBundle\\Sync\\DAO\\Sync\\Order\\ObjectChangeDAO;
use Mautic\\IntegrationsBundle\\Sync\\DAO\\Sync\\Report\\FieldDAO as ReportFieldDAO;
use Mautic\\IntegrationsBundle\\Sync\\DAO\\Value\\NormalizedValueDAO;
use PHPUnit\\Framework\\Assert;
use PHPUnit\\Framework\\TestCase;

class ObjectChangeDAOTest extends TestCase
{
    public function testGetUnchangedFields(): void
    {
        \$fieldDAO = new FieldDAO('email', new NormalizedValueDAO('email', 'test@test.com'));

        \$objectChangeDAO = new ObjectChangeDAO('foo', 'bar', 1, 'contact', 1);
        \$objectChangeDAO->addField(\$fieldDAO, ReportFieldDAO::FIELD_UNCHANGED);

        \$unchangedFields = \$objectChangeDAO->getUnchangedFields();
        Assert::assertCount(1, \$unchangedFields);
        Assert::assertArrayHasKey('email', \$unchangedFields);
        Assert::assertSame(\$fieldDAO, \$unchangedFields['email']);
    }

    public function testSetAndGetObjectMapping(): void
    {
        \$objectChangeDAO = new ObjectChangeDAO('foo', 'bar', 1, 'contact', 1);
        \$objectMapping   = new ObjectMapping();

        \$objectChangeDAO->setObjectMapping(\$objectMapping);

        Assert::assertSame(\$objectMapping, \$objectChangeDAO->getObjectMapping());
    }

    public function testThatFieldCanBeRemoved(): void
    {
        \$objectChangeDAO = new ObjectChangeDAO('foo', 'bar', 1, 'contact', 1);
        \$value           = new NormalizedValueDAO('type', 1);
        \$field           = new FieldDAO('fieldName', \$value);

        Assert::assertCount(0, \$objectChangeDAO->getFields());
        \$objectChangeDAO->addField(\$field);
        Assert::assertCount(1, \$objectChangeDAO->getFields());
        \$objectChangeDAO->removeField('fieldName');
        Assert::assertCount(0, \$objectChangeDAO->getFields());
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
        return "@bundles/IntegrationsBundle/Tests/Unit/Sync/DAO/Sync/Order/ObjectChangeDAOTest.php";
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
        return new Source("", "@bundles/IntegrationsBundle/Tests/Unit/Sync/DAO/Sync/Order/ObjectChangeDAOTest.php", "/app/docroot/app/bundles/IntegrationsBundle/Tests/Unit/Sync/DAO/Sync/Order/ObjectChangeDAOTest.php");
    }
}
