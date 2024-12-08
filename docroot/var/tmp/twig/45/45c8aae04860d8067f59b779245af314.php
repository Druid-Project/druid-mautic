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

/* @bundles/LeadBundle/Event/ContactExportSchedulerEvent.php */
class __TwigTemplate_3ce4f365d74b2193e310b5597a22a28e extends Template
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

use Mautic\\LeadBundle\\Entity\\ContactExportScheduler;
use Symfony\\Contracts\\EventDispatcher\\Event;

class ContactExportSchedulerEvent extends Event
{
    private string \$filePath;

    public function __construct(
        private ContactExportScheduler \$contactExportScheduler
    ) {
    }

    public function getContactExportScheduler(): ContactExportScheduler
    {
        return \$this->contactExportScheduler;
    }

    public function getFilePath(): string
    {
        return \$this->filePath;
    }

    public function setFilePath(string \$filePath): void
    {
        \$this->filePath = \$filePath;
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
        return "@bundles/LeadBundle/Event/ContactExportSchedulerEvent.php";
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
        return new Source("", "@bundles/LeadBundle/Event/ContactExportSchedulerEvent.php", "/app/docroot/app/bundles/LeadBundle/Event/ContactExportSchedulerEvent.php");
    }
}
