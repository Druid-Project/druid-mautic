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

/* @bundles/LeadBundle/Tests/Entity/CustomFieldRepositoryTraitTest.php */
class __TwigTemplate_6a8577555fbd4c10021bd1f05b1c8fc7 extends Template
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

namespace Mautic\\LeadBundle\\Tests\\Entity;

use Mautic\\LeadBundle\\Entity\\CustomFieldRepositoryTrait;
use Mautic\\LeadBundle\\Tests\\StandardImportTestHelper;

class CustomFieldRepositoryTraitTest extends StandardImportTestHelper
{
    private \$fields = [
        'firstname' => [
            'id'       => 2,
            'label'    => 'First Name',
            'alias'    => 'firstname',
            'type'     => 'text',
            'group'    => 'core',
            'object'   => 'lead',
            'is_fixed' => 1,
        ],
        'lastname' => [
            'id'       => 3,
            'label'    => 'Last Name',
            'alias'    => 'lastname',
            'type'     => 'text',
            'group'    => 'core',
            'object'   => 'lead',
            'is_fixed' => 1,
        ],
        'twitter' => [
            'id'       => 27,
            'label'    => 'Twitter',
            'alias'    => 'twitter',
            'type'     => 'text',
            'group'    => 'social',
            'object'   => 'lead',
            'is_fixed' => 0,
        ],
    ];

    private \$fieldValues = [
        'preferred_profile_image' => 'gravatar',
        'firstname'               => 'John',
        'lastname'                => 'Doe',
        'twitter'                 => 'johndoe',
    ];

    protected \$fixedFields = [
        'firstname' => 'firstname',
        'lastname'  => 'lastname',
    ];

    protected \$baseColumns = [
        'preferred_profile_image',
        'firstname',
        'lastname',
    ];

    protected \$fieldGroups = [
        'core',
        'social',
        'personal',
        'professional',
    ];

    public function testFormatFieldValues(): void
    {
        \$mockTrait = \$this->getMockForTrait(CustomFieldRepositoryTrait::class, [], '', false, true, true, ['getCustomFieldList', 'getBaseColumns', 'getClassName', 'getFieldGroups']);
        \$mockTrait->method('getCustomFieldList')
            ->will(\$this->returnValue([\$this->fields, \$this->fixedFields]));

        \$mockTrait->method('getBaseColumns')
            ->will(\$this->returnValue(\$this->baseColumns));

        \$mockTrait->method('getClassName')
            ->will(\$this->returnValue(\\Mautic\\LeadBundle\\Entity\\Lead::class));

        \$mockTrait->method('getFieldGroups')
            ->will(\$this->returnValue(\$this->fieldGroups));

        \$reflectedMockTrait = new \\ReflectionObject(\$mockTrait);
        \$method             = \$reflectedMockTrait->getMethod('formatFieldValues');
        \$method->setAccessible(true);

        \$expected = [
            'core' => [
                'firstname' => [
                    'id'       => 2,
                    'label'    => 'First Name',
                    'alias'    => 'firstname',
                    'type'     => 'text',
                    'group'    => 'core',
                    'object'   => 'lead',
                    'is_fixed' => 1,
                    'value'    => 'John',
                ],
                'lastname' => [
                    'id'       => 3,
                    'label'    => 'Last Name',
                    'alias'    => 'lastname',
                    'type'     => 'text',
                    'group'    => 'core',
                    'object'   => 'lead',
                    'is_fixed' => 1,
                    'value'    => 'Doe',
                ],
            ],
            'social' => [
                'twitter' => [
                    'id'       => 27,
                    'label'    => 'Twitter',
                    'alias'    => 'twitter',
                    'type'     => 'text',
                    'group'    => 'social',
                    'object'   => 'lead',
                    'is_fixed' => 0,
                    'value'    => 'johndoe',
                ],
            ],
            'personal'     => [],
            'professional' => [],
        ];

        \$result = \$method->invokeArgs(\$mockTrait, [\$this->fieldValues]);
        \$this->assertSame(\$expected, \$result);
    }

    public function testFormatFieldValuesWhenAFieldIsUnpublished(): void
    {
        \$mockTrait = \$this->getMockForTrait(CustomFieldRepositoryTrait::class, [], '', false, true, true, ['getCustomFieldList', 'getBaseColumns', 'getClassName', 'getFieldGroups']);
        \$mockTrait->method('getCustomFieldList')
            ->will(\$this->returnValue([\$this->fields, \$this->fixedFields]));

        \$mockTrait->method('getBaseColumns')
            ->will(\$this->returnValue(\$this->baseColumns));

        \$mockTrait->method('getClassName')
            ->will(\$this->returnValue(\\Mautic\\LeadBundle\\Entity\\Lead::class));

        \$mockTrait->method('getFieldGroups')
            ->will(\$this->returnValue(\$this->fieldGroups));

        \$reflectedMockTrait = new \\ReflectionObject(\$mockTrait);
        \$method             = \$reflectedMockTrait->getMethod('formatFieldValues');
        \$method->setAccessible(true);

        \$expected = [
            'core' => [
                'firstname' => [
                    'id'       => 2,
                    'label'    => 'First Name',
                    'alias'    => 'firstname',
                    'type'     => 'text',
                    'group'    => 'core',
                    'object'   => 'lead',
                    'is_fixed' => 1,
                    'value'    => 'John',
                ],
                'lastname' => [
                    'id'       => 3,
                    'label'    => 'Last Name',
                    'alias'    => 'lastname',
                    'type'     => 'text',
                    'group'    => 'core',
                    'object'   => 'lead',
                    'is_fixed' => 1,
                    'value'    => 1,
                ],
            ],
            'social' => [
                'twitter' => [
                    'id'       => 27,
                    'label'    => 'Twitter',
                    'alias'    => 'twitter',
                    'type'     => 'text',
                    'group'    => 'social',
                    'object'   => 'lead',
                    'is_fixed' => 0,
                    'value'    => 'johndoe',
                ],
            ],
            'personal'     => [],
            'professional' => [],
        ];

        \$values = \$this->fieldValues;

        // Simulate unpublished field:
        unset(\$values['lastname']);

        \$result = \$method->invokeArgs(\$mockTrait, [\$values]);
        \$this->assertEquals(\$expected, \$result);
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
        return "@bundles/LeadBundle/Tests/Entity/CustomFieldRepositoryTraitTest.php";
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
        return new Source("", "@bundles/LeadBundle/Tests/Entity/CustomFieldRepositoryTraitTest.php", "/app/docroot/app/bundles/LeadBundle/Tests/Entity/CustomFieldRepositoryTraitTest.php");
    }
}
