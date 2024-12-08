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

/* @bundles/ReportBundle/Tests/Helper/ReportHelperTest.php */
class __TwigTemplate_68b5e96b8156c9fccd5449b3bd232313 extends Template
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

namespace Mautic\\ReportBundle\\Tests\\Helper;

use Mautic\\ReportBundle\\Helper\\ReportHelper;
use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\EventDispatcher\\EventDispatcherInterface;

final class ReportHelperTest extends TestCase
{
    private ReportHelper \$reportHelper;

    protected function setUp(): void
    {
        \$this->reportHelper = new ReportHelper(\$this->createMock(EventDispatcherInterface::class));
    }

    public function testGetStandardColumnsMethodReturnsCorrectColumns(): void
    {
        \$columns = \$this->reportHelper->getStandardColumns('somePrefix');

        \$expectedColumnns = [
            'somePrefixid' => [
                'label' => 'mautic.core.id',
                'type'  => 'int',
                'alias' => 'somePrefixid',
            ],
            'somePrefixname' => [
                'label' => 'mautic.core.name',
                'type'  => 'string',
                'alias' => 'somePrefixname',
            ],
            'somePrefixcreated_by_user' => [
                'label' => 'mautic.core.createdby',
                'type'  => 'string',
                'alias' => 'somePrefixcreated_by_user',
            ],
            'somePrefixdate_added' => [
                'label' => 'mautic.report.field.date_added',
                'type'  => 'datetime',
                'alias' => 'somePrefixdate_added',
            ],
            'somePrefixmodified_by_user' => [
                'label' => 'mautic.report.field.modified_by_user',
                'type'  => 'string',
                'alias' => 'somePrefixmodified_by_user',
            ],
            'somePrefixdate_modified' => [
                'label' => 'mautic.report.field.date_modified',
                'type'  => 'datetime',
                'alias' => 'somePrefixdate_modified',
            ],
            'somePrefixdescription' => [
                'label' => 'mautic.core.description',
                'type'  => 'string',
                'alias' => 'somePrefixdescription',
            ],
            'somePrefixpublish_up' => [
                'label' => 'mautic.report.field.publish_up',
                'type'  => 'datetime',
                'alias' => 'somePrefixpublish_up',
            ],
            'somePrefixpublish_down' => [
                'label' => 'mautic.report.field.publish_down',
                'type'  => 'datetime',
                'alias' => 'somePrefixpublish_down',
            ],
            'somePrefixis_published' => [
                'label' => 'mautic.report.field.is_published',
                'type'  => 'bool',
                'alias' => 'somePrefixis_published',
            ],
        ];

        \$this->assertEquals(\$expectedColumnns, \$columns);
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
        return "@bundles/ReportBundle/Tests/Helper/ReportHelperTest.php";
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
        return new Source("", "@bundles/ReportBundle/Tests/Helper/ReportHelperTest.php", "/app/docroot/app/bundles/ReportBundle/Tests/Helper/ReportHelperTest.php");
    }
}
