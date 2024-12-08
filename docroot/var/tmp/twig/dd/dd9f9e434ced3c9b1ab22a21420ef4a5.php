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

/* @bundles/FormBundle/Tests/Entity/FormTest.php */
class __TwigTemplate_00a8d69fea4d92a522fe48b11bd930e5 extends Template
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

namespace Mautic\\FormBundle\\Tests\\Entity;

use Mautic\\FormBundle\\Entity\\Field;
use Mautic\\FormBundle\\Entity\\Form;
use PHPUnit\\Framework\\Assert;

final class FormTest extends \\PHPUnit\\Framework\\TestCase
{
    /**
     * @dataProvider setNoIndexDataProvider
     */
    public function testSetNoIndex(\$value, \$expected, array \$changes): void
    {
        \$form = new Form();
        \$form->setNoIndex(\$value);

        Assert::assertSame(\$expected, \$form->getNoIndex());
        Assert::assertSame(\$changes, \$form->getChanges());
    }

    public static function setNoIndexDataProvider(): iterable
    {
        yield [null, null, []];
        yield [true, true, ['noIndex' => [null, true]]];
        yield [false, false, ['noIndex' => [null, false]]];
        yield ['', false, ['noIndex' => [null, false]]];
        yield [0, false, ['noIndex' => [null, false]]];
        yield ['string', true, ['noIndex' => [null, true]]];
    }

    public function testGetMappedFieldValues(): void
    {
        \$form   = \$this->createForm();
        \$result = [
            [
                'formFieldId'  => null,
                'mappedObject' => 'contact',
                'mappedField'  => 'email',
            ],
            [
                'formFieldId'  => null,
                'mappedObject' => 'company',
                'mappedField'  => 'companyemail',
            ],
            [
                'formFieldId'  => null,
                'mappedObject' => 'company',
                'mappedField'  => 'companyname',
            ],
        ];

        Assert::assertSame(\$result, \$form->getMappedFieldValues());
    }

    public function testGetMappedFieldObjects(): void
    {
        \$form = \$this->createForm();

        Assert::assertSame(['contact', 'company'], \$form->getMappedFieldObjects());
    }

    private function createForm(): Form
    {
        \$form           = new Form();
        \$contactField   = new Field();
        \$companyFieldA  = new Field();
        \$companyFieldB  = new Field();
        \$notMappedField = new Field();
        \$contactField->setMappedObject('contact');
        \$contactField->setMappedField('email');
        \$companyFieldA->setMappedObject('company');
        \$companyFieldA->setMappedField('companyemail');
        \$companyFieldB->setMappedObject('company');
        \$companyFieldB->setMappedField('companyname');
        \$form->addField('contact_field_a', \$contactField);
        \$form->addField('company_field_a', \$companyFieldA);
        \$form->addField('company_field_b', \$companyFieldB);
        \$form->addField('not_mapped_field_a', \$notMappedField);

        return \$form;
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
        return "@bundles/FormBundle/Tests/Entity/FormTest.php";
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
        return new Source("", "@bundles/FormBundle/Tests/Entity/FormTest.php", "/app/docroot/app/bundles/FormBundle/Tests/Entity/FormTest.php");
    }
}
