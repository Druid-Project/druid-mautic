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

/* @bundles/ReportBundle/Event/ReportScheduleSendEvent.php */
class __TwigTemplate_27fcb66349382e93a5c1f2b07ecd0bf7 extends Template
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

use Mautic\\ReportBundle\\Entity\\Scheduler;
use Symfony\\Contracts\\EventDispatcher\\Event;

class ReportScheduleSendEvent extends Event
{
    /**
     * @param string \$file
     */
    public function __construct(
        private Scheduler \$scheduler,
        private \$file
    ) {
    }

    /**
     * @return Scheduler
     */
    public function getScheduler()
    {
        return \$this->scheduler;
    }

    /**
     * @return string
     */
    public function getFile()
    {
        return \$this->file;
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
        return "@bundles/ReportBundle/Event/ReportScheduleSendEvent.php";
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
        return new Source("", "@bundles/ReportBundle/Event/ReportScheduleSendEvent.php", "/app/docroot/app/bundles/ReportBundle/Event/ReportScheduleSendEvent.php");
    }
}
