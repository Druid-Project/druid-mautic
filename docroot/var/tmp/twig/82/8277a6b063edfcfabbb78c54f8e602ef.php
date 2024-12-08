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

/* @bundles/LeadBundle/Tests/Helper/SegmentCountCacheHelperTest.php */
class __TwigTemplate_0142f4fbba93e0a3b26a739815913b9b extends Template
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

namespace Mautic\\LeadBundle\\Tests\\Helper;

use Mautic\\CoreBundle\\Helper\\CacheStorageHelper;
use Mautic\\LeadBundle\\Helper\\SegmentCountCacheHelper;
use PHPUnit\\Framework\\Assert;
use PHPUnit\\Framework\\MockObject\\MockObject;
use PHPUnit\\Framework\\TestCase;

class SegmentCountCacheHelperTest extends TestCase
{
    /**
     * @var CacheStorageHelper|MockObject
     */
    private MockObject \$cacheStorageHelperMock;

    private SegmentCountCacheHelper \$segmentCountCacheHelper;

    protected function setUp(): void
    {
        \$this->cacheStorageHelperMock  = \$this->createMock(CacheStorageHelper::class);
        \$this->segmentCountCacheHelper = new SegmentCountCacheHelper(\$this->cacheStorageHelperMock);
    }

    public function testDecrementSegmentContactCountHasNoCache(): void
    {
        \$segmentId = 1;
        \$this->cacheStorageHelperMock
            ->expects(self::once())
            ->method('has')
            ->with('segment.'.\$segmentId.'.lead')
            ->willReturn(false);
        \$this->segmentCountCacheHelper->decrementSegmentContactCount(\$segmentId);
        Assert::isNull();
    }

    public function testDecrementSegmentContactCount(): void
    {
        \$segmentId = 1;
        \$this->cacheStorageHelperMock
            ->expects(self::once())
            ->method('has')
            ->with('segment.'.\$segmentId.'.lead')
            ->willReturn(true);
        \$this->cacheStorageHelperMock
            ->expects(self::once())
            ->method('get')
            ->with('segment.'.\$segmentId.'.lead')
            ->willReturn('10');
        // Decrement count.
        \$this->cacheStorageHelperMock
            ->expects(self::once())
            ->method('set')
            ->with('segment.'.\$segmentId.'.lead', 9);
        \$this->segmentCountCacheHelper->decrementSegmentContactCount(\$segmentId);
        Assert::isNull();
    }

    public function testDecrementSegmentCountIsNotNegative(): void
    {
        \$segmentId = 1;
        \$this->cacheStorageHelperMock
            ->expects(self::once())
            ->method('has')
            ->with('segment.'.\$segmentId.'.lead')
            ->willReturn(true);
        \$this->cacheStorageHelperMock
            ->expects(self::once())
            ->method('get')
            ->with('segment.'.\$segmentId.'.lead')
            ->willReturn('0');
        // Edge case. Should not decrement below 0.
        \$this->cacheStorageHelperMock
            ->expects(self::once())
            ->method('set')
            ->with('segment.'.\$segmentId.'.lead', 0);
        \$this->segmentCountCacheHelper->decrementSegmentContactCount(\$segmentId);
        Assert::isNull();
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
        return "@bundles/LeadBundle/Tests/Helper/SegmentCountCacheHelperTest.php";
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
        return new Source("", "@bundles/LeadBundle/Tests/Helper/SegmentCountCacheHelperTest.php", "/app/docroot/app/bundles/LeadBundle/Tests/Helper/SegmentCountCacheHelperTest.php");
    }
}
