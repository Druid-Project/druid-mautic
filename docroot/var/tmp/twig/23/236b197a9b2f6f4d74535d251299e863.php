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

/* @bundles/MessengerBundle/MessageHandler/PageHitNotificationHandler.php */
class __TwigTemplate_bfa62e5cf9785c56eb0223fd24bb4f61 extends Template
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

namespace Mautic\\MessengerBundle\\MessageHandler;

use Mautic\\LeadBundle\\Entity\\LeadRepository;
use Mautic\\MessengerBundle\\Exceptions\\InvalidPayloadException;
use Mautic\\MessengerBundle\\Message\\PageHitNotification;
use Mautic\\PageBundle\\Entity\\Hit;
use Mautic\\PageBundle\\Entity\\HitRepository;
use Mautic\\PageBundle\\Entity\\PageRepository;
use Mautic\\PageBundle\\Entity\\RedirectRepository;
use Mautic\\PageBundle\\Model\\PageModel;
use Psr\\Log\\LoggerInterface;
use Symfony\\Component\\Messenger\\Handler\\Acknowledger;
use Symfony\\Component\\Messenger\\Handler\\MessageHandlerInterface;

class PageHitNotificationHandler implements MessageHandlerInterface
{
    public function __construct(
        private PageRepository \$pageRepository,
        private HitRepository \$hitRepository,
        private LeadRepository \$leadRepository,
        private LoggerInterface \$logger,
        private RedirectRepository \$redirectRepository,
        private PageModel \$pageModel
    ) {
    }

    /**
     * @throws InvalidPayloadException
     */
    public function __invoke(PageHitNotification \$message, Acknowledger \$ack = null): void
    {
        \$parsed = \$this->parseMessage(\$message);
        \$this->pageModel->processPageHit(...\$parsed);
        \$this->logger->info('processed page hit #'.\$message->getHitId());
    }

    /**
     * @return array<string, mixed>
     *
     * @throws InvalidPayloadException
     */
    private function parseMessage(PageHitNotification \$message): array
    {
        \$hit = \$message->getHitId() > 0 ? \$this->hitRepository->find(\$message->getHitId()) : null;

        \$pageObject = null;
        if (null !== \$message->getPageId()) {
            try {
                \$pageObject = \$message->isRedirect()
                    ? \$this->redirectRepository->find(\$message->getPageId())
                    : \$this->pageRepository->find(\$message->getPageId());
            } catch (\\Exception \$exception) {
                \$this->logger->error(
                    sprintf('Invalid page/redirect, exception. #%s', \$message->getPageId()),
                    ['message' => \$message]
                );
                throw \$exception;
            }

            if (null === \$pageObject) {
                \$this->logger->error(
                    sprintf('Invalid page/redirect, id not found. #%s', \$message->getPageId())
                );
                throw new InvalidPayloadException('Missing required information', ['message' => \$message]);
            }
        }

        if (!\$hit instanceof Hit && \$message->getHitId() > 0) {
            \$this->logger->warning('Invalid hit id #'.\$message->getHitId(), ['message' => \$message]);

            throw new InvalidPayloadException('Invalid hit id #'.\$message->getHitId(), (array) \$message);
        }

        //  Lead IS mandatory field
        if (null === \$lead = \$this->leadRepository->find(\$message->getLeadId())) {
            \$this->logger->error('Invalid lead id #'.\$message->getLeadId(), ['message' => \$message]);

            throw new InvalidPayloadException('Invalid lead id', (array) \$message);
        }

        return [
            'hit'                    => \$hit,
            'page'                   => \$pageObject,
            'request'                => \$message->getRequest(),
            'lead'                   => \$lead,
            'trackingNewlyGenerated' => \$message->isNew(),
            'activeRequest'          => false,
            'hitDate'                => \$message->getEventTime(),
        ];
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
        return "@bundles/MessengerBundle/MessageHandler/PageHitNotificationHandler.php";
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
        return new Source("", "@bundles/MessengerBundle/MessageHandler/PageHitNotificationHandler.php", "/app/docroot/app/bundles/MessengerBundle/MessageHandler/PageHitNotificationHandler.php");
    }
}
