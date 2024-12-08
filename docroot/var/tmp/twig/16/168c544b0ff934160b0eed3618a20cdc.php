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

/* @bundles/CoreBundle/Tests/Unit/Update/Step/DeleteCacheStepTest.php */
class __TwigTemplate_c4ef11a7550a3f5bc652a8024dbda096 extends Template
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

use Mautic\\CoreBundle\\Helper\\CacheHelper;
use Mautic\\CoreBundle\\Update\\Step\\DeleteCacheStep;
use PHPUnit\\Framework\\MockObject\\MockObject;
use Symfony\\Contracts\\Translation\\TranslatorInterface;

class DeleteCacheStepTest extends AbstractStepTest
{
    /**
     * @var MockObject|CacheHelper
     */
    private MockObject \$cacheHelper;

    /**
     * @var MockObject|TranslatorInterface
     */
    private MockObject \$translator;

    private DeleteCacheStep \$step;

    protected function setUp(): void
    {
        parent::setUp();

        \$this->cacheHelper = \$this->createMock(CacheHelper::class);
        \$this->translator  = \$this->createMock(TranslatorInterface::class);
        \$this->step        = new DeleteCacheStep(\$this->cacheHelper, \$this->translator);
    }

    public function testCacheIsNukedAndProgressNoted(): void
    {
        \$stepOutput = 'mautic.core.update.clear.cache';
        \$this->translator->expects(\$this->once())
            ->method('trans')
            ->with(\$stepOutput)
            ->willReturn(\$stepOutput);

        \$this->cacheHelper->expects(\$this->once())
            ->method('nukeCache');

        \$this->step->execute(\$this->progressBar, \$this->input, \$this->output);

        \$this->assertEquals(\$stepOutput, \$this->progressBar->getMessage());
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
        return "@bundles/CoreBundle/Tests/Unit/Update/Step/DeleteCacheStepTest.php";
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
        return new Source("", "@bundles/CoreBundle/Tests/Unit/Update/Step/DeleteCacheStepTest.php", "/app/docroot/app/bundles/CoreBundle/Tests/Unit/Update/Step/DeleteCacheStepTest.php");
    }
}
