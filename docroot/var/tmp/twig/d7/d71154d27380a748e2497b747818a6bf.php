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

/* @bundles/UserBundle/Form/Type/RoleType.php */
class __TwigTemplate_8c663021b562e031c388c36eb7b8451e extends Template
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

namespace Mautic\\UserBundle\\Form\\Type;

use Mautic\\CoreBundle\\Form\\EventListener\\CleanFormSubscriber;
use Mautic\\CoreBundle\\Form\\EventListener\\FormExitSubscriber;
use Mautic\\CoreBundle\\Form\\Type\\FormButtonsType;
use Mautic\\CoreBundle\\Form\\Type\\YesNoButtonGroupType;
use Mautic\\UserBundle\\Entity\\Role;
use Symfony\\Component\\Form\\AbstractType;
use Symfony\\Component\\Form\\Extension\\Core\\Type\\TextareaType;
use Symfony\\Component\\Form\\Extension\\Core\\Type\\TextType;
use Symfony\\Component\\Form\\FormBuilderInterface;
use Symfony\\Component\\OptionsResolver\\OptionsResolver;
use Symfony\\Component\\Validator\\Constraints\\Valid;

/**
 * @extends AbstractType<RoleType>
 */
class RoleType extends AbstractType
{
    public function buildForm(FormBuilderInterface \$builder, array \$options): void
    {
        \$builder->addEventSubscriber(new CleanFormSubscriber(['description' => 'html']));
        \$builder->addEventSubscriber(new FormExitSubscriber('user.role', \$options));

        \$builder->add(
            'name',
            TextType::class,
            [
                'label'      => 'mautic.core.name',
                'label_attr' => ['class' => 'control-label'],
                'attr'       => ['class' => 'form-control'],
            ]
        );

        \$builder->add(
            'description',
            TextareaType::class,
            [
                'label'      => 'mautic.core.description',
                'label_attr' => ['class' => 'control-label'],
                'attr'       => ['class' => 'form-control editor'],
                'required'   => false,
            ]
        );

        \$builder->add('isAdmin', YesNoButtonGroupType::class, [
            'label' => 'mautic.user.role.form.isadmin',
            'attr'  => [
                'onchange' => 'Mautic.togglePermissionVisibility();',
                'tooltip'  => 'mautic.user.role.form.isadmin.tooltip',
            ],
        ]);

        // add a normal text field, but add your transformer to it
        \$hidden = (\$options['data']->isAdmin()) ? ' hide' : '';

        \$builder->add(
            'permissions',
            PermissionsType::class,
            [
                'label'    => 'mautic.user.role.permissions',
                'mapped'   => false, // we'll have to manually build the permissions for persisting
                'required' => false,
                'attr'     => [
                    'class' => \$hidden,
                ],
                'permissionsConfig' => \$options['permissionsConfig'],
            ]
        );

        \$builder->add('buttons', FormButtonsType::class);

        if (!empty(\$options['action'])) {
            \$builder->setAction(\$options['action']);
        }
    }

    public function configureOptions(OptionsResolver \$resolver): void
    {
        \$resolver->setDefaults([
            'data_class'        => Role::class,
            'constraints'       => [new Valid()],
            'permissionsConfig' => [],
        ]);
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
        return "@bundles/UserBundle/Form/Type/RoleType.php";
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
        return new Source("", "@bundles/UserBundle/Form/Type/RoleType.php", "/app/docroot/app/bundles/UserBundle/Form/Type/RoleType.php");
    }
}
