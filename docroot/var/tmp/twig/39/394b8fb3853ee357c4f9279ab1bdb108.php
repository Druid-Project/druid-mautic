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

/* @bundles/CampaignBundle/Membership/Action/Remover.php */
class __TwigTemplate_0208091eab6927ffff1a4920fe44587f extends Template
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

namespace Mautic\\CampaignBundle\\Membership\\Action;

use Mautic\\CampaignBundle\\Entity\\Lead as CampaignMember;
use Mautic\\CampaignBundle\\Entity\\LeadEventLogRepository;
use Mautic\\CampaignBundle\\Entity\\LeadRepository;
use Mautic\\CampaignBundle\\Membership\\Exception\\ContactAlreadyRemovedFromCampaignException;
use Mautic\\CoreBundle\\Twig\\Helper\\DateHelper;
use Symfony\\Contracts\\Translation\\TranslatorInterface;

class Remover
{
    public const NAME = 'removed';

    private ?string \$unscheduledMessage;

    public function __construct(
        private LeadRepository \$leadRepository,
        private LeadEventLogRepository \$leadEventLogRepository,
        TranslatorInterface \$translator,
        DateHelper \$dateHelper
    ) {
        \$dateRemoved              = \$dateHelper->toFull(new \\DateTime());
        \$this->unscheduledMessage = \$translator->trans('mautic.campaign.member.removed', ['%date%' => \$dateRemoved]);
    }

    /**
     * @param bool \$isExit
     *
     * @throws ContactAlreadyRemovedFromCampaignException
     */
    public function updateExistingMembership(CampaignMember \$campaignMember, \$isExit): void
    {
        if (\$isExit) {
            // Contact was removed by the change campaign action or a segment
            \$campaignMember->setDateLastExited(new \\DateTime());
        } else {
            \$campaignMember->setDateLastExited(null);
        }

        if (\$campaignMember->wasManuallyRemoved()) {
            \$this->saveCampaignMember(\$campaignMember);

            // Contact was already removed from this campaign
            throw new ContactAlreadyRemovedFromCampaignException();
        }

        // Unschedule any scheduled events
        \$this->leadEventLogRepository->unscheduleEvents(\$campaignMember, \$this->unscheduledMessage);

        // Remove this contact from the campaign
        \$campaignMember->setManuallyRemoved(true);
        \$campaignMember->setManuallyAdded(false);

        \$this->saveCampaignMember(\$campaignMember);
    }

    private function saveCampaignMember(\$campaignMember): void
    {
        \$this->leadRepository->saveEntity(\$campaignMember);
        \$this->leadRepository->detachEntity(\$campaignMember);
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
        return "@bundles/CampaignBundle/Membership/Action/Remover.php";
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
        return new Source("", "@bundles/CampaignBundle/Membership/Action/Remover.php", "/app/docroot/app/bundles/CampaignBundle/Membership/Action/Remover.php");
    }
}
