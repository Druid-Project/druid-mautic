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

/* @bundles/IntegrationsBundle/Tests/Unit/Sync/DAO/Sync/Order/ObjectMappingsDAOTest.php */
class __TwigTemplate_98855cb460983accd67886d14337b077 extends Template
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
use Mautic\\IntegrationsBundle\\Sync\\DAO\\Sync\\Order\\ObjectMappingsDAO;
use PHPUnit\\Framework\\Assert;
use PHPUnit\\Framework\\TestCase;

class ObjectMappingsDAOTest extends TestCase
{
    public function testGetters(): void
    {
        \$objectMappings = new ObjectMappingsDAO();

        \$objectMappings->addNewObjectMapping((new ObjectMapping())->setIntegrationObjectName('foonew'));
        \$objectMappings->addNewObjectMapping((new ObjectMapping())->setIntegrationObjectName('barnew'));
        \$mappings = \$objectMappings->getNewMappings();
        Assert::assertCount(2, \$mappings);
        Assert::assertEquals('foonew', \$mappings[0]->getIntegrationObjectName());
        Assert::assertEquals('barnew', \$mappings[1]->getIntegrationObjectName());

        \$objectMappings->addUpdatedObjectMapping((new ObjectMapping())->setIntegrationObjectName('fooupdate'));
        \$objectMappings->addUpdatedObjectMapping((new ObjectMapping())->setIntegrationObjectName('barupdate'));
        \$mappings = \$objectMappings->getUpdatedMappings();
        Assert::assertCount(2, \$mappings);
        Assert::assertEquals('fooupdate', \$mappings[0]->getIntegrationObjectName());
        Assert::assertEquals('barupdate', \$mappings[1]->getIntegrationObjectName());
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
        return "@bundles/IntegrationsBundle/Tests/Unit/Sync/DAO/Sync/Order/ObjectMappingsDAOTest.php";
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
        return new Source("", "@bundles/IntegrationsBundle/Tests/Unit/Sync/DAO/Sync/Order/ObjectMappingsDAOTest.php", "/app/docroot/app/bundles/IntegrationsBundle/Tests/Unit/Sync/DAO/Sync/Order/ObjectMappingsDAOTest.php");
    }
}
