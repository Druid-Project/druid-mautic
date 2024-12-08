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

/* @bundles/LeadBundle/Tracker/Factory/DeviceDetectorFactory/DeviceDetectorFactory.php */
class __TwigTemplate_ce81c88f036dcb9a49db4273645800ad extends Template
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

use DeviceDetector\\Cache\\PSR6Bridge;
use DeviceDetector\\DeviceDetector;
use Mautic\\CacheBundle\\Cache\\CacheProvider;

final class DeviceDetectorFactory implements DeviceDetectorFactoryInterface
{
    public function __construct(
        private CacheProvider \$cacheProvider
    ) {
    }

    /**
     * @param string \$userAgent
     *
     * @throws \\Exception
     */
    public function create(\$userAgent): DeviceDetector
    {
        \$detector = new DeviceDetector((string) \$userAgent);
        \$bridge   = new PSR6Bridge(\$this->cacheProvider->getCacheAdapter());
        \$detector->setCache(\$bridge);

        return \$detector;
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
        return "@bundles/LeadBundle/Tracker/Factory/DeviceDetectorFactory/DeviceDetectorFactory.php";
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
        return new Source("", "@bundles/LeadBundle/Tracker/Factory/DeviceDetectorFactory/DeviceDetectorFactory.php", "/app/docroot/app/bundles/LeadBundle/Tracker/Factory/DeviceDetectorFactory/DeviceDetectorFactory.php");
    }
}
