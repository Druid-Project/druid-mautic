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

/* @bundles/InstallBundle/InstallFixtures/ORM/LeadFieldData.php */
class __TwigTemplate_3afdceecba74a6e54ff162fad5a5db16 extends Template
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

namespace Mautic\\InstallBundle\\InstallFixtures\\ORM;

use Doctrine\\Bundle\\FixturesBundle\\FixtureGroupInterface;
use Doctrine\\Common\\DataFixtures\\AbstractFixture;
use Doctrine\\Common\\DataFixtures\\OrderedFixtureInterface;
use Doctrine\\Persistence\\ObjectManager;
use Mautic\\LeadBundle\\Entity\\LeadField;
use Mautic\\LeadBundle\\Model\\FieldModel;
use Symfony\\Contracts\\Translation\\TranslatorInterface;

class LeadFieldData extends AbstractFixture implements OrderedFixtureInterface, FixtureGroupInterface
{
    public function __construct(
        private TranslatorInterface \$translator
    ) {
    }

    public static function getGroups(): array
    {
        return ['group_install', 'group_mautic_install_data'];
    }

    /**
     * @throws \\Doctrine\\DBAL\\Schema\\SchemaException
     */
    public function load(ObjectManager \$manager): void
    {
        \$fieldGroups['lead']    = FieldModel::\$coreFields;
        \$fieldGroups['company'] = FieldModel::\$coreCompanyFields;

        foreach (\$fieldGroups as \$fields) {
            \$order = 1;
            foreach (\$fields as \$alias => \$field) {
                \$type = \$field['type'] ?? 'text';

                \$entity = new LeadField();
                \$entity->setLabel(\$this->translator->trans('mautic.lead.field.'.\$alias, [], 'fixtures'));
                \$entity->setGroup(\$field['group'] ?? 'core');
                \$entity->setOrder(\$order);
                \$entity->setAlias(\$alias);
                \$entity->setIsRequired(\$field['required'] ?? false);
                \$entity->setType(\$type);
                \$entity->setObject(\$field['object']);
                \$entity->setIsUniqueIdentifer(!empty(\$field['unique']));
                \$entity->setProperties(\$field['properties'] ?? []);
                \$entity->setIsFixed(!empty(\$field['fixed']));
                \$entity->setIsListable(!empty(\$field['listable']));
                \$entity->setIsShortVisible(!empty(\$field['short']));

                if (isset(\$field['default'])) {
                    \$entity->setDefaultValue(\$field['default']);
                }

                \$manager->persist(\$entity);
                \$manager->flush();

                if (!\$this->hasReference('leadfield-'.\$alias)) {
                    \$this->addReference('leadfield-'.\$alias, \$entity);
                }
                ++\$order;
            }
        }
    }

    public function getOrder()
    {
        return 4;
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
        return "@bundles/InstallBundle/InstallFixtures/ORM/LeadFieldData.php";
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
        return new Source("", "@bundles/InstallBundle/InstallFixtures/ORM/LeadFieldData.php", "/app/docroot/app/bundles/InstallBundle/InstallFixtures/ORM/LeadFieldData.php");
    }
}
