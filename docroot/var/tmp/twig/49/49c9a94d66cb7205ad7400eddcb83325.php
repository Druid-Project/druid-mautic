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

/* @bundles/IntegrationsBundle/Sync/DAO/Mapping/FieldMappingDAO.php */
class __TwigTemplate_219b1f46b916ab0eb243f6929f9db579 extends Template
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

namespace Mautic\\IntegrationsBundle\\Sync\\DAO\\Mapping;

class FieldMappingDAO
{
    private bool \$isRequired;

    /**
     * @param string \$internalObject
     * @param string \$internalField
     * @param string \$integrationObject
     * @param string \$integrationField
     * @param string \$syncDirection
     * @param bool   \$isRequired
     */
    public function __construct(
        private \$internalObject,
        private \$internalField,
        private \$integrationObject,
        private \$integrationField,
        private \$syncDirection,
        \$isRequired
    ) {
        \$this->isRequired        = (bool) \$isRequired;
    }

    /**
     * @return string
     */
    public function getInternalObject()
    {
        return \$this->internalObject;
    }

    /**
     * @return string
     */
    public function getInternalField()
    {
        return \$this->internalField;
    }

    /**
     * @return string
     */
    public function getIntegrationObject()
    {
        return \$this->integrationObject;
    }

    /**
     * @return string
     */
    public function getIntegrationField()
    {
        return \$this->integrationField;
    }

    /**
     * @return string
     */
    public function getSyncDirection()
    {
        return \$this->syncDirection;
    }

    public function isRequired(): bool
    {
        return \$this->isRequired;
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
        return "@bundles/IntegrationsBundle/Sync/DAO/Mapping/FieldMappingDAO.php";
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
        return new Source("", "@bundles/IntegrationsBundle/Sync/DAO/Mapping/FieldMappingDAO.php", "/app/docroot/app/bundles/IntegrationsBundle/Sync/DAO/Mapping/FieldMappingDAO.php");
    }
}
