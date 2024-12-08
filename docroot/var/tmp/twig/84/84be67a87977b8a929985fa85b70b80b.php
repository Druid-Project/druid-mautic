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

/* @bundles/LeadBundle/Provider/FormAdjustmentsProvider.php */
class __TwigTemplate_f1abb21adaee390bfbbc165b5c3389a4 extends Template
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

use Mautic\\LeadBundle\\Event\\FormAdjustmentEvent;
use Mautic\\LeadBundle\\LeadEvents;
use Symfony\\Component\\EventDispatcher\\EventDispatcherInterface;
use Symfony\\Component\\Form\\FormInterface;

final class FormAdjustmentsProvider implements FormAdjustmentsProviderInterface
{
    public function __construct(
        private EventDispatcherInterface \$dispatcher
    ) {
    }

    /**
     * @param FormInterface<FormInterface<mixed>> \$form
     * @param mixed[]                             \$fieldDetails
     *
     * @return FormInterface<FormInterface<mixed>>
     */
    public function adjustForm(FormInterface \$form, string \$fieldAlias, string \$fieldObject, string \$operator, array \$fieldDetails): FormInterface
    {
        \$event = new FormAdjustmentEvent(\$form, \$fieldAlias, \$fieldObject, \$operator, \$fieldDetails);
        \$this->dispatcher->dispatch(\$event, LeadEvents::ADJUST_FILTER_FORM_TYPE_FOR_FIELD);

        return \$event->getForm();
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
        return "@bundles/LeadBundle/Provider/FormAdjustmentsProvider.php";
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
        return new Source("", "@bundles/LeadBundle/Provider/FormAdjustmentsProvider.php", "/app/docroot/app/bundles/LeadBundle/Provider/FormAdjustmentsProvider.php");
    }
}
