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

/* @bundles/EmailBundle/EventListener/PageSubscriber.php */
class __TwigTemplate_a77c9b81c813beebed4605bca67e6513 extends Template
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

use Mautic\\CampaignBundle\\Executioner\\RealTimeExecutioner;
use Mautic\\EmailBundle\\Model\\EmailModel;
use Mautic\\PageBundle\\Event as Events;
use Mautic\\PageBundle\\PageEvents;
use Symfony\\Component\\EventDispatcher\\EventSubscriberInterface;
use Symfony\\Component\\HttpFoundation\\RequestStack;

class PageSubscriber implements EventSubscriberInterface
{
    public function __construct(
        private EmailModel \$emailModel,
        private RealTimeExecutioner \$realTimeExecutioner,
        private RequestStack \$requestStack
    ) {
    }

    public static function getSubscribedEvents(): array
    {
        return [
            PageEvents::PAGE_ON_HIT => ['onPageHit', 0],
        ];
    }

    /**
     * Trigger point actions for page hits.
     */
    public function onPageHit(Events\\PageHitEvent \$event): void
    {
        \$hit      = \$event->getHit();
        \$redirect = \$hit->getRedirect();

        if (\$redirect && \$email = \$hit->getEmail()) {
            // click trigger condition
            \$this->realTimeExecutioner->execute('email.click', \$hit, 'email', \$email->getId());
            // Check for an email stat
            \$clickthrough = \$event->getClickthroughData();

            if (isset(\$clickthrough['stat'])) {
                \$stat = \$this->emailModel->getEmailStatus(\$clickthrough['stat']);
            }

            if (empty(\$stat)) {
                if (\$lead = \$hit->getLead()) {
                    // Try searching by email and lead IDs
                    \$stats = \$this->emailModel->getEmailStati(\$hit->getSourceId(), \$lead->getId());
                    if (count(\$stats)) {
                        \$stat = \$stats[0];
                    }
                }
            }

            if (!empty(\$stat)) {
                // Check to see if it has been marked as opened
                if (!\$stat->isRead()) {
                    // Mark it as read
                    \$this->emailModel->hitEmail(\$stat, \$this->requestStack->getCurrentRequest() ?: \$event->getRequest());
                }
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
        return "@bundles/EmailBundle/EventListener/PageSubscriber.php";
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
        return new Source("", "@bundles/EmailBundle/EventListener/PageSubscriber.php", "/app/docroot/app/bundles/EmailBundle/EventListener/PageSubscriber.php");
    }
}
