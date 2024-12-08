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

/* @bundles/LeadBundle/Tracker/Service/DeviceCreatorService/DeviceCreatorService.php */
class __TwigTemplate_29a0adc257bf752a198d9508d96ef2f5 extends Template
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

namespace Mautic\\LeadBundle\\Tracker\\Service\\DeviceCreatorService;

use DeviceDetector\\DeviceDetector;
use Mautic\\LeadBundle\\Entity\\Lead;
use Mautic\\LeadBundle\\Entity\\LeadDevice;

final class DeviceCreatorService implements DeviceCreatorServiceInterface
{
    public function getCurrentFromDetector(DeviceDetector \$deviceDetector, Lead \$assignedLead): LeadDevice
    {
        \$device = new LeadDevice();
        \$device->setClientInfo(\$deviceDetector->getClient());
        \$device->setDevice(\$deviceDetector->getDeviceName());
        \$device->setDeviceBrand(\$deviceDetector->getBrandName());
        \$device->setDeviceModel(\$deviceDetector->getModel());
        \$device->setDeviceOs(\$deviceDetector->getOs());
        \$device->setDateAdded(new \\DateTime());
        \$device->setLead(\$assignedLead);

        return \$device;
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
        return "@bundles/LeadBundle/Tracker/Service/DeviceCreatorService/DeviceCreatorService.php";
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
        return new Source("", "@bundles/LeadBundle/Tracker/Service/DeviceCreatorService/DeviceCreatorService.php", "/app/docroot/app/bundles/LeadBundle/Tracker/Service/DeviceCreatorService/DeviceCreatorService.php");
    }
}
