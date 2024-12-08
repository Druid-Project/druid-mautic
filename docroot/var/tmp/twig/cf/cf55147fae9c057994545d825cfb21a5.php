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

/* @bundles/LeadBundle/Provider/FilterOperatorProvider.php */
class __TwigTemplate_587da1c515519ac39af24032ef14b275 extends Template
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

namespace Mautic\\LeadBundle\\Provider;

use Mautic\\LeadBundle\\Event\\LeadListFiltersOperatorsEvent;
use Mautic\\LeadBundle\\LeadEvents;
use Symfony\\Component\\EventDispatcher\\EventDispatcherInterface;
use Symfony\\Contracts\\Translation\\TranslatorInterface;

final class FilterOperatorProvider implements FilterOperatorProviderInterface
{
    /**
     * @var mixed[]
     */
    private array \$cachedOperators = [];

    public function __construct(
        private EventDispatcherInterface \$dispatcher,
        private TranslatorInterface \$translator
    ) {
    }

    /**
     * @return mixed[]
     */
    public function getAllOperators(): array
    {
        if (empty(\$this->cachedOperators)) {
            \$event = new LeadListFiltersOperatorsEvent([], \$this->translator);

            \$this->dispatcher->dispatch(\$event, LeadEvents::LIST_FILTERS_OPERATORS_ON_GENERATE);

            \$this->cachedOperators = \$this->translateOperatorLabels(\$event->getOperators());
        }

        return \$this->cachedOperators;
    }

    /**
     * @param mixed[] \$operators
     *
     * @return mixed[]
     */
    private function translateOperatorLabels(array \$operators): array
    {
        foreach (\$operators as \$key => \$operatorSettings) {
            \$operators[\$key]['label'] = \$this->translator->trans(\$operatorSettings['label']);
        }

        return \$operators;
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
        return "@bundles/LeadBundle/Provider/FilterOperatorProvider.php";
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
        return new Source("", "@bundles/LeadBundle/Provider/FilterOperatorProvider.php", "/app/docroot/app/bundles/LeadBundle/Provider/FilterOperatorProvider.php");
    }
}
