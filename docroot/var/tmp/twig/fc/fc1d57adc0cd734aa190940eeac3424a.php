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

/* @bundles/LeadBundle/Event/LeadDeviceEvent.php */
class __TwigTemplate_ad47f20525853956878623488511aff8 extends Template
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

namespace Mautic\\LeadBundle\\Event;

use Mautic\\CoreBundle\\Event\\CommonEvent;
use Mautic\\LeadBundle\\Entity\\LeadDevice;

class LeadDeviceEvent extends CommonEvent
{
    /**
     * @param bool \$isNew
     */
    public function __construct(LeadDevice &\$device, \$isNew = false)
    {
        \$this->entity = &\$device;
        \$this->isNew  = \$isNew;
    }

    /**
     * Returns the LeadDevice entity.
     *
     * @return LeadDevice
     */
    public function getDevice()
    {
        return \$this->entity;
    }

    /**
     * Sets the LeadDevice entity.
     */
    public function setDevice(LeadDevice \$device): void
    {
        \$this->entity = \$device;
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
        return "@bundles/LeadBundle/Event/LeadDeviceEvent.php";
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
        return new Source("", "@bundles/LeadBundle/Event/LeadDeviceEvent.php", "/app/docroot/app/bundles/LeadBundle/Event/LeadDeviceEvent.php");
    }
}
