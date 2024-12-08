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

/* @bundles/LeadBundle/Tests/Helper/FieldAliasHelperTest.php */
class __TwigTemplate_f66bfa88823faad84b49624535161964 extends Template
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

namespace Mautic\\LeadBundle\\Tests\\Helper;

use Mautic\\LeadBundle\\Entity\\LeadField;
use Mautic\\LeadBundle\\Entity\\LeadFieldRepository;
use Mautic\\LeadBundle\\Helper\\FieldAliasHelper;
use Mautic\\LeadBundle\\Model\\FieldModel;

class FieldAliasHelperTest extends \\PHPUnit\\Framework\\TestCase
{
    private \\PHPUnit\\Framework\\MockObject\\MockObject \$fieldModel;

    private \\PHPUnit\\Framework\\MockObject\\MockObject \$fieldRepository;

    private FieldAliasHelper \$helper;

    protected function setUp(): void
    {
        parent::setUp();

        \$this->fieldRepository = \$this->createMock(LeadFieldRepository::class);
        \$this->fieldModel      = \$this->getMockBuilder(FieldModel::class)
            ->onlyMethods(['cleanAlias', 'getRepository'])
            ->disableOriginalConstructor()
            ->getMock();

        \$this->fieldRepository->method('getAliases')->willReturn([
            'title',
            'firstname',
            'lastname',
        ]);

        \$this->fieldModel->method('cleanAlias')->will(\$this->returnCallback(fn () => func_get_args()[0]));

        \$this->fieldModel->method('getRepository')->willReturn(\$this->fieldRepository);

        \$this->helper = new FieldAliasHelper(\$this->fieldModel);
    }

    public function testDuplicatedAliasWithAliasSet(): void
    {
        \$field = new LeadField();
        \$field->setAlias('title');
        \$field = \$this->helper->makeAliasUnique(\$field);

        \$this->assertEquals('title1', \$field->getAlias());
    }

    public function testDuplicatedAliasWithAliasEmpty(): void
    {
        \$field = new LeadField();
        \$field->setName('title');
        \$field = \$this->helper->makeAliasUnique(\$field);

        \$this->assertEquals('title1', \$field->getAlias());
    }

    public function testUniqueAliasWithAliasEmpty(): void
    {
        \$field = new LeadField();
        \$field->setName('phone');
        \$field = \$this->helper->makeAliasUnique(\$field);

        \$this->assertEquals('phone', \$field->getAlias());
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
        return "@bundles/LeadBundle/Tests/Helper/FieldAliasHelperTest.php";
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
        return new Source("", "@bundles/LeadBundle/Tests/Helper/FieldAliasHelperTest.php", "/app/docroot/app/bundles/LeadBundle/Tests/Helper/FieldAliasHelperTest.php");
    }
}
