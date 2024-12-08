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

/* @bundles/PageBundle/Tests/Model/Tracking404ModelTest.php */
class __TwigTemplate_3e90aa977901feba2d16eaf7850b3098 extends Template
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

namespace Mautic\\PageBundle\\Tests\\Model;

use Mautic\\CoreBundle\\Helper\\CoreParametersHelper;
use Mautic\\LeadBundle\\Entity\\Lead;
use Mautic\\LeadBundle\\Tracker\\ContactTracker;
use Mautic\\PageBundle\\Model\\PageModel;
use Mautic\\PageBundle\\Model\\Tracking404Model;

class Tracking404ModelTest extends \\PHPUnit\\Framework\\TestCase
{
    /**
     * @var ContactTracker|\\PHPUnit\\Framework\\MockObject\\MockObject
     */
    private \\PHPUnit\\Framework\\MockObject\\MockObject \$mockContactTracker;

    /**
     * @var CoreParametersHelper|\\PHPUnit\\Framework\\MockObject\\MockObject
     */
    private \\PHPUnit\\Framework\\MockObject\\MockObject \$mockCoreParametersHelper;

    /**
     * @var PageModel|\\PHPUnit\\Framework\\MockObject\\MockObject
     */
    private \\PHPUnit\\Framework\\MockObject\\MockObject \$mockPageModel;

    /**
     * @var Lead|\\PHPUnit\\Framework\\MockObject\\MockObject
     */
    private Lead \$lead;

    public function setUp(): void
    {
        parent::setUp();
        \$this->mockCoreParametersHelper = \$this->createMock(CoreParametersHelper::class);

        \$this->mockContactTracker = \$this->createMock(ContactTracker::class);

        \$this->mockPageModel = \$this->createMock(PageModel::class);

        \$this->lead = new Lead();
    }

    public function testIsTrackableIfTracking404OptionEnabled(): void
    {
        \$this->mockCoreParametersHelper->expects(\$this->once())
            ->method('get')
            ->with('do_not_track_404_anonymous')
            ->willReturn(true);

        \$tracking404Model = new Tracking404Model(\$this->mockCoreParametersHelper, \$this->mockContactTracker, \$this->mockPageModel);
        \$this->assertFalse(\$tracking404Model->isTrackable());
    }

    public function testIsTrackableIfTracking404OptionDisable(): void
    {
        \$this->mockCoreParametersHelper->expects(\$this->once())
            ->method('get')
            ->with('do_not_track_404_anonymous')
            ->willReturn(false);

        \$tracking404Model = new Tracking404Model(\$this->mockCoreParametersHelper, \$this->mockContactTracker, \$this->mockPageModel);
        \$this->assertTrue(\$tracking404Model->isTrackable());
    }

    public function testIsTrackableForIdentifiedContacts(): void
    {
        \$this->mockCoreParametersHelper->expects(\$this->once())
            ->method('get')
            ->with('do_not_track_404_anonymous')
            ->willReturn(true);

        \$this->lead->setFirstname('identified');
        \$this->mockContactTracker->expects(\$this->any())
            ->method('getContactByTrackedDevice')
            ->willReturn(\$this->lead);

        \$tracking404Model = new Tracking404Model(\$this->mockCoreParametersHelper, \$this->mockContactTracker, \$this->mockPageModel);
        \$this->assertTrue(\$tracking404Model->isTrackable());
    }

    public function testIsTrackableForAnonymouse(): void
    {
        \$this->mockCoreParametersHelper->expects(\$this->once())
            ->method('get')
            ->with('do_not_track_404_anonymous')
            ->willReturn(true);

        \$this->mockContactTracker->expects(\$this->any())
            ->method('getContactByTrackedDevice')
            ->willReturn(\$this->lead);

        \$tracking404Model = new Tracking404Model(\$this->mockCoreParametersHelper, \$this->mockContactTracker, \$this->mockPageModel);
        \$this->assertFalse(\$tracking404Model->isTrackable());
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
        return "@bundles/PageBundle/Tests/Model/Tracking404ModelTest.php";
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
        return new Source("", "@bundles/PageBundle/Tests/Model/Tracking404ModelTest.php", "/app/docroot/app/bundles/PageBundle/Tests/Model/Tracking404ModelTest.php");
    }
}
