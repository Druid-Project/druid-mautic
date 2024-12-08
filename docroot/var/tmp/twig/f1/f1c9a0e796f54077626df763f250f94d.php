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

/* @bundles/EmailBundle/EventListener/TrackingSubscriber.php */
class __TwigTemplate_4b1b7ec77cf243527a5897569d601cd4 extends Template
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

namespace Mautic\\EmailBundle\\EventListener;

use Mautic\\EmailBundle\\Entity\\Stat;
use Mautic\\EmailBundle\\Entity\\StatRepository;
use Mautic\\LeadBundle\\Event\\ContactIdentificationEvent;
use Mautic\\LeadBundle\\LeadEvents;
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
        if (empty(\$clickthrough['channel']['email']) && empty(\$clickthrough['stat'])) {
            return;
        }

        /** @var Stat \$stat */
        \$stat = \$this->statRepository->findOneBy(['trackingHash' => \$clickthrough['stat']]);

        if (!\$stat) {
            // Stat doesn't exist so use the tracked lead
            return;
        }

        if (\$stat->getEmail() && (int) \$stat->getEmail()->getId() !== (int) \$clickthrough['channel']['email']) {
            // ID mismatch - fishy so use tracked lead
            return;
        }

        if (!\$contact = \$stat->getLead()) {
            return;
        }

        \$event->setIdentifiedContact(\$contact, 'email');
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
        return "@bundles/EmailBundle/EventListener/TrackingSubscriber.php";
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
        return new Source("", "@bundles/EmailBundle/EventListener/TrackingSubscriber.php", "/app/docroot/app/bundles/EmailBundle/EventListener/TrackingSubscriber.php");
    }
}
