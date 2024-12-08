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

/* @bundles/LeadBundle/Tests/Model/CompanyModelTest.php */
class __TwigTemplate_0a5227bd0bc53d6c17dd4df842a9451d extends Template
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

namespace Mautic\\LeadBundle\\Tests\\Model;

use Mautic\\EmailBundle\\Helper\\EmailValidator;
use Mautic\\LeadBundle\\Deduplicate\\CompanyDeduper;
use Mautic\\LeadBundle\\Entity\\Company;
use Mautic\\LeadBundle\\Model\\CompanyModel;
use Mautic\\LeadBundle\\Model\\FieldModel;
use Symfony\\Component\\HttpFoundation\\Session\\Session;

class CompanyModelTest extends \\PHPUnit\\Framework\\TestCase
{
    /**
     * @var FieldModel|\\PHPUnit\\Framework\\MockObject\\MockObject
     */
    private \\PHPUnit\\Framework\\MockObject\\MockObject \$leadFieldModel;

    /**
     * @var \\PHPUnit\\Framework\\MockObject\\MockObject|Session
     */
    private \\PHPUnit\\Framework\\MockObject\\MockObject \$session;

    /**
     * @var EmailValidator|\\PHPUnit\\Framework\\MockObject\\MockObject
     */
    private \\PHPUnit\\Framework\\MockObject\\MockObject \$emailValidator;

    /**
     * @var CompanyDeduper|\\PHPUnit\\Framework\\MockObject\\MockObject
     */
    private \\PHPUnit\\Framework\\MockObject\\MockObject \$companyDeduper;

    public function setUp(): void
    {
        \$this->leadFieldModel = \$this->createMock(FieldModel::class);
        \$this->session        = \$this->createMock(Session::class);
        \$this->emailValidator = \$this->createMock(EmailValidator::class);
        \$this->companyDeduper = \$this->createMock(CompanyDeduper::class);
    }

    /**
     * @testdox Ensure that an array value is flattened before saving
     *
     * @covers  \\Mautic\\CoreBundle\\Helper\\AbstractFormFieldHelper::parseList
     */
    public function testArrayValueIsFlattenedBeforeSave(): void
    {
        /** @var CompanyModel \$companyModel */
        \$companyModel = \$this->getMockBuilder(CompanyModel::class)
            ->disableOriginalConstructor()
            ->onlyMethods([])
            ->getMock();

        \$company = new Company();
        \$company->setFields(
            [
                'core' => [
                    'multiselect' => [
                        'type'  => 'multiselect',
                        'alias' => 'multiselect',
                        'value' => 'abc|123',
                    ],
                ],
            ]
        );

        \$companyModel->setFieldValues(\$company, ['multiselect' => ['abc', 'def']]);

        \$updatedFields = \$company->getUpdatedFields();

        \$this->assertEquals(
            [
                'multiselect' => 'abc|def',
            ],
            \$updatedFields
        );
    }

    public function testImportCompanySkipIfExistsTrue(): void
    {
        \$companyModel = \$this->getCompanyModelForImport();

        \$duplicatedCompany = \$this->createMock(Company::class);
        \$duplicatedCompany->method('getProfileFields')->willReturn(['companyfield'=> 'xxx']);
        \$companyDeduper = \$this->getCompanyDeduperForImport(\$duplicatedCompany);

        \$this->setProperty(\$companyModel, CompanyModel::class, 'companyDeduper', \$companyDeduper);
        \$duplicatedCompany->expects(\$this->exactly(0))->method('addUpdatedField');
        \$companyModel->importCompany([], [], null, false, true);
    }

    public function testImportCompanySkipIfExistsFalse(): void
    {
        \$companyModel = \$this->getCompanyModelForImport();

        \$duplicatedCompany = \$this->createMock(Company::class);
        \$duplicatedCompany->method('getProfileFields')->willReturn(['companyfield'=> 'xxx']);
        \$companyDeduper = \$this->getCompanyDeduperForImport(\$duplicatedCompany);

        \$this->setProperty(\$companyModel, CompanyModel::class, 'companyDeduper', \$companyDeduper);
        \$duplicatedCompany->expects(\$this->exactly(1))->method('addUpdatedField');
        \$companyModel->importCompany([], [], null, false, false);
    }

    private function getCompanyModelForImport()
    {
        \$companyModel = \$this->getMockBuilder(CompanyModel::class)
            ->disableOriginalConstructor()
            ->onlyMethods(['fetchCompanyFields', 'getFieldData'])
            ->getMock();

        \$companyModel->method('fetchCompanyFields')->willReturn(
            [
                [
                    'alias'        => 'companyfield',
                    'defaultValue' => '',
                    'type'         => 'text',
                ],
            ]
        );
        \$companyModel->method('getFieldData')->willReturn(['companyfield' => 'xxx']);

        return \$companyModel;
    }

    private function getCompanyDeduperForImport(Company \$duplicatedCompany)
    {
        \$companyDeduper = \$this->createMock(CompanyDeduper::class);

        \$companyDeduper->method('checkForDuplicateCompanies')->willReturn([\$duplicatedCompany]);

        return \$companyDeduper;
    }

    /**
     * Set protected property to an object.
     *
     * @param object \$object
     * @param string \$class
     * @param string \$property
     * @param mixed  \$value
     */
    private function setProperty(\$object, \$class, \$property, \$value): void
    {
        \$reflectedProp = new \\ReflectionProperty(\$class, \$property);
        \$reflectedProp->setAccessible(true);
        \$reflectedProp->setValue(\$object, \$value);
    }

    public function testExtractCompanyDataFromImport(): void
    {
        /** @var CompanyModel \$companyModel */
        \$companyModel = \$this->getMockBuilder(CompanyModel::class)
            ->disableOriginalConstructor()
            ->onlyMethods(['fetchCompanyFields'])
            ->getMock();

        \$companyModel->method('fetchCompanyFields')
            ->will(\$this->returnValue([
                ['alias' => 'companyname'],
                ['alias' => 'companyemail'],
                ['alias' => 'companyindustry'],
            ]));

        \$fields = [
            'email'           => 'i_contact_email',
            'companyemail'    => 'i_company_email',
            'company'         => 'i_company_name',
            'companyindustry' => 'i_company_industry',
        ];
        \$data= [
            'i_contact_email'    => 'PennyKMoore@dayrep.com',
            'i_company_email'    => 'turbochicken@dayrep.com',
            'i_company_name'     => 'Turbo chicken',
            'i_company_industry' => 'Biotechnology',
        ];

        [\$companyFields, \$companyData] = \$companyModel->extractCompanyDataFromImport(\$fields, \$data);

        \$expectedCompanyFields = [
            'companyemail'    => 'i_company_email',
            'companyindustry' => 'i_company_industry',
            'companyname'     => 'i_company_name',
        ];
        \$expectedCompanyData = [
            'i_company_email'    => 'turbochicken@dayrep.com',
            'i_company_industry' => 'Biotechnology',
            'i_company_name'     => 'Turbo chicken',
        ];

        \$this->assertSame(\$expectedCompanyFields, \$companyFields);
        \$this->assertSame(\$expectedCompanyData, \$companyData);
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
        return "@bundles/LeadBundle/Tests/Model/CompanyModelTest.php";
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
        return new Source("", "@bundles/LeadBundle/Tests/Model/CompanyModelTest.php", "/app/docroot/app/bundles/LeadBundle/Tests/Model/CompanyModelTest.php");
    }
}
