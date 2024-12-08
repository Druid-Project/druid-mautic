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

/* @bundles/LeadBundle/Event/ListChangeEvent.php */
class __TwigTemplate_6614101fe7beb7a69b1d5c888f894e86 extends Template
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

use Mautic\\LeadBundle\\Entity\\Lead;
use Mautic\\LeadBundle\\Entity\\LeadList;
use Symfony\\Contracts\\EventDispatcher\\Event;

class ListChangeEvent extends Event
{
    private ?Lead \$lead;

    /**
     * @var Lead[]|null
     */
    private ?array \$leads = null;

    /**
     * @param Lead[]|Lead \$leads
     */
    public function __construct(
        Lead|array \$leads,
        private LeadList \$list,
        private bool \$added = true,
        private ?\\DateTime \$date = null
    ) {
        if (is_array(\$leads)) {
            \$this->leads = \$leads;
        } else {
            \$this->lead = \$leads;
        }
    }

    /**
     * Returns the Lead entity.
     *
     * @return Lead
     */
    public function getLead()
    {
        return \$this->lead;
    }

    /**
     * @return LeadList
     */
    public function getList()
    {
        return \$this->list;
    }

    /**
     * Returns batch array of leads.
     *
     * @return array|null
     */
    public function getLeads()
    {
        return \$this->leads;
    }

    public function wasAdded(): bool
    {
        return \$this->added;
    }

    public function wasRemoved(): bool
    {
        return !\$this->added;
    }

    public function getDate(): ?\\DateTime
    {
        return \$this->date;
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
        return "@bundles/LeadBundle/Event/ListChangeEvent.php";
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
        return new Source("", "@bundles/LeadBundle/Event/ListChangeEvent.php", "/app/docroot/app/bundles/LeadBundle/Event/ListChangeEvent.php");
    }
}
