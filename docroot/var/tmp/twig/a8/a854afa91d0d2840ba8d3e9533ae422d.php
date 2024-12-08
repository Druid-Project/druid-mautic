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

/* @bundles/ChannelBundle/Form/Type/MessageListType.php */
class __TwigTemplate_75bda49580fe613ab6679e56edda0843 extends Template
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

use Mautic\\CoreBundle\\Form\\Type\\EntityLookupType;
use Symfony\\Component\\Form\\AbstractType;
use Symfony\\Component\\OptionsResolver\\Options;
use Symfony\\Component\\OptionsResolver\\OptionsResolver;

/**
 * @extends AbstractType<mixed>
 */
class MessageListType extends AbstractType
{
    public function configureOptions(OptionsResolver \$resolver): void
    {
        \$resolver->setDefaults(
            [
                'required'           => false,
                'modal_route'        => 'mautic_message_action',
                'model'              => 'channel.message',
                'multiple'           => true,
                'ajax_lookup_action' => function (Options \$options): string {
                    \$query = [
                        'is_published' => \$options['is_published'],
                    ];

                    return 'channel:getLookupChoiceList&'.http_build_query(\$query);
                },
                'model_lookup_method' => 'getLookupResults',
                'lookup_arguments'    => fn (Options \$options): array => [
                    'type'    => 'channel.message',
                    'filter'  => '\$data',
                    'limit'   => 0,
                    'start'   => 0,
                    'options' => [
                        'is_published' => \$options['is_published'],
                    ],
                ],
                'is_published' => true,
            ]
        );
    }

    /**
     * @return string
     */
    public function getParent()
    {
        return EntityLookupType::class;
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
        return "@bundles/ChannelBundle/Form/Type/MessageListType.php";
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
        return new Source("", "@bundles/ChannelBundle/Form/Type/MessageListType.php", "/app/docroot/app/bundles/ChannelBundle/Form/Type/MessageListType.php");
    }
}
