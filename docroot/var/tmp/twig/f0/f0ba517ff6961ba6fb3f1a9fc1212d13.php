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

/* @bundles/LeadBundle/Tests/Form/Type/CampaignEventLeadStagesTypeTest.php */
class __TwigTemplate_be61905f2546264cfd54700d35f0c9ab extends Template
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

use Mautic\\CoreBundle\\Test\\AbstractMauticTestCase;
use Mautic\\LeadBundle\\Form\\Type\\CampaignEventLeadStagesType;
use Mautic\\StageBundle\\Form\\Type\\StageListType;
use PHPUnit\\Framework\\MockObject\\MockObject;
use Symfony\\Component\\Form\\FormBuilderInterface;

final class CampaignEventLeadStagesTypeTest extends AbstractMauticTestCase
{
    private CampaignEventLeadStagesType \$campaignEventLeadStagesType;

    /**
     * @var FormBuilderInterface&MockObject
     */
    private FormBuilderInterface \$formBuilderInterface;

    protected function setUp(): void
    {
        parent::setUp();

        \$this->campaignEventLeadStagesType = new CampaignEventLeadStagesType();
        \$this->formBuilderInterface        = \$this->createMock(FormBuilderInterface::class);
    }

    public function testCampaignEventLeadStagesTypeFormIsProperlyBuilt(): void
    {
        \$parameters = [
            'label'       => 'mautic.lead.lead.field.stage',
            'label_attr'  => ['class' => 'control-label'],
            'multiple'    => true,
            'required'    => false,
        ];

        \$this->formBuilderInterface->expects(\$this->once())
            ->method('add')
            ->with(
                'stages',
                StageListType::class,
                \$parameters
            );

        \$this->campaignEventLeadStagesType->buildForm(\$this->formBuilderInterface, []);
    }

    public function testThatGetBlockPrefixReturnsAValue(): void
    {
        \$blockPrefix = \$this->campaignEventLeadStagesType->getBlockPrefix();
        \$this->assertNotEmpty(\$blockPrefix);
        \$this->assertSame('campaignevent_lead_stages', \$blockPrefix);
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
        return "@bundles/LeadBundle/Tests/Form/Type/CampaignEventLeadStagesTypeTest.php";
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
        return new Source("", "@bundles/LeadBundle/Tests/Form/Type/CampaignEventLeadStagesTypeTest.php", "/app/docroot/app/bundles/LeadBundle/Tests/Form/Type/CampaignEventLeadStagesTypeTest.php");
    }
}
