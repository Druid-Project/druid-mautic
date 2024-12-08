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

/* @bundles/LeadBundle/Event/LeadListFiltersChoicesEvent.php */
class __TwigTemplate_9ac3f2f43bb88bae74f69344af61e993 extends Template
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

use Mautic\\CoreBundle\\Event\\AbstractCustomRequestEvent;
use Symfony\\Component\\HttpFoundation\\Request;
use Symfony\\Contracts\\Translation\\TranslatorInterface;

class LeadListFiltersChoicesEvent extends AbstractCustomRequestEvent
{
    /**
     * @param mixed[] \$choices
     * @param mixed[] \$operators Please refer to ListModel.php, inside getChoiceFields method, for default operators availabled.
     */
    public function __construct(
        protected \$choices,
        protected \$operators,
        protected TranslatorInterface \$translator,
        Request \$request = null,
        private string \$search = ''
    ) {
        parent::__construct(\$request);
    }

    /**
     * @return mixed[]
     */
    public function getChoices()
    {
        return \$this->choices;
    }

    /**
     * @return mixed[]
     */
    public function getOperators()
    {
        return \$this->operators;
    }

    /**
     * @return TranslatorInterface
     */
    public function getTranslator()
    {
        return \$this->translator;
    }

    public function getSearch(): string
    {
        return \$this->search;
    }

    /**
     * Add a new choice for list filters
     * Please refer to ListModel.php, inside getChoiceFields method, for examples of choices.
     *
     * @param string  \$object
     * @param string  \$choiceKey
     * @param mixed[] \$choiceConfig
     */
    public function addChoice(\$object, \$choiceKey, \$choiceConfig): void
    {
        if (!isset(\$this->choices[\$object])) {
            \$this->choices[\$object] = [];
        }
        if (!array_key_exists(\$choiceKey, \$this->choices[\$object])) {
            \$this->choices[\$object][\$choiceKey] = \$choiceConfig;
        }
    }

    /**
     * @param mixed[] \$choiceConfig
     */
    public function setChoice(string \$object, string \$choiceKey, array \$choiceConfig): void
    {
        if (!isset(\$this->choices[\$object])) {
            \$this->choices[\$object] = [];
        }

        \$this->choices[\$object][\$choiceKey] = \$choiceConfig;
    }

    /**
     * @param array<string,array<string,string>> \$choices
     */
    public function setChoices(array \$choices): void
    {
        \$this->choices = \$choices;
    }

    public function isForSegmentation(): bool
    {
        \$route = (string) \$this->getRoute();

        // segment form
        if ('mautic_segment_action' === \$route) {
            return true;
        }

        // segment API
        if (str_starts_with(\$route, 'mautic_api_lists')) {
            return true;
        }

        // ajax request to load the filter's value fields
        \$request = \$this->getRequest();
        if ('loadSegmentFilterForm' === \$request->attributes->get('action')) {
            return true;
        }

        // something else such as dynamic content
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
        return "@bundles/LeadBundle/Event/LeadListFiltersChoicesEvent.php";
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
        return new Source("", "@bundles/LeadBundle/Event/LeadListFiltersChoicesEvent.php", "/app/docroot/app/bundles/LeadBundle/Event/LeadListFiltersChoicesEvent.php");
    }
}
