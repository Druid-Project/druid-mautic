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

/* @bundles/IntegrationsBundle/Sync/DAO/Mapping/RemappedObjectDAO.php */
class __TwigTemplate_3e4e2a737af677c5888103b50542e857 extends Template
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

class RemappedObjectDAO
{
    /**
     * @param mixed \$oldObjectId
     * @param mixed \$newObjectId
     */
    public function __construct(
        private string \$integration,
        private string \$oldObjectName,
        private \$oldObjectId,
        private string \$newObjectName,
        private \$newObjectId
    ) {
    }

    public function getIntegration(): string
    {
        return \$this->integration;
    }

    public function getOldObjectName(): string
    {
        return \$this->oldObjectName;
    }

    /**
     * @return mixed
     */
    public function getOldObjectId()
    {
        return \$this->oldObjectId;
    }

    public function getNewObjectName(): string
    {
        return \$this->newObjectName;
    }

    /**
     * @return mixed
     */
    public function getNewObjectId()
    {
        return \$this->newObjectId;
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
        return "@bundles/IntegrationsBundle/Sync/DAO/Mapping/RemappedObjectDAO.php";
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
        return new Source("", "@bundles/IntegrationsBundle/Sync/DAO/Mapping/RemappedObjectDAO.php", "/app/docroot/app/bundles/IntegrationsBundle/Sync/DAO/Mapping/RemappedObjectDAO.php");
    }
}
