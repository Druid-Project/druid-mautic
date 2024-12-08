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

/* @bundles/SmsBundle/EventListener/TrackingSubscriber.php */
class __TwigTemplate_f7eacc135d0d8940c912fa2057b04589 extends Template
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

namespace Mautic\\SmsBundle\\EventListener;

use Mautic\\LeadBundle\\Event\\ContactIdentificationEvent;
use Mautic\\LeadBundle\\LeadEvents;
use Mautic\\SmsBundle\\Entity\\Stat;
use Mautic\\SmsBundle\\Entity\\StatRepository;
use Symfony\\Component\\EventDispatcher\\EventSubscriberInterface;

class TrackingSubscriber implements EventSubscriberInterface
{
    public function __construct(
        private StatRepository \$statRepository
    ) {
    }

    public static function getSubscribedEvents(): array
    {
        return [
            LeadEvents::ON_CLICKTHROUGH_IDENTIFICATION => ['onIdentifyContact', 0],
        ];
    }

    public function onIdentifyContact(ContactIdentificationEvent \$event): void
    {
        \$clickthrough = \$event->getClickthrough();

        // Nothing left to identify by so stick to the tracked lead
        if (empty(\$clickthrough['channel']['sms']) && empty(\$clickthrough['stat'])) {
            return;
        }

        /** @var Stat \$stat */
        \$stat = \$this->statRepository->findOneBy(['trackingHash' => \$clickthrough['stat']]);

        if (!\$stat) {
            // Stat doesn't exist so use the tracked lead
            return;
        }

        if (\$stat->getSms() && (int) \$stat->getSms()->getId() !== (int) \$clickthrough['channel']['sms']) {
            // ID mismatch - fishy so use tracked lead
            return;
        }

        if (!\$contact = \$stat->getLead()) {
            return;
        }

        \$event->setIdentifiedContact(\$contact, 'sms');
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
        return "@bundles/SmsBundle/EventListener/TrackingSubscriber.php";
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
        return new Source("", "@bundles/SmsBundle/EventListener/TrackingSubscriber.php", "/app/docroot/app/bundles/SmsBundle/EventListener/TrackingSubscriber.php");
    }
}
