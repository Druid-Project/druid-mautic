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

/* @bundles/ChannelBundle/Config/config.php */
class __TwigTemplate_ba78d87cf6dab999297687a50428beea extends Template
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

return [
    'routes' => [
        'main' => [
            'mautic_message_index' => [
                'path'       => '/messages/{page}',
                'controller' => 'Mautic\\ChannelBundle\\Controller\\MessageController::indexAction',
            ],
            'mautic_message_contacts' => [
                'path'       => '/messages/contacts/{objectId}/{channel}/{page}',
                'controller' => 'Mautic\\ChannelBundle\\Controller\\MessageController::contactsAction',
            ],
            'mautic_message_action' => [
                'path'       => '/messages/{objectAction}/{objectId}',
                'controller' => 'Mautic\\ChannelBundle\\Controller\\MessageController::executeAction',
            ],
            'mautic_channel_batch_contact_set' => [
                'path'       => '/channels/batch/contact/set',
                'controller' => 'Mautic\\ChannelBundle\\Controller\\BatchContactController::setAction',
            ],
            'mautic_channel_batch_contact_view' => [
                'path'       => '/channels/batch/contact/view',
                'controller' => 'Mautic\\ChannelBundle\\Controller\\BatchContactController::indexAction',
            ],
        ],
        'api' => [
            'mautic_api_messagetandard' => [
                'standard_entity' => true,
                'name'            => 'messages',
                'path'            => '/messages',
                'controller'      => Mautic\\ChannelBundle\\Controller\\Api\\MessageApiController::class,
            ],
        ],
        'public' => [
        ],
    ],

    'menu' => [
        'main' => [
            'mautic.channel.messages' => [
                'route'    => 'mautic_message_index',
                'access'   => ['channel:messages:viewown', 'channel:messages:viewother'],
                'parent'   => 'mautic.core.channels',
                'priority' => 110,
            ],
        ],
        'admin' => [
        ],
        'profile' => [
        ],
        'extra' => [
        ],
    ],

    'categories' => [
        'messages' => null,
    ],

    'services' => [
        'helpers' => [
            'mautic.channel.helper.channel_list' => [
                'class'     => Mautic\\ChannelBundle\\Helper\\ChannelListHelper::class,
                'arguments' => [
                    'event_dispatcher',
                    'translator',
                ],
                'alias' => 'channel',
            ],
        ],
    ],

    'parameters' => [
    ],
];
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@bundles/ChannelBundle/Config/config.php";
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
        return new Source("", "@bundles/ChannelBundle/Config/config.php", "/app/docroot/app/bundles/ChannelBundle/Config/config.php");
    }
}
