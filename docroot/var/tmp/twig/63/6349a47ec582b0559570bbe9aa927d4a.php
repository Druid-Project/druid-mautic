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

/* @bundles/LeadBundle/Tests/Form/Type/LeadFieldsTypeTest.php */
class __TwigTemplate_15d8de91847947a028db95a44cc512d1 extends Template
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

use Mautic\\LeadBundle\\Form\\Type\\LeadFieldsType;
use Mautic\\LeadBundle\\Model\\FieldModel;
use PHPUnit\\Framework\\MockObject\\MockObject;
use Symfony\\Component\\OptionsResolver\\OptionsResolver;

final class LeadFieldsTypeTest extends \\PHPUnit\\Framework\\TestCase
{
    /**
     * @var MockObject|FieldModel
     */
    private MockObject \$fieldModel;

    private LeadFieldsType \$form;

    protected function setUp(): void
    {
        parent::setUp();

        \$this->fieldModel = \$this->createMock(FieldModel::class);
        \$this->form       = new LeadFieldsType(\$this->fieldModel);
    }

    public function testTransform(): void
    {
        /** @var MockObject|OptionsResolver \$optionsResolver */
        \$optionsResolver = \$this->createMock(OptionsResolver::class);

        \$this->fieldModel->expects(\$this->exactly(2))
            ->method('getFieldList')
            ->willReturnOnConsecutiveCalls(
                [
                    'Core' => [
                        'contact_field_1' => 'Contact field 1 label',
                    ],
                ],
                [
                    'company_field_1' => 'Company field 1 label',
                ]
            );

        // All options are set to true with this.
        \$optionsResolver->method('offsetGet')
            ->willReturn(true);

        \$optionsResolver->expects(\$this->once())
            ->method('setDefaults')
            ->with(\$this->callback(
                function (array \$defaults) use (\$optionsResolver) {
                    \$choices = \$defaults['choices'](\$optionsResolver);

                    // Notice the labels and values are switched.
                    \$this->assertSame(
                        [
                            'Core' => [
                                'Contact field 1 label'  => 'contact_field_1',
                                'mautic.lead.field.tags' => 'tags',
                            ],
                            'Company' => [
                                'Company field 1 label' => 'company_field_1',
                            ],
                            'UTM' => [
                                'mautic.lead.field.utmcampaign' => 'utm_campaign',
                                'mautic.lead.field.utmcontent'  => 'utm_content',
                                'mautic.lead.field.utmmedium'   => 'utm_medium',
                                'mautic.lead.field.umtsource'   => 'utm_source',
                                'mautic.lead.field.utmterm'     => 'utm_term',
                            ],
                        ],
                        \$choices
                    );

                    return true;
                }
            ));

        \$this->form->configureOptions(\$optionsResolver);
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
        return "@bundles/LeadBundle/Tests/Form/Type/LeadFieldsTypeTest.php";
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
        return new Source("", "@bundles/LeadBundle/Tests/Form/Type/LeadFieldsTypeTest.php", "/app/docroot/app/bundles/LeadBundle/Tests/Form/Type/LeadFieldsTypeTest.php");
    }
}
