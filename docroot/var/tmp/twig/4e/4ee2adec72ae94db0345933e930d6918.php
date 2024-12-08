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

/* @bundles/IntegrationsBundle/Tests/Unit/Sync/DAO/Sync/Order/OrderDAOTest.php */
class __TwigTemplate_204d0ef541d98c3a9cbd4e452d316ce7 extends Template
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

use Mautic\\IntegrationsBundle\\Sync\\DAO\\Sync\\Order\\ObjectChangeDAO;
use Mautic\\IntegrationsBundle\\Sync\\DAO\\Sync\\Order\\OrderDAO;
use PHPUnit\\Framework\\Assert;
use PHPUnit\\Framework\\TestCase;

final class OrderDAOTest extends TestCase
{
    /**
     * Test that the retry object is removed from the synced objects and the success object is present.
     */
    public function testGetSuccessfullySyncedObjects(): void
    {
        \$orderDAO      = new OrderDAO(new \\DateTimeImmutable(), false, 'IntegrationA');
        \$successObject = new ObjectChangeDAO('IntegrationA', 'Contact', 'integration-id-1', 'lead', 123);
        \$retryObject   = new ObjectChangeDAO('IntegrationA', 'Contact', 'integration-id-2', 'lead', 456);

        \$orderDAO->addObjectChange(\$successObject);
        \$orderDAO->addObjectChange(\$retryObject);
        \$orderDAO->retrySyncLater(\$retryObject);

        Assert::assertSame(
            [\$successObject],
            \$orderDAO->getSuccessfullySyncedObjects()
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
        return "@bundles/IntegrationsBundle/Tests/Unit/Sync/DAO/Sync/Order/OrderDAOTest.php";
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
        return new Source("", "@bundles/IntegrationsBundle/Tests/Unit/Sync/DAO/Sync/Order/OrderDAOTest.php", "/app/docroot/app/bundles/IntegrationsBundle/Tests/Unit/Sync/DAO/Sync/Order/OrderDAOTest.php");
    }
}
