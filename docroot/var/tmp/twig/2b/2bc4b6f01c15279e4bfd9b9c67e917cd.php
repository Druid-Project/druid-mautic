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

/* @bundles/ChannelBundle/Helper/ChannelListHelper.php */
class __TwigTemplate_e60d9519dcfcf5fa20a4106eb34b9ec0 extends Template
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

namespace Mautic\\ChannelBundle\\Helper;

use Mautic\\ChannelBundle\\ChannelEvents;
use Mautic\\ChannelBundle\\Event\\ChannelEvent;
use Mautic\\CoreBundle\\Translation\\Translator;
use Symfony\\Component\\EventDispatcher\\EventDispatcherInterface;

class ChannelListHelper
{
    /**
     * @var array<string,string>
     */
    private array \$channels = [];

    /**
     * @var array<string,string[]>
     */
    private array \$featureChannels = [];

    public function __construct(
        private EventDispatcherInterface \$dispatcher,
        private Translator \$translator
    ) {
    }

    /**
     * Get contact channels.
     */
    public function getChannelList(): array
    {
        \$channels = [];
        foreach (\$this->getChannels() as \$channel => \$details) {
            \$channelName            = isset(\$details['label']) ? \$this->translator->trans(\$details['label']) : \$this->getChannelLabel(\$channel);
            \$channels[\$channelName] = \$channel;
        }

        return \$channels;
    }

    /**
     * @param bool \$listOnly
     */
    public function getFeatureChannels(\$features, \$listOnly = false): array
    {
        \$this->setupChannels();

        if (!is_array(\$features)) {
            \$features = [\$features];
        }
        \$channels = [];
        foreach (\$features as \$feature) {
            \$featureChannels = \$this->featureChannels[\$feature] ?? [];
            \$returnChannels  = [];
            foreach (\$featureChannels as \$channel => \$details) {
                if (!isset(\$details['label'])) {
                    \$featureChannels[\$channel]['label'] = \$this->getChannelLabel(\$channel);
                }

                if (\$listOnly) {
                    \$returnChannels[\$featureChannels[\$channel]['label']] = \$channel;
                } else {
                    \$returnChannels[\$channel] = \$featureChannels[\$channel];
                }
            }
            unset(\$featureChannels);
            \$channels[\$feature] = \$returnChannels;
        }

        if (1 === count(\$features)) {
            \$channels = \$channels[\$features[0]];
        }

        return \$channels;
    }

    /**
     * @return array
     */
    public function getChannels()
    {
        \$this->setupChannels();

        return \$this->channels;
    }

    public function getChannelLabel(\$channel): string
    {
        return match (true) {
            \$this->translator->hasId('mautic.channel.'.\$channel)      => \$this->translator->trans('mautic.channel.'.\$channel),
            \$this->translator->hasId('mautic.'.\$channel.'.'.\$channel) => \$this->translator->trans('mautic.'.\$channel.'.'.\$channel),
            default                                                   => ucfirst(\$channel),
        };
    }

    public function getName(): string
    {
        return 'chanel';
    }

    /**
     * Setup channels.
     *
     * Done this way to avoid a circular dependency error with LeadModel
     */
    private function setupChannels(): void
    {
        if (!empty(\$this->channels)) {
            return;
        }

        \$event                 = \$this->dispatcher->dispatch(new ChannelEvent(), ChannelEvents::ADD_CHANNEL);
        \$this->channels        = \$event->getChannelConfigs();
        \$this->featureChannels = \$event->getFeatureChannels();
        unset(\$event);
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
        return "@bundles/ChannelBundle/Helper/ChannelListHelper.php";
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
        return new Source("", "@bundles/ChannelBundle/Helper/ChannelListHelper.php", "/app/docroot/app/bundles/ChannelBundle/Helper/ChannelListHelper.php");
    }
}
