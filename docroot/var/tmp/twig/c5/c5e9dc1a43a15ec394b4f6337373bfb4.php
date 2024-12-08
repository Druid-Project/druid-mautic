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

/* @bundles/LeadBundle/Event/ListPreProcessListEvent.php */
class __TwigTemplate_e332447b61e453b03cec7fdb170450d1 extends Template
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

class ListPreProcessListEvent extends CommonEvent
{
    protected \$result;

    /**
     * @param bool \$isNew
     */
    public function __construct(
        protected array \$list,
        \$isNew = false
    ) {
        \$this->isNew = \$isNew;
    }

    /**
     * Returns the List entity.
     *
     * @return array
     */
    public function getList()
    {
        return \$this->list;
    }

    /**
     * Sets the lead list entity.
     */
    public function setList(array \$list): void
    {
        \$this->list = \$list;
    }

    /**
     * @return bool
     */
    public function getResult()
    {
        return \$this->result;
    }

    /**
     * @return \$this
     */
    public function setResult(\$result)
    {
        \$this->result = \$result;

        return \$this;
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
        return "@bundles/LeadBundle/Event/ListPreProcessListEvent.php";
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
        return new Source("", "@bundles/LeadBundle/Event/ListPreProcessListEvent.php", "/app/docroot/app/bundles/LeadBundle/Event/ListPreProcessListEvent.php");
    }
}
