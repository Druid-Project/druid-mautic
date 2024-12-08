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

/* @bundles/IntegrationsBundle/Sync/DAO/Sync/Report/RelationDAO.php */
class __TwigTemplate_92fe750452fa57b631a3203ab6bf46bb extends Template
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

namespace Mautic\\IntegrationsBundle\\Sync\\DAO\\Sync\\Report;

class RelationDAO
{
    private ?int \$relObjectInternalId = null;

    public function __construct(
        private string \$objectName,
        private string \$relFieldName,
        private string \$relObjectName,
        private string \$objectIntegrationId,
        private string \$relObjectIntegrationId
    ) {
    }

    public function getObjectName(): string
    {
        return \$this->objectName;
    }

    public function getRelObjectName(): string
    {
        return \$this->relObjectName;
    }

    public function getRelFieldName(): string
    {
        return \$this->relFieldName;
    }

    public function getObjectIntegrationId(): string
    {
        return \$this->objectIntegrationId;
    }

    public function getRelObjectIntegrationId(): string
    {
        return \$this->relObjectIntegrationId;
    }

    public function getRelObjectInternalId(): ?int
    {
        return \$this->relObjectInternalId;
    }

    public function setRelObjectInternalId(int \$relObjectInternalId): void
    {
        \$this->relObjectInternalId = \$relObjectInternalId;
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
        return "@bundles/IntegrationsBundle/Sync/DAO/Sync/Report/RelationDAO.php";
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
        return new Source("", "@bundles/IntegrationsBundle/Sync/DAO/Sync/Report/RelationDAO.php", "/app/docroot/app/bundles/IntegrationsBundle/Sync/DAO/Sync/Report/RelationDAO.php");
    }
}
