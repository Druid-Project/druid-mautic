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

/* @bundles/ChannelBundle/Form/Type/MessageSendType.php */
class __TwigTemplate_3bd7c2a2e0332eb65dc761748201dbe1 extends Template
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

namespace Mautic\\ChannelBundle\\Form\\Type;

use Mautic\\ChannelBundle\\Model\\MessageModel;
use Symfony\\Component\\Form\\AbstractType;
use Symfony\\Component\\Form\\Extension\\Core\\Type\\ButtonType;
use Symfony\\Component\\Form\\FormBuilderInterface;
use Symfony\\Component\\OptionsResolver\\OptionsResolver;
use Symfony\\Component\\Routing\\RouterInterface;
use Symfony\\Component\\Validator\\Constraints\\NotBlank;

/**
 * @extends AbstractType<mixed>
 */
class MessageSendType extends AbstractType
{
    public function __construct(
        protected RouterInterface \$router,
        protected MessageModel \$messageModel
    ) {
    }

    public function buildForm(FormBuilderInterface \$builder, array \$options): void
    {
        \$builder->add(
            'marketingMessage',
            MessageListType::class,
            [
                'label'       => 'mautic.channel.send.selectmessages',
                'label_attr'  => ['class' => 'control-label'],
                'multiple'    => false,
                'required'    => true,
                'constraints' => [
                    new NotBlank(
                        ['message' => 'mautic.channel.choosemessage.notblank']
                    ),
                ],
            ]
        );

        if (!empty(\$options['update_select'])) {
            \$windowUrl = \$this->router->generate(
                'mautic_message_action',
                [
                    'objectAction' => 'new',
                    'contentOnly'  => 1,
                    'updateSelect' => \$options['update_select'],
                ]
            );

            \$builder->add(
                'newMarketingMessageButton',
                ButtonType::class,
                [
                    'attr' => [
                        'class'   => 'btn btn-primary btn-nospin',
                        'onclick' => 'Mautic.loadNewWindow({windowUrl: \\''.\$windowUrl.'\\'})',
                        'icon'    => 'ri-add-line',
                    ],
                    'label' => 'mautic.channel.create.new.message',
                ]
            );

            // create button edit email
            \$windowUrlEdit = \$this->router->generate(
                'mautic_message_action',
                [
                    'objectAction' => 'edit',
                    'objectId'     => 'messageId',
                    'contentOnly'  => 1,
                    'updateSelect' => \$options['update_select'],
                ]
            );

            \$builder->add(
                'editMessageButton',
                ButtonType::class,
                [
                    'attr' => [
                        'class'    => 'btn btn-primary btn-nospin',
                        'onclick'  => 'Mautic.loadNewWindow({windowUrl: \\''.\$windowUrlEdit.'\\'})',
                        'disabled' => !isset(\$options['data']['message']),
                        'icon'     => 'ri-edit-line',
                    ],
                    'label' => 'mautic.channel.send.edit.message',
                ]
            );
        }
    }

    public function configureOptions(OptionsResolver \$resolver): void
    {
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
        return "@bundles/ChannelBundle/Form/Type/MessageSendType.php";
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
        return new Source("", "@bundles/ChannelBundle/Form/Type/MessageSendType.php", "/app/docroot/app/bundles/ChannelBundle/Form/Type/MessageSendType.php");
    }
}
