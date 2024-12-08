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

/* @bundles/LeadBundle/Tracker/Factory/DeviceDetectorFactory/DeviceDetectorFactoryInterface.php */
class __TwigTemplate_26d7d5102e31913371db00112c330dd2 extends Template
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

namespace Mautic\\LeadBundle\\Tracker\\Factory\\DeviceDetectorFactory;

use DeviceDetector\\DeviceDetector;

/**
 * Interface DeviceDetectorFactoryInterface.
 */
interface DeviceDetectorFactoryInterface
{
    /**
     * @param string \$userAgent
     *
     * @return DeviceDetector
     */
    public function create(\$userAgent);
}
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@bundles/LeadBundle/Tracker/Factory/DeviceDetectorFactory/DeviceDetectorFactoryInterface.php";
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
        return new Source("", "@bundles/LeadBundle/Tracker/Factory/DeviceDetectorFactory/DeviceDetectorFactoryInterface.php", "/app/docroot/app/bundles/LeadBundle/Tracker/Factory/DeviceDetectorFactory/DeviceDetectorFactoryInterface.php");
    }
}
