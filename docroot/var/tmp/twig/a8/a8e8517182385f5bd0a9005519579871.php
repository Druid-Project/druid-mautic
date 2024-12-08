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

/* @bundles/CoreBundle/Tests/Unit/Command/src/FakeModeratedCommand.php */
class __TwigTemplate_910a8d4f86bd7d68e8fb71103ad5970d extends Template
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

namespace Mautic\\CoreBundle\\Tests\\Unit\\Command\\src;

use Mautic\\CoreBundle\\Command\\ModeratedCommand;
use Symfony\\Component\\Console\\Input\\InputInterface;
use Symfony\\Component\\Console\\Output\\OutputInterface;

class FakeModeratedCommand extends ModeratedCommand
{
    protected function configure()
    {
        \$this->setName('mautic:fake:command');

        parent::configure();
    }

    protected function execute(InputInterface \$input, OutputInterface \$output)
    {
        \$this->checkRunStatus(\$input, \$output);

        return 0;
    }

    public function forceCompleteRun(): void
    {
        \$this->completeRun();
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
        return "@bundles/CoreBundle/Tests/Unit/Command/src/FakeModeratedCommand.php";
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
        return new Source("", "@bundles/CoreBundle/Tests/Unit/Command/src/FakeModeratedCommand.php", "/app/docroot/app/bundles/CoreBundle/Tests/Unit/Command/src/FakeModeratedCommand.php");
    }
}
