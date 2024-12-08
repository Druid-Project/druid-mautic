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

/* @bundles/PageBundle/Tests/Form/Type/RedirectListTypeTest.php */
class __TwigTemplate_7bdc44d3995b0d9c68ca77f94970a3eb extends Template
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

use Mautic\\PageBundle\\Form\\Type\\RedirectListType;
use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\Form\\Extension\\Core\\Type\\ChoiceType;
use Symfony\\Component\\OptionsResolver\\OptionsResolver;

class RedirectListTypeTest extends TestCase
{
    private RedirectListType \$form;

    public function setUp(): void
    {
        \$this->form = new RedirectListType();
    }

    public function testGetParent(): void
    {
        \$this->assertSame(ChoiceType::class, \$this->form->getParent());
    }

    public function testConfigureOptionsChoicesDefined(): void
    {
        \$choices = [
            'mautic.page.form.redirecttype.permanent'     => 301,
            'mautic.page.form.redirecttype.temporary'     => 302,
            'mautic.page.form.redirecttype.303_temporary' => 303,
            'mautic.page.form.redirecttype.307_temporary' => 307,
            'mautic.page.form.redirecttype.308_permanent' => 308,
        ];

        \$resolver = new OptionsResolver();
        \$this->form->configureOptions(\$resolver);

        \$expectedOptions = [
            'choices'    => \$choices,
            'expanded'   => false,
            'multiple'   => false,
            'label'      => 'mautic.page.form.redirecttype',
            'label_attr' => [
                'class' => 'control-label',
            ],
            'placeholder' => false,
            'required'    => false,
            'attr'        => [
                'class' => 'form-control',
            ],
            'feature' => 'all',
        ];

        \$this->assertSame(\$expectedOptions, \$resolver->resolve());
    }

    public function testGetBlockPrefix(): void
    {
        \$this->assertSame('redirect_list', \$this->form->getBlockPrefix());
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
        return "@bundles/PageBundle/Tests/Form/Type/RedirectListTypeTest.php";
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
        return new Source("", "@bundles/PageBundle/Tests/Form/Type/RedirectListTypeTest.php", "/app/docroot/app/bundles/PageBundle/Tests/Form/Type/RedirectListTypeTest.php");
    }
}
