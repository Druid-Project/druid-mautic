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

/* @bundles/ChannelBundle/Model/ChannelActionModel.php */
class __TwigTemplate_09c548e25c823fc80c3a345a3bdf4e54 extends Template
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

namespace Mautic\\ChannelBundle\\Model;

use Mautic\\LeadBundle\\Entity\\DoNotContact as DNC;
use Mautic\\LeadBundle\\Entity\\Lead;
use Mautic\\LeadBundle\\Model\\DoNotContact;
use Mautic\\LeadBundle\\Model\\LeadModel;
use Symfony\\Contracts\\Translation\\TranslatorInterface;

class ChannelActionModel
{
    public function __construct(
        private LeadModel \$contactModel,
        private DoNotContact \$doNotContact,
        private TranslatorInterface \$translator
    ) {
    }

    /**
     * Update channels and frequency rules.
     */
    public function update(array \$contactIds, array \$subscribedChannels): void
    {
        \$contacts = \$this->contactModel->getLeadsByIds(\$contactIds);

        foreach (\$contacts as \$contact) {
            if (!\$this->contactModel->canEditContact(\$contact)) {
                continue;
            }

            \$this->addChannels(\$contact, \$subscribedChannels);
            \$this->removeChannels(\$contact, \$subscribedChannels);
        }
    }

    /**
     * Add contact's channels.
     * Only resubscribe if the contact did not opt out themselves.
     */
    private function addChannels(Lead \$contact, array \$subscribedChannels): void
    {
        \$contactChannels = \$this->contactModel->getContactChannels(\$contact);

        foreach (\$subscribedChannels as \$subscribedChannel) {
            if (!array_key_exists(\$subscribedChannel, \$contactChannels)) {
                \$contactable = \$this->doNotContact->isContactable(\$contact, \$subscribedChannel);
                if (DNC::UNSUBSCRIBED !== \$contactable) {
                    \$this->doNotContact->removeDncForContact(\$contact->getId(), \$subscribedChannel);
                }
            }
        }
    }

    /**
     * Remove contact's channels.
     */
    private function removeChannels(Lead \$contact, array \$subscribedChannels): void
    {
        \$allChannels = \$this->contactModel->getPreferenceChannels();
        \$dncChannels = array_diff(\$allChannels, \$subscribedChannels);

        foreach (\$dncChannels as \$channel) {
            \$this->doNotContact->addDncForContact(
                \$contact->getId(),
                \$channel,
                DNC::MANUAL,
                \$this->translator->trans('mautic.lead.event.donotcontact_manual')
            );
        }
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
        return "@bundles/ChannelBundle/Model/ChannelActionModel.php";
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
        return new Source("", "@bundles/ChannelBundle/Model/ChannelActionModel.php", "/app/docroot/app/bundles/ChannelBundle/Model/ChannelActionModel.php");
    }
}
