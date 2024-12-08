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

/* @bundles/IntegrationsBundle/Tests/Unit/Sync/DAO/RelationsDAOTest.php */
class __TwigTemplate_099776b272e70af40eaa2ffb05802aef extends Template
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

namespace Mautic\\IntegrationsBundle\\Tests\\Unit\\Sync\\DAO;

use Mautic\\IntegrationsBundle\\Sync\\DAO\\Sync\\RelationsDAO;
use Mautic\\IntegrationsBundle\\Sync\\DAO\\Sync\\Report\\RelationDAO;
use PHPUnit\\Framework\\TestCase;

class RelationsDAOTest extends TestCase
{
    public function testAddRelations(): void
    {
        \$relationsDAO           = new RelationsDAO();
        \$integrationObjectId    = 'IntegrationId-123';
        \$integrationRelObjectId = 'IntegrationId-456';
        \$objectName             = 'Contact';
        \$relObjectName          = 'Account';
        \$relationObject         = new RelationDAO(
            \$objectName,
            \$relObjectName,
            \$relObjectName,
            \$integrationObjectId,
            \$integrationRelObjectId
        );

        \$relations = ['AccountId' => \$relationObject];

        \$relationsDAO->addRelations(\$relations);

        \$this->assertEquals(\$relationsDAO->current(), \$relationObject);
        \$this->assertEquals(\$relationsDAO->current()->getObjectName(), \$objectName);
        \$this->assertEquals(\$relationsDAO->current()->getRelObjectName(), \$relObjectName);
        \$this->assertEquals(\$relationsDAO->current()->getObjectIntegrationId(), \$integrationObjectId);
        \$this->assertEquals(\$relationsDAO->current()->getRelObjectIntegrationId(), \$integrationRelObjectId);
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
        return "@bundles/IntegrationsBundle/Tests/Unit/Sync/DAO/RelationsDAOTest.php";
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
        return new Source("", "@bundles/IntegrationsBundle/Tests/Unit/Sync/DAO/RelationsDAOTest.php", "/app/docroot/app/bundles/IntegrationsBundle/Tests/Unit/Sync/DAO/RelationsDAOTest.php");
    }
}
