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

/* @bundles/CategoryBundle/Tests/Model/ContactActionModelTest.php */
class __TwigTemplate_0af281c149d28c9d33581e9b61c944de extends Template
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

namespace Mautic\\CategoryBundle\\Tests\\Model;

use Mautic\\CategoryBundle\\Model\\ContactActionModel;
use Mautic\\LeadBundle\\Entity\\Lead;
use Mautic\\LeadBundle\\Model\\LeadModel;
use PHPUnit\\Framework\\MockObject\\MockObject;

class ContactActionModelTest extends \\PHPUnit\\Framework\\TestCase
{
    private Lead \$contactMock5;

    private Lead \$contactMock6;

    /**
     * @var MockObject|LeadModel
     */
    private MockObject \$contactModelMock;

    private ContactActionModel \$actionModel;

    protected function setUp(): void
    {
        \$this->contactMock5     = new Lead();
        \$this->contactMock6     = new Lead();
        \$this->contactModelMock = \$this->createMock(LeadModel::class);
        \$this->actionModel      = new ContactActionModel(\$this->contactModelMock);
    }

    public function testAddContactsToCategoriesEntityAccess(): void
    {
        \$contacts   = [5, 6];
        \$categories = [4, 5];

        \$this->contactModelMock->expects(\$this->once())
            ->method('getLeadsByIds')
            ->with(\$contacts)
            ->willReturn([\$this->contactMock5, \$this->contactMock6]);

        \$this->contactModelMock->expects(\$this->exactly(2))
            ->method('canEditContact')
            ->withConsecutive([\$this->contactMock5], [\$this->contactMock6])
            ->willReturnOnConsecutiveCalls(false, true);

        \$this->contactModelMock->expects(\$this->once())
            ->method('addToCategory')
            ->with(\$this->contactMock6);

        \$this->actionModel->addContactsToCategories(\$contacts, \$categories);
    }

    public function testRemoveContactsFromCategoriesEntityAccess(): void
    {
        \$contacts   = [5, 6];
        \$categories = [1, 2];

        \$this->contactModelMock->expects(\$this->once())
            ->method('getLeadsByIds')
            ->with(\$contacts)
            ->willReturn([\$this->contactMock5, \$this->contactMock6]);

        \$this->contactModelMock->expects(\$this->exactly(2))
            ->method('canEditContact')
            ->withConsecutive([\$this->contactMock5], [\$this->contactMock6])
            ->willReturnOnConsecutiveCalls(false, true);

        \$this->contactModelMock->expects(\$this->once())
            ->method('getLeadCategories')
            ->with(\$this->contactMock6)
            ->willReturn([45, 2]);

        \$this->contactModelMock->expects(\$this->once())
            ->method('removeFromCategories')
            ->with([1 => 2]);

        \$this->actionModel->removeContactsFromCategories(\$contacts, \$categories);
    }

    public function testAddContactsToCategories(): void
    {
        \$contacts   = [5, 6];
        \$categories = [1, 2];

        \$this->contactModelMock->expects(\$this->once())
            ->method('getLeadsByIds')
            ->with(\$contacts)
            ->willReturn([\$this->contactMock5, \$this->contactMock6]);

        \$this->contactModelMock->expects(\$this->exactly(2))
            ->method('canEditContact')
            ->withConsecutive([\$this->contactMock5], [\$this->contactMock6])
            ->willReturn(true);

        \$this->contactModelMock->expects(\$this->exactly(2))
            ->method('addToCategory')
            ->withConsecutive([\$this->contactMock5, \$categories], [\$this->contactMock6, \$categories]);

        \$this->actionModel->addContactsToCategories(\$contacts, \$categories);
    }

    public function testRemoveContactsFromCategories(): void
    {
        \$contacts   = [5, 6];
        \$categories = [1, 2];

        \$this->contactModelMock->expects(\$this->once())
            ->method('getLeadsByIds')
            ->with(\$contacts)
            ->willReturn([\$this->contactMock5, \$this->contactMock6]);

        \$this->contactModelMock->expects(\$this->exactly(2))
            ->method('canEditContact')
            ->withConsecutive([\$this->contactMock5], [\$this->contactMock6])
            ->willReturn(true);

        \$this->contactModelMock->expects(\$this->exactly(2))
            ->method('getLeadCategories')
            ->withConsecutive([\$this->contactMock5], [\$this->contactMock6])
            ->willReturnOnConsecutiveCalls([1, 2], [2, 3]);

        \$this->contactModelMock->expects(\$this->exactly(2))
            ->method('removeFromCategories')
            ->withConsecutive([\$categories], [[2]]);

        \$this->actionModel->removeContactsFromCategories(\$contacts, \$categories);
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
        return "@bundles/CategoryBundle/Tests/Model/ContactActionModelTest.php";
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
        return new Source("", "@bundles/CategoryBundle/Tests/Model/ContactActionModelTest.php", "/app/docroot/app/bundles/CategoryBundle/Tests/Model/ContactActionModelTest.php");
    }
}
