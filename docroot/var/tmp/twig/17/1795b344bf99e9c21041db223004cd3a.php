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

/* @bundles/CoreBundle/Tests/Unit/Update/Step/UpdateTranslationsStepTest.php */
class __TwigTemplate_8601998eaea5fad2652346290b807007 extends Template
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

namespace Mautic\\CoreBundle\\Tests\\Unit\\Update\\Step;

use Mautic\\CoreBundle\\Helper\\LanguageHelper;
use Mautic\\CoreBundle\\Update\\Step\\UpdateTranslationsStep;
use PHPUnit\\Framework\\MockObject\\MockObject;
use Psr\\Log\\LoggerInterface;
use Symfony\\Contracts\\Translation\\TranslatorInterface;

class UpdateTranslationsStepTest extends AbstractStepTest
{
    /**
     * @var MockObject|TranslatorInterface
     */
    private MockObject \$translator;

    /**
     * @var MockObject|LanguageHelper
     */
    private MockObject \$languageHelper;

    /**
     * @var MockObject|LoggerInterface
     */
    private MockObject \$logger;

    private UpdateTranslationsStep \$step;

    protected function setUp(): void
    {
        parent::setUp();

        \$this->translator     = \$this->createMock(TranslatorInterface::class);
        \$this->languageHelper = \$this->createMock(LanguageHelper::class);
        \$this->logger         = \$this->createMock(LoggerInterface::class);

        \$this->step = new UpdateTranslationsStep(\$this->translator, \$this->languageHelper, \$this->logger);
    }

    public function testLanguageUnpackingSkippedIfJustOneLanguageIsEnabled(): void
    {
        \$this->languageHelper->expects(\$this->once())
            ->method('getSupportedLanguages')
            ->willReturn(['en_US' => []]);

        \$this->languageHelper->expects(\$this->never())
            ->method('fetchLanguages');

        \$this->step->execute(\$this->progressBar, \$this->input, \$this->output);
    }

    public function testFetchingLanguagesLogError(): void
    {
        \$this->languageHelper->expects(\$this->once())
            ->method('getSupportedLanguages')
            ->willReturn(
                [
                    'en_US' => 'English - US',
                    'es_MX' => 'Spanish - Mexico',
                ]
            );

        \$this->languageHelper->expects(\$this->once())
            ->method('fetchLanguages')
            ->willReturn(['error' => 'there was an error']);

        \$this->logger->expects(\$this->once())
            ->method('error')
            ->with('UPDATE ERROR: there was an error');

        \$this->translator->expects(\$this->any())
            ->method('trans')
            ->willReturn('');

        \$this->step->execute(\$this->progressBar, \$this->input, \$this->output);
    }

    public function testUsPackageSkipped(): void
    {
        \$this->languageHelper->expects(\$this->once())
            ->method('getSupportedLanguages')
            ->willReturn(
                [
                    'en_US' => 'English - US',
                    'es_MX' => 'Spanish - Mexico',
                ]
            );

        \$this->languageHelper->expects(\$this->once())
            ->method('fetchLanguages')
            ->willReturn([]);

        \$this->languageHelper->expects(\$this->once())
            ->method('extractLanguagePackage')
            ->with('es_MX')
            ->willReturn(['error' => false]);

        \$this->translator->expects(\$this->any())
            ->method('trans')
            ->willReturn('');

        \$this->step->execute(\$this->progressBar, \$this->input, \$this->output);
    }

    public function testExtractionErrorIsLogged(): void
    {
        \$this->languageHelper->expects(\$this->once())
            ->method('getSupportedLanguages')
            ->willReturn(
                [
                    'en_US' => 'English - US',
                    'es_MX' => 'Spanish - Mexico',
                ]
            );

        \$this->languageHelper->expects(\$this->once())
            ->method('fetchLanguages')
            ->willReturn([]);

        \$this->languageHelper->expects(\$this->once())
            ->method('extractLanguagePackage')
            ->with('es_MX')
            ->willReturn(['error' => true]);

        \$this->translator->method('trans')
            ->willReturnCallback(
                fn (string \$key) => \$key
            );

        \$this->logger->expects(\$this->once())
            ->method('error')
            ->with('UPDATE ERROR: mautic.core.update.error_updating_language');

        \$this->step->execute(\$this->progressBar, \$this->input, \$this->output);
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
        return "@bundles/CoreBundle/Tests/Unit/Update/Step/UpdateTranslationsStepTest.php";
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
        return new Source("", "@bundles/CoreBundle/Tests/Unit/Update/Step/UpdateTranslationsStepTest.php", "/app/docroot/app/bundles/CoreBundle/Tests/Unit/Update/Step/UpdateTranslationsStepTest.php");
    }
}
