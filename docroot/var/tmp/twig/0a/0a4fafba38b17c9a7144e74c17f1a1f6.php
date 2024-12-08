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

/* @bundles/CoreBundle/Tests/Twig/TwigIntegrationTest.php */
class __TwigTemplate_b5076d1b4a113647d8543f622820cd49 extends Template
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

namespace Mautic\\CoreBundle\\Tests\\Twig;

use Mautic\\CoreBundle\\Helper\\CoreParametersHelper;
use Mautic\\CoreBundle\\Helper\\PathsHelper;
use Mautic\\CoreBundle\\Twig\\Extension\\AppExtension;
use Mautic\\CoreBundle\\Twig\\Extension\\AssetExtension;
use Mautic\\CoreBundle\\Twig\\Extension\\ClassExtension;
use Mautic\\CoreBundle\\Twig\\Extension\\FormExtension;
use Mautic\\CoreBundle\\Twig\\Helper\\AssetsHelper;
use PHPUnit\\Framework\\MockObject\\MockObject;
use Symfony\\Component\\Asset\\Packages;
use Twig\\Extension\\ExtensionInterface;

/**
 * @see https://twig.symfony.com/doc/2.x/advanced.html#functional-tests
 */
class TwigIntegrationTest extends \\Twig\\Test\\IntegrationTestCase
{
    /**
     * @return ExtensionInterface[]
     */
    public function getExtensions(): array
    {
        /** @var Packages&MockObject \$packagesMock */
        \$packagesMock = \$this->createMock(Packages::class);

        /** @var CoreParametersHelper&MockObject \$coreParametersHelper */
        \$coreParametersHelper = \$this->createMock(CoreParametersHelper::class);

        /** @var PathsHelper&MockObject \$pathHelperMock */
        \$pathHelperMock = \$this->createMock(PathsHelper::class);

        \$packagesMock->method('getUrl')
            ->will(\$this->returnCallback(function (string \$path) {
                \$packageName = \$version = null;
                \$absolute    = \$ignorePrefix = false;

                return \"{\$path}/{\$packageName}/{\$version}/{\$absolute}/{\$ignorePrefix}}\";
            }));

        \$assetsHelper = new AssetsHelper(\$packagesMock, \$coreParametersHelper);
        \$pathHelperMock->method('getSystemPath')->willReturn('https://example.com/');
        \$assetsHelper->setPathsHelper(\$pathHelperMock);

        return [
            new AppExtension(),
            new AssetExtension(\$assetsHelper),
            new ClassExtension(),
            new FormExtension(),
        ];
    }

    public function getFixturesDir()
    {
        return __DIR__.'/Fixtures/';
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
        return "@bundles/CoreBundle/Tests/Twig/TwigIntegrationTest.php";
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
        return new Source("", "@bundles/CoreBundle/Tests/Twig/TwigIntegrationTest.php", "/app/docroot/app/bundles/CoreBundle/Tests/Twig/TwigIntegrationTest.php");
    }
}
