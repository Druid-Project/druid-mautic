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

/* @bundles/EmailBundle/Tests/Form/Type/EmailTypeTest.php */
class __TwigTemplate_b2492e8e5b30dc0925090f83b23168ec extends Template
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

namespace Mautic\\EmailBundle\\Tests\\Form\\Type;

use Doctrine\\ORM\\EntityManager;
use Mautic\\CoreBundle\\Helper\\CoreParametersHelper;
use Mautic\\CoreBundle\\Helper\\ThemeHelperInterface;
use Mautic\\EmailBundle\\Entity\\Email;
use Mautic\\EmailBundle\\Form\\Type\\EmailType;
use Mautic\\StageBundle\\Model\\StageModel;
use PHPUnit\\Framework\\Assert;
use PHPUnit\\Framework\\MockObject\\MockObject;
use Symfony\\Component\\Form\\FormBuilderInterface;
use Symfony\\Contracts\\Translation\\TranslatorInterface;

class EmailTypeTest extends \\PHPUnit\\Framework\\TestCase
{
    /**
     * @var MockObject|TranslatorInterface
     */
    private MockObject \$translator;

    /**
     * @var MockObject|EntityManager
     */
    private MockObject \$entityManager;

    /**
     * @var MockObject|StageModel
     */
    private MockObject \$stageModel;

    /**
     * @var MockObject|FormBuilderInterface
     */
    private MockObject \$formBuilder;

    private EmailType \$form;

    /**
     * @var CoreParametersHelper|MockObject
     */
    private MockObject \$coreParametersHelper;

    /**
     * @var ThemeHelperInterface|MockObject
     */
    private MockObject \$themeHelper;

    protected function setUp(): void
    {
        parent::setUp();

        \$this->translator           = \$this->createMock(TranslatorInterface::class);
        \$this->entityManager        = \$this->createMock(EntityManager::class);
        \$this->stageModel           = \$this->createMock(StageModel::class);
        \$this->formBuilder          = \$this->createMock(FormBuilderInterface::class);
        \$this->coreParametersHelper = \$this->createMock(CoreParametersHelper::class);
        \$this->themeHelper          = \$this->createMock(ThemeHelperInterface::class);
        \$this->form                 = new EmailType(
            \$this->translator,
            \$this->entityManager,
            \$this->stageModel,
            \$this->coreParametersHelper,
            \$this->themeHelper
        );

        \$this->formBuilder->method('create')->willReturnSelf();
    }

    public function testBuildForm(): void
    {
        \$options = ['data' => new Email()];
        \$names   = [];
        \$this->themeHelper
            ->expects(\$this->once())
            ->method('getCurrentTheme')
            ->with('blank', 'email')
            ->willReturn('blank');

        \$this->formBuilder->method('add')
            ->with(
                \$this->callback(
                    function (\$name) use (&\$names) {
                        \$names[] = \$name;

                        return true;
                    }
                )
            );

        \$this->form->buildForm(\$this->formBuilder, \$options);

        Assert::assertContains('buttons', \$names);
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
        return "@bundles/EmailBundle/Tests/Form/Type/EmailTypeTest.php";
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
        return new Source("", "@bundles/EmailBundle/Tests/Form/Type/EmailTypeTest.php", "/app/docroot/app/bundles/EmailBundle/Tests/Form/Type/EmailTypeTest.php");
    }
}
