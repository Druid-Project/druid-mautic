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

/* @bundles/LeadBundle/Tests/Form/Type/SegmentConfigTypeTest.php */
class __TwigTemplate_13f7b1861110301fc473ab6f83b61912 extends Template
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

namespace Mautic\\LeadBundle\\Tests\\Form\\Type;

use Mautic\\LeadBundle\\Form\\Type\\SegmentConfigType;
use PHPUnit\\Framework\\MockObject\\MockObject;
use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\Form\\Extension\\Core\\Type\\NumberType;
use Symfony\\Component\\Form\\FormBuilderInterface;

final class SegmentConfigTypeTest extends TestCase
{
    private SegmentConfigType \$segmentConfigType;

    /**
     * @var FormBuilderInterface<FormBuilderInterface>&MockObject
     */
    private MockObject \$formBuilderInterface;

    protected function setUp(): void
    {
        parent::setUp();

        \$this->segmentConfigType    = new SegmentConfigType();
        \$this->formBuilderInterface = \$this->createMock(FormBuilderInterface::class);
    }

    public function testThatGetBlockPrefixReturnsAValue(): void
    {
        \$blockPrefix = \$this->segmentConfigType->getBlockPrefix();
        \$this->assertNotEmpty(\$blockPrefix);
        \$this->assertTrue(is_string(\$blockPrefix));
    }

    public function testThatBuildFormMethodAddsSegmentBuildAndRebuildTimeWarningOption(): void
    {
        \$rebuildParameters = [
            'label'      => 'mautic.lead.list.form.config.segment_rebuild_time_warning',
            'label_attr' => [
                'class' => 'control-label',
            ],
            'attr' => [
                'class'   => 'form-control',
                'tooltip' => 'mautic.lead.list.form.config.segment_rebuild_time_warning.tooltip',
            ],
            'required' => false,
        ];

        \$buildParameters = [
            'label'      => 'mautic.lead.list.form.config.segment_build_time_warning',
            'label_attr' => [
                'class' => 'control-label',
            ],
            'attr' => [
                'class'   => 'form-control',
                'tooltip' => 'mautic.lead.list.form.config.segment_build_time_warning.tooltip',
            ],
            'required' => false,
        ];

        \$this->formBuilderInterface->expects(\$this->exactly(2))
            ->method('add')
            ->withConsecutive(
                ['segment_rebuild_time_warning',
                    NumberType::class,
                    \$rebuildParameters, ],
                ['segment_build_time_warning',
                    NumberType::class,
                    \$buildParameters, ],
            );

        \$this->segmentConfigType->buildForm(\$this->formBuilderInterface, []);
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
        return "@bundles/LeadBundle/Tests/Form/Type/SegmentConfigTypeTest.php";
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
        return new Source("", "@bundles/LeadBundle/Tests/Form/Type/SegmentConfigTypeTest.php", "/app/docroot/app/bundles/LeadBundle/Tests/Form/Type/SegmentConfigTypeTest.php");
    }
}
