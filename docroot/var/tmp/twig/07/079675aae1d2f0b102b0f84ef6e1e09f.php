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

/* @bundles/FormBundle/ProgressiveProfiling/DisplayCounter.php */
class __TwigTemplate_297c215009f72ec8a0c0f745d9a52cf8 extends Template
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

class DisplayCounter
{
    private int \$displayedFields = 0;

    private int \$alreadyAlwaysDisplayed = 0;

    public function __construct(
        private Form \$form
    ) {
    }

    public function increaseDisplayedFields(): void
    {
        ++\$this->displayedFields;
    }

    public function getDisplayFields(): int
    {
        return \$this->displayedFields;
    }

    public function increaseAlreadyAlwaysDisplayed(): void
    {
        ++\$this->alreadyAlwaysDisplayed;
    }

    public function getAlreadyAlwaysDisplayed(): int
    {
        return \$this->alreadyAlwaysDisplayed;
    }

    public function getAlwaysDisplayFields(): int
    {
        \$i= 0;
        /** @var Field \$field */
        foreach (\$this->form->getFields()->toArray() as \$field) {
            if (\$field->isAlwaysDisplay()) {
                ++\$i;
            }
        }

        return \$i;
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
        return "@bundles/FormBundle/ProgressiveProfiling/DisplayCounter.php";
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
        return new Source("", "@bundles/FormBundle/ProgressiveProfiling/DisplayCounter.php", "/app/docroot/app/bundles/FormBundle/ProgressiveProfiling/DisplayCounter.php");
    }
}
