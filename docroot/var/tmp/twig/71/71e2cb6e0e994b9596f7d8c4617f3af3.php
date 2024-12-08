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

/* @bundles/ReportBundle/Event/AbstractReportEvent.php */
class __TwigTemplate_f7d4ead7937681163c2a6cde94572d98 extends Template
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

namespace Mautic\\ReportBundle\\Event;

use Mautic\\ReportBundle\\Entity\\Report;
use Symfony\\Contracts\\EventDispatcher\\Event;

class AbstractReportEvent extends Event
{
    protected ?string \$context = null;

    /**
     * Report entity.
     *
     * @var Report
     */
    protected \$report;

    /**
     * @return Report
     */
    public function getReport()
    {
        return \$this->report;
    }

    public function getContext(): ?string
    {
        return \$this->context;
    }

    /**
     * @return bool
     */
    public function checkContext(\$context)
    {
        if (empty(\$this->context)) {
            return true;
        }

        if (is_array(\$context)) {
            \$res = array_filter(\$context, fn (\$elem) => 0 === stripos(\$this->context, (string) \$elem));

            return count(\$res) > 0;
        } elseif (\$this->context == \$context) {
            return true;
        } elseif (0 === stripos(\$this->context, (string) \$context)) {
            return true;
        } else {
            return false;
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
        return "@bundles/ReportBundle/Event/AbstractReportEvent.php";
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
        return new Source("", "@bundles/ReportBundle/Event/AbstractReportEvent.php", "/app/docroot/app/bundles/ReportBundle/Event/AbstractReportEvent.php");
    }
}
