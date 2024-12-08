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

/* @bundles/LeadBundle/Tests/Field/IdentifierFieldsTest.php */
class __TwigTemplate_f71b05cb702edffd4db4df2023bd62da extends Template
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

namespace Mautic\\LeadBundle\\Tests\\Field;

use Mautic\\LeadBundle\\Field\\FieldList;
use Mautic\\LeadBundle\\Field\\FieldsWithUniqueIdentifier;
use Mautic\\LeadBundle\\Field\\IdentifierFields;
use PHPUnit\\Framework\\MockObject\\MockObject;
use PHPUnit\\Framework\\TestCase;

class IdentifierFieldsTest extends TestCase
{
    /**
     * @var FieldsWithUniqueIdentifier&MockObject
     */
    private MockObject \$fieldsWithUniqueIdentifiers;

    /**
     * @var FieldList&MockObject
     */
    private MockObject \$fieldList;

    private IdentifierFields \$identifierFields;

    protected function setUp(): void
    {
        \$this->fieldsWithUniqueIdentifiers = \$this->createMock(FieldsWithUniqueIdentifier::class);
        \$this->fieldList                   = \$this->createMock(FieldList::class);
        \$this->identifierFields            = new IdentifierFields(\$this->fieldsWithUniqueIdentifiers, \$this->fieldList);
    }

    public function testLeadObjectReturnsDefaultFields(): void
    {
        \$this->fieldsWithUniqueIdentifiers->expects(\$this->once())
            ->method('getFieldsWithUniqueIdentifier')
            ->with(['object' => 'lead'])
            ->willReturn([]);

        \$this->fieldList->expects(\$this->once())
            ->method('getFieldList')
            ->with(true, false, ['isPublished' => true, 'object' => 'lead'])
            ->willReturn([]);

        \$fields = \$this->identifierFields->getFieldList('lead');

        \$this->assertEquals(
            [
                'firstname',
                'lastname',
                'company',
                'email',
            ],
            \$fields
        );
    }

    public function testCompanyObjectReturnsDefaultFields(): void
    {
        \$this->fieldsWithUniqueIdentifiers->expects(\$this->once())
            ->method('getFieldsWithUniqueIdentifier')
            ->with(['object' => 'company'])
            ->willReturn([]);

        \$this->fieldList->expects(\$this->once())
            ->method('getFieldList')
            ->with(true, false, ['isPublished' => true, 'object' => 'company'])
            ->willReturn([]);

        \$fields = \$this->identifierFields->getFieldList('company');

        \$this->assertEquals(
            [
                'companyname',
                'companyemail',
                'companywebsite',
                'city',
                'state',
                'country',
            ],
            \$fields
        );
    }

    public function testUniqueIdentifiersAreIncluded(): void
    {
        \$this->fieldsWithUniqueIdentifiers->expects(\$this->once())
            ->method('getFieldsWithUniqueIdentifier')
            ->with(['object' => 'lead'])
            ->willReturn(
                [
                    'unique_id' => 'Unique ID',
                ]
            );

        \$this->fieldList->expects(\$this->once())
            ->method('getFieldList')
            ->with(true, false, ['isPublished' => true, 'object' => 'lead'])
            ->willReturn([]);

        \$fields = \$this->identifierFields->getFieldList('lead');

        \$this->assertEquals(
            [
                'firstname',
                'lastname',
                'company',
                'email',
                'unique_id',
            ],
            \$fields
        );
    }

    public function testSocialFieldsAreIncluded(): void
    {
        \$this->fieldsWithUniqueIdentifiers->expects(\$this->once())
            ->method('getFieldsWithUniqueIdentifier')
            ->with(['object' => 'lead'])
            ->willReturn(
                [
                    'unique_id' => 'Unique ID',
                ]
            );

        \$this->fieldList->expects(\$this->once())
            ->method('getFieldList')
            ->with(true, false, ['isPublished' => true, 'object' => 'lead'])
            ->willReturn(
                [
                    'Social' => [
                        'twitter' => [
                            'alias' => 'twitter',
                            'label' => 'Twitter',
                            'type'  => 'text',
                        ],
                    ],
                    'Core' => [
                        'foo' => [
                            'alias' => 'foo',
                            'label' => 'Foo',
                            'type'  => 'text',
                        ],
                    ],
                ]
            );

        \$fields = \$this->identifierFields->getFieldList('lead');

        \$this->assertEquals(
            [
                'firstname',
                'lastname',
                'company',
                'email',
                'unique_id',
                'twitter',
            ],
            \$fields
        );
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
        return "@bundles/LeadBundle/Tests/Field/IdentifierFieldsTest.php";
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
        return new Source("", "@bundles/LeadBundle/Tests/Field/IdentifierFieldsTest.php", "/app/docroot/app/bundles/LeadBundle/Tests/Field/IdentifierFieldsTest.php");
    }
}
