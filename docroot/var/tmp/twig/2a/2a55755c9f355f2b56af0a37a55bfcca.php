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

/* @bundles/LeadBundle/Tracker/Service/DeviceTrackingService/DeviceTrackingService.php */
class __TwigTemplate_ce1b3ae3a4c68a044bfab55c9cca8fd9 extends Template
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

namespace Mautic\\LeadBundle\\Tracker\\Service\\DeviceTrackingService;

use Doctrine\\ORM\\EntityManagerInterface;
use Mautic\\CoreBundle\\Helper\\CookieHelper;
use Mautic\\CoreBundle\\Helper\\RandomHelper\\RandomHelperInterface;
use Mautic\\CoreBundle\\Security\\Permissions\\CorePermissions;
use Mautic\\LeadBundle\\Entity\\LeadDevice;
use Mautic\\LeadBundle\\Entity\\LeadDeviceRepository;
use Symfony\\Component\\HttpFoundation\\Cookie;
use Symfony\\Component\\HttpFoundation\\RequestStack;

final class DeviceTrackingService implements DeviceTrackingServiceInterface
{
    /**
     * @var LeadDevice
     */
    private \$trackedDevice;

    public function __construct(
        private CookieHelper \$cookieHelper,
        private EntityManagerInterface \$entityManager,
        private LeadDeviceRepository \$leadDeviceRepository,
        private RandomHelperInterface \$randomHelper,
        private RequestStack \$requestStack,
        private CorePermissions \$security
    ) {
    }

    public function isTracked(): bool
    {
        return null !== \$this->getTrackedDevice();
    }

    /**
     * @return LeadDevice
     */
    public function getTrackedDevice()
    {
        if (!\$this->security->isAnonymous()) {
            // Do not track Mautic users
            return;
        }

        if (\$this->trackedDevice) {
            return \$this->trackedDevice;
        }

        \$trackingId = \$this->getTrackedIdentifier();
        if (null === \$trackingId) {
            return null;
        }

        return \$this->leadDeviceRepository->getByTrackingId(\$trackingId);
    }

    /**
     * @param bool \$replaceExistingTracking
     *
     * @return LeadDevice
     */
    public function trackCurrentDevice(LeadDevice \$device, \$replaceExistingTracking = false)
    {
        \$trackedDevice = \$this->getTrackedDevice();
        if (null !== \$trackedDevice && false === \$replaceExistingTracking) {
            return \$trackedDevice;
        }

        // Check for an existing device for this contact to prevent blowing up the devices table
        \$existingDevice = \$this->leadDeviceRepository->findOneBy(
            [
                'lead'        => \$device->getLead(),
                'device'      => \$device->getDevice(),
                'deviceBrand' => \$device->getDeviceBrand(),
                'deviceModel' => \$device->getDeviceModel(),
            ]
        );

        if (null !== \$existingDevice) {
            \$device = \$existingDevice;
        }

        if (null === \$device->getTrackingId()) {
            // Ensure all devices have a tracking ID (new devices will not and pre 2.13.0 devices may not)
            \$device->setTrackingId(\$this->getUniqueTrackingIdentifier());

            \$this->entityManager->persist(\$device);
            \$this->entityManager->flush();
        }

        \$this->createTrackingCookies(\$device);

        // Store the device in case a service uses this within the same session
        \$this->trackedDevice = \$device;

        return \$device;
    }

    public function clearTrackingCookies(): void
    {
        \$this->cookieHelper->deleteCookie('mautic_device_id');
        \$this->cookieHelper->deleteCookie('mtc_id');
    }

    private function getTrackedIdentifier(): ?string
    {
        \$request = \$this->requestStack->getCurrentRequest();

        if (null === \$request) {
            return null;
        }

        if (\$this->trackedDevice) {
            // Use the device tracked in case the cookies were just created
            return \$this->trackedDevice->getTrackingId();
        }

        \$deviceTrackingId = \$this->cookieHelper->getCookie('mautic_device_id', null);
        if (null === \$deviceTrackingId) {
            \$deviceTrackingId = \$request->get('mautic_device_id', null);
        }

        return \$deviceTrackingId;
    }

    private function getUniqueTrackingIdentifier(): string
    {
        do {
            \$generatedIdentifier = \$this->randomHelper->generate(23);
            \$device              = \$this->leadDeviceRepository->getByTrackingId(\$generatedIdentifier);
        } while (null !== \$device);

        return \$generatedIdentifier;
    }

    private function createTrackingCookies(LeadDevice \$device): void
    {
        // Device cookie
        \$this->cookieHelper->setCookie('mautic_device_id', \$device->getTrackingId(), 31_536_000, sameSite: Cookie::SAMESITE_NONE);

        // Mainly for landing pages so that JS has the same access as 3rd party tracking code
        \$this->cookieHelper->setCookie('mtc_id', \$device->getLead()->getId(), null, sameSite: Cookie::SAMESITE_NONE);
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
        return "@bundles/LeadBundle/Tracker/Service/DeviceTrackingService/DeviceTrackingService.php";
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
        return new Source("", "@bundles/LeadBundle/Tracker/Service/DeviceTrackingService/DeviceTrackingService.php", "/app/docroot/app/bundles/LeadBundle/Tracker/Service/DeviceTrackingService/DeviceTrackingService.php");
    }
}
