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

/* @bundles/CampaignBundle/Entity/ReplicaConnectionTrait.php */
class __TwigTemplate_393128af5c0d971aa4b115d43450f27b extends Template
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

namespace Mautic\\CampaignBundle\\Entity;

use Doctrine\\DBAL\\Connection;
use Doctrine\\DBAL\\Connections\\PrimaryReadReplicaConnection;
use Mautic\\CampaignBundle\\Executioner\\ContactFinder\\Limiter\\ContactLimiter;

/**
 * Trait ReplicaConnectionTrait.
 */
trait ReplicaConnectionTrait
{
    /**
     * Get a connection, preferring a replica connection if available and prudent.
     *
     * If a query is being executed with a limiter with specific contacts
     * then this could be a real-time request being handled so we should avoid forcing a replica connection.
     */
    private function getReplicaConnection(ContactLimiter \$limiter = null): Connection
    {
        /** @var Connection \$connection */
        \$connection = \$this->getEntityManager()->getConnection();
        if (\$connection instanceof PrimaryReadReplicaConnection) {
            if (
                !\$limiter
                || !(\$limiter->getContactId() || \$limiter->getContactIdList())
            ) {
                \$connection->ensureConnectedToReplica();
            }
        }

        return \$connection;
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
        return "@bundles/CampaignBundle/Entity/ReplicaConnectionTrait.php";
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
        return new Source("", "@bundles/CampaignBundle/Entity/ReplicaConnectionTrait.php", "/app/docroot/app/bundles/CampaignBundle/Entity/ReplicaConnectionTrait.php");
    }
}
