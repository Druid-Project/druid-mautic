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

/* @bundles/LeadBundle/Event/ImportMappingEvent.php */
class __TwigTemplate_6344a3a92d48aca317e090fa1b8e9ce2 extends Template
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

namespace Mautic\\LeadBundle\\Event;

use Mautic\\CoreBundle\\Event\\CommonEvent;

final class ImportMappingEvent extends CommonEvent
{
    public bool \$objectSupported = false;

    public array \$fields         = [];

    public function __construct(
        public string \$routeObjectName
    ) {
    }

    /**
     * Check if the import is for said route object and notes if the object exist.
     */
    public function importIsForRouteObject(string \$routeObject): bool
    {
        if (\$this->routeObjectName === \$routeObject) {
            \$this->objectSupported = true;

            return true;
        }

        return false;
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
        return "@bundles/LeadBundle/Event/ImportMappingEvent.php";
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
        return new Source("", "@bundles/LeadBundle/Event/ImportMappingEvent.php", "/app/docroot/app/bundles/LeadBundle/Event/ImportMappingEvent.php");
    }
}
