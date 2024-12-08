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

/* @bundles/EmailBundle/EventListener/BroadcastSubscriber.php */
class __TwigTemplate_033e678bd906fd98a6973b1bf702ae0f extends Template
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

use Doctrine\\ORM\\EntityManager;
use Mautic\\ChannelBundle\\ChannelEvents;
use Mautic\\ChannelBundle\\Event\\ChannelBroadcastEvent;
use Mautic\\EmailBundle\\Model\\EmailModel;
use Symfony\\Component\\EventDispatcher\\EventSubscriberInterface;
use Symfony\\Contracts\\Translation\\TranslatorInterface;

class BroadcastSubscriber implements EventSubscriberInterface
{
    public function __construct(
        private EmailModel \$model,
        private EntityManager \$em,
        private TranslatorInterface \$translator
    ) {
    }

    public static function getSubscribedEvents(): array
    {
        return [
            ChannelEvents::CHANNEL_BROADCAST => ['onBroadcast', 0],
        ];
    }

    public function onBroadcast(ChannelBroadcastEvent \$event): void
    {
        if (!\$event->checkContext('email')) {
            return;
        }

        // Get list of published broadcasts or broadcast if there is only a single ID
        \$emails = \$this->model->getRepository()->getPublishedBroadcastsIterable(\$event->getId());

        foreach (\$emails as \$email) {
            \$emailEntity                                        = \$email;
            [\$sentCount, \$failedCount, \$failedRecipientsByList] = \$this->model->sendEmailToLists(
                \$emailEntity,
                null,
                \$event->getLimit(),
                \$event->getBatch(),
                \$event->getOutput(),
                \$event->getMinContactIdFilter(),
                \$event->getMaxContactIdFilter(),
                \$event->getMaxThreads(),
                \$event->getThreadId()
            );

            \$event->setResults(
                \$this->translator->trans('mautic.email.email').': '.\$emailEntity->getName(),
                \$sentCount,
                \$failedCount,
                \$failedRecipientsByList
            );
            \$this->em->detach(\$emailEntity);
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
        return "@bundles/EmailBundle/EventListener/BroadcastSubscriber.php";
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
        return new Source("", "@bundles/EmailBundle/EventListener/BroadcastSubscriber.php", "/app/docroot/app/bundles/EmailBundle/EventListener/BroadcastSubscriber.php");
    }
}
