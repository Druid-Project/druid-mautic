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

/* @bundles/CoreBundle/Tests/Unit/Helper/PageHelperTest.php */
class __TwigTemplate_d307e83c3b3953d0e96f5cce9b231781 extends Template
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

namespace Mautic\\CoreBundle\\Tests\\Unit\\Helper;

use Mautic\\CoreBundle\\Helper\\CoreParametersHelper;
use Mautic\\CoreBundle\\Helper\\PageHelper;
use Symfony\\Component\\HttpFoundation\\Session\\SessionInterface;

class PageHelperTest extends \\PHPUnit\\Framework\\TestCase
{
    private \\PHPUnit\\Framework\\MockObject\\MockObject \$session;

    private \\PHPUnit\\Framework\\MockObject\\MockObject \$coreParametersHelper;

    private PageHelper \$pageHelper;

    protected function setUp(): void
    {
        parent::setUp();
        \$this->session              = \$this->createMock(SessionInterface::class);
        \$this->coreParametersHelper = \$this->createMock(CoreParametersHelper::class);
        \$this->pageHelper           = new PageHelper(\$this->session, \$this->coreParametersHelper, 'mautic.test', 0);
    }

    /**
     * @dataProvider PageProvider
     */
    public function testCountPage(int \$count, int \$limit, int \$page): void
    {
        \$this->session->expects(\$this->once())
            ->method('get')
            ->with('mautic.test.limit')
            ->willReturn(\$limit);

        \$this->assertSame(\$page, \$this->pageHelper->countPage(\$count));
    }

    public static function pageProvider()
    {
        return [
            [0, 10, 1],
            [1, 10, 1],
            [5, 10, 1],
            [10, 10, 1],
            [11, 10, 2],
            [20, 10, 2],
            [21, 10, 3],
            [15, 15, 1],
            [16, 15, 2],
        ];
    }

    /**
     * @dataProvider startProvider
     */
    public function testCountStart(int \$page, int \$limit, int \$start): void
    {
        \$this->session->expects(\$this->once())
            ->method('get')
            ->with('mautic.test.limit')
            ->willReturn(\$limit);

        \$this->assertSame(\$start, \$this->pageHelper->countPage(\$page));
    }

    public static function startProvider()
    {
        return [
            [0, 10, 1],
            [1, 10, 1],
            [10, 10, 1],
            [11, 10, 2],
        ];
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
        return "@bundles/CoreBundle/Tests/Unit/Helper/PageHelperTest.php";
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
        return new Source("", "@bundles/CoreBundle/Tests/Unit/Helper/PageHelperTest.php", "/app/docroot/app/bundles/CoreBundle/Tests/Unit/Helper/PageHelperTest.php");
    }
}
