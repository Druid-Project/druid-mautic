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

/* @bundles/CoreBundle/Tests/Unit/Update/Step/PreUpdateChecksStepTest.php */
class __TwigTemplate_bd4a7d09c2b0c35494ae984a13f141ec extends Template
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

namespace Mautic\\CoreBundle\\Tests\\Unit\\Update\\Step;

use Mautic\\CoreBundle\\Exception\\UpdateFailedException;
use Mautic\\CoreBundle\\Helper\\Update\\PreUpdateChecks\\PreUpdateCheckError;
use Mautic\\CoreBundle\\Helper\\Update\\PreUpdateChecks\\PreUpdateCheckResult;
use Mautic\\CoreBundle\\Helper\\UpdateHelper;
use Mautic\\CoreBundle\\Update\\Step\\PreUpdateChecksStep;
use PHPUnit\\Framework\\MockObject\\MockObject;
use Symfony\\Contracts\\Translation\\TranslatorInterface;

class PreUpdateChecksStepTest extends AbstractStepTest
{
    /**
     * @var MockObject|TranslatorInterface
     */
    private MockObject \$translator;

    /**
     * @var MockObject|UpdateHelper
     */
    private MockObject \$updateHelper;

    private PreUpdateChecksStep \$step;

    protected function setUp(): void
    {
        parent::setUp();

        \$this->translator   = \$this->createMock(TranslatorInterface::class);
        \$this->updateHelper = \$this->createMock(UpdateHelper::class);

        \$this->step = new PreUpdateChecksStep(\$this->translator, \$this->updateHelper);
    }

    public function testUpdateFailedExceptionIfPreUpdateChecksFailed(): void
    {
        \$this->updateHelper->expects(\$this->once())
            ->method('runPreUpdateChecks')
            ->willReturn(
                [
                    new PreUpdateCheckResult(false, null, [new PreUpdateCheckError('Dummy')]),
                ]
            );

        \$this->translator->expects(\$this->any())
            ->method('trans')
            ->willReturn('Dummy');

        \$this->expectException(UpdateFailedException::class);

        \$this->step->execute(\$this->progressBar, \$this->input, \$this->output);
    }

    public function testNoExceptionIfPreUpdateChecksPassed(): void
    {
        \$this->updateHelper->expects(\$this->once())
            ->method('runPreUpdateChecks')
            ->willReturn(
                [
                    new PreUpdateCheckResult(true, null),
                ]
            );

        \$this->translator->expects(\$this->any())
            ->method('trans')
            ->willReturn('Dummy');

        try {
            \$this->step->execute(\$this->progressBar, \$this->input, \$this->output);
            \$this->assertTrue(true);
        } catch (UpdateFailedException) {
            \$this->fail('UpdateFailedException should not have been thrown');
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
        return "@bundles/CoreBundle/Tests/Unit/Update/Step/PreUpdateChecksStepTest.php";
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
        return new Source("", "@bundles/CoreBundle/Tests/Unit/Update/Step/PreUpdateChecksStepTest.php", "/app/docroot/app/bundles/CoreBundle/Tests/Unit/Update/Step/PreUpdateChecksStepTest.php");
    }
}
