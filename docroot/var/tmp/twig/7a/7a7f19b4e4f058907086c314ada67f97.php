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

/* @bundles/CoreBundle/Session/Storage/Handler/RedisSentinelSessionHandler.php */
class __TwigTemplate_4942ad6870262772e3b7b46db0fd40db extends Template
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

namespace Mautic\\CoreBundle\\Session\\Storage\\Handler;

use Mautic\\CoreBundle\\Helper\\CoreParametersHelper;
use Mautic\\CoreBundle\\Helper\\PRedisConnectionHelper;
use Predis\\Client;
use Predis\\Response\\ErrorInterface;
use Symfony\\Component\\HttpFoundation\\Session\\Storage\\Handler\\AbstractSessionHandler;

/**
 * @deprecated since Mautic 5.0, to be removed in 6.0 with no replacement.
 */
class RedisSentinelSessionHandler extends AbstractSessionHandler
{
    /**
     * @var Client Redis client
     */
    private Client \$redis;

    public function __construct(
        private array \$redisConfiguration,
        CoreParametersHelper \$coreParametersHelper
    ) {
        \$redisOptions = PRedisConnectionHelper::makeRedisOptions(\$redisConfiguration, 'session:'.\$coreParametersHelper->get('db_name').':');

        \$redisOptions['primaryOnly'] = \$coreParametersHelper->get('redis_primary_only');

        \$this->redis = PRedisConnectionHelper::createClient(PRedisConnectionHelper::getRedisEndpoints(\$redisConfiguration['url']), \$redisOptions);
    }

    protected function doRead(string \$sessionId): string
    {
        return \$this->redis->get(\$sessionId) ?: '';
    }

    protected function doWrite(string \$sessionId, string \$data): bool
    {
        \$expireTime = isset(\$this->redisConfiguration['session_expire_time']) ? (int) \$this->redisConfiguration['session_expire_time'] : 1_209_600;
        \$result     = \$this->redis->setEx(\$sessionId, \$expireTime, \$data);

        return \$result && !\$result instanceof ErrorInterface;
    }

    protected function doDestroy(string \$sessionId): bool
    {
        \$this->redis->del(\$sessionId);

        return true;
    }

    public function close(): bool
    {
        return true;
    }

    public function gc(\$maxlifetime): int|false
    {
        return 1;
    }

    public function updateTimestamp(\$sessionId, \$data): bool
    {
        \$expireTime = isset(\$this->redisConfiguration['session_expire_time']) ? (int) \$this->redisConfiguration['session_expire_time'] : 1_209_600;

        return (bool) \$this->redis->expire(\$sessionId, \$expireTime);
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
        return "@bundles/CoreBundle/Session/Storage/Handler/RedisSentinelSessionHandler.php";
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
        return new Source("", "@bundles/CoreBundle/Session/Storage/Handler/RedisSentinelSessionHandler.php", "/app/docroot/app/bundles/CoreBundle/Session/Storage/Handler/RedisSentinelSessionHandler.php");
    }
}
