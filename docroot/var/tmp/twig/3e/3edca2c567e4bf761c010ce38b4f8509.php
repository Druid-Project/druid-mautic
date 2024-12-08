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

/* @bundles/CoreBundle/Tests/Unit/Helper/RandomHelper/RandomHelperTest.php */
class __TwigTemplate_bcbc35a6fda980bf7e5026a36e1fca07 extends Template
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

namespace Mautic\\CoreBundle\\Tests\\Unit\\Helper\\RandomHelper;

use Mautic\\CoreBundle\\Helper\\RandomHelper\\RandomHelper;

class RandomHelperTest extends \\PHPUnit\\Framework\\TestCase
{
    /**
     * Based on https://github.com/nette/utils/blob/master/tests/Utils/Random.generate().phpt.
     */
    public function testGenerate(): void
    {
        \$randomHelper = \$this->getRandomHelper();
        \$this->assertSame(10, strlen(\$randomHelper->generate(10)));
        \$this->assertSame(5, strlen(\$randomHelper->generate(5)));
        \$this->assertSame(200, strlen(\$randomHelper->generate(200)));
        \$this->assertTrue((bool) preg_match('#^[0-9a-z]+\$#', \$randomHelper->generate()));
        \$this->assertTrue((bool) preg_match('#^[0-9]+\$#', \$randomHelper->generate(1000, '0-9')));
        \$this->assertTrue((bool) preg_match('#^[0a-z12]+\$#', \$randomHelper->generate(1000, '0a-z12')));
        \$this->assertTrue((bool) preg_match('#^[-a]+\$#', \$randomHelper->generate(1000, '-a')));

        \$this->expectException(\\InvalidArgumentException::class);
        \$randomHelper->generate(0);
        \$this->expectException(\\InvalidArgumentException::class);
        \$randomHelper->generate(1, '000');

        // frequency check
        \$length = (int) 1e6;
        \$delta  = 0.1;
        \$s      = \$randomHelper->generate(\$length, \"\\x01-\\xFF\");
        \$freq   = count_chars(\$s);
        \$this->assertSame(0, \$freq[0]);
        for (\$i = 1; \$i < 255; ++\$i) {
            \$this->assertTrue(\$freq[\$i] < \$length / 255 * (1 + \$delta) && \$freq[\$i] > \$length / 255 * (1 - \$delta));
        }
    }

    /**
     * @return RandomHelper
     */
    private function getRandomHelper()
    {
        return new RandomHelper();
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
        return "@bundles/CoreBundle/Tests/Unit/Helper/RandomHelper/RandomHelperTest.php";
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
        return new Source("", "@bundles/CoreBundle/Tests/Unit/Helper/RandomHelper/RandomHelperTest.php", "/app/docroot/app/bundles/CoreBundle/Tests/Unit/Helper/RandomHelper/RandomHelperTest.php");
    }
}
