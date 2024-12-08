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

/* @bundles/NotificationBundle/Form/Type/MobileNotificationType.php */
class __TwigTemplate_7b1ece02337014dbb207773677e08fd3 extends Template
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

namespace Mautic\\NotificationBundle\\Form\\Type;

use Mautic\\CategoryBundle\\Form\\Type\\CategoryListType;
use Mautic\\CoreBundle\\Form\\EventListener\\CleanFormSubscriber;
use Mautic\\CoreBundle\\Form\\EventListener\\FormExitSubscriber;
use Mautic\\CoreBundle\\Form\\Type\\FormButtonsType;
use Mautic\\CoreBundle\\Form\\Type\\PublishDownDateType;
use Mautic\\CoreBundle\\Form\\Type\\PublishUpDateType;
use Mautic\\CoreBundle\\Form\\Type\\YesNoButtonGroupType;
use Mautic\\EmailBundle\\Form\\Type\\EmailUtmTagsType;
use Mautic\\NotificationBundle\\Entity\\Notification;
use Symfony\\Component\\Form\\AbstractType;
use Symfony\\Component\\Form\\Extension\\Core\\Type\\HiddenType;
use Symfony\\Component\\Form\\Extension\\Core\\Type\\LocaleType;
use Symfony\\Component\\Form\\Extension\\Core\\Type\\TextareaType;
use Symfony\\Component\\Form\\Extension\\Core\\Type\\TextType;
use Symfony\\Component\\Form\\Extension\\Core\\Type\\UrlType;
use Symfony\\Component\\Form\\FormBuilderInterface;
use Symfony\\Component\\OptionsResolver\\OptionsResolver;

/**
 * @extends AbstractType<Notification>
 */
class MobileNotificationType extends AbstractType
{
    public function buildForm(FormBuilderInterface \$builder, array \$options): void
    {
        \$builder->addEventSubscriber(new CleanFormSubscriber(['content' => 'html', 'customHtml' => 'html']));
        \$builder->addEventSubscriber(new FormExitSubscriber('notification.notification', \$options));

        \$builder->add(
            'name',
            TextType::class,
            [
                'label'      => 'mautic.notification.form.internal.name',
                'label_attr' => ['class' => 'control-label'],
                'attr'       => ['class' => 'form-control'],
            ]
        );

        \$builder->add(
            'description',
            TextareaType::class,
            [
                'label'      => 'mautic.notification.form.internal.description',
                'label_attr' => ['class' => 'control-label'],
                'attr'       => ['class' => 'form-control'],
                'required'   => false,
            ]
        );

        \$builder->add(
            'heading',
            TextType::class,
            [
                'label'      => 'mautic.notification.form.mobile.heading',
                'label_attr' => ['class' => 'control-label'],
                'attr'       => ['class' => 'form-control'],
            ]
        );

        \$builder->add(
            'message',
            TextareaType::class,
            [
                'label'      => 'mautic.notification.form.message',
                'label_attr' => ['class' => 'control-label'],
                'attr'       => [
                    'class' => 'form-control',
                    'rows'  => 6,
                ],
            ]
        );

        \$builder->add(
            'url',
            UrlType::class,
            [
                'label'      => 'mautic.notification.form.mobile.url',
                'label_attr' => ['class' => 'control-label'],
                'attr'       => [
                    'class'   => 'form-control',
                    'tooltip' => 'mautic.notification.form.mobile.url.tooltip',
                ],
                'required' => false,
            ]
        );

        \$builder->add(
            'utmTags',
            EmailUtmTagsType::class,
            [
                'label'      => 'mautic.email.utm_tags',
                'label_attr' => ['class' => 'control-label'],
                'attr'       => [
                    'class'   => 'form-control',
                    'tooltip' => 'mautic.email.utm_tags.tooltip',
                ],
                'required' => false,
            ]
        );

        \$builder->add('isPublished', YesNoButtonGroupType::class);
        \$builder->add('publishUp', PublishUpDateType::class);
        \$builder->add('publishDown', PublishDownDateType::class);

        // add category
        \$builder->add(
            'category',
            CategoryListType::class,
            [
                'bundle' => 'notification',
            ]
        );

        \$builder->add(
            'language',
            LocaleType::class,
            [
                'label'      => 'mautic.core.language',
                'label_attr' => ['class' => 'control-label'],
                'attr'       => [
                    'class' => 'form-control',
                ],
                'required' => false,
            ]
        );

        \$builder->add('buttons', FormButtonsType::class);

        if (!empty(\$options['update_select'])) {
            \$builder->add(
                'buttons',
                FormButtonsType::class,
                [
                    'apply_text' => false,
                ]
            );
            \$builder->add(
                'updateSelect',
                HiddenType::class,
                [
                    'data'   => \$options['update_select'],
                    'mapped' => false,
                ]
            );
        } else {
            \$builder->add(
                'buttons',
                FormButtonsType::class
            );
        }

        if (!empty(\$options['action'])) {
            \$builder->setAction(\$options['action']);
        }

        \$builder->add(
            'mobile',
            HiddenType::class,
            [
                'data' => 1,
            ]
        );

        \$builder->add(
            'mobileSettings',
            MobileNotificationDetailsType::class
        );
    }

    public function configureOptions(OptionsResolver \$resolver): void
    {
        \$resolver->setDefaults(
            [
                'data_class' => Notification::class,
            ]
        );

        \$resolver->setDefined(['update_select']);
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
        return "@bundles/NotificationBundle/Form/Type/MobileNotificationType.php";
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
        return new Source("", "@bundles/NotificationBundle/Form/Type/MobileNotificationType.php", "/app/docroot/app/bundles/NotificationBundle/Form/Type/MobileNotificationType.php");
    }
}
