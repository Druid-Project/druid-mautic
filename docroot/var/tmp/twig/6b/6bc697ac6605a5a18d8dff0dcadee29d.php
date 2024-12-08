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

/* @bundles/CoreBundle/Tests/Unit/Update/Step/AbstractStepTest.php */
class __TwigTemplate_07dbf006e53514422328da313eb97ed6 extends Template
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

namespace Mautic\\CoreBundle\\Tests\\Unit\\Update\\Step;

use PHPUnit\\Framework\\MockObject\\MockObject;
use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\Console\\Formatter\\OutputFormatterInterface;
use Symfony\\Component\\Console\\Helper\\ProgressBar;
use Symfony\\Component\\Console\\Input\\InputInterface;
use Symfony\\Component\\Console\\Output\\OutputInterface;

abstract class AbstractStepTest extends TestCase
{
    /**
     * @var ProgressBar
     */
    protected \$progressBar;

    /**
     * @var MockObject|InputInterface
     */
    protected \$input;

    /**
     * @var MockObject|OutputInterface
     */
    protected \$output;

    protected function setUp(): void
    {
        \$formatter = \$this->createMock(OutputFormatterInterface::class);
        \$formatter->method('isDecorated')
          ->willReturn(false);

        \$this->input      = \$this->createMock(InputInterface::class);
        \$this->output     = \$this->createMock(OutputInterface::class);

        \$this->output->method('getFormatter')
            ->willReturn(\$formatter);

        \$this->progressBar = new ProgressBar(\$this->output);
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
        return "@bundles/CoreBundle/Tests/Unit/Update/Step/AbstractStepTest.php";
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
        return new Source("", "@bundles/CoreBundle/Tests/Unit/Update/Step/AbstractStepTest.php", "/app/docroot/app/bundles/CoreBundle/Tests/Unit/Update/Step/AbstractStepTest.php");
    }
}
