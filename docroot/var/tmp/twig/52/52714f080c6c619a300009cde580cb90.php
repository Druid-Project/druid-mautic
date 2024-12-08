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

/* @bundles/CacheBundle/Tests/EventListener/CacheClearSubscriberTest.php */
class __TwigTemplate_53e800295d8c73f54ff12b9a4685014f extends Template
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

namespace Mautic\\CacheBundle\\Tests\\EventListener;

use Mautic\\CacheBundle\\Cache\\Adapter\\FilesystemTagAwareAdapter;
use Mautic\\CacheBundle\\EventListener\\CacheClearSubscriber;
use Monolog\\Logger;
use PHPUnit\\Framework\\MockObject\\MockObject;

class CacheClearSubscriberTest extends \\PHPUnit\\Framework\\TestCase
{
    /**
     * @var MockObject|FilesystemTagAwareAdapter
     */
    private MockObject \$adapter;

    private string \$random;

    public function setUp(): void
    {
        parent::setUp();
        \$this->random  = sha1((string) time());
        \$this->adapter = \$this->getMockBuilder(FilesystemTagAwareAdapter::class)
            ->disableOriginalConstructor()
            ->onlyMethods(['clear', 'commit'])
            ->addMethods(['getCacheAdapter']) // because CacheProvider does not have an interface.
            ->getMock();
        \$this->adapter->method('clear')->willReturn(\$this->random);
        \$this->adapter->method('commit')->willReturn(null);
        \$this->adapter->method('getCacheAdapter')->willReturn('');
    }

    public function testClear(): void
    {
        \$this->adapter->expects(\$this->once())->method('clear')->willReturn(\$this->random);
        \$subscriber = new CacheClearSubscriber(\$this->adapter, new Logger('test'));
        \$subscriber->clear('aaa');
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
        return "@bundles/CacheBundle/Tests/EventListener/CacheClearSubscriberTest.php";
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
        return new Source("", "@bundles/CacheBundle/Tests/EventListener/CacheClearSubscriberTest.php", "/app/docroot/app/bundles/CacheBundle/Tests/EventListener/CacheClearSubscriberTest.php");
    }
}
