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

/* @bundles/ChannelBundle/Form/Type/MessageType.php */
class __TwigTemplate_9a36e13a95b651c2faaaef55ce377418 extends Template
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

use Mautic\\ChannelBundle\\Entity\\Channel;
use Mautic\\ChannelBundle\\Entity\\Message;
use Mautic\\ChannelBundle\\Model\\MessageModel;
use Mautic\\CoreBundle\\Form\\Type\\AbstractFormStandardType;
use Mautic\\CoreBundle\\Security\\Permissions\\CorePermissions;
use Symfony\\Component\\Form\\Extension\\Core\\Type\\CollectionType;
use Symfony\\Component\\Form\\FormBuilderInterface;
use Symfony\\Component\\OptionsResolver\\OptionsResolver;
use Symfony\\Component\\Validator\\Constraints\\Valid;

class MessageType extends AbstractFormStandardType
{
    public function __construct(
        protected MessageModel \$model,
        CorePermissions \$security
    ) {
        \$this->security = \$security;
    }

    public function buildForm(FormBuilderInterface \$builder, array \$options): void
    {
        // Add standard fields
        \$options = array_merge(\$options, ['model_name' => 'channel.message', 'permission_base' => 'channel:messages']);
        parent::buildForm(\$builder, \$options);

        // Ensure that all channels exist
        /** @var Message \$message */
        \$message         = \$options['data'];
        \$channels        = \$this->model->getChannels();
        \$messageChannels = \$message->getChannels();

        foreach (\$channels as \$channelType => \$channel) {
            if (!isset(\$messageChannels[\$channelType])) {
                \$message->addChannel(
                    (new Channel())
                        ->setChannel(\$channelType)
                        ->setMessage(\$message)
                );
            }
        }

        \$builder->add(
            'channels',
            CollectionType::class,
            [
                'label'         => false,
                'allow_add'     => true,
                'allow_delete'  => false,
                'prototype'     => false,
                'entry_type'    => ChannelType::class,
                'by_reference'  => false,
                'entry_options' => [
                    'channels' => \$channels,
                ],
                'constraints' => [
                    new Valid(),
                ],
            ]
        );
    }

    public function configureOptions(OptionsResolver \$resolver): void
    {
        \$resolver->setDefaults(
            [
                'data_class'      => Message::class,
                'category_bundle' => 'messages',
            ]
        );
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
        return "@bundles/ChannelBundle/Form/Type/MessageType.php";
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
        return new Source("", "@bundles/ChannelBundle/Form/Type/MessageType.php", "/app/docroot/app/bundles/ChannelBundle/Form/Type/MessageType.php");
    }
}
