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

/* @bundles/LeadBundle/Tests/Model/SetFrequencyRulesFunctionalTest.php */
class __TwigTemplate_888249cb58b0df30c864578fb6d31665 extends Template
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

use Mautic\\CategoryBundle\\Entity\\Category;
use Mautic\\CoreBundle\\Test\\MauticMysqlTestCase;
use Mautic\\CoreBundle\\Tests\\Functional\\CreateTestEntitiesTrait;
use Mautic\\LeadBundle\\Model\\LeadModel;

final class SetFrequencyRulesFunctionalTest extends MauticMysqlTestCase
{
    use CreateTestEntitiesTrait;

    public function testSetFrequencyRulesForCategorySubscriptionUnsubscription(): void
    {
        \$categoriesFlags = [
            'one'   => true,
            'two'   => false,
            'three' => true,
            'four'  => true,
            'five'  => false,
        ];

        \$categories = \$this->createCategories(\$categoriesFlags);

        \$lead = \$this->createLead('John', 'Doe', 'some@test.com');

        \$this->em->flush();

        // Subscribe categories.
        \$categoriesToSubscribe   = [];
        \$categoriesToUnsubscribe = [];
        foreach (\$categories as \$category) {
            \$categoriesToSubscribe[\$category->getId()] = \$category->getId();
            if (!\$categoriesFlags[\$category->getTitle()]) {
                \$categoriesToUnsubscribe[\$category->getId()] = \$category->getId();
            }
        }

        \$data = [
            'global_categories' => array_keys(\$categoriesToSubscribe),
            'lead_lists'        => [],
        ];

        /** @var LeadModel \$model */
        \$model = static::getContainer()->get('mautic.lead.model.lead');
        \$model->setFrequencyRules(\$lead, \$data, [], []);

        \$subscribedCategories   = \$model->getLeadCategories(\$lead);
        \$this->assertEmpty(array_diff(\$subscribedCategories, array_keys(\$categoriesToSubscribe)));

        // Unsubscribe categories.
        \$data['global_categories'] = array_keys(\$categoriesToUnsubscribe);
        \$model->setFrequencyRules(\$lead, \$data, [], []);

        \$unsubscribedCategories = \$model->getUnsubscribedLeadCategoriesIds(\$lead);
        \$this->assertEmpty(array_diff(\$unsubscribedCategories, array_keys(\$categoriesToSubscribe)));
    }

    /**
     * @param mixed[] \$cats
     *
     * @return Category[]
     */
    private function createCategories(array \$cats): array
    {
        \$categories = [];
        foreach (\$cats as \$suffix => \$flag) {
            \$categories[\$suffix] = \$this->createCategory(\$suffix, \$suffix);
        }

        \$this->em->flush();

        return \$categories;
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
        return "@bundles/LeadBundle/Tests/Model/SetFrequencyRulesFunctionalTest.php";
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
        return new Source("", "@bundles/LeadBundle/Tests/Model/SetFrequencyRulesFunctionalTest.php", "/app/docroot/app/bundles/LeadBundle/Tests/Model/SetFrequencyRulesFunctionalTest.php");
    }
}
