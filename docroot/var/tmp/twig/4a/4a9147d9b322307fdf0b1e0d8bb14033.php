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

/* @bundles/IntegrationsBundle/Sync/DAO/Sync/Request/ObjectDAO.php */
class __TwigTemplate_657a03fd45777d9e46a93edb149c2f25 extends Template
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

namespace Mautic\\IntegrationsBundle\\Sync\\DAO\\Sync\\Request;

class ObjectDAO
{
    /**
     * @var string[]
     */
    private array \$fields = [];

    /**
     * @var string[]
     */
    private array \$requiredFields = [];

    public function __construct(
        private string \$object,
        /**
         * Date/time based on last synced date for the object or the start date/time fed through the command's arguments.
         * This value does not change between iterations.
         */
        private ?\\DateTimeInterface \$fromDateTime = null,
        /**
         * Date/Time the sync started.
         */
        private ?\\DateTimeInterface \$toDateTime = null,
        /**
         * @deprecated Not used. To be removed in Mautic 6. Use SyncDateHelper instead
         */
        private ?\\DateTimeInterface \$objectLastSyncDateTime = null
    ) {
    }

    public function getObject(): string
    {
        return \$this->object;
    }

    /**
     * @return self
     */
    public function addField(string \$field)
    {
        \$this->fields[] = \$field;

        return \$this;
    }

    /**
     * @return string[]
     */
    public function getFields(): array
    {
        return \$this->fields;
    }

    public function setRequiredFields(array \$fields): void
    {
        \$this->requiredFields = \$fields;
    }

    /**
     * @return string[]
     */
    public function getRequiredFields(): array
    {
        return \$this->requiredFields;
    }

    public function getFromDateTime(): ?\\DateTimeInterface
    {
        return \$this->fromDateTime;
    }

    public function getToDateTime(): ?\\DateTimeInterface
    {
        return \$this->toDateTime;
    }

    /**
     * @deprecated Not used. To be removed in Mautic 6. Use SyncDateHelper instead
     */
    public function getObjectLastSyncDateTime(): ?\\DateTimeInterface
    {
        return \$this->objectLastSyncDateTime;
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
        return "@bundles/IntegrationsBundle/Sync/DAO/Sync/Request/ObjectDAO.php";
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
        return new Source("", "@bundles/IntegrationsBundle/Sync/DAO/Sync/Request/ObjectDAO.php", "/app/docroot/app/bundles/IntegrationsBundle/Sync/DAO/Sync/Request/ObjectDAO.php");
    }
}
