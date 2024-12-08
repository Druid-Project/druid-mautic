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

/* @bundles/CoreBundle/Tests/Unit/Twig/Helper/ContentHelperTest.php */
class __TwigTemplate_87867c1d562610353785f1b19c80bc28 extends Template
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

namespace Mautic\\CoreBundle\\Tests\\Unit\\Twig\\Helper;

use Mautic\\CoreBundle\\Twig\\Helper\\ContentHelper;
use Symfony\\Component\\EventDispatcher\\EventDispatcherInterface;
use Twig\\Environment;

class ContentHelperTest extends \\PHPUnit\\Framework\\TestCase
{
    /**
     * @var ContentHelper
     */
    private \$contentHelper;

    protected function setUp(): void
    {
        \$dispatcherMock = \$this->getMockBuilder(EventDispatcherInterface::class)
            ->disableOriginalConstructor()
            ->getMock();

        \$delegationMock = \$this->getMockBuilder(Environment::class)
            ->disableOriginalConstructor()
            ->getMock();

        \$this->contentHelper = new ContentHelper(\$delegationMock, \$dispatcherMock);
    }

    public function testShowScriptTagsContext(): void
    {
        \$this->doShowTagsContext('script');
    }

    public function testShowStyleTagsContext(): void
    {
        \$this->doShowTagsContext('style');
    }

    public function testShowScriptTagsInlineContext(): void
    {
        \$sample   = 'Hi <script>console.log(\"do not mind me\");</script> <script type=\"text/javascript\">console.log(\"do not mind me\");</script>';
        \$expected = 'Hi [script]console.log(\"do not mind me\");[/script] [script type=\"text/javascript\"]console.log(\"do not mind me\");[/script]';

        \$result = \$this->contentHelper->showScriptTags(\$sample);

        \$this->assertEquals(\$expected, \$result);
    }

    private function doShowTagsContext(string \$tag): void
    {
        \$sample        = '<h1>Hello World</h1>

        <'.\$tag.'>
            console.log(\"do not mind me\");
        </'.\$tag.'>
        
        <'.\$tag.' type=\"text/javascript\">
            console.log(\"do not mind me\");
        </'.\$tag.'>';

        \$expected = '<h1>Hello World</h1>

        ['.\$tag.']
            console.log(\"do not mind me\");
        [/'.\$tag.']
        
        ['.\$tag.' type=\"text/javascript\"]
            console.log(\"do not mind me\");
        [/'.\$tag.']';

        \$result = \$this->contentHelper->showScriptTags(\$sample);

        \$this->assertEquals(\$expected, \$result);
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
        return "@bundles/CoreBundle/Tests/Unit/Twig/Helper/ContentHelperTest.php";
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
        return new Source("", "@bundles/CoreBundle/Tests/Unit/Twig/Helper/ContentHelperTest.php", "/app/docroot/app/bundles/CoreBundle/Tests/Unit/Twig/Helper/ContentHelperTest.php");
    }
}
