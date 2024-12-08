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

/* @bundles/LeadBundle/Tests/Deduplicate/ContactMergerFunctionalTest.php */
class __TwigTemplate_e9f6910b85acd22adff51723aa256fee extends Template
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

namespace Mautic\\LeadBundle\\Tests\\Deduplicate;

use Doctrine\\ORM\\EntityManager;
use Mautic\\CoreBundle\\Test\\MauticMysqlTestCase;
use Mautic\\LeadBundle\\Deduplicate\\ContactMerger;
use Mautic\\LeadBundle\\Entity\\Lead;
use Mautic\\LeadBundle\\Model\\LeadModel;

final class ContactMergerFunctionalTest extends MauticMysqlTestCase
{
    public function testMergedContactFound(): void
    {
        \$model = static::getContainer()->get('mautic.lead.model.lead');
        \\assert(\$model instanceof LeadModel);

        \$merger = static::getContainer()->get('mautic.lead.merger');
        \\assert(\$merger instanceof ContactMerger);

        \$bob = new Lead();
        \$bob->setFirstname('Bob')
            ->setLastname('Smith')
            ->setEmail('bob.smith@test.com');
        \$model->saveEntity(\$bob);
        \$bobId = \$bob->getId();

        \$jane = new Lead();
        \$jane->setFirstname('Jane')
            ->setLastname('Smith')
            ->setEmail('jane.smith@test.com');
        \$model->saveEntity(\$jane);
        \$janeId = \$jane->getId();

        \$merger->merge(\$jane, \$bob);

        // Bob should have been merged into Jane
        \$jane = \$model->getEntity(\$janeId);
        \$this->assertEquals(\$janeId, \$jane->getId());

        // If Bob is queried, Jane should be returned
        \$jane = \$model->getEntity(\$bobId);
        \$this->assertEquals(\$janeId, \$jane->getId());

        // Merge Jane into a third contact
        \$joey = new Lead();
        \$joey->setFirstname('Joey')
            ->setLastname('Smith')
            ->setEmail('joey.smith@test.com');
        \$model->saveEntity(\$joey);
        \$joeyId = \$joey->getId();

        \$merger->merge(\$joey, \$jane);

        // Query for Bob which should now return Joey
        \$joey = \$model->getEntity(\$bobId);
        \$this->assertEquals(\$joeyId, \$joey->getId());

        // If Joey is deleted, querying for Bob or Jane should result in null
        \$model->deleteEntity(\$joey);
        \$bob = \$model->getEntity(\$bobId);
        \$this->assertNull(\$bob);
        \$jane = \$model->getEntity(\$janeId);
        \$this->assertNull(\$jane);
    }

    public function testMergedContactsPointsAreAccurate(): void
    {
        \$model = static::getContainer()->get('mautic.lead.model.lead');
        \\assert(\$model instanceof LeadModel);

        \$em = static::getContainer()->get('doctrine.orm.entity_manager');
        \\assert(\$em instanceof EntityManager);

        \$merger = static::getContainer()->get('mautic.lead.merger');
        \\assert(\$merger instanceof ContactMerger);

        // Startout Jane with 50 points
        \$jane = new Lead();
        \$jane->setFirstname('Jane')
            ->setLastname('Smith')
            ->setEmail('jane.smith@test.com')
            ->setPoints(50);

        \$model->saveEntity(\$jane);

        \$em->detach(\$jane);
        \$jane = \$model->getEntity(\$jane->getId());
        \$this->assertEquals(50, \$jane->getPoints());
        \$janeId = \$jane->getId();

        // Jane is currently a visitor on a different device with 3 points
        \$visitor = new Lead();
        \$visitor->setPoints(3);
        \$model->saveEntity(\$visitor);
        \$em->detach(\$visitor);
        \$visitor = \$model->getEntity(\$visitor->getId());
        \$this->assertEquals(3, \$visitor->getPoints());

        // Jane submits a form or something that identifies her so the visitor should be merged into Jane giving her 53 points
        \$jane = \$model->getEntity(\$janeId);
        // Jane should start out with 50 points
        \$this->assertEquals(50, \$jane->getPoints());
        // Jane should come out of the merge as Jane
        \$jane = \$merger->merge(\$jane, \$visitor);
        \$this->assertEquals(\$janeId, \$jane->getId());
        // Jane should now have 53 points
        \$this->assertEquals(53, \$jane->getPoints());
        \$em->detach(\$jane);
        \$em->detach(\$visitor);
        // Jane should still have 53 points
        \$jane = \$model->getEntity(\$janeId);
        \$this->assertEquals(53, \$jane->getPoints());

        // Jane is on another device again and gets 3 points
        \$visitor2 = new Lead();
        \$visitor2->setPoints(3);
        \$model->saveEntity(\$visitor2);
        \$em->detach(\$visitor2);
        \$visitor2 = \$model->getEntity(\$visitor2->getId());
        \$this->assertEquals(3, \$visitor2->getPoints());

        // Jane again identifies herself, gets merged into the new visitor and so should now have a total of 56 points
        \$jane = \$model->getEntity(\$janeId);
        \$jane = \$merger->merge(\$jane, \$visitor2);
        \$this->assertEquals(\$janeId, \$jane->getId());
        \$em->detach(\$jane);
        \$em->detach(\$visitor2);
        \$jane = \$model->getEntity(\$jane->getId());

        \$this->assertEquals(56, \$jane->getPoints());
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
        return "@bundles/LeadBundle/Tests/Deduplicate/ContactMergerFunctionalTest.php";
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
        return new Source("", "@bundles/LeadBundle/Tests/Deduplicate/ContactMergerFunctionalTest.php", "/app/docroot/app/bundles/LeadBundle/Tests/Deduplicate/ContactMergerFunctionalTest.php");
    }
}
