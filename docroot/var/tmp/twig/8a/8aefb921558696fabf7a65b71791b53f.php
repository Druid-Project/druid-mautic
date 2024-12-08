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

/* @bundles/PageBundle/Event/PageDisplayEvent.php */
class __TwigTemplate_c37dcf41a059db84c4f3e70783f6c6ce extends Template
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

namespace Mautic\\PageBundle\\Event;

use Mautic\\LeadBundle\\Entity\\Lead;
use Mautic\\PageBundle\\Entity\\Page;
use Symfony\\Contracts\\EventDispatcher\\Event;

class PageDisplayEvent extends Event
{
    /**
     * Preferred lead to be used in listeners.
     */
    private ?Lead \$lead = null;

    public function __construct(
        private string \$content,
        private Page \$page,
        private array \$params = []
    ) {
    }

    /**
     * Returns the Page entity.
     *
     * @return Page
     */
    public function getPage()
    {
        return \$this->page;
    }

    /**
     * Get page content.
     */
    public function getContent(): string
    {
        return \$this->content;
    }

    /**
     * Set page content.
     *
     * @param string \$content
     */
    public function setContent(\$content): void
    {
        \$this->content = \$content;
    }

    /**
     * Get params.
     *
     * @return array
     */
    public function getParams()
    {
        return \$this->params;
    }

    /**
     * Set params.
     *
     * @param array \$params
     */
    public function setParams(\$params): void
    {
        \$this->params = \$params;
    }

    public function getLead(): ?Lead
    {
        return \$this->lead;
    }

    public function setLead(Lead \$lead): void
    {
        \$this->lead = \$lead;
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
        return "@bundles/PageBundle/Event/PageDisplayEvent.php";
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
        return new Source("", "@bundles/PageBundle/Event/PageDisplayEvent.php", "/app/docroot/app/bundles/PageBundle/Event/PageDisplayEvent.php");
    }
}
