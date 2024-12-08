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

/* @bundles/CampaignBundle/Executioner/Scheduler/Mode/DAO/GroupExecutionDateDAO.php */
class __TwigTemplate_7e30cd4a4e81064d6e49989b97de484b extends Template
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

namespace Mautic\\CampaignBundle\\Executioner\\Scheduler\\Mode\\DAO;

use Doctrine\\Common\\Collections\\ArrayCollection;
use Mautic\\LeadBundle\\Entity\\Lead;

class GroupExecutionDateDAO
{
    private ArrayCollection \$contacts;

    public function __construct(
        private \\DateTimeInterface \$executionDate
    ) {
        \$this->contacts      = new ArrayCollection();
    }

    public function addContact(Lead \$contact): void
    {
        \$this->contacts->set(\$contact->getId(), \$contact);
    }

    /**
     * @return \\DateTimeInterface
     */
    public function getExecutionDate()
    {
        return \$this->executionDate;
    }

    /**
     * @return ArrayCollection
     */
    public function getContacts()
    {
        return \$this->contacts;
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
        return "@bundles/CampaignBundle/Executioner/Scheduler/Mode/DAO/GroupExecutionDateDAO.php";
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
        return new Source("", "@bundles/CampaignBundle/Executioner/Scheduler/Mode/DAO/GroupExecutionDateDAO.php", "/app/docroot/app/bundles/CampaignBundle/Executioner/Scheduler/Mode/DAO/GroupExecutionDateDAO.php");
    }
}
