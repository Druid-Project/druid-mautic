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

/* @bundles/CoreBundle/Tests/Unit/Helper/ClickthroughHelperTest.php */
class __TwigTemplate_6ca51d63b103de080cb7f3165dc6e6bc extends Template
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

namespace Mautic\\CoreBundle\\Tests\\Unit\\Helper;

use Mautic\\CoreBundle\\Helper\\ClickthroughHelper;
use Mautic\\CoreBundle\\Tests\\Unit\\Helper\\TestResources\\WakeupCall;

class ClickthroughHelperTest extends \\PHPUnit\\Framework\\TestCase
{
    public function testEncodingCanBeDecoded(): void
    {
        \$array = ['foo' => 'bar'];

        \$this->assertEquals(\$array, ClickthroughHelper::decodeArrayFromUrl(ClickthroughHelper::encodeArrayForUrl(\$array)));
    }

    /**
     * @covers \\Mautic\\CoreBundle\\Helper\\Serializer::decode
     */
    public function testObjectInArrayIsDetectedOrIgnored(): void
    {
        \$this->expectException(\\InvalidArgumentException::class);

        \$array = ['foo' => new WakeupCall()];

        ClickthroughHelper::decodeArrayFromUrl(ClickthroughHelper::encodeArrayForUrl(\$array));
    }

    public function testOnlyArraysCanBeDecodedToPreventObjectWakeupVulnerability(): void
    {
        \$this->expectException(\\InvalidArgumentException::class);

        ClickthroughHelper::decodeArrayFromUrl(urlencode(base64_encode(serialize(new \\stdClass()))));
    }

    public function testEmptyStringDoesNotThrowException(): void
    {
        \$array = [];

        \$this->assertEquals(\$array, ClickthroughHelper::decodeArrayFromUrl(''));
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
        return "@bundles/CoreBundle/Tests/Unit/Helper/ClickthroughHelperTest.php";
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
        return new Source("", "@bundles/CoreBundle/Tests/Unit/Helper/ClickthroughHelperTest.php", "/app/docroot/app/bundles/CoreBundle/Tests/Unit/Helper/ClickthroughHelperTest.php");
    }
}
