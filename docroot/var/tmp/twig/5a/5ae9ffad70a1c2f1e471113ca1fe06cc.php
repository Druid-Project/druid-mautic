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

/* @bundles/LeadBundle/Tests/Functional/EventListener/CompanySubscriberFunctionalTest.php */
class __TwigTemplate_4eeb82d309160b2cb2ac42a529e7fa83 extends Template
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

namespace Mautic\\LeadBundle\\Tests\\Functional\\EventListener;

use Doctrine\\ORM\\Exception\\ORMException;
use Doctrine\\ORM\\OptimisticLockException;
use Mautic\\CoreBundle\\Entity\\AuditLog;
use Mautic\\CoreBundle\\Test\\MauticMysqlTestCase;
use Mautic\\LeadBundle\\Entity\\Company;
use Mautic\\UserBundle\\Entity\\User;
use Mautic\\UserBundle\\Model\\UserModel;

class CompanySubscriberFunctionalTest extends MauticMysqlTestCase
{
    /**
     * @throws OptimisticLockException
     * @throws ORMException
     */
    public function testCreateCompany(): void
    {
        /** @var UserModel \$userModel */
        \$userModel = static::getContainer()->get('mautic.user.model.user');
        \$users     = \$userModel->getRepository()->findAll();
        \$user      = reset(\$users);
        \$this->assertInstanceOf(User::class, \$user);

        \$company = new Company();
        \$company->setName('Test company');
        \$company->setOwner(\$user);
        \$companyModel = static::getContainer()->get('mautic.lead.model.company');
        \$companyModel->saveEntity(\$company);

        \$auditLogRepository = \$this->em->getRepository(AuditLog::class);
        \$auditLogs          = \$auditLogRepository->findOneBy(['bundle' => 'lead', 'object' => 'company', 'action' => 'create', 'objectId' => \$company->getId()]);
        \$this->assertInstanceOf(AuditLog::class, \$auditLogs);
        \$auditLogDetail = \$auditLogs->getDetails();
        \$this->assertArrayHasKey('owner', \$auditLogDetail);
        \$this->assertSame([null, \"Admin User ({\$user->getId()})\"], \$auditLogDetail['owner']);
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
        return "@bundles/LeadBundle/Tests/Functional/EventListener/CompanySubscriberFunctionalTest.php";
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
        return new Source("", "@bundles/LeadBundle/Tests/Functional/EventListener/CompanySubscriberFunctionalTest.php", "/app/docroot/app/bundles/LeadBundle/Tests/Functional/EventListener/CompanySubscriberFunctionalTest.php");
    }
}
