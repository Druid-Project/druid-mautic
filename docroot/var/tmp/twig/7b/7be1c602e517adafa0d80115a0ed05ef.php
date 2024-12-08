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

/* @bundles/LeadBundle/Tests/Command/DeleteContactSecondaryCompaniesCommandTest.php */
class __TwigTemplate_982e612a074bf3fc97556225d6b62b1d extends Template
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

namespace Mautic\\LeadBundle\\Tests\\Command;

use Mautic\\CoreBundle\\Test\\MauticMysqlTestCase;
use Mautic\\LeadBundle\\Command\\DeleteContactSecondaryCompaniesCommand;
use Mautic\\LeadBundle\\Entity\\Company;
use Mautic\\LeadBundle\\Entity\\CompanyLead;
use Mautic\\LeadBundle\\Entity\\CompanyLeadRepository;
use Mautic\\LeadBundle\\Entity\\Lead;
use Mautic\\LeadBundle\\Model\\LeadModel;

final class DeleteContactSecondaryCompaniesCommandTest extends MauticMysqlTestCase
{
    protected \$useCleanupRollback = false;

    public function testDeleteContactSecondaryCompanies(): void
    {
        \$contact          = \$this->getContactWithCompanies();
        /** @var CompanyLeadRepository \$companyLeadRepo */
        \$companyLeadRepo  = \$this->em->getRepository(CompanyLead::class);

        \$contactCompanies = \$companyLeadRepo->getCompaniesByLeadId(\$contact->getId());
        self::assertEquals(2, count(\$contactCompanies));

        \$this->testSymfonyCommand(DeleteContactSecondaryCompaniesCommand::NAME);

        \$contactCompanies = \$companyLeadRepo->getCompaniesByLeadId(\$contact->getId());
        self::assertEquals(2, count(\$contactCompanies));

        \$this->setUpSymfony(['contact_allow_multiple_companies' => 0]);
        \$this->testSymfonyCommand(DeleteContactSecondaryCompaniesCommand::NAME);

        \$contactCompanies = \$companyLeadRepo->getCompaniesByLeadId(\$contact->getId());
        self::assertEquals(1, count(\$contactCompanies));
    }

    /**
     * @throws \\Doctrine\\ORM\\ORMException
     * @throws \\Doctrine\\ORM\\OptimisticLockException
     */
    protected function getContactWithCompanies(): Lead
    {
        \$company = new Company();
        \$company->setName('Doe Corp');

        \$this->em->persist(\$company);

        \$company2 = new Company();
        \$company2->setName('Doe Corp 2');

        \$this->em->persist(\$company2);

        \$contact = new Lead();
        \$contact->setEmail('test@test.com');

        \$this->em->persist(\$contact);
        \$this->em->flush();

        /** @var LeadModel \$leadModel */
        \$leadModel = self::\$container->get('mautic.lead.model.lead');
        \$this->assertTrue(\$leadModel->addToCompany(\$contact, \$company));
        \$this->assertTrue(\$leadModel->addToCompany(\$contact, \$company2));

        return \$contact;
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
        return "@bundles/LeadBundle/Tests/Command/DeleteContactSecondaryCompaniesCommandTest.php";
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
        return new Source("", "@bundles/LeadBundle/Tests/Command/DeleteContactSecondaryCompaniesCommandTest.php", "/app/docroot/app/bundles/LeadBundle/Tests/Command/DeleteContactSecondaryCompaniesCommandTest.php");
    }
}
