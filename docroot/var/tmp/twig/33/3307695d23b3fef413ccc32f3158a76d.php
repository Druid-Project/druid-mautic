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

/* @bundles/PointBundle/Form/Type/GroupListType.php */
class __TwigTemplate_a1cfe5673679cab6e38debe27f1ff7f2 extends Template
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

namespace Mautic\\PointBundle\\Form\\Type;

use Doctrine\\ORM\\EntityManager;
use Mautic\\CoreBundle\\Form\\DataTransformer\\IdToEntityModelTransformer;
use Mautic\\PointBundle\\Entity\\Group;
use Mautic\\PointBundle\\Entity\\GroupRepository;
use Symfony\\Component\\Form\\AbstractType;
use Symfony\\Component\\Form\\Extension\\Core\\Type\\ChoiceType;
use Symfony\\Component\\Form\\FormBuilderInterface;
use Symfony\\Component\\OptionsResolver\\Options;
use Symfony\\Component\\OptionsResolver\\OptionsResolver;

/**
 * @extends AbstractType<GroupListType>
 */
class GroupListType extends AbstractType
{
    public function __construct(
        private EntityManager \$em,
        private GroupRepository \$repo
    ) {
    }

    public function buildForm(FormBuilderInterface \$builder, array \$options): void
    {
        if (true === \$options['return_entity']) {
            \$transformer = new IdToEntityModelTransformer(\$this->em, Group::class, 'id');
            \$builder->addModelTransformer(\$transformer);
        }
    }

    public function configureOptions(OptionsResolver \$resolver): void
    {
        \$resolver->setDefaults([
            'choices' => function (Options \$options): array {
                \$groups  = \$this->repo->getEntities();
                \$choices = [];
                foreach (\$groups as \$l) {
                    \$choices[\$l->getName()] = \$l->getId();
                }

                return \$choices;
            },
            'label'             => 'mautic.point.group.form.group',
            'label_attr'        => ['class' => 'control-label'],
            'multiple'          => false,
            'required'          => false,
            'return_entity'     => true,
        ]);
    }

    public function getParent(): string
    {
        return ChoiceType::class;
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
        return "@bundles/PointBundle/Form/Type/GroupListType.php";
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
        return new Source("", "@bundles/PointBundle/Form/Type/GroupListType.php", "/app/docroot/app/bundles/PointBundle/Form/Type/GroupListType.php");
    }
}
