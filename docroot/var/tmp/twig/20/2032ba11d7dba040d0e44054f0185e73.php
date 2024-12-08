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

/* @bundles/LeadBundle/Tracker/DeviceTracker.php */
class __TwigTemplate_0c0ddb4ea0ca2e30959f9289fe08040c extends Template
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

namespace Mautic\\LeadBundle\\Tracker;

use Mautic\\LeadBundle\\Entity\\Lead;
use Mautic\\LeadBundle\\Entity\\LeadDevice;
use Mautic\\LeadBundle\\Tracker\\Factory\\DeviceDetectorFactory\\DeviceDetectorFactoryInterface;
use Mautic\\LeadBundle\\Tracker\\Service\\DeviceCreatorService\\DeviceCreatorServiceInterface;
use Mautic\\LeadBundle\\Tracker\\Service\\DeviceTrackingService\\DeviceTrackingServiceInterface;
use Psr\\Log\\LoggerInterface;

class DeviceTracker
{
    private bool \$deviceWasChanged = false;

    /**
     * @var LeadDevice[]
     */
    private array \$trackedDevice = [];

    public function __construct(
        private DeviceCreatorServiceInterface \$deviceCreatorService,
        private DeviceDetectorFactoryInterface \$deviceDetectorFactory,
        private DeviceTrackingServiceInterface \$deviceTrackingService,
        private LoggerInterface \$logger
    ) {
    }

    /**
     * @return LeadDevice|null
     */
    public function createDeviceFromUserAgent(Lead \$trackedContact, \$userAgent)
    {
        \$signature = \$trackedContact->getId().\$userAgent;
        if (isset(\$this->trackedDevice[\$signature])) {
            // Prevent subsequent calls within the same session from creating multiple entries
            return \$this->trackedDevice[\$signature];
        }

        \$this->trackedDevice[\$signature] = \$trackedDevice = \$this->deviceTrackingService->getTrackedDevice();

        \$deviceDetector = \$this->deviceDetectorFactory->create(\$userAgent);
        \$deviceDetector->parse();
        \$currentDevice = \$this->deviceCreatorService->getCurrentFromDetector(\$deviceDetector, \$trackedContact);

        if ( // Do not create a new device if
            // ... the device is new
            \$trackedDevice && \$trackedDevice->getId() // ... the device is the same
            && \$trackedDevice->getSignature() === \$currentDevice->getSignature() // ... the contact given is the same as the owner of the device tracked
            && \$trackedDevice->getLead()->getId() === \$trackedContact->getId()
        ) {
            return \$trackedDevice;
        }

        // New device so record it and track it
        \$this->deviceWasChanged = true;

        \$this->trackedDevice[\$signature] = \$this->deviceTrackingService->trackCurrentDevice(\$currentDevice, true);

        return \$this->trackedDevice[\$signature];
    }

    /**
     * @return LeadDevice|null
     */
    public function getTrackedDevice()
    {
        \$trackedDevice = \$this->deviceTrackingService->getTrackedDevice();

        if (null !== \$trackedDevice) {
            \$this->logger->debug(\"LEAD: Tracking ID for this device is {\$trackedDevice->getTrackingId()}\");
        }

        return \$trackedDevice;
    }

    public function wasDeviceChanged(): bool
    {
        return \$this->deviceWasChanged;
    }

    public function clearTrackingCookies(): void
    {
        \$this->deviceTrackingService->clearTrackingCookies();
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
        return "@bundles/LeadBundle/Tracker/DeviceTracker.php";
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
        return new Source("", "@bundles/LeadBundle/Tracker/DeviceTracker.php", "/app/docroot/app/bundles/LeadBundle/Tracker/DeviceTracker.php");
    }
}
