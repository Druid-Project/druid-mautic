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

/* @bundles/CoreBundle/Tests/Unit/Update/Step/InstallNewFilesStepTest.php */
class __TwigTemplate_ebd278d1a7be47f5c3827c4bb451e5b6 extends Template
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

use Mautic\\CoreBundle\\Exception\\UpdateFailedException;
use Mautic\\CoreBundle\\Helper\\PathsHelper;
use Mautic\\CoreBundle\\Helper\\UpdateHelper;
use Mautic\\CoreBundle\\Update\\Step\\InstallNewFilesStep;
use PHPUnit\\Framework\\MockObject\\MockObject;
use Symfony\\Component\\Filesystem\\Filesystem;
use Symfony\\Contracts\\Translation\\TranslatorInterface;

class InstallNewFilesStepTest extends AbstractStepTest
{
    /**
     * @var MockObject|TranslatorInterface
     */
    private MockObject \$translator;

    /**
     * @var MockObject|UpdateHelper
     */
    private MockObject \$updateHelper;

    /**
     * @var MockObject|PathsHelper
     */
    private MockObject \$pathsHelper;

    private InstallNewFilesStep \$step;

    protected function setUp(): void
    {
        parent::setUp();

        \$this->translator   = \$this->createMock(TranslatorInterface::class);
        \$this->updateHelper = \$this->createMock(UpdateHelper::class);
        \$this->pathsHelper  = \$this->createMock(PathsHelper::class);

        \$this->translator->method('trans')->willReturn('some translation');

        \$this->step = new InstallNewFilesStep(\$this->translator, \$this->updateHelper, \$this->pathsHelper);
    }

    public function testUpdatePackageUnzipped(): void
    {
        \$resourcePath = __DIR__.'/resources';

        // Copy the zip so that the original isn't deleted
        copy(\$resourcePath.'/update.zip', \$resourcePath.'/update-test.zip');

        \$this->updateHelper->expects(\$this->once())
            ->method('fetchData')
            ->willReturn(
                [
                    'package' => \$resourcePath.'/update-test.zip',
                ]
            );

        \$this->pathsHelper->expects(\$this->once())
            ->method('getCachePath')
            ->willReturn(\$resourcePath);

        \$this->pathsHelper->expects(\$this->once())
            ->method('getRootPath')
            ->willReturn(\$resourcePath);

        \$this->translator->expects(\$this->any())
            ->method('trans')
            ->willReturn('');

        \$this->step->execute(\$this->progressBar, \$this->input, \$this->output);

        \$this->assertFileExists(\$resourcePath.'/update');
        \$this->assertFileDoesNotExist(\$resourcePath.'/update-test.zip');

        // Cleanup
        \$filesystem = new Filesystem();
        \$filesystem->remove(\$resourcePath.'/update');
    }

    public function testCustomUpdatePackageUnzipped(): void
    {
        \$resourcePath = __DIR__.'/resources';

        // Copy the zip so that the original isn't deleted
        copy(\$resourcePath.'/update.zip', \$resourcePath.'/update-test.zip');

        \$this->updateHelper->expects(\$this->never())
            ->method('fetchData');

        \$this->pathsHelper->expects(\$this->never())
            ->method('getCachePath');

        \$this->pathsHelper->expects(\$this->once())
            ->method('getRootPath')
            ->willReturn(\$resourcePath);

        \$this->input->expects(\$this->once())
            ->method('getOption')
            ->with('update-package')
            ->willReturn(\$resourcePath.'/update-test.zip');

        \$this->translator->expects(\$this->any())
            ->method('trans')
            ->willReturn('');

        \$this->step->execute(\$this->progressBar, \$this->input, \$this->output);

        \$this->assertFileExists(\$resourcePath.'/update');
        \$this->assertFileDoesNotExist(\$resourcePath.'/update-test.zip');

        // Cleanup
        \$filesystem = new Filesystem();
        \$filesystem->remove(\$resourcePath.'/update');
    }

    public function testUpdateFailedExceptionThrownIfCustomPackageDoesNotExist(): void
    {
        \$this->expectException(UpdateFailedException::class);

        \$resourcePath = __DIR__.'/resources';

        \$this->updateHelper->expects(\$this->never())
            ->method('fetchData');

        \$this->input->expects(\$this->once())
            ->method('getOption')
            ->with('update-package')
            ->willReturn(\$resourcePath.'/update-test.zip');

        \$this->step->execute(\$this->progressBar, \$this->input, \$this->output);
    }

    public function testUpdateFailedExceptionThrownIfUnzippingFails(): void
    {
        \$this->expectException(UpdateFailedException::class);

        \$resourcePath = __DIR__.'/resources';

        \$this->updateHelper->expects(\$this->once())
            ->method('fetchData')
            ->willReturn(
                [
                    'package' => \$resourcePath.'/update-test.zip',
                ]
            );

        \$this->translator->expects(\$this->any())
            ->method('trans')
            ->willReturn('');

        \$this->step->execute(\$this->progressBar, \$this->input, \$this->output);
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
        return "@bundles/CoreBundle/Tests/Unit/Update/Step/InstallNewFilesStepTest.php";
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
        return new Source("", "@bundles/CoreBundle/Tests/Unit/Update/Step/InstallNewFilesStepTest.php", "/app/docroot/app/bundles/CoreBundle/Tests/Unit/Update/Step/InstallNewFilesStepTest.php");
    }
}
