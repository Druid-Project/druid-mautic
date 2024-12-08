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

/* @bundles/IntegrationsBundle/Sync/DAO/Sync/Order/ObjectMappingsDAO.php */
class __TwigTemplate_d5de14023f496288751afcb193712098 extends Template
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

namespace Mautic\\IntegrationsBundle\\Sync\\DAO\\Sync\\Order;

use Mautic\\IntegrationsBundle\\Entity\\ObjectMapping;

class ObjectMappingsDAO
{
    /**
     * @var ObjectMapping[]
     */
    private array \$updatedMappings = [];

    /**
     * @var ObjectMapping[]
     */
    private array \$newMappings = [];

    public function addUpdatedObjectMapping(ObjectMapping \$objectMapping): void
    {
        \$this->updatedMappings[] = \$objectMapping;
    }

    public function addNewObjectMapping(ObjectMapping \$objectMapping): void
    {
        \$this->newMappings[] = \$objectMapping;
    }

    /**
     * @return ObjectMapping[]
     */
    public function getUpdatedMappings(): array
    {
        return \$this->updatedMappings;
    }

    /**
     * @return ObjectMapping[]
     */
    public function getNewMappings(): array
    {
        return \$this->newMappings;
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
        return "@bundles/IntegrationsBundle/Sync/DAO/Sync/Order/ObjectMappingsDAO.php";
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
        return new Source("", "@bundles/IntegrationsBundle/Sync/DAO/Sync/Order/ObjectMappingsDAO.php", "/app/docroot/app/bundles/IntegrationsBundle/Sync/DAO/Sync/Order/ObjectMappingsDAO.php");
    }
}
