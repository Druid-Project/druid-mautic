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

/* @bundles/LeadBundle/Tracker/Service/ContactTrackingService/ContactTrackingServiceInterface.php */
class __TwigTemplate_33d9d835eca4f35b40d71e2a7743ef46 extends Template
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

namespace Mautic\\LeadBundle\\Tracker\\Service\\ContactTrackingService;

use Mautic\\LeadBundle\\Entity\\Lead;

/**
 * Interface ContactTrackingInterface.
 */
interface ContactTrackingServiceInterface
{
    /**
     * Return current tracked Lead.
     *
     * @return Lead|null
     */
    public function getTrackedLead();

    /**
     * @return string|null Unique identifier
     */
    public function getTrackedIdentifier();
}
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@bundles/LeadBundle/Tracker/Service/ContactTrackingService/ContactTrackingServiceInterface.php";
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
        return new Source("", "@bundles/LeadBundle/Tracker/Service/ContactTrackingService/ContactTrackingServiceInterface.php", "/app/docroot/app/bundles/LeadBundle/Tracker/Service/ContactTrackingService/ContactTrackingServiceInterface.php");
    }
}
