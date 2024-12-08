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

/* @bundles/IntegrationsBundle/Sync/SyncDataExchange/Internal/ObjectHelper/ObjectHelperInterface.php */
class __TwigTemplate_8ae8ecebd9d75e2012ee9b9bc036f69b extends Template
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

namespace Mautic\\IntegrationsBundle\\Sync\\SyncDataExchange\\Internal\\ObjectHelper;

use Mautic\\IntegrationsBundle\\Entity\\ObjectMapping;
use Mautic\\IntegrationsBundle\\Sync\\DAO\\Mapping\\UpdatedObjectMappingDAO;
use Mautic\\IntegrationsBundle\\Sync\\DAO\\Sync\\Order\\ObjectChangeDAO;

interface ObjectHelperInterface
{
    /**
     * @param ObjectChangeDAO[] \$objects
     *
     * @return ObjectMapping[]
     */
    public function create(array \$objects): array;

    /**
     * @param ObjectChangeDAO[] \$objects
     *
     * @return UpdatedObjectMappingDAO[]
     */
    public function update(array \$ids, array \$objects): array;

    /**
     * @param int \$start
     * @param int \$limit
     */
    public function findObjectsBetweenDates(\\DateTimeInterface \$from, \\DateTimeInterface \$to, \$start, \$limit): array;

    public function findObjectsByIds(array \$ids): array;

    public function findObjectsByFieldValues(array \$fields): array;
}
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@bundles/IntegrationsBundle/Sync/SyncDataExchange/Internal/ObjectHelper/ObjectHelperInterface.php";
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
        return new Source("", "@bundles/IntegrationsBundle/Sync/SyncDataExchange/Internal/ObjectHelper/ObjectHelperInterface.php", "/app/docroot/app/bundles/IntegrationsBundle/Sync/SyncDataExchange/Internal/ObjectHelper/ObjectHelperInterface.php");
    }
}
