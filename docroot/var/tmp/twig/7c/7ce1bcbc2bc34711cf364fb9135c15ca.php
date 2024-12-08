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

/* @bundles/EmailBundle/Form/Type/BatchCategoryType.php */
class __TwigTemplate_759732842a93cb1933a1987d5bca637b extends Template
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

namespace Mautic\\EmailBundle\\Form\\Type;

use Doctrine\\DBAL\\ArrayParameterType;
use Doctrine\\ORM\\QueryBuilder;
use Mautic\\CategoryBundle\\Entity\\Category;
use Mautic\\CategoryBundle\\Entity\\CategoryRepository;
use Mautic\\CoreBundle\\Form\\Type\\FormButtonsType;
use Symfony\\Bridge\\Doctrine\\Form\\Type\\EntityType;
use Symfony\\Component\\Form\\AbstractType;
use Symfony\\Component\\Form\\Extension\\Core\\Type\\HiddenType;
use Symfony\\Component\\Form\\FormBuilderInterface;

/**
 * @extends AbstractType<mixed>
 */
class BatchCategoryType extends AbstractType
{
    public function buildForm(FormBuilderInterface \$builder, array \$options): void
    {
        \$builder->add(
            'newCategory',
            EntityType::class,
            [
                'class'         => Category::class,
                'choice_label'  => 'title',
                'required'      => true,
                'label_attr'    => ['class' => 'control-label'],
                'attr'          => ['class' => 'form-control'],
                'query_builder' => function (CategoryRepository \$cr): QueryBuilder {
                    \$qb =\$cr->createQueryBuilder('c');

                    return \$qb->orderBy('c.title', 'ASC')
                        ->where(\$qb->expr()->in('c.bundle', ':bundles'))
                        ->setParameter('bundles', ['email', 'global'], ArrayParameterType::INTEGER);
                },
            ]
        );

        \$builder->add('ids', HiddenType::class);

        \$builder->add(
            'buttons',
            FormButtonsType::class,
            [
                'apply_text'     => false,
                'save_text'      => 'mautic.core.form.save',
                'cancel_onclick' => 'javascript:void(0);',
                'cancel_attr'    => [
                    'data-dismiss' => 'modal',
                ],
            ]
        );

        if (!empty(\$options['action'])) {
            \$builder->setAction(\$options['action']);
        }
    }

    public function getBlockPrefix(): string
    {
        return 'email_batch';
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
        return "@bundles/EmailBundle/Form/Type/BatchCategoryType.php";
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
        return new Source("", "@bundles/EmailBundle/Form/Type/BatchCategoryType.php", "/app/docroot/app/bundles/EmailBundle/Form/Type/BatchCategoryType.php");
    }
}
