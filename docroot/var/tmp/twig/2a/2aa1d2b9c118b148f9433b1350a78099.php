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

/* @bundles/CoreBundle/Tests/Unit/Twig/Helper/AssetsHelperTest.php */
class __TwigTemplate_d17334b55b126724145db8056899d62e extends Template
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

namespace Mautic\\CoreBundle\\Tests\\Unit\\Twig\\Helper;

use Mautic\\CoreBundle\\Helper\\CoreParametersHelper;
use Mautic\\CoreBundle\\Helper\\PathsHelper;
use Mautic\\CoreBundle\\Twig\\Helper\\AssetsHelper;
use PHPUnit\\Framework\\Assert;
use PHPUnit\\Framework\\MockObject\\MockObject;
use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\Asset\\Packages;

class AssetsHelperTest extends TestCase
{
    /**
     * @var CoreParametersHelper|MockObject
     */
    private MockObject \$coreParametersHelper;

    /**
     * @var PathsHelper|MockObject
     */
    private MockObject \$pathsHelper;

    private AssetsHelper \$assetHelper;

    protected function setUp(): void
    {
        \$this->coreParametersHelper = \$this->createMock(CoreParametersHelper::class);
        \$this->pathsHelper          = \$this->createMock(PathsHelper::class);
        \$this->assetHelper          = new AssetsHelper(\$this->createPackagesMock(), \$this->coreParametersHelper);

        \$this->assetHelper->setPathsHelper(\$this->pathsHelper);
    }

    public function testAssetContext(): void
    {
        \$this->pathsHelper->method('getSystemPath')
            ->willReturn('');

        \$this->assetHelper->addStylesheet('/app.css');
        \$head = \$this->assetHelper->getHeadDeclarations();

        Assert::assertStringContainsString('app.css', \$head);

        \$this->assetHelper->setContext(AssetsHelper::CONTEXT_BUILDER)
            ->addStylesheet('/builder.css')
            ->setContext();

        \$head = \$this->assetHelper->getHeadDeclarations();
        Assert::assertStringNotContainsString('builder.css', \$head);

        \$head = \$this->assetHelper->setContext(AssetsHelper::CONTEXT_BUILDER)
            ->getHeadDeclarations();
        Assert::assertStringContainsString('builder.css', \$head);
        Assert::assertStringNotContainsString('app.css', \$head);

        \$version = \$this->setVersion(\$this->assetHelper);

        \$head = \$this->assetHelper->setContext(AssetsHelper::CONTEXT_BUILDER)
            ->getHeadDeclarations();
        Assert::assertStringContainsString('builder.css?v'.\$version, \$head);
        Assert::assertStringNotContainsString('app.css?v'.\$version, \$head);
    }

    public function testGetUrlWithAbsolutePath(): void
    {
        Assert::assertEquals('http://some.absolute/path', \$this->assetHelper->getUrl('http://some.absolute/path'));
        Assert::assertEquals('https://some.absolute/path', \$this->assetHelper->getUrl('https://some.absolute/path'));

        \$this->setVersion(\$this->assetHelper);

        Assert::assertEquals('http://some.absolute/path', \$this->assetHelper->getUrl('http://some.absolute/path'));
        Assert::assertEquals('https://some.absolute/path', \$this->assetHelper->getUrl('https://some.absolute/path'));
    }

    public function testGetUrlWithRelativePath(): void
    {
        \$this->pathsHelper->method('getSystemPath')
            ->willReturn('http://some.mautic');

        \$this->assetHelper->setPathsHelper(\$this->pathsHelper);

        Assert::assertEquals('http://some.mautic/some/path', \$this->assetHelper->getUrl('some/path'));

        \$version = \$this->setVersion(\$this->assetHelper);

        Assert::assertEquals('http://some.mautic/some/path?v'.\$version, \$this->assetHelper->getUrl('some/path'));
    }

    public function testGetUrlWithRelativePathWhenMauticInSubFolder(): void
    {
        \$this->pathsHelper->method('getSystemPath')
            ->willReturn('http://some.mautic/m');

        \$this->assetHelper->setPathsHelper(\$this->pathsHelper);

        Assert::assertEquals('http://some.mautic/m/some/path', \$this->assetHelper->getUrl('some/path'));

        \$version = \$this->setVersion(\$this->assetHelper);

        Assert::assertEquals('http://some.mautic/m/some/path?v'.\$version, \$this->assetHelper->getUrl('some/path'));
    }

    public function testGetUrlWithRelativePathWithDevIndex(): void
    {
        \$this->pathsHelper->method('getSystemPath')
            ->willReturn('http://some.mautic/');

        \$this->assetHelper->setPathsHelper(\$this->pathsHelper);

        Assert::assertEquals('http://some.mautic/some/path', \$this->assetHelper->getUrl('some/path'));

        \$version = \$this->setVersion(\$this->assetHelper);

        Assert::assertEquals('http://some.mautic/some/path?v'.\$version, \$this->assetHelper->getUrl('some/path'));
    }

    public function testGetUrlWithVersionAndExistingQueryPart(): void
    {
        \$this->pathsHelper->method('getSystemPath')
            ->willReturn('/');

        \$this->assetHelper->setPathsHelper(\$this->pathsHelper);

        \$version = \$this->setVersion(\$this->assetHelper);

        Assert::assertEquals('/path?some&amp;v'.\$version, \$this->assetHelper->getUrl('/path?some'));
        Assert::assertEquals('/path?some=65&amp;v'.\$version, \$this->assetHelper->getUrl('/path?some=65'));
        Assert::assertEquals('/path?v'.\$version, \$this->assetHelper->getUrl('/path?v'.\$version));
    }

    public function testGetCKEditorScripts(): void
    {
        \$secretKey   = 'mautic';
        \$version     = 1;
        \$this->assetHelper->setVersion(\$secretKey, \$version);
        \$version = substr(hash('sha1', \$secretKey.\$version), 0, 8);

        \$reflectionObject = new \\ReflectionObject(\$this->assetHelper);
        \$method           = \$reflectionObject->getMethod('getCKEditorScripts');
        \$method->setAccessible(true);
        \$ckEditorScripts = \$method->invokeArgs(\$this->assetHelper, []);
        Assert::assertEquals(
            [
                \"media/libraries/ckeditor/ckeditor.js?v{\$version}\",
            ],
            \$ckEditorScripts
        );
    }

    /**
     * @return MockObject&Packages
     */
    private function createPackagesMock()
    {
        /** @var MockObject&Packages \$packagesMock */
        \$packagesMock = \$this->createMock(Packages::class);

        \$packagesMock->method('getUrl')
            ->will(\$this->returnCallback(fn (string \$path) => \$path));

        return \$packagesMock;
    }

    private function setVersion(AssetsHelper \$assetsHelper): string
    {
        \$secretKey = 'secret';
        \$version   = '123';
        \$assetsHelper->setVersion(\$secretKey, \$version);

        return substr(hash('sha1', \$secretKey.\$version), 0, 8);
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
        return "@bundles/CoreBundle/Tests/Unit/Twig/Helper/AssetsHelperTest.php";
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
        return new Source("", "@bundles/CoreBundle/Tests/Unit/Twig/Helper/AssetsHelperTest.php", "/app/docroot/app/bundles/CoreBundle/Tests/Unit/Twig/Helper/AssetsHelperTest.php");
    }
}
