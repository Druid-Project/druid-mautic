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

/* @bundles/LeadBundle/Tests/EventListener/CompanySubscriberTest.php */
class __TwigTemplate_c9b72fd46168002a1bd4560ed9e50800 extends Template
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

namespace Mautic\\LeadBundle\\Tests\\EventListener;

use Mautic\\CoreBundle\\Helper\\IpLookupHelper;
use Mautic\\CoreBundle\\Model\\AuditLogModel;
use Mautic\\LeadBundle\\Entity\\Company;
use Mautic\\LeadBundle\\Event\\CompanyEvent;
use Mautic\\LeadBundle\\EventListener\\CompanySubscriber;
use Mautic\\LeadBundle\\LeadEvents;

class CompanySubscriberTest extends \\PHPUnit\\Framework\\TestCase
{
    public function testGetSubscribedEvents(): void
    {
        \$ipLookupHelper = \$this->createMock(IpLookupHelper::class);
        \$auditLogModel  = \$this->createMock(AuditLogModel::class);
        \$subscriber     = new CompanySubscriber(\$ipLookupHelper, \$auditLogModel);

        \$this->assertEquals(
            [
                LeadEvents::COMPANY_POST_SAVE   => ['onCompanyPostSave', 0],
                LeadEvents::COMPANY_POST_DELETE => ['onCompanyDelete', 0],
            ],
            \$subscriber->getSubscribedEvents()
        );
    }

    public function testOnCompanyPostSave(): void
    {
        \$this->onCompanyPostSaveMethodCall(false); // update company log
        \$this->onCompanyPostSaveMethodCall(true); // create company log
    }

    public function testOnCompanyDelete(): void
    {
        \$companyId        = 1;
        \$companyName      = 'name';
        \$ip               = '127.0.0.2';

        \$log = [
            'bundle'    => 'lead',
            'object'    => 'company',
            'objectId'  => \$companyId,
            'action'    => 'delete',
            'details'   => ['name', \$companyName],
            'ipAddress' => \$ip,
        ];

        \$ipLookupHelper = \$this->createMock(IpLookupHelper::class);
        \$ipLookupHelper->expects(\$this->once())
            ->method('getIpAddressFromRequest')
            ->will(\$this->returnValue(\$ip));

        \$auditLogModel = \$this->createMock(AuditLogModel::class);
        \$auditLogModel->expects(\$this->once())
            ->method('writeToLog')
            ->with(\$log);

        \$subscriber = new CompanySubscriber(\$ipLookupHelper, \$auditLogModel);

        \$company            = \$this->createMock(Company::class);
        \$company->deletedId = \$companyId;
        \$company->expects(\$this->once())
            ->method('getPrimaryIdentifier')
            ->will(\$this->returnValue(\$companyName));

        \$event = \$this->createMock(CompanyEvent::class);
        \$event->expects(\$this->once())
            ->method('getCompany')
            ->will(\$this->returnValue(\$company));

        \$subscriber->onCompanyDelete(\$event);
    }

    /**
     * Test create or update company logging.
     *
     * @param bool \$isNew
     */
    private function onCompanyPostSaveMethodCall(\$isNew): void
    {
        \$companyId = 1;
        \$changes   = ['changes'];
        \$ip        = '127.0.0.2';

        \$log = [
            'bundle'    => 'lead',
            'object'    => 'company',
            'objectId'  => \$companyId,
            'action'    => (\$isNew) ? 'create' : 'update',
            'details'   => \$changes,
            'ipAddress' => \$ip,
        ];

        \$ipLookupHelper = \$this->createMock(IpLookupHelper::class);
        \$ipLookupHelper->expects(\$this->once())
            ->method('getIpAddressFromRequest')
            ->will(\$this->returnValue(\$ip));

        \$auditLogModel = \$this->createMock(AuditLogModel::class);
        \$auditLogModel->expects(\$this->once())
            ->method('writeToLog')
            ->with(\$log);

        \$subscriber = new CompanySubscriber(\$ipLookupHelper, \$auditLogModel);

        \$company = \$this->createMock(Company::class);
        \$company->expects(\$this->once())
            ->method('getId')
            ->will(\$this->returnValue(\$companyId));

        \$event = \$this->createMock(CompanyEvent::class);
        \$event->expects(\$this->once())
            ->method('getCompany')
            ->will(\$this->returnValue(\$company));
        \$event->expects(\$this->once())
            ->method('getChanges')
            ->will(\$this->returnValue(\$changes));
        \$event->expects(\$this->once())
            ->method('isNew')
            ->will(\$this->returnValue(\$isNew));

        \$subscriber->onCompanyPostSave(\$event);
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
        return "@bundles/LeadBundle/Tests/EventListener/CompanySubscriberTest.php";
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
        return new Source("", "@bundles/LeadBundle/Tests/EventListener/CompanySubscriberTest.php", "/app/docroot/app/bundles/LeadBundle/Tests/EventListener/CompanySubscriberTest.php");
    }
}
