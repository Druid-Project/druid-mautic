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

/* @bundles/ConfigBundle/EventListener/ConfigSubscriber.php */
class __TwigTemplate_a25da5b5cd679b45b3bcb95798056652 extends Template
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

namespace Mautic\\ConfigBundle\\EventListener;

use Mautic\\ConfigBundle\\ConfigEvents;
use Mautic\\ConfigBundle\\Event\\ConfigEvent;
use Mautic\\ConfigBundle\\Service\\ConfigChangeLogger;
use Mautic\\CoreBundle\\Entity\\AuditLogRepository;
use Mautic\\CoreBundle\\Entity\\IpAddressRepository;
use Mautic\\CoreBundle\\Helper\\CoreParametersHelper;
use Symfony\\Component\\EventDispatcher\\EventSubscriberInterface;

class ConfigSubscriber implements EventSubscriberInterface
{
    public function __construct(
        private ConfigChangeLogger \$configChangeLogger,
        private IpAddressRepository \$ipAddressRepository,
        private CoreParametersHelper \$coreParametersHelper,
        private AuditLogRepository \$auditLogRepository
    ) {
    }

    public static function getSubscribedEvents(): array
    {
        return [
            ConfigEvents::CONFIG_POST_SAVE => ['onConfigPostSave', 0],
        ];
    }

    public function onConfigPostSave(ConfigEvent \$event): void
    {
        if (\$originalNormData = \$event->getOriginalNormData()) {
            \$normData = \$event->getNormData();
            // We have something to log
            \$this->configChangeLogger
                ->setOriginalNormData(\$originalNormData)
                ->log(\$normData);

            if (!isset(\$originalNormData['trackingconfig']) && !isset(\$normData['trackingconfig'])) {
                return;
            }

            \$oldAnonymizeIp = \$originalNormData['trackingconfig']['parameters']['anonymize_ip'];
            \$newAnonymizeIp = \$normData['trackingconfig']['anonymize_ip'];

            if (\$oldAnonymizeIp !== \$newAnonymizeIp && \$newAnonymizeIp && !\$this->coreParametersHelper->get('anonymize_ip_address_in_background', false)) {
                \$this->ipAddressRepository->anonymizeAllIpAddress();
                \$this->auditLogRepository->anonymizeAllIpAddress();
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
        return "@bundles/ConfigBundle/EventListener/ConfigSubscriber.php";
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
        return new Source("", "@bundles/ConfigBundle/EventListener/ConfigSubscriber.php", "/app/docroot/app/bundles/ConfigBundle/EventListener/ConfigSubscriber.php");
    }
}
