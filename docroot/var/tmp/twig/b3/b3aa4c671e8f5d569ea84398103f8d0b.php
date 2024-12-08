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

/* @bundles/UserBundle/Entity/UserTokenRepository.php */
class __TwigTemplate_22967430e1f483622ef2d12cbe00dfa2 extends Template
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

namespace Mautic\\UserBundle\\Entity;

use Mautic\\CoreBundle\\Entity\\CommonRepository;

/**
 * @extends CommonRepository<UserToken>
 */
final class UserTokenRepository extends CommonRepository implements UserTokenRepositoryInterface
{
    /**
     * @param string \$secret
     */
    public function isSecretUnique(\$secret): bool
    {
        \$tokens = \$this->createQueryBuilder('ut')
            ->where('ut.secret = :secret')
            ->setParameter('secret', \$secret)
            ->setMaxResults(1)
            ->getQuery()->execute();

        return 0 === count(\$tokens);
    }

    public function verify(UserToken \$token): bool
    {
        /** @var UserToken[] \$userTokens */
        \$userTokens = \$this->createQueryBuilder('ut')
            ->where('ut.user = :user AND ut.authorizator = :authorizator AND ut.secret = :secret AND (ut.expiration IS NULL OR ut.expiration >= :now)')
            ->setParameter('user', \$token->getUser())
            ->setParameter('authorizator', \$token->getAuthorizator())
            ->setParameter('secret', \$token->getSecret())
            ->setParameter('now', new \\DateTime())
            ->setMaxResults(1)
            ->getQuery()->execute();
        \$verified = (0 !== count(\$userTokens));
        if (false === \$verified) {
            return false;
        }
        \$userToken = reset(\$userTokens);
        if (\$userToken->isOneTimeOnly()) {
            \$this->deleteEntity(\$userToken);
        }

        return true;
    }

    public function deleteExpired(\$isDryRun = false): int
    {
        \$qb = \$this->createQueryBuilder('ut');

        if (\$isDryRun) {
            \$qb->select('count(ut.id) as records');
        } else {
            \$qb->delete(UserToken::class, 'ut');
        }

        return (int) \$qb
            ->where('ut.expiration <= :current_datetime')
            ->setParameter('current_datetime', new \\DateTime())
            ->getQuery()
            ->execute();
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
        return "@bundles/UserBundle/Entity/UserTokenRepository.php";
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
        return new Source("", "@bundles/UserBundle/Entity/UserTokenRepository.php", "/app/docroot/app/bundles/UserBundle/Entity/UserTokenRepository.php");
    }
}
