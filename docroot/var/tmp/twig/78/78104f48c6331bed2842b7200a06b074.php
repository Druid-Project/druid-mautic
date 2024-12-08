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

/* @bundles/NotificationBundle/Form/Type/NotificationSendType.php */
class __TwigTemplate_093ec309faa0f2f8dcab95778a5711a6 extends Template
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

use Symfony\\Component\\Form\\AbstractType;
use Symfony\\Component\\Form\\Extension\\Core\\Type\\ButtonType;
use Symfony\\Component\\Form\\FormBuilderInterface;
use Symfony\\Component\\OptionsResolver\\OptionsResolver;
use Symfony\\Component\\Routing\\RouterInterface;
use Symfony\\Component\\Validator\\Constraints\\NotBlank;

/**
 * @extends AbstractType<array<mixed>>
 */
class NotificationSendType extends AbstractType
{
    public function __construct(
        protected RouterInterface \$router
    ) {
    }

    public function buildForm(FormBuilderInterface \$builder, array \$options): void
    {
        \$builder->add(
            'notification',
            NotificationListType::class,
            [
                'label'      => 'mautic.notification.send.selectnotifications',
                'label_attr' => ['class' => 'control-label'],
                'attr'       => [
                    'class'    => 'form-control',
                    'tooltip'  => 'mautic.notification.choose.notifications',
                    'onchange' => 'Mautic.disabledNotificationAction()',
                ],
                'multiple'    => false,
                'constraints' => [
                    new NotBlank(
                        ['message' => 'mautic.notification.choosenotification.notblank']
                    ),
                ],
            ]
        );

        if (!empty(\$options['update_select'])) {
            \$windowUrl = \$this->router->generate('mautic_notification_action', [
                'objectAction' => 'new',
                'contentOnly'  => 1,
                'updateSelect' => \$options['update_select'],
            ]);

            \$builder->add(
                'newNotificationButton',
                ButtonType::class,
                [
                    'attr' => [
                        'class'   => 'btn btn-primary btn-nospin',
                        'onclick' => 'Mautic.loadNewWindow({
                            \"windowUrl\": \"'.\$windowUrl.'\"
                        })',
                        'icon' => 'ri-add-line',
                    ],
                    'label' => 'mautic.notification.send.new.notification',
                ]
            );

            if (array_key_exists('data', \$options)) {
                if (is_array(\$options['data']) && array_key_exists('notification', \$options['data'])) {
                    \$notification = \$options['data']['notification'];
                }
            }

            // create button edit notification
            \$windowUrlEdit = \$this->router->generate('mautic_notification_action', [
                'objectAction' => 'edit',
                'objectId'     => 'notificationId',
                'contentOnly'  => 1,
                'updateSelect' => \$options['update_select'],
            ]);

            \$builder->add(
                'editNotificationButton',
                ButtonType::class,
                [
                    'attr' => [
                        'class'    => 'btn btn-primary btn-nospin',
                        'onclick'  => 'Mautic.loadNewWindow(Mautic.standardNotificationUrl({\"windowUrl\": \"'.\$windowUrlEdit.'\"}))',
                        'disabled' => !isset(\$notification),
                        'icon'     => 'ri-edit-line',
                    ],
                    'label' => 'mautic.notification.send.edit.notification',
                ]
            );
        }
    }

    public function configureOptions(OptionsResolver \$resolver): void
    {
        \$resolver->setDefined(['update_select']);
    }

    /**
     * @return string
     */
    public function getBlockPrefix()
    {
        return 'notificationsend_list';
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
        return "@bundles/NotificationBundle/Form/Type/NotificationSendType.php";
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
        return new Source("", "@bundles/NotificationBundle/Form/Type/NotificationSendType.php", "/app/docroot/app/bundles/NotificationBundle/Form/Type/NotificationSendType.php");
    }
}
