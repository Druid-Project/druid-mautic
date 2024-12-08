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

/* @bundles/CampaignBundle/Helper/RemovedContactTracker.php */
class __TwigTemplate_9508583b9e92a7edd1ada6c971ac9f20 extends Template
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

namespace Mautic\\CampaignBundle\\Helper;

class RemovedContactTracker
{
    private array \$removedContacts = [];

    /**
     * @param int \$campaignId
     * @param int \$contactId
     */
    public function addRemovedContact(\$campaignId, \$contactId): void
    {
        if (!isset(\$this->removedContacts[\$campaignId])) {
            \$this->removedContacts[\$campaignId] = [];
        }

        \$this->removedContacts[\$campaignId][\$contactId] = \$contactId;
    }

    /**
     * @param int \$campaignId
     */
    public function addRemovedContacts(\$campaignId, array \$contactIds): void
    {
        foreach (\$contactIds as \$contactId) {
            \$this->addRemovedContact(\$campaignId, \$contactId);
        }
    }

    /**
     * @param int \$campaignId
     */
    public function clearRemovedContact(\$campaignId, \$contactId): void
    {
        unset(\$this->removedContacts[\$campaignId][\$contactId]);
    }

    /**
     * @param int \$campaignId
     */
    public function wasContactRemoved(\$campaignId, \$contactId): bool
    {
        return !empty(\$this->removedContacts[\$campaignId][\$contactId]);
    }

    /**
     * @return array
     */
    public function getRemovedContacts()
    {
        return \$this->removedContacts;
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
        return "@bundles/CampaignBundle/Helper/RemovedContactTracker.php";
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
        return new Source("", "@bundles/CampaignBundle/Helper/RemovedContactTracker.php", "/app/docroot/app/bundles/CampaignBundle/Helper/RemovedContactTracker.php");
    }
}
