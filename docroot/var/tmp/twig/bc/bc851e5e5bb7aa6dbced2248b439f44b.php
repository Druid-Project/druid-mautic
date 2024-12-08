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

/* @bundles/CampaignBundle/Executioner/ContactFinder/ScheduledContactFinder.php */
class __TwigTemplate_025572820381f8ab3f599a749ef88c1b extends Template
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

namespace Mautic\\CampaignBundle\\Executioner\\ContactFinder;

use Doctrine\\Common\\Collections\\ArrayCollection;
use Doctrine\\Common\\Collections\\Collection;
use Mautic\\CampaignBundle\\Entity\\LeadEventLog;
use Mautic\\CampaignBundle\\Executioner\\Exception\\NoContactsFoundException;
use Mautic\\LeadBundle\\Entity\\Lead;
use Mautic\\LeadBundle\\Entity\\LeadRepository;
use Psr\\Log\\LoggerInterface;

class ScheduledContactFinder
{
    public function __construct(
        private LeadRepository \$leadRepository,
        private LoggerInterface \$logger
    ) {
    }

    /**
     * Hydrate contacts with custom field value, companies, etc.
     *
     * @return Collection<int, Lead>
     */
    public function hydrateContacts(ArrayCollection \$logs): Collection
    {
        \$contactIds = [];
        /** @var LeadEventLog \$log */
        foreach (\$logs as \$log) {
            \$contactIds[] = \$log->getLead()->getId();
        }

        if (!count(\$contactIds)) {
            // Just a precaution in case non-existent contacts are lingering in the campaign leads table
            \$this->logger->debug('CAMPAIGN: No contact entities found.');

            throw new NoContactsFoundException();
        }

        \$contacts = \$this->leadRepository->getContactCollection(\$contactIds);

        foreach (\$logs as \$key => \$log) {
            \$contactId = \$log->getLead()->getId();
            if (!\$contact = \$contacts->get(\$contactId)) {
                // the contact must have been deleted mid execution so remove this log from memory
                \$logs->remove(\$key);

                continue;
            }

            \$log->setLead(\$contact);
        }

        return \$contacts;
    }

    /**
     * Clear Lead entities from memory.
     *
     * @param Collection<int, Lead> \$contacts
     */
    public function clear(Collection \$contacts): void
    {
        \$this->leadRepository->detachEntities(\$contacts->toArray());
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
        return "@bundles/CampaignBundle/Executioner/ContactFinder/ScheduledContactFinder.php";
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
        return new Source("", "@bundles/CampaignBundle/Executioner/ContactFinder/ScheduledContactFinder.php", "/app/docroot/app/bundles/CampaignBundle/Executioner/ContactFinder/ScheduledContactFinder.php");
    }
}
