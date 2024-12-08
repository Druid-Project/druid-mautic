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

/* @bundles/FormBundle/ProgressiveProfiling/DisplayManager.php */
class __TwigTemplate_4dd500cf1f5680a8d9ad14307d361399 extends Template
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

namespace Mautic\\FormBundle\\ProgressiveProfiling;

use Mautic\\FormBundle\\Entity\\Field;
use Mautic\\FormBundle\\Entity\\Form;

class DisplayManager
{
    private DisplayCounter \$displayCounter;

    public function __construct(
        private Form \$form,
        private array \$viewOnlyFields = []
    ) {
        \$this->displayCounter = new DisplayCounter(\$form);
    }

    /**
     * @return bool
     */
    public function showForField(Field \$field)
    {
        if (in_array(\$field->getType(), \$this->viewOnlyFields)) {
            return true;
        }

        // Always Display field priority until hit limit
        if (\$field->isAlwaysDisplay()) {
            if (\$this->form->getProgressiveProfilingLimit() <= \$this->displayCounter->getDisplayFields()) {
                return false;
            } else {
                \$this->displayCounter->increaseAlreadyAlwaysDisplayed();

                return true;
            }
        }

        if (\$this->shouldDisplayNotAlwaysDisplayField(\$field)) {
            return true;
        } else {
            return false;
        }
    }

    private function shouldDisplayNotAlwaysDisplayField(Field \$field): bool
    {
        \$fields = \$this->form->getFields()->toArray();
        foreach (\$fields as \$fieldFromArray) {
            if (in_array(\$field->getType(), \$this->viewOnlyFields)) {
                continue;
            }

            /** @var Field \$fieldFromArray */
            if (\$field->getId() === \$fieldFromArray->getId()) {
                if ((\$this->displayCounter->getDisplayFields() + (\$this->displayCounter->getAlwaysDisplayFields() - \$this->displayCounter->getAlreadyAlwaysDisplayed())) >= \$this->form->getProgressiveProfilingLimit()) {
                    return false;
                }
            }
        }

        return true;
    }

    public function useProgressiveProfilingLimit(): bool
    {
        return '' != \$this->form->getProgressiveProfilingLimit();
    }

    /**
     * @return DisplayCounter
     */
    public function getDisplayCounter()
    {
        return \$this->displayCounter;
    }

    public function increaseDisplayedFields(Field \$field): void
    {
        if (!in_array(\$field->getType(), \$this->viewOnlyFields)) {
            \$this->displayCounter->increaseDisplayedFields();
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
        return "@bundles/FormBundle/ProgressiveProfiling/DisplayManager.php";
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
        return new Source("", "@bundles/FormBundle/ProgressiveProfiling/DisplayManager.php", "/app/docroot/app/bundles/FormBundle/ProgressiveProfiling/DisplayManager.php");
    }
}
