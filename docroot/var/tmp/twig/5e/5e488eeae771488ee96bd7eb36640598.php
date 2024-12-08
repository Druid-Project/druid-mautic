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

/* @bundles/LeadBundle/Tests/Model/SegmentActionModelTest.php */
class __TwigTemplate_443cd36de257c99d063576540eb68e2c extends Template
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

namespace Mautic\\LeadBundle\\Tests\\Model;

use Mautic\\LeadBundle\\Entity\\Lead;
use Mautic\\LeadBundle\\Model\\LeadModel;
use Mautic\\LeadBundle\\Model\\SegmentActionModel;

class SegmentActionModelTest extends \\PHPUnit\\Framework\\TestCase
{
    private \\PHPUnit\\Framework\\MockObject\\MockObject \$contactMock5;

    private \\PHPUnit\\Framework\\MockObject\\MockObject \$contactMock6;

    private \\PHPUnit\\Framework\\MockObject\\MockObject \$contactModelMock;

    private SegmentActionModel \$actionModel;

    protected function setUp(): void
    {
        \$this->contactMock5        = \$this->createMock(Lead::class);
        \$this->contactMock6        = \$this->createMock(Lead::class);
        \$this->contactModelMock    = \$this->createMock(LeadModel::class);
        \$this->actionModel         = new SegmentActionModel(\$this->contactModelMock);
    }

    public function testAddContactsToSegmentsEntityAccess(): void
    {
        \$contacts = [5, 6];
        \$segments = [4, 5];

        \$this->contactModelMock->expects(\$this->once())
            ->method('getLeadsByIds')
            ->with(\$contacts)
            ->willReturn([\$this->contactMock5, \$this->contactMock6]);

        \$this->contactModelMock->expects(\$this->exactly(2))
            ->method('canEditContact')
            ->withConsecutive([\$this->contactMock5], [\$this->contactMock6])
            ->willReturnOnConsecutiveCalls(false, true);

        \$this->contactModelMock->expects(\$this->once())
            ->method('addToLists')
            ->with(\$this->contactMock6, \$segments);

        \$this->contactModelMock->expects(\$this->once())
            ->method('saveEntities')
            ->with([\$this->contactMock5, \$this->contactMock6]);

        \$this->actionModel->addContacts(\$contacts, \$segments);
    }

    public function testRemoveContactsFromSementsEntityAccess(): void
    {
        \$contacts = [5, 6];
        \$segments = [1, 2];

        \$this->contactModelMock->expects(\$this->once())
            ->method('getLeadsByIds')
            ->with(\$contacts)
            ->willReturn([\$this->contactMock5, \$this->contactMock6]);

        \$this->contactModelMock->expects(\$this->exactly(2))
            ->method('canEditContact')
            ->withConsecutive([\$this->contactMock5], [\$this->contactMock6])
            ->willReturnOnConsecutiveCalls(false, true);

        \$this->contactModelMock->expects(\$this->once())
            ->method('removeFromLists')
            ->with(\$this->contactMock6, \$segments);

        \$this->contactModelMock->expects(\$this->once())
            ->method('saveEntities')
            ->with([\$this->contactMock5, \$this->contactMock6]);

        \$this->actionModel->removeContacts(\$contacts, \$segments);
    }

    public function testAddContactsToSegments(): void
    {
        \$contacts = [5, 6];
        \$segments = [1, 2];

        \$this->contactModelMock->expects(\$this->once())
            ->method('getLeadsByIds')
            ->with(\$contacts)
            ->willReturn([\$this->contactMock5, \$this->contactMock6]);

        \$this->contactModelMock->expects(\$this->exactly(2))
            ->method('canEditContact')
            ->withConsecutive([\$this->contactMock5], [\$this->contactMock6])
            ->willReturn(true);

        \$this->contactModelMock->expects(\$this->exactly(2))
            ->method('addToLists')
            ->withConsecutive([\$this->contactMock5, \$segments], [\$this->contactMock6, \$segments]);

        \$this->contactModelMock->expects(\$this->once())
            ->method('saveEntities')
            ->with([\$this->contactMock5, \$this->contactMock6]);

        \$this->actionModel->addContacts(\$contacts, \$segments);
    }

    public function testRemoveContactsFromCategories(): void
    {
        \$contacts = [5, 6];
        \$segments = [1, 2];

        \$this->contactModelMock->expects(\$this->once())
            ->method('getLeadsByIds')
            ->with(\$contacts)
            ->willReturn([\$this->contactMock5, \$this->contactMock6]);

        \$this->contactModelMock->expects(\$this->exactly(2))
            ->method('canEditContact')
            ->withConsecutive([\$this->contactMock5], [\$this->contactMock6])
            ->willReturn(true);

        \$this->contactModelMock->expects(\$this->exactly(2))
            ->method('removeFromLists')
            ->withConsecutive([\$this->contactMock5, \$segments], [\$this->contactMock6]);

        \$this->contactModelMock->expects(\$this->once())
            ->method('saveEntities')
            ->with([\$this->contactMock5, \$this->contactMock6]);

        \$this->actionModel->removeContacts(\$contacts, \$segments);
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
        return "@bundles/LeadBundle/Tests/Model/SegmentActionModelTest.php";
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
        return new Source("", "@bundles/LeadBundle/Tests/Model/SegmentActionModelTest.php", "/app/docroot/app/bundles/LeadBundle/Tests/Model/SegmentActionModelTest.php");
    }
}
