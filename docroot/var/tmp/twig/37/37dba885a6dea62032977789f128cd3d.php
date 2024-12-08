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

/* @bundles/IntegrationsBundle/Sync/DAO/Sync/Order/NotificationDAO.php */
class __TwigTemplate_ad320b7d1a68658fc591ec9c41959581 extends Template
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

class NotificationDAO
{
    public function __construct(
        private ObjectChangeDAO \$objectChangeDAO,
        private string \$message
    ) {
    }

    /**
     * @return ObjectChangeDAO
     */
    public function getMauticObject(): string
    {
        return \$this->objectChangeDAO->getMappedObject();
    }

    public function getMauticObjectId(): int
    {
        return (int) \$this->objectChangeDAO->getMappedObjectId();
    }

    public function getIntegration(): string
    {
        return \$this->objectChangeDAO->getIntegration();
    }

    public function getIntegrationObject(): string
    {
        return \$this->objectChangeDAO->getObject();
    }

    /**
     * @return mixed
     */
    public function getIntegrationObjectId()
    {
        return \$this->objectChangeDAO->getObjectId();
    }

    public function getMessage(): string
    {
        return \$this->message;
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
        return "@bundles/IntegrationsBundle/Sync/DAO/Sync/Order/NotificationDAO.php";
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
        return new Source("", "@bundles/IntegrationsBundle/Sync/DAO/Sync/Order/NotificationDAO.php", "/app/docroot/app/bundles/IntegrationsBundle/Sync/DAO/Sync/Order/NotificationDAO.php");
    }
}
