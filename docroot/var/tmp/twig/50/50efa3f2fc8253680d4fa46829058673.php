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

/* @bundles/FormBundle/Tests/ProgressiveProfiling/DisplayManagerTest.php */
class __TwigTemplate_8e227c22c5abb1814f5a3de96b40e74b extends Template
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

namespace Mautic\\FormBundle\\Tests\\ProgressiveProfiling;

use Mautic\\FormBundle\\Entity\\Field;
use Mautic\\FormBundle\\Entity\\Form;
use Mautic\\FormBundle\\ProgressiveProfiling\\DisplayCounter;
use Mautic\\FormBundle\\ProgressiveProfiling\\DisplayManager;

class DisplayManagerTest extends \\PHPUnit\\Framework\\TestCase
{
    private Form \$form;

    private array \$viewOnlyFields;

    private DisplayCounter \$displayCounter;

    public function setUp(): void
    {
        \$this->viewOnlyFields = [];
        \$this->form           = new Form();
        \$this->displayCounter = new DisplayCounter(\$this->form);
    }

    public function testShowForField(): void
    {
        \$form           = new Form();
        \$viewOnlyFields = ['button'];
        \$displayManager = new DisplayManager(\$form, \$viewOnlyFields);
        \$displayCounter = \$displayManager->getDisplayCounter();

        \$field = new Field();
        \$this->assertTrue(\$displayManager->showForField(\$field));

        \$field->setType('button');
        \$this->assertTrue(\$displayManager->showForField(\$field));

        \$field->setType('text');

        // display If first field is always display and progressive limit 1
        \$field->setAlwaysDisplay(true);
        \$form->setProgressiveProfilingLimit(1);
        \$this->assertTrue(\$displayManager->showForField(\$field));

        // not display If second field is always display and progressive limit 1
        \$displayCounter->increaseDisplayedFields();
        \$this->assertFalse(\$displayManager->showForField(\$field));
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
        return "@bundles/FormBundle/Tests/ProgressiveProfiling/DisplayManagerTest.php";
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
        return new Source("", "@bundles/FormBundle/Tests/ProgressiveProfiling/DisplayManagerTest.php", "/app/docroot/app/bundles/FormBundle/Tests/ProgressiveProfiling/DisplayManagerTest.php");
    }
}
