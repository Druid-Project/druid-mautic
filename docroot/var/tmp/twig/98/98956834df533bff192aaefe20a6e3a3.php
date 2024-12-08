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

/* @bundles/PageBundle/Tests/Form/Type/PageListTypeTest.php */
class __TwigTemplate_b401911cb5058ba8ffa15367d6524980 extends Template
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

namespace Mautic\\PageBundle\\Tests\\Form\\Type;

use Mautic\\CoreBundle\\Security\\Permissions\\CorePermissions;
use Mautic\\PageBundle\\Entity\\PageRepository;
use Mautic\\PageBundle\\Form\\Type\\PageListType;
use Mautic\\PageBundle\\Model\\PageModel;
use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\Form\\Extension\\Core\\Type\\ChoiceType;
use Symfony\\Component\\OptionsResolver\\OptionsResolver;

class PageListTypeTest extends TestCase
{
    private PageListType \$page;

    private \\PHPUnit\\Framework\\MockObject\\MockObject \$pageModelMock;

    public function setUp(): void
    {
        \$corePermissionsHelper = \$this->createMock(CorePermissions::class);
        \$this->pageModelMock   = \$this->createMock(PageModel::class);
        \$this->page            = new PageListType(\$this->pageModelMock, \$corePermissionsHelper);
    }

    public function testPageListTypeOptionsChoices(): void
    {
        \$pageRepository = \$this->createMock(PageRepository::class);
        \$resolver       = new OptionsResolver();

        \$this->pageModelMock
            ->method('getRepository')
            ->willReturn(\$pageRepository);

        \$pageRepository->method('getPageList')
            ->willReturn([]);

        \$this->page->configureOptions(\$resolver);

        \$expectedOptions = [
            'placeholder' => false,
            'expanded'    => false,
            'multiple'    => true,
            'required'    => false,
            'top_level'   => 'variant',
            'ignore_ids'  => [],
            'choices'     => [],
        ];
        \$this->assertEquals(\$expectedOptions, \$resolver->resolve());
    }

    public function testGetParent(): void
    {
        \$this->assertSame(ChoiceType::class, \$this->page->getParent());
    }

    public function testGetBlockPrefix(): void
    {
        \$this->assertSame('page_list', \$this->page->getBlockPrefix());
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
        return "@bundles/PageBundle/Tests/Form/Type/PageListTypeTest.php";
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
        return new Source("", "@bundles/PageBundle/Tests/Form/Type/PageListTypeTest.php", "/app/docroot/app/bundles/PageBundle/Tests/Form/Type/PageListTypeTest.php");
    }
}
