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

/* @bundles/CampaignBundle/Executioner/Helper/DecisionHelper.php */
class __TwigTemplate_58d4b124ccbb8b15d38c228cac6b842a extends Template
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

namespace Mautic\\CampaignBundle\\Executioner\\Helper;

use Mautic\\CampaignBundle\\Entity\\Event;
use Mautic\\CampaignBundle\\Entity\\LeadRepository;
use Mautic\\CampaignBundle\\Executioner\\Exception\\DecisionNotApplicableException;
use Mautic\\LeadBundle\\Entity\\Lead;

class DecisionHelper
{
    public function __construct(
        private LeadRepository \$leadRepository
    ) {
    }

    /**
     * @throws DecisionNotApplicableException
     */
    public function checkIsDecisionApplicableForContact(Event \$event, Lead \$contact, ?string \$channel = null, ?int \$channelId = null): void
    {
        if (Event::TYPE_DECISION !== \$event->getEventType()) {
            @trigger_error(
                \"{\$event->getType()} is not assigned to a decision and no longer supported. \".
                'Check that you are executing RealTimeExecutioner::execute for an event registered as a decision.',
                E_USER_DEPRECATED
            );

            throw new DecisionNotApplicableException(\"Event {\$event->getId()} is not a decision.\");
        }

        // If channels do not match up at all (not even fuzzy logic i.e. page vs page.redirect), there's no need to go further
        if (\$channel && \$event->getChannel() && !str_contains(\$channel, \$event->getChannel())) {
            throw new DecisionNotApplicableException(\"Channels, \$channel and {\$event->getChannel()}, do not match.\");
        }

        if (\$channel && \$channelId && \$event->getChannelId() && \$channelId !== \$event->getChannelId()) {
            throw new DecisionNotApplicableException(\"Channel IDs, \$channelId and {\$event->getChannelId()}, do not match for \$channel.\");
        }

        // Check if parent taken path is the path of this event, otherwise exit
        \$parentEvent = \$event->getParent();

        if (null !== \$parentEvent && !\$parentEvent->isDeleted() && null !== \$event->getDecisionPath()) {
            \$rotation      = \$this->leadRepository->getContactRotations([\$contact->getId()], \$event->getCampaign()->getId());
            \$rotationValue = isset(\$rotation[\$contact->getId()]) ? \$rotation[\$contact->getId()]['rotation'] : null;
            \$log           = \$parentEvent->getLogByContactAndRotation(\$contact, \$rotationValue);

            if (null === \$log) {
                throw new DecisionNotApplicableException(\"Parent {\$parentEvent->getId()} has not been fired, event {\$event->getId()} should not be fired.\");
            }

            \$pathTaken   = (int) \$log->getNonActionPathTaken();

            if (1 === \$pathTaken && !\$parentEvent->getNegativeChildren()->contains(\$event)) {
                throw new DecisionNotApplicableException(\"Parent {\$parentEvent->getId()} take negative path, event {\$event->getId()} is on positive path.\");
            } elseif (0 === \$pathTaken && !\$parentEvent->getPositiveChildren()->contains(\$event)) {
                throw new DecisionNotApplicableException(\"Parent {\$parentEvent->getId()} take positive path, event {\$event->getId()} is on negative path.\");
            }
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
        return "@bundles/CampaignBundle/Executioner/Helper/DecisionHelper.php";
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
        return new Source("", "@bundles/CampaignBundle/Executioner/Helper/DecisionHelper.php", "/app/docroot/app/bundles/CampaignBundle/Executioner/Helper/DecisionHelper.php");
    }
}
