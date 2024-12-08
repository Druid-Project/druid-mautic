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

/* @bundles/CoreBundle/Test/Listeners/SeparateProcessListener.php */
class __TwigTemplate_5d66be6d9e17bb3433b451c2dac392ae extends Template
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

namespace Mautic\\CoreBundle\\Test\\Listeners;

use PHPUnit\\Framework\\Test;
use PHPUnit\\Framework\\TestCase;
use PHPUnit\\Framework\\TestListener;
use PHPUnit\\Framework\\TestListenerDefaultImplementation;
use PHPUnit\\Framework\\TestSuite;

/**
 * Lists tests that should be run in a separate process and throws an exception making the test suite fail.
 */
class SeparateProcessListener implements TestListener
{
    use TestListenerDefaultImplementation;

    private const PROBLEMATIC_CONSTANTS = [
        'MAUTIC_INTEGRATION_SYNC_IN_PROGRESS',
    ];

    /**
     * @var array<string,string[]>
     */
    private array \$problematicTests = [];

    public function endTest(Test \$test, float \$time): void
    {
        if (\$this->isTestRunInSeparateProcess(\$test)) {
            return;
        }

        \$problematicConstants = \$this->getDefinedProblematicConstants();

        if (!\$problematicConstants) {
            return;
        }

        \$this->trackProblematicTest(\$test, \$problematicConstants);
    }

    /**
     * @param TestSuite|Test[] \$suite
     */
    public function endTestSuite(TestSuite \$suite): void
    {
        if (!\$this->problematicTests) {
            return;
        }

        foreach (\$this->problematicTests as \$testName => \$problematicConstants) {
            fwrite(STDOUT, sprintf('Test \"%s\" must be run in a separate process as there were defined the following constants during the test execution: \"%s\".%s', \$testName, implode(', ', \$problematicConstants), PHP_EOL));
        }

        throw new \\LogicException('There are tests that must be run in a separate process!');
    }

    private function isTestRunInSeparateProcess(Test \$test): bool
    {
        \$reflection = new \\ReflectionMethod(\$test, 'runInSeparateProcess');
        \$reflection->setAccessible(true);

        return \$reflection->invoke(\$test);
    }

    /**
     * @return string[]
     */
    private function getDefinedProblematicConstants(): array
    {
        \$defined = get_defined_constants(true)['user'] ?? [];

        return array_intersect(array_keys(\$defined), self::PROBLEMATIC_CONSTANTS);
    }

    /**
     * @param string[] \$problematicConstants
     */
    private function trackProblematicTest(Test \$test, array \$problematicConstants): void
    {
        if (!\$test instanceof TestCase) {
            throw new \\InvalidArgumentException(sprintf('\$test must be an instance of \"%s\".', TestCase::class));
        }

        \$testName = sprintf('%s::%s', \$test::class, \$test->getName());

        \$this->problematicTests[\$testName] = \$problematicConstants;
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
        return "@bundles/CoreBundle/Test/Listeners/SeparateProcessListener.php";
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
        return new Source("", "@bundles/CoreBundle/Test/Listeners/SeparateProcessListener.php", "/app/docroot/app/bundles/CoreBundle/Test/Listeners/SeparateProcessListener.php");
    }
}
