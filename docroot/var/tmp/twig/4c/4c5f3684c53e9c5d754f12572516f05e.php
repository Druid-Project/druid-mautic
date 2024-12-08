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

/* @bundles/CoreBundle/Tests/Unit/Monolog/LogProcessorTest.php */
class __TwigTemplate_38d865e62d80202b56fd197cc3db1782 extends Template
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

namespace Mautic\\CoreBundle\\Tests\\Unit\\Monolog;

use Mautic\\CoreBundle\\Monolog\\LogProcessor;
use PHPUnit\\Framework\\Assert;
use PHPUnit\\Framework\\TestCase;

class LogProcessorTest extends TestCase
{
    public function testLogProcessor(): void
    {
        \$logProcessor = new LogProcessor();
        \$record       = [
            'message'    => 'This is debug message',
            'context'    => [],
            'level'      => 100,
            'level_name' => 'DEBUG',
            'channel'    => 'mautic',
            'datetime'   => new \\DateTime(),
            'extra'      => [
                'existing' => 'value',
            ],
        ];
        \$outputRecord = \$logProcessor(\$record);

        \$record['extra']['hostname'] = gethostname();
        \$record['extra']['pid']      = getmypid();

        Assert::assertSame(\$record, \$outputRecord);
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
        return "@bundles/CoreBundle/Tests/Unit/Monolog/LogProcessorTest.php";
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
        return new Source("", "@bundles/CoreBundle/Tests/Unit/Monolog/LogProcessorTest.php", "/app/docroot/app/bundles/CoreBundle/Tests/Unit/Monolog/LogProcessorTest.php");
    }
}
