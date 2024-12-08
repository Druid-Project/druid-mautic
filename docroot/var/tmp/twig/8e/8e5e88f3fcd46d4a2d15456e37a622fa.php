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

/* @bundles/CoreBundle/Tests/Command/CleanupMaintenanceCommandTest.php */
class __TwigTemplate_4fb688029b40bad0dbeff60e803b8366 extends Template
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

namespace Mautic\\CoreBundle\\Tests\\Command;

use Mautic\\CoreBundle\\Test\\MauticMysqlTestCase;
use Mautic\\LeadBundle\\Entity\\Lead;

class CleanupMaintenanceCommandTest extends MauticMysqlTestCase
{
    protected \$useCleanupRollback = false;

    /**
     * @throws \\Exception
     */
    public function testCleanupMaintenanceCommand(): void
    {
        \$inactiveLead  = \$this->createLead('-1 year');
        \$contactId     = \$inactiveLead->getId();

        \$this->testSymfonyCommand('mautic:maintenance:cleanup', ['--days-old' => 180, '--no-interaction' => true]);

        \$this->assertNull(
            static::getContainer()->get('mautic.lead.model.lead')->getEntity(\$contactId),
            'Purge an unidentified lead that is considered inactive'
        );

        // get last row sql query from audit_log table
        \$sql    = 'SELECT * FROM '.MAUTIC_TABLE_PREFIX.'audit_log ORDER BY id DESC LIMIT 1';
        \$stmt   = \$this->em->getConnection()->prepare(\$sql);
        \$result = \$stmt->executeQuery()->fetchAssociative();
        \$this->assertEquals('core', \$result['bundle']);
        \$this->assertEquals('maintenance', \$result['object']);
        \$this->assertEquals('cleanup', \$result['action']);
        \$this->assertEquals('a:2:{s:7:\"options\";a:4:{s:8:\"days-old\";i:180;s:9:\"lock_mode\";s:3:\"pid\";s:14:\"no-interaction\";b:1;s:3:\"env\";s:4:\"test\";}s:5:\"stats\";a:1:{s:8:\"Visitors\";i:1;}}', \$result['details']);

        \$activeLead = \$this->createLead('-170 days');
        \$contactId  = \$activeLead->getId();

        \$this->testSymfonyCommand('mautic:maintenance:cleanup', ['--days-old' => 180, '--no-interaction' => true]);

        \$this->assertNotNull(
            static::getContainer()->get('mautic.lead.model.lead')->getEntity(\$contactId),
            'Keep an unidentified lead that is still considered active'
        );
    }

    /**
     * @throws \\Exception
     */
    public function testGdprMaintenanceCommand(): void
    {
        \$identified           = '-4 years';
        \$lastActive           = '-2 years';
        \$NotPurgeableContact  = \$this->createLead(\$lastActive, \$identified);
        \$contactId            = \$NotPurgeableContact->getId();

        \$this->testSymfonyCommand('mautic:maintenance:cleanup', ['--gdpr' => 1, '--no-interaction' => true]);
        \$this->assertNotNull(
            \$this->getContainer()->get('mautic.lead.model.lead')->getEntity(\$contactId),
            'Keep an identified contact that is still considered active.'
        );

        \$lastActive       = '-4 years';
        \$purgeableContact = \$this->createLead(\$lastActive, \$identified);
        \$contactId        = \$purgeableContact->getId();

        \$this->testSymfonyCommand('mautic:maintenance:cleanup', ['--gdpr' => 1, '--no-interaction' => true]);
        \$this->assertNull(
            \$this->getContainer()->get('mautic.lead.model.lead')->getEntity(\$contactId),
            'Purge an identified contact that is considered inactive'
        );

        \$this->setUpSymfony(\$this->configParams + ['gdpr_user_purge_threshold' => '1825']);

        \$NotPurgeableContact  = \$this->createLead(\$lastActive, \$identified);
        \$contactId            = \$NotPurgeableContact->getId();

        \$this->testSymfonyCommand('mautic:maintenance:cleanup', ['--gdpr' => 1, '--no-interaction' => true]);
        \$this->assertNotNull(
            \$this->getContainer()->get('mautic.lead.model.lead')->getEntity(\$contactId),
            'Keep an identified contact that is still considered active because of custom \"gdpr_user_purge_threshold\".'
        );
    }

    /**
     * @throws \\Doctrine\\ORM\\Exception\\ORMException
     * @throws \\Doctrine\\ORM\\OptimisticLockException
     */
    protected function createLead(string \$lastActive, ?string \$identified = null): Lead
    {
        \$lead = new Lead();
        \$lead->setLastActive(new \\DateTime(\$lastActive));

        if (is_string(\$identified)) {
            \$lead->setDateIdentified(new \\DateTime(\$identified));
        }

        \$this->em->persist(\$lead);
        \$this->em->flush();

        return \$lead;
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
        return "@bundles/CoreBundle/Tests/Command/CleanupMaintenanceCommandTest.php";
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
        return new Source("", "@bundles/CoreBundle/Tests/Command/CleanupMaintenanceCommandTest.php", "/app/docroot/app/bundles/CoreBundle/Tests/Command/CleanupMaintenanceCommandTest.php");
    }
}
